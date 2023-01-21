<script lang="js">
    import "../app.css";     
    import Navbar from "./components/navbar.svelte";
    import Footer from "./components/footer.svelte";
    import data from './data.json';
    import Css from "../lib/css.svg";
    import svelteico from "../lib/svelte.svg";
    import react from "../lib/react.svg";
    import vue from "../lib/vue.svg";
    import php from "../lib/php.svg";
    import js from "../lib/js.svg";
    import html from "../lib/html.svg";
    import mongo from "../lib/mongo.svg";
    import pattern from "../lib/pattern.png";

</script>
<body class="relative">
 <Navbar/>
<div data-aos="zoom-in-down" class="flex flex-col min-h-screen mt-32  lg:px-32 outline-none focus:outline-none ease-linear transition-all duration-150 xl:px-72  px-5 justify-center">
        <h1 class="text-2xl flex sm:space-x-2 space-x-1 mb-6 text-font2 font-bold text-black/80">Projects</h1>
            <div class="grid gap-5 sm:grid-cols-3 grid-rows-1 items-center">     
               {#each data  as { largeImage, projectsName, projectsDescription, projectsLink, projectsGithub, lang, lang2,  dev1img, dev2img  }, i}
                <div class="relative flex flex-col hover:ring hover:ring-offset-4 hover:ring-black outline-none focus:outline-none ease-linear transition-all duration-150 cursor-pointer shadow-lg hover:shadow-none rounded-xl">
                        <img src={largeImage} alt="twister" class="h-62 rounded-t-xl">
                        <div class="flex flex-col space-y-3 p-3">
                            <div class="space-y-1">
                                <div class="flex items-center ">
                                    <h1 class="text-font font-bold text-2xl">{projectsName}</h1>
                                    <div class="px-5 py-1 items-center flex space-x-3 bg-white border-2 ml-2 rounded-full  ">
                                        <h1 class="text-font font-bold text-xl">#</h1>
                                        <img class=" h-4" src={svelteico} alt="">
                                        <img class=" h-4" src={html} alt="">
                                    </div>
                                </div>
                                <p class="text-font font-light text-black/50 text-lg">{projectsDescription}</p>
                            </div>
                            <div class="flex items-center space-x-5">
                                <a href={projectsLink} class="mr-1 mb-1 px-4 hover:ring-4 hover:ring-black/40 py-2 bg-black text-white rounded-full text-font outline-none focus:outline-none ease-linear transition-all duration-150">Go To Demo!</a>
                                <a href={projectsGithub} class="text-font font-bold text-black text-lg underline decoration-2 underline-offset-4">Git Repo</a>
                            </div>
                        </div>
                        <div class="absolute px-4 ml-3 mt-3 p-2 bg-opacity-10 bg-black rounded-full  left-0 top-0">
                            <h1 class="text-xl text-white font-bold">{i + 1}</h1>
                        </div>
                    </div>
               {/each}  
            </div>         
</div>

<div class="h-32 w-32 flex"></div>
<Footer/>        

</body>