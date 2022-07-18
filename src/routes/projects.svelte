<script lang="js">
    import "../app.css";     
    import Navbar from "./components/navbar.svelte";
    import Footer from "./components/footer.svelte";
    import data from './data.json';
</script>
<body>
 <Navbar/>
<div data-aos="zoom-in-down" class="flex flex-col min-h-screen mt-20  lg:px-32 outline-none focus:outline-none ease-linear transition-all duration-150 xl:px-72  px-5 justify-center">
        <h1 class="text-2xl flex sm:space-x-2 space-x-1 mb-10 text-font2 font-bold text-black/80">Projects</h1>
            <div class="grid gap-5 sm:grid-cols-3 grid-rows-1 items-center">     
               {#each data  as { largeImage, projectsName, projectsDescription, projectsLink, projectsGithub, lang, lang2, currentStatus  }}
                <div class="flex flex-col hover:ring hover:ring-offset-4 hover:ring-black outline-none focus:outline-none ease-linear transition-all duration-150 cursor-pointer shadow-lg hover:shadow-none rounded-xl">
                        <img src={largeImage} alt="twister" class="h-62 rounded-t-xl">
                        <div class="flex flex-col space-y-3 p-3">
                            <div class="space-y-1">
                                <div class="flex items-center justify-between">
                                    <h1 class="text-font font-bold text-2xl">{projectsName}</h1>
                                    <h1 class="text-font font-bold text-green-500 text-xl">{currentStatus}</h1>
                                </div>
                                <p class="text-font font-bold text-black/50 text-lg">{projectsDescription}</p>
                            </div>
                            <div class="flex items-center space-x-5">
                                <a href={projectsLink} class="mr-1 mb-1 px-4 hover:ring-4 hover:ring-black/40 py-2 bg-black text-white rounded text-font outline-none focus:outline-none ease-linear transition-all duration-150">Go To Demo!</a>
                                <a href={projectsGithub} class="text-font font-bold text-black text-lg underline decoration-2 underline-offset-4">Git Repo</a>
                            </div>
                        </div>
                    </div>
               {/each}  
            </div>         
</div>
<Footer/>        

</body>
