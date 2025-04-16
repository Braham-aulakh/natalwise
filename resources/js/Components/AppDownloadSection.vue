<template>
  <section class="app-section pt-0">
    <div class="container">
      <div class="app-bg">
        <div class="row">
          <!-- Left Content Section -->
          <div class="left-col">
            <div class="app-content">
              <div class="app-header">
                <h5>Working for Your Better Health.</h5>
                <h2>Download the Natal Wise App today!</h2>
              </div>
              <div class="app-scan">
                <p>Scan the QR code to get the app now</p>
                <img src="/images/hompage/scan-img.png" alt="scan-image">
              </div>
<<<<<<< HEAD
              <div class="google-imgs d-flex gap-2 mt-3">
=======
              <div class="google-imgs aos" data-aos="fade-up">
>>>>>>> 4cbd2114beb65b876154935d1eb2895ccb879f83
                <button type="button" class="store-btn">
                  <img src="/images/hompage/google-play-icon.svg" alt="Google Play">
                </button>
                <button type="button" class="store-btn">
                  <img src="/images/hompage/app-store-icon.svg" alt="App Store">
                </button>
              </div>
<<<<<<< HEAD
=======


>>>>>>> 4cbd2114beb65b876154935d1eb2895ccb879f83
            </div>
          </div>

          <!-- Right Image Section -->
<<<<<<< HEAD
          <div class="right-col">
            <div class="mobile-img text-center">
              <img src="/images/hompage/mobile-img.png" alt="App Preview">
            </div>
          </div>
=======
          <div class="col-lg-6 col-md-12 aos" data-aos="fade-up">
            <div class="mobile-img">
              <img src="../../../public/images/hompage/hompage/mobile-img.png" class="img-fluid" alt="img">
            </div>
          </div>

>>>>>>> 4cbd2114beb65b876154935d1eb2895ccb879f83
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "AppSection"
}
</script>

<style scoped>
.app-header h5 {
    font-size: 24px;
    font-weight: 600;
    color: #ffffff;
    margin-bottom: 10px;
}
.app-header h2 {
    font-size: 40px;
    font-weight: 600;
    color: #ffffff;
    margin-bottom: 0;
    max-width: 565px;
}

.app-scan p {
    font-size: 14px;
    font-weight: 500;
    color: #ffffff;
    margin-bottom: 10px;
}

.app-scan img {
  max-width: 100%;
  height: auto;
}
.google-imgs img {
  max-width: 100%;
  height: auto;
}


.app-section {
  font-family: inherit;
  font-size: inherit;
  color: inherit;
  line-height: inherit;
  background-color: inherit;
  font-weight: inherit;
  font-style: inherit;
}

.app-bg {
<<<<<<< HEAD
    background: #FC9FBC;
    background-image: url(../img/aap-img-bg.png);
    background-position: right top;
    background-repeat: no-repeat;
    border-radius: 6px;
    padding: 40px 50px;}

    .align-items-end {
    align-items: flex-end !important;
=======
  background-color: #F4A0B2;
  padding: 40px;
  /* optional */
  border-radius: 15px;
  /* optional */
>>>>>>> 4cbd2114beb65b876154935d1eb2895ccb879f83
}

@media (max-width: 1199.98px) {
    .app-bg {
        margin: 0;
        padding: 30px;
    }
}
</style>