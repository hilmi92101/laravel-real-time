<template>
    <div class="landing">
        <h1>Landing page</h1>
        <button @click.prevent="redirect('register')" class="btn btn-primary">To Register page</button>
        <Text></Text>

    </div>
</template>
<script>

    import Text from './../components/Text';

    export default {
        components: {
            Text,
        },
        props: {
        },
    	data() {
            return {

            }
        },
        created() {
        },
    	methods: {
            redirect(routeName){ 
                this.$router.push({name: routeName});  
            },

        },
        computed: {
        },
        filters: {

        }

    }
</script>