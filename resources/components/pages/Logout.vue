<template>
    <LogoutCard
        :message="vars.logoutMessage"
    />
</template>

<script>
import LogoutCard from "@components/layouts/LogoutCard"

export default {
    name: "Logout",
    components: {
        LogoutCard
    },
    data() {
        return {}
    },
    computed: {
        vars() {
            return window.VARS
        }
    }
}
</script>

<style scoped>

</style>
