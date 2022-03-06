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