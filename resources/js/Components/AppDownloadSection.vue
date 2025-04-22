<template>
 <section class="app-section pt-0">
				<div class="container">
					<div class="app-bg">
						<div class="row align-items-end">
							<div class="col-lg-6 col-md-12">
								<div class="app-content">
									<div class="app-header aos" data-aos="fade-up">
										<h5>Working for Your Better Health.</h5>
										<h2>Download the Natal Wise App today!</h2>
									</div>
									<div class="app-scan aos" data-aos="fade-up">
										<p>Scan the QR code to get the app now</p>
                    <div class="scaner">
                    <img src="../../../public/images/homes/scan-img.png" alt="scan-image">
                  </div>
									</div>
									<div class="google-imgs aos" data-aos="fade-up">
										<a href="#"><img src="../../../public/images/homes/google-play-icon.svg" alt="Google Play"></a>
										<a href="#"> <img src="../../../public/images/homes/app-store-icon.svg" alt="App Store"></a>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12 aos" data-aos="fade-up">
								<div class="mobile-img">
                  <img src="../../../public/images/homes/mobile-img.png" alt="App Preview">

								</div>
							</div>
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

<style>
.app-section.pt-0 {
	margin-bottom: 80px;
}
.google-imgs.aos.aos-init.aos-animate {
	display: flex;
	gap: 20px;
}
.scaner {
	padding: 40px 0;
}
.mobile-img {
	position: absolute;
	right: 0;
	width: 440px;
	top: -352px !important;
	bottom: 0 !important;
}
@media (max-width: 1080px) {
.mobile-img {
	display: none;
}
.app-content {
	text-align: center;
}
.google-imgs.aos.aos-init.aos-animate {
	display: flex;
	gap: 20px;
	justify-content: center;
}
.scaner {
	display: inline-flex;
	justify-content: center;
	padding: 25px 0;
}



}





</style>