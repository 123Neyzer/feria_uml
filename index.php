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
  <link rel="stylesheet" href="./navbar.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <title>Inicio</title>
</head>

<body class="text-blueGray-700 antialiased">
  <div id="root">
    <nav class="fondonavegacion md:w-72 md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative z-10 py-4 px-6">
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





        <div class="contnavbar md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4  top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden" id="example-collapse-sidebar">
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
    <a class="text-blue-500 hover:text-blue-500 pt-8 text-xs uppercase py-3 font-bold block" href="index.php">
        <i class="bx bx-tv opacity-75 mr-2 text-sm"></i>Inicio</a>
</div>
<div class="">
    <a class="text-black hover:text-blue-500 pt-2 text-xs uppercase py-3 font-bold block" href="feed.php">
    <i class='bx bxs-id-card opacity-75 mr-2 text-sm'></i>Feed</a>
</div>

<div class="inline-flex">
    <a class=" text-black hover:text-blue-500 pt-2 text-xs uppercase py-3 font-bold block" href="perfil.php">
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
          <a class="text-white text-sm uppercase hidden lg:inline-block font-semibold" href="./index.php">Inicio</a>
          <form class="md:flex hidden flex-row flex-wrap items-center lg:ml-auto mr-3">
            <div class="relative flex w-full flex-wrap items-stretch">
              <span class="z-10 h-full leading-snug font-normal absolute text-center text-blueGray-300 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3"><i class="fas fa-search"></i></span>
              <input type="text" placeholder="Search here..." class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-sm shadow outline-none focus:outline-none focus:ring w-full pl-10" />
            </div>
          </form>
          <ul class="flex-col md:flex-row list-none items-center hidden md:flex">
            <a class="text-blueGray-500 block" href="#pablo" onclick="openDropdown(event,'user-dropdown')">
              <div class="items-center flex">
                <span class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full"><img alt="..." class="w-full rounded-full align-middle border-none shadow-lg" src="./assets/img/usuario.jpg" /></span>
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
       <style>
          .gradient{
           background: linear-gradient(to right, #0066ff, #00ccff);
          }
       </style>
      <div class="relative gradient md:pt-24 pb- h-auto pb-12 pt-12">
        <div class="px-4 md:pl-20 pr-10 mx-auto w-full">
          <div>
            <!-- Card stats -->
            <div class="cards w-auto flex flex-wrap">
              <div class=" w-full lg:w-6/12 xl:w-3/12 px-4">
                <div class="cards-elements relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                  <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                      <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                        <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                          Estudiantes de 1ro y 2do año
                        </h5>
                        <span class="font-semibold text-xl text-blueGray-700">
                          300
                        </span>
                      </div>
                      <div class="relative w-auto pl-4 flex-initial">
                        <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500">
                          <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 255);">
                            <path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path>
                          </svg>
                        </div>
                      </div>
                    </div>
                    <p class="text-sm text-blueGray-400 mt-4">
                      <span class="text-emerald-500 mr-2">
                        <i class="fas fa-arrow-up"></i> 35%
                      </span>
                      <span class="whitespace-nowrap">
                        Año 2024
                      </span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="cards-elements w-full lg:w-6/12 xl:w-3/12 px-4">
                <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                  <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                      <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                        <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                          Estudiantes de 3ro y 4to Año
                        </h5>
                        <span class="font-semibold text-xl text-blueGray-700">
                          150
                        </span>
                      </div>
                      <div class="relative w-auto pl-4 flex-initial">
                        <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-orange-500">
                          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 255);">
                            <path d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z"></path>
                          </svg>
                        </div>
                      </div>
                    </div>
                    <p class="text-sm text-blueGray-400 mt-4">
                      <span class="text-red-500 mr-2">
                        <i class="fas fa-arrow-down"></i> 15%
                      </span>
                      <span class="whitespace-nowrap">
                        Año 2024
                      </span>
                    </p>
                  </div>
                </div>
              </div>
              <div class=" w-full lg:w-6/12 xl:w-3/12 px-4">
                <div class=" cards-elementsrelative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                  <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                      <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                        <h5 class="text-blueGray-400 mt-1 mb-2 uppercase font-bold text-xs">
                          Estudiantes de 5to Año
                        </h5>
                        <span class="font-semibold text-xl text-blueGray-700">
                          150
                        </span>
                      </div>
                      <div class="relative w-auto pl-4 flex-initial">
                        <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-pink-500">
                          <i class="fas fa-users"></i>
                        </div>
                      </div>
                    </div>
                    <p class="text-sm text-blueGray-400 mt-5">
                      <span class="text-orange-500 mr-2">
                        <i class="fas fa-arrow-down"></i> 15%
                      </span>
                      <span class="whitespace-nowrap">
                        Año 2024
                      </span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="  w-full lg:w-6/12 xl:w-3/12 px-4">
                <div class="cards-elements relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                  <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                      <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                        <h5 class="text-blueGray-400 uppercase mt-1 mb-2 font-bold text-xs">
                          Estudiantes egresados
                        </h5>
                        <span class="font-semibold text-xl text-blueGray-700">
                          300

                        </span>
                      </div>

                      <div class="relative w-auto pl-4 flex-initial">
                        <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-lightBlue-500">
                          <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 255);">
                            <circle cx="12" cy="4" r="2"></circle>
                            <path d="M12 18h2v-5h2V9c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v4h2v5h2z"></path>
                            <path d="m18.446 11.386-.893 1.789C19.108 13.95 20 14.98 20 16c0 1.892-3.285 4-8 4s-8-2.108-8-4c0-1.02.892-2.05 2.446-2.825l-.893-1.789C3.295 12.512 2 14.193 2 16c0 3.364 4.393 6 10 6s10-2.636 10-6c0-1.807-1.295-3.488-3.554-4.614z"></path>
                          </svg>
                        </div>
                      </div>
                    </div>
                    <p class="text-sm text-blueGray-400 mt-5">
                      <span class="text-emerald-500 mr-2">
                        <i class="fas fa-arrow-up"></i> 35%
                      </span>
                      <span class="whitespace-nowrap">
                        Año 2024
                      </span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="main-content">
          <!-- <aside class="sidebar">
            <button class="sidebar-toggle" aria-label="Mostrar filtros">▶</button>
            <div class="filters">
              <select id="carrera">
                <option value="todas">Todas las carreras</option>
                <option value="Ingeniería Informática">Ingeniería Informática</option>
                <option value="Administración de Empresas">Administración de Empresas</option>
                <option value="Psicología">Psicología</option>
                <option value="Psicología">Enfermeria</option>
                <option value="Psicología">Ingles</option>



              </select>
              <select id="ano">
                <option value="todos">Todos los años</option>
                <option value="1">1er año</option>
                <option value="2">2do año</option>
                <option value="3">3er año</option>
                <option value="4">4to año</option>
                <option value="5">5to año</option>
              </select>
            </div>
          </aside> -->

          <main class="content md:pl-8">
            <div class="tabs">
              <button class="inline-flex tab active" id="tab-recomendados"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(0, 4, 255);">
                  <path d="M4.035 15.479A3.976 3.976 0 0 0 4 16c0 2.378 2.138 4.284 4.521 3.964C9.214 21.198 10.534 22 12 22s2.786-.802 3.479-2.036C17.857 20.284 20 18.378 20 16c0-.173-.012-.347-.035-.521C21.198 14.786 22 13.465 22 12s-.802-2.786-2.035-3.479C19.988 8.347 20 8.173 20 8c0-2.378-2.143-4.288-4.521-3.964C14.786 2.802 13.466 2 12 2s-2.786.802-3.479 2.036C6.138 3.712 4 5.622 4 8c0 .173.012.347.035.521C2.802 9.214 2 10.535 2 12s.802 2.786 2.035 3.479zm1.442-5.403 1.102-.293-.434-1.053A1.932 1.932 0 0 1 6 8c0-1.103.897-2 2-2 .247 0 .499.05.73.145l1.054.434.293-1.102a1.99 1.99 0 0 1 3.846 0l.293 1.102 1.054-.434C15.501 6.05 15.753 6 16 6c1.103 0 2 .897 2 2 0 .247-.05.5-.145.73l-.434 1.053 1.102.293a1.993 1.993 0 0 1 0 3.848l-1.102.293.434 1.053c.095.23.145.483.145.73 0 1.103-.897 2-2 2-.247 0-.499-.05-.73-.145l-1.054-.434-.293 1.102a1.99 1.99 0 0 1-3.846 0l-.293-1.102-1.054.434A1.935 1.935 0 0 1 8 18c-1.103 0-2-.897-2-2 0-.247.05-.5.145-.73l.434-1.053-1.102-.293a1.993 1.993 0 0 1 0-3.848z"></path>
                  <path d="m15.742 10.71-1.408-1.42-3.331 3.299-1.296-1.296-1.414 1.414 2.704 2.704z"></path>
                </svg>
                Estudiantes recomendados</button>
              <button class="inline-flex tab" id="tab-destacados"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(0, 4, 255);">
                  <path d="M20.29 8.29 16 12.58l-1.3-1.29-1.41 1.42 2.7 2.7 5.72-5.7zM4 8a3.91 3.91 0 0 0 4 4 3.91 3.91 0 0 0 4-4 3.91 3.91 0 0 0-4-4 3.91 3.91 0 0 0-4 4zm6 0a1.91 1.91 0 0 1-2 2 1.91 1.91 0 0 1-2-2 1.91 1.91 0 0 1 2-2 1.91 1.91 0 0 1 2 2zM4 18a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3v1h2v-1a5 5 0 0 0-5-5H7a5 5 0 0 0-5 5v1h2z"></path>
                </svg>
                Estudiantes destacados</button>
            </div>

            <div class="students-grid" id="estudiantes-recomendados">
              <div class="student-card">
                <img src="./assets/img/perfil1.png" alt="Ana García" class="student-avatar">
                <h3>Ana García</h3>
                <p>Ingeniería Informática - 4º año</p>
                <a href="perfil.php" class="btn">Ver perfil</a>
              </div>
              <div class="student-card">
                <img src="./assets/img/perfil7.png" alt="Jefferson Guillen" class="student-avatar">
                <h3>Jefferson Guillén</h3>
                <p> Farmacia - 3º año</p>
                <a href="perfil.php" class="btn">Ver perfil</a>
              </div>
              <div class="student-card">
                <img src="./assets/img/perfil5.png" alt="Carlos Rodríguez" class="student-avatar">
                <h3>Carlos Rodríguez</h3>
                <p>Ingeniería Informática - 4º año</p>
                <a href="perfilcarlos.php" class="btn">Ver perfil</a>
              </div>
              <div class="student-card">
                <img src="./assets/img/perfil3.png" alt="Laura Martínez" class="student-avatar">
                <h3>Laura Martínez</h3>
                <p>Psicología - 3º año</p>
                <a href="#" class="btn">Ver perfil</a>
              </div>
              <div class="student-card">
                <img src="./assets/img/perfil4.png" alt="Diego Sánchez" class="student-avatar">
                <h3>Diego Sánchez</h3>
                <p>Ingeniería Informática - 5º año</p>
                <a href="#" class="btn">Ver perfil</a>
              </div>
              <div class="student-card">
                <img src="./assets/img/perfil8.png" alt="Leyla Guzman" class="student-avatar">
                <h3>Leyla Guzmán</h3>
                <p>Enfermería - 3º año</p>
                <a href="perfil.php" class="btn">Ver perfil</a>
              </div>
            </div>


            <div class="students-grid" id="estudiantes-destacados" style="display: none;">
              <div class="student-card">
                <img src="./assets/img/perfil2.png" alt="María López" class="student-avatar">
                <h3>María López</h3>
                <p>Psicología - Egresado</p>
                <a href="#" class="btn">Ver perfil</a>
              </div>
              <div class="student-card">
                <img src="./assets/img/perfil6.png" alt="Javier Fernández" class="student-avatar">
                <h3>Javier Fernández</h3>
                <p>Ingeniería Informática - Egresado</p>
                <a href="#" class="btn">Ver perfil</a>
              </div>
              <div class="student-card">
                <img src="./assets/img/perfil9.png" alt="Javier Fernández" class="student-avatar">
                <h3>Janier Morán</h3>
                <p>Ingles - Egresado</p>
                <a href="#" class="btn">Ver perfil</a>
              </div>
            </div>
          </main>
        </div>
      </div>

      <script>
        // Funcionalidad para cambiar entre pestañas
        document.getElementById('tab-recomendados').addEventListener('click', function() {
          this.classList.add('active');
          document.getElementById('tab-destacados').classList.remove('active');
          document.getElementById('estudiantes-recomendados').style.display = 'grid';
          document.getElementById('estudiantes-destacados').style.display = 'none';
        });

        document.getElementById('tab-destacados').addEventListener('click', function() {
          this.classList.add('active');
          document.getElementById('tab-recomendados').classList.remove('active');
          document.getElementById('estudiantes-destacados').style.display = 'grid';
          document.getElementById('estudiantes-recomendados').style.display = 'none';
        });


        // Nota: La funcionalidad de filtrado requeriría JavaScript más complejo
        // y probablemente una base de datos en el lado del servidor.
      </script>
      <!-- <div class="px-4 md:px-10 mx-auto w-full -m-24">
        <div class="flex flex-wrap">
          <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-blueGray-800">
              <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                <div class="flex flex-wrap items-center">
                  <div class="relative w-full max-w-full flex-grow flex-1">
                    <h6 class="uppercase text-blueGray-100 mb-1 text-xs font-semibold">
                      Overview
                    </h6>
                    <h2 class="text-white text-xl font-semibold">
                      Sales value
                    </h2>
                  </div>
                </div>
              </div> -->
      <!-- <div class="p-4 flex-auto">
                <!-- Chart -->
      <!-- <div class="relative" style="height:350px">
                  <canvas id="line-chart"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full xl:w-4/12 px-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
              <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                <div class="flex flex-wrap items-center">
                  <div class="relative w-full max-w-full flex-grow flex-1">
                    <h6 class="uppercase text-blueGray-400 mb-1 text-xs font-semibold">
                      Performance
                    </h6>
                    <h2 class="text-blueGray-700 text-xl font-semibold">
                      Total orders
                    </h2>
                  </div>
                </div>
              </div>
              <div class="p-4 flex-auto">
                <!-- Chart -->
      <!-- <div class="relative" style="height:350px">
                  <canvas id="bar-chart"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="flex flex-wrap mt-4">
          <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
              <div class="rounded-t mb-0 px-4 py-3 border-0">
                <div class="flex flex-wrap items-center">
                  <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                    <h3 class="font-semibold text-base text-blueGray-700">
                      Page visits
                    </h3>
                  </div>
                  <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                    <button class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1" type="button" style="transition:all .15s ease">
                      See all
                    </button>
                  </div>
                </div>
              </div>
              <div class="block w-full overflow-x-auto">
                <!-- Projects table -->
      <!-- <table class="items-center w-full bg-transparent border-collapse">
                  <thead>
                    <tr>
                      <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Page name
                      </th>
                      <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Visitors
                      </th>
                      <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Unique users
                      </th>
                      <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Bounce rate
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                        /argon/
                      </th>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        4,569
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        340
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <i class="fas fa-arrow-up text-emerald-500 mr-4"></i>
                        46,53%
                      </td>
                    </tr>
                    <tr>
                      <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                        /argon/index.html
                      </th>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        3,985
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        319
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <i class="fas fa-arrow-down text-orange-500 mr-4"></i>
                        46,53%
                      </td>
                    </tr>
                    <tr>
                      <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                        /argon/charts.html
                      </th>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        3,513
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        294
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <i class="fas fa-arrow-down text-orange-500 mr-4"></i>
                        36,49%
                      </td>
                    </tr>
                    <tr>
                      <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                        /argon/tables.html
                      </th>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        2,050
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        147
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <i class="fas fa-arrow-up text-emerald-500 mr-4"></i>
                        50,87%
                      </td>
                    </tr>
                    <tr>
                      <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                        /argon/profile.html
                      </th>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        1,795
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        190
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <i class="fas fa-arrow-down text-red-500 mr-4"></i>
                        46,53%
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="w-full xl:w-4/12 px-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
              <div class="rounded-t mb-0 px-4 py-3 border-0">
                <div class="flex flex-wrap items-center">
                  <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                    <h3 class="font-semibold text-base text-blueGray-700">
                      Social traffic
                    </h3>
                  </div>
                  <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                    <button class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1" type="button" style="transition:all .15s ease">
                      See all
                    </button>
                  </div>
                </div>
              </div>
              <div class="block w-full overflow-x-auto">
                <!-- Projects table -->
      <!-- <table class="items-center w-full bg-transparent border-collapse">
                  <thead class="thead-light">
                    <tr>
                      <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Referral
                      </th>
                      <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Visitors
                      </th>
                      <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left" style="min-width:140px"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                        Facebook
                      </th>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        1,480
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">
                          <span class="mr-2">60%</span>
                          <div class="relative w-full">
                            <div class="overflow-hidden h-2 text-xs flex rounded bg-red-200">
                              <div style="width:60%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                        Facebook
                      </th>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        5,480
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">
                          <span class="mr-2">70%</span>
                          <div class="relative w-full">
                            <div class="overflow-hidden h-2 text-xs flex rounded bg-emerald-200">
                              <div style="width:70%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-emerald-500"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                        Google
                      </th>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        4,807
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">
                          <span class="mr-2">80%</span>
                          <div class="relative w-full">
                            <div class="overflow-hidden h-2 text-xs flex rounded bg-purple-200">
                              <div style="width:80%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-purple-500"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                        Instagram
                      </th>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        3,678
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">
                          <span class="mr-2">75%</span>
                          <div class="relative w-full">
                            <div class="overflow-hidden h-2 text-xs flex rounded bg-lightBlue-200">
                              <div style="width:75%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-lightBlue-500"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                        twitter
                      </th>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        2,645
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">
                          <span class="mr-2">30%</span>
                          <div class="relative w-full">
                            <div class="overflow-hidden h-2 text-xs flex rounded bg-orange-200">
                              <div style="width:30%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-emerald-500"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <footer class="block py-4">
          <div class="container mx-auto px-4">
            <hr class="mb-4 border-b-1 border-blueGray-200" />
            <div class="flex flex-wrap items-center md:justify-between justify-center">
              <div class="w-full md:w-4/12 px-4">
                <div class="text-sm text-blueGray-500 font-semibold py-1">
                  Copyright © <span id="javascript-date"></span>
                  <a href="https://www.creative-tim.com" class="text-blueGray-500 hover:text-blueGray-700 text-sm font-semibold py-1">
                    Creative Tim
                  </a>
                </div>
              </div>
              <div class="w-full md:w-8/12 px-4">
                <ul class="flex flex-wrap list-none md:justify-end  justify-center">
                  <li>
                    <a href="https://www.creative-tim.com/presentation" class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">
                      About Us
                    </a>
                  </li>
                  <li>
                    <a href="http://blog.creative-tim.com" class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">
                      Blog
                    </a>
                  </li>
                  <li>
                    <a href="https://github.com/creativetimofficial/tailwind-starter-kit/blob/main/LICENSE.md" class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">
                      MIT License
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div> -->
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