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
                visitorId: null,
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

                this.checkLocalStorageVisitorId();
                var data = {
                    visitorId: this.visitorId
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
            },
            checkLocalStorageVisitorId(){
                // CHECK LOCAL STORAGE IF VISITOR ID EXIST
                if(localStorage.getItem('visitor_id') === null) {
                    let x = Math.floor((Math.random() * 100000) + 1);
                    let y = Math.floor((Math.random() * 100000) + 1);
                    this.visitorId = "visitor_" + x + "_" + y;
                    localStorage.setItem('visitor_id', this.visitorId);
                } else {
                    this.visitorId = localStorage.getItem('visitor_id');
                }
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