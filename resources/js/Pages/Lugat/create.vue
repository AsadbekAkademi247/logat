<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import {router, useForm} from "@inertiajs/vue3";


defineProps({
    title: String,
    edit: Object
});

const form = useForm({
    antro: null,
    manosi: null,
});


</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Lugat O'zgartirish
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                <div class="overflow-hidden p-3">


                                    <form class="p-6" @submit.prevent="form.post(route('lugat.store'))">
                                        <div class="mb-6">
                                            <label for="success"
                                                   class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">Antro</label>
                                            <input type="text" id="success"
                                                    v-model="form.antro"
                                                    name="antro"
                                                   class="bg-green-50 border border-green-500 text-green-900 dark:text-green-400 placeholder-green-700 dark:placeholder-green-500 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-green-500"
                                                   placeholder="Antro">

                                        </div>

                                        <div class="mb-6">
                                            <label for="success"
                                                   class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">Manosi</label>
                                            <textarea type="text" id="success"
                                                      v-model="form.manosi"
                                                      name="manosi"
                                                      class="bg-green-50 border border-green-500 text-green-900 dark:text-green-400 placeholder-green-700 dark:placeholder-green-500 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-green-500"
                                                      placeholder="Write your thoughts here..."> </textarea>

                                        </div>
                                        <p v-if="form.errors.antro" id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Antro Bo'sh</span> </p>
                                        <p v-if="form.errors.manosi" id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Manosi Bo'sh</span> </p>

                                        <!--                                        <InputError v-for=""  class="mt-2" :message="form.errors.email" />-->

                                        <div class="flex justify-center">
                                            <button type="submit"
                                                    class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                                Yasash
                                            </button>
                                        </div>
                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
