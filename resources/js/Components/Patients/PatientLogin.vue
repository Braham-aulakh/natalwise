<template>
  <div
    class="tab-pane"
    :class="{ active: active }"
    id="patient-login-pane"
    role="tabpanel"
    aria-labelledby="patient-login-tab"
    tabindex="0"
  >
    <form @submit.prevent="submit" class="loginForm">
      <validation-errors class="mb-3 px-4" />

      <div class="col-12">
        <div class="row">
          <div class="col-12">
            <!-- Email Field -->
            <div v-if="errors.email" class="text-danger text-end pe-4 mb-1 small">
              <span>{{ errors.email }}</span>
            </div>
            <div class="input-wrapper mb-4">
              <div class="form-control-wrapper w-100 position-relative">
                <input
                  id="email"
                  class="form-control input-style"
                  :placeholder="__('Email address')"
                  type="email"
                  v-model="form.email"
                />
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  fill="currentColor"
                  class="input-icon"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"
                  />
                </svg>
              </div>
            </div>

            <!-- Password Field -->
            <div v-if="errors.password" class="text-danger text-end pe-4 mb-1 small">
              <span>{{ errors.password }}</span>
            </div>
            <div class="input-wrapper mb-4">
              <div class="form-control-wrapper w-100 position-relative">
                <input
                  id="password"
                  class="form-control input-style"
                  type="password"
                  v-model="form.password"
                  :placeholder="__('Password')"
                />
                <span class="input-group-text end-icon">
                  <Link class="text-link small" :href="route('forgot_password')">{{ __('Forgot') }}</Link>
                  <img src="@/images/icons/Chield_alt.png" width="20" alt="icon" />
                </span>
              </div>
            </div>
          </div>
        </div>

        <!-- Submit Button -->
        <div class="row px-4 align-items-center">
          <div class="col-md-12">
            <button
              class="btn login-btn"
              :class="{ 'text-white-50': form.processing }"
              :disabled="form.processing"
            >
              <SpinnerLoader v-if="form.processing" />
              {{ __('Login') }}
              <img src="@/images/icons/loginbtnicon.png" class="ms-2" width="25" alt="" />
            </button>
          </div>
        </div>
      </div>
    </form>

    <hr class="my-4" />

    <!-- Social Login -->
    <div class="col-md-12">
      <div class="text-center">
        <p class="fw-normal fs-6 text-muted mb-4">
          {{ __("Login with social media accounts") }}
        </p>
        <div class="d-flex justify-content-center gap-4">
          <a :href="route('social_redirect', { provider: 'google', login_as: form.login_as })" class="social-icon-link">
            <img src="@/images/icons/google.png" width="35" />
          </a>
          <a :href="route('social_redirect', { provider: 'facebook', login_as: form.login_as })" class="social-icon-link">
            <img src="@/images/icons/facebook.png" width="35" />
          </a>
          <a :href="route('social_redirect', { provider: 'twitter', login_as: form.login_as })" class="social-icon-link">
            <img src="@/images/icons/twitter.png" width="35" />
          </a>
        </div>

        <!-- Register Link Moved Below -->
        <div class="text-center my-4">
          <p class="mb-0 fs-6">
            {{ __("Don't have an account") }}?
            <Link
              :href="route('register', { tab: 'patient' })"
              class="fw-semibold text-decoration-none ms-1 text-capitalize"
            >
              {{ __("Register") }}
            </Link>
          </p>
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
import SpinnerLoader from "@/Components/Shared/SpinnerLoader.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";

export default defineComponent({
  components: {
    Button,
    Input,
    Checkbox,
    SpinnerLoader,
    Label,
    ValidationErrors,
    Link,
  },

  props: {
    canResetPassword: Boolean,
    status: String,
    active: Boolean,
    redirectUrl: String,
  },

  data() {
    return {
      form: this.$inertia.form({
        email: "",
        password: "",
        remember: false,
        login_as: "patient",
        redirectUrl: null,
      }),
      errors: {
        email: null,
        password: null,
      },
    };
  },

  methods: {
    submit() {
      this.emptyErrors();
      if (this.form.email && this.form.password) {
        if (this.redirectUrl && this.redirectUrl != "") {
          this.form.redirectUrl = this.redirectUrl;
        }
        this.form
          .transform((data) => ({
            ...data,
            remember: this.form.remember ? "on" : "",
          }))
          .post(this.route("submit.login"), {
            onFinish: () => {
              this.form.reset("password");
              if (this.redirectUrl && this.redirectUrl != "") {
                this.$inertia.visit(this.redirectUrl);
              }
            },
          });
      }

      if (!this.form.email) {
        this.errors.email = "Email is required.";
      }
      if (!this.form.password) {
        this.errors.password = "Password is required.";
      }
    },
    emptyErrors() {
      this.errors.email = null;
      this.errors.password = null;
    },
  },
});
</script>

<style scoped>
.input-wrapper {
  padding: 0 1.5rem;
}

.form-control-wrapper {
  position: relative;
  border-radius: 1rem;
  background: #fff;
  box-shadow: 0 0 12px rgba(0, 0, 0, 0.06);
  overflow: hidden;
}

.input-style {
  width: 100%;
  border: none;
  border-radius: 1rem;
  background-color: #fff;
  padding: 1rem 3rem 1rem 1.25rem;
  font-size: 1rem;
  box-shadow: none;
}

.input-style:focus {
  outline: none;
  box-shadow: none;
}

.input-icon {
  position: absolute;
  right: 1.25rem;
  top: 50%;
  transform: translateY(-50%);
  color: #6c757d;
}

.end-icon {
  position: absolute;
  right: 1rem;
  top: 50%;
  transform: translateY(-50%);
  background: transparent;
  border: none;
  gap: 0.25rem;
}

.text-link {
  font-weight: 600;
  color: #6c757d;
}

.login-btn {
  width: 100%;
  font-size: 1.125rem;
  font-weight: bold;
  border-radius: 1rem;
  padding: 0.875rem 1.5rem;
  background-color: #dc356c;
  color: #fff;
  border: none;
  box-shadow: 0 4px 12px rgba(220, 53, 108, 0.3);
  transition: all 0.3s ease;
}

.login-btn:hover {
  background-color: #c72f61;
}

.social-icon-link img {
  transition: transform 0.2s ease;
}
.social-icon-link:hover img {
  transform: scale(1.1);
}
</style>
