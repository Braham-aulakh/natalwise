<template>
    <app-layout title="Futureinsights">
        <section class="About-banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content aos" data-aos="fade-up">
                            <h1>Nutritional Wellbeing</h1>
                            <nav aria-label="breadcrumb" class="page-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Nutritional Wellbeing</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
                <!-- <div class="banner-img2">
						<img src="assets/img/banner/Ellipse-1.png" class="img-fluid" alt="doctor-slide">
					</div>
					<div class="banner-arrow-img">
						<img src="assets/img/banner/Ellipse2.png" class="img-fluid" alt="doctor-slide">
					</div> -->
            </div>
        </section>



        <!-- Faq Section -->
        <section class="faq-sec-fourteen">
            <div class="container">

                <div class="row ">
                    <div class="col-lg-5">
                        <div class="faq-cont">
                            <h2>Mental Wellness Support</h2>
                            <p>Mental wellness consultations offer personalized support, therapy, and coping strategies
                                for various challenges. Here are key topics that can be addressed

                            </p>
                            <a href="#" class="book-now">Book Now</a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="faq-main-cards">
                            <div v-for="(item, index) in faqItems" :key="index" class="faq-card aos"
                                data-aos="fade-down">
                                <div class="faq-title" @click="toggle(index)">
                                    <div class="flex items-start"> <span class="faq-icon"
                                            :class="{ 'active-icon': openIndex === index }"> Q </span>
                                        <div class="faq-content">
                                            <h6>{{ item.question }}</h6>
                                            <ul v-show="openIndex === index" class="drop-wellbeing">
                                                <li v-for="(point, i) in item.points" :key="i"> <span>
                                                        <Icon icon="ep:right" width="20" height="20" />
                                                    </span> {{ point }} </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <spotlight-doctor-section></spotlight-doctor-section>
        <OurBlog></OurBlog>


        <!-- Testimonials Sections  -->
        <review-section></review-section>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import SpotlightDoctorSection from "@/Components/Doctors/SpotlightDoctorSection.vue";
import OurBlog from '../Components/ourblog.vue';
import ReviewSection from "@/Components/ReviewSection.vue";
import { Carousel, Slide } from "vue3-carousel";
import "vue3-carousel/dist/carousel.css";
import { Icon } from "@iconify/vue";
export default {
    components: {
        Carousel,
        Slide,
        AppLayout,
        Icon,
        SpotlightDoctorSection,
        OurBlog,
        ReviewSection,
    },
    data() {
        return {
            openIndex: null,
            faqItems:
                [
                    {
                        question: "General Nutrition & Healthy Eating FOR ADOLESCENTS AND TEENS",
                        points: [
                            "Building a balanced meal plan for overall health",
                            "Hydration and its impact on wellbeing",
                            "Education on nutrient-dense food choices"
                        ]
                    },
                    {
                        question: "Healthy Weight Management",
                        points: [
                            "Understanding healthy weight gain and loss for teens and adults",
                            "Preventing childhood obesity and promoting an active lifestyle",
                            "Healthy snacking and portion control",
                            "Myths and facts about dieting"
                        ]
                    },
                    {
                        question: "Nutrition for Academic Performance & Focus",
                        points: [
                            "Brain-boosting foods for memory and concentration",
                            "How to manage fatigue and afternoon energy crashes",
                            "The impact of sugar and caffeine on focus",
                            "Best foods to eat before exams and study sessions"
                        ]
                    },
                    {
                        question: "Emotional Eating & Food Relationship",
                        points: [
                            "Understanding emotional eating triggers",
                            "Mindful eating techniques to prevent overeating or stress eating",
                            "The role of food in managing emotions",
                            "Identifying and avoiding food guilt"
                        ]
                    },
                    {
                        question: "Hormonal Balance & Nutrition",
                        points: [
                            "Nutrition plans for hormone regulation",
                            "Fertility-boosting foods and lifestyle changes",
                            "Managing cravings and insulin sensitivity"
                        ]
                    }
                ],
        }
    },
    methods: {
        toggle(index) { this.openIndex = this.openIndex === index ? null : index }
    },
}
</script>
