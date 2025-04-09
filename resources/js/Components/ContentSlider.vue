<template>
  <div class="bg-light">
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
     <section class="advice-section">
    <div class="container">
      <div class="row align-items-center">
        <!-- Left Column: Heading -->
        <div class="col-lg-6">
          <div class="advic-heading" data-aos="fade-up">
            <h3 class="advic-headings">
              Discover personalized advice tailored to every stage of your
              journey—health, relationships, career, fashion, and so much more.
            </h3>
          </div>
        </div>

        <!-- Right Column: Content -->
        <div class="col-lg-6">
          <div class="advic-cont aos" data-aos="fade-up">
            <p class="advice-p">
              Natalwise is dedicated to providing every woman with personalized,
              compassionate guidance. Our platform seamlessly connects you with expert
              professionals via video consultations, delivering bespoke advice across
              health, relationships, career, fashion, and personal development.
              Empowering women to flourish at every stage of life, Natalwise is your
              trusted companion for living with confidence, grace, and boldness.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>
</template>


<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
  components: {
    Link,
  },
};
</script>

<style scoped>
.bg-light {
  background-color: #fff6f3; /* Light peach background from the screenshot */
}

.banner-section {
  padding : 60px 0;
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
