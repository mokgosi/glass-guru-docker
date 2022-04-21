<template>
    <div v-for="client in clients" :key="client.id" class="bg-gradient-to-r from-yellow-100 to-yellow-100 p-2 my-4">
        <div class="max-w-6 mx-auto">
            <h2 class="text tracking-tight text-gray-900 ">
            <span class="block"><b>Id: </b>{{ client.id }}</span>
            <span class="block"><b>Name: </b>{{ client.name }}</span>
            <span class="block"><b>Secret: </b>{{ client.secret }}</span>
            <span class="block"><b>Redirect: </b>{{ client.redirect }}</span>
            <span class="block"><b>Access: </b>{{ client.access }}</span>
            <span class="block"><b>Revoked: </b>{{ client.revoked }}</span>
            </h2>
        </div>
    </div>
</template>
<script>
    import mitt from 'mitt';
    // export const emitter = mitt();
    const emitter = mitt();

    export default {

        data() {
            return {
                clients: null
            };
        },
        mounted () {
            emitter.on('client-created', function (data) {
                console.log('uuuuuu');
                this.$forceUpdate();
            });

            axios
            .get('/oauth/clients')
            .then(response => {
                this.clients = response.data;
            });
        }, 
        created() {
            emitter.on('client-created', function (data) {
                console.log('uuuuuu');
                this.$forceUpdate();
            });
        }
    }

</script>
