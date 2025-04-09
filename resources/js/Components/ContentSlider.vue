<template>
  <div class="bg-light">
    <!-- Banner Section -->
    <section class="banner-section">
      <div class="container">
        <div class="row align-items-center">
          <!-- Left Content -->
          <div class="col-lg-6 text-start">
            <div class="banner-content" data-aos="fade-up">
              <h1>
                Natalwise: Your <br />
                All-in-One Wellness Hub<br />
                for Every female, Every <br />
                Stage of Life!
              </h1>
              <p>Health | Fashion | Relationships | Lifestyle & More</p>
              <a href="booking.html" class="btn ">
                Schedule Appointment
              </a>
            </div>
          </div>

          <!-- Right Image -->
          <!-- <div class="col-lg-6 text-center">
							<div class="banner-img aos" data-aos="fade-up">
								<div class="img-hero">
								<img src="assets/img/hero-ft.png" class="img-fluid" alt="patient-image"></div>
								
							</div>
						</div> -->

          <div class="col-lg-6 text-center">
            <div class="banner-img aos" data-aos="fade-up">
              <img src="@/images/icons/hero-ft.png" class=" img-fluid" alt="hero image" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Advice Section + FindDoctorBar -->

  </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import FindDoctorBar from "@/Components/Doctors/FindDoctorBar.vue";

export default {
  components: {
    Link,
    FindDoctorBar,
  },
};
</script>


<style scoped>
.bg-light {
  background-color: #fff6f3;
  /* Light peach background from the screenshot */
}


.banner-section{
    background: #fbf2ed;
    padding: 25px 0 0 0;
    position: relative;
    overflow: hidden;
    z-index: 1;
}

/* Optional: Add decorative background layer if you want */
/* .banner-section::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100% !important;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  z-index: -1;
} */

.banner-content h1 {
  font-family: "Prata", serif;
  font-weight: 400 !important;
  font-style: normal;
  font-size:48px !important;
  margin-bottom: 15px;
  color: #404040;
}

.banner-content p {
  font-weight: 500;
  font-size: 20px;
  margin-bottom: 40px;
  color: #374151;
}

.schedule-btn {
  background-color: #ffd6e0;
  color: #ff4d88;
  padding: 12px 25px;
  font-size: 1rem;
  font-weight: 500;
  border: 2px solid #ffd6e0;
  border-radius: 8px;
  transition: background 0.3s ease, color 0.3s ease;
  text-decoration: none;
}

.schedule-btn:hover {
  background-color: #ff4d88;
  color: #fff;
  border-color: #ff4d88;
}

.banner-image {
  /* max-width: 450px; */
  width: 100%;
  height: 100%;
  max-height: 100vh;
  object-fit: contain;
  transition: transform 0.3s ease;
}

.banner-img {
  position: relative;
  text-align: right;
  /* top: 260px; */
  left: -20px;
  -webkit-animation: float 2s ease-in-out infinite;
  animation: float 2s ease-in-out infinite;
}

.banner-img {
  /* top: 260px; */
  left: -20px;
  -webkit-animation: float 2s ease-in-out infinite;
  animation: float 2s ease-in-out infinite;
}

.banner-image:hover {
  transform: scale(1.05);
}

section.banner-section {
  background: #fbf2ed;
}



@media screen and (max-width: 768px) {
  .banner-content h1 {
    font-size: 2rem;
  }

  .banner-content p {
    font-size: 1rem;
  }

  .schedule-btn {
    font-size: 0.95rem;
    padding: 10px 20px;
  }

  .banner-image {
    max-width: 100%;
  }

}

[data-aos^=fade][data-aos^=fade].aos-animate {
  opacity: 1;
  transform: none !important;
}

[data-aos^=fade][data-aos^=fade].aos-animate img {
  transform: none !important;
}

.banner-content .btn {
  font-weight: 500;
  border-radius: 8px;
  margin: 0;
  padding: 12px 31px;
  min-width: 214px;
  display: inline-block;
  border: 1px solid #fc9fbc;
  color: #fc9fbc;
  font-size: 20px;
  box-shadow: inset 0 0 0 0 #ffffff;
  -webkit-transition: 0.5s;
  -ms-transition: 0.5s;
  transition: 0.5s;
}

.banner-content .btn:hover {
  color: #fc9fbc;
  border-color: #fc9fbc;
  background-color: #ffffff;
  box-shadow: inset 0 0 0 50px #ffffff;
  /* -webkit-transition: 0.5s; */
  /* -ms-transition: 0.5s; */
  transition: 0.5s;
}

.banner-content {
  padding: 50px 0;
  position: relative;
}

</style>
