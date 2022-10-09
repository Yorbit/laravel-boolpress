<template>
    <div>
        <LoaderComponent v-if="isLoading" />
        <div v-else>
            <h3>
                Post Per:
            </h3>
            <h2>
                {{ tag.name }}
            </h2>

            <section class="cards-container">

                <PostCard v-for="post in tag.posts" :key="post.id" :post="post" />
            </section>

        </div>
    </div>
</template>

<script>

import axios from 'axios';
import PostCard from "../components/PostCard.vue";
import LoaderComponent from "../components/LoaderComponent.vue";

export default {

    name: "TagPostsPage",

    components: {
        PostCard,
        LoaderComponent
    },

    data: function () {
        return {
            tag: {},
            isLoading: true,
        }
    },

    methods: {
        getTag: function () {
            const slug = this.$route.params.slug;
            axios.get("/api/tags/" + slug)
                .then((response) => {
                    this.tag = response.data.result;
                    this.isLoading = false;
                }).catch((error) => console.error(error.message));
        },
    },

    created() {
        this.getTag();
    },

}
</script>

<style lang="scss" scoped>

</style>