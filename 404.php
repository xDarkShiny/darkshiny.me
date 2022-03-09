
<?php
    require_once 'components/db.php';
    $title = 'DarkShiny - 404';
    require_once 'components/discord.php';


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
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="/dist/output.css" rel="stylesheet">
    <meta name="description" content="I am interested in database field. I like simple designs. I know a bit about React and vue. My domain is php." />
    <meta name="robots" content="darkshiny, darkshinyme, darkshiny.me, shiny, dark, php, portfolyo, shinydark" />
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
        <div class="flex min-h-screen justify-center items-center">
                    <div class="flex flex-col space-y-3 items-center">
                        <img class="w-72 h-72" src="https://www.emojiall.com/en/header-svg/%F0%9F%98%AD.svg">

                        <h1 class="text-red-500 text-style font-extrabold text-7xl">404</h1>
                        <h2 class="text-3xl text-style text-white/60">Birşeyler Ters Gitti Yada Aradığın Sayfa Yok.Bunları Deneyebilirsin;</h2>
                            <div class="flex space-x-3">
                                <a href="index.php" class="text-2xl text-style text-green-500">anasayfa</a>
                                <a href="projects" class="text-2xl text-style text-green-500">projects</a>
                                <a href="languages" class="text-2xl text-style text-green-500">blog</a>
                            </div>
                    </div>
            </div>

</body>
</html>
