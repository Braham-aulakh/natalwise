<template>
  <section class="app-section pt-0">
    <div class="container">
      <div class="app-bg">
        <div class="row align-items-end">
          <!-- Left Content Section -->
          <div class="col-lg-6 col-md-12">
            <div class="app-content">
              <div class="app-header aos" data-aos="fade-up">
                <h5>Working for Your Better Health.</h5>
                <h2>Download the Natal Wise App today!</h2>
              </div>
              <div class="app-scan aos" data-aos="fade-up">
                <p>Scan the QR code to get the app now</p>
                <img src="/images/hompage/scan-img.png" alt="scan-image">
              </div>
         <div class="google-imgs aos" data-aos="fade-up">
  <button type="button" class="store-btn">
    <img src="/images/hompage/google-play-icon.svg" alt="Google Play">
  </button>
  <button type="button" class="store-btn">
    <img src="/images/hompage/app-store-icon.svg" alt="App Store">
  </button>
</div>


            </div>
          </div>

          <!-- Right Image Section -->
       <div class="col-lg-6 col-md-12 aos" data-aos="fade-up">
  <div class="mobile-img">
<!-- <img src="../../../public/images/homepage/mobile-img.png" class="img-fluid" alt="img"> -->
  </div>
</div>

        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "AppSection",
  mounted() {
    if (typeof AOS !== 'undefined') {
      AOS.init();
    }
  }
}
</script>

<style scoped>
.app-section {
  font-family: Arial, sans-serif;
}

.app-bg {
  background-color: #F4A0B2;
  padding: 40px; /* optional */
  border-radius: 15px; /* optional */
}
</style>
