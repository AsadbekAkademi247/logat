<script setup>
import LogatLayout from "@/Layouts/LogatLayout.vue";
import {Head, Link, router} from '@inertiajs/vue3';
import Pagination from "@/Pages/Pagination/Pagination.vue";

defineProps({
    title: String,
    all: Array,
});

</script>

<template>
    <Head :title="title"/>
    <LogatLayout>
        <div class="container pt-5 mb-">
            <div v-for="value in all">
                <h2 class="text-center  text-danger pt-5">{{value.title}}</h2>
                <p>{{value.descriptions}} </p>
                <br>
            </div>
        </div>
    </LogatLayout>
</template>
