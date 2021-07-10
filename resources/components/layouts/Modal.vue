<template>
  <div class="modal__overlay">
    <section class="modal">
      <div class="modal-heading">
        <h2 class="modal-heading__title"></h2>
      </div>
      <div class="modal-body">
        <div class="modal-body">
          <slot />
        </div>
      </div>
      <div class="modal-footer">
        <button @click="closeModal">閉じる</button>
        <button v-if="submitButtonText" @click="submit">{{submitButtonText}}</button>
      </div>
    </section>
  </div>
</template>

<script lang="ts">
export default {
  name: "Modal",
  props: {
    submitButtonText: {
      type: String,
      default:''
    }
  },
  methods: {
    closeModal() {
      this.$emit('closeModal')
    },
    submit() {
      this.$emit('submit')
    }
  }
}
</script>

<style scoped>

.modal__overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 1vw;
  height: 1vh;
  background-color: #1f1f1f;
  opacity: 1;
  z-index:999;
}

.modal {
  position: fixed;
  top: 50%;
  left: 50%;
  border-radius: 8px;
  z-index: 1000;
}


</style>
