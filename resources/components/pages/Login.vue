<template>
    <div>
        <a :href="loginUrl">Github アカウントでログインする</a>
    </div>
</template>

<script>
export default {
    name: "Login",
    setup() {
        const vars = window.VARS
        const loginUrl = vars['loginUrl'] || ''

        return {
            loginUrl
        }
    }
}
</script>
