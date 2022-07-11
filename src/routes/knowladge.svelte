<script lang="js">
    import "../app.css";     
    import Navbar from "./components/navbar.svelte";
    import Footer from "./components/footer.svelte";

</script>
<body>
 <Navbar/>
    <div data-aos="zoom-in-down" class="min-h-screen items-center justify-center space-y-5 flex flex-col">
        <h1 class="text-4xl text-font font-bold">Coming Soon...</h1>
        <div class="flex flex-col space-y-3">
            <div class="flex items-center space-x-2">
                <div class="w-7 h-5 border-4 shadow-xl border-black/20 bg-green-500 rounded-full sm:w-7 sm:h-7"></div>
                <h1 class="text-lg text-green-500 text-font font-bold">Planed.</h1>
            </div>
            <div class="flex items-center space-x-2">
                <div class="w-7 h-5 border-4 shadow-xl border-black/20 bg-red-500 rounded-full sm:w-7 sm:h-7"></div>
                <h1 class="text-lg text-red-500 text-font font-bold">Page build.</h1>
            </div>
            <div class="flex items-center space-x-2">
                <div class="w-7 h-5 border-4 shadow-xl border-black/20 bg-red-500 rounded-full sm:w-7 sm:h-7"></div>
                <h1 class="text-lg text-red-500 text-font font-bold">Desing.</h1>
            </div>
        </div>
    </div>
<Footer/>        

</body>
