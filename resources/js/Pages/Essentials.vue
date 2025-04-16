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
                <div class="banner-img2">
                    <img src="assets/img/banner/Ellipse-1.png" class="img-fluid" alt="doctor-slide">
                </div>
                <div class="banner-arrow-img">
                    <img src="assets/img/banner/Ellipse2.png" class="img-fluid" alt="doctor-slide">
                </div>

            </div>
        </section>
        <section class="Essentials">
            <div class="container">

                <div class="row ">
                    <div class="col-lg-6">
                        <div class="bookus-img">
                            <div class="row g-3">
                                <div class="col-md-12 aos" data-aos="fade-up">
                                    <img src="assets/img/essetialspageimage.jpg" alt="img" class="img-fluid">
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
							<img src="assets/img/shape-06.png" alt="shape-image">
						</div>
						<div class="way-shapes-right">
							<img src="assets/img/shape-07.png" alt="shape-image">
						</div>
					</div>
					<div class="row align-items-end">
						<div class="col-lg-7 col-md-12">
							<div class="section-inner-header way-inner-header mb-0">
								<h2>Be on Your Way to Feeling Better with Natalwise</h2>
								<p>Reach out and nurture your journey with us—each conversation plants a seed for a vibrant tomorrow.</p>
								<a href="contact-us.html" class="btn btn-primary">Contact Us</a>
							</div>
						</div>
						<div class="col-lg-5 col-md-12">
							<div class="way-img">
								<img src="assets/img/way-img.png" class="img-fluid" alt="doctor-way-image">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        <OurBlog></OurBlog>
    </app-layout>

</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import PageHeader from "@/Components/PageHeader.vue";
import Navbar from "@/Layouts/AppIncludes/Navbar.vue";
import SpotlightDoctorSection from "@/Components/Doctors/SpotlightDoctorSection.vue";
import OurBlog from '../Components/ourblog.vue';

export default defineComponent({
    components: {
        AppLayout,
        Navbar,
        PageHeader,
        SpotlightDoctorSection,
        OurBlog
    },
});
</script>