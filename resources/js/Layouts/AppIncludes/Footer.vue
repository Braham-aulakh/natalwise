<template>
  <footer class="footer footer-one">
    <div class="footer-top aos" data-aos="fade-up">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <div class="footer-widget footer-about">
              <div class="footer-logo">
                <a href="index.html"><img src="../../images/icons/new-logo.png" alt="logo"></a>
              </div>
              <div class="footer-about-content">
                <p>NatalWise is a unique platform crafted to help women of all ages achieve a vibrant and fulfilling
                  life, offering exclusive support and guidance designed to meet their individual needs.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="footer-widget footer-menu">
                  <h2 class="footer-title">Quick Links</h2>
                  <ul>
                    <li><a href="index.html">Her Well Being
                      </a></li>
                    <li><a href="search.html">Shop</a></li>
                    <li><a href="About Us">About Us</a></li>
                    <li><a href="video-call.html">Resources</a></li>
                    <li><a href="video-call.html">Contact us</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="footer-widget footer-menu">
                  <h2 class="footer-title">Support</h2>
                  <ul>
                    <li><a href="search.html">Privacy</a></li>
                    <li><a href="search.html">Terms of use</a></li>

                  </ul>
                </div>
              </div>


            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="footer-widget">
              <h2 class="footer-title">Contact Us</h2>
              <div class="subscribe-form">


                <button type="Book-an-Appointment
											t" class="btn">Book an Appointment
                </button>
                <h6>Stay in Touch:</h6>

              </div>
              <div class="social-icon">
                <ul>
                  <li>
                    <Link class="links"><Icon icon="ic:baseline-facebook" width="24" height="24" /></Link>
                  </li>
                  <li>
                    <Link class="links"><Icon icon="mdi:instagram" width="24" height="24" /></Link >
                  </li>
                  <li>
                    <Link class="links"><Icon icon="prime:twitter" width="20" height="20" /></Link >
                  </li>
                  <li>
                    <Link class="links"><Icon icon="mdi:linkedin" width="24" height="24" /></Link >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <!-- Copyright -->
        <div class="copyright">
          <div class="row">
            <div class="col-md-12 col-lg-12 text-center">
              <div class="copyright-text">
                <p class="mb-0">Copyright © 2025 Natal Wise. All Rights Reserved</p>
              </div>
            </div>

          </div>
        </div>
        <!-- /Copyright -->
      </div>
    </div>
  </footer>
  <!-- <footer class="footer pt-5">
    <div class="container-fluid px-6">
      <div class="row py-3 py-md-5">
        <div class="col-md-4 ps-md-0 pe-md-5 footer-margin">
          <Link class="d-block mb-4" :href="route('home')">
            <img
              v-if="
                $page.props &&
                $page.props.settings &&
                $page.props.settings.dark_logo
              "
              width="301"
              :src="$page.props.settings.dark_logo"
              alt="logo"
            />
            <span v-else class="mt-4">
              {{
                $page.props &&
                $page.props.settings &&
                $page.props.settings.site_title
                  ? $page.props.settings.site_title
                  : __("doctor consultant")
              }}
            </span>
          </Link>
          <div
            v-if="
              getPageContentType('footer_section_description') == 'textarea'
            "
          >
            <div
              class="lh-lg fs-3 text-start"
              v-html="getPageContent('footer_section_description')"
            ></div>
          </div>
          <div
            v-else-if="
              getPageContentType('footer_section_description') == 'text'
            "
          >
            <p>{{ getPageContent("footer_section_description") ?? "-" }}</p>
          </div>
          <div v-else>
            <p>{{ __("footer_tagline_1") }}</p>
          </div>
        </div>
        <div class="col-md-7 ms-md-4">
          <div class="row mt-3 mt-md-0">
            <div class="col-md-3 p-md-0 col-sm-6">
              <div class="widget">
                <h4 class="fw-bold mb-3 ps-3">{{ __("Company") }}</h4>
                <ul>
                  <li>
                    <Link class="nav-link fs-3 mb-2" :href="route('home')">{{
                      __("Home")
                    }}</Link>
                  </li>
                  <li v-if="$page.props.auth == null">
                    <Link class="nav-link fs-3 mb-2" :href="route('login')">
                      {{ __("login") }}</Link
                    >
                  </li>
                  <li>
                    <Link
                      class="nav-link fs-3 mb-2"
                      :href="route('events.listing')"
                      >{{ __("Events Calendar") }}
                    </Link>
                  </li>
                  <li>
                    <Link
                      class="nav-link fs-3 mb-2"
                      :href="route('services.listing')"
                      >{{ __("services") }}
                    </Link>
                  </li>
                  <li v-if="$page.props.auth == !null">
                    <Link
                      class="nav-link fs-3 mb-2"
                      :href="route('appointment_log')"
                      >{{ __("Medical Appointments") }}
                    </Link>
                  </li>
                
                </ul>
              </div>
            </div>
            <div class="col-md-3 mt-md-4 col-sm-6">
              <div class="widget">
                <h4 class="fw-bold mb-3 ps-3"></h4>
                <ul>
                  <li>
                    <Link class="nav-link fs-3 mb-2" :href="route('about')">
                      {{ __("about") }}
                    </Link>
                  </li>
                  <li>
                    <Link
                      class="nav-link fs-3 mb-2"
                      :href="route('company_pages.display', { slug: 'terms' })"
                      >{{ __("Terms of Use") }}</Link
                    >
                  </li>
                  <li>
                    <Link
                      class="nav-link fs-3 mb-2"
                      :href="
                        route('company_pages.display', { slug: 'privacy' })
                      "
                      >{{ __("Privacy Policy") }}
                    </Link>
                  </li>
                  <li>
                    <Link
                      class="nav-link fs-3 mb-2"
                      :href="
                        route('company_pages.display', { slug: 'cookies' })
                      "
                      >{{ __("Cookies Policy") }}
                    </Link>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-md-3 col-sm-6">
              <div class="widget">
                <h4 class="fw-bold mb-3 ps-3">{{ __("Resources") }}</h4>
                <ul>
                  <li>
                    <Link
                      class="nav-link fs-3 mb-2"
                      :href="route('doctors.listing')"
                      >{{ __("doctors") }}</Link
                    >
                  </li>
                 
                  <li>
                    <Link
                      class="nav-link fs-3 mb-2"
                      :href="route('clinics.listing')"
                      >{{ __("clinics") }}</Link
                    >
                  </li>
                  <li>
                    <Link class="nav-link fs-3 mb-2" :href="route('faqs')">{{
                      __("FAQ")
                    }}</Link>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-md-3 col-sm-6">
              <div class="widget ms-2">
                <h4 class="fw-bold mb-3 ps-3 ps-md-0" style="width: 212px">
                  {{ __("Connect with us") }}
                </h4>
                <ul class="d-flex flex-column ps-0 mb-0 social-contact-icons">
                  <li
                    class="d-flex mb-2 ps-3 ps-md-0"
                    v-if="$page.props.settings.web_facebook_link"
                  >
                    <a
                      class="text-decoration-none text-white"
                      target="_blank"
                      :href="$page.props.settings.web_facebook_link"
                      ><i class="bi bi-facebook me-3"></i
                      ><span class="fs-3">Facebook</span></a
                    >
                  </li>
                  <li
                    class="d-flex mb-2 ps-3 ps-md-0"
                    v-if="$page.props.settings.web_twitter_link"
                  >
                    <a
                      class="text-decoration-none text-white"
                      target="_blank"
                      :href="$page.props.settings.web_twitter_link"
                      ><i class="bi bi-twitter me-3"></i
                      ><span class="fs-3">Twitter</span></a
                    >
                  </li>
                  <li
                    class="d-flex mb-2 ps-3 ps-md-0"
                    v-if="$page.props.settings.web_linkedin_link"
                  >
                    <a
                      class="text-decoration-none text-white"
                      target="_blank"
                      :href="$page.props.settings.web_linkedin_link"
                      ><i class="bi bi-linkedin me-3"></i
                      ><span class="fs-3">Linkedin</span></a
                    >
                  </li>
                
                  <li
                    class="d-flex mb-2 ps-3 ps-md-0"
                    v-if="$page.props.settings.web_instagram_link"
                  >
                    <a
                      class="text-decoration-none text-white"
                      target="_blank"
                      :href="$page.props.settings.web_instagram_link"
                      ><i class="bi bi-instagram me-3"></i
                      ><span class="fs-3">Instagram</span></a
                    >
                  </li>

                
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 mb-3 mt-5 mb-lg-0">
          <div
            class="d-flex flex-column flex-md-row ms-md-5 ms-3 justify-content-md-between align-items-md-center align-items-start"
          >
            <Link
              class="btn btn-secondary fs-3 mb-3 mb-md-0 rounded-3 fw-semibold d-flex align-items-center btn-sup"
              style="justify-content: space-around"
              :href="route('contact')"
            >
              {{ __("Support")
              }}<img
                class="ms-3"
                style="width: 36px"
                src="@/images/icons/support.png"
            /></Link>
            <span class="fs-3 fw-regular mb-0 me-5"
              >© {{ new Date().getFullYear() }} {{ __("copyright") }}
              <Link
                class="text-white text-decoration-none"
                :href="route('home')"
              >
                {{
                  $page.props &&
                  $page.props.settings &&
                  $page.props.settings.site_title
                    ? $page.props.settings.site_title
                    : __(" Doctor - hub")
                }}
              </Link>
            </span>
          </div>
        </div>
      </div>
    </div>

   
    <div class="pb-4">
      <div class="container">
        <div class="row">
        </div>
      </div>
    </div>
  </footer> -->
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3";
import { Icon } from "@iconify/vue";
export default {
  components: {
    Link,
    Icon
  },
  data() {
    return {};
  },
  methods: {},
};
</script>

<style scoped>
@media (min-width: 992px) {
  .col-lg-3 {
    /* flex: 0 0 auto; */
    width: 250px !important;
  }
}
</style>
