<script>
 import Home from "../index.svelte";

</script>
<body>
<div class="inset-x-0 z-40 top-0 fixed">
<nav class="flex w-full  cursor-pointer drop-shadow-xl backdrop-blur-lg mr-1 mb-1 outline-none focus:outline-none ease-linear transition-all duration-150 sm:px-10 md:px-16 lg:px-32 xl:px-72 px-2 justify-between items-center py-10">
    <a href="ansayfa" class="flex items-center justify-start gap-2 ">
        <img class="h-20 mb-2 cursor-pointer drop-shadow-xl" src="https://media.discordapp.net/attachments/938854772570718238/993851739281301524/sticker.png?width=671&height=671" alt="">
        <span><h1 class="text-font text-2xl">DarkShiny.</h1><h2 class="text-font2 font-bold text-md">F R O N T - E N D</h2></span>
    </a>
    <div class="flex gap-5">
        <element on:click={() => (window.location.href = "/")} class="text-font sm:block hidden text-xl"><h1>Anasayfa</h1></element>
        <a class="text-font sm:block hidden text-xl" href="/projeler"><h1>Projelerim</h1></a>
        <a class="text-font sm:block hidden text-xl" href="bilgim"><h1>Bilgim</h1></a>
    </div>
    <a href="mailto:darkshiny@duck.com" class="px-3 py-2 border-2 sm:block hidden border-black text-font rounded-lg mr-1 mb-1 hover:px-12 outline-none focus:outline-none cursor-pointer shadow-xl ease-linear transition-all duration-150">İletişim'e Geç!</a>
  </nav>
</div>
</body>
