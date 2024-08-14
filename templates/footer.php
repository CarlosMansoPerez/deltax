<?php

date_default_timezone_set('Europe/Madrid'); 
$estado = "cerrado";
$color = "bg-red-600";
$icono = "<i class='bi bi-emoji-frown'></i>";

$dia = date('N');
$hora_actual = date('H:i');

if (($dia >= 1 && $dia <= 4 && $hora_actual >= '08:30' && $hora_actual <= '16:30') ||
    ($dia == 5 && $hora_actual >= '08:30' && $hora_actual <= '14:00')) {
    $estado = "abierto";
    $color = "bg-green-500";
    $icono = "<i class='bi bi-emoji-smile'></i>";
}

?>

<footer>

    <div class="w-full h-auto xl:h-[250px] mt-20 bg-blue-800 flex flex-row justify-between items-center py-12 px-8 xl:px-40">

        <div class="w-full h-full flex flex-col xl:flex-row justify-start items-start xl:items-center gap-12">

            <a href="index.php" class="h-[100px] xl:h-full flex flex-row justify-start items-center w-full xl:w-[30%]">
                <div class="w-[60%] h-full pb-3 pt-2">
                    <img src="./img/icon-white.svg" class="h-full">
                </div>
                <div class="w-auto h-full py-3 flex flex-col justify-center items-start">
                    <p class="text-xl xl:text-3xl text-white font-bold font-title">Deltax Asesores</p>
                    <p class="text-sm xl:text-sm text-white font-text-light mt-2 w-[80%]">Asesoría Fiscal, Contable, Abogados y Declaración de la Renta en San Pedro de Alcántara</p>
                </div>
            </a>

            
            <nav class="w-full xl:w-[25%] flex flex-col jusitfy-end items-end">
                <ul class="w-full flex flex-col jusitfy-start items-start ps-6 xl:ps-16">
                    <li><a href="#" class="text-white hover:text-black transition text-md uppercase font-title">Asesoría</a></li>
                    <li><a href="#" class="text-white hover:text-black transition text-md uppercase font-title">Abogados</a></li>
                    <li><a href="#" class="text-white hover:text-black transition text-md uppercase font-title">Servicios</a></li>
                    <li><a href="#" class="text-white hover:text-black transition text-md uppercase font-title">Renta</a></li>
                    <li><a href="#" class="text-white hover:text-black transition text-md uppercase font-title">Nosotros</a></li>
                    <li><a href="#" class="text-white hover:text-black transition text-md uppercase font-title rounded-sm">Contacto</a></li>
                </ul>
            </nav>

            <div class="w-full xl:w-[25%] h-full flex flex-col justify-between items-between gap-2 ps-6 xl:ps-0">
                <div class="w-full">
                    <p class="text-white font-title text-md ">Lunes a Jueves</p>
                    <p class="text-white font-title text-md font-bold">8:30 - 16:30<p>
                </div>

                <div class="w-full">
                    <p class="text-white font-title text-md ">Viernes</p>
                    <p class="text-white font-title text-md font-bold">8:30 - 14:00<p>
                </div>

                <div class="w-full">
                    <p class="text-white font-title text-md ">Sábado y Domingo</p>
                    <p class="text-white font-title text-md font-bold">Cerrado<p>
                </div>

            </div>

            <div class="w-full xl:w-[15%] h-full flex flex-col justify-between items-between ps-6 xl:ps-0">
                <div>
                    <p class="text-white font-title text-md">Nos encontramos en</p>
                    <a href="#" class="text-white font-title text-md font-bold">C. Amistad 11, San Pedro Alcántara <i class="bi bi-sign-turn-right-fill"></i></a>
                </div>
                <div>
                    
                </div>
                <div class="mt-4 xl:mt-0">
                    <p class="text-white font-title text-md py-2 px-4 <?=$color?> text-center rounded-md shadow-2xl uppercase"><?=$estado." ".$icono?><p>
                </div>
            </div>

        </div>
        

    </div>

</footer>


<script>

    document.getElementById("burger").addEventListener("click", abrir);
    document.getElementById("cerrar").addEventListener("click", cerrar);
    var offcanvas = document.getElementById("offcanvas");
    var body = document.getElementById("body");

    function abrir(){
        offcanvas.style.display = "block";
        body.style.overflow = "hidden";
    }

    function cerrar(){
        offcanvas.style.display = "none";
        body.style.overflow = "auto";
    }

</script>

</body>
</html>