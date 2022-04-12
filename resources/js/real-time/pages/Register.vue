<template>
    <div class="register container">
        <h1>Register page</h1>
        <button @click.prevent="redirect('landing')" class="btn btn-primary">To Landing page</button>

        <br>

        <h1>Sample Form</h1>
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input v-model="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input v-model="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button @click.prevent="register()" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

   
</template>
<script>

    export default {
        components: {
        },
        props: {
        },
    	data() {
            return {
                email: '',
                password: '',
            }
        },
        created() {
        },
    	methods: {
            redirect(routeName){ 
                this.$router.push({name: routeName});  
            },
            register(){
                const self = this; 
                var data = { 
                    email: this.email, 
                    password: this.password, 
                } 
                let config = { 
                    headers: { 
                        'Accept': 'application/json', 
                    } 
                } 
                axios.post('/api/rt/register', data, config) 
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

        }

    }
</script>