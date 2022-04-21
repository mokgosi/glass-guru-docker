<script setup>
import BreezeButton from '@/Components/Button.vue';
import BreezeInput from '@/Components/Input.vue';
import BreezeLabel from '@/Components/Label.vue';
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head, Link, useForm  } from '@inertiajs/inertia-vue3';
import PassportClients from '@/Components/Passport/Clients';
import mitt from 'mitt';
const emitter = mitt();

const data = {
    name: 'Client Name',
    redirect: 'http://example.com/callback'
};

const submit = (event) => {
    axios.post('/oauth/clients', data)
    .then(response => {
        emitter.emit("client-created", e => console.log('foo', e) );
    });

    event.target.reset();
};

</script>

<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="flex">
                            <div class="w-1/2">
                                <div class="p-6">
                                    <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                                        <div class="bg-white p-6 border-b border-gray-200">
                                            <form @submit.prevent="submit">
                                                <div>
                                                    <BreezeLabel for="name" value="Name" />
                                                    <BreezeInput id="name" type="text" class="mt-1 block w-full" v-model="data.name" required autofocus autocomplete="Client Name" />
                                                </div>
                                                <div class="mt-4">
                                                    <BreezeLabel for="redirect" value="Redirect Link" />
                                                    <BreezeInput id="redirect" type="text" class="mt-1 block w-full" v-model="data.redirect" required autocomplete="Redirect Link" />
                                                </div>
                                                <div class="flex items-center justify-end mt-4">
                                                    <BreezeButton class="ml-4" :class="{ 'opacity-25': data.processing }" :disabled="data.processing">
                                                        Create
                                                    </BreezeButton>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-1/2">
                                <div class="p-6">
                                    <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                                        <div class="bg-white p-6 border-b border-gray-200">
                                            <h2>Clients</h2>
                                            <PassportClients />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
