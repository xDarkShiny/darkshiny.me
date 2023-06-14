<script>
 import Navbar from "./component/navbar.svelte";
 import { onMount } from 'svelte';
 import hand from './img/hand.svg'
 import html from './img/html.svg'
 import Css from './img/css.svg'
 import js from './img/js.svg'
 import svelteico from './img/svelte.svg'
 import react from './img/react.svg'
 import php from './img/php.svg'
 import vue from './img/vue.svg'
 import mongo from './img/mongo.svg'
 import discord from './img/discord.svg'
 import twitch from './img/twitch.svg'
 import github from './img/github.svg'


 let tableData = [];
 onMount(async() => {
  fetch("https://api.lanyard.rest/v1/users/438037153310834700")
          .then(response => response.json())
          .then(data => {
           document.querySelector("#durum").innerHTML = data.data.discord_status.replace("dnd", "<span class='text-red-500'>Do Not Disturb</span> in Discord.").replace("idle", "<span class='text-yellow-500'>Idle</span> in Discord.").replace("online", "<span class='text-green-500'>Online</span> in Discord.").replace("offline", "<span class='text-gray-500'>Offline</span> in Discord.")
           document.querySelector("#username").innerHTML = data.data.discord_user.username
           document.querySelector("#img").innerHTML = '<img class="rounded-full w-8 h-8" src="https://cdn.discordapp.com/avatars/'+data.data.discord_user.id+'/'+data.data.discord_user.avatar+'.png?size=512">';
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

 function isClose() {
     document.querySelector(".absolute").style.display = "none";
 }









</script>

<div class=" absolute items-center justify-center  bg-[#171717] space-y-3 w-full h-32 top-0 flex flex-col">
    <h1 class="sm:text-xl text-lg">THE SITE IS STILL IN BETA DESIGN CHANGING</h1>
    <button on:click={isClose} class="bg-[#006BFF] px-20 py-2 rounded-[8px] font-bold">OKAY DEV</button>
</div>


 <Navbar/>

<div class="min-h-screen space-y-4 flex flex-col items-center justify-center bg-[#171717]">
   <div class="items-start justify-start sm:text-2xl text-xl sm:mr-0 mr-5 space-x-3 flex">
    <h1 class="">Hello </h1> <img class="" src={hand} alt="resim1"> <h1>I'm </h1><div id="img"> </div> <p id="username">Loading data...</p>
   </div>

  <div class="flex space-y-5 sm:space-y-0 sm:space-x-5 flex-col sm:flex-row">
    <div class="flex ml-3 sm:ml-0 sm:space-x-0 sm:space-y-5 space-x-5 flex-row sm:flex-col">
     <a href="https://discord.com/users/438037153310834700" target="_blank" rel="noreferrer" class="rounded-full flex items-center justify-center bg-white w-8 h-8"><img class="h-5" src={discord} alt=""></a>
     <a href="https://www.twitch.tv/chilldarkshiny" target="_blank" rel="noreferrer" class="rounded-full flex items-center justify-center bg-white w-8 h-8"><img class="h-5" src={twitch} alt=""></a>
     <a href="https://github.com/xDarkShiny" target="_blank" rel="noreferrer" class="rounded-full flex items-center justify-center bg-white w-8 h-8"><img class="h-5" src={github} alt=""></a>
    </div>
   <div class="flex flex-col sm:w-[500px] md:w-[600px] lg:w-[700px] xl:w-[1000px] ml-3 items-start">
     <h1 class="sm:text-5xl w-auto text-xl  sm:ml-0 font-bold">I develop websites as a hobby. Every time I try, I try and develop different things.</h1>
    <div class="sm:mt-5 mt-6 mb-6 items-center flex gap-2">
     <div id="statusColor" class="w-5 h-5 border-4 shadow-xl border-black/20  rounded-full sm:w-7 sm:h-7"></div>
     <p id="durum" class="text-font text-lg font-light text-md break-all">Loading data..</p>
     </div>
    </div>
  </div>
    <div class="px-5 py-2 ml-2 sm:ml-0 items-start flex space-x-3  border-2 mr-2 rounded-full ">
        <img class="h-6 hover:text-white" src={html} alt="">
        <img class="h-6" src={Css} alt="">
        <img class="h-6 rounded-[7.5px]" src={js} alt="">
        <img class="h-6" src={svelteico} alt="">
        <img class="h-6" src={react} alt="">
        <img class="h-6" src={php} alt="">
        <img class="h-6" src={vue} alt="">
        <img class="h-6" src={mongo} alt="">
    </div>

</div>
