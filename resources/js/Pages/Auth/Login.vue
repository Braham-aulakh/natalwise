<template>
  
  <guest-layout>

    <!-- Fixed Navbar -->
    <div class="position-fixed top-0 start-0 w-100 z-3 bg-white shadow-sm">
      <Navbar />
    </div>

    <!-- Main Content Section -->
<!-- Main Content Section -->
<!-- Main Content Section -->
<div class="container-fluid py-5 my-5">
  <div class="row justify-content-center align-items-center min-vh-100 px-3">

    <!-- Image Section (Left) -->
    <div class="col-lg-5 d-none d-lg-flex align-items-center justify-content-center">
      <img
        src="@/images/common/login.png"
        alt="Login Illustration"
        class="img-fluid"
        style="max-width: 75%; height: auto;"
      />
    </div>

    <!-- Login Form (Right) -->
    <div class="col-lg-5 col-md-8">
    <div class="bg-white p-5 rounded-4 position-relative overflow-hidden" style="min-height: 530px; border: 1px solid #adb5bd;">


        

       

        <!-- Heading -->
        <h3 class="text-left text-muted text-primary mb-2">
          {{ __('Login Doccure') }}!
        </h3>
        

        <!-- Login Form Component -->
        <!-- <div class="tab-content">
          <patient-login :active="tab === 'patient'" :redirect_url="redirect_url" />
        </div> -->
          <div class="tab-content mx-3 m-md-5" id="myTabContent">

    <div class="container-fluid px-0" style="height: 100vh">
      <div class="row">
        <div class="col-md-6">
          <img
            class="login-image"
            src="@/images/common/login.png"
            alt="Image"
          />
        </div>
        <div class="col-md-6">
          <div class="py-5 form-content">
            <!-- <span class="d-flex justify-content-center mt-2">
              <Link :href="route('home')">
                <img
                  v-if="$page.props && $page.props.settings && $page.props.settings.logo"
                  style="width: 250px"
                  :src="$page.props.settings.logo"
                  alt="logo"
                /> 
              </Link>
            </span> -->

            <!-- <h1 class="text-center pt-4 display-1 text-primary fw-bold">
              {{ __("Login Doccure") }}!
            </h1> -->
            <!-- <h3 class="text-center fs-1 fw-normal text-black">
              {{ __("Login Doccure") }}
            </h3> -->
            <!-- <ul
              class="nav gap-3 my-5 nav-tabs login-btn justify-content-center"
              id="myTab"
              role="tablist"
            >
              <li class="nav-item" role="presentation">
                <button
                  class="btn rounded-3 shadow-none btn-outline-primary"
                  :class="{ active: tab === 'patient' }"
                  @click.prevent="changeTab('patient', 0)"
                  id="patient-login-tab"
                  data-bs-toggle="tab"
                  data-bs-target="#patient-login-pane"
                  type="button"
                  role="tab"
                  aria-controls="patient-login-pane"
                  aria-selected="true"
                >
                  {{ __("Login as Patient") }}
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="btn rounded-3 shadow-none btn-outline-primary"
                  :class="{ active: tab === 'doctor' }"
                  @click.prevent="changeTab('doctor', 1)"
                  id="doctor-login-tab"
                  data-bs-toggle="tab"
                  data-bs-target="#doctor-login-pane"
                  type="button"
                  role="tab"
                  aria-controls="doctor-login-pane"
                  aria-selected="false"
                >
                  {{ __("Login as Doctor") }}
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="btn rounded-3 shadow-none btn-outline-primary"
                  :class="{ active: tab === 'clinic' }"
                  @click.prevent="changeTab('clinic', 2)"
                  id="clinic-login-tab"
                  data-bs-toggle="tab"
                  data-bs-target="#clinic-login-pane"
                  type="button"
                  role="tab"
                  aria-controls="clinic-login-pane"
                  aria-selected="false"
                >
                  {{ __("Login as Clinic") }}
                </button>
              </li>
            </ul> -->
            <div class="tab-content mx-3 m-md-5" id="myTabContent">

              <patient-login
                :active="tab === 'patient'"
                :redirect_url="redirect_url"
              ></patient-login>
              <doctor-login :active="tab === 'doctor'"></doctor-login>
              <!-- <clinic-login :active="tab === 'clinic'"></clinic-login> -->
            </div>

      </div>
    </div>

  </div>
</div>


  

  </guest-layout>
</template>

<script>
import { defineComponent, ref } from "vue";
import GuestLayout from '@/Layouts/GuestLayout.vue';
import Navbar from '@/Layouts/AppIncludes/Navbar.vue';
import PatientLogin from '@/Components/Patients/PatientLogin.vue';
import { Link } from '@inertiajs/inertia-vue3';

export default defineComponent({
  components: {
    GuestLayout,
    Navbar,
    PatientLogin,
    Link
  },
  props: {
    canResetPassword: Boolean,
    status: String,
    redirect_url: String,
  },
  setup() {
    const tab = ref(route().params.tab ?? 'patient');
    return { tab };
  },
  methods: {
    changeTab(newTab) {
      this.tab = newTab;
      history.pushState(null, '', `?tab=${newTab}`);
    },
  },
});
</script>

<style scoped>

.login-box {
  background-color: #fff;
  border-radius: 1.5rem;
}

.login-image {
  max-width: 85%;
  height: auto;

}

button.active {
  background-color: #dc356c;
  color: white;
  border-color: #dc356c;
}
</style>
