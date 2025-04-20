<template>
  <app-layout title="About me">
    <section class="About-banner">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="banner-content aos" data-aos="fade-up">
              <h1>About Us</h1>
              <nav aria-label="breadcrumb" class="page-breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item" aria-current="page">About Us</li>
                </ol>
              </nav>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="about-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 ">
            <div class="about-img-info">
              <div class="row">
                <div class="col-md-6">
                  <div class="about-inner-img">
                    <div class="about-img">
                      <img src="../../../public/images/homes/about-1.png" class="img-fluid" alt="about-image" />
                    </div>
                    <div class="about-img">
                      <img src="../../../public/images/homes/about-3.jpg" class="img-fluid" alt="about-image" />

                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-inner-img">
                    <div class="about-box">
                      <h4> Experience Team</h4>
                    </div>
                    <div class="about-img">
                      <img src="../../../public/images/homes/about-2.jpg" class="img-fluid" alt="about-image" />

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 ">
            <div class="about">
              <h6 class="faq-heading">About Us</h6>
              <h2 class="why-heading">Why natal wise ?</h2>
            </div>
            <div class="about-cont">

              <p>Here at Natal wise, we have developed a safe space where you feel at ease sharing any issue—small or
                large, serious or silly. If it's something you've been curious about or something you've been afraid
                to ask, we open our doors and our minds to all without prejudice. We believe that no question is too
                inane, and no issue is too absurd. Our site is meant to make it simple for you to get advice, clarify,
                or just vent in a comfortable space. We value your comfort at Natal wise and want you to always feel
                heard, respected, and able to ask what's on your mind.

              </p>
              <p class="high-light"><span class="color-pink">It's a formal but not so formal or serious but fun stage
                  to easy reach for any type of concerns whether silly or serious, trivial or unnecessary.</span></p>

              <div class="about-contact">

                <a href="contact-us.html" class="btn btn-primary">Contact With Us</a>



              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <OurCommitment />
    <spotlight-doctor-section></spotlight-doctor-section>
    <FellingBetter />
    <section class="lab-service-section">
			<div class="sec-bg">
        <img src="../../../public/images/homes/section-small-icon-02(1).svg"  class="small-icon-two" alt="Img" />
				<!-- <img src="assets/img/section-small-icon-02(1).svg" class="small-icon-two" alt="Img"> -->
			</div>
			<div class="container">
				<div class="lab-services">
					<div class="row">
						<div class="col-lg-6 d-flex">
							<div class="our-img">
                <img src="../../../public/images/homes/our-experts.jpg" alt="" />
							</div>


						</div>
						<div class="col-lg-6 d-flex">
							<div class="servive-provider-content">
								<div class="lab-service-title" data-aos="fade-up" data-aos-delay="600">
									<h2>Our Experts, Our Strength</h2>
									<h5>At Natal wise, our mission to empower women wouldn’t be possible without the dedication and expertise of our incredible professionals. You are the heart of this platform, and we are beyond grateful to have you on board.</h5>
									
									<p>From health and well-being to pregnancy, pre & post-natal care, personal growth, style, and future insights, your knowledge and support help women navigate every stage of life with confidence. Because of you, Natal wise isn’t just a platform—it’s a trusted space where women feel heard, valued, and empowered to be the best version of themselves.</p>
								<p>Thank you for sharing your wisdom, time, and passion with our growing community. Your presence here makes a real difference, shaping a world where every woman has access to guidance, support, and inspiration.

								</p>
								<h5>Interested in joining our expert panel and making an impact?</h5>
								
								</div>
								
								<div class="sec-btn">
									<a href="voice-call.html" class="btn btn-primary">Talk With Expert</a>
								</div>
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
import Navbar from "@/Layouts/AppIncludes/Navbar.vue";
import PagesHeading from "../Components/PagesHeading.vue";
import axios from "axios";
import { Link } from "@inertiajs/inertia-vue3";
import OurCommitment from "./ourCommitment.vue";
import SpotlightDoctorSection from "@/Components/Doctors/SpotlightDoctorSection.vue";
import FellingBetter from "./FellingBetter.vue";

export default defineComponent({
  components: {
    AppLayout,
    Navbar,
    Link,
    PagesHeading,
    OurCommitment,
    SpotlightDoctorSection,
    FellingBetter
  },
  data() {
    return {
      about_categories: [],
    };
  },
  props: ["about_page"],
  breadcrums: [
    {
      id: 1,
      name: "Home",
      link: "/",
    },
    {
      id: 2,
      name: "About Us",
    },
  ],
  created() {
    this.getDoctorMainCategories();
  },
  methods: {
    getDoctorMainCategories() {
      axios.get(this.route("getApiDoctorMainCategories")).then((res) => {
        this.about_categories = res.data.data;
      });
    },
  },
});
</script>


<style scoped>
.about-section {
  background-color: #ffffff;
  margin: 0;
  padding: 80px 0;
}

.about-section .about-img-info {
  padding-right: 30px;
}

.about-section .about-img-info .about-img {
  border-radius: 8px;
  margin-bottom: 25px;
}

.about-section .about-img-info .about-img img {
  border-radius: 8px;
}

.about-section .about-img-info .about-img:last-child {
  margin-bottom: 0;
}

.about-section .about-img-info .about-box {
  background: #FC9FBC;
  border-radius: 8px;
  margin: 15px 0 25px;
  padding: 45px 10px;
  text-align: center;
}

.about-section .about-img-info .about-box h4 {
  font-weight: 600;
  font-size: 20px;
  color: #ffffff;
  max-width: 208px;
  margin: 0 auto 0;
  padding: 0;
}

.faq-heading {
  font-weight: 600 !important;
  font-size: 30px !important;
  color: #FC9FBC !important;
  font-family: 'Pacifico', cursive !important;
}

.why-heading {
  font-size: 45px !important;
  font-weight: 600 !important;
}

.about-cont p {
  font-size: 18px;
  color: #6B7280 !important;
}

.high-light {
  font-weight: 500 !important;
}

.btn-primary {
  background-color: #fc9fbc !important;
  border-radius: 8px !important;
  border: 1px solid #fc9fbc !important;
}

.btn-primary:focus,
.btn-primary:hover,
.btn-primary:active,
.btn-primary.active {
  color: black !important;
  background-color: #fbf2ed !important;
  border-color: #fbf2ed !important;
}

.lab-service-section {
    background-color: #fc9fbc;
    padding: 80px 0;
    position: relative;
}
.lab-service-section .sec-bg img {
    position: absolute;
    right: 50px;
    bottom: 50px;
    animation: spin 3000ms linear infinite !important;
    max-width: 60px !important;
}

@keyframes spin {
    from {
        transform: rotate(0deg);
    }
    to {
        transform: rotate(360deg);
    }
}
.our-img img {
    border-radius: 50px;
}
.lab-service-section .servive-provider-content {
    max-width: 635px;
    margin: 0;
    padding: 0px 0 50px 30px;
}
.lab-service-section .servive-provider-content h2 {
    color: #ffffff;
    font-size: 45px;
    margin-bottom: 10px;
    font-weight: 600;
}
.lab-service-section .servive-provider-content h5 {
    color: #F8FAFC;
    font-size: 20px;
    margin-bottom: 25px;
    font-weight: 600;
}
.lab-service-section .servive-provider-content p {
    color: #F8FAFC;
    font-size: 18px !important;
}
.lab-service-section .sec-btn .btn {
    background: white !important;
    border-color: white !important;
    border-radius: 6px !important;
    font-size: 15px !important;
    padding: 15px !important;
    font-weight: 600 !important;
    transition: 0.5s all !important;
    color: #fc9fbc !important;
}
.lab-service-section .sec-btn .btn:hover {
    background: #FBF2ED;
    border-color: #FBF2ED;
    transition: 0.5s all;
}
</style>