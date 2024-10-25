<?php
// Require the constants
require('./app/config/constantes.php');
// Verificar si el usuario está logueado
require(ROOT_PATH . DS . 'app' . DS . 'login' . DS . 'verificar-login.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="inicio.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css" />
    <!-- llamar estilos css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" />

    <link rel="stylesheet" href="./navbar.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Perfil</title>
    <style>
        .avatar {
            width: 128px;
            height: 128px;
            border-radius: 50%;
            overflow: hidden;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }
    </style>
</head>



<body class="text-blueGray-700 antialiased">
    <noscript>Foodapp</noscript>
    <div id="root">
        <nav class="fondonavegacion md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-72 z-10 py-4 px-6">
            <div class="contenedornavegacion md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
                <button class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" type="button" onclick="toggleNavbar('example-collapse-sidebar')">
                    <i class="fas fa-bars"></i></button>
                <a class="nombreinicionavbar md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold py-4 px-0" href="javascript:void(0)">
                    <?php
                    echo $_SESSION["name"];
                    ?>
                </a>
                <ul class="md:hidden items-center flex flex-wrap list-none">
                    <li class="inline-block relative">
                        <a class="text-blueGray-500 block py-1 px-3" href="#pablo" onclick="openDropdown(event,'notification-dropdown')"><i class="fas fa-bell"></i></a>
                        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1" style="min-width: 12rem;" id="notification-dropdown">

                            <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                                Action</a>

                            <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Another action</a>

                            <a href="Crear_usuario.php" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                                crear usuario Nuevo
                            </a>

                            <div class="h-0 my-2 border border-solid border-blueGray-100"></div>

                            <a href="login.php?logout=1" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                                Cerrar sesión</a>
                        </div>
                    </li>
                    <li class="inline-block relative">
                        <a class="text-blueGray-500 block" href="#pablo" onclick="openDropdown(event,'user-responsive-dropdown')">
                            <div class="items-center flex">
                                <span class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full"><img alt="..." class="w-full rounded-full align-middle border-none shadow-lg" src="./assets/img/usuario.jpg" /></span>
                            </div>
                        </a>
                        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1" style="min-width: 12rem;" id="user-responsive-dropdown">
                            <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                                Action</a>

                            <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Another action</a>

                            <a href="Crear_usuario.php" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                                crear usuario Nuevo
                            </a>

                            <div class="h-0 my-2 border border-solid border-blueGray-100"></div>

                            <a href="login.php?logout=1" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                                Cerrar sesión</a>
                        </div>
                    </li>
                </ul>




                <!-- contenedor de la barra de navegacion -->
                <div class="contnavbar   md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4  top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden" id="example-collapse-sidebar">
                    <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-200">
                        <div class="flex flex-wrap">
                            <div class="w-6/12">
                                <a class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0" href="javascript:void(0)">
                                    <?php
                                    echo $_SESSION["name"];
                                    ?>
                                </a>
                            </div>
                            <div class="w-6/12 flex justify-end">
                                <button type="button" class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" onclick="toggleNavbar('example-collapse-sidebar')">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <form class="mt-6 mb-4 md:hidden">
                        <div class="mb-3 pt-0">
                            <input type="text" placeholder="Search" class="border-0 px-3 py-2 h-12 border border-solid  border-blueGray-500 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-base leading-snug shadow-none outline-none focus:outline-none w-full font-normal" />
                        </div>
                    </form>
                    <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                        <li class="items-center">

                            <div>
                                <a class="text-black hover:text-blue-500 pt-8 text-xs uppercase py-3 font-bold block" href="index.php">
                                    <i class="bx bx-tv opacity-75 mr-2 text-sm"></i>Inicio</a>
                            </div>
                            <div class="">
                                <a class="text-black hover:text-blue-500 pt-2 text-xs uppercase py-3 font-bold block" href="feed.php">
                                    <i class='bx bxs-id-card opacity-75 mr-2 text-sm'></i>Feed</a>
                            </div>

                            <div class="inline-flex">
                                <a class=" text-blue-500 hover:text-blue-500 pt-2 text-xs uppercase py-3 font-bold block" href="perfil.php">
                                    <i class='bx bx-user opacity-75 mr-2 text-sm'></i> Perfil</a>
                            </div>
                            <div class="">
                                <a class=" text-black hover:text-blue-500 pt-2 text-xs uppercase py-3 font-bold block" href="editar_perfil.php">
                                    <i class='bx bxs-edit opacity-75 mr-2 text-sm'></i>Editar Perfil</a>
                            </div>
                            <div class="">
                                <a class="text-black hover:text-blue-500 pt-2 text-xs uppercase py-3 font-bold block" href="cambiar_contrasena.php">
                                    <i class='bx bx-lock-alt opacity-75 mr-2 text-sm'></i>cambiar contraseña</a>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="relative md:ml-64 bg-blueGray-50">
            <nav class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4">
                <div class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4">
                    <a class="text-white text-sm uppercase hidden pt-4 lg:inline-block font-semibold" href="./index.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                        </svg></a>

                    <ul class="flex-col md:flex-row list-none items-center hidden md:flex">
                        <a class="text-blueGray-500 block" href="#pablo" onclick="openDropdown(event,'user-dropdown')">
                            <div class="items-center flex">
                                <span class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full">
                                    <img alt="..." class="w-full rounded-full align-middle border-none shadow-lg" src="./assets/img/usuario.jpg" /></span>
                            </div>
                        </a>
                        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1" style="min-width: 12rem;" id="user-dropdown">
                            <a href="perfil.php" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Perfil</a>
                            <a href="editar_perfil.php" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Editar perfil</a>

                            <a href="cambiar_contrasena.php" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                                Cambiar contraseña
                            </a>


                            <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                            <a href="login.php?logout=1" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Cerrar sesión</a>
                        </div>
                    </ul>
                </div>
            </nav>
            <!-- Header -->
            <div class="relative gradient ">
                <div class="px-4 md:px-10 mx-auto w-full">
                    <style>
                         .gradient{
                        background: linear-gradient(to right, #0066ff, #00ccff);
                        margin-top: 0%;
                        height: 400px;

                      }
                      .header {
                            background-image: url('./assets/img/portada.jpg');
                            background-size: cover;
                            border-radius: 10px;
                            background-position: center;
                            height: 300px;
                            margin-left: 22px;
                            position: relative;
                            width: 932px;
                        }
                        h1 {
                            padding-top: 35px;
                            font-size: 18px;
                            font-weight: 500;
                            color: #333333;
                        }
                    </style>
                    <h1 class="text-white font-serif texto pb-6"> Editar Perfil</h1>

                    <div class="pl-5 w-full max-w-5xl mx-auto">
                        <div class="relative">
                        
                                <img src="./assets/img/portada.jpg" alt="Portada" class="header w-full h-[300px] object-cover rounded-t-lg">
                            
                            <div class="avatar absolute bottom-0 left-6 transform translate-y-1/2 border-4 border-white">
                                <img src="./assets/img/usuario.jpg" alt="María García" class="w-full h-full object-cover">
                            </div>
                        </div>

                        <div class="bg-white rounded-lg shadow-md mt-16 p-6">
                            <div class="mb-6">
                                <h2 class="text-3xl font-bold text-blue-600"> <?php echo $_SESSION["name"]; ?></h2>
                                <p class="text-gray-600 mb-4"><?php echo $_SESSION["email"]; ?></p>
                                <div class="flex space-x-2">
                                    <a href="editar_perfil.php" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                        Editar Perfil
                                    </a>
                                    <a href="Cambiar_contrasena.php" class="border border-blue-500 text-blue-500 hover:bg-blue-50 font-bold py-2 px-4 rounded flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                                        </svg>
                                        Cambiar Contraseña
                                    </a>
                                </div>
                            </div>

                            <div class="tabs sobremi ">
                                <div class="flex border-b mb-4">
                                    <button class="py-2 px-4 text-gray-500 border-b-2 border-blue-500 tab-trigger active" data-tab="sobre-mi">Sobre Mí</button>
                                    <button class="py-2 px-4 text-gray-500 tab-trigger" data-tab="redes-sociales">Redes Sociales</button>
                                </div>
                            </div>
                            <div>
                                <div id="sobre-mi" class="tab-content active">
                                    <p class="mb-4">Ingeniero en Sistemas con más de 5 años de experiencia en el desarrollo y gestión de soluciones tecnológicas innovadoras. Apasionado por la programación y la optimización de procesos, con habilidades en lenguajes de programación como Python, Java y C++. Experto en la implementación de sistemas de seguridad y redes, y siempre en busca de nuevos desafíos para mejorar la eficiencia y la funcionalidad de los sistemas informáticos.</p>
                                    <div class="flex items-center text-gray-600 mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <span>Nueva Segovia, Nicaragua</span>
                                    </div>
                                    <div class="flex items-center text-gray-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                        </svg>
                                        <a href="https://www.mariagarcia.com" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline">www.Neyzer.com</a>
                                    </div>
                                </div>

                                <div id="redes-sociales" class="tab-content">
                                    <div class="space-y-2">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                            </svg>
                                            <a href="https://twitter.com/mariagarcia" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline">@Neyzer</a>
                                        </div>
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                            </svg>
                                            <a href="https://facebook.com/maria.garcia" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline">Neyzer Bellorin Gutierrez</a>
                                        </div>
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-pink-500" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                                            </svg>
                                            <a href="https://instagram.com/maria.garcia.dev" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline">@Neyzer_Bellorin</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const tabs = document.querySelectorAll('.tab-trigger');
                    const contents = document.querySelectorAll('.tab-content');

                    tabs.forEach(tab => {
                        tab.addEventListener('click', () => {
                            const target = tab.dataset.tab;

                            tabs.forEach(t => t.classList.remove('text-blue-500', 'border-b-2', 'border-blue-500'));
                            tab.classList.add('text-blue-500', 'border-b-2', 'border-blue-500');

                            contents.forEach(c => c.classList.remove('active'));

                            document.getElementById(target).classList.add('active');
                        });
                    });
                });
            </script>


            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" charset="utf-8"></script>
            <script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>
            <script type="text/javascript">
                /* Sidebar - Side navigation menu on mobile/responsive mode */
                function toggleNavbar(collapseID) {
                    document.getElementById(collapseID).classList.toggle("hidden");
                    document.getElementById(collapseID).classList.toggle("bg-white");
                    document.getElementById(collapseID).classList.toggle("m-2");
                    document.getElementById(collapseID).classList.toggle("py-3");
                    document.getElementById(collapseID).classList.toggle("px-6");
                }
                /* Function for dropdowns */
                function openDropdown(event, dropdownID) {
                    let element = event.target;
                    while (element.nodeName !== "A") {
                        element = element.parentNode;
                    }
                    var popper = Popper.createPopper(element, document.getElementById(dropdownID), {
                        placement: "bottom-end"
                    });
                    document.getElementById(dropdownID).classList.toggle("hidden");
                    document.getElementById(dropdownID).classList.toggle("block");
                }


                (function() {
                    /* Add current date to the footer */
                    document.getElementById("javascript-date").innerHTML = new Date().getFullYear();
                    /* Chart initialisations */
                    /* Line Chart */
                    var config = {
                        type: "line",
                        data: {
                            labels: [
                                "January",
                                "February",
                                "March",
                                "April",
                                "May",
                                "June",
                                "July"
                            ],
                            datasets: [{
                                    label: new Date().getFullYear(),
                                    backgroundColor: "#4c51bf",
                                    borderColor: "#4c51bf",
                                    data: [65, 78, 66, 44, 56, 67, 75],
                                    fill: false
                                },
                                {
                                    label: new Date().getFullYear() - 1,
                                    fill: false,
                                    backgroundColor: "#ed64a6",
                                    borderColor: "#ed64a6",
                                    data: [40, 68, 86, 74, 56, 60, 87]
                                }
                            ]
                        },
                        options: {
                            maintainAspectRatio: false,
                            responsive: true,
                            title: {
                                display: false,
                                text: "Sales Charts",
                                fontColor: "white"
                            },
                            legend: {
                                labels: {
                                    fontColor: "white"
                                },
                                align: "end",
                                position: "bottom"
                            },
                            tooltips: {
                                mode: "index",
                                intersect: false
                            },
                            hover: {
                                mode: "nearest",
                                intersect: true
                            },
                            scales: {
                                xAxes: [{
                                    ticks: {
                                        fontColor: "rgba(255,255,255,.7)"
                                    },
                                    display: true,
                                    scaleLabel: {
                                        display: false,
                                        labelString: "Month",
                                        fontColor: "white"
                                    },
                                    gridLines: {
                                        display: false,
                                        borderDash: [2],
                                        borderDashOffset: [2],
                                        color: "rgba(33, 37, 41, 0.3)",
                                        zeroLineColor: "rgba(0, 0, 0, 0)",
                                        zeroLineBorderDash: [2],
                                        zeroLineBorderDashOffset: [2]
                                    }
                                }],
                                yAxes: [{
                                    ticks: {
                                        fontColor: "rgba(255,255,255,.7)"
                                    },
                                    display: true,
                                    scaleLabel: {
                                        display: false,
                                        labelString: "Value",
                                        fontColor: "white"
                                    },
                                    gridLines: {
                                        borderDash: [3],
                                        borderDashOffset: [3],
                                        drawBorder: false,
                                        color: "rgba(255, 255, 255, 0.15)",
                                        zeroLineColor: "rgba(33, 37, 41, 0)",
                                        zeroLineBorderDash: [2],
                                        zeroLineBorderDashOffset: [2]
                                    }
                                }]
                            }
                        }
                    };
                    var ctx = document.getElementById("line-chart").getContext("2d");
                    window.myLine = new Chart(ctx, config);

                    /* Bar Chart */
                    config = {
                        type: "bar",
                        data: {
                            labels: [
                                "January",
                                "February",
                                "March",
                                "April",
                                "May",
                                "June",
                                "July"
                            ],
                            datasets: [{
                                    label: new Date().getFullYear(),
                                    backgroundColor: "#ed64a6",
                                    borderColor: "#ed64a6",
                                    data: [30, 78, 56, 34, 100, 45, 13],
                                    fill: false,
                                    barThickness: 8
                                },
                                {
                                    label: new Date().getFullYear() - 1,
                                    fill: false,
                                    backgroundColor: "#4c51bf",
                                    borderColor: "#4c51bf",
                                    data: [27, 68, 86, 74, 10, 4, 87],
                                    barThickness: 8
                                }
                            ]
                        },
                        options: {
                            maintainAspectRatio: false,
                            responsive: true,
                            title: {
                                display: false,
                                text: "Orders Chart"
                            },
                            tooltips: {
                                mode: "index",
                                intersect: false
                            },
                            hover: {
                                mode: "nearest",
                                intersect: true
                            },
                            legend: {
                                labels: {
                                    fontColor: "rgba(0,0,0,.4)"
                                },
                                align: "end",
                                position: "bottom"
                            },
                            scales: {
                                xAxes: [{
                                    display: false,
                                    scaleLabel: {
                                        display: true,
                                        labelString: "Month"
                                    },
                                    gridLines: {
                                        borderDash: [2],
                                        borderDashOffset: [2],
                                        color: "rgba(33, 37, 41, 0.3)",
                                        zeroLineColor: "rgba(33, 37, 41, 0.3)",
                                        zeroLineBorderDash: [2],
                                        zeroLineBorderDashOffset: [2]
                                    }
                                }],
                                yAxes: [{
                                    display: true,
                                    scaleLabel: {
                                        display: false,
                                        labelString: "Value"
                                    },
                                    gridLines: {
                                        borderDash: [2],
                                        drawBorder: false,
                                        borderDashOffset: [2],
                                        color: "rgba(33, 37, 41, 0.2)",
                                        zeroLineColor: "rgba(33, 37, 41, 0.15)",
                                        zeroLineBorderDash: [2],
                                        zeroLineBorderDashOffset: [2]
                                    }
                                }]
                            }
                        }
                    };
                    ctx = document.getElementById("bar-chart").getContext("2d");
                    window.myBar = new Chart(ctx, config);
                })();
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>