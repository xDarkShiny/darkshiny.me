<script context="module">
    /** @type {import('@sveltejs/kit').Load} */
    export function load({ error, status }) {
      return {
        props: {
          title: `${status}: ${error.message}`
        }
      };
    }
  </script>
  
  <script>
    export let title;
    import "../app.css";     
    import Navbar from "./components/navbar.svelte";
    import Footer from "./components/footer.svelte";
  </script>

<Navbar/>
<div data-aos="zoom-in-down" class="min-h-screen flex flex-col space-y-10 justify-center items-center">
    <h1 class="text-center justify-center text-font text-red-500 text-4xl">{title}</h1>
    <div class="flex items-center space-x-2">
        <element on:click={() => (window.location.href = "/")} class="mr-1 mb-1 text-sm bg-black px-5 py-2 rounded-full text-font text-white">HOME PAGE</element>
        <a href="https://discord.com/users/438037153310834700" target="_blank" class="bg-black items-center shadow-xl cursor-pointer p-2 daire"><i class="text-md ml-0.5 rounded-full text-white fa-brands fa-discord"></i></a>
        <a href="https://github.com/xDarkShiny" target="_blank" class="bg-black items-center shadow-xl cursor-pointer p-2 daire"><i class="text-md ml-1 rounded-full text-white fa-brands fa-github"></i></a>
        <a href="https://www.twitch.tv/chilldarkshiny" target="_blank" class="bg-black items-center shadow-xl cursor-pointer p-2 daire"><i class="text-md ml-1 rounded-full text-white fa-brands fa-twitch"></i></a>
    </div>
   
</div>
<Footer/>
