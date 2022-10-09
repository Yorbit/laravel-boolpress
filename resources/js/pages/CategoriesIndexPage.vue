<template>
    <main>
        <LoaderComponent v-if="isLoading" />
        <div v-else>
            <h1>
                Categorie:
            </h1>
            <GeneralCardComponent v-for="category in categories" :key="category.id" :cardElement="category"
                :routeLink="'/categories/' + category.slug" />
        </div>
    </main>
</template>

<script>

import axios from "axios";
import GeneralCardComponent from "../components/GeneralCardComponent.vue";
import LoaderComponent from "../components/LoaderComponent.vue";

export default {
    name: "CategoriesIndexPage",

    components: {
        GeneralCardComponent,
        LoaderComponent,
    },

    data: function () {
        return {
            categories: [],
            isLoading: true,
        }
    },

    methods: {
        getCategories: function () {
            axios.get("/api/categories")
                .then(response => {
                    this.categories = response.data.result.data;
                    this.isLoading = false;
                })

        }
    },

    created() {
        this.getCategories();
    }
}
</script>

<style>

</style>