<template>
  <div class="bookus-section section-bg text-dark py-5">
    <div class="container">
      <div class="row row-gap-4 align-items-stretch">
        <!-- Image Section -->
        <div class="col-lg-6 d-flex flex-column">
          <div class="bookus-img">
            <!-- Main Image -->
            <div class="mb-3">
              <img
                src="../images/icons/ourComit.jpg"
                alt="Wellness Image"
                class="img-fluid rounded shadow w-100"
              />
            </div>
            <!-- Two Smaller Images Underneath -->
            <div class="row g-3">
              <div class="col-sm-6 aos" data-aos="fade-up">
                <img
                  src="../images/icons/ourComit-2.jpg"
                  alt="img"
                  class="img-fluid rounded shadow w-100"
                />
              </div>
              <div class="col-sm-6 aos" data-aos="fade-up">
                <img
                  src="../images/icons/ourcomit-3.jpg"
                  alt="img"
                  class="img-fluid rounded shadow w-100"
                />
              </div>
            </div>
          </div>
        </div>

        <!-- Accordion Section -->
        <div class="col-lg-6 d-flex flex-column justify-content-between">
          <div class="h-100 d-flex flex-column justify-content-between">
            <div>
              <div class="section-header mb-3">
                <span class="section-subtitle">Our Commitment</span>
                <h2 class="section-title">Why Choose Us for Women’s Wellness</h2>
              </div>
              <p class="section-description mb-4">
                When it comes to women’s health and well-being, we go beyond just information—we provide a comprehensive, supportive, expert-driven approach, creating a safe space to help women thrive in every aspect of life. Here’s why we stand out:
              </p>

              <!-- Accordion -->
              <div class="accordion">
                <div class="accordion-item mb-2" v-for="(item, index) in accordionItems" :key="index">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button"
                      :class="{ collapsed: openIndex !== index }"
                      @click="toggle(index)"
                    >
                      {{ item.title }}
                    </button>
                  </h2>
                  <div class="accordion-collapse" v-show="openIndex === index">
                    <div class="accordion-body">
                      <span v-html="item.content"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Optional: Add a spacer or action button at bottom if desired -->
          </div>
        </div>
      </div>

      <!-- Stats Section -->
      <div class="bookus-sec mt-5">
        <div class="row g-4">
          <div class="col-lg-4" v-for="(item, index) in stats" :key="index">
            <div class="book-item p-4 bg-white rounded shadow text-center h-100">
              <div class="book-info">
                <span v-if="item.icon" class="d-block mb-3">
                  <img :src="item.icon" :alt="item.alt" width="40" />
                </span>
                <h6 class="text-dark fs-4 fw-semibold">{{ item.value }}</h6>
                <p class="fs-6 text-muted">{{ item.description }}</p>
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
      openIndex: 0,
      accordionItems: [
        {
          title: '01 . Our Vision',
          content: `Welcome to Natal Wise, where every woman can unlock her potential through the
            <span class="color-pink fw-bold">Sis Code</span> support, strength, and sisterhood
            while embracing her uniqueness and cultivating a positive outlook.`,
        },
        {
          title: '02 . Our Mission',
          content: `Stronger women, brighter tomorrow—at Natal Wise, we foster strength, sisterhood,
            and growth, ensuring every woman feels heard, supported, safe, confident, and enlightened.`,
        },
      ],
      stats: [
        {
          icon: '/images/hompage/guidance.png',
          alt: 'heart-image',
          value: '10,000+',
          description: 'Talk to Doctor’s',
        },
        {
          icon: '/images/hompage/star.png',
          alt: 'star-icon',
          value: '4.9/5',
          description: 'Rated highly by our patients',
        },
        {
          icon: '/images/hompage/hth.png',
          alt: 'health-icon',
          value: '100%',
          description: "Women's Health Consults",
        },
      ],
    };
  },
  methods: {
    toggle(index) {
      this.openIndex = this.openIndex === index ? null : index;
    },
  },
};
</script>

<style scoped>
@font-face {
  font-family: 'shink';
  src: url('/fonts/shink.ttf') format('truetype');
  font-weight: normal;
  font-style: normal;
}

.section-bg {
  background-color: #fdeeea;
  font-family: 'Poppins', sans-serif;
}

.section-subtitle {
  color: #e06b8d;
  font-size: 1.1rem;
  font-weight: 600;
}

.section-title {
  font-size: 2rem;
  font-weight: 700;
  color: #1e1e2f;
}

.section-description {
  font-size: 1rem;
  color: #444;
}

.accordion-button {
  font-weight: 600;
  color: #1e1e2f;
  background-color: #f8d5dc;
  border: none;
  padding: 1rem;
  width: 100%;
  text-align: left;
  cursor: pointer;
  transition: background-color 0.2s ease;
}

.accordion-button.collapsed {
  background-color: #f4a0b2;
  color: #fff;
}

.accordion-body {
  background-color: #fff;
  color: #444;
  padding: 1rem;
  font-size: 0.95rem;
  border-top: 1px solid #eee;
}

.text-pink {
  color: #e06b8d;
}

.book-item {
  transition: all 0.3s ease;
}

.book-item:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.07);
}

.section-subtitle {
  font-weight: 600 !important;
  font-size: 30px !important;
  color: #FC9FBC !important;
  font-family: 'shink' !important;
}
</style>
