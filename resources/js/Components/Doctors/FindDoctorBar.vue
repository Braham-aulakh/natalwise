<template>
  <div class="bar-search-doctor d-flex flex-column justify-content-center" v-if="home">
    <div class="container search_section">
      <!-- Title Section -->
      <!-- <div class="search-section mx-auto text-center px-3 mb-5">
        <h2 class="fs-1 fw-bold mb-4 section-title " style="color: #fc9fbc !important; font-weight: 500; font-size: 33px !important;">
          {{ __(title) }}
        </h2>

        <div class="d-flex justify-content-center">
          <div class="search_bar bg-white rounded-4">
            <div
              class="d-flex doctor-search flex-column flex-md-row align-items-md-center align-items-start justify-content-start">
              <input v-model="form.search" type="search" @input="updateQuery" :placeholder="__('Search Doctors')"
                class="fs-3 border rounded shadow-none w-100 px-3 py-2 mb-3 mb-md-0 me-md-2"
                style="border-color: #ced4da;" data-bs-toggle="dropdown" aria-expanded="false" />
              <button @click="searchData" type="button" :disabled="isLoading" class="btn log-btn">
                <SpinnerLoader v-if="isLoading" />
                {{ getPageContent("general_search_btn_text") ?? __("search") }}
              </button>
            </div>
          </div>
        </div>

      </div> -->

      <!-- Advice Section -->
      <div>
        <section class="advice-section">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="advic-heading">
                  <h3 class="advic-headings">Discover personalized advice
                    tailored to every stage of your journey—health, relationships,
                    career, fashion, and so much more.</h3>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="advic-cont aos" data-aos="fade-up">
                  <div>
                    <p class="advice-p"> Natalwise is dedicated to providing every woman with personalized,
                      compassionate guidance. Our platform seamlessly connects you with expert professionals via video
                      consultations, delivering bespoke advice across health, relationships, career, fashion, and
                      personal development. Empowering women to flourish at every stage of life, Natalwise is your
                      trusted companion for living with confidence, grace, and boldness.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

    </div>
  </div>
</template>

<script>
import { defineComponent } from "vue";
import SpinnerLoader from "@/Components/Shared/SpinnerLoader.vue";
import { Link } from "@inertiajs/inertia-vue3";

export default defineComponent({
  components: {
    SpinnerLoader,
    Link,
  },
  props: {
    title: String,
    search: String,
    is_redirect: {
      type: Boolean,
      default: true,
    },
    home: {
      type: Boolean,
      default: false,
    },
    is_doctor_page: {
      type: Boolean,
      default: false,
    },
  },
  data() {
    return {
      form: {
        search: "",
        latitude: "",
        longitude: "",
      },
      isLoading: false,
      current_address: "",
    };
  },
  mounted() {
    this.getCurrentLocation();
    if (this.$page?.props?.search) {
      this.form.search = this.$page.props.search;
    }
  },
  methods: {
    callHref() {
      let url = this.route("doctors.listing");
      const params = new URLSearchParams();

      if (this.form.search) params.append("search", this.form.search);
      if (this.form.latitude) params.append("latitude", this.form.latitude);
      if (this.form.longitude) params.append("longitude", this.form.longitude);

      if (params.toString()) url += `?${params.toString()}`;
      return url;
    },
    searchData() {
      if (!this.is_doctor_page) {
        this.$inertia.replace(this.callHref());
      } else {
        this.$emit("updateFormData", this.form);
      }
    },
    updateQuery() {
      const searchParams = new URLSearchParams(window.location.search);
      if (this.form.search) searchParams.set("search", this.form.search);
      else searchParams.delete("search");

      if (this.form.latitude && this.form.longitude) {
        searchParams.set("latitude", this.form.latitude);
        searchParams.set("longitude", this.form.longitude);
      }

      if (!this.current_address) {
        searchParams.delete("latitude");
        searchParams.delete("longitude");
      }

      const newUrl = `${window.location.pathname}?${searchParams.toString()}`;
      window.history.pushState({}, "", newUrl);
    },
    async getCurrentLocation() {
      this.form.latitude = this.location_data?.lat ?? "";
      this.form.longitude = this.location_data?.lng ?? "";
    },
  },
});
</script>

<style scoped>
.bar-search-doctor {
  background-color: #fefefe;
  padding: 2rem 0;
}

.advice-p {
  font-size: 1rem;
  color: #555;
  line-height: 1.6;
}

.btn.log-btn {
  background-color: #fc9fbc;
  color: #fff;
  font-weight: bold;
  padding: 10px 20px;
  border: none;
  border-radius: 6px;
  transition: all 0.3s ease-in-out;
}

.btn.log-btn:hover {
  background-color: #ff77a9;
}

.advic-headings {
  font-family: montserrat;
  font-size: 35px !important;
  font-weight: 500 !important;
}

.advice-p {
  font-size: 18px;
  font-family: montserrat;
  text-align: right;
}

/* .search_section {
  padding: 50px 0;
} */
.advic-cont.aos.aos-init.aos-animate {
  padding: 0 70px;
}

.search_bar {
  width: 100%;
  max-width: 960px;
  padding: 0 30px;
  /* display: flex; */
  justify-content: center;
  margin: 0 auto;
}
</style>






<!-- 
	<section class="advice-section">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="advic-heading" data-aos="fade-up">

								<h3 class="advic-headings">Discover personalized advice
									tailored to every stage of your journey—health, relationships,
									career, fashion, and so much more.</h3>

							</div>

						</div>
						
						<div class="col-lg-6">
							<div class="advic-cont aos" data-aos="fade-up">
								<div >
									<p class="advice-p"> Natalwise is dedicated to providing every woman with personalized, compassionate guidance. Our platform seamlessly connects you with expert professionals via video consultations, delivering bespoke advice across health, relationships, career, fashion, and personal development. Empowering women to flourish at every stage of life, Natalwise is your trusted companion for living with confidence, grace, and boldness.
									
									</p>
								
							</div>
						</div>
						

					</div>
					
					

					
				</div>
			</section> -->