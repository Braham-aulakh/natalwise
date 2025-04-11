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
                src="/images/hompage/oc2.jpg"
                alt="Wellness Image"
                class="img-fluid rounded shadow w-100"
              />
            </div>
            <!-- Two Smaller Images Underneath -->
            <div class="row g-3">
              <div class="col-sm-6 aos" data-aos="fade-up">
                <img
                  src="/images/hompage/service-image19-copyright.jpg"
                  alt="img"
                  class="img-fluid rounded shadow w-100"
                />
              </div>
              <div class="col-sm-6 aos" data-aos="fade-up">
                <img
                  src="/images/hompage/service-image21-copyright.jpg"
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
                <div
                  class="accordion-item mb-2"
                  v-for="(item, index) in accordionItems"
                  :key="index"
                >
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
          </div>
        </div>
      </div>

      <!-- Stats Section -->
      <!-- Stats Section -->
<div class="row justify-content-center text-center align-items-center flex-wrap mt-5">
  <template v-for="(item, index) in stats" :key="index">
    <!-- Stat Card -->
    <div class="col-12 col-md-3 mb-4 d-flex justify-content-center">
      <div class="d-flex flex-column align-items-center">
        <div class="icon-square mb-3">
          <img :src="item.icon" :alt="item.alt" class="stat-icon" />
        </div>
        <h6 class="mb-1 fs-3 fw-bold text-dark">{{ item.value }}</h6>
        <p class="mb-0 fs-14 text-muted">{{ item.description }}</p>
      </div>
    </div>

    <!-- Arrow Icon Between Cards -->
    <div
      v-if="index < stats.length - 1"
      class="d-none d-md-flex col-md-1 align-items-center justify-content-center"
      style="padding: 20px 0px;height: 140px;width: 150px;margin-bottom: 40px;;"
    >
      <img
        src="/images/hompage/way-icon.svg"
        alt="way"
        class="way-icon"
      />
    </div>
  </template>
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

<style src="./addMain.css"></style>

