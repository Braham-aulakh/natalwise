<template>
  <div class="tab-pane active" id="patient-register-pane" role="tabpanel" aria-labelledby="patient-register-pane"
    tabindex="0">
    <div class="tab-pane active" id="patient-register-pane" role="tabpanel" aria-labelledby="patient-register-pane"
      tabindex="0">
      <div class="col-12">
        <div class="row">
          <form @submit.prevent="submit">
            <validation-errors class="mb-3" />
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
              <div class="border border-3 w-100 rounded-3">
                <div class="form-floating">
                  <input id="first_name" class="form-control floating" :placeholder="__('first name')" type="text"
                    v-model="form.first_name" />
                  <label class="text-muted ps-4" for="floatingInput">{{
                    __("first name")
                  }}ddddd</label>
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


            <div class="mb-3 ">
              <div v-if="this.errors.terms" class="invalid-feedback">
                <span>{{ this.errors.terms }}</span>
              </div>
              <div class="form-check d-flex justify-content-left my-4">
                <input v-model="form.terms" class="form-check-input me-2" type="checkbox" value="" id="termsBoxRegister"
                  :class="{ 'is-invalid': form.errors.terms }" />
                <label class="form-check-label" for="termsBoxRegister">
                  {{ __("terms changes") }}
                  <a :href="route('company_pages.display', { slug: 'terms' })" target="_blank" class="color-pink">{{ __("Terms of Use & Conditions") }}</a>
                  {{ __("and the") }}
                  <a :href="route('company_pages.display', { slug: 'privacy' })" target="_blank" class="color-pink" >{{ __("privacy policy")
                    }}</a>
                </label>
              </div>
            </div>

            <div class="d-grid gap-2">
              <div class="text-end mb-0">
                <Link :href="route('login', { tab: 'patient' })" class="forgot-link">{{ __("Already have an account?")
                }}</Link>

              </div>
              <button class="submit btn w-100 fs-2 fw-bold rounded-4 shadow-find btn-primary"
                :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
                <SpinnerLoader v-if="form.processing" />
                {{ __("Signup") }}
                <!-- <img src="@/images/icons/loginbtnicon.png" class="ms-2" width="30" alt="" /> -->
              </button>
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
      <Link 
        :href="route('social_redirect', {
          provider: 'facebook',
          login_as: this.form.login_as,
        })" 
        class="btn btn-facebook w-100 d-flex align-items-center justify-content-center gap-2"
      >
        <Icon icon="line-md:facebook" width="18" height="18" />
        <span>Login</span>
      </Link>
    </div>

    <!-- Google Login -->
    <div class="col-6 mb-2">
      <Link 
        :href="route('social_redirect', {
          provider: 'google',
          login_as: this.form.login_as,
        })" 
        class="btn btn-google w-100 d-flex align-items-center justify-content-center gap-2"
      >
        <Icon icon="flowbite:google-solid" width="18" height="18" />
        <span>Login</span>
      </Link>
    </div>
  </div>
</div>

        </div>
      </div>
    </div>
  </div>
</template>

<!-- <div class="col-lg-6 mb-2 mb-md-0">
              <input type="text" class="form-control rounded-3 px-3 shadow-sm auth-input" :placeholder="__('first name')" v-model="form.first_name"
                :class="{ 'is-invalid': form.errors.first_name }" required />
              <div v-if="form.errors.first_name" class="invalid-feedback">
                <span>{{ form.errors.first_name }}</span>
              </div>
            </div>
            <div class="col-lg-6">
              <input type="text" class="form-control rounded-3 px-3 shadow-sm auth-input" :placeholder="__('last name')" v-model="form.last_name"
                :class="{ 'is-invalid': form.errors.last_name }" required />
              <div v-if="form.errors.last_name" class="invalid-feedback">
                <span>{{ form.errors.last_name }}</span>
              </div>
            </div>

            <div class="row mb-2 mb-md-4">
                <div class="col-lg-6 mb-2 mb-md-0">
              <input type="text" class="form-control rounded-3 px-3 shadow-sm auth-input" :placeholder="__('user name')" v-model="form.user_name"
                :class="{ 'is-invalid': form.errors.user_name }" required />
              <div v-if="form.errors.user_name" class="invalid-feedback">
                <span>{{ form.errors.user_name }}</span>
              </div>
            </div>

            </div>
           <div class="row mb-2 mb-md-4">
            <div class="col-lg-6 mb-2 mb-md-0">
              <input type="password" class="form-control rounded-3 px-3 shadow-sm auth-input" placeholder="••••••••••" v-model="form.password"
                :class="{ 'is-invalid': form.errors.password }" required />
              <div v-if="form.errors.password" class="invalid-feedback">
                <span>{{ form.errors.password }}</span>
              </div>
            </div>
            <div class="col-lg-6">
              <input type="password" class="form-control rounded-3 px-3 shadow-sm auth-input" placeholder="••••••••••" v-model="form.password_confirmation"
                :class="{ 'is-invalid': form.errors.password_confirmation }" required />
              <div v-if="form.errors.password_confirmation" class="invalid-feedback">
                <span>{{ form.errors.password_confirmation }}</span>
              </div>
            </div> -->

<!-- <form @submit.prevent="submit" class="loginForm"> -->

<!-- <div class="col-12">
        <div class="row">
          <div class="col-12">
            <div v-if="this.errors.first_name" class="error-validation text-danger text-end">
              <span>{{ this.errors.first_name }}</span>
            </div>
            <div class="form-group mb-4">
              <div class="form-floating">
                <input id="first_name" class="form-control border border-primary" :placeholder="__('First Name')"
                  type="text" v-model="form.first_name" />
                <label class="text-muted" for="floatingInput">{{ __('first name') }}</label>
              </div>
            </div>
            <div v-if="this.errors.last_name" class="error-validation text-danger text-end">
              <span>{{ this.errors.last_name }}</span>
            </div>
            <div class="form-group mb-4">
              <div class="form-floating">

                <input id="last_name" class="form-control border border-primary" :placeholder="__('Last Name')"
                  type="text" v-model="form.last_name" />

                <label class="text-muted" for="last_name">{{ __('last name') }}</label>
              </div>
            </div>
            <div v-if="this.errors.user_name" class="error-validation text-danger text-end">
              <span>{{ this.errors.user_name }}</span>
            </div>
            <div class="form-group mb-4">
              <div class="form-floating">

                <input id="user_name" class="form-control border border-primary" :placeholder="__('User Name')"
                  type="text" v-model="form.user_name" />

                <label class="text-muted" for="user_name">{{ __('user name') }}</label>
              </div>
            </div>
            <div v-if="this.errors.email" class="error-validation text-danger text-end">
              <span>{{ this.errors.email }}</span>
            </div>
            <div class="form-group mb-4">
              <div class="form-floating">
                <input id="email" class="form-control border border-primary" :placeholder="__('Email')" type="email"
                  v-model="form.email" />
                <label class="text-muted" for="email">{{ __('email address') }}</label>
              </div>
            </div>
            <div v-if="this.errors.password" class="error-validation text-danger text-end">
              <span>{{ this.errors.password }}</span>
            </div>
            <div class="form-group mb-4">
              <div class="form-floating">

                <input id="pass_log_log" class="form-control border border-primary" type="password"
                  v-model="form.password" name="password" :placeholder="__('Password')" />
                <label class="text-muted" for="password">{{ __('password') }}</label>
              </div>
              <span toggle="#password-field"
                class="fa fa-fw fa-eye field_icon toggle-password-log position-absolute input-icon fs-5"></span>
            </div>
            <div v-if="this.errors.password_confirmation" class="error-validation text-danger text-end">
              <span>{{ this.errors.password_confirmation }}</span>
            </div>
            <div class="form-group mb-4">
              <div class="form-floating">

                <input id="pass_log_log" class="form-control border border-primary" type="password"
                  v-model="form.password_confirmation" name="password_confirmation"
                  :placeholder="__('Confirm Password')" />
                <label class="text-muted" for="password_confirmation">{{ __('confirm password') }}</label>
              </div>
              <span toggle="#password-field"
                class="fa fa-fw fa-eye field_icon toggle-password-log position-absolute input-icon fs-5"></span>
            </div>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-12 mb-3">
            <div v-if="this.errors.terms" class="error-validation text-danger text-end">
              <span>{{ this.errors.terms }}</span>
            </div>
            <div class="form-check">
              <input v-model="form.terms" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" style="font-size: 14px;" for="flexCheckDefault">
                {{ __('terms changes') }}
                <a :href="route('company_pages.display', { slug: 'terms' })" target="_blank">Terms of Use & Conditions</a>

                and the <a :href="route('company_pages.display', { slug: 'privacy' })" target="_blank">Privacy Policy</a>
              </label>
            </div>
          </div>
          <div class="col-md-4">
            <button class="submit btn btn-primary" :class="{ 'text-white-50': form.processing }"
              :disabled="form.processing">
              <div v-show="form.processing" class="spinner-border spinner-border-sm">
                <span class="visually-hidden">{{ __('loading') }}...</span>
              </div>
              {{ __('register') }}
            </button>
          </div>
          <div class="col-md-8 text-end">
            <p class="mb-0">
              {{ __('already have a account') }}?
              <Link :href="route('login')" class="link ms-2 text-capitalize">{{ __('login') }}</Link>
            </p>
          </div>
        </div>
      </div> -->
<!-- </form> -->

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
    selected_role: String,
  },

  data() {
    return {
      form: this.$inertia.form({
        first_name: "",
        last_name: "",
        user_name: "",
        email: "",
        password: "",
        password_confirmation: "",
        terms: 0,
        login_as: this.selected_role,
      }),
      errors: {
        first_name: null,
        last_name: null,
        user_name: null,
        email: null,
        password: null,
        password_confirmation: null,
        terms: null,
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
      if (!this.form.user_name) {
        this.errors.user_name = "User Name is required.";
      }
    },
    emptyErrors() {
      this.errors.email = null;
      this.errors.password = null;
      this.errors.first_name = null;
      this.errors.last_name = null;
      this.errors.password_confirmation = null;
      this.errors.terms = null;
      this.errors.user_name = null;
    },
  },
});
</script>
