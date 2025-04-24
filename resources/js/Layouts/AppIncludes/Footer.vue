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
                    <li><a href="/">Her Well Being
                      </a></li>
                    <li><Link :href="route('shop')">Shop</Link></li>
                    
                    <li><Link :href="route('about')">
                    About Us
                    </Link></li>
                    <li><a href="/doctors">Resources</a></li>
                    <li> <Link :href="route('contact')" > Contact us</Link></li>
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
											t" class="btn"> <a href="doctors">  Book an Appointment </a>
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
.subscribe-form .btn a{
  text-decoration: none !important;
  color: white !important;
}
.footer-one .footer-top .footer-widget.footer-menu ul li a:hover {
    color: #FC9FBC;
    background: url(../../../../public/images/homes/footer-arrow.png) no-repeat 4px !important;
    padding-left: 20px;
    -webkit-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
}
</style>
