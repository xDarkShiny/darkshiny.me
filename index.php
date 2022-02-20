<?php
    require_once 'db.php';
    $title = 'DarkShiny - Home';
    require_once 'discord.php';


?>
<!doctype html>
<html>
<head>
    <link href="styles.css" rel="stylesheet" type="text-css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <meta charset="UTF-8">
    <style>

        .text-style {
            font-family: 'Sora', sans-serif;
        }

        .background-color {

            background-color: #1C1C1C;
        }

        .text-color {
            color: #7B7B7B;
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
<body class="bg-black">
<div class="flex h-auto space-x-2 sm:space-x-0 p-5 items-center justify-center sm:justify-between background-color">
    <a href="index.php" class="text-style font-bold text-white hover:text-green-500 text-3xl">darkshiny.me</a>
  <div class="sm:block hidden">
    <div class="flex space-x-5">
        <a href="mailto:darkshiny@protonmail.com" class="sm:block hidden  w-auto text-style text-xl rounded-xl text-white ring p-2 ring-white">contact</a>
        <a href="#"><i class="sm:block hidden text-4xl text-white fa-brands fa-discord"></i></a>
        <a href="#"><i class="sm:block hidden text-4xl text-white fa-brands fa-github"></i></a>
    </div>
  </div>
    <div class="sm:hidden block flex items-center">
        <div class="flex items-center justify-center ">
            <div class="relative inline-block text-left dropdown">
        <span class="rounded-md shadow-sm"><button class="justify-center items-center space-x-2 inline-flex justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-white transition duration-150 ease-in-out bg-blue-500 rounded-md" type="button" aria-haspopup="true" aria-expanded="true" aria-controls="headlessui-menu-items-117">
            <span class="text-lg">Menu</span>
            <i class="mt-1 fas fa-bars"></i>
            </button></span>
                <div class="opacity-0 fixe dropdown-menu transition-all duration-300 transform origin-top-right -translate-y-2 scale-95">
                    <div class=" fixed right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none" aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                        <div class="py-1">
                            <a href="#" tabindex="0" class="text-gray-700 flex space-x-2  items-center w-full px-4 py-2 text-sm leading-5 text-left" role="menuitem"><i class="fa-brands fa-discord"></i>&nbsp;Discord </a>
                            <a href="javascript:void(0)" tabindex="2" class="text-gray-700 flex space-x-2  items-center w-full px-4 py-2 text-sm leading-5 text-left" role="menuitem"><i class="fa-brands fa-github"></i>&nbsp;Github</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .dropdown:focus-within .dropdown-menu {
                opacity:1;
                transform: translate(0) scale(1);
                visibility: visible;
            }
        </style>
    </div>
</div>



    <div class="min-h-screen  space-y-5  columns-4xl items-start p-2 ">
        <div  class="2xl:flex  sm:space-x-5 xl:space-y-6 rounded-3xl  justify-center text-center items-center background-color p-3">
            <img class="2xl:mb-4 mb-0 justify-center p-1 w-full 2xl:w-72 rounded-3xl" src="https://cdn.discordapp.com/avatars/438037153310834700/<?php echo $json->data->discord_user->avatar ?>.png?size=4096">
            <div class="flex flex-col space-y-3">
                <a class="sm:text-5xl text-3xl text-style text-white font-bold">Hi I`m <span class="text-green-500"><?php echo $json->data->discord_user->username; ?></span>.👋</a>
                <a class="sm:text-3xl text-2xl text-style text-color font-bold">"I am interested in database field. I like simple designs. I know a bit about React and vue. My domain is php."
                </a>
                <a class="flex space-x-4 justify-center items-center">
                   <h1 class="text-2xl text-style text-white font-bold">Discord Status :</h1>
                    <?php
                    if ($json->data->discord_status == 'dnd') {

                        echo "
                            <div class='flex space-x-4 justify-center'>
                             <img class='w-7 h-7' src='https://cdn.discordapp.com/emojis/735879152212770976.webp?size=96&quality=lossless' >
                             <a class='text-style font-bold text-red-500 text-2xl'>"
                            .$json->data->activities[0]->state.
                            "</a></div> "
                        ;

                    }elseif ($json->data->discord_status == 'online') {
                        echo  "
                            <div class='flex space-x-4 justify-center'>
                             <img class='w-7 h-7' src='https://cdn.discordapp.com/emojis/735879208143683635.webp?size=96&quality=lossless' >
                             <a class='font-bold text-style text-green-500 text-2xl'>"
                            .$json->data->activities[0]->state.
                            "</a></div> "
                        ;
                    }elseif ($json->data->discord_status == 'offline'){
                        echo  "
                            <div class='flex space-x-4 justify-center'>
                             <img class='w-7 h-7' src='https://images-ext-1.discordapp.net/external/Cw_cCzdkGZqJHSVSpnI3o5zeXwKwFiY6JW2cXRvgnkw/%3Fsize%3D96%26quality%3Dlossless/https/cdn.discordapp.com/emojis/735879096638111795.webp' >
                             <a class='font-bold text-style text-color text-2xl'>Account Ofline </a></div> "
                        ;

                    }elseif ($json->data->discord_status == 'idle')

                        echo  "
                            <div class='flex space-x-4 justify-center'>
                             <img class='w-7 h-7' src='https://cdn.discordapp.com/emojis/735879062815244460.webp?size=96&quality=lossless' >
                             <a class='font-bold text-style text-coloridle text-2xl'>"
                            .$json->data->activities[0]->state.
                            "</a></div> "
                        ;
                    ?>
                </a>

            </div>
        </div>
        <div data-aos="zoom-out" class="flex flex-col space-y-5 background-color rounded-3xl justify-start p-10">
            <a class="sm:text-5xl text-3xl text-style text-white font-bold">Goals ;</a>
            <div>
                <a class="sm:text-3xl flex text-2xl text-style text-color font-bold space-x-2">
                    <i class="text-green-500 fa-solid fa-clipboard-check"></i>
                    <h1 class="line-through">Site design</h1>
                </a>
                <a class="sm:text-3xl flex text-2xl text-style text-color font-bold space-x-2">
                    <i class="fa-solid fa-clipboard-list"></i>
                    <h1 class="">Site dashboard</h1>
                </a>
                <a class="sm:text-3xl flex text-2xl text-style text-color font-bold space-x-2">
                    <i class="fa-solid fa-clipboard-list"></i>
                    <h1 class="">Blog system</h1>
                </a>
                <a class="sm:text-3xl flex text-2xl text-style text-color font-bold space-x-2">
                    <i class="text-green-500 fa-solid fa-clipboard-check"></i>
                    <h1 class="line-through">Responsive desing</h1>
                </a>

            </div>

        </div>
        <div data-aos="zoom-out" class="flex flex-col background-color rounded-3xl justify-start p-7">
            <a class="sm:text-5xl text-3xl text-style text-white font-bold">I USE </a>
            <div class="justify-center items-center  mt-10 grid gap-1  grid-cols-2 sm:grid-cols-3 md:grid-cols-2  xl:grid-cols-6 2xl:grid-cols-7">
                <div class="flex space-y-5 items-center ">
                 <div class="flex flex-col items-center">
                   <a class="flex h-auto bg-opacity-30 p-2 bg-purple-900 rounded-3xl w-auto ">
                    <img class="flex opacity-100 h-20" src="https://cdn.jsdelivr.net/npm/simple-icons@3.13.0/icons/php.svg">
                   </a>
                    <h1 class="text-3xl text-purple-900 text-style font-bold">PHP</h1>
                 </div>
                </div>
                <div class="flex space-y-5 items-center ">
                    <div class="flex flex-col items-center">
                        <a class="flex h-auto bg-opacity-30 p-2 bg-orange-900 rounded-3xl w-auto ">
                            <img class="flex opacity-100 h-20" src="https://cdn.jsdelivr.net/npm/simple-icons@3.13.0/icons/html5.svg">
                        </a>
                        <h1 class="text-3xl text-orange-900 text-style font-bold">HTML</h1>
                    </div>
                </div>
                <div class="flex space-y-5 items-center ">
                    <div class="flex flex-col items-center">
                        <a class="flex h-auto bg-opacity-30 p-2 bg-blue-600 rounded-3xl w-auto ">
                            <img class="flex opacity-100 h-20" src="https://cdn.jsdelivr.net/npm/simple-icons@3.13.0/icons/tailwindcss.svg">
                        </a>
                        <h1 class="text-3xl text-blue-900 text-style font-bold">T.Css</h1>
                    </div>
                </div>
                <div class="flex space-y-5 items-center ">
                    <div class="flex flex-col items-center">
                        <a class="flex h-auto bg-opacity-30 p-2 bg-blue-900 rounded-3xl w-auto ">
                            <img class="flex opacity-100 h-20" src="https://cdn.jsdelivr.net/npm/simple-icons@3.13.0/icons/react.svg">
                        </a>
                        <h1 class="text-3xl text-blue-900 text-style font-bold">React</h1>
                    </div>
                </div>
                <div class="flex space-y-5 items-center ">
                    <div class="flex flex-col items-center">
                        <a class="flex h-auto bg-opacity-30 p-2 bg-green-900 rounded-3xl w-auto ">
                            <img class="flex opacity-100 h-20" src="https://cdn.jsdelivr.net/npm/simple-icons@3.13.0/icons/vue-dot-js.svg">
                        </a>
                        <h1 class="text-3xl text-green-900 text-style font-bold">Vue</h1>
                    </div>
                </div>
                <div class="flex space-y-5 items-center ">
                    <div class="flex flex-col items-center">
                        <a class="flex h-auto bg-opacity-30 p-2 bg-purple-900 rounded-3xl w-auto ">
                            <img class="flex opacity-100 h-20" src="https://cdn.jsdelivr.net/npm/simple-icons@3.13.0/icons/jetbrains.svg">
                        </a>
                        <h1 class="text-2xl text-purple-900 text-style font-bold">P.Storm</h1>
                    </div>
                </div>
                <div class="flex space-y-5 items-center ">
                    <div class="flex flex-col items-center">
                        <a class="flex h-auto bg-opacity-30 p-2 bg-yellow-900 rounded-3xl w-auto ">
                            <img class="flex opacity-100 h-20" src="https://cdn.jsdelivr.net/npm/simple-icons@3.13.0/icons/github.svg">
                        </a>
                        <h1 class="text-3xl text-yellow-900 text-style font-bold">Github</h1>
                    </div>
                </div>
                <div class="flex space-y-5 items-center ">
                    <div class="flex flex-col  items-center">
                        <a class="flex h-auto bg-opacity-30 p-2 bg-pink-900 rounded-3xl w-auto ">
                            <img class="flex opacity-100 h-20" src="https://cdn.jsdelivr.net/npm/simple-icons@3.13.0/icons/adobexd.svg">
                        </a>
                        <h1 class="text-3xl text-pink-900 text-style font-bold">A.Xd</h1>
                    </div>
                </div>
                <div class="flex space-y-5 items-center ">
                    <div class="flex flex-col items-center">
                        <a class="flex h-auto bg-opacity-30 p-2 bg-blue-900 rounded-3xl w-auto ">
                            <img class="flex opacity-100 h-20" src="https://cdn.jsdelivr.net/npm/simple-icons@3.13.0/icons/adobephotoshop.svg">
                        </a>
                        <h1 class="text-3xl text-blue-900 text-style font-bold">P.shop</h1>
                    </div>
                </div>
                <div class="flex space-y-5 items-center ">
                    <div class="flex flex-col items-center">
                        <a class="flex h-auto bg-opacity-30 p-2 bg-blue-900 rounded-3xl w-auto ">
                            <img class="flex opacity-100 h-20" src="https://cdn.jsdelivr.net/npm/simple-icons@3.13.0/icons/windows.svg">
                        </a>
                        <h1 class="text-3xl text-blue-900 text-style font-bold">Win11</h1>
                    </div>
                </div>
                <div class="flex space-y-5 items-center ">
                    <div class="flex flex-col items-center">
                        <a class="flex h-auto bg-opacity-30 p-2 items-center bg-gray-400 rounded-3xl w-auto ">
                            <img class="flex opacity-100 h-20" src="https://cdn.jsdelivr.net/npm/simple-icons@3.13.0/icons/vercel.svg">
                        </a>
                        <h1 class="text-3xl text-gray-400 text-style font-bold">Vercel</h1>
                    </div>
                </div>
                <div class="flex space-y-5 items-center ">
                    <div class="flex flex-col items-center">
                        <a class="flex h-auto bg-opacity-30 p-2 bg-green-900 rounded-3xl w-auto ">
                            <img class="flex opacity-100 h-20" src="https://cdn.jsdelivr.net/npm/simple-icons@3.13.0/icons/fontawesome.svg">
                        </a>
                        <h1 class="md:text-3xl text-2xl text-green-900 text-style font-bold">Font.a</h1>
                    </div>
                </div>

            </div>
        </div>
        <div class="flex  flex-col space-y-3 background-color rounded-3xl justify-start p-10">
            <h1 class="text-white text-style text-4xl mt-10 font-bold">PLAYİNG A GAME</h1>
            <div class="flex flex-col sm:flex-row sm:justify-start justify-center items-center space-y-4 space-x-4">
                <?php
                if ($json->data->activities[1] == '') {

                    echo "<div class='text-white text-style text-3xl text-center font-bold'>HER HANGİ BİR ETKİNLİK YOK</div>";
                }elseif ($json->data->activities[1] !== '' )  {
                    echo '
            <div class="flex flex-col  h-32">
                    <img class="w-32 h-32" src="https://cdn.discordapp.com/app-assets/'.$json->data->activities[1]->application_id.'/'.$json->data->activities[1]->assets->large_image.'.png">
                </div>
                <div>
                    <div class="sm:text-3xl text-2xl text-style text-color font-bold">'.$json->data->activities[1]->name.'</div>
                    <div class="text-2xl text-style text-color font-bold">'.$json->data->activities[1]->details.'</div>
                    <div class="text-2xl text-style text-color font-bold">'.$json->data->activities[1]->state.'</div>

                
               </div>
 ';

                }

                ?>
            </div>
        </div>
        <a href="blog.php" data-aos="zoom-out" class="flex flex-col space-y-5 background-color rounded-3xl justify-start p-9">
                <h1 class="text-white text-style text-4xl font-bold">Blog Here</h1>
                <h2 class="sm:text-3xl text-2xl text-style text-color font-bold"><span class="text-green-500">"Php, Css, Html</span> etc. that I share by myself. a beginner blog where I share topics or share my favorite sites, movies, books or useful topics ^^"</h2>
                <button class="flex items-center justify-end text-4xl mt-5 text-white"><i class="fa-solid fa-up-right-from-square"></i></button>
            </a>
        <div class="flex flex-col space-y-5 background-color rounded-3xl justify-start">
            <a href="blog.php" data-aos="zoom-out" class="flex flex-col space-y-5 background-color rounded-3xl justify-start p-10">
                <h1 class="text-white text-style text-4xl font-bold">Projects Here</h1>
                <h2 class="sm:text-3xl text-2xl text-style text-color font-bold">"The page where I share my own projects, prototypes, clones or initiatives I contribute."</h2>
                <button class="flex items-center justify-end text-4xl mt-5 text-white"><i class="fa-solid fa-up-right-from-square"></i></button>
            </a>
            </div>
        <a data-aos="zoom-out" class="flex flex-col space-y-5 background-color rounded-3xl justify-start p-9">
            <h1 class="text-white text-style text-4xl font-bold">Blog Here</h1>
            <h2 class="sm:text-3xl text-2xl text-style text-color font-bold"><span class="text-green-500">"Php, Css, Html</span> etc. that I share by myself. a beginner blog where I share topics or share my favorite sites, movies, books or useful topics ^^"</h2>
            <button class="flex items-center justify-end text-4xl mt-5 text-white"><i class="fa-solid fa-up-right-from-square"></i></button>
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