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
              <patient-login
                :active="tab === 'patient'"
                :redirect_url="redirect_url"
              ></patient-login>
              <doctor-login :active="tab === 'doctor'"></doctor-login>
              <clinic-login :active="tab === 'clinic'"></clinic-login>
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
