<template>
    <section class="way-section">
            <div class="container">
                <div class="way-bg">
                    <div class="way-shapes-img">
                        <div class="way-shapes-left">
                            <img src="../../../public/images/homes/shape-06.png" alt="shape-image">
                        </div>
                        <div class="way-shapes-right">
                            <img src="../../../public/images/homes/shape-07.png" alt="shape-image">
                        </div>
                    </div>
                    <div class="row align-items-end">
                        <div class="col-lg-7 ">
                            <div class="section-inner-header way-inner-header mb-0">
                                <h2>Be on Your Way to Feeling Better with Natalwise</h2>
                                <p>Reach out and nurture your journey with us—each conversation plants a seed for a
                                    vibrant tomorrow.</p>
                                <a href="/contact" class="btn btn-primary">Contact Us</a>
                            </div>
                        </div>
                        <div class="col-lg-5 ">
                            <div class="way-img">
                                <img src="../../../public/images/homes/way-img.png" class="img-fluid"
                                    alt="doctor-way-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</template>

<style scoped>
@media (max-width:767px) {

.way-img {
        display: none;
    }
    .way-shapes-left {
        display: none;
    }
    .section-inner-header.way-inner-header.mb-0 {
        text-align: center !important;
    }
    .section-inner-header h2 {
	font-weight: 600 !important;
	font-size: 28px !important;
	color: #1F2937;
}
    .way-section {
     margin-top: 40px;
    }

    .section-inner-header.way-inner-header.mb-0 h2 {
	font-size: 28px !important;
}
.section-inner-header h2 {
	font-weight: 600 !important;
	font-size: 28px !important;
	color: #1F2937;
}
}
@media (max-width: 1080px) {
 
.way-img {
	display: none !important; 
}
.way-shapes-left {
	display: none;
}
.way-section {
	
	padding: 0 !important;
	margin-top: 40px;
    text-align: center;
}
.way-img {
	display: none;
}

.way-inner-header {
	
	text-align: center;
}
.way-inner-header p {
	font-weight: 500;
	font-size: 18px;
	color: #fff;
	margin-bottom: 40px;
}
}

</style>
