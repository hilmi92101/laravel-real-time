<template>
    <div class="redis container">
        
        <h1>Redis</h1>
    </div>
</template>
<script>


    export default {
        components: {
            Text,
        },
        props: {
        },
    	data() {
            return {
                totalOnline: 0,
            }
        },
        created() {
            this.triggerNotification();
        },
    	methods: {
            redirect(routeName){ 
                this.$router.push({name: routeName});  
            },
            triggerNotification(){
                let x = Math.floor((Math.random() * 100000) + 1);
                let y = Math.floor((Math.random() * 100000) + 1);
                var visitorId = "visitor_" + x + "_" + y;
                var data = {
                    visitorId: visitorId
                } 
                let config = { 
                    headers: { 
                        'Accept': 'application/json', 
                    } 
                }
                axios.post('/api/redis-test/trigger-notification', data, config) 
                .then(function (response) { 
                    console.log(response.data); 
                }) 
                .catch(function (error) { 
                    
                });
            }


        },
        computed: {
        },
        filters: {

        },
        destroyed: function(){
            
        }

    }
</script>