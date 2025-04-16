<template>
  <div class="tab-content mx-3 m-md-5">
    <div class="container-fluid px-0">
      <div class="row  justify-content-center">
        <!-- Left Image Section -->
        <div class="col-md-7 col-lg-6 login-left">
          <img class="img-fluid max-w-full" src="../../../../public/images/homes/Patient-Register.jpg" alt="Image" />
        </div>

        <!-- Right Login Form Section -->
        <div class="col-lg-6 login-right" :class="{ active: active }" id="patient-login-pane" role="tabpanel"
          aria-labelledby="patient-login-tab" tabindex="0">
          <div class="w-full">
            <div class="max-w-2xl mx-auto">
              <div class="account-content">
                <div class="flex justify-center">
                  <div class="w-full">
                    <div class="login-header text-left mb-6">
                      <h3>Login </h3>
                    </div>
                    <form @submit.prevent="submit">
                      <validation-errors class="mb-3" />

                      <!-- Email -->
                      <div class="mb-3 form-focus">
                        <input type="email" class="form-control floating" :placeholder="__('email address')"
                          v-model="form.email" />
                        <label class="focus-label">{{ __("email address") }}</label>
                      </div>
                      <div v-if="errors.email" class="text-danger text-end px-md-5">
                        <span>{{ errors.email }}</span>
                      </div>

                      <!-- Password -->
                      <div class="mb-3 form-focus">
                        <input type="password" class="form-control floating" v-model="form.password"
                          :placeholder="__('password')" />
                        <label class="focus-label">{{ __("password") }}</label>
                      </div>
                      <div v-if="errors.password" class="text-danger text-end px-md-5">
                        <span>{{ errors.password }}</span>
                      </div>

                      <!-- Forgot Password -->
                      <div class="text-end">
                        <Link class="forgot-link" :href="route('forgot_password')">
                        {{ __("Forgot Password ?") }}
                        </Link>
                      </div>

                      <!-- Submit Button -->
                      <button class="btn btn-primary w-full btn-lg login-btn"
                        :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
                        <SpinnerLoader v-if="form.processing" />
                        {{ __("login") }}
                      </button>

                      <!-- Or separator -->
                      <div class="login-or my-4 text-center">
                        <span class="or-line"></span>
                        <span class="span-or">or</span>
                      </div>

                      <!-- Social Logins -->
                      <div class="text-center">
                        <div class="row social-login">
                          <div class="col-6 mb-2">
                            <Link :href="route('social_redirect', {
                              provider: 'facebook',
                              login_as: this.form.login_as,
                            })" class="btn btn-facebook w-100 d-flex align-items-center justify-content-center gap-2">
                            <Icon icon="line-md:facebook" width="18" height="18" />
                            <span>Login</span>
                            </Link>
                          </div>
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

                      <!-- Register Link -->
                      <div class="d-grid gap-2">
                        <div class="text-end mb-0 ">
                          <div class="forgot-link">
                            <span>Don’t have an account?</span>
                            <Link :href="route('register', { tab: 'patient' })" class="reg-link ms-1 text-capitalize">
                            {{ __("register") }}
                            </Link>
                          </div>

                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
import { Icon } from "@iconify/vue";

export default defineComponent({
  components: {
    Button,
    Input,
    Checkbox,
    SpinnerLoader,
    Label,
    ValidationErrors,
    Link,
    Icon
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

.btn:hover {
  background-color: transparent !important;
}
@media (min-width: 992px) {
    .col-lg-6 {
        flex: 0 0 auto;
        width: 50% !important;
    }
}
@media (min-width: 768px) {
    .col-md-7 {
        flex: 0 0 auto;
        width: 49% !important;
    }
}

</style>
