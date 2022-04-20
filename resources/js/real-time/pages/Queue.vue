<template>
    <div class="redis container">
        
        <h1>Queue</h1>
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
                
            }
        },
        created() {
            this.triggerQueue();
        },
    	methods: {
            
            triggerQueue(){

                var data = {
                } 
                let config = { 
                    headers: { 
                        'Accept': 'application/json', 
                    } 
                }
                axios.post('/api/queue/send-email', data, config) 
                .then(function (response) { 
                    console.log(response.data); 
                }) 
                .catch(function (error) { 
                    
                });
            },
        },
        computed: {
        },
        filters: {

        },
        destroyed: function(){
            
        }

    }
</script>