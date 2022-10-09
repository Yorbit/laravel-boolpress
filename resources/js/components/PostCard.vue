<template>
    <div class="card">
        <h2>
            <router-link :to="'/posts/' + post.id">{{ post.title }}</router-link>
        </h2>
        <h5>
            <router-link class="category-link" :to="{name: 'categoryPostsPage', params: {slug: post.category.slug}}">{{
            post.category.name }}</router-link>
            - <router-link class="tag-link" :to=" { name: 'tagPostsPage', params: {slug: tag.slug }}"
                v-for="tag in post.tags" :key="tag.id"> #{{ tag.name }} </router-link>
        </h5>
        <div class="img-container">
            <img :src="isValidUrl(post.post_image) ? post.post_image : 'http://127.0.0.1:8000/storage/' + post.post_image"
                alt="Post image">
        </div>
        <h4>
            {{ post.user.name }} | {{ post.date }}
        </h4>
        <p>
            {{ showContent(post.content) }}
            <a v-if="post.content.length >= 100 && !fullContentShowed" @click="showFullContent(post.content)">Mostra</a>
            <a v-else-if="fullContentShowed" @click="collapseContent(post.content)">Nascondi</a>
        </p>

    </div>
</template>
  
<script>
export default {
    name: "PostCard",
    props: {
        "post": Object,
    },
    data: function () {
        return {
            fullContentShowed: false,
        }
    },
    methods: {
        showContent: function (content) {
            if (content.length > 100 && !this.fullContentShowed) {
                const cuttedContent = content.substring(0, 100);
                return cuttedContent + "...";
            } else {
                return content;
            }
        },
        showFullContent: function (content) {
            this.fullContentShowed = true;
            return content;
        },

        collapseContent: function (content) {
            this.fullContentShowed = false;
            return content.substring(0, 100);
        },
        isValidUrl: function (string) {
            try {
                new URL(string);
                return true;
            } catch (err) {
                return false;
            }
        },
    },
}
</script>
  
<style lang="scss" scoped>
div.card {
    width: calc(100% / 2 - 4rem);
    flex-direction: column;
    margin: 2rem;
    align-items: center;
    justify-content: center;
    padding: 2rem;
    display: flex;
    border: 2px solid black;

    h2 {
        text-align: center;
        padding: 1rem;
        font-size: 1.5rem;

        a {
            color: black;
            text-decoration: none;
        }
    }

    h5 {
        align-self: flex-start;
        margin-left: 1.5rem;
        font-size: 1.5rem;

        a {
            text-decoration: none;

            &.category-link {
                color: black;
                font-size: 1.5rem;
            }

            &.tag-link {
                font-size: 1.5rem;
                color: skyblue;
            }
        }
    }

    div.img-container {
        margin: 1rem;

        img {
            max-width: 100%;
        }
    }

    h4 {
        align-self: flex-start;
        margin-bottom: 1rem;
        margin-left: 3rem;
    }

    a {
        color: blue;
        cursor: pointer;
    }
}
</style>