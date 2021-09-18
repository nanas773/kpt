<template>
    <div class="modal-mask fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 transition-opacity table">
      <div class="modal-wrapper table-cell align-middle">
        <div class="modal-container w-1/2 mx-auto my-0 bg-white rounded shadow transition-all">
          <div class="modal-header py-3 px-3 bg-yellow-300 flex justify-between">
            <div class="flex items-center">
              <span class="px-2">{modalTitle}</span>
            </div>
            <div>
              <button @click="closeModal" class="outline-none"><img
                  src="../../../public/images/icons/close.png" alt="閉じる"></button>
            </div>
          </div>
          <div class="modal-body py-10 px-10">
            <slot/>
          </div>
          <div class="modal-footer px-10 flex justify-end pb-8">
            <button @click="submitButton"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded float-right">ok
            </button>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
export default {
  name: "Modal",
  props: {
    modalTitle: {
      type: String,
      required: true
    }
  },
  methods: {
    closeModal() {
      this.$emit('closeModal')
    },
    submitButton() {
      this.$emit('clickSubmit')
    }
  },
}
</script>
