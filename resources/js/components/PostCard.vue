<template>
    <div class="card">
      <h2>{{ post.title }}</h2>
      <h5>{{ post.category.name }} - <span v-for="tag in post.tags" :key="tag.id"> #{{ tag.name }} </span></h5>
      <div class="img-container">
          <img :src="imgUrl ? post.post_image : 'storage/' + post.post_image" alt="Post image">
      </div>
      <h4>
          {{ post.user.name }} | {{ post.date }}
      </h4>
      <p>
          {{ post.content.length > 100 && !fullContentShowed ? shownContent + "..." : post.content}}
          <a v-if="post.content.length >= 100 && !fullContentShowed" @click="showFullContent(post.content)">MOSTRA</a>
          <a v-else-if="fullContentShowed" @click="collapseContent()">NASCONDI</a>
      </p>
  
    </div>
  </template>
  
  <script>
  export default {
      props: {
          "post" : Object,
      },
      data: function() {
          return {
              imgUrl: new URL(this.post.post_image),
              shownContent: this.post.content.substring(0, 100),
              fullContentShowed : false,
          }
      },
      methods: {
          showFullContent : function(content) {
              this.fullContentShowed = true;
              return this.shownContent = content;
          },
          
          collapseContent : function() {
              this.fullContentShowed = false;
              return this.shownContent = this.shownContent.substring(0, 100);
          }
      }
  }
  </script>
  
  <style lang="scss" scoped>
      div.card {
          width: calc(100% / 2 - 4rem);
          margin: 2rem;
          padding: 2rem;
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          border: 2px solid black;
          h2 {
              text-align: center;
              padding: 1rem;
              align-self: flex-start;
          }
          h5 {
              align-self: flex-start;
              margin-left: 1rem;
              span {
                  color: skyblue;
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