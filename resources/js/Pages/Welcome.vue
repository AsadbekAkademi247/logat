<script setup>
import LogatLayout from "@/Layouts/LogatLayout.vue";
import {Head, Link, router, useForm} from '@inertiajs/vue3';
import Pagination from "@/Pages/Pagination/Pagination.vue";
let props =defineProps({
    title: String,
    all:Array,
    find:String
});
const form = useForm({
    find: props.find,
});
</script>

<template>
     <Head :title="title" />
     <LogatLayout >
         <div>
             <section>
                 <div class="conteyner">
                     <h1>Antroposentrik tilshunoslik terminlarining izohli lug'ati</h1>
                 </div>
                 <div class="conteyner">
                     <div class="form_search">
                         <form  @submit.prevent="form.get(route('find',form.find))">
                             <input name="find" v-model="form.find" type="text" placeholder="Qidirish">
                             <button class="setings" type="submit"><i class="fas fa-search"></i></button>
                         </form>
                     </div>
                 </div>
                 <div class="letters">
                     <div class="let_box">
                         <div>
                             <Link href="/alphabet/A"><p class="letter">A</p></Link>
                             <Link href="/alphabet/B"><p class="letter">B</p></Link>
                             <Link href="/alphabet/CH"><p class="letter">Ch</p></Link>
                             <Link href="/alphabet/D"><p class="letter">D</p></Link>
                             <Link href="/alphabet/E"><p class="letter">E</p></Link>
                             <Link href="/alphabet/F"><p class="letter">F</p></Link>
                             <Link href="/alphabet/G"><p class="letter">G</p></Link>
                             <Link href="/alphabet/G'"><p class="letter">G'</p></Link>
                             <Link href="/alphabet/H"><p class="letter">H</p></Link>
                             <Link href="/alphabet/I"><p class="letter">I</p></Link>
                             <Link href="/alphabet/J"><p class="letter">J</p></Link>
                             <Link href="/alphabet/K"><p class="letter">K</p></Link>
                             <Link href="/alphabet/L"><p class="letter">L</p></Link>
                             <Link href="/alphabet/M"><p class="letter">M</p></Link>
                             <Link href="/alphabet/N"><p class="letter">N</p></Link>
                             <Link href="/alphabet/O"><p class="letter">O</p></Link>
                             <Link href="/alphabet/O"><p class="letter">O'</p></Link>
                             <Link href="/alphabet/P"><p class="letter">P</p></Link>
                             <Link href="/alphabet/Q"><p class="letter">Q</p></Link>
                             <Link href="/alphabet/R"><p class="letter">R</p></Link>
                             <Link href="/alphabet/S"><p class="letter">S</p></Link>
                             <Link href="/alphabet/Sh"><p class="letter">Sh</p></Link>
                             <Link href="/alphabet/T"><p class="letter">T</p></Link>
                             <Link href="/alphabet/U"><p class="letter">U</p></Link>
                             <Link href="/alphabet/V"><p class="letter">V</p></Link>
                             <Link href="/alphabet/X"><p class="letter">X</p></Link>
                             <Link href="/alphabet/Y"><p class="letter">Y</p></Link>
                             <Link href="/alphabet/Z"><p class="letter">Z</p></Link>
                         </div>
                     </div>
                 </div>
             </section>
             <div class="blue_line">
             </div>
             <div class="clear">
             </div>

             <div class="box-poragraf">

                 <div v-if="find"  class="activ-leters">
                     <p class="activ-let">{{find}}</p>
                 </div>
                 <div v-for="value in all.data"  :key="value.id"  class="container mb-5">
                     <p class="poragraf" style="margin-bottom: 20px">
                         <strong>{{value.antro}}</strong>
                          {{value.manosi}}</p>

                 </div>
                 <div v-if="all.data.length ==0" class="container mb-5">
                     <h1 class="soz">Siz qidirgan so'z topilmadi</h1>
                 </div>

             </div>

           <Pagination class="flex justify-center" :links="all.links" />

         </div>
     </LogatLayout>
</template>
