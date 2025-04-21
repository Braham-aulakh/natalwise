<template>
    <app-layout title="Futureinsights">
        <section class="About-banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content aos" data-aos="fade-up">
                            <h1>Personal Growth</h1>
                            <nav aria-label="breadcrumb" class="page-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Personal Growth</li>
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
        <section class="faq-sec-fourteen">
            <div class="container">

                <div class="row ">
                    <div class="col-lg-5">
                        <div class="faq-cont">
                            <h2>Confidence Building</h2>
                            <p>Confidence is not just an innate trait but a skill that can be cultivated and
                                strengthened over time. With consistent effort, self-awareness, and the right
                                strategies, you can gradually reshape your mindset, overcome self-doubt, and transform
                                the way you perceive yourself and your abilities.
                            </p>
                            <a href="doctors" class="book-now">Book Now</a>
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
        <!-- Aging Gracefully -->
        <section class="faq-sec-fourteen">
            <div class="container">

                <div class="row ">
                    <div class="col-lg-5">
                        <div class="faq-cont">
                            <h2>Aging Gracefully</h2>
                            <p>Aging doesn’t have to be feared; it can be embraced as an opportunity to live with
                                intention, mindfulness, and health.

                            </p>
                            <a href="doctors" class="book-now">Book Now</a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="faq-main-cards">
                            <div v-for="(item, index) in agingitems" :key="index" class="faq-card aos"
                                data-aos="fade-down">
                                <div class="faq-title" @click="toggleAging(index)">
                                    <div class="flex items-start"> <span class="faq-icon"
                                            :class="{ 'active-icon': openAgingIndex === index }"> Q </span>
                                        <div class="faq-content">
                                            <h6>{{ item.question }}</h6>
                                            <ul v-show="openAgingIndex === index" class="drop-wellbeing">
                                                <li v-for="(point, i) in item.points" :key="i"> <span>

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

        <!-- Positive Relationship Building -->
        <section class="faq-sec-fourteen">
            <div class="container">

                <div class="row ">
                    <div class="col-lg-5">
                        <div class="faq-cont">
                            <h2>Positive Relationship Building</h2>
                            <p>Healthy relationships are vital to emotional well-being and personal growth, and
                                fostering these connections is essential for a fulfilling life.
                            </p>
                            <a href="doctors" class="book-now">Book Now</a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="faq-main-cards">
                            <div v-for="(item, index) in positiveitems" :key="index" class="faq-card aos"
                                data-aos="fade-down">
                                <div class="faq-title" @click="togglePositive(index)">
                                    <div class="flex items-start"> <span class="faq-icon"
                                            :class="{ 'active-icon': openPositiveIndex === index }"> Q </span>
                                        <div class="faq-content">
                                            <h6>{{ item.question }}</h6>
                                            <ul v-show="openPositiveIndex === index" class="drop-wellbeing">
                                                <li v-for="(point, i) in item.points" :key="i"> <span>

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
            openAgingIndex: null,
            openPositiveIndex: null,
            faqItems:
                [{
                    question: 'Set Achievable Goals',
                    points: ["Start with small, manageable goals that allow you to experience success, building momentum and self-esteem."]
                },
                { question: 'Daily Affirmations', points: ['Incorporate positive self-talk into your routine. Repeating affirmations helps reshape your inner dialogue and boosts confidence.'] },
                { question: 'Embrace Challenges', points: ["Instead of fearing challenges, approach them with a mindset of growth. Mistakes become valuable lessons, and each step forward builds your self-assurance."] },
                { question: 'Grow with Resilience', points: ['Confidence grows when you keep pushing forward, learning from experiences, and embracing your strengths.Confidence isn’t just about self-assurance—it’s a mindset that empowers you to take risks, try new things, and believe in your potential.'] },
                ],
            agingitems:
                [{
                    question: 'Focus on Health',
                    points: ["Prioritize mental, physical, and emotional health through regular exercise, balanced nutrition, and self-care practices."]
                },
                { question: 'Cultivate Mindfulness', points: ['Embrace the beauty of aging by staying present and appreciating every moment. Mindfulness helps you enjoy the process of growing older.'] },
                { question: 'Build a Supportive Community', points: ["Surround yourself with positive, encouraging people who enhance your life, providing emotional and social fulfillment. "] },
                { question: 'Embrace Aging', points: ['See aging as an opportunity for growth, wisdom, and embracing new perspectives.Aging gracefully is about celebrating the journey, maintaining well-being, and appreciating the wealth of life experiences.'] },
                ],
            positiveitems:
                [{
                    question: 'Open Communication',
                    points: ["Honest and clear communication builds trust and helps deepen emotional connections. Listening actively is just as important as speaking openly."]
                },
                { question: 'Build Empathy', points: ['Understand others perspectives by practicing empathy. When you actively listen and show compassion, your relationships become stronger.'] },
                { question: 'Set Healthy Boundaries', points: ["Healthy boundaries are essential for mutual respect and maintaining emotional balance. They prevent burnout and help both parties feel understood.   "] },
                { question: 'Shared Experiences', points: [' Spending time together through shared experiences strengthens the bond and creates lasting memories, whether it’s through conversation or activities.	Positive relationships are built on respect, understanding, and connection, nurturing your mental and emotional well-being.'] },
                ]
        }
    },
    methods: {
        toggle(index) {
            this.openIndex = this.openIndex === index ? null : index;
        },
        toggleAging(index) {
            this.openAgingIndex = this.openAgingIndex === index ? null : index;
        },
        togglePositive(index) {
            this.openPositiveIndex = this.openPositiveIndex === index ? null : index;
        }
    },
}

</script>

<style scoped>
.drop-wellbeing li {
    display: flex;
    align-items: start !important;
    margin-bottom: 8px;
    color: #374151 !important;
}
</style>