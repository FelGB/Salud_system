<?php


session_start();
if(isset($_SESSION['S_IDUSUARIO'])){

    header('Location: ../vista/index.php');
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    
    <!-- ajax -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Scripts -->
</head>
<body>


  
<div class="container-xxl ">

<div class=" d-flex min-vh-100 justify-content-center align-items-center">
<div  class="col ">

<div  class="col col-lg-12">
          <!--card iniciio  -->

            <div class="card mb-3 " style=" background-color: transparent;">
                <div class="row g-0">
                        <div class="col-md-4">
                            <!-- <img   class="img-fluid rounded-start layout" alt="..."> -->
                            <div class="img">
                                <img alt="avatar" src="../images/login.jpg" width="100%" >
                            </div>
                            


                        </div>

                    <div class="col-md-8">
                        <div class="card-header text-center text-white fs-1">
                            Iniciar Sesi&oacute;n

                        </div>

                        <!-- <form action="POST"> -->

                            <div class="card-body">
                 
                                <label for="exampleFormControlInput1" class="form-label text-white ">Usuario</label>
                                <input type="text" name="correo" class="form-control form-control-lg" id="txt_usu" autocomplete="new-password" >
                                <br>

                                <label for="inputPassword5" class="form-label text-white">Contrase&ntilde;a</label>
                                <input type="password"  name="contrasena" id="txt_con" class="form-control form-control-lg" aria-describedby="passwordHelpBlock">

                                <br>

                                <input onclick="VerificarUsuario();" class="btn btn-primary" value="Iniciar Sesion" >

                         <!-- </form> -->

                                <div class="form-floating mt-3 color ">
                                    <div class="row">
                                    <div class="col">
                                        <a href="/crear">Crear Cuenta</a>

                                    </div>

                                    <div class="col text-end">
                                        <a href="../Login/forgetpass.php">Olvidaste tu Contrasena?</a>

                                    </div>

                                    </div>
                                    

                                    
                                </div>

                               
                        
                      </div>

                            

                        </div>
                </div>
            </div>
    </div>

          <!-- card fin -->

        </div>

    </div>

   
    </div>   
        



</div>
    
</body>
</html>




    

<style>

    body{
        background-color:black;
    }
</style>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Scripts -->

<script src="../Login/SweetAlert2/sweetalert2.js"></script>

<script>
    console.log("hello");
    txt_usu.focus();
</script>

<script src="../jss/usuario.js"></script>