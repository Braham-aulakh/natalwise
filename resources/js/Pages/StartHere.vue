<template>
    <AppLayout>
        <div>
            <section class="About-banner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="banner-content aos" data-aos="fade-up">
                                <h1>Start Here!</h1>
                                <h4 class="color-pink">(Get wise with natal wise)</h4>
                            </div>
                        </div>


                    </div>
                    <div class="banner-img2">
                        <!-- <img src="assets/img/banner/Ellipse-1.png" class="img-fluid" alt="doctor-slide"> -->
                    </div>
                    <div class="banner-arrow-img">
                        <!-- <img src="assets/img/banner/Ellipse2.png" class="img-fluid" alt="doctor-slide"> -->
                    </div>



                </div>
            </section>


            <section class="start">
                <div class="container">
                    <div class="start-cont">
                        <h3>Welcome to Natal wise - <span class="color-pink">Your All-in-one Women's Wellness Hub</span>
                        </h3>
                        <h5>Are you new to Natal wise?</h5>
                        <span class="lets"> <i>  Let us be the first to roll out the red carpet and say WELCOME! We are
                                beyond
                                thrilled to have you here!</i> </span>

                        <h4 class="color-pink">Natal wise is your go-to platform for all things "feminine".</h4>
                        <p class="para">Whether you're seeking expert guidance on health, wellness, lifestyle, personal growth and
                            future
                            insights. you're in the right place!
                        </p>


                    </div>
                    <div class="start-intro">
                        <div class="row ">


                            <div class="col-lg-6">
                                <div class="cont-section" data-aos="fade-up">
                                    <div class="natal-cont">
                                        <h3 class="advic-headings"><span class="color-pink">Meet Dr. Pratibha </span>-
                                            <br>The
                                            Visionary Behind Natal wise </h3>
                                        <p>Dr. Pratibha's journey into the world of women's health wasn't just a career
                                            choice -
                                            it was a calling. With years of experience in<span class="color-pink">
                                                gynaecology,
                                                wellness, and holistic care</span>, she realized that women's concerns
                                            were
                                            often addressed in isolation. The real need? A comprehensive, supportive,
                                            and
                                            accessible platform where females of all age group could find expert
                                            guidance
                                            tailored to their unique needs.

                                        </p>
                                        <p>Determined to create a safe space where every female-whether a young girl, an
                                            expectant mother, a career-driven woman, or a graceful elder-feels heard and
                                            supported, she founded Natalwise. This isn't just a healthcare platform;
                                            it's a
                                            community, a resource, and a place where every woman's journey matters.

                                        </p>

                                    </div>
                                </div>


                            </div>
                            <div class="col-lg-6">
                                <div class="docoter-img" data-aos="fade-up">

                                    <img src="../../../public/images/homes/dr-pr.png" />

                                </div>

                            </div>




                        </div>
                    </div>
                </div>
            </section>

            <section class="specail-note">
                <div class="container">

                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="advic-heading" data-aos="fade-up">

                                <h3 class="note-heading">A special note from
                                    <br><span class="color-pink">Dr. Pratibha</span>
                                </h3>


                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="note" data-aos="fade-up">
                                <div class="note-right">

                                    <p><span class="dots">"</span>Why do I call it Natal Vise? Well, when I became
                                        pregnant for
                                        the first time, I was completely lost, disillusioned, and confused about the
                                        entire
                                        life-transforming phase. Even though being a physiotherapist, I had no clue what
                                        to do.
                                        That's when I embarked on the journey of amping my game up by specializing in
                                        child
                                        birthing and lactation programs so that I could help other parents navigate
                                        through this
                                        crucial yet beautiful phase with wisdom and support.
                                        Basically I want life to be easier and when I find a way that helps me do that -
                                        I share
                                        it with you.<span class="dots">"</span>
                                    </p>


                                </div>
                            </div>


                        </div>


                    </div>

                </div>
            </section>


            <!-- Connected -->
            <section class="Connected">
                <div class="container">
                    <div class="Connected">
                        <h3>Stay Connected!</h3>

                        <p>We’re not just a website-we’re a movement. Join us on <span class="black-color">our podcast,
                                blog,
                                and social media</span> where we untangle all things women’s wellness, lifestyle, and
                            beyond.
                        </p>
                        <h5>If you’re ready to take charge of your health, happiness, and future -
                            <span class="color-pink"> Welcome to the Natalwise family!</span>
                        </h5>
                    </div>
                </div>
            </section>
        </div>
    </AppLayout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue"
export default {
    name: 'StartHome',
    components: {
        AppLayout,
    }
};
</script>

<style scoped>
.About-banner {
    background: #fbf2ed;
    position: relative;
    overflow: hidden;
    z-index: 1;
}
@media (min-width: 992px) {
    .col-lg-6 {
        flex: 0 0 auto;
        width: 50%;
    }
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
.About-banner h4 {
    font-size: 30px !important;
    font-weight: 500 !important;
}
.start {
    display: inline-block !important;
    width: 100% !important;
    padding: 80px !important;
}
.start-cont h3 {
    font-size: 39px !important;
    font-weight: 600 !important;
    color: #272b41 !important;
}
.start-cont h5, p {
    font-size: 18px !important;
    color: #272b41 !important;
    font-weight: 500 !important;
}
.start-cont span {
    display: block;
    padding-bottom: 10px;
    color: #272b41 !important;
}
.start-cont h4 {
    font-size: 20px !important;
    padding: 10px 0 !important;
    font-weight: 600 !important;
}

.start-cont h5, p {
    font-size: 18px !important;
}
.start-intro {
    padding-top: 80px !important;
}
@media (min-width: 992px) {
    .col-lg-6 {
        flex: 0 0 auto;
        width: 50% !important;
    }
}
.cont-section {
    padding-right: 70px;
}
.natal-cont h3 {
    font-size: 45px !important;
    font-weight: 600 !important;
    color: #272b41 !important;
}
.advic-headings {
    font-family: montserrat !important;
}
.natal-cont p {
    font-size: 18px !important;
    color: #6B7280 !important;
    font-weight: 400 !important;
}
.docoter-img img {
    border-radius: 10px;
}
.specail-note {
    background-color: #fbf2ed;
    padding: 80px 0;
}
.note-heading {
    font-size: 45px !important;
     font-family: 'Style Script', cursive !important;
    font-weight: 600 !important;
}
.note-heading span{
     font-family: 'Style Script', cursive !important;
    font-weight: 600 !important;
}
.note-right p {
    padding: 50px !important;
    text-align: center !important;
    background-color: #fc9fbc !important;
    color: white !important;
    border-radius: 20px !important;
    box-shadow: rgba(240, 46, 170, 0.4) 5px 5px, rgba(240, 46, 170, 0.3) 10px 10px, rgba(240, 46, 170, 0.2) 15px 15px, rgba(240, 46, 170, 0.1) 20px 20px, rgba(240, 46, 170, 0.05) 25px 25px;
}
.dots {
    font-size: 20px !important;
}
.Connected {
    display: inline-block !important;
    width: 100% !important;
    padding: 50px 0 !important;
}
.Connected h3 {
    font-size: 45px !important;
    font-weight: 600 !important;
    color: #404040 !important;
}
.Connected p {
    font-size: 18px !important;
    color: #6B7280 !important;
}
.Connected h5 {
    font-size: 25px !important;
    color: #272b41 !important;
    font-weight: 500 !important;
}
.black-color{
    color: black !important;
}
.start-cont .para{
    color: #6B7280 !important;
}
</style>