<template>
  <div
    class="w-100 item skeleton-structure listView mb-3"
    :class="{ item: add_col }"
  >
    <div
      class="card spotlight-card placeholder-glow item-h border-0 p-3 shadow-none"
      style="max-width: 100%"
    >
      <div class="card-body p-0">
        <div class="row">
          <div class="col-md-3">
            <div
              class="d-flex mb-3 d-flex placeholder bg-secondary mb-3 justify-content-center rounded-4 card-avatar overflow-hidden position-relative"
              style="height: 150px"
            ></div>
          </div>
          <div class="col-md-9 mt-3 mt-md-0">
            <div class="placeholder-glow mb-4">
              <div class="placeholder bg-dark col-4 mt-2 py-3"></div>
            </div>

            <p class="card-text placeholder-glow mb-4">
              <span class="placeholder col-3 py-3"></span>
              <span class="placeholder col-3 py-3"></span>
              <span class="placeholder col-3 py-3"></span>
            </p>
            <p class="card-text placeholder-glow mb-0">
              <span class="placeholder col-3 me-3"></span>
              <span class="placeholder col-3 me-3"></span>
              <span class="placeholder col-3 me-3"></span>
            </p>
            <p class="card-text placeholder-glow mt-2">
              <span class="placeholder col-3 me-3"></span>
              <span class="placeholder col-3 me-3"></span>
              <span class="placeholder col-3 me-3"></span>
            </p>
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
  props: ["doctor", "add_col", "list_card"],
  created() {},
  data() {
    return {};
  },
  methods: {},
});
</script>
