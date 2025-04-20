<template>
    <app-layout title="Futureinsights">
        <section class="About-banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content aos" data-aos="fade-up">
                            <h1>Sexual Wellbeing</h1>
                            <nav aria-label="breadcrumb" class="page-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Sexual Wellbeing</li>
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
                            <h2>Nurturing Women's Intimate Well-being</h2>
                            <p>Women’s sexual wellbeing is a vital aspect of overall health, encompassing physical,
                                emotional, psychological, and relational factors. Online consultations can provide
                                education, therapy, and guidance on various topics related to sexual health. Here are
                                some key areas:

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
                    question: 'Understanding Female Sexual Health & Pleasure',
                    points: ['Educational sessions on female sexual function', 'Tips for improving arousal and desire', 'Guided self-exploration and body awareness']
                },
                { question: 'Low Libido & Desire Issues', points: ['Hormonal, psychological, and lifestyle assessment', 'Communication strategies for couples', 'Exercises to boost libido and intimacy'] },
                { question: 'Painful Sex (Dyspareunia & Vaginismus)', points: ['Guided pelvic floor relaxation exercises', 'Behavioural and desensitization techniques', 'Vaginal dilator therapy guidance (if needed)'] },
                { question: 'Menopause & Sexual Health', points: ['Natural and medical treatment options', 'Pelvic floor exercises for lubrication and elasticity', 'Communication strategies with a partner'] },
                { question: 'Sexual Trauma & Healing', points: ['Trauma-informed therapy and counselling', 'Mindfulness and relaxation techniques', 'Emotional safety exercises'] }
                ]
        }
    },
    methods: {
        toggle(index) { this.openIndex = this.openIndex === index ? null : index }
    },
}
</script>




<style scoped></style>