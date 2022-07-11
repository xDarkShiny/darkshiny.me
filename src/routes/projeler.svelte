<script lang="js">
    import "../app.css";     
    import Navbar from "./components/navbar.svelte";

</script>

 <Navbar/>
<div class="flex flex-col min-h-screen mt-20  lg:px-32 outline-none focus:outline-none ease-linear transition-all duration-150 xl:px-72  px-5 justify-center">
        <h1 class="text-2xl flex sm:space-x-2 space-x-1 mb-10 text-font2 font-bold text-black/80">Projelerim</h1>
        <div class="grid items grid-rows-2  grid-cols-1 gap-4 sm:grid-cols-3">
            <div class="relative overflow-hidden rounded-lg shadow-xl cursor-pointer">
                    <img class="" src="https://media.discordapp.net/attachments/933433373844705301/994256670807040000/unknown.png?width=813&height=465" alt="Flower and sky"/>
                    <div class="absolute left-0 w-32 h-8 rounded-br-lg items-center top-0 bg-cyan-500">
                        <h1 class="text-white text-font font-bold mt-0.5 text-center text-xl">Tailwind</h1>
                    </div>
                    <div class="absolute bg-gradient-to-t from-black inset-x-0 bottom-0 px-6 py-4">
                    <h1 class="mb-3 text-3xl text-font3 font-extrabold tracking-tight text-white">TWISTER</h1>
                    </div>
                </div>
            </div>
</div>
