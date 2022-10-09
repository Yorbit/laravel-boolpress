<template>
    <div class="card-container">
      <h3>
          {{ cardElement.name }}
      </h3>
      <router-link :to="routeLink">LEGGI I POST SIMILI</router-link>
    </div>
  </template>
  
  <script>
  export default {
      name: "GeneralCardComponent",
      props: {
          "cardElement": Object,
          "routeLink": String,
      }
  }
  </script>
  
  <style lang="scss" scoped>
      div.card-container {
          border: 1px solid black;
          padding-top: 1rem;
          margin: 1rem;
          h3 {
              text-align: center;
              font-size: 2rem;
              text-transform: uppercase;
          }
          a {
              text-decoration: none;
              color: black;
              display: block;
              background-color: white;
              padding: 1rem;
              text-align: center;
              font-size: 1.2rem;
              &:hover {
                  background-color: grey;
              }
          }
      }
  </style>