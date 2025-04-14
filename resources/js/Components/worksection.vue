<template>
  <section class="work-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12 work-img-info" v-aos="'fade-up'">
          <div class="work-img">
            <img src="/images/hompage/women-fighting-breast-cancer.png" class="img-fluid" alt="doctor-image" />
          </div>
        </div>
        <div class="col-lg-8 col-md-12 work-details">
          <div class="section-header-two" v-aos="'fade-up'">
            <h5 class="work-sub">How it Works</h5>
            <h2 class="section-title">
              4 Easy Steps to Get the<br />
              Right Solution
            </h2>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6" v-aos="'fade-up'">
              <div class="work-info">
                <div class="work-icon">
                  <span class="heart">
                    <img src="/images/hompage/search-1.png" alt="search-icon" />
                  </span>
                </div>
                <div class="work-content">
                  <h5>Search Experts</h5>
                  <p>Find the right expert based on your needs and concerns.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6" v-aos="'fade-up'">
              <div class="work-info">
                <div class="work-icon">
                  <span class="heart">
                    <img src="/images/hompage/Profile.png" alt="profile-icon" />
                  </span>
                </div>
                <div class="work-content">
                  <h5>Check Expert Profiles</h5>
                  <p>Explore qualifications, specialities, and reviews to choose the best match.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6" v-aos="'fade-up'">
              <div class="work-info">
                <div class="work-icon">
                  <span class="heart">
                    <img src="/images/hompage/work-03.png" alt="calendar-icon" />
                  </span>
                </div>
                <div class="work-content">
                  <h5>Schedule Appointment</h5>
                  <p>Book a convenient time for your video consultation.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6" v-aos="'fade-up'">
              <div class="work-info">
                <div class="work-icon">
                  <span class="heart">
                    <img src="/images/hompage/idea-1.png" alt="solution-icon" />
                  </span>
                </div>
                <div class="work-content">
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

<script>
export default {
  name: 'HowItWorksSection',
  directives: {
    aos: {
      bind(el, binding) {
        el.setAttribute('data-aos', binding.value);
      }
    }
  }
}
</script>

