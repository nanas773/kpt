<template>
    <div class="rounded">
        {{message}}
    </div>
</template>

<script>
export default {
    name: "LogoutCard",
    props: {
        message: {
            type: string,
            required: true
        }
    }
}
</script>

<style scoped>

</style>
