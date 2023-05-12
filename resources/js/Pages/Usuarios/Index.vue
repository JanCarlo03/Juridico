<script setup>
import Barra from "@/components/Barra.vue";
import { Head } from '@inertiajs/vue3'

defineProps({ usuarios: Object })
</script>
<template>  
    <Barra></Barra>
    <div class="isolate bg-white px-6 py-4 sm:py-10 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
          <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Administracion de usuarios</h2>
        </div>
        <div class="mx-auto max-w-2xl text-center sm:py-10 lg:px-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-black-500">
                    <thead class="text-xs text-white-1000 uppercase bg-white-50 ">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nombre
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Editar
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Eliminar
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b" v-for="usuario in usuarios" :key="usuario.id">
                            <td class="px-6 py-4">{{ usuario.id }}</td>
                            <td class="px-6 py-4">{{ usuario.name }}</td>
                            <td class="px-6 py-4">{{ usuario.email }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

