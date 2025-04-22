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
    <AppDownloadSection></AppDownloadSection>


    <!-- <doctors-tabs-section></doctors-tabs-section> -->

    <!-- explore different sections -->
    <!-- <home-static-cards-section></home-static-cards-section> -->
    <!-- Testimonials -->
    <review-section></review-section>
    <!-- Faqs Section -->
    <!-- <div class="section stats p-6" v-if="faqs.length > 0">  -->

    <div class="section stats p-6" v-if="faqs.length > 0">
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
          <div class="col-md-12">
            <div class="rounded-5 mb-4 mb-md-0 overflow-hidden">
              <img class="faq-img" src="../../../public/images/homes/faq-img.png" alt="faqImg" />
            </div>
          </div>
          <div class="col-md-12">
            <div class="accordion" id="accordionPanelsStayOpenExample">
              <div class="accordion-item mb-2" v-for="(item, index) in faqs" :key="item.id">
                <h2 class="accordion-header" :id="`panelsStayOpen-headingOne${item.id}`"> <button
                    class="accordion-button" :class="{ collapsed: activeIndex !== index }" @click="toggle(index)"> {{
                    item.name }} </button> </h2>
                <div class="accordion-collapse" v-show="activeIndex === index">
                  <div class="accordion-body"> <span v-html="item.description"></span> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row pt-5 justify-content-center">
          <div class="col-md-3 d-flex justify-content-center">
            <Link :href="route('faqs')" class="btn  d-flex align-items-center gap-1 btn reg-btn pink-btn fw-medium fs-3 px-md-5 px-3 rounded-4">
            <span class="button-text">{{
              getPageContent("general_view_more_btn_text") ?? __("view more")
            }}</span>
            </Link>
          </div>
        </div>
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
import AppDownloadSection from '../Components/AppDownloadSection.vue';


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
    AppDownloadSection,
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
    activeIndex: null,
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
    toggle(index) { this.activeIndex = this.activeIndex === index ? null : index; }, 
    // toggle(index) {
    //   this.activeIndex = this.activeIndex === index ? null : index;
    // }
  },

});
</script>
