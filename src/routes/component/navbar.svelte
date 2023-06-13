<script>
    import logo from "../img/logo.svg";
    import hamburger from "../img/hamburger.svg";
    import autoAnimate from '@formkit/auto-animate';
    import { Router, Link, Route } from "svelte-routing";


    let isOpen = false;

    function toggleMenu() {
        isOpen = !isOpen;
    }

    export let url = "/";
</script>

<div class="w-full items-center flex  justify-between h-[56px] bg-[#232323]">
    <div class="flex ml-5 items-center text-center sm:space-x-8">
        <img class="h-11 mb-2.5" src={logo} alt="">
            <a href="/" class="sm:block hidden text-sm font-bold " >HOME</a>
            <a href="/projects" class="sm:block hidden text-sm " to="/projects">PROJECTS</a>
            <a href="/blog" class="sm:block hidden text-sm " to="/blog">BLOG</a>
            <a class="sm:hidden block text-sm text-[#6D6D6D]">ITS A MOBILE VERSION</a>
        {#if isOpen }
            <div class="absolute transition ease-in  flex items-center justify-center inset-x-0 top-14 w-full h-10 bg-[#006BFF] space-x-5 flex-row">
                <a href="/" class="sm:hidden block text-sm font-bold ">HOME</a>
                <a href="/projects" class="sm:hidden block text-sm ">PROJECTS</a>
                <a href="/blog" class="sm:hidden block text-sm ">BLOG</a>
            </div>
        {/if}
    </div>
    <div class="h-full flex items-center justify-center bg-[#006BFF] w-[62px] sm:w-[124px]">
        <a class="sm:block hidden font-bold flex uppercase  bg-[#006BFF]">let's talk</a>
        <buton on:click={toggleMenu} class="sm:hidden font-bold flex uppercase  bg-[#006BFF]"><img src={hamburger}></buton>
    </div>
</div>