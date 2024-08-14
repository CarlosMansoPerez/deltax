<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./styles/style.css">
    <script src="script.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cabin+Sketch:wght@400;700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cabin+Sketch:wght@400;700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <title>Deltax Asesores - San Pedro Alcántara</title>
    <link rel="icon" type="image/x-icon" href="./img/icon.png">

</head>
<body id="body">

<head>
    
    <aside id="offcanvas" class="w-full h-screen bg-black bg-opacity-50 fixed z-30 hidden">

        <div class="w-[75%] h-full bg-white fixed right-0 z-40 flex flex-col justify-between items-start px-10 py-12">

            <div class="w-full flex flex-col justify-start items-start gap-10">
                <div class="w-full flex justify-between items-center h-[50px]">
                    <i id="cerrar" class="bi bi-x-lg text-3xl"></i>
                    <img src="./img/icon.svg" alt="" class="h-full -mt-4">
                </div>

                <div class="w-full">
                    <nav>
                        <ul class="flex flex-col gap-4">
                            <li><a href="" class="text-black hover:text-blue-800 transition text-lg uppercase font-title">Asesoría</a></li>
                            <li><a href="" class="text-black hover:text-blue-800 transition text-lg uppercase font-title">Abogados</a></li>
                            <li><a href="" class="text-black hover:text-blue-800 transition text-lg uppercase font-title">Servicios</a></li>
                            <li><a href="" class="text-black hover:text-blue-800 transition text-lg uppercase font-title">Renta</a></li>
                            <li><a href="" class="text-black hover:text-blue-800 transition text-lg uppercase font-title">Nosotros</a></li>
                            <li><a href="" class="text-black hover:text-blue-800 transition text-lg uppercase font-title">Contacto</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="flex flex-col justify-start items-start gap-4">
                <a href="" class="text-xl text-blue-800"><i class="bi bi-telephone text-md text-blue-800"></i> 633 74 03 99</a>
                <a href="" class="text-xl text-blue-800">Cómo llegar <i class="bi bi-sign-turn-right-fill text-md text-blue-800"></i></a>
            </div>

        </div>

    </aside>

    <div class="w-full h-[70px] xl:h-[100px] flex flex-row justify-between items-center bg-white px-8 xl:px-40 fixed z-20">

        <a href="index.php" class="h-full flex flex-row justify-start items-center">
            <div class="h-full pb-3 pt-2">
                <img src="./img/icon.svg" class="h-full">
            </div>
            <div class="h-full py-3 flex flex-col justify-center items-start">
                <p class="text-xl xl:text-3xl text-blue-800 font-bold font-title">Deltax Asesores</p>
                <p class="text-xs xl:text-sm font-text-light mt-1">San Pedro de Alcántara · Marbella</p>
            </div>
        </a>

        <div class="h-full hidden xl:flex flex-row justify-start items-center">
            <nav>
                <ul class="flex flex-row gap-12">
                    <li><a href="" class="text-black hover:text-blue-800 transition text-md uppercase font-title">Asesoría</a></li>
                    <li><a href="" class="text-black hover:text-blue-800 transition text-md uppercase font-title">Abogados</a></li>
                    <li><a href="" class="text-black hover:text-blue-800 transition text-md uppercase font-title">Servicios</a></li>
                    <li><a href="" class="text-black hover:text-blue-800 transition text-md uppercase font-title">Renta</a></li>
                    <li><a href="" class="text-black hover:text-blue-800 transition text-md uppercase font-title">Nosotros</a></li>
                    <li><a href="" class="text-white hover:text-blue-800 bg-blue-800 hover:bg-white border border-2 border-blue-800 transition py-2 px-3 text-md uppercase font-title rounded-sm">Contacto</a></li>
                </ul>
            </nav>
        </div>

        <div id="burger" class="h-full xl:hidden flex flex-row justify-center items-center">
            <i class="bi bi-list text-5xl text-blue-800"></i>
        </div>

    </div>
</head>