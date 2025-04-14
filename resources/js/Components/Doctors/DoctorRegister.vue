<template>
  <div class="tab-pane" :class="{ active: active }" id="doctor-register-pane" role="tabpanel"
    aria-labelledby="doctor-register-pane" tabindex="0">
    <form @submit.prevent="submit">
      <validation-errors class="mb-3" />

      <div class="col-12">
        <div class="row">
          <div class="col-12">
            <div v-if="this.errors.first_name" class="error-validation text-end px-md-5">
              <span>{{ this.errors.first_name }}</span>
            </div>
            <div class="mb-3 form-focus">
              <input type="text" class="form-control floating" :placeholder="__('first name')" v-model="form.first_name"
                id="first_name" />
              <label class="focus-label">{{
                __("first name")
              }}</label>
            </div>
            <!-- <div class="form-group px-5 mb-4">
              <div class="border border-3 rounded-3 w-100">
                <div class="form-floating">
                  <input
                    id="first_name"
                    class="form-control floating"
                    :placeholder="__('please enter')"
                    type="text"
                    v-model="form.first_name"
                  />
                  <label class="focus-label" for="floatingInput">{{
                    __("first name")
                  }}</label>
                </div>
              </div>
            </div> -->
            <div v-if="this.errors.last_name" class="error-validation text-end px-md-5">
              <span>{{ this.errors.last_name }}</span>
            </div>
            <div class="mb-3 form-focus">
              <input id="last_name" type="text" class="form-control floating" :placeholder="__('last name')"
                v-model="form.last_name" />
              <label class="focus-label" for="floatingInput">{{
                __("last name")
              }}</label>
            </div>
            <!-- <div class="form-group px-5 mb-4">
              <div class="border border-3 rounded-3 w-100">
                <div class="form-floating">
                  <input
                    id="last_name"
                    class="form-control"
                    :placeholder="__('please enter')"
                    type="text"
                    v-model="form.last_name"
                  />
                  <label class="text-muted ps-4" for="floatingInput">{{
                    __("last name")
                  }}djhsdsd</label>
                </div>
              </div>
            </div> -->

            <div v-if="this.errors.user_name" class="error-validation text-danger text-end px-md-5">
              <span>{{ this.errors.user_name }}</span>
            </div>
            <div class="mb-3 form-focus">
              <input id="user_name" :placeholder="__('user name')" type="text" class="form-control floating"
                v-model="form.user_name" />
              <label class="focus-label" for="floatingInput">{{
                __("user name")
              }}</label>
            </div>
            <!-- <div class="input-group px-5 mb-4">
              <div class="border border-3 rounded-3 w-100">
                <div class="form-floating d-flex align-items-center">
                  <input
                    id="user_name"
                    class="form-control"
                    :placeholder="__('user name')"
                    type="text"
                    v-model="form.user_name"
                  />
                  <label class="text-muted ps-4" for="floatingInput">{{
                    __("user name")
                  }}</label>
                  <span
                    class="input-group-text bg-transparent"
                    id="basic-addon2"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="25"
                      height="25"
                      fill="black"
                      class="bi bi-person me-3"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"
                      />
                    </svg>
                  </span>
                </div>
              </div>
            </div> -->

            <div class="mb-3 form-focus">
              <input id="zip_code" :placeholder="__('user name')" type="text" class="form-control floating"
                v-model="form.zip_code" />
              <label class="focus-label" for="floatingInput">{{
                __("zip code")
              }}</label>
            </div>
            <!-- <div class="form-group px-5 mb-4">
              <div class="border border-3 rounded-3 w-100">
                <div class="form-floating">
                  <input
                    id="zip_code"
                    class="form-control bg-transparent"
                    :placeholder="__('please enter')"
                    type="text"
                    v-model="form.zip_code"
                  />
                  <label class="text-muted ps-4" for="floatingInput">{{
                    __("zip code")
                  }}</label>
                </div>
              </div>
            </div> -->
            <div v-if="this.errors.email" class="error-validation text-danger text-end px-md-5">
              <span>{{ this.errors.email }}</span>
            </div>
            <div class="mb-3 form-focus">
              <input id="email" type="email" class="form-control floating" :placeholder="__('email address')"
                v-model="form.email" />
              <label class="focus-label" for="floatingInput">{{
                __("email address")
              }}</label>
            </div>

            <!-- <div class="input-group px-5 mb-4">
              <div class="border border-3 w-100 rounded-3">
                <div class="form-floating d-flex align-items-center">
                  <input
                    id="email"
                    class="form-control ps-4"
                    :placeholder="__('email address')"
                    type="email"
                    v-model="form.email"
                  />
                  <label class="text-muted ps-4" for="floatingInput">{{
                    __("email address")
                  }}</label>
                  <span
                    class="input-group-text bg-transparent"
                    id="basic-addon2"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="25"
                      height="25"
                      fill="black"
                      class="bi bi-envelope me-3"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"
                      />
                    </svg>
                  </span>
                </div>
              </div>
            </div> -->

            <div v-if="this.errors.password" class="error-validation text-danger text-end px-md-5">
              <span>{{ this.errors.password }}</span>
            </div>
            <div class="mb-3 form-focus">
              <input id="password" placeholder="••••••••••" type="password" class="form-control floating"
                v-model="form.password" />
              <label class="focus-label" for="floatingInput">{{
                __("password")
              }}</label>
            </div>

            <!-- <div class="input-group px-5 mb-4">
              <div class="border border-3 w-100 rounded-3">
                <div class="form-floating d-flex align-items-center">
                  <input
                    id="password"
                    class="form-control ps-4 bg-transparent"
                    placeholder="••••••••••"
                    type="password"
                    v-model="form.password"
                  />
                  <label class="text-muted ps-4" for="floatingInput">{{
                    __("password")
                  }}</label>
                  <span
                    class="input-group-text bg-transparent"
                    id="basic-addon2"
                  >
                    <img
                      class="me-3"
                      src="@/images/icons/Chield_alt.png"
                      width="25"
                      alt=""
                    />
                  </span>
                </div>
              </div>
            </div> -->

            <div v-if="this.errors.password_confirmation" class="error-validation text-danger text-end px-md-5">
              <span>{{ this.errors.password_confirmation }}</span>
            </div>
            <div class="mb-3 form-focus">
              <input id="password_confirmation" :placeholder="__('confirm password')" type="password"
                class="form-control floating" v-model="form.password_confirmation" />
              <label class="focus-label" for="floatingInput">{{
                __("confirm password")
              }}</label>
            </div>
            <!-- <div class="input-group px-5 mb-4">
              <div class="border border-3 rounded-3 w-100">
                <div class="form-floating d-flex align-items-center">
                  <input
                    id="password_confirmation"
                    class="form-control ps-4"
                    :placeholder="__('confirm password')"
                    type="password"
                    v-model="form.password_confirmation"
                  />
                  <label class="text-muted ps-4" for="floatingInput">{{
                    __("confirm password")
                  }}</label>
                  <span
                    class="input-group-text bg-transparent"
                    id="basic-addon2"
                  >
                    <img
                      class="me-3"
                      src="@/images/icons/Chield_alt.png"
                      width="25"
                      alt=""
                    />
                  </span>
                </div>
              </div>
            </div> -->
          </div>
        </div>
        <div class="mb-3 ">
          <div v-if="this.errors.terms" class="invalid-feedback">
            <span>{{ this.errors.terms }}</span>
          </div>

          <div class="form-check d-flex justify-content-left ">
            <input v-model="form.terms" class="form-check-input me-2" type="checkbox" value="" id="termsBoxRegister"
              :class="{ 'is-invalid': form.errors.terms }" />
            <label class="form-check-label" for="termsBoxRegister">
              {{ __("terms changes") }}
              <a class="color-pink" :href="route('company_pages.display', { slug: 'terms' })" target="_blank">{{
                __("Terms of Use & Conditions") }}</a>
              {{ __("and the") }}
              <a class="color-pink" :href="route('company_pages.display', { slug: 'privacy' })" target="_blank">{{
                __("privacy policy") }}</a>
            </label>
          </div>
        </div>
        <div class="">
          <div class="d-grid gap-2">
            <div class="text-end mb-0">
              <Link :href="route('login', { tab: 'doctor' })" class="forgot-link">{{ __("Already have an account?")
              }}</Link>

            </div>
            <button class="submit btn w-100 fs-2 fw-bold rounded-4 btn-primary"
              :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
              <SpinnerLoader v-if="form.processing" />
              {{ __("Signup") }}
              <!-- <img src="@/images/icons/loginbtnicon.png" class="ms-2" width="30" alt="" /> -->
            </button>
          </div>
          <!-- <div class="col-md-12 text-center my-3">
            <p class="mb-0 fs-3 fw-normal">
              {{ __("if you have already account") }}?
              <Link
                :href="route('login', { tab: 'doctor' })"
                class="link fw-bold"
                >{{ __("login") }}</Link
              >
            </p>
          </div> -->
        </div>
      </div>
    </form>

    <div class="login-or">
      <span class="or-line"></span>
      <span class="span-or">or</span>
    </div>
    <div class="text-center">
      <div class="row social-login">
        <!-- Facebook Login -->
        <div class="col-6 mb-2">
          <Link :href="route('social_redirect', {
            provider: 'facebook',
            login_as: this.form.login_as,
          })" class="btn btn-facebook w-100 d-flex align-items-center justify-content-center gap-2">
          <Icon icon="line-md:facebook" width="18" height="18" />
          <span>Login</span>
          </Link>
        </div>

        <!-- Google Login -->
        <div class="col-6 mb-2">
          <Link :href="route('social_redirect', {
            provider: 'google',
            login_as: this.form.login_as,
          })" class="btn btn-google w-100 d-flex align-items-center justify-content-center gap-2">
          <Icon icon="flowbite:google-solid" width="18" height="18" />
          <span>Login</span>
          </Link>
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
import { Icon } from "@iconify/vue";
export default defineComponent({
  components: {
    Head,
    Button,
    Input,
    Checkbox,
    Label,
    ValidationErrors,
    Link,
    Icon
  },

  props: {
    canResetPassword: Boolean,
    status: String,
    active: Boolean,
  },

  data() {
    return {
      form: this.$inertia.form({
        first_name: "",
        last_name: "",
        user_name: "",
        zip_code: "",
        email: "",
        password: "",
        password_confirmation: "",
        terms: false,
        login_as: "doctor",
      }),
      errors: {
        first_name: null,
        last_name: null,
        user_name: null,
        email: null,
        zip_code: null,
        password: null,
        password_confirmation: null,
      },
    };
  },

  methods: {
    submit() {
      this.emptyErrors();
      if (
        this.form.email &&
        this.form.password &&
        this.form.first_name &&
        this.form.last_name &&
        this.form.password_confirmation
      ) {
        this.form.post(this.route("register"), {
          onFinish: () => this.form.reset("password", "password_confirmation"),
        });
      }

      if (!this.form.first_name) {
        this.errors.first_name = "First Name is required.";
      }
      if (!this.form.last_name) {
        this.errors.last_name = "Last Name is required.";
      }
      if (!this.form.user_name) {
        this.errors.user_name = "User Name is required.";
      }

      if (!this.form.email) {
        this.errors.email = "Email is required.";
      }

      if (!this.form.password) {
        this.errors.password = "Password is required.";
      }

      if (!this.form.password_confirmation) {
        this.errors.password_confirmation =
          "Password Confirmation is required.";
      }
      if (!this.form.terms) {
        this.errors.terms = "You Must Agree Terms.";
      }
    },
    emptyErrors() {
      this.errors.email = null;
      this.errors.password = null;
      this.errors.first_name = null;
      this.errors.last_name = null;
      this.errors.user_name = null;
      this.errors.password_confirmation = null;
      this.errors.terms = null;
    },
  },
});
</script>
