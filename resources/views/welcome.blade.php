<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@700&family=Fuzzy+Bubbles&display=swap" rel="stylesheet">






    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mundo Andino - Inicio</title>
    <style>
        #img {
            width: 95%;
            margin: auto;
            overflow: hidden;
        }

        #img ul {
            display: flex;
            padding: 0;
            width: 400%;
            animation: cambio 15s infinite;
            animation-direction: alternate;
        }

        #img li {
            width: 100%;
            list-style: none;
        }

        #img img {
            width: 100%;
        }

        @keyframes cambio {
            0% {
                margin-left: 0;
            }

            20% {
                margin-left: 0;
            }

            25% {
                margin-left: -100%;
            }

            45% {
                margin-left: -100%;
            }

            50% {
                margin-left: -200%;
            }

            70% {
                margin-left: -200%;
            }

            75% {
                margin-left: -300%;
            }

            95% {
                margin-left: -300%;
            }

        }

        .contenedor {
            margin: auto;
            width: 100%;
        }

        .caja__columna {
            color: green;
            position: relative;
            text-align: center;
            width: 98%;
            height: 440px;
            margin: 10px;
        }

        .caja__columna .texto {
            position: absolute;
            top: 15px;
            left: 15px;
            right: 15px;
            bottom: 15px;
            border: 2px solid green;
            padding: 30px;
        }

        .caja__columna .texto h2 {
            font-size: 40px;
            margin: 0 0 1px;
        }

        .caja__columna .texto p {
            font-size: 18px;
        }

        svg,
        rect {
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            fill: transparent;
        }

        rect {
            stroke: green;
            stroke-width: 4;
            stroke-dasharray: 400;
            animation: animate 4s linear infinite;
        }

        .caja .contenedor {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        @keyframes animate {
            0% {
                stroke-dashoffset: 800;
            }

            100% {
                stroke-dashoffset: 0;
            }
        }

        @media(min-width:400px) {
            .caja__columna {
                width: 82%;
                height: 400px;
            }
        }

        @media(min-width:520px) {
            .caja__columna {
                width: 85%;
                height: 320px;
            }
        }

        @media(min-width:600px) {
            .caja__columna {
                width: 82%;
                height: 270px;
            }
        }

        @media(min-width:680px) {
            .caja__columna {
                width: 46%;
                height: 460px;
            }
        }

        @media(min-width:480px) {
            .caja__columna {
                width: 47%;
                height: 350px;
            }
        }

        @media(min-width:1024px) {
            .contenedor {
                width: 1024px;
            }

            .caja__columna {
                width: 31%;
                height: 480px;
            }
        }

        @media(min-width:1200px) {
            .contenedor {
                width: 1200px;
            }

            .caja__columna {
                height: 430px;
            }
        }

        .fondo-titulo {
            background-size: cover;
        }

        .fondito {
            color: #784578;
            height: 100px;
            text-align: center;
            vertical-align: middle;
            text-shadow: #111 0px 0px 0px;
            background-color: white;
        }

        #redes {
            background-color: #111;
            color: aliceblue;
            text-align: center;

        }





        .conte {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .conte figure {
            position: relative;
            height: 250px;
            cursor: pointer;
            width: 350px;
            overflow: hidden;
            border-radius: 6px;
            box-shadow: 0px 15px 25px rgba(0, 0, 0, 0.50);
        }

        .conte figure img {
            width: 100%;
            height: 100%;
            transition: all 400ms ease-out;
            will-change: transform;
        }

        .conte figure .capa {
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 103, 123, 0.7);
            transition: all 400ms ease-out;
            opacity: 0;
            visibility: hidden;
            text-align: center;
        }

        .conte figure:hover>.capa {
            opacity: 1;
            visibility: visible;
        }

        .conte figure:hover>img {
            transform: scale(1.3);
        }

        .conte figure .capa p {
            color: #fff;
            font-size: 15px;
            line-height: 1.5;
            width: 100%;
            max-width: 220px;
            margin: auto;
        }



        .caja__columna2 {
            color: black;
            position: relative;
            text-align: center;
            width: 98%;
            height: 440px;
            margin: 10px;
        }

        .caja__columna2 .texto {
            position: absolute;
            top: 15px;
            left: 15px;
            right: 15px;
            bottom: 15px;
            border: 2px solid violet;
            padding: 30px;
        }

        .caja__columna2 .texto h2 {
            font-size: 40px;
            margin: 0 0 1px;
        }

        .caja__columna2 .texto p {
            font-size: 18px;
        }

        svg,
        rect {
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            fill: transparent;
        }

        rect {
            stroke: green;
            stroke-width: 4;
            stroke-dasharray: 400;
            animation: animate 4s linear infinite;
        }

        .caja .contenedor {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        @keyframes animate {
            0% {
                stroke-dashoffset: 800;
            }

            100% {
                stroke-dashoffset: 0;
            }
        }

        @media(min-width:400px) {
            .caja__columna2 {
                width: 82%;
                height: 400px;
            }
        }

        @media(min-width:520px) {
            .caja__columna2 {
                width: 85%;
                height: 320px;
            }
        }

        @media(min-width:600px) {
            .caja__columna2{
                width: 82%;
                height: 270px;
            }
        }

        @media(min-width:680px) {
            .caja__columna2 {
                width: 46%;
                height: 460px;
            }
        }

        @media(min-width:480px) {
            .caja__columna2 {
                width: 47%;
                height: 350px;
            }
        }

        @media(min-width:1024px) {
            .contenedor {
                width: 1024px;
            }

            .caja__columna2 {
                width: 31%;
                height: 480px;
            }
        }

        @media(min-width:1200px) {
            .contenedor {
                width: 1200px;
            }

            .caja__columna2 {
                height: 430px;
            }
        }







    </style>
</head>

<body style="font-family: 'Corinthia', cursive;font-family: 'Fuzzy Bubbles', cursive;">

<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-blue-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-h text-gray-700 dark:text-gray-500 underline"><h3>Iniciar Sesion</h3></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-h text-gray-700 dark:text-gray-500 underline"><h3>Registrarse</h3></a>
                        @endif
                    @endauth
                </div>
            @endif
    <br><br>
    <div class="fondo-titulo fondito" style="text-align: center">
        <h1>BIENVENIDOS AL NUESTRO ZOOLOGICO<BR> MUNDO ANDINO</h1>
    </div>
    <div id="img">
        <ul>
            <li>
                <img src="https://www.inkayniperutours.com/blog/wp-content/uploads/2020/08/condor.jpg" alt="" width="60%" height="90%">
            </li>
            <li>
                <img src="https://www.inkayniperutours.com/blog/wp-content/uploads/2020/08/puma.jpg" alt="" width="60%" height="90%">
            </li>
            <li>
                <img src="https://www.boletomachupicchu.com/gutblt/wp-content/uploads/2018/02/tipon-fuente-agua.jpg" alt="" width="60%" height="90%">
            </li>
            <li>
                <img src="http://semesterwelltraveled.weebly.com/uploads/2/4/9/3/24934123/3707676.jpg?555" alt="" width="60%" height="90%">
            </li>
            <li>
                <img src="http://www.santuariocochahuasi.com/spanish/images/galeria-inicio/wm/0944f41625672e863555dc20d8282f9e.jpg" alt="" width="60%" height="90%">
            </li>
            <li>
                <img src="https://live.staticflickr.com/8057/28639545653_6227aa3a07_z.jpg" alt="" width="60%" height="90%">
            </li>
            <li>
                <img src="https://www.viajaraperu.com/wp-content/uploads/2016/01/departamento-de-cusco-1024x768.jpg" alt="" width="60%" height="90%">
            </li>
            <li>
                <img src="https://revista.comfama.com/wp-content/uploads/2018/10/osos-zoologico-santa-fe-de-medellin.jpg" alt="" width="60%" height="90%">
            </li>
            <li>
                <img src="https://media-cdn.tripadvisor.com/media/photo-s/0d/52/c3/fb/llama.jpg" alt="" width="60%" height="90%">
            </li>
            <li>
                <img src="https://www.inkayniperutours.com/blog/wp-content/uploads/2020/03/c%C3%B3ndor.jpg" alt="" width="90%" height="90%">
            </li>


        </ul>
    </div>
    <div style="text-align: center;">
        <h2 style="color: brown;"> MISION</h2>
        <p>
            Contribuir a la protección del ambiente, promoviendo el conocimiento y sensibilización sobre <br>
            la biodiversidad mediante la creación de experiencias inolvidables, la ejecución de programas <br>
            de investigación científica, educación, manejo y crianza de fauna y flora aplicados a la <br>
            conservación de especies animales, vegetales, ecosistemas y las etnias nativas del perú.
        </p>
        <h2 style="color: brown;"> VISION</h2>
        <p>
            Ser un zoologico sólida y reconocida por su variedad de especies en animales a nivel nacional <br>
            e internacional, promover la investigación, educación, recreación, manejo, crianza <br>
            y conservación de la biodiversidad.
        </p>
    </div>
    <br><br>

    <section class="caja">
        <div class="contenedor">
            <div class="caja__columna">
                <svg>
                    <rect></rect>
                </svg>
                <div class="texto">
                    <h2>Actividad 1</h2>
                    <p>
                        <br><br>Cualquiera que sea el propósito de la visita al zoológico, la motivación para el desarrollo de la observación a través del uso de todos los sentidos es sumamente importante.
                    </p>
                </div>

            </div>
            <div class="caja__columna">
                <svg>
                    <rect></rect>
                </svg>
                <div class="texto">
                    <h2>Actividad 2</h2>
                    <p>
                        <br>Los alumnos pueden observar, percibir y grabar cosas como: sonidos de los animales, sus olores,
                        movimientos y comportamiento; características físicas, ambientales,
                        el papel de los mantenedores, de los vigilantes y los letreros, entre muchas otras cosas.
                    </p>
                </div>

            </div>
            <div class="caja__columna">
                <svg>
                    <rect></rect>
                </svg>
                <div class="texto">
                    <h2> Actividad 3</h2>
                    <p>
                        <br><br><br><br>Contactar al Departamento de Educación del Zoológico y buscar apoyo para enriquecer y reforzar la visita.
                    </p>
                </div>

            </div>

        </div>

    </section>


    <br><br><br><br>
    <table>
    <h1 style="text-align: center;color:brown">RECOMENDACIONES</h1>
        <tr>
            <td>
                <div class="conte">
                    <figure>
                        <img src="https://imagenes.20minutos.es/files/image_656_370/uploads/imagenes/2020/07/02/aratinga-solstitialis-linnaeus-1758.jpeg">
                        <div class="capa">
                            <p><br><br><br><br>
                                No ingresar con mascotas, recipientes de vidrio y bebidas alcohólicas.
                            </p>

                        </div>


                    </figure>

                </div>
            </td>
            <td>
                <div class="conte">
                    <figure>
                        <img src="https://mymodernmet.com/wp/wp-content/uploads/2020/07/Andean-Condor-Flying-6-1.jpg">
                        <div class="capa">
                            <p><br><br><br><br><br>
                            Respetar los senderos.
                            </p>

                        </div>


                    </figure>

                </div>
            </td>
            <td>
            <div class="conte">
                    <figure>
                        <img src="https://t1.uc.ltmcdn.com/images/2/1/1/img_significado_del_zorro_como_animal_de_poder_48112_orig.jpg">
                        <div class="capa">
                            <p><br><br><br><br><br>
                            Depositar la basura en los cestos.
                            </p>

                        </div>


                    </figure>

                </div>
            </td>

            <td>
            <div class="conte">
                    <figure>
                        <img src="https://www.elfinanciero.com.mx/resizer/BxaZ9k5Piv019qXnGJZtxLEJsAM=/arc-photo-elfinanciero/arc2-prod/public/TC5TJAX5R5NM5MDGPDTVVBVOT4.jpg">
                        <div class="capa">
                            <p><br><br><br><br><br>
                            No gritar ni arrojar objetos a los animales.
                            </p>

                        </div>


                    </figure>

                </div>
            </td>
        </tr>
    </table>



    <section class="caja">
        <div class="contenedor">
            <div class="caja__columna2">
                <svg>
                    <rect></rect>
                </svg>
                <div class="texto">
                    <h2>Consejo 1</h2>
                    <p>
                        <br>NO veas el zoológico como un lugar donde puedes hacer lo que quieras solo por pagar la entrada, los animales no están allí como un espectáculo para entretenerte si no para que aprendas de ellos.
                    </p>
                </div>

            </div>
            <div class="caja__columna2">
                <svg>
                    <rect></rect>
                </svg>
                <div class="texto">
                    <h2>Consejo 2</h2>
                    <p>
                        <br>NO te permitas salir del zoológico sin haber aprendido al menos acerca de 10 animales que no conocías, recuerda ser respetuoso y acatar todas las sugerencias de las personas que trabajan allí.
                    </p>
                </div>

            </div>
            <div class="caja__columna2">
                <svg>
                    <rect></rect>
                </svg>
                <div class="texto">
                    <h2> Consejo 3</h2>
                    <p>
                        <br><br>No alimentes a los animales con comida ajena a la que vende el zoológico, es por el bien de ellos, cosas como  chitos, paletas y hasta bombones
                    </p>
                </div>

            </div>

        </div>

    </section>






    <div id="redes">
        Siguenos en nuestras Redes Sociales: ZOOLOGICO MUNDO ANDINO
        <br><br>
        Grupo A<br><br>
        Integrantes:<br>
        # Darwin Edison Luque Pérez<br>
        # Miguel Ángel Tejada Huillca <br>
        # Alexandre Yuri Flores Cruz<br>
        # Yin Sanders Saire Montejo<br>
        # Neptalí Raymi Huamani<br>


    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
