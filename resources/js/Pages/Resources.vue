<template>
    <app-layout title="Style&Fashion">
        <section class="About-banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content aos" data-aos="fade-up">
                            <h1>Resources</h1>
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
        <div >
            <spotlight-doctor-section></spotlight-doctor-section>
        </div>
       <div class="our-blog-fourteen">
        <OurBlog></OurBlog>
       </div>
       
    </app-layout>

</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import SpotlightDoctorSection from "@/Components/Doctors/SpotlightDoctorSection.vue";
import OurBlog from '../Components/ourblog.vue';
export default {
    components: {
        AppLayout,
        SpotlightDoctorSection,
        OurBlog,
    }
}
</script>
<style scoped>
.our-blog-fourteen{
    background-color: #F8FBFF  !important;
}

@media (max-width: 1080px) {
    .our-blog-fourteen {
	padding: 0px 0 !important;
	padding-bottom: 20px !important;
	padding-top: 20px !important;
}
.spotlight {
	height: auto;
}





}

</style>