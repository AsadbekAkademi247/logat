<script setup>
import LogatLayout from "@/Layouts/LogatLayout.vue";
import {Head, Link, router} from '@inertiajs/vue3';

defineProps({
    title: String,
    all: Array,
});

</script>

<template>
    <Head :title="title"/>
    <LogatLayout>


        <div class="container about  pt-5">
            <p class="text-dark pt-5"><a href="http://tai.uz/" target="_blank"><span class="text-dark">O'zR FA O'zbek tili, adabiyoti va folklori instituti</span> </a> </p>
            <p><a href="https://yandex.com/maps/-/CCUV7EgPtD" target="_blank"><span class="font-weight-bold text-dark">Manzil:</span>  100060. Toshkent shahri  Shahrisabz tor ko'chasi 5-uy</a> </p>
            <p><a href="tel:+998712337144"><span class="font-weight-bold text-dark">Telefon nomer:</span>  +998-71-233-71-44</a> </p>
            <p><a href="mailto:uztafi@academy.ru " target="_blank"><span class="font-weight-bold text-dark">E-mail:</span>  uztafi@academy.uz</a> </p>
            <div class="mt-3 mb-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d707.2437059248551!2d69.28288090352886!3d41.30462269759328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b5b9739095b%3A0x422703fe3a44c6cd!2zT-KAmHpiZWsgdGlsaSwgYWRhYml5b3RpIHZhIGZvbGtsb3JpIGluc3RpdHV0aSB8INCY0L3RgdGC0LjRgtGD0YIg0YPQt9Cx0LXQutGB0LrQvtCz0L4g0Y_Qt9GL0LrQsCwg0LvQuNGC0LXRgNCw0YLRg9GA0Ysg0Lgg0YTQvtC70YzQutC70L7RgNCw!5e0!3m2!1sru!2s!4v1664370593732!5m2!1sru!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </LogatLayout>
</template>
