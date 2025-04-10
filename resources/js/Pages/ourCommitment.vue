<template>
  <div class="bookus-section bg-dark">
    <div class="container">
      <div class="row row-gap-4">
        <!-- Images Section -->
        <div class="col-lg-6">
          <div class="bookus-img">
            <div class="row g-3">
              <div class="col-md-12 aos" data-aos="fade-up">
             <img
  src="/assets/img/home7-image2-copyright-qv12eivus0efyhy95doixju2l0nz9ypc824gskuqcw.jpg"
  alt="img"
  class="img-fluid"
/>

              </div>
              <div class="col-sm-6 aos" data-aos="fade-up">
                <img
                  src="assets/img/service-image19-copyright.jpg"
                  alt="img"
                  class="img-fluid"
                />
              </div>
              <div class="col-sm-6 aos" data-aos="fade-up">
                <img
                  src="assets/img/service-image21-copyright.jpg"
                  alt="img"
                  class="img-fluid"
                />
              </div>
            </div>
          </div>
        </div>

        <!-- Text and Accordion Section -->
        <div class="col-lg-6">
          <div class="section-header sec-header-one mb-2 aos" data-aos="fade-up">
            <span class="faq-heading">Our Commitment</span>
            <h2 class="why-heading">
              Why Choose Us for Women’s Wellness
            </h2>
          </div>
          <p class="why-p">
            When it comes to women’s health and well-being, we go beyond just information—we provide a comprehensive, supportive, expert-driven approach, creating a safe space to help women thrive in every aspect of life. Here’s why we stand out:
          </p>
          <div class="faq-info aos" data-aos="fade-up">
            <div class="accordion" id="faq-details">
              <!-- Accordion Item 1 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <a
                    href="javascript:void(0);"
                    class="accordion-button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOne"
                    aria-expanded="true"
                    aria-controls="collapseOne"
                  >
                    01 . Our Vision
                  </a>
                </h2>
                <div
                  id="collapseOne"
                  class="accordion-collapse collapse show"
                  aria-labelledby="headingOne"
                  data-bs-parent="#faq-details"
                >
                  <div class="accordion-body">
                    <div class="accordion-content">
                      <p>
                        Welcome to Natal Wise, where every woman can unlock her potential through the
                        <span class="color-pink">Sis Code </span>
                        support, strength, and sisterhood while embracing her uniqueness and cultivating a positive outlook.
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Accordion Item 2 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <a
                    href="javascript:void(0);"
                    class="accordion-button collapsed"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo"
                    aria-controls="collapseTwo"
                  >
                    02 . Our Mission
                  </a>
                </h2>
                <div
                  id="collapseTwo"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingTwo"
                  data-bs-parent="#faq-details"
                >
                  <div class="accordion-body">
                    <div class="accordion-content">
                      <p>
                        Stronger women, brighter tomorrow—at Natal Wise, we foster strength, sisterhood, and growth, ensuring every woman feels heard, supported, safe, confident, and enlightened.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Stats Section -->
      <div class="bookus-sec">
        <div class="row g-4">
          <div class="col-lg-4" v-for="(item, index) in stats" :key="index">
            <div class="book-item">
              <div class="book-info">
                <span>
                  <img :src="item.icon" :alt="item.alt" />
                </span>
                <h6 class="text-white mb-2">{{ item.value }}</h6>
                <p class="fs-14 text-light">{{ item.description }}</p>
              </div>
              <div class="way-icon" v-if="item.showWayIcon">
                <img src="assets/img/way-icon.svg" alt="img" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</template>

<script>
export default {
  name: 'WhyChooseUs',
  data() {
    return {
      stats: [
        {
          icon: 'assets/img/icons/guidance.png',
          alt: 'heart-image',
          value: '10,000+',
          description: 'Talk to Doctor’s',
          showWayIcon: true,
        },
        {
          icon: 'assets/img/icons/star.png',
          alt: 'star-icon',
          value: '4.9/5',
          description: 'Rated highly by our patients',
          showWayIcon: true,
        },
        {
          icon: 'assets/img/icons/hth.png',
          alt: 'health-icon',
          value: '100%',
          description: "Women's Health Consults",
          showWayIcon: false,
        },
      ],
    };
  },
};
</script>

<style scoped>
/* Optional: You can add scoped custom styles here if needed */
</style>
