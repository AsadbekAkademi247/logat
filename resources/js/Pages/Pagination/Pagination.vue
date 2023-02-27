<script setup>
import {Link} from '@inertiajs/vue3';

defineProps(
    {links: Array}
);
</script>
<template>

    <nav v-if="links.length > 4" aria-label="Page navigation example mb-5 flex">
        <ul v-for="(link, k) in links" :key="k"  class="pagination justify-content-center ">
            <Link :href="link.url || '#'" :disabled="link.url === null">
            <li class="m-1"
                 :class="{'page-item active':
                                link.active, 'page-item': !link.active}">

                 <span v-html="link.label" class="page-link"></span>

            </li>
            </Link>
        </ul>
    </nav>
</template>
