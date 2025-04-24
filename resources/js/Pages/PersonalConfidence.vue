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
        <section class="personal-part">
            <div class="container">


                <div class="row align-items-center">
                    <div class="col-lg-6  aos" data-aos="fade-up">
                        <div class="faq-cont">
                            <h2>Creative Healing</h2>
                            <p>Art therapy is a powerful way to explore emotions, relieve stress, and promote mental
                                healing through creative expression. It fosters self-awareness, emotional resilience,
                                and personal growth, helping you process feelings and gain a deeper
                                understanding of yourself.

                            </p>
                            <a href="#" class="book-now">Book Now</a>
                        </div>
                    </div>
                    <div class="col-lg-6 ">

                        <div class="accordion">
                            <div class="accordion-item mb-2" v-for="(item, index) in accordionItems" :key="index">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" :class="{ collapsed: openItems !== index }"
                                        @click="toggleItems(index)">
                                        {{ item.title }}
                                    </button>
                                </h2>
                                <div class="accordion-collapse" v-show="openItems === index">
                                    <div class="accordion-body">
                                        <span v-html="item.content"></span>
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
        <section class="personal-part">
            <div class="container">


                <div class="row align-items-center">
                    <div class="col-lg-6  aos" data-aos="fade-up">
                        <div class="faq-cont">
                            <h2>Fitness for all</h2>
                            <p>Fitness is not about age or ability—it’s about finding the right approach for your body
                                and your goals.

                            </p>
                            <a href="#" class="book-now">Book Now</a>
                        </div>
                    </div>
                    <div class="col-lg-6 ">

                        <div class="accordion">
                            <div class="accordion-item mb-2" v-for="(item, index) in fitnessItems" :key="index">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" :class="{ collapsed: openFitnessItems !== index }"
                                        @click="toggleFitItems(index)">
                                        {{ item.title }}
                                    </button>
                                </h2>
                                <div class="accordion-collapse" v-show="openFitnessItems === index">
                                    <div class="accordion-body">
                                        <span v-html="item.content"></span>
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
        <!-- Our Experts -->
        <spotlight-doctor-section></spotlight-doctor-section>

        <!-- our blogs  -->
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
            openAgingIndex: null,
            openPositiveIndex: null,
            openItems: 0,
            openFitnessItems: 0,
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
                ],
            accordionItems: [
                {
                    title: 'Express Emotions Through Art ',
                    content: `Engage in creative activities like painting, journaling, or music to process emotions and express your inner feelings.`,
                },
                {
                    title: 'Develop a Routine ',
                    content: `Consistently incorporating creativity into your life can help you relax and reconnect with yourself, fostering emotional healing.`,
                },
                {
                    title: 'Express Emotions Through Art ',
                    content: `Engage in creative activities like painting, journaling, or music to process emotions and express your inner feelings.`,
                },
                {
                    title: 'Develop a Routine ',
                    content: `Consistently incorporating creativity into your life can help you relax and reconnect with yourself, fostering emotional healing.`,
                },
                {
                    title: 'Unlock Personal Growth',
                    content: `Art can reveal deeper insights into your personal journey, encouraging self-awareness and growth.`,
                },
            ],
            fitnessItems: [
                {
                    title: '	Tailored to You',
                    content: `Our fitness programs are designed for different age groups and fitness levels, ensuring everyone can participate and benefit.`,
                },
                {
                    title: 'Strength and Flexibility ',
                    content: `Focus on exercises that promote strength, flexibility, and cardiovascular health to maintain a balanced, healthy body.`,
                },
                {
                    title: 'Consistency is Key ',
                    content: `Regular physical activity boosts mood, energy, and helps with long-term health. Consistency is what makes a lasting difference.`,
                },
                {
                    title: '	Achieve Your Goals',
                    content: `Whether you’re new to fitness or an experienced athlete, there’s always room for growth. Fitness should be fun, accessible, and beneficial for everyone. It’s a lifelong journey to feel better, stronger, and healthier.`,
                },
            ],
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
        },
        toggleItems(index) {
            this.openItems = this.openItems === index ? null : index;
        },
        toggleFitItems(index) {
            this.openFitnessItems = this.openFitnessItems === index ? null : index;
        },
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

.faq-cont p {
    font-size: 18px;
    padding-bottom: 30px;
}

@media (max-width:767px) {
    
    .faq-content h6 {
	padding-top: 10px;
	font-size: 18px;
	color: #000000 !important;
	font-weight: 500 !important;
	margin-bottom: 0;
}

}

@media (max-width: 1080px) {
    .banner-content.aos-init.aos-animate {
	text-align: start;
}
.banner-content h1 {
	font-family: "Prata", serif !important;
	font-weight: 400 !important;
	font-style: normal;
	font-size: 40px !important;
	margin-bottom: 15px !important;
	color: #404040 !important;
}
.faq-cont h2 {
	font-size: 33px;
	font-weight: 600 !important;
	color: #272b41;
}
.faq-main-cards {
	padding-top: 40px;
}
.accordion {
	padding-top: 40px;
}
.section {
	background-repeat: no-repeat;
	background-size: cover;
	padding-top: 60px;
	padding-bottom: 0 !important;
}
.spotlight {
	height: auto;
}



}
</style>