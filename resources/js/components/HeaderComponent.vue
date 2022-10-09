<template>
    <header>
      <h1>BOOLPRESS</h1>
      <nav>
          <ul>
              <li><router-link :to="{name: 'home'}">POST</router-link></li>
              <li><router-link :to="{name: 'categories'}">CATEGORIE</router-link></li>
              <li><router-link :to="{name: 'tags'}">TAG</router-link></li>
              <li><router-link :to="{name: 'about'}">SU DI NOI</router-link></li>
              <li><router-link :to="{name: 'contact'}">CONTATTACI</router-link></li>
          </ul>
      </nav>
    </header>
  </template>
  
  <script>
  export default {
      name: "HeaderComponent",
  }
  </script>
  
  <style lang="scss" scoped>
      header {
          display: flex;
          justify-content: space-between;
          align-items: center;
          padding-block: 1rem;
          nav ul {
              display: flex;
              justify-content: center;
              align-items: center;
              list-style: none;
              gap: 2rem;
              li a {
                  color: black;
                  text-decoration: none;
                  font-weight: bold;
              }
          }
      }
  </style>