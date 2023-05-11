<template>
    <div class="isolate bg-white px-6 py-4 sm:py-10 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
          <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Administracion de usuarios</h2>
        </div>
        <div class="mx-auto max-w-2xl text-center sm:py-10 lg:px-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-black-500 dark:text-black-400">
                    <thead class="text-xs text-white-1000 uppercase bg-white-50 dark:bg-white-700 ">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Product name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Color
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Category
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-100 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">
                                Apple MacBook Pro 17"
                            </th>
                            <td class="px-6 py-4">
                                Silver
                            </td>
                            <td class="px-6 py-4">
                                Laptop
                            </td>
                            <td class="px-6 py-4">
                                $2999
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                        <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Microsoft Surface Pro
                            </th>
                            <td class="px-6 py-4">
                                White
                            </td>
                            <td class="px-6 py-4">
                                Laptop PC
                            </td>
                            <td class="px-6 py-4">
                                $1999
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr> 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </template>
  <script>
    export default {
        props:{

        },
        data(){
            return{
                usuarios:[]
            }
        },
        methods:{
            async obtenerUsuarios(){
                var myHeaders = new Headers({
                'content-type': 'application/json'
                , 'accept': 'application/json'
                , 'Authorization': 'Bearer' + ' ' + this.token
            });
            var myInit = {
                method: 'GET',
                headers: myHeaders
            };
            var myRequest = new Request(
                this.urlDocentes
                + '?cveunidadmin=' + cveunidadmin
                , myInit
            );

            let response = await fetch(myRequest)
            this.docentes = await response.json()
            
            this.mostarDocente(cveunidadmin);
            }
        }
    }
  </script>
