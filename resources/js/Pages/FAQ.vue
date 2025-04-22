<template>
  <app-layout :title="__n('faq')">
    <template #default>
      <div class="Top-Border">
        <pages-heading :heading="'faqs'" :breadcrums="breadcrums" :textwhite="'true'"></pages-heading>
      </div>
      <div class="pt-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-center section-header-sixteen ">
                <h2 class="">
                  {{ __("frequently asked questions") }}
                </h2>
                <p class="">{{
                  __("answer to commonly asked questions")
                }}</p>
                <!-- <p class="text-center mb-0">Discover The Best Doctors Near You</p> -->
              </div>

              <!-- <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center mb-0">
                                    <li class="breadcrumb-item">
                                        <a href="#" class="text-decoration-none">Home</a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">FAQs</li>
                                </ol>
                            </nav> -->
            </div>
          </div>
        </div>
      </div>
      <div class="section faqs-section pb-5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div v-if="getPageContentType('faq_page_description') == 'textarea'">
                <div v-html="getPageContent('faq_page_description')"></div>
              </div>
              <div v-else-if="getPageContentType('faq_page_description') == 'text'">
                <p>{{ getPageContent("faq_page_description") ?? "-" }}</p>
              </div>
              <div v-else class="col-12">----------------------</div>
            </div>
            <div class="col-12" v-if="faq_categories.length > 0">
              <div v-for="cat in faq_categories" :key="cat.id">
                <h3 class="fw-bold my-4">{{ cat.name }}</h3>
                <div class="accordion" id="accordionExample2">
                  <div class="accordion-item mb-2" v-for="(faq, index) in cat.faqs" :key="faq.id">
                    <h2 class="accordion-header" :id="'faq-heading' + faq.id">
                      <button class="accordion-button" :class="{ collapsed: activeIndex !== faq.id }"
                        @click="toggle(faq.id)">
                        {{ faq.name }}
                      </button>
                    </h2>
                    <div class="accordion-collapse" v-show="activeIndex === faq.id">
                      <div class="accordion-body">
                        <span v-html="faq.description"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div v-else class="col-12 text-center">
              <record-not-found></record-not-found>
            </div>
          </div>
        </div>
      </div>
    </template>
  </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import PageHeader from "@/Components/PageHeader.vue";
import Navbar from "@/Layouts/AppIncludes/Navbar.vue";
import RecordNotFound from "../Components/Shared/RecordNotFound.vue";
import PagesHeading from "../Components/PagesHeading.vue";
export default defineComponent({
  components: {
    AppLayout,
    Navbar,
    PageHeader,
    RecordNotFound,
    PagesHeading,
  },
  props: ["faq_categories"],
  data: () => ({
    activeIndex: null,
  }),
  methods: {
    toggle(id) {
      this.activeIndex = this.activeIndex === id ? null : id;
    },
  }
})

</script>
<style scoped>
.fqz-heading {
  font-size: 45px;
  font-weight: 600;
}

.section {
  padding-top: 0px !important;
}
</style>