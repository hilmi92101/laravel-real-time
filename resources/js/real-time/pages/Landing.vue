<template>
    <div class="landing container">
        <h1>Landing page</h1>
        <button @click.prevent="redirect('register')" class="btn btn-primary">To Register page</button><br><br>
        <button @click.prevent="successMessage()" class="btn btn-success">Show Success Notification</button>
        <button @click.prevent="errorMessage()" class="btn btn-danger">Show Error Notification</button>
        <button @click.prevent="customMessage()" class="btn btn-primary">Custom Notification</button>
        <Text></Text>

        <teleport to="body">
            <vue3-snackbar bottom right :duration="4000" messageClass="landing-notification"></vue3-snackbar>
        </teleport>

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

            window.Echo.channel('my-channel')
            .listen('.my-event', (e) => {
                console.log(e);
                console.log('u did it landing');
                this.$snackbar.add({
                    "title": "Custom Message",
                    "text": e.message,
                    "background": "#fff",
                    "icon": {
                        "path": "M8.5,13.5L11,16.5L14.5,12L19,18H5M21,19V5C21,3.89 20.1,3 19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19Z",
                        "type": "mdi"
                    },
                    "group": "fed0a",
                    "count": 1
                });
                
            });
        },
    	methods: {
            redirect(routeName){ 
                this.$router.push({name: routeName});  
            },
            successMessage() {
                //console.log(1111111);
                this.$snackbar.add({
                    type: 'success',
                    text: 'This is a snackbar message'
                });
            },
            errorMessage() {
                //console.log(1111111);
                this.$snackbar.add({
                    type: 'error',
                    text: 'This is an error message'
                });
            },

            customMessage() {
                //console.log(1111111);
                this.$snackbar.add({
                    "title": "Custom Message",
                    "text": "This is a message with a custom background and icon",
                    "background": "#fff",
                    "icon": {
                        "path": "M8.5,13.5L11,16.5L14.5,12L19,18H5M21,19V5C21,3.89 20.1,3 19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19Z",
                        "type": "mdi"
                    },
                    "group": "fed0a",
                    "count": 1
                });
            },

            

        },
        computed: {
        },
        filters: {

        }

    }
</script>