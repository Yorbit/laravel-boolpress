<template>
    <div>
        <LoaderComponent v-if="isLoading"/>
        <PostCard v-else :post="post"/>
    </div>
</template>

<script>

import PostCard from "../components/PostCard.vue";
import LoaderComponent from "../components/LoaderComponent.vue";
import axios from "axios";

export default {
    name: "SingleCard",

    components: {
        PostCard,
        LoaderComponent
    },

    data: function() {
        return {
            post: {},
            isLoading: true,
        }
    }, 
    
    methods: {
        getPost: function() {
            const id = this.$route.params.id;

            axios.get("/api/posts/" + id )
            .then((response) => {
                this.post = response.data.result;
                this.isLoading = false;
            })
        }
    },

    created() {
        this.getPost();
        console.log(this.post)
    }
}
</script>

<style lang="scss" scoped>
    div {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>