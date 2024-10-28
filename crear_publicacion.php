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
    <title>Crear Publicacion</title>
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
                <a class="text-black hover:text-blue-500 pt-2 text-xs uppercase py-3 font-bold block" href="cambiar_contrasena.php">
                  <i class='bx bx-lock-alt opacity-75 mr-2 text-sm'></i>cambiar contraseña</a>
              </div>
              <div class="">
                <a class="text-blue-500 hover:text-blue-500 pt-2 text-xs uppercase py-3 font-bold block" href="crear_publicacion.php">
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
                    <a class="text-white text-sm uppercase hidden pt-4 lg:inline-block font-semibold" href="./index.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
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
                <div class=" w-full">
                <p>Crear Publicacion</p>

                </div>
            </div>

            <style>
                .gradient {
                    background: linear-gradient(to right, #0066ff, #00ccff);
                    margin-top: 0%;
                    background-size: cover;
                }
            </style>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f2f5;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        p {
            color: white;
            margin-top: 0;
            margin-bottom: 20px;
            text-align: center;
            font-family: serif;
            font-size: 18px;
        }
        h2 {
            color: #1a73e8;
            margin-top: 0;
            margin-bottom: 20px;
            text-align: center;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }
        textarea {
            height: 100px;
            resize: vertical;
        }
        .btn {
          /* alinear al centro */
            display: block;
            text-align: center;
            margin: 0 auto;
            background-color: #1a73e8;
            color: white;
            width:20%;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #1557b0;
        }
        .photo-upload {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }
        .photo-preview {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
            border: 3px solid white;
        }
        .cover-preview {
            width: 100%;
            height: 150px;
            object-fit: cover;
            margin-bottom: 10px;
            border-radius: 8px;
        }
        .file-input {
            display: none;
        }
        .file-label {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .file-label:hover {
            background-color: #1557b0;
        }
        .file-name {
            margin-top: 5px;
            font-size: 14px;
            color: #666;
        }
        .profile-section {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .profile-section h2 {
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }
        .botn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            border: none;
            cursor: pointer;
            font-size: 1rem;
        }
        .botn:hover {
            background-color: #0056b3;
        }
        .cv-upload {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .cv-upload input[type="file"] {
            display: none;
        }
        .cv-filename {
            font-style: italic;
            color: #666;
        }
    </style>

    <div class="container">
        <form enctype="multipart/form-data">
            <div class="photo-upload">
                <img id="profile-preview" class="photo-preview" src="https://via.placeholder.com/200" alt="Vista previa de foto de perfil">
                <label for="profile-photo" class="file-label">Seleccionar foto de perfil</label>
                <input type="file" id="profile-photo" name="profile-photo" accept="image/*" class="file-input">
            </div>
            <div class="photo-upload">
                <img id="cover-preview" class="cover-preview" src="https://via.placeholder.com/800x150" alt="Vista previa de foto de portada">
                <label for="cover-photo" class="file-label">Seleccionar foto de portada</label>
                <input type="file" id="cover-photo" name="cover-photo" accept="image/*" class="file-input">
            </div>
            <div class="form-group">
                <label for="name">Nombre completo:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Teléfono:</label>
                <input type="text" id="phone" name="phone">
            </div>
            <div class="profile-section">
            <h2>Currículum Vitae</h2>
            <div class="cv-upload">
                <input type="file" id="cv-file" accept=".pdf,.doc,.docx">
                <label for="cv-file" class="botn">Subir CV</label>
                <span class="cv-filename" id="cv-filename">Ningún archivo seleccionado</span>
            </div>
        </div>
            <div class="form-group">
                <label for="bio">Biografía:</label>
                <textarea id="bio" name="bio"></textarea>
            </div>
            <div class="form-group">
                <label for="skills">Habilidades:</label>
                <input type="text" id="skills" name="skills">
            </div>
            <div class="form-group">
                <label for="experience">Experiencia:</label>
                <textarea id="experience" name="experience"></textarea>
            </div>
            <div class="form-group">
                <label for="education">Educación:</label>
                <textarea id="education" name="education"></textarea>
            </div>
            <div class="form-group">
                <label for="projects">Proyectos destacados:</label>
                <textarea id="projects" name="projects"></textarea>
            </div>
            <a href="index.php" type="submit" class="btn">Crear Perfil</a>
        </form>
    </div>
    <script>
        document.getElementById('cv-file').addEventListener('change', function(e) {
            var fileName = e.target.files[0].name;
            document.getElementById('cv-filename').textContent = fileName;
        });
    </script>

    <script>
        function previewImage(input, previewId) {
            const preview = document.getElementById(previewId);
            const file = input.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        }

        document.getElementById('profile-photo').addEventListener('change', function() {
            previewImage(this, 'profile-preview');
        });

        document.getElementById('cover-photo').addEventListener('change', function() {
            previewImage(this, 'cover-preview');
        });

        document.getElementById('cv').addEventListener('change', function() {
            const fileName = this.files[0] ? this.files[0].name : 'Ningún archivo seleccionado';
            document.getElementById('cv-file-name').textContent = fileName;
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