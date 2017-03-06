<template lang="html">
  <p>{{ index }}</p>
</template>

<script>
    export default {
        data () {
            return {
                index: null
            }
        },
        mounted () {
            axios.get('/api/users').then( (response) => {
                this.index = response.data.data
            })
        }
    }
</script>
