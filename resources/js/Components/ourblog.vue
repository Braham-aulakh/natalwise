<template>
  <section class="our-blog-fourteen">
    <div class="section-bg">
      <img src="/assets/img/bg/blog-bg-14.png" alt="Img" />
    </div>
    <div class="container">
      <div class="section-head-fourteen">
        <h2>Our <span> Blog </span></h2>
      </div>

      <carousel
        class="blog-slide-fourteen"
        :autoplay="true"
        :loop="true"
        :nav="true"
        :dots="false"
        :margin="20"
        :responsive="responsive"
      >
        <div
          class="blog-grid-fourteen"
          v-for="(item, index) in blogPosts"
          :key="index"
          data-aos="fade-up"
          :data-aos-delay="500 + index * 100"
        >
          <div class="blog-grig-img">
            <a :href="item.link">
              <img :src="item.image" :alt="item.title" />
            </a>
          </div>
          <div class="blog-grid-content">
            <h4><a :href="item.link">{{ item.title }}</a></h4>
            <p>{{ item.description }}</p>
            <div class="grid-footer">
              <span><i class="feather-eye"></i> {{ item.views }} views</span>
              <a :href="item.link">Read More <i class="feather-arrow-right-circle"></i></a>
            </div>
          </div>
        </div>
      </carousel>
    </div>
  </section>
</template>

<script>
import Carousel from 'vue-owl-carousel';

export default {
  name: 'OurBlog',
  components: {
    Carousel,
  },
  data() {
    return {
      blogPosts: [
        {
          title: 'How Physiotherapy Can Help During Pregnancy',
          description:
            'Pregnancy is a wonderful phase in the life of a woman, but we know and understand that this phase comes...',
          views: '1k',
          image: '/assets/img/blog/blog-1.png',
          link: 'blog-details.html',
        },
        {
          title: 'What You Need To Know About Food Intolerance',
          description:
            'Have you ever enjoyed a great meal just to find yourself feeling uneasy a while later...',
          views: '850',
          image: '/assets/img/blog/blog-2.png',
          link: 'blog-details.html',
        },
        {
          title: 'Suspecting PCOS? Here’s everything you need to..',
          description:
            'Polycystic Ovary Syndrome or PCOS is one of the most common hormonal disorders affecting women...',
          views: '4.5k',
          image: '/assets/img/blog/blog-3.png',
          link: 'blog-details.html',
        },
        {
          title: 'Adapting Homes for Aging Gracefully: Design Tips for Old Age Comfort',
          description:
            'Explore practical design tips to make living spaces in old age homes adaptable and comfortable...',
          views: '1k',
          image: '/assets/img/blog/blog-18.jpg',
          link: 'blog-details.html',
        },
      ],
      responsive: {
        0: { items: 1 },
        768: { items: 2 },
        1024: { items: 3 },
      },
    };
  },
};
</script>
