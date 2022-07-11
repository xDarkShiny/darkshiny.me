<script lang="js">
    import { onMount } from "svelte";
    import "../app.css";
    import Navbar from "./components/navbar.svelte";
    let tableData = [];
            onMount(async() => {
        fetch("https://api.lanyard.rest/v1/users/438037153310834700")
        .then(response => response.json())
        .then(data => {
            document.querySelector("#durum").innerHTML = data.data.discord_status.replace("dnd", "Discord üzerinden <span class='text-red-500'>Rahatsız etme</span> durumunda.").replace("idle", "Discord üzerinden <span class='text-yellow-500'>Boşta</span> durumunda.").replace("online", "Discord üzerinden <span class='text-green-500'>Çevrimiçi</span> durumunda.").replace("offline", "Discord üzerinden <span class='text-gray-500'>Çevrimdışı</span> durumunda.")
            document.querySelector("#username").innerHTML = data.data.discord_user.username
            let status = data.data.discord_status
            let color = document.querySelector("#statusColor")
            if(status == "dnd") {
                color.style.backgroundColor = "#c2152f"
            } else if(status == "idle") {
                color.style.backgroundColor = "#eab308"
            } else if(status == "online") {
                color.style.backgroundColor = "#22c55e"
            }
        })});

        
</script>


<body>
    <Navbar/>
 <div class="flex flex-col min-h-screen sm:mt-20 mt-32 sm:px-72 px-5 justify-center">
       <div data-aos="zoom-in-down" class="flex flex-col items-start">
           <h1 class="text-2xl flex sm:space-x-2 space-x-1 mb-10 text-font2 font-bold text-black/80">
                 <h1>Merhaba 👋 Ben </h1> <p id="username">Veri Alınıyor...</p>,
           </h1>
           <div class="flex sm:flex-row flex-col gap-5">
               <div class="flex sm:flex-col gap-5">
                   <a href="https://discord.com/users/438037153310834700" target="_blank" class="bg-black items-center shadow-xl cursor-pointer p-2 daire"><i class="text-md ml-0.5 rounded-full text-white fa-brands fa-discord"></i></a>
                   <a href="https://github.com/xDarkShiny" target="_blank" class="bg-black items-center shadow-xl cursor-pointer p-2 daire"><i class="text-md ml-1 rounded-full text-white fa-brands fa-github"></i></a>
                   <a href="https://www.twitch.tv/chilldarkshiny" target="_blank" class="bg-black items-center shadow-xl cursor-pointer p-2 daire"><i class="text-md ml-1 rounded-full text-white fa-brands fa-twitch"></i></a>
               </div>
               <div  class="sm:text-5xl  text-xl text-font3 flex flex-col  text-black font-extrabold">
                   <h1>Hobi olarak websiteleri geliştiriyorum.Her başka denememde farklı şeyler deneyip kendimi geliştiriyorum.</h1>
                   <div class="flex items-center gap-3">
                    <div class="sm:mt-10 mt-6 mb-6 items-center flex gap-2">
                        <div id="statusColor" class="w-7 h-5 border-4 shadow-xl border-black/20  rounded-full sm:w-7 sm:h-7"></div>
                        <p id="durum" class="text-font sm:text-lg text-md break-all">Veri Yükleniyor...</p>
                    </div>
                   </div>
               </div>
           </div>
       </div>
 </div>
</body>