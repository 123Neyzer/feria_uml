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
    <!-- mplementar tailwindcss -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" />
    <link rel="stylesheet" href="./navbar.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Cambiar-contraseña</title>
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

        <div class="contnavbar md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4  top-0 left-0 right-0 z-40 pl-6 h-auto  flex-1 rounded hidden" id="example-collapse-sidebar">


          <ul class="md:flex-col md:min-w-full flex flex-col list-none">
            <li class="">

              <div>
                <a class="text-black hover:text-blue-500 pt-8 text-xs uppercase py-3 font-bold block" href="index.php">
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
                <a class="text-blue-500 hover:text-blue-500 pt-2 text-xs uppercase py-3 font-bold block" href="cambiar_contrasena.php">
                  <i class='bx bx-lock-alt opacity-75 mr-2 text-sm'></i>cambiar contraseña</a>
              </div>
              <div class="">
                <a class="text-black hover:text-blue-500 pt-2 text-xs uppercase py-3 font-bold block" href="crear_publicacion.php">
                  <i class='bx bx-layer-plus opacity-75 mr-2 text-sm'></i>agregar Publicacion</a>
              </div>

            </li>
          </ul>
        </div>
      </div>
    </nav>
        <div class="relative md:ml-64 bg-blueGray-50">
            <nav class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4">
                <div class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4">

                    <a class="text-white text-sm uppercase hidden py-5 lg:inline-block font-semibold" href="./perfil.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                        </svg>
                    </a>
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
            <div class="relative gradient h-24 pt-10 ">
                <div class="px-4 md:pl-20 pr-10 mx-auto w-full">
                  



                    <style>
                         .gradient{
                        background: linear-gradient(to right, #0066ff, #00ccff);

                      }
                        .container {
                            background-color: white;
                            border-radius: 8px;
                            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                            width: 100%;
                            max-width: 400px;
                            padding: 20px;
                            margin-top: 20px;
                        }

                        .header {
                            background: linear-gradient(to right, #0066ff, #00ccff);
                            color: white;
                            text-align: center;
                            padding: 20px;
                            border-radius: 8px 8px 0 0;
                            margin: -20px -20px 20px -20px;
                        }

                        .header h2 {
                            margin: 0;
                            font-size: 24px;
                        }

                        .user-icon {
                            width: 64px;
                            height: 64px;
                            background-image: url(./assets/img/apple-icon.jpg);
                            border-radius: 50%;
                            margin: 0 auto 15px;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                        }

                        .form-group {
                            margin-bottom: 20px;
                        }

                        label {
                            display: block;
                            margin-bottom: 5px;
                            color: #333;
                            font-weight: bold;
                        }

                        .form-control {
                            width: 100%;
                            padding: 10px;
                            border: 1px solid #ddd;
                            border-radius: 4px;
                            font-size: 16px;
                            box-sizing: border-box;
                        }

                        .btn {
                            /* alinear al centro */
                            display: block;
                            text-align: center;
                            text-decoration: none;
                            width: 94%;
                            padding: 12px;
                            border: none;
                            border-radius: 4px;
                            font-size: 16px;
                            cursor: pointer;
                            transition: background-color 0.3s;
                        }

                        .btn-primary {
                            background-color: #0066ff;
                            color: white;
                        }

                        .btn-primary:hover {
                            background-color: #0052cc;
                        }

                        .alert {
                            padding: 10px;
                            border-radius: 4px;
                            margin-bottom: 15px;
                            text-align: center;
                        }

                        .alert-danger {
                            background-color: #ffe6e6;
                            border: 1px solid #ff9999;
                            color: #cc0000;
                        }

                        .alert-success {
                            background-color: #e6ffe6;
                            border: 1px solid #99ff99;
                            color: #006600;
                        }

                        .login-link {
                            text-align: center;
                            margin-top: 15px;
                            font-size: 14px;
                        }

                        .login-link a {
                            color: #0066ff;
                            text-decoration: none;
                        }

                        .login-link a:hover {
                            text-decoration: underline;
                        }
                        .texto{
                            text-align: center;
                            font-size: 18px;
                        }
                    </style>
                    <h1 class="text-white font-serif texto pb-6"> Cambiar contraseña</h1>

                    <div class="container">
                        <div class="header">
                            <div class="user-icon rounded-full"><img class="rounded-full" src="./assets/img/apple-icon.jpg" alt=""></div>
                        </div>
                        <form>
                            <div class="form-group">
                                <label for="current_password">Contraseña actual</label>
                                <input type="password" id="current_password" name="current_password" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="new_password">Nueva Contraseña</label>
                                <input type="password" id="new_password" name="new_password" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="confirm_password">Confirmar Contraseña</label>
                                <input type="password" id="confirm_password" name="confirm_password" required class="form-control">
                            </div>
                            <a type="submit" href="perfil.php" class="btn btn-primary">Guardar</a>
                        </form>

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