<template>
    <app-layout title="shop">
        <section class="About-banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content aos" data-aos="fade-up">
                            <h1>Coming Soon</h1>
                            <nav aria-label="breadcrumb" class="page-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Coming Soon</li>
                                </ol>
                            </nav>

                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- Coming Soon -->
        <section class="error-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12 text-center">
                        <div class="error-info">
                            <div class="error-img">
                                <img src="../../../public/images/hompage/hompage/hompage/coming-soon.png"
                                    class="img-fluid" alt="coming-soon-image" style="height: 568px;">
                            </div>
                            <div class="error-content">
                                <h2>We're Launching Soon!</h2>
                                <p>We're currently working hard on this page.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import PageHeader from "@/Components/PageHeader.vue";
import Navbar from "@/Layouts/AppIncludes/Navbar.vue";

export default defineComponent({
    components: {
        AppLayout,
        Navbar,
        PageHeader
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
    font-size: 14px;
    text-decoration: none !important;
    list-style: none !important;
}

.error-section {
    margin: 0 auto !important;
    padding: 80px 0;
}

.error-img {
    padding-bottom: 50px;
    display: flex;
    justify-content: center;
    /* Center horizontally */
    align-items: center;
    /* Center vertically */
}

.error-content h2 {
    font-weight: 600 !important;
    font-size: 38px;
    color: #0A0B0D;
    margin-bottom: 10px;
}

.error-content p {
    font-weight: 500;
    font-size: 16px;
    color: #6B7280;
    margin-bottom: 40px;
}

.error-img img {
    max-width: 100%;
    height: auto;
}

.img-fluid {
    max-width: 100%;
    height: auto;
}
</style>