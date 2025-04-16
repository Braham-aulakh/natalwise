<template>
<div class=" container-fluid flex gap-4 ">
    <div class="w-full ">
      <div class="col-md-6 flex justify-right ">
        <img class="img-fluid" src="../../../../public/images/homes/Patient-Register.jpg" alt="Image" />
      </div>
    </div>
    <div
    :class="{ active: active }"
    id="doctor-login-pane"
    role="tabpanel"
    aria-labelledby="doctor-login-tab"
    tabindex="0"
    class="content top-space w-full " >
      <div class="w-full">

        <div class="row">
          <div class="col-md-8 offset-md-2">

            <!-- Login Tab Content -->
            <div class="account-content">
              <div class="row align-items-center justify-content-center">
                <!-- <div class="col-md-7 col-lg-6 login-left">
                <img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Login">
              </div> -->
                <div class="col-md-12 col-lg-6 login-right">
                  <div class="login-header">
                    <h3>Login </h3>
                  </div>
                  <form @submit.prevent="submit">
                    <validation-errors class="mb-3" />
                    <div class="mb-3 form-focus">

                      <input type="email" id="email" class="form-control floating" :placeholder="__('email address')"
                        v-model="form.email" />
                      <label class="focus-label" for="floatingInput">{{ __('email address') }}</label>
                    </div>
                    <div v-if="this.errors.email" class="error-validation text-danger text-end px-md-5">
                      <span>{{this.errors.email}}</span>
                    </div>
                    <div class="mb-3 form-focus">

                      <input type="password" class="form-control floating" id="pass_log_log" v-model="form.password"
                        name="password" :placeholder="__('password')">
                      <label class="focus-label" for="floatingInput">{{ __('password') }}</label>
                    </div>
                    <div v-if="this.errors.password" class="error-validation text-danger text-end px-md-5">
                      <span>{{this.errors.password}}</span>
                    </div>
                    <div class="text-end">
                      <Link class="forgot-link" :href="route('forgot_password')">{{ __("Forgot Password ?") }}
                      </Link>

                      <!-- <a class="" href="forgot-password.html">Forgot Password ?</a> -->
                    </div>

                    <button class="btn btn-primary w-100 btn-lg login-btn" :class="{ 'text-white-50': form.processing }"
                      :disabled="form.processing">
                      <SpinnerLoader v-if="form.processing" />
                      {{ __("login") }}
                      <!-- <img src="@/images/icons/loginbtnicon.png" class="ms-2" width="30" alt="" /> -->
                    </button>
                    <!-- <button class="btn btn-primary w-100 btn-lg login-btn" type="submit">Login</button> -->
                    <div class="login-or">
                      <span class="or-line"></span>
                      <span class="span-or">or</span>
                    </div>
                    <div class="row social-login">
                      <div class="col-6">
                        <a :href="route('social_redirect', { provider: 'facebook', login_as: this.form.login_as })" class="btn btn-facebook w-100"><i class="fab fa-facebook-f me-1"></i> Login</a>
                      </div>
                      <div class="col-6">
                        <a :href="route('social_redirect', { provider: 'google', login_as: this.form.login_as })" class="btn btn-google w-100"><i class="fab fa-google me-1"></i> Login</a>
                      </div>
                    </div>
                    <div class="text-center dont-have">Don’t have an account?
                      <Link :href="route('register',{tab:'patient'})" class="reg-link ms-1 text-capitalize">{{
                        __("register") }}
                      </Link>
                    </div>

                    <!-- <div class="col-md-12 text-center my-3">
                    <p class="mb-0 fs-3 fw-normal">
                      {{ __("Don’t have an account?") }}?
                      <Link :href="route('register', { tab: 'patient' })" class="link ms-1 text-capitalize">{{
                      __("register") }}
                      </Link>
                    </p>
                  </div> -->
                    <!-- <div class="text-center dont-have">Don’t have an account? <a href="register.html">Register</a></div> -->
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>

    </div>

  </div>

  <div
    class="tab-pane"
    :class="{ active: active }"
    id="doctor-login-pane"
    role="tabpanel"
    aria-labelledby="doctor-login-tab"
    tabindex="0"
  >
  <form @submit.prevent="submit" class="loginForm">
        <validation-errors class="mb-3" />

        <div class="col-12">
          <div class="row">
            <div class="col-12">
              <div v-if="this.errors.email" class="error-validation text-danger text-end">
                  <span >{{this.errors.email}}</span>
              </div>
              <div class="input-group px-5 mb-4">
               <div class="border border-3 w-100 rounded-3">
                <div class="form-floating d-flex align-items-center">
                  <input
                    id="email"
                    class="form-control ps-4 bg-transparent"
                    :placeholder="__('email address')"
                    type="email"
                    v-model="form.email"
                  />
                  <label class="text-muted ps-4" for="floatingInput">{{ __('email address') }}</label>
                  <span class="input-group-text bg-transparent" id="basic-addon2">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="black" class="bi bi-person ms-3" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                </svg>
                </span>
                </div>
               </div>


              </div>


              <div v-if="this.errors.password" class="error-validation text-danger text-end">
                  <span >{{this.errors.password}}</span>
              </div>
              <div class="input-group px-5 mb-4">
               <div class="border border-3 w-100 rounded-3">
                <div class="form-floating d-flex align-items-center">
                  <!-- <label for="password">{{ __('password') }}</label> -->
                  <input
                    id="pass_log_log"
                    class="form-control ps-4"
                    type="password"
                    v-model="form.password"
                    name="password"
                    :placeholder="__('password')"
                  />
                  <label class="text-muted ps-4" for="floatingInput">{{ __('password') }}</label>
                  <span class="input-group-text bg-transparent" toggle="#password-field">
                  <Link
                    class="fw-bold text-decoration-none me-3"
                    :href="route('forgot_password')"
                  >{{ __('Forgot') }}</Link>
                  <img src="@/images/icons/Chield_alt.png" width="25" alt="">
                  <!-- <i class="bi bi-key field_icon toggle-password-log input-icon fs-5"></i> -->
                </span>
                </div>
               </div>

              </div>


            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-md-12">
              <button
                class="submit btn w-100 fs-2 fw-medium rounded-3 btn-primary"
                :class="{ 'text-white-50': form.processing }"
                :disabled="form.processing"
              >
              <SpinnerLoader v-if="form.processing" />
                {{ __('login') }}
                <img src="@/images/icons/loginbtnicon.png" class="ms-2" width="30" alt="">
              </button>
            </div>
            <div class="col-md-12 text-center my-3">
              <p class="mb-0 fs-3 fw-semibold">
                {{ __('Dont have an account') }}?
                <Link
                  :href="route('register',{tab:'patient'})"
                  class="link ms-1 text-capitalize"
                >{{ __('register') }}</Link>
              </p>
            </div>
          </div>
        </div>
      </form>
      <hr />
      <div class="col-md-12">
        <div class="text-center">
          <p class="fw-medium text-muted fs-3">{{ __('Login with social media accounts') }}</p>
           <div class="d-flex align-items-center gap-3 justify-content-center">
            <a
            :href="route('social_redirect', { provider: 'google', login_as: this.form.login_as })"
          >
            <span class="icon"><img src="@/images/icons/google.png" alt=""></span>

          </a>

          <a
            :href="route('social_redirect', { provider: 'facebook', login_as: this.form.login_as })"
          >
            <span class="icon"><img src="@/images/icons/facebook.png" alt=""></span>

          </a>
          <a
            :href="route('social_redirect', { provider: 'twitter', login_as: this.form.login_as })"
          >
            <span class="icon"><img src="@/images/icons/twitter.png" alt=""></span>

          </a>
           </div>

        </div>
      </div>
  </div>
</template>
<script>
import { defineComponent } from "vue";
import Button from "@/Components/Button.vue";
import Input from "@/Components/Input.vue";
import Checkbox from "@/Components/Checkbox.vue";
import Label from "@/Components/Label.vue";
import ValidationErrors from "@/Components/ValidationErrors.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";

export default defineComponent({
  components: {
    Button,
    Input,
    Checkbox,
    Label,
    ValidationErrors,
    Link
  },

  props: {
    canResetPassword: Boolean,
    status: String,
    active: Boolean
  },

  data() {
    return {
      form: this.$inertia.form({
        email: "",
        password: "",
        remember: false,
        login_as: "doctor"
      }),
      errors: {
        email: null,
        password: null,
      }
    };
  },

  methods: {
    submit() {
        this.emptyErrors();
      if (this.form.email && this.form.password) {
        this.form
        .transform(data => ({
          ...data,
          remember: this.form.remember ? "on" : ""
        }))
        .post(this.route("submit.login"), {
          onFinish: () => this.form.reset("password")
        });
      }

      if (!this.form.email) {
        this.errors.email = 'Email is required.';
      }
      if (!this.form.password) {
        this.errors.password = 'Password is required.';
      }

    },
    emptyErrors(){
        this.errors.email = null;
        this.errors.password = null;
    }
  }
});
</script>
