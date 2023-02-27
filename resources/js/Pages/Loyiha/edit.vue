<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import {Head, Link, router, useForm} from '@inertiajs/vue3';

const props = defineProps({
    title: String,
    edit: Object
});

const form = useForm({
    title: props.edit.title,
    descriptions: props.edit.descriptions,
});

</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Loyihe O'zgartirish
            </h2>
        </template>



        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                <div class="overflow-hidden p-3">


                                    <form class="p-6" @submit.prevent="form.put(route('loyihe.update',edit.id))">
                                        <div class="mb-6">
                                            <label for="success"
                                                   class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">Title</label>
                                            <input type="text" id="success"
                                                   v-model="form.title"
                                                   name="title"
                                                   class="bg-green-50 border border-green-500 text-green-900 dark:text-green-400 placeholder-green-700 dark:placeholder-green-500 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-green-500"
                                                   placeholder="title">

                                        </div>

                                        <div class="mb-6">
                                            <label for="success"
                                                   class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">Descriptions</label>
                                            <textarea  type="text" id="success"
                                                      v-model="form.descriptions"
                                                      name="descriptions"
                                                      class="bg-green-50 border border-green-500 text-green-900 dark:text-green-400 placeholder-green-700 dark:placeholder-green-500 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-green-500"
                                                      placeholder="Write your thoughts here..."> </textarea>

                                        </div>
                                        <p v-if="form.errors.title" id="standard_error_help"
                                           class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                            class="font-medium">Antro Bo'sh</span></p>
                                        <p v-if="form.errors.descriptions" id="standard_error_help"
                                           class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                            class="font-medium">Manosi Bo'sh</span></p>

                                        <!--                                        <InputError v-for=""  class="mt-2" :message="form.errors.email" />-->

                                        <div class="flex justify-center">

                                            <button type="submit"
                                                    class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                                O'zgartirish
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
