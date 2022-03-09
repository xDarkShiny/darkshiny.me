<?php
require_once 'components/db.php';
$title = 'DarkShiny - Lang';
require_once 'components/discord.php';


?>
<!doctype html>
<html>
<head>
    <link href="styles.css" rel="stylesheet" type="text-css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdn.tailwindcss.com"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LBDN5XQZ1D"></script>

    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-LBDN5XQZ1D');
    </script>
    <title><?php echo $title ?></title>
    <script src="https://kit.fontawesome.com/34cdb9ec8a.js" crossorigin="anonymous"></script>
    <link href="/dist/output.css" rel="stylesheet">
    <meta name="description" content="I am interested in database field. I like simple designs. I know a bit about React and vue. My domain is php." />
    <meta name="robots" content="darkshiny, darkshinyme, darkshiny.me, shiny, dark, php, portfolyo, shinydark" />
    <meta charset="UTF-8">
    <style>

        .text-style {
            font-family: 'Sora', sans-serif;
        }

        html {
            scroll-behavior: smooth;

        }
        .discord {
            background-color: #18191c;
        }
        .text-coloridle {
            color: #c5a41f;
        }
        body::-webkit-scrollbar {
            width: 10px;               /* width of the entire scrollbar */
        }

        body::-webkit-scrollbar-track {
            background: black;        /* color of the tracking area */
        }

        body::-webkit-scrollbar-thumb {
            background-color: rgb(27, 27, 27);    /* color of the scroll thumb */
        }
        body::-webkit-scrollbar {
            width: 10px;               /* width of the entire scrollbar */
        }

        body::-webkit-scrollbar-track {
            background: black;        /* color of the tracking area */
        }

        body::-webkit-scrollbar-thumb {
            background-color: rgb(27, 27, 27);    /* color of the scroll thumb */
        }

    </style>
</head>
<body class="bg-black p-10">
        <?php
        include 'companenets/navbar.php';
    ?>
        <a class="flex text-5xl mt-20 text-style font-bold justify-center text-center text-white/60">Languages | I Use</a>

        <a class="flex mt-20 text-3xl mt-20 text-style font-bold text-end text-green-500/60">learned (medium)</a>
        <div class="grid  p-10 grid-cols-2 md:grid-cols-3 xl:grid-cols-5 2xl:grid-cols-12 lg:grid-cols-4 sm:grid-cols-3 gap-4">
            <a class="flex flex-col items-center space-y-3">
                <img class="w-32 bg-green-500 bg-opacity-30 rounded-2xl p-2 h-32" src="https://cdn.jsdelivr.net/npm/simple-icons@3.13.0/icons/vue-dot-js.svg">
                <h1 class="text-4xl text-green-900 text-style font-bold">Vue</h1>
            </a>
            <a class="flex flex-col items-center space-y-3">
                <img class="w-32 bg-blue-500 bg-opacity-30 rounded-2xl p-2 h-32" src="https://cdn.jsdelivr.net/npm/simple-icons@3.13.0/icons/react.svg">
                <h1 class="text-4xl text-blue-900 text-style font-bold">React</h1>
            </a>
            <a class="flex flex-col items-center space-y-3">
                <img class="w-32 bg-purple-500 bg-opacity-30 rounded-2xl p-2 h-32" src="https://cdn.jsdelivr.net/npm/simple-icons@3.13.0/icons/php.svg">
                <h1 class="text-4xl text-purple-900 text-style font-bold">Php</h1>
            </a>
            <a class="flex flex-col items-center space-y-3">
                <img class="w-32 bg-blue-700 bg-opacity-30 rounded-2xl p-2 h-32" src="https://cdn.jsdelivr.net/npm/simple-icons@3.13.0/icons/tailwindcss.svg">
                <h1 class="text-4xl text-blue-900 text-style font-bold">T.Css</h1>
            </a>
            <a class="flex flex-col items-center space-y-3">
                <img class="w-32 bg-orange-700 bg-opacity-30 rounded-2xl p-2 h-32" src="https://cdn.jsdelivr.net/npm/simple-icons@3.13.0/icons/html5.svg">
                <h1 class="text-4xl text-orange-900 text-style font-bold">Html</h1>
            </a>
            <a class="flex flex-col items-center space-y-3">
                <img class="w-32 bg-purple-900 bg-opacity-30 rounded-2xl p-2 h-32" src="https://cdn.jsdelivr.net/npm/simple-icons@3.13.0/icons/adobexd.svg">
                <h1 class="text-4xl text-purple-900 text-style font-bold">A.xd</h1>
            </a>
            <a class="flex flex-col items-center space-y-3">
                <img class="w-32 bg-red-900 bg-opacity-30 rounded-2xl p-2 h-32" src="https://cdn.jsdelivr.net/npm/simple-icons@3.13.0/icons/fontawesome.svg">
                <h1 class="text-4xl text-red-900 text-style font-bold">Font.a</h1>
            </a>
            <a class="flex flex-col items-center space-y-3">
                <img class="w-32 bg-sky-900 bg-opacity-30 rounded-2xl p-2 h-32" src="https://cdn.jsdelivr.net/npm/simple-icons@3.13.0/icons/github.svg">
                <h1 class="text-4xl text-sky-900 text-style font-bold">Github</h1>
            </a>

        </div>
        <a class="flex mt-10 text-3xl mt-20 text-style font-bold text-end text-red-500/60">want to learn</a>
        <div class="grid p-10 grid-cols-2 md:grid-cols-3 xl:grid-cols-5 2xl:grid-cols-12 lg:grid-cols-4 sm:grid-cols-3 gap-4">
            <a class="flex flex-col items-center space-y-3">
                <img class="w-32 bg-red-500 bg-opacity-30 rounded-2xl p-2 h-32" src="https://cdn.jsdelivr.net/npm/simple-icons@3.13.0/icons/java.svg">
                <h1 class="text-4xl text-red-900 text-style font-bold">Java</h1>
            </a>
            <a class="flex flex-col items-center space-y-3">
                <img class="w-32 bg-yellow-500 bg-opacity-30 rounded-2xl p-2 h-32" src="https://cdn.jsdelivr.net/npm/simple-icons@3.13.0/icons/python.svg">
                <h1 class="text-4xl text-yellow-900 text-style font-bold">Python</h1>
            </a>
            <a class="flex flex-col items-center space-y-3">
                <img class="w-32 bg-orange-500 bg-opacity-30 rounded-2xl p-2 h-32" src="https://cdn.jsdelivr.net/npm/simple-icons@3.13.0/icons/firebase.svg">
                <h1 class="text-4xl text-orange-900 text-style font-bold">F.Base</h1>
            </a>
            <a class="flex flex-col items-center space-y-3">
                <img class="w-32 bg-blue-700 bg-opacity-30 rounded-2xl p-2 h-32" src="https://cdn.jsdelivr.net/npm/simple-icons@3.13.0/icons/react.svg">
                <h1 class="text-4xl text-blue-900 text-style font-bold">R.Native</h1>
            </a>
            <a class="flex flex-col items-center space-y-3">
                <img class="w-32 bg-green-700 bg-opacity-30 rounded-2xl p-2 h-32" src="https://cdn.jsdelivr.net/npm/simple-icons@3.13.0/icons/nuxt-dot-js.svg">
                <h1 class="text-4xl text-green-900 text-style font-bold">Nuxt</h1>
            </a>
            <a class="flex flex-col items-center space-y-3">
                <img class="w-32 bg-purple-900 bg-opacity-30 rounded-2xl p-2 h-32" src="https://cdn.jsdelivr.net/npm/simple-icons@3.13.0/icons/next-dot-js.svg">
                <h1 class="text-4xl text-purple-900 text-style font-bold">Next</h1>
            </a>
            <a class="flex flex-col items-center space-y-3">
                <img class="w-32 bg-pink-900 bg-opacity-30 rounded-2xl p-2 h-32" src="https://cdn.jsdelivr.net/npm/simple-icons@3.13.0/icons/cplusplus.svg">
                <h1 class="text-4xl text-pink-900 text-style font-bold">c++</h1>
            </a>

        </div>


        <div class="fixed bottom-0 right-0 p-5">
    <button onclick="topFunction()" id="myBtn" class="rounded-full  w-10 h-10 bg-green-600"><i class="fa-solid fa-angles-up"></i></button>
    <script>
        //Get the button:
        mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>
</div>

</body>
</html>