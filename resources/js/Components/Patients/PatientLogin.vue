<template>
  <div class=" container-fluid flex gap-4 ">
    <div class="w-full ">
      <div class="col-md-6 flex justify-right ">
        <img class="img-fluid" src="../../images/icons/login-banner.png" alt="Image" />
      </div>
    </div>
    <div class="content top-space w-full " :class="{ active: active }" id="patient-login-pane" role="tabpanel"
      aria-labelledby="patient-login-tab" tabindex="0">
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
                    <h3>Login <span>Doccure</span></h3>
                  </div>
                  <form @submit.prevent="submit">
                    <validation-errors class="mb-3" />
                    <div class="mb-3 form-focus">
                      <input type="email" class="form-control floating" :placeholder="__('email address')"
                        v-model="form.email" />
                      <label class="focus-label">{{
                        __("email address")
                      }}</label>
                    </div>
                    <div v-if="this.errors.email" class="error-validation text-danger text-end px-md-5">
                      <span>{{ this.errors.email }}</span>
                    </div>
                    <div class="mb-3 form-focus">
                      <input type="password" class="form-control floating" id="pass_log_log" v-model="form.password"
                        name="password" :placeholder="__('password')">
                      <label class="focus-label">{{
                        __("password")
                      }}</label>
                    </div>
                    <div v-if="this.errors.password" class="error-validation text-danger text-end px-md-5">
                      <span>{{ this.errors.password }}</span>
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
                        <a href="#" class="btn btn-facebook w-100"><i class="fab fa-facebook-f me-1"></i> Login</a>
                      </div>
                      <div class="col-6">
                        <a href="#" class="btn btn-google w-100"><i class="fab fa-google me-1"></i> Login</a>
                      </div>
                    </div>
                    <div class="text-center dont-have">Don’t have an account?
                      <Link :href="route('register', { tab: 'patient' })" class="reg-link ms-1 text-capitalize">{{
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

/* .login-btn {
  width: 100%;
  font-size: 1.125rem;
  font-weight: bold;
  border-radius: 1rem;
  padding: 0.875rem 1.5rem;
  color: #fff;
  border: none;
  box-shadow: 0 4px 12px rgba(220, 53, 108, 0.3);
  transition: all 0.3s ease;
} */
</style>
