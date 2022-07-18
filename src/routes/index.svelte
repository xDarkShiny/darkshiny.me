<script lang="js">
    import { onMount } from "svelte";
    import "../app.css";
    import Navbar from "./components/navbar.svelte";
    import Footer from "./components/footer.svelte";
    let tableData = [];
        onMount(async() => {
        fetch("https://api.lanyard.rest/v1/users/438037153310834700")
        .then(response => response.json())
        .then(data => {
            document.querySelector("#durum").innerHTML = data.data.discord_status.replace("dnd", "In case of <span class='text-red-500'>Do Not Disturb</span> via Discord.").replace("idle", "In case of <span class='text-yellow-500'>Idle</span> via Discord.").replace("online", "In case of <span class='text-green-500'>Online</span> via Discord.").replace("offline", "In case of <span class='text-gray-500'>Offline</span> via Discord.")
            document.querySelector("#username").innerHTML = data.data.discord_user.username
            document.querySelector("#img").innerHTML = '<img class="rounded-full w-8 h-8" src="https://cdn.discordapp.com/avatars/'+data.data.discord_user.id+'/'+data.data.discord_user.avatar+'.gif?size=512">';
            let status = data.data.discord_status
            let color = document.querySelector("#statusColor")
            if(status == "dnd") {
                color.style.backgroundColor = "#ef4444"
            } else if(status == "idle") {
                color.style.backgroundColor = "#ebb510"
            } else if(status == "online") {
                color.style.backgroundColor = "#29c763"
            }
            
        })});
        
</script>


<body>
    <Navbar/>
 <div class="flex flex-col min-h-screen sm:mt-20 mt-32 sm:px-72 px-5 justify-center">
       <div data-aos="zoom-in-down" class="flex flex-col items-start">
           <h1 class="text-2xl items-center flex sm:space-x-2 space-x-1 mb-10 text-font2 font-bold text-black/80">
                 <h1>Hello 👋 I'm </h1> <div id="img"></div> <p id="username">Loading data...</p>,
           </h1>
           <div class="flex  sm:flex-row flex-col gap-5">
               <div class="flex sm:flex-col gap-5">
                   <a href="https://discord.com/users/438037153310834700" target="_blank" class="bg-black hover:ring-4 ring-black/30 items-center shadow-xl cursor-pointer p-2 daire outline-none focus:outline-none ease-linear transition-all duration-150"><i class="text-md ml-0.5 rounded-full text-white fa-brands fa-discord"></i></a>
                   <a href="https://github.com/xDarkShiny" target="_blank" class="bg-black hover:ring-4 ring-black/30 items-center shadow-xl cursor-pointer p-2 daire outline-none focus:outline-none ease-linear transition-all duration-150"><i class="text-md ml-1 rounded-full text-white fa-brands fa-github"></i></a>
                   <a href="https://www.twitch.tv/chilldarkshiny" target="_blank" class="bg-black hover:ring-4 ring-black/30 items-center shadow-xl cursor-pointer p-2 daire outline-none focus:outline-none ease-linear transition-all duration-150"><i class="text-md ml-1 rounded-full text-white fa-brands fa-twitch"></i></a>
               </div>
               <div  class="sm:text-5xl mt-3 text-xl text-font3 flex flex-col  text-black font-extrabold">
                   <h1>I develop websites as a hobby. Every time I try, I try and develop different things.</h1>
                   <div class="flex items-center gap-3">
                    <div class="sm:mt-5 mt-6 mb-6 items-center flex gap-2">
                        <div id="statusColor" class="w-5 h-5 border-4 shadow-xl border-black/20  rounded-full sm:w-7 sm:h-7"></div>
                        <p id="durum" class="text-font sm:text-lg text-md break-all">Loading data..</p>
                    </div>
                   </div>
               </div>
           </div>
       </div>
 </div>
 <Footer/>
</body>