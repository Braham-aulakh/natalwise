<template>
  <Navbar />
  <guest-layout>
    <div class="container-fluid px-0">
      <!-- <span class="d-flex justify-content-center mt-2">
              <Link :href="route('home')">
              <img v-if="$page.props && $page.props.settings && $page.props.settings.logo" style="width: 250px"
                :src="$page.props.settings.logo" alt="logo" />
              </Link>
            </span> -->
      <!-- 
            <h1 class="text-center pt-4 display-1 text-primary fw-bold">
              {{ __("Hi") }}, {{ __("welcome back") }}!
            </h1>
            <h3 class="text-center fs-1 fw-normal text-black">
              {{ __("Login into your account") }}
            </h3> -->

      <div class="tab-content mx-3 m-md-5" id="myTabContent">
        <patient-login :active="tab === 'patient'" :redirect_url="redirect_url"></patient-login>
        <doctor-login :active="tab === 'doctor'"></doctor-login>
        <!-- <clinic-login :active="tab === 'clinic'"></clinic-login> -->
      </div>
    </div>
  </guest-layout>
  <Footer></Footer>
</template>

<script>
import { defineComponent, ref } from "vue";
import GuestLayout from '@/Layouts/GuestLayout.vue';
import Navbar from '@/Layouts/AppIncludes/Navbar.vue';
import PatientLogin from '@/Components/Patients/PatientLogin.vue';
// import DoctorLogin from "../../Components/Doctors/DoctorLogin.vue";

import { Link } from '@inertiajs/inertia-vue3';
import Footer from "../../Layouts/AppIncludes/Footer.vue";
export default defineComponent({
  components: {
    GuestLayout,
    Navbar,
    PatientLogin,
    Link,
    Footer
  },
  props: {
    canResetPassword: Boolean,
    status: String,
    redirect_url: String,
  },
  setup() {
    const tab = ref(route().params.tab ?? 'patient');
    return { 
      tab
     };
  },
  // created() {
  //   this.tab = route().params.tab ?? "patient";
  // },

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
