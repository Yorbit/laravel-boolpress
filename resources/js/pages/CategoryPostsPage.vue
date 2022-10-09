<template>
    <div>
        <LoaderComponent v-if="isLoading" />
        <div v-else>
            <h3>
                Post Per:
            </h3>
            <h2>
                {{ category.name }}
            </h2>

            <section class="cards-container">

                <PostCard v-for="post in category.posts" :key="post.id" :post="post" />
            </section>

        </div>
    </div>
</template>

<script>

import axios from 'axios';
import PostCard from "../components/PostCard.vue";
import LoaderComponent from "../components/LoaderComponent.vue";

export default {

    name: "CategoryPostsPage",

    components: {
        PostCard,
        LoaderComponent
    },

    data: function () {
        return {
            category: {},
            isLoading: true,
        }
    },

    methods: {
        getCategory: function () {
            const slug = this.$route.params.slug;
            axios.get("/api/categories/" + slug)
                .then((response) => {
                    this.category = response.data.result;
                    this.isLoading = false;
                }).catch((error) => console.error(error.message));
        },
    },

    created() {
        this.getCategory();
    },

}
</script>

<style lang="scss" scoped>
h3 {
    text-align: center;
    font-size: 2rem;
    margin-top: 2rem;
}

h2 {
    text-transform: uppercase;
    font-size: 3rem;
    text-align: center;
}

section.cards-container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    margin: 5rem auto;
}

div.pagination-buttons-container {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 2rem;
    margin-bottom: 3rem;

    a {
        text-decoration: none;
        color: blue;
    }
}
</style>