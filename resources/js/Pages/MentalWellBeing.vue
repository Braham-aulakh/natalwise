<template>
    <app-layout title="Futureinsights">
        <section class="About-banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content aos" data-aos="fade-up">
                            <h1>Mental Wellbeing</h1>
                            <nav aria-label="breadcrumb" class="page-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Mental Wellbeing</li>
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
        <FellingBetter />
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
import FellingBetter from "./FellingBetter.vue";
export default {
    components: {
        Carousel,
        Slide,
        AppLayout,
        Icon,
        SpotlightDoctorSection,
        OurBlog,
        ReviewSection,
        FellingBetter
    },
    data() {
        return {
            openIndex: null,
            faqItems:
                [{
                    question: 'Stress Management & Emotional Resilience',
                    points: ['Identify and manage stress triggers with effective coping strategies.', 'Build emotional resilience using mindfulness, relaxation, and CBT techniques.',
                        'Online Consultations for Breathing & Stress Relief'
                    ]
                },
                {
                    question: 'Anxiety & Depression Support', points: ['Manage anxiety, depression, and panic attacks with guided exercises.',
                        'Overcome social anxiety with thought-reframing and daily habits.', 'Find balance with therapy, journaling, and holistic or medical treatments.']
                },
                { question: 'Childhood Emotional & Behavioral Support (Ages 1-12)', points: ['Helping young girls manage anxiety and reduce stress.', 'Supporting girls with ADHD to improve focus, control,', 'Personalized strategies to manage tantrums, defiance,'] },
                { question: 'Sleep & Mental Health', points: ['Overcoming insomnia and improving sleep quality',
                 'Managing stress and anxiety-related sleep issues', 'Creating a healthy nighttime routine',
                "Reducing screen time and improving relaxation"] },
                { question: 'Trauma Healing & Emotional Recovery', points: ['Processing childhood or past trauma', 'Dealing with PTSD symptoms and emotional triggers', 'Healing from toxic relationships and abuse'] }
                ]
        }
    },
    methods: {
        toggle(index) { this.openIndex = this.openIndex === index ? null : index }
    },
}
</script>




<style scoped></style>