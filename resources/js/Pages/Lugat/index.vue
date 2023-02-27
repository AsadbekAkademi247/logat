<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import {Link, router} from '@inertiajs/vue3';


defineProps({
    title: String,
    lugatlar: Array
});
function destroy(id) {
    if (confirm("Aniq o'chirib tashlashin hohlaysizmi")) {
       router.delete(route("lugat.destroy", id));
    }
}
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Lugat
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                <div class="overflow-hidden p-1">


                                    <div class="flex justify-center p-1 m-1">
                                        <h1 class="flex items-center text-5xl text-red-600"> qidirish uchun Ctrl + F
                                            bosing </h1>
                                    </div>
                                    <Link :href="route('lugat.create')">
                                        <button type="button"
                                                class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                            Qo'shish
                                        </button>
                                    </Link>
                                    <table class="min-w-full text-center text-sm font-light">
                                        <thead
                                            class="border-b bg-neutral-800 font-medium text-white dark:border-neutral-500 dark:bg-neutral-900">
                                        <tr>
                                            <th scope="col" class=" px-6 py-4">#id</th>
                                            <th scope="col" class=" px-6 py-4">antro</th>
                                            <th scope="col" class=" px-6 py-4">manosi</th>
                                            <th scope="col" class=" px-6 py-4">o'zgartirish</th>
                                            <th scope="col" class=" px-6 py-4">o'chrib tashlash</th>
                                        </tr>
                                        </thead>
                                        <tbody>


                                        <tr v-for="value in lugatlar" :key="value.id"
                                            class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap  px-6 py-4 font-medium">{{ value.id }}</td>
                                            <td class="whitespace-nowrap  px-6 py-4">{{ value.antro }}</td>
                                            <td class="px-6 py-4 overflow-hidden text-center">{{ value.manosi }}</td>
                                            <td class="whitespace-nowrap  px-6 py-4">
                                                <Link :href="route('lugat.edit', value.id)">
                                                    <button type="submit"
                                                            class="text-gray-900 bg-[#F7BE38] hover:bg-[#F7BE38]/90 focus:ring-4 focus:outline-none focus:ring-[#F7BE38]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#F7BE38]/50 mr-2 mb-2">
                                                        o'zgartirish
                                                    </button>
                                                </Link>
                                            </td>
                                            <td class="whitespace-nowrap  px-6 py-4">
                                              <Link @click="destroy(value.id)" href="#" >
                                                <button type="button"
                                                        class="text-gray-900 bg-[#fa3c3c] hover:bg-[#fa0505]/90 focus:ring-4 focus:outline-none focus:ring-[#F7BE38]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#fa0505]/50 mr-2 mb-2">
                                                    o'chrib tashlash
                                                </button>
                                              </Link>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
