<script setup>
import Barra from "@/components/Barra.vue";
import { Head } from '@inertiajs/vue3';

defineProps({ usuarios: Object })
</script>
<template>  
    <Barra></Barra>
    <div class="isolate bg-white px-6 py-4 sm:py-10 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
          <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Administracion de usuarios</h2>
        </div>
        <div class="mx-auto max-w-2xl text-right sm:py-10 lg:px-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <div class="relative h-15 w-29.5">
                    <button class="relative top-0 inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                        <span class="relative px-2 py-2 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                            <font-awesome-icon icon="fas fa-user-plus" />
                        </span>
                    </button>
                </div>
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
                            <td class="px-10 py-4"><a href=""><font-awesome-icon icon="far fa-pen-to-square" /></a></td>
                            <td class="px-10 py-4"><a href=""><font-awesome-icon icon="far fa-trash-can" /></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

