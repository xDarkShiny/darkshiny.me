<script lang="js">
    import "../app.css";     
    import Navbar from "./components/navbar.svelte";
    import Footer from "./components/footer.svelte";

</script>
<body>
 <Navbar/>
<div data-aos="zoom-in-down" class="flex flex-col min-h-screen mt-20  lg:px-32 outline-none focus:outline-none ease-linear transition-all duration-150 xl:px-72  px-5 justify-center">
        <h1 class="text-2xl flex sm:space-x-2 space-x-1 mb-10 text-font2 font-bold text-black/80">Projects</h1>
            <div class="grid gap-5 sm:grid-cols-3 grid-rows-1 items-center">      
                    <div class="flex flex-col hover:ring hover:ring-offset-4 hover:ring-black outline-none focus:outline-none ease-linear transition-all duration-150 cursor-pointer shadow-lg rounded-xl">
                        <img src="https://media.discordapp.net/attachments/933433373844705301/994256670807040000/unknown.png?width=1173&height=671" alt="twister" class="h-62 rounded-t-xl">
                        <div class="flex flex-col space-y-3 p-3">
                            <div class="space-y-1">
                                <h1 class="text-font font-bold text-2xl">Twister</h1>
                                <p class="text-font font-bold text-black/50 text-lg">Series, movie watching theme</p>
                                <div class="flex space-x-2">
                                    <div class="px-3 text-sm font-bold text-black/50 py-1 text-font mr-1 mb-1 rounded bg-orange-500">HTML</div>
                                    <div class="px-3 text-sm font-bold text-black/50 py-1 text-font mr-1 mb-1 rounded bg-blue-500">CSS</div>

                                </div>
                            </div>
                            <div class="flex items-center space-x-5">
                                <a href="https://twister.vercel.app/" class="mr-1 mb-1 px-4 hover:px-10 py-2 bg-black text-white rounded text-font outline-none focus:outline-none ease-linear transition-all duration-150">Go To Demo!</a>
                                <a href="https://github.com/xDarkShiny/twister" class="text-font font-bold text-black text-lg underline decoration-2 underline-offset-4">Git Repo</a>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col hover:ring hover:ring-offset-4 hover:ring-black outline-none focus:outline-none ease-linear transition-all duration-150 cursor-pointer shadow-lg rounded-xl">
                        <img src="https://media.discordapp.net/attachments/933433373844705301/996119151686983811/unknown.png?width=1266&height=671" alt="twister" class="h-62 rounded-t-xl">
                        <div class="flex flex-col space-y-3 p-3">
                            <div class="space-y-1">
                                <h1 class="text-font font-bold text-2xl">darkshiny.me</h1>
                                <p class="text-font font-bold text-black/50 text-lg">My Porfolio Site</p>
                                <div class="flex space-x-2">
                                    <div class="px-3 text-sm font-bold text-black/50 py-1 text-font mr-1 mb-1 rounded bg-orange-500">SVELTE</div>
                                    <div class="px-3 text-sm font-bold text-black/50 py-1 text-font mr-1 mb-1 rounded bg-blue-500">TAİLWİNDCSS</div>

                                </div>
                            </div>
                            <div class="flex items-center space-x-5">
                                <a href="https://www.darkshiny.me/" class="mr-1 mb-1 px-4 hover:px-10 py-2 bg-black text-white rounded text-font outline-none focus:outline-none ease-linear transition-all duration-150">Go To Demo!</a>
                                <a href="https://github.com/xDarkShiny/darkshiny.me" class="text-font font-bold text-black text-lg underline decoration-2 underline-offset-4">Git Repo</a>
                            </div>
                        </div>
                    </div>
            </div>         
</div>
<Footer/>        

</body>
