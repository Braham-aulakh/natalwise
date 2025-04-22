<template>
    <app-layout title="Futureinsights">
        <section class="About-banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content aos" data-aos="fade-up">
                            <h1>Future insights</h1>
                            <nav aria-label="breadcrumb" class="page-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Future insights</li>
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

        <section class="Future">
            <div class="container">

                <div class="row ">
                    <div class="col-lg-6">
                        <div class="future-img" data-aos="fade-up">
                            <img src="../../../public/images/homes/futuree.jpg" alt="Facts" />
                            <!-- <img src="assets/img/futuree.jpg" /> -->

                        </div>

                    </div>

                    <div class="col-lg-6">
                        <div class="Future-cont" data-aos="fade-up">
                            <div class="welcome-cont" data-aos="fade-up">
                                <h3>Unlock Your Inner Power<span class="color-pink"> Insight, Healing, and Spiritual
                                        Growth!</span></h3>

                                <p>At Natalwise, we subscribe to a multi-dimensional journey towards well-being that
                                    draws on the richer energies of your mind, body, and spirit. Our Future Insights
                                    section provides a range of spiritual services that aim to lead you towards harmony,
                                    clarity, and empowerment. If you wish to gain insight into the future via Tarot card
                                    reading, to tap your energy towards healing, or to find Reiki healing, we have you
                                    covered at every step along your journey of spirituality.

                                </p>
                            </div>
                            <div class="wellness-cont">
                                <p>We realize that life might be overwhelming at times, and that is why we provide
                                    Energy Healing methods to assist you in clearing blockages, letting go of
                                    negativity, and restoring equilibrium in your life. With methods such as
                                    manifestation techniques, we empower you to manifest your desires by aligning your
                                    energy with your desires. Our spiritual wellness approach invites you to tune into
                                    your inner being, allowing you to feel a sense of peace, purpose, and alignment.

                                </p>

                                <p>Experience the life-altering benefits of Reiki healing, a gentle but powerful way to
                                    recharge your energy and create emotional balance. Our team is dedicated to helping
                                    you learn the methods and information to achieve spiritual, emotional, and mental
                                    growth.

                                </p>
                                <p>If you are in search of direction, healing, or simply want to enrich your spiritual
                                    journey, our Future Insights services are what you need to achieve your success in
                                    life and beyond.</p>

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

                            <h2 class="book-heading">Future Insights Services to heal, guide, and empower. </h2>

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
                                            <a href="doctors" class="read-more-btn">Read More</a>
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

                        <h2>Future Insights: Unlock Energy, Clarity & Spiritual Development</h2>
                        <p>
                            Find clarity with tarot card readings, energy healing, and manifestation practices. Enhance
                            your spiritual health through mindfulness, journaling, and meditation. Benefit from Reiki
                            healing to restore balance and calm. Unleash your inner strength and create the life you
                            want by aligning your energy, thoughts, and actions with your highest potential.
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
                                    <img src="../../../public/images/homes/tarot-card_18107826.png" alt="Facts" />

                                    <div class="facts-content-sixteen">
                                        <div class="facts-content-one">
                                            <h5 class="flex gap-1">Tarot Card Readings
                                                <Icon icon="solar:alt-arrow-right-line-duotone" width="20" height="20"
                                                    style="color: #fc9fbc " />
                                            </h5>

                                        </div>
                                    </div>
                                </div>
                                <div class="facts-content-two facts-content-two-solid">
                                    <h6 class="color-pink">Reveal Your Way</h6>
                                    <p>
                                        Gain clarity and insight with Tarot readings, which offer guidance to inform
                                        important decision-making and life transitions.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="facts-sixteen-img">
                                    <img src="../../../public/images/homes/battery_7664053.png" alt="Facts" />

                                    <div class="facts-content-sixteen">
                                        <div class="facts-content-one">
                                            <h5 class="flex gap-1">Energy Healing
                                                <Icon icon="solar:alt-arrow-right-line-duotone" width="20" height="20"
                                                    style="color: #fc9fbc " />

                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="facts-content-two facts-content-two-solid">
                                    <h6 class="color-pink">"Restore Balance" </h6>
                                    <p>
                                        Release emotional and physical blockages freely with energy healing, healing
                                        your body and mind.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="facts-sixteen-img">
                                    <img src="../../../public/images/homes/brain_1847793.png" alt="Facts" />

                                    <div class="facts-content-sixteen">
                                        <div class="facts-content-one">
                                            <h5 class="flex gap-1">Manifestation Techniques
                                                <Icon icon="solar:alt-arrow-right-line-duotone" width="20" height="20"
                                                    style="color: #fc9fbc " />

                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="facts-content-two facts-content-two-solid">
                                    <h6 class="color-pink">"Attract Your Desires" </h6>
                                    <p>
                                        Use manifestation methods to turn your dreams and wishes into reality by
                                        focusing your energy.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="facts-sixteen-img">

                                    <img src="../../../public/images/homes/meditation_11878318.png" alt="Facts" />
                                    <div class="facts-content-sixteen">
                                        <div class="facts-content-one">
                                            <h5 class="flex gap-1">Spiritual Well-Being
                                                <Icon icon="solar:alt-arrow-right-line-duotone" width="20" height="20"
                                                    style="color: #fc9fbc " />
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="facts-content-two facts-content-two-solid">
                                    <h6 class="color-pink"> "Join Together with Your True Self " </h6>
                                    <p>
                                        Find practices to nurture your spirit, inner peace, and emotional balance.

                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="facts-sixteen-img">
                                    <img src="../../../public/images/homes/meditation_2130895.png" alt="Facts" />
                                    <div class="facts-content-sixteen">
                                        <div class="facts-content-one">
                                            <h5 class="flex gap-1">Reiki Healing
                                                <Icon icon="solar:alt-arrow-right-line-duotone" width="20" height="20"
                                                    style="color: #fc9fbc " />
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="facts-content-two facts-content-two-solid">
                                    <h6 class="color-pink"> "Energy Restored"</h6>
                                    <p>
                                        An effective method of stress reduction, emotional healing, and energy building.

                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="facts-sixteen-img">
                                    <img src="../../../public/images/homes/meditation_12506812.png" alt="Facts" />

                                    <div class="facts-content-sixteen">
                                        <div class="facts-content-one">
                                            <h5 class="flex gap-1 ">Spiritual Practices
                                                <Icon icon="solar:alt-arrow-right-line-duotone" width="20" height="20"
                                                    style="color: #fc9fbc " />
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="facts-content-two facts-content-two-solid">
                                    <h6 class="color-pink"> " Grow from Within"</h6>
                                    <p>
                                        Unleash your full potential and have fun with spiritual practices that lead your
                                        self-growth.
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
import AOS from "aos";
import "aos/dist/aos.css";
import { Icon } from "@iconify/vue";
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
                    img: "/images/homes/energyhealing.jpg",
                    title: "Energy Healing",
                    description:
                        "Balance, remove emotional and physical blockages, and enhance overall well-being.",
                },
                {
                    img: "/images/homes/Manifestationmystrey.jpg",
                    title: "Manifestation Mastery",
                    description:
                        "Align thoughts, feelings, and actions to bring in abundance and manifest your desires.",
                },
                {
                    img: "/images/homes/spiritualgrowth.jpg",
                    title: "	Spiritual Growth",
                    description:
                        "Connect with your higher self through mindfulness, meditation, and introspective practices.",
                },
                {
                    img: "/images/homes/reikiheeli.jpg",
                    title: "Reiki Therapy",
                    description:
                        "Tap universal energy to cure, calm, and balance mind and body.",
                },
                {
                    img: "/images/homes/tarotinsights[1].jpg",
                    title: "Tarot Insights",
                    description:
                        "Get clarity, look at past, present, and future energies, and develop your intuition for making informed decisions.",
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
}
</script>


<style scoped>
.banner-content h1 {
    font-family: "Prata", serif;
    font-weight: 400;
    font-style: normal;
    font-size: 48px;
    margin-bottom: 15px;
    color: #404040;
}

.page-breadcrumb ol {
    background-color: transparent;
    font-size: 14px;
    margin-bottom: 0;
    padding: 0;
}

.page-breadcrumb ol li a {
    color: #000;
    font-size: 14px;
    text-decoration: none !important;
}

.breadcrumb-item+.breadcrumb-item {
    padding-left: 0.5rem;
}

.Future {
    padding: 80px 0;
}

.future-img img {
    border-radius: 100px 0 100px 0;
}

.welcome-cont h3 {
    font-size: 45px;
    font-weight: 600 !important;
}

.welcome-cont p {
    font-size: 18px;
    color: #6B7280 !important;
}

.wellness-cont p {
    font-size: 18px;
    margin-bottom: 10px;
    color: #6B7280 !important;

}

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

.read-more-btn {
    display: inline-block;
    margin-top: 10px;
    background: #FC9FBC;
    color: white;
    padding: 8px 16px;
    border-radius: 8px;
    text-decoration: none;
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
</style>