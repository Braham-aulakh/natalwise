<template>
  <app-layout title="Contact">
    <div class="Top-Border">
      <pages-heading :textwhite="'true'" :heading="'Contact us'" :breadcrums="breadcrums">
      </pages-heading>
    </div>
    <section class="contact-section">
      <div class="container">
        <div class="section-header-one aos aos-init aos-animate" data-aos="fade-up">
          <h5 class="faq-heading"> {{ __("Get in Touch") }}</h5>
          <h2 class="fqz-heading">Have Any Questions</h2>
        </div>
        <div class="row">

          <div class="col-lg-7 ">
            <div class="cont-img">
              <img src="../../../public/images/homes/contact us img.jpg" />
            </div>
          </div>
          <div class="col-lg-5  d-flex">
            <div class="card contact-form-card w-100">
              <div class="card-body">
                <form action="#">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label class="mb-2">{{ __("whats your name?") }}</label>
                        <input type="text" class="form-control" placeholder="Enter Your Name"
                          id="exampleFormControlInput0" v-model="form.name" :placeholder="__('Please Enter')">

                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label class="mb-2">{{ __("email address") }}</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" v-model="form.email"
                          placeholder="name@example.com" />
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="mb-3">
                        <label class="mb-2">Phone Number</label>
                        <input type="text" class="form-control" placeholder="Enter Phone Number"
                          id="exampleFormControlInput2" v-model="form.phone" />
                      </div>
                    </div>
                    <!-- <div class="col-md-6">
												<div class="mb-3">
													<label class="mb-2">Services</label>
													<input type="text" class="form-control" placeholder="Enter Services">
												</div>
											</div> -->
                    <div class="col-md-12">
                      <div class="mb-3">
                        <label class="mb-2">Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" v-model="form.message" rows="3"
                          placeholder="Enter your comments"></textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group-btn mb-0">
                        <button type="submit" @click="submit()"
                          class="btn btn-primary prime-btn d-flex align-items-center justify-content-center gap-2"
                          :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
                          <div v-if="form.processing" class="spinner-border spinner-border-sm text-light" role="status">
                            <span class="visually-hidden">{{ __('Loading') }}...</span>
                          </div>
                          <span v-else>{{ __('Send Message') }}</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
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
import PageHeader from "@/Components/PageHeader.vue";
import ValidationErrors from "@/Components/ValidationErrors.vue";
import Navbar from "@/Layouts/AppIncludes/Navbar.vue";
import PagesHeading from "@/Components/PagesHeading.vue";

export default defineComponent({
  components: {
    AppLayout,
    Navbar,
    PageHeader,
    ValidationErrors,
    PagesHeading,
  },
  data() {
    return {
      form: this.$inertia.form({
        name: "",
        email: "",
        phone: "",
        message: "",
        agree_terms: 0,
      }),
      breadcrums: [
        {
          id: 1,
          name: this.__("Home"),
          link: "/",
        },
        {
          id: 2,
          name: this.__("Contact us"),
          link: "",
        },
      ],
    };
  },
  methods: {
    submit() {
      this.form.post(this.route("contact.store"), {
        onSuccess: () =>
          this.form.reset("name", "email", "phone", "message", "agree_terms"),
      });
    },
  },
});
</script>
<style scoped>
.contact-section {
  margin: 0;
  padding: 80px 0 55px;
}

.section-header-one {
  margin-bottom: 40px;
  text-align: center;
}

.faq-heading {
  font-weight: 600 !important;
  font-size: 30px !important;
  color: #FC9FBC !important;
  font-family: 'Great Vibes', cursive !important;
  /* font-family: 'Corinthia', cursive !important; */
  /* font-family: 'Pacifico', cursive !important; */
  margin-bottom: 12PX;
}

.fqz-heading {
  font-size: 45px !important;
  font-weight: 600 !important;
  color: #272b41;
}

.cont-img img {
  box-shadow: 0 0 13px -1px;
  border-radius: 60px;
}

.contact-form-card {
  background: #F8FBFF;
  border-radius: 10px;
  border: 0;
}

.contact-form-card .card-body {
  margin: 0;
  padding: 30px;
}

.contact-form-card .form-group-btn {
  margin-top: 25px;
}

.contact-form-card .form-group-btn .btn {
  border-radius: 5px;
  min-width: 150px;
  margin: 0;
  padding: 10px 15px;
  font-weight: 500;
}

.prime-btn:focus,
.prime-btn:hover,
.prime-btn:active,
.prime-btn.active {
  color: #fc9fbc;
  background-color: #ffffff;
  border-color: #fc9fbc;
  box-shadow: inset 0 0 0 50px #ffffff;
  -ms-transition: 0.7s;
  transition: 0.7s;
}


@media (max-width:767px) {
  .fqz-heading[data-v-46abcc56] {
        font-size: 28px !important;
        font-weight: 600 !important;
        color: #272b41;
    }
    .contact-section[data-v-46abcc56] {
	margin: 0;
	padding: 40px 0 55px;
}


}
</style>
