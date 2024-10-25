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
  <title>Perfil-Carlos Rodriguez</title>
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
                                <a class="text-black hover:text-blue-500 pt-8 text-xs uppercase py-3 font-bold block" href="index.php">
                                    <i class="bx bx-tv opacity-75 mr-2 text-sm"></i>Inicio</a>
                            </div>
                            <div class="">
                                <a class="text-blue-500 hover:text-blue-500 pt-2 text-xs uppercase py-3 font-bold block" href="feed.php">
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
        <a class="text-white text-sm uppercase hidden pt-4 lg:inline-block font-semibold" href="./index.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
</svg></a>
          
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
      <div class="relative gradient  h-24 pt-12">
        <div class="px-4 md:pl-20 pr-10 mx-auto w-full">
        </div>
      </div>
 
  <style>
      .gradient{
                        background: linear-gradient(to right, #0066ff, #00ccff);

                      }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f2f5;
        }
        
        .create-post {
            flex: 1;
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            margin-right: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        h2 {
            color: #1a73e8;
            margin-top: 0;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        textarea {
            height: 100px;
        }
        .btn {
            background-color: #1a73e8;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #1557b0;
        }
        .profile-card {
            background-image: url(./assets/img/feedheaderinf.png);
            border-radius: 8px;
            padding: 20px;        
            text-align: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .profile-image {
            width: 150px;
            height: 150px;
            border: 5px solid white;
            border-radius: 50%;
            margin-bottom: 10px;
            /* alinear al centro */
            display: block;
            margin-left: auto;
            margin-right: auto;


        }
        .profile-name {
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            font-weight: bold;
            margin-bottom: 0px;
            color: black;
            padding: 4px;
            background-color: white;
        }
        .profile-info {
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
            color: black;
            padding: 4px;
            background-color: white;
            margin-bottom: 10px;
        }
        .view-profile {
            background-color: #1a73e8;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
        .view-profile:hover {
            background-color: #1557b0;
        }
        .container {
            /* alinear todo al centro */
            display: flex;
            background-color: white;
            justify-content: center;
            margin-left: 10px;
            align-items: center;
            width: 80%;
            max-width: 1200px;
            padding-top: 0%;
            margin: 0 auto;
            padding-left: 20px;
            padding-right: 20px;
        }
        .contenedor{
            flex: 1;
            background-color:#f0f2f5;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .feed {
            flex: 1;
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
    </style>

    <div class="container">
        <div class="contenedor">
        <div class="feed">
            <div class="profile-card">
                <img src="./assets/img/perfil5.png" alt="Carlos Rodríguez" class="profile-image">
                <div class="profile-name">Carlos Rodríguez</div>
                <div class="profile-info">Ingeniería Informática - 4º año</div>
                <a href="#" class="view-profile">Ver perfil</a>
            </div>
        </div>
            <!-- Puedes agregar más tarjetas de perfil aquí -->
            <div class="feed">
            <div class="profile-card">
                <img src="./assets/img/perfil5.png" alt="Carlos Rodríguez" class="profile-image">
                <div class="profile-name">Carlos Rodríguez</div>
                <div class="profile-info">Ingeniería Informática - 4º año</div>
                <a href="#" class="view-profile">Ver perfil</a>
            </div>
            </div>
            <div class="feed">
            <div class="profile-card">
                <img src="./assets/img/perfil5.png" alt="Carlos Rodríguez" class="profile-image">
                <div class="profile-name">Carlos Rodríguez</div>
                <div class="profile-info">Ingeniería Informática - 4º año</div>
                <a href="#" class="view-profile">Ver perfil</a>
            </div>
            </div>
            <div class="feed">
            <div class="profile-card">
                <img src="./assets/img/perfil5.png" alt="Carlos Rodríguez" class="profile-image">
                <div class="profile-name">Carlos Rodríguez</div>
                <div class="profile-info">Ingeniería Informática - 4º año</div>
                <a href="#" class="view-profile">Ver perfil</a>
            </div>
            </div>
            <div class="feed">
            <div class="profile-card">
                <img src="./assets/img/perfil5.png" alt="Carlos Rodríguez" class="profile-image">
                <div class="profile-name">Carlos Rodríguez</div>
                <div class="profile-info">Ingeniería Informática - 4º año</div>
                <a href="#" class="view-profile">Ver perfil</a>
            </div>
            </div>
            <div class="feed">
            <div class="profile-card">
                <img src="./assets/img/perfil5.png" alt="Carlos Rodríguez" class="profile-image">
                <div class="profile-name">Carlos Rodríguez</div>
                <div class="profile-info">Ingeniería Informática - 4º año</div>
                <a href="#" class="view-profile">Ver perfil</a>
            </div>
           </div>
        </div>
    </div>


  
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