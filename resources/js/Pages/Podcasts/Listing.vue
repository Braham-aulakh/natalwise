<template>
  <app-layout title="My Profile">
    <div class="bg-primary">
      <pages-heading
        :heading="'podcasts'"
        :breadcrums="breadcrums"
        :textwhite="'true'"
      ></pages-heading>
    </div>
    <div class="stats">
      <div class="py-5">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2 class="text-center display-2 text-black fw-bold mb-2">
                {{ __("navigate podcasts") }}
              </h2>
              <div
                v-if="
                  getPageContentType('podcasts_page_description') == 'textarea'
                "
              >
                <div v-html="getPageContent('podcasts_page_description')"></div>
              </div>
              <div
                v-else-if="
                  getPageContentType('podcasts_page_description') == 'text'
                "
              >
                <p>{{ getPageContent("podcasts_page_description") ?? "-" }}</p>
              </div>
              <div v-else>
                <p class="fs-4 text-center text-black">
                  {{
                    __(
                      "Our team of highly skilled attorneys comprises seasoned professionals with extensive experience in their respective fields. We pride ourselves on recruiting top legal talent, ensuring that you receive the highest standard of representation. From complex litigation to intricate."
                    )
                  }}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="section py-0">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <find-podcast-bar
                @getPodcasts="onSearch"
                :is_redirect="false"
              ></find-podcast-bar>
            </div>
            <div class="col-md-12">
              <div class="row mx-0 mt-4">
                <div class="col-12" v-if="fetching">
                  <div class="row media-skeleton-cards">
                    <div class="col-md-4 mb-4">
                      <card-skeleton></card-skeleton>
                    </div>
                    <div class="col-md-4 mb-4">
                      <card-skeleton></card-skeleton>
                    </div>
                    <div class="col-md-4 mb-4">
                      <card-skeleton></card-skeleton>
                    </div>
                    <div class="col-md-4 mb-4">
                      <card-skeleton></card-skeleton>
                    </div>
                    <div class="col-md-4 mb-4">
                      <card-skeleton></card-skeleton>
                    </div>
                    <div class="col-md-4 mb-4">
                      <card-skeleton></card-skeleton>
                    </div>
                  </div>
                </div>
                <div class="col-12" v-if="!fetching">
                  <div v-if="podcasts.data.length > 0" class="row">
                    <podcast-card
                      :add_col="false"
                      v-for="podcast in podcasts.data"
                      :key="podcast.id"
                      :podcast="podcast"
                    ></podcast-card>
                  </div>
                  <div v-else class="row">
                    <div class="col-12 text-center mb-3">
                      <record-not-found></record-not-found>
                    </div>
                  </div>
                  <div
                    class="row my-4"
                    v-if="podcasts.meta.last_page != this.filter.page"
                  >
                    <div
                      class="col-md-12 d-flex align-items-center justify-content-center"
                    >
                      <button
                        @click="loadMore()"
                        class="btn btn-primary position-relative rounded-4 px-5 fw-bold mb-5"
                        :disabled="loading_more"
                      >
                        <span
                          :class="{
                            loader: loading_more,
                          }"
                          class="position-absolute"
                        ></span>
                        {{ __("load more") }}
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>
<script>
import { defineComponent } from "vue";
import PaginationMixin from "@/Mixins/PaginationMixin.vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import PageHeader from "@/Components/PageHeader.vue";
import Navbar from "@/Layouts/AppIncludes/Navbar.vue";
import FindPodcastBar from "@/Components/Podcasts/FindPodcastBar.vue";
import PodcastCard from "@/Components/Podcasts/PodcastCard.vue";
import RecordNotFound from "../../Components/Shared/RecordNotFound.vue";
import Breadcrums from "../../Components/Shared/Breadcrums.vue";
import CardSkeleton from "@/Components/Skeleton/CardSkeleton.vue";
import PagesHeading from "../../Components/PagesHeading.vue";
export default defineComponent({
  mixins: [PaginationMixin],
  components: {
    AppLayout,
    Navbar,
    PageHeader,
    PodcastCard,
    FindPodcastBar,
    RecordNotFound,
    Breadcrums,
    CardSkeleton,
    PagesHeading,
  },
  created() {},
  data() {
    return {
      podcasts: {},
      doctor: route().params.doctor ?? "",
      clinic: route().params.clinic ?? "",
      breadcrums: [
        {
          id: 1,
          name: this.__("Home"),
          link: "/",
        },
        {
          id: 2,
          name: this.__("podcasts"),
          link: "",
        },
      ],
    };
  },
  methods: {
    async getPaginatedData(loading_more = false) {
      await this.getPodcasts(loading_more);
    },
    getPodcasts(loading_more) {
      this.filter.doctor = this.doctor;
      this.filter.clinic = this.clinic;
      axios.post(this.route("getApiPodcasts"), this.filter).then((res) => {
        const data = res.data.data;
        if (loading_more) {
          this.podcasts.data = this.podcasts.data.concat(data.data);
        } else {
          this.podcasts.data = data.data;
        }
        this.podcasts.links = data.links;
        this.podcasts.meta = data.meta;
        this.fetching = false;
      });
    },
  },
});
</script>
