<template>
  <Navbar />
  <guest-layout>
    <!-- <div v-if="!selected_role">
      <select-role
        @selectRole="
          (role) => {
            selected_role = role;
          }
        "
      ></select-role>
    </div> -->
    <div class="tab-content mx-3 m-md-5">
      <div class="container-fluid px-0">
        <div class="row  justify-content-center">
          <div class="col-md-7 col-lg-6 login-left">
            <div class="">
              <img src="../../../../public/images/homes/Patient-Register.jpg"  />
            </div>
          </div>
          <div class="col-lg-6 login-right">
            <div class="w-full">
              <div class="">
                <div class="">
                  <div class="flex justify-between w-full items-center">
                    <div class="login-header">
                      <h3>
                        {{ tab === 'patient' ? 'Patient Register' : tab === 'doctor' ? 'Doctor Register' : 'Register'
                        }}
                      </h3>
                    </div>
                    <div class="flex items-right">
                      <ul class="nav gap-3 nav-tabs justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation" v-if="tab === 'doctor'">
                          <button class="rounded-3 px-4 py-2 color-pink"
                            :class="tab === 'patient' ? 'bg-pink-500 text-white' : 'bg-gray-200 text-gray-800'"
                            @click.prevent="changeTab('patient', 0)" type="button" role="tab"
                            aria-selected="tab === 'patient'">
                            {{ __("Not A Doctor ?") }}
                          </button>
                        </li>
                        <li class="nav-item" role="presentation" v-else-if="tab === 'patient'">
                          <button class="rounded-3 px-4 py-2 color-pink"
                            :class="tab === 'doctor' ? 'bg-pink-500 text-white' : 'bg-gray-200 text-gray-800'"
                            @click.prevent="changeTab('doctor', 1)" type="button" role="tab"
                            aria-selected="tab === 'doctor'">
                            {{ __("Are You A Doctor ?") }}
                          </button>
                        </li>

                        <!-- <li class="nav-item" role="presentation">
                          <button class="rounded-3 color-pink" :class="{ active: tab == 'patient' }"
                            @click.prevent="changeTab('patient', 0)" id="patient-register-tab" data-bs-toggle="tab"
                            data-bs-target="#patient-register-pane" type="button" role="tab"
                            aria-controls="patient-register-pane" aria-selected="true">
                            {{ __("Register as Patient") }}
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                      <button class="btn rounded-3 "
                        :class="{ active: tab == 'doctor' }" @click.prevent="changeTab('doctor', 1)"
                        id="doctor-register-tab" data-bs-toggle="tab" data-bs-target="#doctor-register-pane"
                        type="button" role="tab" aria-controls="doctor-register-pane" aria-selected="false">
                        {{ __("Register as Doctor") }}
                      </button>
                    </li> -->
                        <!-- <li class="nav-item" role="presentation">
                    <button
                      class="btn rounded-3 btn-outline-primary border-secondary border-1"
                      :class="{ active: tab == 'clinic' }"
                      @click.prevent="changeTab('clinic', 2)"
                      id="clinic-login-tab"
                      data-bs-toggle="tab"
                      data-bs-target="#clinic-register-pane"
                      type="button"
                      role="tab"
                      aria-controls="clinic-register-pane"
                      aria-selected="false"
                    >
                      {{ __("Register as Clinic") }}
                    </button>
                  </li> -->
                      </ul>
                    </div>

                  </div>


                  <div class="w-full" id="myTabContent">
                    <patient-register v-if="tab === 'patient'" :redirectUrl="redirect_url"
                      :selected_role="selected_role" class="w-full" />
                    <doctor-register v-else-if="tab === 'doctor'" :selected_role="selected_role" class="w-full" />
                    <!-- <patient-register v-if="tab === 'patient'" :redirectUrl="redirect_url"
                        :selected_role="selected_role"></patient-register>
                      <doctor-register v-else-if="tab === 'doctor'" :selected_role="selected_role"></doctor-register> -->
                    <!-- <clinic-register :active="tab == 'clinic'" :selected_role="selected_role"></clinic-register> -->
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>

  </guest-layout>
  <Footer></Footer>
</template>

<script>
import { defineComponent } from "vue";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import Button from "@/Components/Button.vue";
import Input from "@/Components/Input.vue";
import Checkbox from "@/Components/Checkbox.vue";
import Label from "@/Components/Label.vue";
import ValidationErrors from "@/Components/ValidationErrors.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import PatientRegister from "@/Components/Patients/PatientRegister.vue";
import DoctorRegister from "@/Components/Doctors/DoctorRegister.vue";
import ClinicRegister from "@/Components/Clinics/ClinicRegister.vue";
import Navbar from "../../Layouts/AppIncludes/Navbar.vue";
import Footer from "../../Layouts/AppIncludes/Footer.vue";
// import SelectRole from "@/Components/SelectRole.vue";

export default defineComponent({
  components: {
    GuestLayout,
    Head,
    Button,
    Input,
    Checkbox,
    Label,
    ValidationErrors,
    PatientRegister,
    DoctorRegister,
    ClinicRegister,
    Link,
    Navbar,
    Footer
  },

  props: {
    canResetPassword: Boolean,
    status: String,
  },
  data() {
    return {
      currentSlide: 0,
      selected_role: route().params.tab ?? "patient",
      tab: route().params.tab ?? "patient", // This line is important
    };
  },
  created() {
    this.tab = route().params.tab ?? "patient";
  },

  methods: {
    // changeTab(tab, val) {
    //   this.tab = tab;
    //     this.$inertia.replace(route("register"), {
    //       data: { tab: this.tab },
    //       preserveScroll: true,
    //     });
    //   this.slideTo(val);
    // },
    changeTab(newTab, val) {
      this.tab = newTab;
      this.slideTo(val);
      history.pushState(null, "", `?tab=${newTab}`);
    },
    slideTo(val) {
      this.currentSlide = val;
    },
  },
});
</script>
<style scoped>
.login-header {
  margin-bottom: 0px !important;
}
@media (min-width: 992px) {
    .col-lg-6 {
        flex: 0 0 auto;
        width: 50%;
    }
}
</style>