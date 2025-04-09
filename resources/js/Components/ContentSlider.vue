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
              <a href="booking.html" class="btn schedule-btn">
                Schedule Appointment
              </a>
            </div>
          </div>

          <!-- Right Image -->
          <div class="col-lg-6 text-center">
            <div class="banner-img" data-aos="fade-up">
              <img
                src="@/images/icons/hero-ft.png"
                class="banner-image img-fluid"
                alt="hero image"
              />
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
  background-color: #fff6f3; /* Light peach background from the screenshot */
}
.banner-content h1 {
    font-family: "Prata", serif;
    font-weight: 400;
    font-style: normal;
    font-size: 48px;
    margin-bottom: 15px;
    color: #404040;}

.banner-section {
  padding-top: 10px;
  padding-bottom: 0;
  position: relative;
  background: #fbf2ed;
}

/* Optional: Add decorative background layer if you want */
.banner-section::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 120%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  z-index: -1;
}


.banner-content h1 {
  font-size: 2.8rem;
  font-weight: 600;
  color: #333;
  margin-bottom: 20px;
  line-height: 1.4;
}

.banner-content p {
  font-size: 1.2rem;
  color: #555;
  margin-bottom: 25px;
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
  max-width: 450px;
  width: 100%;
  object-fit: contain;
  transition: transform 0.3s ease;
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
</style>
