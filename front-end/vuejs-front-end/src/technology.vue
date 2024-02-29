<script>
import axios from 'axios'

export default {
  name: 'Technology',

  data() {
    return {
      technologies: []
    }
  },
  mounted() {
    axios.get('http://localhost:3000/v1/technologies')
      .then(response => {
        this.technologies = response.data
      })
  }
}
</script>

<template>
  <h1>hello, word</h1>
</template>

<style scoped>

</style>
