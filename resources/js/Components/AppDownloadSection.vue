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

              <!-- Only ONE google-imgs div -->
              <div class="google-imgs d-flex gap-2 mt-3">
                <button type="button" class="store-btn">
                  <img src="/images/hompage/google-play-icon.svg" alt="Google Play">
                </button>
                <button type="button" class="store-btn">
                  <img src="/images/hompage/app-store-icon.svg" alt="App Store">
                </button>
              </div>

            </div> <!-- .app-content -->
          </div> <!-- .left-col -->

          <!-- Right Image Section -->
          <div class="right-col">
            <div class="mobile-img text-center">
              <img src="/images/hompage/mobile-img.png" alt="App Preview">
            </div>
          </div>

        </div> <!-- .row -->
      </div> <!-- .app-bg -->
    </div> <!-- .container -->
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
    background: #FC9FBC;
    background-image: url(../img/aap-img-bg.png);
    background-position: right top;
    background-repeat: no-repeat;
    border-radius: 6px;
    padding: 40px 50px;}

    .align-items-end {
    align-items: flex-end !important;

  background-color: #F4A0B2;
  padding: 40px;
  /* optional */
  border-radius: 15px;
  /* optional */}

@media (max-width: 1199.98px) {
    .app-bg {
        margin: 0;
        padding: 30px;
    }
}
</style>