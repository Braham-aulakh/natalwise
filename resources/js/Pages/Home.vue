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
    
      <div class="section stats p-6" v-show="faqs.length > 0">

    <div class="container">
  <div class="row">
    <div class="col-12 mb-5 text-center">
      <div v-if="getPageContentType('faqs_section_description') == 'textarea'">
        <div v-html="getPageContent('faqs_section_description')"></div>
      </div>
      <div v-else-if="getPageContentType('faqs_section_description') == 'text'">
        <p>{{ getPageContent("faqs_section_description") ?? "-" }}</p>
      </div>
      <div v-else>
        <span class="fs-3">{{ __("Find some ") }}</span>
        <h2 class="5">{{ __("Answer Questions") }}</h2>
        <p>
          When you choose Elite Legal Services, you are choosing a trusted
          partner dedicated to your success. Here are some frequently
          asked questions by some users. Feel free to add your questions.
        </p>
      </div>
    </div>
  </div>
  
<div class="row">
  <div class="col-md-5">
    <div class="rounded-5 mb-4 mb-md-0 overflow-hidden">
      <img class="faq-img" src="/images/homes/faq-img.png" alt="FAQ Image" />
    </div>
  </div>

  <div class="col-md-7">
  <div class="accordion" id="faqAccordion">
  <div
    class="accordion-item mb-2"
    v-for="(item, index) in faqs"
    :key="item.id"
  >
    <h2 class="accordion-header" :id="`heading-${index}`">
      <button
        class="accordion-button"
        :class="{ collapsed: activeIndex !== index }"
        type="button"
        @click="toggle(index)"
        :aria-expanded="activeIndex === index"
        :aria-controls="`collapse-${index}`"
      >
        <span class="fw-bold home-faqs-text">{{ item.name }}</span>
      </button>
    </h2>

    <div
      :id="`collapse-${index}`"
      class="accordion-collapse collapse"
      :class="{ show: activeIndex === index }"
      :aria-labelledby="`heading-${index}`"
    >
      <div class="accordion-body subheading-fs fw-bold">
        <div v-html="item.description"></div>
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
  toggle(index) {
    this.activeIndex = this.activeIndex === index ? null : index;
  }
},

});
</script>

<style scoped>
/* Accordion Button */
.accordion-button {
  background-color: #f4a0b2 !important;
  color: #fff !important;
  font-weight: bold;
  border: none;
  transition: background-color 0.3s ease;
}

.accordion-button:not(.collapsed) {
  background-color: #f29cbf !important; /* When not collapsed */
  color: #fff !important;
}

.accordion-button.collapsed {
  background-color: #f4a0b2 !important; /* Collapsed state */
  color: #fff !important;
}

.accordion-button:hover {
  background-color: #ec8da3 !important;
}

.accordion-button:focus {
  outline: none;
}

/* Accordion Body */
.accordion-body {
  background-color: #fff !important;
  color: #444 !important;
  padding: 1rem !important;
  font-size: 0.95rem !important;
  border-top: 1px solid #eee !important;
  display: block;
}

.accordion-body p {
  margin: 0;
}

.accordion-header {
  padding: 0;
  margin: 0;
}

/* Accordion Collapse */
.accordion-collapse {
  transition: max-height 0.3s ease;
}

/* Focus on first accordion button */
.accordion-button:first-of-type {
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}

.accordion-button:last-of-type {
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;
}

/* Styling the FAQ section container */
.faq-img {
  width: 100%;
  height: auto;
  border-radius: 10px;
}

.section {
  padding: 3rem 1.5rem;
  background-color: #f9f9f9;
}

.home-faqs-text {
  font-size: 1.2rem;
  color: #333;
  font-weight: bold;
}

/* Special Container for accordion */
.accordion-item {
  border-radius: 10px;
  overflow: hidden;
  margin-bottom: 1rem;
  background-color: #fff;
}

.accordion-item + .accordion-item {
  margin-top: 10px;
}

.accordion-header {
  background-color: #f4a0b2;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
}

.accordion-header .accordion-button {
  text-align: left;
  font-size: 1.1rem;
}

.accordion-body {
  padding: 1.5rem;
  font-size: 1rem;
  line-height: 1.6;
}

/* Hover Effect */
.accordion-button:hover {
  background-color: #ec8da3 !important;
  cursor: pointer;
}

.accordion-collapse {
  padding: 0;
}

/* General Styles for FAQ Text */
.faqs-section-title {
  font-size: 1.8rem;
  font-weight: 700;
  text-align: center;
  margin-bottom: 20px;
  color: #333;
}

/* Styling for FAQ description text */
.accordion-body .subheading-fs {
  font-size: 1rem;
  line-height: 1.5;
  color: #444;
}

/* Styling for paragraphs in FAQ body */
.accordion-body .subheading-fs p {
  margin: 0;
}

/* Styling for the accordion container */
.accordion {
  margin-top: 20px;
}

.accordion-item {
  border: 1px solid #e0e0e0;
  border-radius: 8px;
}

.accordion-item .accordion-button {
  font-size: 1.1rem;
  padding: 1rem;
}

/* Accordion collapse when clicked */
.accordion-collapse.show {
  display: block;
}

.accordion-collapse {
  display: none;
}

</style>
