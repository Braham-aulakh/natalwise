<template>
    <app-layout title="Gynecology">
        <section class="About-banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content aos" data-aos="fade-up">
                            <h1>Gynecology</h1>
                            <nav aria-label="breadcrumb" class="page-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Gynecology</li>
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

        <!-- advice -->
        <section class="gynacology-section">
            <div class="container">

                <div class="row ">
                    <div class="col-lg-6">
                        <div class="gynacology-img">
                            <img src="../../../public/images/homes/Gynecology-part.jpg" alt="img" class="img-fluid">


                        </div>

                    </div>


                    <div class="col-lg-6">
                        <div class="wellness-p-cont aos" data-aos="fade-up">
                            <div class="wellness-cont">
                                <h3 class="color-pink">Gynecology</h3>

                                <p>Gynecology is concerned with women's reproductive health, from menstrual well-being
                                    and fertility to menopause care and sexual health. Services encompass menstrual
                                    disorder management, fertility counseling, contraception, STI counseling, and full
                                    care for conditions such as PCOS, endometriosis, and others.

                                </p>
                                <p>1. Menstrual Health & Adolescent Gynecological Care
                                    Advice on monitoring and managing irregular periods and knowing menstrual cycles.
                                    Solutions for heavy or painful periods (dysmenorrhea) to alleviate discomfort.
                                    Effective management of premenstrual syndrome (PMS) and associated symptoms.
                                    Treatment of menstrual disorders like amenorrhea and menorrhagia with professional
                                    care.
                                    Education on menstruation, puberty changes, and contraception counseling for
                                    adolescents to ensure healthy growth and well-being.
                                </p>
                                <p>2. Fertility and Reproductive Health
                                    Fertility evaluation and counseling
                                    Ovulation monitoring and timing for conception
                                    Infertility testing and treatment options
                                    Hormonal imbalances that impact fertility
                                    Polycystic ovary syndrome (PCOS) management
                                </p>
                                <p>3. Menopause and Perimenopause Services
                                    Hormone replacement therapy (HRT) consultations
                                </p>


                            </div>
                        </div>

                    </div>

                </div>
                <div class="Gynecology-part">
                    <div class="row ">

                        <div class="col-lg-6">
                            <div class="wellness-p-cont aos" data-aos="fade-up">
                                <div class="wellness-cont">

                                    <p>4. Contraception and Family Planning
                                        Birth control methods and counseling (pills, IUDs, implants, etc.)
                                        Emergency contraception counseling
                                        Long-acting reversible contraceptives (LARCs) consultation
                                        Family planning counseling and reproductive decisions.
                                    </p>
                                    <p>5. Sexual Health and Well-being
                                        Vaginal infections (yeast infection, bacterial vaginosis, etc.)
                                        Sexually transmitted infections (STIs) counseling and testing.

                                    </p>
                                    <p>6. Gynecological Conditions and Disorders
                                        Polycystic ovary syndrome (PCOS) management
                                        Endometriosis management and treatment options
                                        Fibroids (uterine or ovarian) and cysts management.

                                    </p>
                                    <p>7.Pelvic pain and chronic conditions
                                        Urinary tract infections (UTI) management and treatment options.

                                    </p>

                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="gynacology-img">

                                <img src="../../../public/images/homes/gynacology-img-2.jpg" alt="img"
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- OUR EXperts -->
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
                    <div class="row align-items-end">
                        <div class="col-lg-7 ">
                            <div class="section-inner-header way-inner-header mb-0">
                                <h2>Be on Your Way to Feeling Better with Natalwise</h2>
                                <p>Reach out and nurture your journey with us—each conversation plants a seed for a
                                    vibrant tomorrow.</p>
                                <a href="contact-us.html" class="btn btn-primary">Contact Us</a>
                            </div>
                        </div>
                        <div class="col-lg-5 ">
                            <div class="way-img">
                                <img src="../../../public/images/homes/way-img.png" class="img-fluid"
                                    alt="doctor-way-image">
                            </div>
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
import AppLayout from "@/Layouts/AppLayout.vue";
import SpotlightDoctorSection from "@/Components/Doctors/SpotlightDoctorSection.vue";
import OurBlog from '../Components/ourblog.vue';
import ReviewSection from "@/Components/ReviewSection.vue";
export default {
    components: {
        AppLayout,
        SpotlightDoctorSection,
        OurBlog,
        ReviewSection
    }
}
</script>

<style scoped>
.About-banner {
    background: #fbf2ed;
    position: relative;
    overflow: hidden;
    z-index: 1;
}

.wellness-cont h3 {
    font-size: 45px !important;
    font-weight: 600 !important;
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

.gynacology-section {
    padding-top: 80px;
}

.Gynecology-part {
    padding-top: 50px;
}

.wellness-cont p {
    font-size: 18px !important;
    margin-bottom: 10px !important;
    color: #6B7280 !important;
}

.gynacology-img {
    padding-right: 20px;
}

.gynacology-img img {
    border-radius: 100px 0 100px 0;
    box-shadow: rgb(251, 242, 237) -5px 5px, rgb(255, 184, 206) -10px 10px, rgba(252, 159, 188, 0.48) -15px 15px, rgba(240, 46, 170, 0.1) -20px 20px, rgba(240, 46, 170, 0.05) -25px 25px;
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