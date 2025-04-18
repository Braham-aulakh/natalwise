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

                            <img src="assets/img/futuree.jpg" />

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
    </app-layout>

</template>


<script>
import AppLayout from "@/Layouts/AppLayout.vue";
export default {
    component: {
        AppLayout
    }

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
}
.breadcrumb-item+.breadcrumb-item {
    padding-left: 0.5rem;
}


</style>