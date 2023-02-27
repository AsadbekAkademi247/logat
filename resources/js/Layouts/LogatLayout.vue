<script setup>
import { Head, Link, router } from '@inertiajs/vue3';
let  props =defineProps({
    title: String,
});

</script>

<template>
    <Head >
        <link rel="stylesheet" href="icons/fontawesome-free-5.15.4-web/css/all.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </Head>
    <div class="nav_section">
        <nav>
            <Link href="/"><p class="nav_pi">Asosiy</p></Link>
            <Link href="/loyiha_haqida/"><p class="nav_pi">Loyiha haqida</p></Link>
            <!-- <a href=""><p class="nav_pi">So'z qo'shish</p></a> -->
            <Link href="/contact/"><p class="nav_pi">Aloqa</p></Link>
        </nav>
    </div>
    <slot/>
    <footer class=" ">
        <div class="container">
            <p class="containerr footerr-por pt-2">Barcha huquqlar himoyalangan © 2022</p>
        </div>
    </footer>
</template>

<style>

* {
    margin: 0;
    padding: 0;
}
@font-face {
    src: url(fonts/Open_Sans);
    font-family: 'Open Sans', sans-serif;
}
.nav_section {
    width: 100%;
    background-color: #082743;
    float: left;
    margin: auto;

}
nav {
    margin: auto;
    width: 70%;
    text-align: center;
}
.nav_pi {
    padding: 15px 50px;
    display: inline-block;
    margin: auto;
    color: aliceblue;
    text-align: center;
    font-family: sans-serif;
    font-size: 28px;
}
.nav_pi:hover {
    color: #002e5a;
    background-color: #81c2fc;
}
/* section */
section {
    width: 100%;
    background-image: linear-gradient(#377cc1, #092845);
    padding-top: 360px;
}
section h1 {
    text-align: center;
    font-size: 65px;
    color: white;
    font-family: 'Open Sans',sans-serif;
    position: relative;
    bottom: 230px;
    font-weight: 100;
    letter-spacing: 8px;
}
.conteyner {
    width: 70%;
    margin: auto;
}
input[type=text]{
    background-color: white;
    border: #377cc1 solid 5px;
    display: inline-block;
    width: 100%;
    outline: none;
    box-sizing: border-box;
    position: relative;
    bottom: 200px;
    padding: 10px 0px 10px 20px;
    font-size: 30px;
}
/* .search {
    position: relative;
    bottom: 247px;
    left: 15px;
    display: inline-block;
} */
.setings {
    position: relative;
    bottom: 248px;
    right: 15px;
    display: inline-block;
    float: right;
    background: none;
    border: none;
}
.fas {
    font-size: 30px;
    color:#366ea7;
}

.letters {
    width: 98%;
    margin: auto;
}
.let_box {
    width: 100%;
    display: inline-block;
    float: left;
    margin: auto;
    text-align: center;

}
.letter {
    display: inline-block;
    padding: 14px;
    font-size: 28px;
    color: white;
    font-family: 'Open Sans', sans-serif;
    text-align: center;
    box-sizing: border-box;
    position: relative;
    bottom: 160px;
}
.letter:hover {
    color: #002e5a;
    background-color: #81c2fc;
}
.blue_line {
    background-color: #4389c7;
    padding: 30px 0px;
    width: 100%;
    margin-top: -60px;
}
.clear {
    clear: both;
}

/* poragraf */

.poragraf {
    font-size: 25px;
    font-family: sans-serif;
    color:#366ea7;
}
hr {
    color: #366ea7;
}
.activ-leters {
    width: 100px;
    height: 100px;
    background-color: #377cc1;
    border-radius: 100%;
    position: absolute;
    left: 70px;

}
.activ-let {
    font-size: 52px;
    color: white;
    font-family: 'Open Sans';
    font-weight: 500;
    display: grid;
    justify-items: center;
    align-items: center;
    transform: translate(0,12%);
    overflow-x:hidden;
}
.soz {
    text-align: center;
    font-size: 65px;
    color: black;
    font-family: 'Open Sans',sans-serif;
    position: relative;
    /* bottom: 230px; */
    font-weight: 100;
    letter-spacing: 8px;
}
footer {
    background-color: #082743;
    height: 50px;
    color: white;
    width: 100%;
    /* position: absolute; */
    bottom: 0;
    margin-top: auto;

}
.footerr-por {
    color: white;
    font-size: 23px;
    text-align: center;

}
.about {
    /* padding: 400px 0px; */
    min-height: 880px;
    font-size: 20px;
}



</style>
