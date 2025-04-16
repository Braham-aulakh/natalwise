<template>
  <div>
    <div class="p-6 testimonial-section-ten need-to-know-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-2 text-center">
            <!-- Section Header -->
            <div class="section-header-one section-header-slider text-center">
              <h5 class="faq-heading">Testimonials</h5>
              <h2 class="section-title-t">What Our Patients Say</h2>
              <p>Very happy with his care and would recommend to anyone else. Professional and informative.</p>
            </div>

            <!-- Dynamic Page Title -->
            <div class="text-center">
              <h1 data-aos="fade-down" data-aos-duration="1500" class="heading-fs"
                v-html="getPageContent('review_section_title')"></h1>
              <p v-html="getPageContent('review_section_description')" class="subheading-fs"></p>
            </div>
          </div>

          <div class="col-md-12 position-relative">
            <!-- Custom Nav Buttons -->
            <button class="owl-prev custom-carousel-nav" @click="prevSlide">
              <Icon icon="iconamoon:arrow-left-2-bold" width="24" height="24" />
            </button>
            <button class="owl-next custom-carousel-nav" @click="nextSlide">
              <Icon icon="iconamoon:arrow-right-2-bold" width="24" height="24" />
            </button>

            <!-- Carousel -->
            <Carousel
              ref="carouselRef"
              :items-to-show="3"
              :wrap-around="true"
              :mouse-drag="true"
              :breakpoints="breakpoints"
              class="review-carousel"
            >
              <Slide v-for="review in reviews.slice(0, 6)" :key="review.id">
                <div class="card h-100 p-3 review-card mx-2">
                  <div class="card-body">
                    <div class="d-flex align-items-start gap-3">
                      <div class="rounded-circle overflow-hidden" style="width: 76px; height: 76px">
                        <img
                          v-if="review.doctor_image || review.clinic_image"
                          :src="review.doctor_image || review.clinic_image"
                          class="img-fluid object-fit-cover"
                          alt=""
                        />
                        <img v-else src="@/images/icons/user.png" style="width: 76px; height: 76px" alt="" />
                      </div>
                      <div class="d-flex flex-column">
                        <h2 class="fs-2">{{ review.doctor_name ?? review.clinic_name }}</h2>
                        <h6 class="fs-5">{{ getCategoryNames(review.main_categories) }}</h6>
                      </div>
                    </div>
                    <p class="paragraph lineclamp-2">{{ review.comment }}</p>
                    <star-rating
                      :rating="review.rating"
                      :star-size="20"
                      :read-only="true"
                      :increment="0.01"
                      :show-rating="false"
                    />
                    <div class="d-flex align-items-center gap-3 mt-4">
                      <img
                        v-if="review.patient.image"
                        :src="review.patient.image"
                        class="rounded-circle"
                        style="width: 40px; height: 40px"
                        alt=""
                      />
                      <img v-else src="@/images/icons/user.png" style="width: 40px; height: 40px" alt="" />
                      <h2 class="fs-4 mb-0">{{ review.patient.name }}</h2>
                    </div>
                  </div>
                </div>
              </Slide>
            </Carousel>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { defineComponent, ref } from "vue";
import { Link } from "@inertiajs/inertia-vue3";
import axios from "axios";
import { Carousel, Slide } from "vue3-carousel";
import "vue3-carousel/dist/carousel.css";
import { Icon } from "@iconify/vue";

export default defineComponent({
  components: {
    Link,
    Carousel,
    Slide,
    Icon,
  },
  setup() {
    const carouselRef = ref(null);

    const prevSlide = () => {
      carouselRef.value?.prev();
    };

    const nextSlide = () => {
      carouselRef.value?.next();
    };

    return {
      carouselRef,
      prevSlide,
      nextSlide,
    };
  },
  data() {
    return {
      reviews: [],
      breakpoints: {
        1024: { itemsToShow: 3 },
        768: { itemsToShow: 2 },
        0: { itemsToShow: 1 },
      },
    };
  },
  created() {
    this.getAllReviews();
  },
  methods: {
    getAllReviews() {
      axios.get(this.route("getApiAllReviews")).then((res) => {
        this.reviews = res.data.data;
      });
    },
    getCategoryNames(main_categories) {
      return main_categories
        .slice(0, 3)
        .map((category) => category.name)
        .join(" | ");
    },
    getPageContent(key) {
      // Replace with actual logic or prop
      return "";
    },
  },
});
</script>

<style scoped>
.testimonial-section-ten.need-to-know-section {
  background-color: #F8FAFC;
  position: relative;
  background-image: url(../../../public/images/homes/flowerTestimonial.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
}

.review-carousel {
  padding: 0 0.5rem;
}

.custom-carousel-nav {
  position: absolute;
  top: 45%;
  transform: translateY(-50%);
  background: white;
  border: none;
  border-radius: 50%;
  padding: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  z-index: 10;
    font-size: 30px;
}

.owl-prev {
  left: -30px;
}

.owl-next {
  right: -30px;
}


.faq-heading {
    font-weight: 600 !important;
    font-size: 36px !important;
    color: #FC9FBC !important;
  font-family: 'Style Script', cursive !important;
}

.section-title-t {
  font-size: 45px;
  font-weight: 600;
}

.section-header-one.section-header-slider.text-center p {
  font-size: 18px !important;
  margin-bottom: 1rem; /* reduced space under paragraph */
 color:  #212529 !important;
}
/* Ensure the color for all h2 elements is applied */
h2 {
  font-weight: bold !important;
  color: #272b41 !important;
}

/* Ensure that the h2 in specific areas gets the same color */
.section-header-one h2, .review-card h2 {
  font-weight: bold !important;
  color: #272b41 !important;
}

/* Hover Effect on Review Cards */
.review-card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  
}

.review-card:hover {
  transform: scale(1.05); /* Slightly enlarge the card */
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Add shadow effect */
   background-color: #FC9FBC;
}

/* Hover Effect on Custom Carousel Nav Buttons */
.custom-carousel-nav:hover {
  background-color: #FC9FBC; /* Change background color */
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Add shadow effect */
  cursor: pointer; /* Change cursor to pointer */
}

.custom-carousel-nav:active {
  background-color: #e68eae; /* Darker shade on active click */
}


</style>



  
