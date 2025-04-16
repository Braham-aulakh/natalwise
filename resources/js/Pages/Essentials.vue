<template>
    <app-layout title="essentials">
        <section class="About-banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content aos" data-aos="fade-up">
                            <h1>Essentials</h1>
                            <nav aria-label="breadcrumb" class="page-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Essentials</li>
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
        <section class="Essentials">
            <div class="container">

                <div class="row ">
                    <div class="col-lg-6">
                        <div class="bookus-img">
                            <div class="row g-3">
                                <div class="col-md-12 aos" data-aos="fade-up">
                                    <img src="../../../public/images/homes/essetialspageimage.jpg" alt="img"
                                        class="img-fluid">
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <div class="wellness-p-cont aos" data-aos="fade-up">
                            <div class="wellness-cont">
                                <h3 class="color-pink">Essentials</h3>

                                <p>An integrated approach bringing together the essential elements of gynecology and
                                    physiotherapy to promote overall women's health.</p>
                                <p>1. Menstrual & Hormonal Health
                                    Management of irregular periods, PMS, and menstrual cramps
                                    Correction of hormonal imbalances that impact fertility and well-being
                                    PCOS and endometriosis care.


                                </p>
                                <p>2. Sexual & Reproductive Well-being
                                    Fertility advice and conception support
                                    Contraception counseling and family planning
                                    Sexual health education and prevention of STIs.


                                </p>
                                <p>3. Pain & Mobility Management
                                    Chronic pelvic pain, fibromyalgia, and endometriosis discomfort management
                                    Lower back, hip, and joint pain management techniques
                                    Movement therapy and posture correction for daily living.


                                </p>
                                <p>4. Post-Surgical & Recovery Support
                                    Gynecological or breast surgery recovery rehabilitation
                                    Mobility and strength recovery for increased function and comfort
                                    The Essentials section combines the most important aspects of gynecology and
                                    physiotherapy to provide comprehensive support for women's health.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <spotlight-doctor-section></spotlight-doctor-section>
        <section class="way-section">
            <div class="container">
                <div class="way-bg">
                    <div class="way-shapes-img">
                        <div class="way-shapes-left">
                            <img src="../../../public/images/homes/shape-06.png" alt="shape-image">
                        </div>
                        <div class="way-shapes-right">
                            <img src="../../../public/images/homes/shape-07.png" alt="shape-image">
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>
        <!-- Our blogs section  -->
        <OurBlog></OurBlog>

        <!-- Testimonials Sections  -->
        <review-section></review-section>
    </app-layout>

</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import PageHeader from "@/Components/PageHeader.vue";
import Navbar from "@/Layouts/AppIncludes/Navbar.vue";
import SpotlightDoctorSection from "@/Components/Doctors/SpotlightDoctorSection.vue";
import OurBlog from '../Components/ourblog.vue';
import ReviewSection from "@/Components/ReviewSection.vue";
export default defineComponent({
    components: {
        AppLayout,
        Navbar,
        PageHeader,
        SpotlightDoctorSection,
        OurBlog,
        ReviewSection
    },
});
</script>
<style scoped>
.About-banner {
    background: #fbf2ed;
    position: relative;
    overflow: hidden;
    z-index: 1;
}

.Essentials {
    padding-top: 80px;
    margin: 0 auto;
    display: inline-block;
    width: 100%;
}

.bookus-img img {
    border-radius: 20px;
}

.wellness-cont h3 {
    font-size: 45px !important;
    font-weight: 600 !important;
}

.wellness-cont p {
    font-size: 18px !important;
    margin-bottom: 10px !important;
    color: #6B7280;
}

.banner-content {
    padding: 50px 0;
    position: relative;
}

.banner-content h1 {
    font-family: "Prata", serif !important;
    font-weight: 400 !important;
    font-style: normal !important;
    font-size: 48px !important;
    margin-bottom: 15px !important;
    color: #404040 !important;
}

.page-breadcrumb ol li a {
    color: #000;
    text-decoration: none !important;
    list-style: none !important;
    font-size: 14px;
}

.breadcrumb-item+.breadcrumb-item {
    padding-left: 0.5rem;
    color: #6B7280 !important;
}

.way-section {
    background-color: #ffffff;
    margin: 0;
    padding: 0 0 80px;
}

.way-section .way-bg {
    background: #FC9FBC;
    border-radius: 25px;
    position: relative;
    overflow: hidden;
}

.way-section .way-bg .way-shapes-img {
    position: relative;
}

.way-section .way-bg .way-shapes-img .way-shapes-left {
    position: absolute !important;
    top: 60px !important;
    right: 200px !important;
}

.way-section .way-bg .way-shapes-img .way-shapes-right {
    position: absolute;
    right: 0;
}

.way-inner-header {
    margin: 0;
    padding: 60px;
}

.way-inner-header h2 {
    color: #ffffff !important;
    margin-bottom: 29px !important;
}

.section-inner-header h2 {
    font-weight: 600 !important;
    font-size: 40px !important;
    color: #1F2937 ;
}
.way-inner-header .btn {
    font-weight: 600 !important;
    font-size: 15px !important;
    padding: 11px 16px !important;
    color: #FC9FBC !important;
    background: #ffffff !important;
    border: 1px solid #ffffff !important;
    border-radius: 8px !important;
    box-shadow: inset 0 0 0 0 #FC9FBC !important;
}
.way-img {
    position: relative;
    top: 10px;
}
.way-inner-header p {
    font-weight: 500;
    font-size: 16px;
    color: #ffffff;
    margin-bottom: 40px;
}
</style>