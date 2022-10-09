<template>
    <div class="container">
        <HeaderComponent />
        <router-view :key="$route.fullPath"></router-view>
    </div>
</template>

<script>
import HomePage from "../pages/HomePage.vue";
import HeaderComponent from "../components/HeaderComponent.vue";
export default {
    components: {
        HomePage,
        HeaderComponent,
    },

}
</script>

<style lang="scss">
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Nunito", sans-serif;
}

div.container {
    max-width: 90%;
    margin: 0 auto;
}
</style>