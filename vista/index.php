<?php
session_start();

if( !isset($_SESSION['S_IDUSUARIO'])){
  session_destroy();

  header('Location: ../Login/login.php');
  


}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico">


<!-- Libs CSS -->
<link href="../css/bootstrap-icons.css" rel="stylesheet">
<link href="../css/materialdesignicons.min.css" rel="stylesheet">
<link href="../css/simplebar.min.css" rel="stylesheet">
<!-- datatables -->
<link href="../plantilla/plugins/selectize/selectize.bootstrap5.css" rel="stylesheet">

<!-- <link href="DataTables/datatables.min.css" rel="stylesheet"> -->
<!-- <link href="../plantilla/plugins/DataTables/datatables.min.css" rel="stylesheet"> -->
      <!-- <link href="../plantilla/plugins/DTables/datatables.min.css" rel="stylesheet"> -->
      <!-- <link href="../plantilla/plugins/DTables/DataTables-2.0.0/css/dataTables.bootstrap5.min.css" rel="stylesheet"> -->
      <!-- <link href="../plantilla/plugins/DTables/datatables.css" rel="stylesheet"> -->


<!-- <link href="../plantilla/plugins/Select2/select2-bootstrap-5-theme.rtl.css" rel="stylesheet"> -->

<!-- font awesone -->
<script src="https://kit.fontawesome.com/c6ec984a96.js" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Scripts -->

<!-- Theme CSS -->
<link rel="stylesheet" href="../css/theme.min.css">
    <title>Project | Dash UI - Responsive Bootstrap 5 Admin Dashboard</title>
</head>

<body>
<input type="text" id="usuario_session" value="<?php echo $_SESSION['S_USER']?>" hidden>
<input type="text" id="rol_session" value="<?php echo $_SESSION['S_ROL']?>" hidden>
<input type="text" id="id_usuario_session" value="<?php echo $_SESSION['S_IDUSUARIO'] ?>" hidden>
                
    <main id="main-wrapper" class="main-wrapper">

        <div class="header">
  <!-- navbar -->
  <div class="navbar-custom navbar navbar-expand-lg">
    <div class="container-fluid px-0">
    <a class="navbar-brand d-block d-md-none" href="index.html">
      <img src="../images/logo-2.svg" alt="Image">
  </a>



    <a id="nav-toggle" href="#!" class="ms-auto ms-md-0 me-0 me-lg-3 ">
      <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-text-indent-left text-muted" viewBox="0 0 16 16">
        <path d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm.646 2.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L4.293 8 2.646 6.354a.5.5 0 0 1 0-.708zM7 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
      </svg></a>

    <div class="d-none d-md-none d-lg-block">
      <!-- Form -->
      <form action="#">


        <!-- <div class="input-group ">
          <input class="form-control rounded-3" type="search" value="" id="searchInput" placeholder="Search">
          <span class="input-group-append">
            <button class="btn  ms-n10 rounded-0 rounded-end" type="button">
              <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-search text-dark">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
              </svg>
            </button>
          </span>
        </div> -->
      </form>
    </div>
    <!--Navbar nav -->
    <ul class="navbar-nav navbar-right-wrap ms-lg-auto d-flex nav-top-wrap align-items-center ms-4 ms-lg-0">
      <a href="#" class="form-check form-switch theme-switch btn btn-ghost btn-icon rounded-circle mb-0 ">
        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
        <label class="form-check-label" for="flexSwitchCheckDefault"></label>

         </a>
        </li>

      <li class="dropdown stopevent ms-2">
        <a class="btn btn-ghost btn-icon rounded-circle" href="#!" role="button"
          id="dropdownNotification" data-bs-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          <i class="icon-xs" data-feather="bell"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"
          aria-labelledby="dropdownNotification">
          <div>
            <div class="border-bottom px-3 pt-2 pb-3 d-flex
              justify-content-between align-items-center">
              <p class="mb-0 text-dark fw-medium fs-4">Notifications</p>
              <a href="#!" class="text-muted">
                <span>
                  <i class="me-1 icon-xs" data-feather="settings"></i>
                </span>
              </a>
            </div>
            <div  data-simplebar style="height: 250px;">
            <!-- List group -->
            <ul class="list-group list-group-flush notification-list-scroll">
              <!-- List group item -->
              <li class="list-group-item bg-light">


                <a href="#!" class="text-muted">
                    <h5 class=" mb-1">Rishi Chopra</h5>
                    <p class="mb-0">
                      Mauris blandit erat id nunc blandit, ac eleifend dolor pretium.
                    </p>
                </a>



          </li>
             <!-- List group item -->
             <li class="list-group-item">


              <a href="#!" class="text-muted">
                  <h5 class=" mb-1">Neha Kannned</h5>
                  <p class="mb-0">
                    Proin at elit vel est condimentum elementum id in ante. Maecenas et sapien metus.
                  </p>
              </a>



        </li>
              <!-- List group item -->
              <li class="list-group-item">


                <a href="#!" class="text-muted">
                    <h5 class=" mb-1">Nirmala Chauhan</h5>
                    <p class="mb-0">
                      Morbi maximus urna lobortis elit sollicitudin sollicitudieget elit vel pretium.
                    </p>
                </a>



          </li>
              <!-- List group item -->
              <li class="list-group-item">


                    <a href="#!" class="text-muted">
                        <h5 class=" mb-1">Sina Ray</h5>
                        <p class="mb-0">
                          Sed aliquam augue sit amet mauris volutpat hendrerit sed nunc eu diam.
                        </p>
                    </a>



              </li>
            </ul>
            </div>
            <div class="border-top px-3 py-2 text-center">
              <a href="#!" class="text-inherit ">
                View all Notifications
              </a>
            </div>
          </div>
        </div>
      </li>
      <!-- List -->
      <li class="dropdown ms-2">
        <a class="rounded-circle" href="#!" role="button" id="dropdownUser"
          data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="avatar avatar-md avatar-indicators avatar-online">
            <img id="img_nav_change" alt="avatar" src="" class="rounded-circle">
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-end"
          aria-labelledby="dropdownUser">
          <div class="px-4 pb-0 pt-2">


            <div class="lh-1 ">
              <h5 class="mb-1"> <?php echo $_SESSION['S_USER']; ?></h5>
              <a href="#!" class="text-inherit fs-6">View my profile</a>
            </div>
            <div class=" dropdown-divider mt-3 mb-2"></div>
          </div>

          <ul class="list-unstyled">

            <li>
              <a class="dropdown-item d-flex align-items-center"
               onclick="cargar_contenido_editprofile('contenido_principal','usuario/vista_editar_perfil.php')">
                <i class="me-2 icon-xxs dropdown-item-icon" data-feather="user"> 
                </i>Editar Perfil
              </a>
            </li>
            <li>
              <a class="dropdown-item"
                href="#!">
                <i class="me-2 icon-xxs dropdown-item-icon"
                  data-feather="activity"></i>Activity Log
              </a>


            </li>


            <li>
              <a class="dropdown-item d-flex align-items-center" href="#!">

                  <i class="me-2 icon-xxs dropdown-item-icon"
                  data-feather="settings"></i>Settings
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="../controlador/usuario/controlador_cerrar_sesion.php">
                <i class="me-2 icon-xxs dropdown-item-icon"
                  data-feather="power"></i>Cerrar Sesion
              </a>
            </li>
          </ul>

        </div>
      </li>
    </ul>
    </div>
  </div>
</div>
        <!-- navbar vertical -->
        <div class="app-menu">
         <!-- Sidebar -->

 <div class="navbar-vertical navbar nav-dashboard">
     <div class="h-100" data-simplebar>
         <!-- Brand logo -->
         <a class="navbar-brand" href="index.html">
             <!-- <img src="../images/logo-2.svg" alt="dash ui - bootstrap 5 admin dashboard template"> -->
         </a>
         <!-- Navbar nav -->
         <ul class="navbar-nav flex-column" id="sideNavbar">

             <!-- Nav item -->
             <li class="nav-item">
                 <a class="nav-link has-arrow " href="#!"
                     data-bs-toggle="collapse" data-bs-target="#navDashboard" aria-expanded="false"
                     aria-controls="navDashboard">
                     <i data-feather="home" class="nav-icon me-2 icon-xxs" ></i>
                      Dashboard
                 </a>

                 <div id="navDashboard" class="collapse "
                     data-bs-parent="#sideNavbar">
                     <ul class="nav flex-column">
                        
                         <li class="nav-item">
                             <a class="nav-link  active "
                                 href="./index.html">
                                 Project </a>
                         </li>


                        



                     </ul>
                 </div>

             </li>


              <!-- Nav item -->
              <li class="nav-item">
                 <a class="nav-link has-arrow " href="#!"
                     data-bs-toggle="collapse" data-bs-target="#navDashboard2" aria-expanded="false"
                     aria-controls="navDashboard2">
                     <i data-feather="home" class="nav-icon me-2 icon-xxs" ></i>
                      Home
                 </a>

                 <div id="navDashboard2" class="collapse  "
                     data-bs-parent="#sideNavbar">
                     <ul class="nav flex-column">
                        
                         <li class="nav-item">
                             <a class="nav-link active " 
                             
                             onclick="cargar_contenido('contenido_principal','usuario/vista_usuario_list.php')">Something </a>
                         </li>


                        



                     </ul>
                 </div>

             </li>

             
 

            

             
         <!-- <div class="card bg-light shadow-none text-center mx-4 my-8">
            <div class="card-body py-6">
                <img src="../images/giftbox.png" alt="dash ui - admin dashboard template">
                <div class="mt-4">
                    <h5>More Free Dashboards</h5>
                    <p class="fs-6 mb-4">
                        Get More Free Dashboards
                    </p>
                    <a href="https://therichpost.com/" class="btn btn-secondary btn-sm">Free Dashboards</a>
                </div>
            </div>
        </div> -->

     </div>
    </div>

        </div>
        

        <!-- Page content -->
        <div id="app-content">

            <!-- Container fluid -->

            <div class="app-content-area" id="contenido_principal">


                <!-- aqui empieza dinamicamente -->

                



                <!-- card  -->
                <div class="col-md-12 ">
                            <div class="card h-100">
                                <!-- card header  -->
                                <div class="card-header">
                                    <h4 class="mb-0">Contenido Principal </h4>
                                   
                                    
                                </div>
                                <!-- table  -->
                                <div class="card-body "  >
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                                    
                                </div>
                            </div>
                </div>
                <!-- aqui termina dinamicamente -->

                
            </div>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Scripts -->
    <script>

     


      var idioma_espanol={
        select:{
          rows:"%d fila seleccionada"
        },
        "sProcessing": "Procesando...",
        "sLengthMenu": "Mostar _MENU_ registros",
        "sZeroRecords": "No se encontraroon resultados",
        "sEmptyTable": "Ning&uacute:n dato disponible en la tabla",
        "sInfo": "Registros del (_START_ al _END_) total de _TOTAL_ registros",
        "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix": "",
        "sSearch": "Buscar",
        "sUrl": "",
        "sInfoThousands": ",",
        "sLoadingRecords": "<b>No se encontraron datos</b>",
        "uPaginate": {

          "sFirts": "Primero",
          "sLast": "Ultimo",
          "sNext": "Siguiente",
          "sPrevious": "Anterior",

        },
        "oAria":{
          "sSortAscending": ": Activar para ordenar la culumna de manera ascendente",
          "sSortDescending":": Activar para ordenar la culumna de manera descendente",
        }

      }




        function cargar_contenido(contenedor,contenido){
            console.log("hola");
            $("#"+ contenedor).load(contenido);


        }

        function cargar_contenido_editprofile(contenedor,contenido){
            console.log("hola");
            $("#"+ contenedor).load(contenido);


        }

        
    </script>


<script src="../jss/usuario.js">
  
// console.log("hello from usuario.js");
// var s = listar_usuario();



// console.log(s);

// TraerDatos();

</script>



<script>
  TraerDatos();

</script>

    <!-- Libs JS -->
<script src="../js/jquery.min.js"></script>
<!-- <script src="../plantilla/plugins/jquery/jquery.slim.min.js"></script> -->
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/feather.min.js"></script>
<script src="../js/simplebar.min.js"></script>
<script src="../plantilla/plugins/selectize/selectize.min.js"></script>


<!-- Theme JS -->
<script src="../js/theme.min.js"></script>
<script src="../js/apexcharts.min.js"></script>
<script src="../js/chart.js"></script>

<!-- tablesjs -->

<!-- <script src="../Plugins/datatables.min.css"></script> -->

<!-- <script src="DataTables/datatables.min.js"></script> -->

<!-- <script src="../plantilla/plugins/DataTables/datatables.js"></script> -->
<script src="../plantilla/plugins/DTables/datatables.js"></script>
<!-- <script src="../plantilla/plugins/DTables/Responsive-3.0.0/js/responsive.bootstrap5.min.js"></script> -->

<script src="../plantilla/plugins/SweetAlert2/sweetalert2.js"></script>








</body>

</html>