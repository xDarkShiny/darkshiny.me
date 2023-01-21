<script>
 import Home from "../index.svelte";
 import autoAnimate from '@formkit/auto-animate';

	let isExpanded = false

	function clickHandler() {
		isExpanded = !isExpanded
	}
</script>
<body>
<div class="inset-x-0 z-40 top-0 fixed">
<nav class="flex w-full cursor-pointer backdrop-blur-lg mr-1 mb-1 outline-none focus:outline-none ease-linear transition-all duration-150 sm:px-10 md:px-16 lg:px-32 xl:px-72 px-2 justify-between items-center py-1">
    <element on:click={() => (window.location.href = "/")} href="ansayfa" class="flex items-center justify-start gap-2 ">
        <img class="h-20 mb-2 cursor-pointer drop-shadow-xl" src="https://media.discordapp.net/attachments/938854772570718238/993851739281301524/sticker.png?width=671&height=671" alt="">
        <span><h1 class="text-font text-2xl">DarkShiny.</h1><h2 class="text-font2 font-bold text-md">F R O N T - E N D</h2></span>
    </element>
    <div class="flex gap-5">
        <element on:click={() => (window.location.href = "/")} class="px-7 py-2 border-2 sm:block hidden text-font rounded-full mr-1 mb-1  ring-black/20  text-black hover:ring-4 outline-none focus:outline-none cursor-pointer shadow-xl ease-linear transition-all duration-150"><h1>Home</h1></element>
        <a class="px-7 py-2 border-2 sm:block hidden text-font rounded-full mr-1 mb-1  ring-black/20  text-black hover:ring-4 outline-none focus:outline-none cursor-pointer shadow-xl ease-linear transition-all duration-150" href="/projects"><h1>Projects</h1></a>
        <a class="px-7 py-2 border-2 sm:block hidden text-font rounded-full mr-1 mb-1  ring-black/20  text-black hover:ring-4 outline-none focus:outline-none cursor-pointer shadow-xl ease-linear transition-all duration-150" href="/blog"><h1>Blog</h1></a>

    </div>
    <a href="mailto:darkshiny@duck.com" class="px-4 py-2 border-2 sm:block hidden border-black text-font rounded-full mr-1 mb-1  ring-black/20 bg-black text-white hover:ring-4 outline-none focus:outline-none cursor-pointer shadow-xl ease-linear transition-all duration-150">Let's Talk!</a>
    <div use:autoAnimate class="sm:hidden block ">
        <button class="px-3 py-2 border-2 border-black text-font rounded-lg mr-1 mb-1  ring-black/20 bg-black text-white hover:ring-4 outline-none focus:outline-none cursor-pointer shadow-xl ease-linear transition-all duration-150" on:click={clickHandler}>Menu</button>
        {#if isExpanded}
        <ul class="p-3 bg-white cursor-pointer shadow-xl rounded-lg flex-col space-y-3 text-font">
            <element on:click={() => (window.location.href = "/")}><h1>Home</h1></element>
            <a class="text-font" href="/projects"><h1>Projects</h1></a>
            <a class="text-font" href="/blog"><h1>Blog</h1></a>

        </ul>
        {/if}
    </div>
</nav>
</div>
</body>
