<template>
  <div class="bg-light">
    <!-- Banner Section -->
    <section class="banner-section">
      <div class="container">
        <div class="row align-items-center">
          <!-- Left Content -->
          <div class="col-lg-6 text-start">
            <div class="banner-content" data-aos="fade-up">
              <h1 class="banner-head">
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


</style>
