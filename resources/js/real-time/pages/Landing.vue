<template>
    <div class="landing container">
        <h1>Landing page</h1>
        <button @click.prevent="redirect('register')" class="btn btn-primary">To Register page</button><br><br>
        <button @click.prevent="successMessage()" class="btn btn-success">Show Success Notification</button>
        <button @click.prevent="errorMessage()" class="btn btn-danger">Show Error Notification</button>
        <button @click.prevent="customMessage()" class="btn btn-primary">Custom Notification</button>
        <Text></Text>

        <teleport to="body">
            <vue3-snackbar bottom right :duration="64000" messageClass="landing-notification"></vue3-snackbar>
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
                totalOnline: 0,
            }
        },
        created() {

            this.landingNotification();
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
                    "title": "7 people is reading this website!",
                    //"text": "7 people is reading this website!",
                    "background": "#fff",
                    "icon": {
                        "path": `M4,1L7,4H5V7H3V4H1L4,1M4,15L1,12H3V9H5V12H7L4,15M13,9A1,1 0 0,1 14,8A1,1 0 0,1 15,9V13.47L16.21,13.6L21.15,15.8C21.67,16.04 22,16.56 22,17.14V21.5C21.97,22.32 21.32,22.97 20.5,23H14C13.62,23 13.26,22.85 13,22.57L8.1,18.37L8.84,17.6C9.03,17.39 9.3,17.28 9.58,17.28H9.8L13,19V9M14,5C15.42,5 16.74,5.76 17.45,7C18.56,8.9 17.91,11.35 16,12.46V11.23C16.64,10.67 17,9.85 17,9A3,3 0 0,0 14,6A3,3 0 0,0 11,9C11,9.85 11.36,10.67 12,11.23V12.46C10.77,11.75 10,10.43 10,9A4,4 0 0,1 14,5M9,14C9.73,14 10.41,14.19 11,14.54V15.76C10.47,15.29 9.77,15 9,15A3,3 0 0,0 6,18C6,19 6.5,19.87 7.22,20.42L9.31,22H9A4,4 0 0,1 5,18A4,4 0 0,1 9,14Z`,
                        "type": "mdi"
                    },
                    "group": "fed0a",
                    "count": 1
                });
            },

            landingNotification(){
                window.Echo
                .channel('landing-notification')
                .listen('.landing-notification-event', (e) => {
                    console.log(e);
                    this.$snackbar.add({
                        "title": "Just now!",
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


        },
        computed: {
        },
        filters: {

        },
        destroyed: function(){
            
        }

    }
</script>