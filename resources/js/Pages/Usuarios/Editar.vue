<template>
    <Barra></Barra>
    <div class="isolate bg-white px-6 py-4 sm:py-10 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
          <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Registro de usuarios</h2>
        </div>
        <div class="mx-auto max-w-2xl text-center sm:py-0 lg:px-">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <form @submit.prevent="form.put(route('usuarios.update',form.id))" method="PUT" class="mx-auto mt-16 max-w-xl sm:mt-10">
                    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                        <div class="sm:col-span-2">
                        <label for="company" class="block text-sm font-semibold leading-6 text-gray-900">Nombre</label>
                            <div class="mt-2.5">
                                <input type="text" @input="validateLetters('name')" name="name" id="name" v-model="form.name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6" required>
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
                            <div class="mt-2.5">
                                <input type="email" name="email"  :id="email" v-model="form.email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6" required>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10">
                        <button type="submit" :disabled="form.processing" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 float-left">Guardar</button>
                        <BotonHome></BotonHome>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script setup>
    import Barra from '@/components/Barra.vue'
    import BotonHome from '@/components/BotonHome.vue';
    import { useForm } from '@inertiajs/vue3';

    const props = defineProps({ usuario: Object })
    const form = useForm({
        id:props.usuario.id,
        name:props.usuario.name,
        email:props.usuario.email
    })    
    const validateLetters = (fieldName) => {
        const regex = /^[A-Za-z]+$/;
        if (!regex.test(form    [fieldName])) {
            form    [fieldName] = form  [fieldName].replace(/[^A-Za-z]/g, '');
        }
    };
</script>
