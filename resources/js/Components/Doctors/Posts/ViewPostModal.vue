<template>
    <div>
    <!-- Modal -->
    <Modal maxWidth="lg" :id="id">
            <div class="modal-content rounded-50">
            <div class="modal-header border-0 px-5 mt-3">
                <h5 class="modal-title modal-title text-primary fs-1 fw-bold" id="exampleModalLabel">{{ __('view') }} {{ __('post') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table" v-if="modalData">
                    <tbody>
                        <tr>
                            <th>
                                {{ __('name') }}
                            </th>
                            <td>
                                {{ modalData.name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ __('description') }}
                            </th>
                            <td v-html="modalData.description">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ __('image') }}
                            </th>
                            <td v-if="modalData.image">
                                    <img :src="modalData.image" width="75" height="75"
                                        :alt="modalData.slug">
                                    &nbsp &nbsp
                            </td>
                            <td v-else>-</td>
                        </tr>
                        <tr>
                            <th>
                                {{ __('status') }}

                            </th>
                            <td>
                                <span class="badge bg-success" v-if="modalData.is_active">
                                    {{ __('active') }}
                                </span>
                                <span class="badge bg-danger" v-else>
                                {{ __('inactive') }}
                                </span>

                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ __('created at') }}

                            </th>
                            <td>
                                {{ modalData.created_at }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer p-4">
          <button
            type="button"
            class="btn btn-secondary shadow-find"
            data-bs-dismiss="modal"
            @click="close()"
          >
            {{ __("close") }}
          </button>
        </div>
            </div>
        </Modal>
    </div>
</template>
<script>
import Modal from "@/Components/Modal.vue";

export default {
    components: {
    Modal,
    },
    props: {
      id: {
        type: String,
        required: true
      },
      modalData:{
      },
    }
}
</script>
