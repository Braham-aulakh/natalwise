<template>
  <section class="work-section py-5">
    <div class="container">
      <div class="row align-items-center">
        <!-- Left Image -->
        <div class="col-md-5  mb-4 mb-lg-0" v-aos="'fade-up'">
          <div class="work-img rounded overflow-hidden">
            <img src="../../../public/images/hompage/homes/women-fighting-breast-cancer.png" class="img-fluid " alt="supportive women" />
          </div>
        </div>

        <!-- Right Content -->
        <div class="col-md-7  work-details">
          <div class="section-header-two mb-4" v-aos="'fade-up'">
            <h5 class="work-sub text-pink">How it Works</h5>
            <h2 class="section-title">
              4 Easy Steps to Get the<br />Right Solution
            </h2>
          </div>

          <div class="row gy-4">
            <div class="col-sm-6" v-aos="'fade-up'">
              <div class="work-info d-flex">
                <div class="work-icon heart d-flex align-items-center justify-content-center">
                  <img src="/images/hompage/search-1.png" alt="search-icon" />
                </div>
                <div class="work-content ms-3">
                  <h5>Search Experts</h5>
                  <p>Find the right expert based on your needs and concerns.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6" v-aos="'fade-up'">
              <div class="work-info d-flex">
                <div class="work-icon heart d-flex align-items-center justify-content-center">
                  <img src="/images/hompage/Profile.png" alt="profile-icon" />
                </div>
                <div class="work-content ms-3">
                  <h5>Check Expert Profiles</h5>
                  <p>Explore qualifications, specialities, and reviews to choose the best match.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6" v-aos="'fade-up'">
              <div class="work-info d-flex">
                <div class="work-icon heart d-flex align-items-center justify-content-center">
                  <img src="/images/hompage/work-03.png" alt="calendar-icon" />
                </div>
                <div class="work-content ms-3">
                  <h5>Schedule Appointment</h5>
                  <p>Book a convenient time for your video consultation.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6" v-aos="'fade-up'">
              <div class="work-info d-flex">
                <div class="work-icon heart d-flex align-items-center justify-content-center">
                  <img src="/images/hompage/idea-1.png" alt="solution-icon" />
                </div>
                <div class="work-content ms-3">
                  <h5>Get Your Solution</h5>
                  <p>Receive expert guidance and personalized care from the comfort of your home.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>



<style scoped>
.work-section {
  background-color: #f9fbfd;
}

.section-title {
  font-family: 'Montserrat', sans-serif;
  font-weight: 600;
  font-size: 40px;
  color: #1f2937;
}

.work-sub {
  color: #f47aa7;
  font-family: 'Pacifico', cursive;
  font-size: 22px;
  margin-bottom: 10px;
}

.work-img img {
  border-radius: 16px;
}

.heart {
  background: #fc9fbc;
  border-radius: 20px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  transition: 0.7s ease;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.08);
}
.heart {
    position: relative;
    width: 100px;
    height: 90px;
    float: left;
}
.heart img {
  width: 30px;
  height: 30px;
}

.work-info h5 {
  font-weight: 600;
  font-size: 18px;
  margin-bottom: 8px;
  color: #1f2937;
}

.work-info p {
  font-size: 15px;
  margin-bottom: 0;
  color: #4b5563;
}

@media (max-width: 767px) {
  .section-title {
    font-size: 28px;
    text-align: center;
  }

  .work-sub {
    text-align: center;
  }

  .work-details {
    padding-left: 0;
    text-align: center;
  }

  .work-info {
    flex-direction: column;
    align-items: center;
    text-align: center;
  }

  .work-content {
    margin-left: 0 !important;
    margin-top: 10px;
  }
}
@media (min-width: 768px) {
    .col-md-5 {
        flex: 0 0 auto;
        width: 33.666667%;
    }
}
@media (min-width: 768px) {
    .col-md-7 {
        flex: 0 0 auto;
        width: 63.333333%;
    }
}


</style>
