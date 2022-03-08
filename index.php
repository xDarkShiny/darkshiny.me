<?php
    require_once 'companenets/db.php';
    $title = 'DarkShiny - Home';
    require_once 'companenets/discord.php';


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
        <!--navbar-->
            <?php
                include 'companenets/navbar.php';
           ?>
        <!--contents-->
            <div class="min-h-screen space-x-10 justify-center items-center space-y-10 p-5 sm:p-0 flex flex-col sm:flex-row">
                <!--bio-->
                <div class="flex flex-col text-end mt-7 ml-16 sm:ml-0 space-y-5 ">
                    <a class="text-white/80 text-5xl text-style flex flex-col font-bold"><h1>Hi I am <span class="text-green-500">DarkShiny.</span></h1>
                            <span class="text-xl text-style text-pink-500">Front-End Developer</span>
                        </a>
                        <h2 class="text-white/80 w-96 text-3xl text-style ">"I am interested in database field. I like simple designs. I know a bit about React and vue. My domain is php."</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <a class="flex items-center space-x-3">
                                    <img class="w-20 bg-green-500 bg-opacity-30 rounded-2xl p-2 h-20" src="https://cdn.jsdelivr.net/npm/simple-icons@3.13.0/icons/vue-dot-js.svg">
                                    <h1 class="text-4xl text-green-900 text-style font-bold">Vue</h1>
                                </a>
                                <a class="flex items-center space-x-3">
                                <img class="w-20 bg-blue-500 bg-opacity-30 rounded-2xl p-2 h-20" src="https://cdn.jsdelivr.net/npm/simple-icons@3.13.0/icons/react.svg">
                                <h1 class="text-4xl text-blue-900 text-style font-bold">React</h1>
                            </a>
                                <a class="flex items-center space-x-3">
                                    <img class="w-20 bg-purple-500 bg-opacity-30 rounded-2xl p-2 h-20" src="https://cdn.jsdelivr.net/npm/simple-icons@3.13.0/icons/php.svg">
                                    <h1 class="text-4xl text-purple-900 text-style font-bold">Php</h1>
                                </a>
                                <a class="flex items-center space-x-3">
                                    <img class="w-20 bg-blue-700 bg-opacity-30 rounded-2xl p-2 h-20" src="https://cdn.jsdelivr.net/npm/simple-icons@3.13.0/icons/tailwindcss.svg">
                                    <h1 class="text-4xl text-blue-900 text-style font-bold">T.Css</h1>
                                </a>
                        </div>
                    <a href="languages.php" class="text-2xl text-style text-green-500">Learn More..</a>
                </div>
                <!--discord-->
          <div style="perspective:600px" class="mr-3 scale-100 xl:hover:scale-[1.15] z-10 hover:z-50 transition-all duration-200 ease-out mb-8 xl:mb-0">
                <div class="flex flex-col discord rounded-lg w-96 space-y-2 p-5 h-auto ">
                   <div class="ml-2 mt-3 flex items-center w-20 h-20">
                       <img class="w-52 rounded-full " src="https://cdn.discordapp.com/avatars/438037153310834700/<?php echo $json->data->discord_user->avatar ?>.png?size=4096">
                       <?php
                       if ($json->data->discord_status == 'dnd') {

                           echo "
                             <img class='absolute ml-14 mt-14 p-2 discord rounded-full w-8 h-8' src='https://cdn.discordapp.com/emojis/735879152212770976.webp?size=96&quality=lossless'> "
                           ;

                       }elseif ($json->data->discord_status == 'online') {
                           echo  "
                             <img class='absolute ml-14 mt-14 p-2 discord rounded-full w-8 h-8' src='https://cdn.discordapp.com/emojis/735879208143683635.webp?size=96&quality=lossless'> "
                           ;
                       }elseif ($json->data->discord_status == 'offline'){
                           echo  "
                             <img class='absolute ml-14 mt-14 p-2 discord rounded-full w-8 h-8' src='https://images-ext-1.discordapp.net/external/Cw_cCzdkGZqJHSVSpnI3o5zeXwKwFiY6JW2cXRvgnkw/%3Fsize%3D96%26quality%3Dlossless/https/cdn.discordapp.com/emojis/735879096638111795.webp' >"
                           ;

                       }elseif ($json->data->discord_status == 'idle')

                           echo  "
                             <img class='absolute ml-14 mt-14 p-2 discord rounded-full w-8 h-8' src='https://cdn.discordapp.com/emojis/735879062815244460.webp?size=96&quality=lossless'>"
                           ;
                       ?>
                   </div>
                    <a class="mt-2 text-2xl text-white text-style font-extrabold">
                        <?php echo $json->data->discord_user->username; ?><span class="text-white/60">#<?php echo $json->data->discord_user->discriminator; ?></span>
                    </a>
                    <a class="flex  text-style mb-2 text-white"><?php echo $json->data->activities[0]->state ?></a>
                    <a class="w-full h-0.5 bg-white/20"></a>
                    <div class="flex flex-col space-y-2">
                            <a class="text-style text-white/20 font-extrabold">ABOUT ME</a>
                        <div class="flex flex-col">
                            <a class="text-style font-extrabold text-white">takılıom</a>
                            <a class="text-blue-400">http://darkshiny.me/</a>
                        </div>
                        <h1 class="text-white/20 text-style  font-bold">PLAYİNG A GAME</h1>
                        <div class="flex space-x-4">
                            <?php
                            if ($json->data->activities[1] == '') {

                                echo "<div class='text-white text-style  text-center font-bold'>HER HANGİ BİR ETKİNLİK YOK</div>";
                            }elseif ($json->data->activities[1] !== '' )  {
                                echo '
            <div class="flex flex-col items-center">
                    <img class="w-20 rounded-3xl h-20" src="https://cdn.discordapp.com/app-assets/'.$json->data->activities[1]->application_id.'/'.$json->data->activities[1]->assets->large_image.'.png">
                </div>
                <div class="">
                    <div class="text-style text-xl font-extrabold text-white font-bold">'.$json->data->activities[1]->name.'</div>
                    <div class="text-style text-white/50">'.$json->data->activities[1]->details.'</div>
                    <div class="text-style text-white/50">'.$json->data->activities[1]->state.'</div>
               </div>
 ';

                            }

                            ?>
                        </div>
                    </div>
                    <a class="text-style text-white/20 font-extrabold">NOTE</a>
                    <input value="not ekle" class="bg-white/20 text-style text-white/60 p-2 rounded-xl" type="text">
                </div>
            </div>
           </div>


            <a href="https://github.com/xDarkShiny/darkshiny.me" class="flex justify-center text-2xl text-white/60 text-style text-center items-center space-x-2">Open Source on&nbsp;<span class="text-green-500">Github</span></a>


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