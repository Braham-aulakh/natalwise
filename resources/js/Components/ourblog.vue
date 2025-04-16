<template>
  <section class="our-blog-fourteen">
    <div class="container">
      <div class="section-head-fourteen">
        <h2>Our <span> Blog </span></h2>
      </div>

      <!-- Owl Carousel -->
      <div class="blog-slide-fourteen owl-carousel">
        <div class="blog-grid-fourteen" data-aos="fade-up" data-aos-delay="500">
          <div class="blog-grid-img">
            <a href="blog-details.html">
              <img src="/images/hompage/blog-01.jpg" alt="Img" />
            </a>
          </div>
          <div class="blog-grid-content">
            <h4><a href="blog-details.html">How Physiotherapy Can Help During Pregnancy</a></h4>
         <p style="font-size: 0.9375rem;">
  Pregnancy is a wonderful phase in the life of a woman...
</p>

             <div class="content-divider"></div>
            <div class="grid-footer">
           <span class="view-count">
  <Icon icon="feather:eye" width="18" height="18" />
  1k views
</span>
             <a href="blog-details.html">
  Read More
  <Icon icon="feather:arrow-right-circle" width="18" height="18" />
</a>

            </div>
          </div>
        </div>

        <div class="blog-grid-fourteen" data-aos="fade-up" data-aos-delay="600">
          <div class="blog-grid-img">
            <a href="blog-details.html">
              <img src="/images/hompage/blog-02.jpg" alt="Img" />
            </a>
          </div>
          <div class="blog-grid-content">
             <h4><a href="blog-details.html">What You Need To Know About Food Intolerance</a></h4>
                <p style="font-size: 0.9375rem;">Have you ever enjoyed a great meal just to find yourself feeling uneasy a while later...</p>
             <div class="content-divider"></div>
            <div class="grid-footer">
         <span class="view-count">
  <Icon icon="feather:eye" width="18" height="18" />
  1k views
</span>
     <a href="blog-details.html">
  Read More
  <Icon icon="feather:arrow-right-circle" width="18" height="18" />
</a>

            </div>
          </div>
        </div>

        <div class="blog-grid-fourteen" data-aos="fade-up" data-aos-delay="700">
          <div class="blog-grid-img">
            <a href="blog-details.html">
              <img src="/images/hompage/blog-03.jpg" alt="Img" />
            </a>
          </div>
          <div class="blog-grid-content">
           <h4>
  <a href="blog-details.html">Suspecting PCOS? Here’s everything you need to..</a>
</h4>
               <p style="font-size: 0.9375rem;">Polycystic Ovary Syndrome or PCOS is one of the most common hormonal disorders affecting women...</p>
             <div class="content-divider"></div>
            <div class="grid-footer">
              <span class="view-count">
  <Icon icon="feather:eye" width="18" height="18" />
  1k views
</span>
              <a href="blog-details.html">
  Read More
  <Icon icon="feather:arrow-right-circle" width="18" height="18" />
</a>

            </div>
          </div>
        </div>

        <div class="blog-grid-fourteen" data-aos="fade-up" data-aos-delay="800">
          <div class="blog-grid-img">
            <a href="blog-details.html">
              <img src="/images/hompage/blog-04.jpg" alt="Img" />
            </a>
          </div>
          <div class="blog-grid-content">
              <h4 class="blog-title"><a href="blog-details.html">Adapting Homes for Aging Gracefully: Design Tips for Old Age Comfort</a></h4>
            <p>Explore practical design tips to make living spaces in old age homes adaptable and comfortable...</p>
            <div class="grid-footer">
           <span class="view-count">
  <Icon icon="feather:eye" width="18" height="18" />
  1k views
</span>
             <a href="blog-details.html">
  Read More
  <Icon icon="feather:arrow-right-circle" width="18" height="18" />
</a>

            </div>
          </div>
        </div>
      </div>

      <!-- Custom Navigation Arrows -->
   <div class="owl-nav-button">
  <div class="owl-nav blog-slide-nav nav-control">
  <!-- Left Arrow -->
<button class="owl-prev" @click="prevSlide">
  <Icon icon="iconamoon:arrow-left-2-bold" width="24" height="24" />
</button>

<!-- Right Arrow -->
<button class="owl-next" @click="nextSlide">
  <Icon icon="iconamoon:arrow-right-2-bold" width="24" height="24" />
</button>

  </div>
</div>

    </div>
  </section>
</template>

<script setup>
import { onMounted } from 'vue'
import $ from 'jquery'
import 'owl.carousel/dist/assets/owl.carousel.css'
import 'owl.carousel/dist/assets/owl.theme.default.css'
import 'owl.carousel'
import { Icon } from '@iconify/vue'

onMounted(() => {
  const owl = $('.blog-slide-fourteen').owlCarousel({
    loop: true,
    margin: 15,
    autoplay: false, // Disable autoplay
    autoplayTimeout: 3000, // Can stay as-is, won't be used
    responsive: {
      0: { items: 1 },
      768: { items: 2 },
      1024: { items: 3 }
    }
  });

  // Custom navigation
  $('.owl-prev').click(function() {
    owl.trigger('prev.owl.carousel');
  });
  
  $('.owl-next').click(function() {
    owl.trigger('next.owl.carousel');
  });
})
</script>


