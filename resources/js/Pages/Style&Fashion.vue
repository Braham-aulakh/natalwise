<template>
    <app-layout title="Style&Fashion">
        <section class="About-banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content aos" data-aos="fade-up">
                            <h1>Style & fashion</h1>
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
        <!-- section 1 -->
        <section class="pre-post">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-6">
                        <div class="pre-post-img" data-aos="fade-up">
                            <img src="../../../public/images/homes/fashion.jpg" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div data-aos="fade-up">
                            <div class="pre-post-cont">

                                <h3>Fashion
                                    <span class="color-pink">"Wear your confidence, express your style”</span>
                                </h3>
                                <P>At Natal wise, fashion is more than just trends—it’s about embracing who you are and
                                    feeling confident in your own skin. Whether you’re refreshing your wardrobe,
                                    discovering styles that highlight your best features, or staying updated with
                                    seasonal must-haves, we’re here to help. Our customized style advice ensures that
                                    every outfit complements your body type and personal taste, making you look and feel
                                    your best. Beyond what to wear, we guide you in building a wardrobe that is both
                                    functional and stylish, so you’re prepared for any occasion, from everyday looks to
                                    special events. We also believe fashion should be sustainable, showing you how to
                                    make eco-friendly choices without sacrificing style. A wardrobe that blends
                                    sustainability with modern fashion lets you look good while doing good. No matter
                                    where you are in your fashion journey, we’re here to inspire confidence and help you
                                    express yourself through your unique style.

                                </P>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="post-natal">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-6">
                        <div data-aos="fade-up">
                            <div class="pre-post-cont">
                                <h3>Makeup & Skincare <span class="color-pink">"Radiate beauty, glow with
                                        confidence."</span></h3>
                                <P>Looking and feeling your best isn’t just about fashion—beauty plays a key role too.
                                    At Natal wise, we provide expert insights into makeup and skincare, helping you
                                    enhance your natural radiance effortlessly. From foundational beauty tips that bring
                                    out your glow to seasonal skincare routines that adapt to your needs, we ensure you
                                    stay ahead with the best advice. Beauty is not about covering up but about embracing
                                    and enhancing what makes you unique. Whether you’re looking for simple, everyday
                                    looks or refined techniques to elevate your style, our guidance ensures you always
                                    feel confident in your own skin. With the right beauty approach, you can showcase
                                    your natural charm while maintaining healthy, glowing skin.
                                </P>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="pre-post-img" data-aos="fade-up">
                            <img src="../../../public/images/homes/Makeup.jpg" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section-2 -->
        <div class="features-section-sixteen">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header-sixteen text-center">

                            <h2 class="book-heading">Our Fashion & Styling<span class="color-pink
									">Solutions</span></h2>
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
                                            <a href="/personal-confidence-building" class="read-more-btn">Read More</a>
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
        <!-- section 3  -->
        <section class="services-section-thirteen common-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 aos" data-aos="fade-up">
                        <div class="section-header-thirteen">
                            <h2>Style & Fashion<br> <span class="color-pink">Elevate Your Beauty and Confidence</span>
                            </h2>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6">
                        <div class="service-thirteen-main">
                            <div class="service-thirteen-all">
                                <div class="service-img-thirteen">
                                    <img src="../../../public/images/homes/jersey_7970567.png" alt="Facts">
                                </div>
                                <div class="service-inner-contents">
                                    <h5>Fashion Specifically for You</h5>
                                    <h6>“Style That Works for You”</h6>
                                    <p>Discover fashion advice that is perfectly suited to your body and style, with
                                        fashions that make you look and feel wonderful.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="service-thirteen-main">
                            <div class="service-thirteen-all">
                                <div class="service-img-thirteen">
                                    <img src="../../../public/images/homes/makeup_7861557.png" alt="Facts">
                                </div>
                                <div class="service-inner-contents">
                                    <h5>Beauty Basics for Every Style </h5>
                                    <h6>“Glowing from Head to Toe”</h6>
                                    <p>Quick skincare and makeup advice to perfect your natural features and leave you
                                        glowing day to day.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="service-thirteen-main">
                            <div class="service-thirteen-all">
                                <div class="service-img-thirteen">
                                    <img src="../../../public/images/homes/shopping-bag_7396960.png" alt="Facts">
                                </div>
                                <div class="service-inner-contents">
                                    <h5>Seasonal Fashion Must-Haves</h5>
                                    <h6>“Seasonal Chic: Stay Stylish Year-Round”</h6>
                                    <p>Get ahead of the game with seasonal style advice that makes you look fabulous,
                                        regardless of the weather.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="service-thirteen-main">
                            <div class="service-thirteen-all">
                                <div class="service-img-thirteen">
                                    <img src="../../../public/images/homes/ingenuity_18292043.png" alt="Facts">
                                </div>
                                <div class="service-inner-contents">
                                    <h5>Outfit Ideas for Every Situation</h5>
                                    <h6>"Dress to Impress</h6>
                                    <p>Outfit ideas for every event, so you can feel great and look even better,
                                        whatever the occasion.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="service-thirteen-main">
                            <div class="service-thirteen-all">
                                <div class="service-img-thirteen">
                                    <img src="../../../public/images/homes/light-bulb_7366004.png" alt="Facts">

                                </div>
                                <div class="service-inner-contents">
                                    <h5>Eco-Friendly Fashion Ideas</h5>
                                    <h6>"Style with a Conscience "</h6>
                                    <p>Green wardrobe inspiration that allows you to stay fashionable and leave the
                                        planet a little bit greener. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="service-thirteen-main">
                            <div class="service-thirteen-all">
                                <div class="service-img-thirteen">
                                    <img src="../../../public/images/homes/customer-satisfaction_12516101.png"
                                        alt="Facts">

                                </div>
                                <div class="service-inner-contents">
                                    <h5>Style Tips to Boost Confidence </h5>
                                    <h6>“Empower Your Inner Fashionista”</h6>
                                    <p> Discover how to dress for confidence, finding styles that reflect your
                                        individuality.</p>
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
import { Icon } from "@iconify/vue";
import SpotlightDoctorSection from "@/Components/Doctors/SpotlightDoctorSection.vue";
import OurBlog from '../Components/ourblog.vue';
import ReviewSection from "@/Components/ReviewSection.vue";
import { Carousel, Slide } from "vue3-carousel";
import AOS from "aos";
import "aos/dist/aos.css";
import "vue3-carousel/dist/carousel.css";
export default {
    components: {
        AppLayout,
        Carousel,
        Slide,
        Icon,
        SpotlightDoctorSection,
        OurBlog,
        ReviewSection
    },
    data() {
        return {
            features: [
                {
                    img: "/images/homes/Skincare.jpg",
                    title: "Skincare",
                    description:
                        "Receive expert skincare advice with customized product recommendations and efficient skin prep methods to attain healthy, radiant skin.",
                },
                {
                    img: "/images/homes/Makeup-2.jpg",
                    title: "Makeup",
                    description:
                        "Master makeup application for any situation, from easy day-to-day looks to elegant party looks, with customized product recommendations.",
                },
                {
                    img: "/images/homes/Personalized-styling.jpg",
                    title: "Personalized styling",
                    description:
                        "Find fashion advice appropriate for your age and body type, so you can dress confidently and project your own style easily.",
                },
            ],
            breakpoints: {
      0: {
        itemsToShow: 1
      },
      640: {
        itemsToShow: 1
      },
      1080: {
        itemsToShow: 2
      }
    }
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
.pre-post {
    padding-top: 80px;
}

.pre-post-img img {
    border-radius: 100px 0 100px 0;
    box-shadow: rgb(251, 242, 237) -5px 5px, rgb(255, 184, 206) -10px 10px, rgba(252, 159, 188, 0.48) -15px 15px, rgba(240, 46, 170, 0.1) -20px 20px, rgba(240, 46, 170, 0.05) -25px 25px;
}

.pre-post-cont h3 {
    font-size: 35px !important;
    font-weight: 600 !important;
}

.pre-post-cont p {
    font-size: 18px !important;
    padding-top: 10px !important;
    color: #6B7280 !important;
}

.post-natal {
    padding: 80px;
}

</style>