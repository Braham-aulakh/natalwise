<template>
  <app-layout title="Home" :showLoader="showLoader">
    <template #header>
      <section class="hero-carousel position-relative overflow-hidden">
        <content-slider></content-slider>
      </section>
    </template>
    <FindDoctorBar :home="true">
    </FindDoctorBar>
    <!-- Specialities Section -->
    <section class="specialities-section-one">
      <div class="bg-color">
      </div>
    </section>
    <ExploreStart></ExploreStart>
    <WhyChooseUs></WhyChooseUs>
    <!-- OUR EXperts -->
    <spotlight-doctor-section></spotlight-doctor-section>

    <!-- <home-statistics-bar></home-statistics-bar> -->



    <!-- How it Works 4 Easy Steps to Get the  Right Solution -->
    <HowItWorksSection></HowItWorksSection>
<OurBlog></OurBlog>
    <!-- Our Blog -->

    <!-- App Section -->

    <div class="section pink-bg student-app mt-5">


      <div class="container">
        <div class="row">
          <div class="col-lg-4 position-relative">
            <div class="mobile-img text-end mb-4 mb-lg-0" data-aos="fade-right" data-aos-once="false"
              data-aos-duration="1500" data-aos-delay="500">
              <img src="@/images/home/appsection.png" alt class="img-fluid h-100" />
            </div>
          </div>
          <div class="col-md-8">
            <div class="d-flex ps-md-4 justify-content-center p-0 flex-column h-100" data-aos="fade-left"
              data-aos-once="false" data-aos-duration="1500" data-aos-delay="800">
              <div v-if="
                getPageContentType('app_section_description') == 'textarea'
              ">
                <div v-html="getPageContent('app_section_description')"></div>
              </div>
              <div v-else-if="
                getPageContentType('app_section_description') == 'text'
              ">
                <p>{{ getPageContent("app_section_description") ?? "-" }}</p>
              </div>
              <div v-else>
                <span class="fs-3">{{ __("Download") }}</span>
                <h2 class="display-6">
                  {{ __("Consultant App") }}
                </h2>
                <p>
                  Our commitment to excellence extends to our commitment to
                  integrity. We adhere to the highest ethical standards,
                  treating each case with the utmost professionalism and
                  confidentiality. We understand the gravity of the legal
                  matters we handle, and we approach them with the respect and
                  dedication they deserve.
                </p>
              </div>

              <div class="d-flex align-items-start flex-lg-row flex-column mt-3">
                <a href="#" v-if="
                  getPageContent('app_section_play_btn_text') != '' &&
                  getPageContent('app_section_play_btn_text') != null
                " class="btn pink-btn rounded-4 border border-secondary border-3 px-4 d-flex align-items-center me-3 mb-2 mb-md-0"
                  style="height: 70px; background-color: #F4A0B2;">
                  <img src="@/images/icons/playstore.png" width="40" class="me-2" />
                  <div class="d-flex flex-column align-items-start">
                    <div v-if="getPageContentType('app_section_play_btn_text') == 'textarea'">
                      <div class="text-start" v-html="getPageContent('app_section_play_btn_text')"></div>
                    </div>
                    <div v-else-if="getPageContentType('app_section_play_btn_text') == 'text'">
                      <p>{{ getPageContent("app_section_play_btn_text") ?? "-" }}</p>
                    </div>
                    <div v-else>
                      <span class="btn-label">{{ __("Get it on") }}</span>
                      <span class="btn-caption">{{ __("Google Store") }}</span>
                    </div>
                  </div>
                </a>

                <a v-if="
                  getPageContent('app_section_app_store_btn_text') != '' &&
                  getPageContent('app_section_app_store_btn_text') != null
                " href="#" class="btn pink-btn rounded-4 border border-secondary border-3 px-4 d-flex align-items-center"
                  style="height: 70px; background-color: #F4A0B2;">
                  <i class="bi bi-apple fs-1 me-3"></i>
                  <div v-if="getPageContentType('app_section_app_store_btn_text') == 'textarea'">
                    <div class="text-start" v-html="getPageContent('app_section_app_store_btn_text')"></div>
                  </div>
                  <div v-else-if="getPageContentType('app_section_app_store_btn_text') == 'text'">
                    <p>{{ getPageContent("app_section_app_store_btn_text") ?? "-" }}</p>
                  </div>
                  <div v-else>
                    <span class="btn-label">{{ __("Download on the") }}</span>
                    <span class="btn-caption">{{ __("App Store") }}</span>
                  </div>
                </a>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <doctors-tabs-section></doctors-tabs-section> -->
     
     <!-- explore different sections -->
    <home-static-cards-section></home-static-cards-section>
    <!-- Testimonials -->
    <review-section></review-section>
    <!-- Faqs Section -->
    <!-- <div class="section stats p-6" v-if="faqs.length > 0">  -->
      
      <div class="section stats p-6" v-show="faqs.length > 0">

      <div class="container">
        <div class="row">
          <div class="col-12 mb-5 text-center">
            <div v-if="
              getPageContentType('faqs_section_description') == 'textarea'
            ">
              <div v-html="getPageContent('faqs_section_description')"></div>
            </div>
            <div v-else-if="
              getPageContentType('faqs_section_description') == 'text'
            ">
              <p>{{ getPageContent("faqs_section_description") ?? "-" }}</p>
            </div>
            <div v-else>
              <span class="fs-3">{{ __("Find some ") }}</span>
              <h2 class="5">{{ __("Answer Questions") }}</h2>
              <p>
                When you choose Elite Legal Services, you are choosing a trusted
                partner dedicated to your success. Here are some frequently
                asked questions by some users. Feel free to add your questions
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5">
            <div class="rounded-5 mb-4 mb-md-0 overflow-hidden">
              <img class="faq-img" src="@/images/home/faq.png" alt="" />
            </div>
          </div>
          <div class="col-md-7">
            <div class="accordion home-faqs-accord" id="accordionPanelsStayOpenExample">
              <div class="accordion-item rounded-4 mb-3 border-0 shadow" v-for="item in faqs" :key="item.id">
                <h2 class="accordion-header border-0" :id="`panelsStayOpen-headingOne${item.id}`">
                  <button style="height: 4rem"
                    class="accordion-button border-0 rounded-5 shadow-none overflow-hidden bg-white collapsed"
                    type="button" data-bs-toggle="collapse" :data-bs-target="`#panelsStayOpen-collapseOne${item.id}`"
                    aria-expanded="false" :aria-controls="`panelsStayOpen-collapseOne${item.id}`">
                    <span class="fw-bold home-faqs-text">{{ item.name }}</span>
                  </button>
                </h2>
                <div :id="`panelsStayOpen-collapseOne${item.id}`"
                  class="accordion-collapse border-top border-primary border-1 mx-3 collapse"
                  :aria-labelledby="`panelsStayOpen-headingOne${item.id}`">
                  <div class="accordion-body subheading-fs fw-bold">
                    <div v-html="item.description"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row pt-5 justify-content-center">
          <div class="col-md-3 d-flex justify-content-center">
            <Link :href="route('faqs')" class="btn btn-outline-primary fw-medium fs-3 px-md-5 px-3 rounded-4">
            <span class="button-text">{{
              getPageContent("general_view_more_btn_text") ?? __("view more")
            }}</span>
            </Link>
          </div>
        </div>
        <!-- <div class="row pt-4 justify-content-center">
          <div class="col-md-3 d-flex justify-content-center">
            <Link href="#" class="learn-more btn position-relative">
              <span class="circle" aria-hidden="true">
                <span class="icon arrow"></span>
              </span>
              <span class="button-text">{{
                getPageContent("general_view_more_btn_text") ?? __("view more")
              }}</span>
            </Link>
          </div>
        </div> -->
      </div>
    </div>
  </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import Modal from "@/Components/Modal.vue";
import FindDoctorBar from "@/Components/Doctors/FindDoctorBar.vue";
import FindClinicBar from "@/Components/Clinics/FindClinicBar.vue";
import FindEventBar from "@/Components/Events/FindEventBar.vue";
import SpotlightDoctorSection from "@/Components/Doctors/SpotlightDoctorSection.vue";
import HomeStatisticsBar from "@/Components/HomeStatisticsBar.vue";
import FeaturedTagsSection from "@/Components/Shared/FeaturedTagsSection.vue";
import FeaturedEventSection from "@/Components/Events/FeaturedEventSection.vue";
import DoctorsTabsSection from "@/Components/Doctors/DoctorsTabs.vue";
import FeaturedTestimonialsSection from "@/Components/Shared/FeaturedTestimonialsSection.vue";

import HomeStaticCardsSection from "@/Components/HomeStaticCardsSection.vue";
import ReviewSection from "@/Components/ReviewSection.vue";

import { Head, Link } from "@inertiajs/inertia-vue3";
import Section from "@/Components/Section.vue";
import axios from "axios";
import { Carousel, Navigation, Pagination, Slide } from "vue3-carousel";
import FeaturedClinicSection from "@/Components/Clinics/FeaturedClinicSection.vue";
import ContentSlider from "../Components/ContentSlider.vue";
import CardSkeleton from "../Components/Skeleton/CardSkeleton.vue";
import ExploreStart from "./ExploreStart.vue";
import WhyChooseUs from './ourCommitment.vue';
import HowItWorksSection from '../Components/worksection.vue';
import OurBlog from '../Components/ourblog.vue';


export default defineComponent({
  props: {
    id: {
      type: String,
      required: true,
    },
  },
  components: {
    Head,
    Link,
    ContentSlider,
    Modal,
    AppLayout,
WhyChooseUs,
HowItWorksSection,
OurBlog,
    CardSkeleton,
    FindDoctorBar,
    FindClinicBar,
    FindEventBar,
    HomeStatisticsBar,
    DoctorsTabsSection,
    HomeStaticCardsSection,
    SpotlightDoctorSection,
    FeaturedTagsSection,
    FeaturedEventSection,
    FeaturedTestimonialsSection,
    FeaturedClinicSection,
    ExploreStart,
    ReviewSection,
    Carousel,
    Slide,
    Section,
    Pagination,
    Navigation,
  },
  created() {
    this.getFAQS();
    this.getServiceCategories();
    setTimeout(this.launchModal, 5000);
  },

  data: () => ({
    faqs: [],
    serviceCategories: [],
    // carousel settings
    settings: {
      itemsToShow: 1,
      snapAlign: "start",
    },
    modelValue: false,
    // breakpoints are mobile first
    // any settings not specified will fallback to the carousel settings
    breakpoints: {
      // 700px and up
      700: {
        itemsToShow: 1,
        snapAlign: "start",
      },
      // 1024 and up
      1024: {
        itemsToShow: 1,
        snapAlign: "start",
      },
    },
  }),
  methods: {
    readFunction() {
      var dots = document.getElementById("dots");
      var moreText = document.getElementById("more");
      var btnText = document.getElementById("myBtn");

      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "read more";
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "read less";
        moreText.style.display = "inline";
      }
    },
    getFAQS() {
      axios.get(this.route("getApiFaqs")).then((res) => {
        this.faqs = res.data.data;
      });
    },
    getServiceCategories() {
      axios.get(this.route("getApiServiceCategories")).then((res) => {
        this.serviceCategories = res.data.data;
      });
    },

    launchModal() {
      const modalButton = document.querySelector(
        '[data-bs-target="#newsletterModal"]'
      );
      if (modalButton) {
        modalButton.click();
      }
    },
  },
});
</script>
<style scoped>
.accordion-button:not(.collapsed) {
  color: #294481 !important;
}
.stats{
  background-color: #f9fbfd !important;
}
</style>
