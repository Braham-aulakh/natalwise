<template>
    <app-layout title="Physiotherapy">
        <section class="About-banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content aos" data-aos="fade-up">
                            <h1>Personal Growth</h1>
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
        <section class="Personal-Growth">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-6">
                        <div class="personal-img" data-aos="fade-up">
                            <img src="../../../public/images/homes/persnoal.jpg" alt="Facts" />
                            <!-- <img src="assets/img/persnoal.jpg" /> -->

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div data-aos="fade-up">
                            <div class="personal-cont">

                                <h3>Empower Your Path
                                    <span class="color-pink">Evolve Transform, and Flourish!</span>
                                </h3>

                                <P>Here at Natalwise, we believe that personal growth is all about continuous evolution,
                                    unleashing your full potential, and loving every second of it. Our Personal Growth
                                    section offers tools and tips to help you grow, heal, and be your best self.
                                </P>
                                <p>Whether you're in confidence building, discovering the healing potential of art
                                    therapy,
                                    or aging with grace, we're here to guide you. Confidence building classes get you
                                    ready
                                    to overcome self-doubt and step into your own personal power with confidence. Our
                                    healing art therapy gives you a creative outlet for self-expression, healing
                                    emotionally
                                    as you learn new aspects of yourself. Aging with grace is accepting change with joy,
                                    self-love, and awareness, so you can continue to live vividly at every age.
                                </p>

                                <P>We also offer fitness programs of every age, keeping you healthy, active, and strong
                                    wherever you are in life. Besides physical health, we also understand that healthy
                                    growth of relationships is the key to development. We offer you information and
                                    resources to build healthy, supportive, and meaningful relationships that result in
                                    emotional well-being and personal growth.
                                </P>
                                <p>With Personal Growth, we aim to assist you to grow, discover your strengths, and live
                                    on
                                    purpose, unleashing the boundless potential in you.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <div class="features-section-sixteen">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header-sixteen text-center">

                            <h2 class="book-heading">Empower Your Life <span class="color-pink
									">Grow, Heal, Thrivees</span></h2>
                            <p>Build confidence, embrace creativity, stay active, nurture relationships, and age
                                gracefully with a positive mindset.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <Carousel ref="carousel" :items-to-show="3" :wrap-around="true" :autoplay="0"
                        class="features-slider-sixteen" :breakpoints="breakpoints" :transition="500">
                        <Slide v-for="(feature, index) in features" :key="index">
                            <div class="feature-sixteen-main">
                                <div class="feature-six-img">
                                    <img :src="feature.img" alt="Feature" class="img-fluid" />
                                    <h5 class="feature-content-one ">
                                        {{ feature.title }} </h5>

                                    <div class="feature-content-six">
                                        <div
                                            class="feature-content-two flex flex-col items-center justify-center gap-2">
                                            <h5>{{ feature.title }}</h5>
                                            <p>{{ feature.description }}</p>
                                            <a href="/personal-growth2" class="read-more-btn">Read More</a>
                                            <Icon icon="meteor-icons:angle-down" width="24" height="24"
                                                style="color: #ffffff " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </Slide>
                    </Carousel>


                    <div class="carousel-nav text-center mb-3 ">
                        <button class="dot custom-icon-btn" @click="goPrev">
                            <Icon icon="iconamoon:arrow-left-2" width="24" height="24" class="custom-icon" />
                        </button>

                        <button class="dot custom-icon-btn" @click="goNext">
                            <Icon icon="iconamoon:arrow-right-2-light" width="24" height="24" class="custom-icon" />
                        </button>
                    </div>
                </div>

            </div>
        </div>
        <div class="facts-section-sixteen">
            <div class="bg-img" data-aos="fade-up">
                <img src="../../../public/images/homes/Beige and Brown Product Launch Countdown Pre-Order Instagram Post(1).png"
                    alt="Feature" class="sec-vector" />

            </div>
            <div class="container">
                <div class="facts-section-all">
                    <div class="facts-main-sixteen" data-aos="fade-up">

                        <h2>Build Confidence, Creativity & Relationships</h2>
                        <p>
                            From prenatal care of gynecology, nutrition, and physiotherapy to postpartum recovery,
                            newborn care, and mental well-being, our experts are there at every stage. Receive pregnancy
                            health support, preparation for labor, lactation help, postpartum recovery support, and
                            parenting guidance to make the transition into motherhood seamless. Take care of your
                            well-being and your baby's health with compassionate, expert-led care.
                        </p>
                        <div class="flex gap-2">
                            <a class="flex gap-2 items-center" href="#">Read More
                                <Icon icon="iconamoon:arrow-right-2-duotone" width="18" height="18"
                                    style="color:#ffffff " />
                            </a>

                        </div>
                        <div class="bg-img">
                            <!-- <img src="../../../public/images/homes/vector-bg-04.png" alt="Img" /> -->

                        </div>
                    </div>
                    <div class="facts-content-all" data-aos="fade-up">
                        <ul>
                            <li>
                                <div class="facts-sixteen-img">
                                    <img src="../../../public/images/homes/motivation_14942135.png" alt="Facts" />

                                    <div class="facts-content-sixteen">
                                        <div class="facts-content-one">
                                            <h5 class="flex gap-1">Building Confidence
                                                <Icon icon="solar:alt-arrow-right-line-duotone" width="20" height="20"  style="color: #fc9fbc " />
                                            </h5>

                                        </div>
                                    </div>
                                </div>
                                <div class="facts-content-two facts-content-two-solid">
                                    <h6 class="color-pink">"Step into Your True Power" </h6>
                                    <p>
                                        Overcome self-doubt and develop lifelong confidence to achieve your dreams and
                                        aspirations.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="facts-sixteen-img">
                                    <img src="../../../public/images/homes/massage-therapist_8404327.png" alt="Facts" />

                                    <div class="facts-content-sixteen">
                                        <div class="facts-content-one">
                                            <h5 class="flex gap-1">Recovery through Art Therapy
                                                <Icon icon="solar:alt-arrow-right-line-duotone" width="20" height="20"  style="color: #fc9fbc " />

                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="facts-content-two facts-content-two-solid">
                                    <h6 class="color-pink">"Unleash Your Inner Artist" </h6>
                                    <p>
                                        Tap into the therapeutic power of art to release feelings and reduce stress.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="facts-sixteen-img">
                                    <img src="../../../public/images/homes/spa_4515224.png" alt="Facts" />

                                    <div class="facts-content-sixteen">
                                        <div class="facts-content-one">
                                            <h5 class="flex gap-1">Aging Gracefully 
                                                <Icon icon="solar:alt-arrow-right-line-duotone" width="20" height="20"  style="color: #fc9fbc " />

                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="facts-content-two facts-content-two-solid">
                                    <h6 class="color-pink">"Embracing Life Phases" </h6>
                                    <p>
                                        Feel strong and alive while you take care of yourself at every stage and age.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="facts-sixteen-img">

                                    <img src="../../../public/images/homes/calendar_8968622.png" alt="Facts" />
                                    <div class="facts-content-sixteen">
                                        <div class="facts-content-one">
                                            <h5 class="flex gap-1">Fitness Programs for All align-items-end 
                                                <Icon icon="solar:alt-arrow-right-line-duotone" width="20" height="20"  style="color: #fc9fbc " />
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="facts-content-two facts-content-two-solid">
                                    <h6 class="color-pink"> "Stay Active, Stay Strong" </h6>
                                    <p>
                                        Exercise regimens tailored to your age, helping you maintain a healthy and
                                        active lifestyle at every stage.

                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="facts-sixteen-img">
                                    <img src="../../../public/images/homes/empathy_5201418.png" alt="Facts" />
                                    <div class="facts-content-sixteen">
                                        <div class="facts-content-one">
                                            <h5 class="flex gap-1">Positive Relationship building
                                                <Icon icon="solar:alt-arrow-right-line-duotone" width="20" height="20"  style="color: #fc9fbc " />
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="facts-content-two facts-content-two-solid">
                                    <h6 class="color-pink"> "Form Healthy Relationships"</h6>
                                    <p>
                                        Improve your relationships with the help of emotional fulfillment tools and
                                        techniques.

                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="facts-sixteen-img">
                                    <img src="../../../public/images/homes/analysis_9827205.png" alt="Facts" />

                                    <div class="facts-content-sixteen">
                                        <div class="facts-content-one">
                                            <h5 class="flex gap-1 ">Self-Discovery and growth 
                                                <Icon icon="solar:alt-arrow-right-line-duotone" width="20" height="20"  style="color: #fc9fbc " />
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="facts-content-two facts-content-two-solid">
                                    <h6 class="color-pink"> "Unlock Your True Potential "</h6>
                                    <p>
                                        Take a journey of self-betterment and self-enrichment to live a meaningful life.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="bg-img-2" data-aos="fade-up">
                <img src="assets/img/Beige and Brown Product Launch Countdown Pre-Order Instagram Post(1).png"
                    class="sec-vector" alt="Img">
            </div>
        </div>
        <!-- Our Experts -->
        <spotlight-doctor-section></spotlight-doctor-section>

        <!-- Testimonials Sections  -->
        <review-section></review-section>

        <!-- our blogs  -->
        <OurBlog></OurBlog>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Carousel, Slide } from "vue3-carousel";
import "vue3-carousel/dist/carousel.css";
import AOS from "aos";
import "aos/dist/aos.css";
import { Icon } from "@iconify/vue";
import SpotlightDoctorSection from "@/Components/Doctors/SpotlightDoctorSection.vue";
import OurBlog from '../Components/ourblog.vue';
import ReviewSection from "@/Components/ReviewSection.vue";
export default {
    components: {
        Carousel,
        Slide,
        AppLayout,
        Icon,
        SpotlightDoctorSection,
        OurBlog,
        ReviewSection
    },
    data() {
        return {
            features: [
                {
                    img: "/images/homes/Confidence-Building.jpg",
                    title: "Confidence Building",
                    description:
                        "Confidence grows with experience. Set achievable goals, use positive affirmations, and embrace challenges as opportunities.",
                },
                {
                    img: "/images/homes/Creative-Healing.jpg",
                    title: "Creative Healing",
                    description:
                        "Healing through art fosters emotional release and self-discovery. Creativity—painting, writing, or music—promotes relaxation.",
                },
                {
                    img: "/images/homes/age.jpg",
                    title: "Aging Gracefully",
                    description:
                        "Aging is a journey of growth. Prioritize health, stay active, and embrace new experiences to enjoy each stage with vitality.",
                },
                {
                    img: "/images/homes/Fitness.jpg",
                    title: "Fitness for All",
                    description:
                        "Fitness is for everyone. Choose exercises that suit your goals. Movement boosts energy, mood, and overall well-being.",
                },
                {
                    img: "/images/homes/Positive.jpg",
                    title: "Positive Relationships",
                    description:
                        "Healthy relationships thrive on trust and empathy. Nurture connections for love, balance, and emotional well-being.",
                },
            ],
            breakpoints: {
                768: {
                    itemsToShow: 2,
                },
                1024: {
                    itemsToShow: 3,
                },
            },
        };
    },
    methods: {
        goPrev() {
            this.$refs.carousel.prev();
        },
        goNext() {
            this.$refs.carousel.next();
        },
    },
    mounted() {
        AOS.init();
    },
};
</script>
<style scoped>
.About-banner {
    background: #fbf2ed;
    position: relative;
    overflow: hidden;
    z-index: 1;
}

.banner-content h1 {
    font-family: "Prata", serif !important;
    font-weight: 400 !important;
    font-style: normal;
    font-size: 48px !important;
    margin-bottom: 15px !important;
    color: #404040 !important;
}

.Personal-Growth {
    padding: 80px 0;
}

.personal-img.aos-init.aos-animate img {
    border-radius: 100px 0px 100px 0;
    box-shadow: rgba(19, 18, 24, 0.52) -5px 5px, rgba(255, 199, 168, 0.32) -10px 10px, rgba(255, 205, 178, 0.28) -15px 15px, rgba(250, 203, 176, 0.23) -20px 20px, rgba(240, 46, 170, 0.05) -25px 25px;
}

.feature-content-one {
    position: absolute;
    bottom: 15px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 3;
    text-align: center;
    color: #fff;
    font-size: 22px !important;
    font-weight: 500 !important;
    font-family: "Montserrat", serif !important;
    white-space: nowrap !important;
    pointer-events: none;
}

.features-slider-sixteen {
    margin-top: 2rem;
}

.personal-cont {
    padding-left: 20px;
}

.personal-cont h3 {
    font-size: 35px !important;
    font-weight: 600 !important;
    padding-bottom: 10px !important;
}

.personal-cont p {
    font-size: 18px !important;
    color: #6B7280 !important;
}

.feature-sixteen-main {
    padding: 1rem;
    background: #fff;
    border-radius: 10px;
    /* box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.05); */
}

.feature-six-img {
    position: relative;
    overflow: hidden;
    border-radius: 8px;
}

.feature-six-img img {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.3s ease, filter 0.3s ease;
}

.feature-six-img:hover img {
    filter: blur(4px);
    transform: scale(1.05);
}

.feature-content-six {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    /* background: rgba(0, 0, 0, 0.6); */
    color: #fff;
    padding: 1.5rem;
    transform: translateY(100%);
    opacity: 0;
    transition: all 0.4s ease;
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
}

.feature-six-img:hover .feature-content-six {
    transform: translateY(0%);
    opacity: 1;
}

.feature-content-two {
    display: flex;
    flex-direction: column;
}


.feature-content-two h5 {
    font-size: 1.25rem;
    margin-bottom: 0.5rem;
}

.feature-content-two p {
    font-size: 1rem;
    margin-bottom: 1rem;
    line-height: 1.4;
}

/* .read-more-btn {
    display: inline-block;
    margin-top: 0.5rem;
    color: #fff;
    background-color: #e91e63;
    padding: 6px 12px;
    text-decoration: none;
    border-radius: 6px;
    transition: background-color 0.3s ease;
} */
.read-more-btn {
    display: inline-block;
    margin-top: 10px;
    background: #FC9FBC;
    color: white;
    padding: 8px 16px;
    border-radius: 8px;
    text-decoration: none;
}

/* .read-more-btn:hover {
    background-color: #c2185b;
} */

.features-section-sixteen .feature-sixteen-main .feature-six-img::after {
    position: absolute;
    top: 0;
    width: 100%;
    height: 100%;
    content: "";
    transition: 0.5s;
    background: none !important;
}

.carousel-nav {
    display: flex;
    justify-content: center;
    gap: 10px;
}

.custom-icon-btn {
    background-color: #EEEEF3;
    padding: 8px;
    border-radius: 50%;
    transition: background-color 0.3s ease;
    border: none;
    cursor: pointer;
}

.custom-icon {
    color: #fc9fbc;
    transition: color 0.3s ease;
}

.custom-icon-btn:hover {
    background-color: #fc9fbc;
}

.custom-icon-btn:hover .custom-icon {
    color: #ffffff;
}
</style>