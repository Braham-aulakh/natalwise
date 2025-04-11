<template>

  <guest-layout>
    <div class="container-fluid px-0" style="height: 100vh">
      <div class="row">
        <div class="col-md-6">
          <img class="login-image" src="@/images/common/login.png" alt="Image" />
        </div>
        <div class="col-md-6">
          <div class="py-5 form-content">
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
