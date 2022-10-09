<template>
    <div class="loader-overlay">
        <h1>
            CARICAMENTO IN CORSO...
        </h1>
    </div>
</template>
  
<script>
export default {
    name: "LoaderComponent"
}
</script>
  
<style lang="scss" scoped>
div.loader-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgba(0, 0, 0, .4);

    h1 {
        color: white;
        font-size: 6rem;
    }
}
</style>