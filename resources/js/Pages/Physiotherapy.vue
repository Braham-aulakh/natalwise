<template>
    <app-layout title="Physiotherapy">
        <section class="About-banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content aos" data-aos="fade-up">
                            <h1>Physiotherapy</h1>
                            <nav aria-label="breadcrumb" class="page-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Physiotherapy</li>
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
        <section class="physiotherapy-section">
            <div class="container">

                <div class="row ">
                    <div class="col-lg-6">
                        <div class="bookus-img">
                            <div class="row g-3">
                                <div class="col-md-12 aos" data-aos="fade-up">
                                    <img src="../../../public/images/homes/Physiotherapy-IMG.jpg" alt="img"
                                        class="img-fluid">
                                </div>

                            </div>
                        </div>

                    </div>


                    <div class="col-lg-6">
                        <div class="wellness-p-cont aos" data-aos="fade-up">
                            <div class="wellness-cont">
                                <h3 class="color-pink">Physiotherapy</h3>

                                <p>Physiotherapy provides individualized care to optimize women's health, from pelvic
                                    floor strengthening and menopause symptom management to post-operative
                                    rehabilitation and chronic pain relief. Women gain access to guided exercises,
                                    mobility routines, and lifestyle suggestions for a healthier, pain-free life through
                                    online sessions.

                                </p>
                                <p>1. Pelvic Floor Health & Dysfunction
                                    Strengthening or relaxing pelvic floor muscles
                                    Pelvic organ prolapse management
                                    Urinary incontinence (stress, urge, or mixed)
                                    Bowel dysfunction (constipation, fecal incontinence)
                                    Painful intercourse (dyspareunia)
                                    Sexual health-related issues.

                                </p>
                                <p>2. Menopause & Osteoporosis Care
                                    Bone health and prevention of osteoporosis
                                    Strength training to preserve muscle mass
                                    Management of joint pain and stiffness
                                    Pelvic floor and bladder health during menopause.

                                </p>
                                <p>3. Breast Health & Post-Surgical Rehabilitation
                                    Recovery from mastectomy or breast surgery
                                    Lymphedema (arm/chest swelling) management
                                    Shoulder and upper body mobility exercises
                                    Recovery and rehabilitation after gynecological surgery.

                                </p>
                                <p>4. Chronic Pain & Musculoskeletal Issues
                                    Fibromyalgia and chronic pelvic pain
                                    Endometriosis pain management
                                    Lower back pain, hip pain, or tailbone pain.

                                </p>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- OUR EXperts -->
        <spotlight-doctor-section></spotlight-doctor-section>
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

.physiotherapy-section {
    padding-top: 80px;
}

.bookus-img img {
    border-radius: 20px;
}

.wellness-p-cont {
    padding-right: 20px;
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
</style>