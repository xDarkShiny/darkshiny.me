<script>
    import logo from "../img/logo.svg";
    import hamburger from "../img/hamburger.svg";


    let isOpen = false;

    function toggleMenu() {
        isOpen = !isOpen;
    }
    function handleKeyDown(event) {
        if (event.key === "Enter") {
            toggleMenu();
        }
    }

</script>

<div class="w-full border-b-2 border-[#2f2f2f] items-center flex  justify-between h-[56px] bg-[#232323]">
    <div class="flex ml-5 items-center text-center sm:space-x-8">
        <img class="h-11 mb-2.5" src={logo} alt="">
            <a href="/"  class="sm:block hidden text-sm font-bold " >HOME</a>
            <a href="/projects" class="sm:block hidden text-sm " to="/projects">PROJECTS</a>
            <a href="/blog" class="sm:block hidden text-sm " to="/blog">BLOG</a>
            <p class="sm:hidden block text-sm text-[#6D6D6D]">ITS A MOBILE VERSION</p>
        {#if isOpen }
            <div class="absolute transition ease-in  flex items-center justify-center inset-x-0 top-14 w-full h-10 bg-[#006BFF] space-x-5 flex-row">
                <a href="/" class="sm:hidden block text-sm font-bold ">HOME</a>
                <a href="/projects" class="sm:hidden block text-sm ">PROJECTS</a>
                <a href="/blog" class="sm:hidden block text-sm ">BLOG</a>
            </div>
        {/if}
    </div>
    <div class="h-full flex items-center justify-center bg-[#006BFF] w-[62px] sm:w-[124px]">
        <a href="mailto:darkshiny@duck.com" class="sm:block hidden font-bold flex uppercase  bg-[#006BFF]">let's talk</a>
        <button on:click={toggleMenu} on:keydown={handleKeyDown} class="sm:hidden font-bold flex uppercase bg-[#006BFF]" tabindex="0">
            <img src={hamburger} alt="resim3">
        </button>
    </div>
</div>