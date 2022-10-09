<template>
    <main>
        <LoaderComponent v-if="isLoading" />
        <div v-else>
            <h1>
                Tag:
            </h1>
            <GeneralCardComponent v-for="tag in tags" :key="tag.id" :cardElement="tag"
                :routeLink="'/tags/' + tag.slug" />
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
            tags: [],
            isLoading: true,
        }
    },

    methods: {
        getTags: function () {
            axios.get("/api/tags")
                .then(response => {
                    this.tags = response.data.result;
                    this.isLoading = false;
                });
        },

    },

    created() {
        this.getTags();
    }
}
</script>
  
<style>

</style>