<template>
    <div class="h-100 d-flex align-items-center" :class="{ 'item': add_col}">


    <div class="card h-100 mx-3">
      <div class="row g-0">
        <div class="col-md-4">
          <div class="p-3">
            <Link class="text-decoration-none" :href="route('doctor.profile', { user_name: doctor.user_name })">
            <div class="d-flex justify-content-center overflow-hidden position-relative rounded-4">
              <img v-if="doctor.image"  style="width: 100%;" class="img-fluid" :src="doctor.image" alt="doctor" />
              <img v-if="!doctor.image" class="img-fluid" src="@/images/account/default_avatar_men.png" alt="doctor" />
            </div>
            </Link>
            <!-- <div class="d-flex align-items-center justify-content-center mt-1">

              <star-rating :rating="doctor.rating" :star-size="16" :read-only="true" :increment="0.01"
                :show-rating="false"></star-rating>
              <span class="text-dark small mt-1 ps-1">({{ doctor.rating }})</span>
            </div> -->

          </div>

        </div>
        <div class="col-md-8">
          <div class="card-body">

            <div class="d-flex align-items-center mb-1">

              <div class="d-flex align-items-center justify-content-between w-100">
                <h2 class="fs-4 fw-bold text-dark d-flex align-items-center mb-0 text-capitalize">
                  <i v-if="doctor.is_featured" class="bi bi-patch-check-fill me-1 text-primary"></i>
                  <Link class="text-decoration-none text-body d-flex align-items-center" :href="route('doctor.profile', { user_name: doctor.user_name, })">
                    <span>{{ doctor.name }}</span>
                    <span class="d-flex align-items-center mx-2">
                      <span v-if="doctor.is_online" class="d-flex fs-5 text-success">
                        <i class="bi bi-circle-fill"></i>
                      </span>
                      <span v-else class="d-flex fs-5 text-muted">
                        <i class="bi bi-circle-fill"></i>
                      </span>
                    </span>
                    <small v-if="doctor.clinic_name" class="text-muted">({{ doctor.clinic_name }})</small>

                  </Link>
                  <!-- <span class="fw-normal small ps-1 ms-2" style="border-left:1px solid" v-if="doctor.distance"> ( {{
                    formatDecimal(doctor.distance) }} Km) Away</span> -->
                </h2>
                <img v-if="doctor.is_premium" src="@/images/icons/is_premium.svg" alt="Icon">
              </div>

            </div>
            <ul class="list-unstyled flex-wrap d-flex mb-3" v-if="doctor.doctor_categories && doctor.doctor_categories.length > 0">
            <li class="me-2 fs-5 pe-2 text-black fw-lightbold mb-1"
                v-for="(cat, i) in doctor.doctor_categories.slice(0, 3)"
                :key="cat.id"
                v-bind:class="{ 'border-end': i != 2 }">
                {{ cat.name }}
            </li>
            <li v-if="doctor.doctor_categories.length > 3" class="me-2 fs-5 pe-2 text-black fw-lightbold mb-1">
                ...
            </li>
            </ul>
            <div class="row d-flex mb-3">
              <div class="col-md-4 text-start mb-2 mb-md-0" v-if="doctor.experience">
                <h6 class="fs-5 fw-bold">{{ __("experience") }}</h6>
                <span class="fs-5 text-lightsecondary" v-if="doctor.experience == 1">{{ doctor.experience }} {{ __("year") }}</span>
                <span class="fs-5 text-lightsecondary" v-else>{{ doctor.experience }} {{ __("years") }}</span>
              </div>

              <div class="col-md-4 text-start mb-2 mb-md-0" v-if="doctor.speciality">
                <h6 class="fs-5 fw-bold">{{ __("speciality") }}</h6>
                <span class="fs-5 text-lightsecondary">{{ doctor.speciality }}</span>
              </div>

              <div class="col-md-4 text-start mb-2 mb-md-0">
                  <h6 class="fs-5 fw-bold">{{ __("rating") }}</h6>
                  <div class="d-flex align-items-center">
                  <star-rating :rating="doctor.rating" :star-size="15" :read-only="true" :increment="0.01"
                  :show-rating="false"></star-rating>
                  <span class="text-black small mt-1 ps-1 fs-5">({{ doctor.rating }})</span>
                  </div>
              </div>


            </div>

            <div class="row">
              <div class="col-12 ps-2 ps-md-0 pe-md-4" v-if="checkObjectValuesIsNotNull(doctor.doctor_settings)">
                <div class="d-flex justify-content-between align-items-start bg-warning px-2 py-2 rounded-pill">
                  <span class="fs-5 ps-2 fw-medium">{{ __("Follow me on:") }}</span>
                  <ul class="d-flex flex-wrap justify-content-end ps-0 mb-0 list-group list-group-horizontal">
                    <li class="list-group-item p-1 py-0 bg-transparent border-0" v-if="doctor.doctor_settings.facebook_url
                      ">
                      <a target="_blank" class="text-dark" :href="doctor.doctor_settings
                        .facebook_url
                        "><i class="bi bi-facebook"></i></a>
                    </li>
                    <li class="list-group-item p-1 py-0  bg-transparent border-0" v-if="doctor.doctor_settings.youtube_url
                      ">
                      <a target="_blank" class="text-dark" :href="doctor.doctor_settings
                        .youtube_url
                        "><i class="bi bi-youtube"></i></a>
                    </li>
                    <li class="list-group-item p-1 py-0 bg-transparent border-0" v-if="doctor.doctor_settings.twitter_url
                      ">
                      <a target="_blank" class="text-dark" :href="doctor.doctor_settings
                        .twitter_url
                        "><i class="bi bi-twitter"></i></a>
                    </li>
                    <li class="list-group-item p-1 py-0 bg-transparent border-0" v-if="doctor.doctor_settings.linkedin_url
                      ">
                      <a target="_blank" class="text-dark" :href="doctor.doctor_settings
                        .linkedin_url
                        "><i class="bi bi-linkedin"></i></a>
                    </li>
                    <li class="list-group-item p-1 py-0 bg-transparent border-0" v-if="doctor.doctor_settings.whatsapp_url
                      ">
                      <a target="_blank" class="text-dark" :href="doctor.doctor_settings
                        .whatsapp_url
                        "><i class="bi bi-whatsapp"></i></a>
                    </li>
                    <li class="list-group-item p-1 py-0 bg-transparent border-0" v-if="doctor.doctor_settings.instagram_url
                      ">
                      <a target="_blank" class="text-dark" :href="doctor.doctor_settings
                        .instagram_url
                        "><i class="bi bi-instagram"></i></a>
                    </li>
                    <li class="list-group-item p-1 py-0 bg-transparent border-0" v-if="doctor.doctor_settings.tiktok_url">
                      <a target="_blank" class="text-dark" :href="doctor.doctor_settings
                        .tiktok_url
                        "><i class="bi bi-tiktok"></i></a>
                    </li>
                    <li class="list-group-item p-1 py-0 bg-transparent border-0" v-if="doctor.doctor_settings.snapchat_url
                      ">
                      <a target="_blank" class="text-dark" :href="doctor.doctor_settings
                        .snapchat_url
                        "><i class="bi bi-snapchat"></i></a>
                    </li>
                    <li class="list-group-item p-1 py-0 bg-transparent border-0" v-if="doctor.doctor_settings.pinterest_url
                      ">
                      <a target="_blank" class="text-dark" :href="doctor.doctor_settings
                        .pinterest_url
                        "><i class="bi bi-pinterest"></i></a>
                    </li>
                  </ul>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-md-3 ">
        <div class="col-12">
          <div v-html="doctor.description" class="px-3 fs-5 text-start text-secondarylight line-clamp"></div>
        </div>
      </div>

      <div class="row mx-2 mt-4 mt-md-0 mb-md-3" v-if="doctor.appointment_types">

        <div class="col-lg-4 pe-2 p-0 mb-3 mb-md-0" v-for="(schedule_type, index) in doctor.appointment_types" :key="index">

          <div class="d-flex justify-content-center shadow-none btn btn-light px-2 py-3 align-items-center" role="button"
            @click="checkLoginAndRedirect(doctor, schedule_type.appointment_type)">


              <i class="bi bi-camera-video-fill fs-5 me-2" v-if="schedule_type.type == 'video'"></i>
              <i class="bi bi-mic-fill fs-5 me-2" v-if="schedule_type.type == 'audio'"></i>
              <i class="bi bi-chat-dots-fill fs-5 me-2" v-if="schedule_type.type == 'chat'"></i>

            <div class="d-flex ">
              <span class="fs-5 fw-bold">{{ schedule_type.appointment_type.display_name }}</span>
              <span class="fs-5">
                &nbsp;- (
                {{ getDisplayAmount(schedule_type.fee) }}
                <!-- <span v-if="schedule_type.appointment_type.is_schedule_required"> - {{ schedule_type.slot_duration }} {{ __("minutes") }}</span> -->
                )
              </span>

            </div>
          </div>

        </div>

      </div>
    </div>
</div>
  </template>
  <script>
  import { defineComponent } from "vue";
  import { Link } from "@inertiajs/inertia-vue3";

  export default defineComponent({
    components: {
      Link,
    },
    props: ['doctor'],
    created() {

    },
    data() {
      return {
      };
    },
    methods: {
      checkLoginAndRedirect(doctor, appointment_type) {
        if (this.$page.props.auth) {
          if (this.$page.props.auth.logged_in_as == 'patient') {
            this.$inertia.visit(route(
              'doctor.book_appointment',
              {
                user_name: doctor.user_name,
                type: appointment_type.type,
              }
            ))
          }
          else {
            this.$toast.warning("You must log in as a patient");
          }

        } else {
          this.$toast.warning("Please login first");
          this.$inertia.visit(route("login"), {
            data: {
              'is_redirect': 1
            },
          });
        }
      },
    },
  });
  </script>
