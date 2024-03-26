<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Scripts -->


</head>

<body>


    <div class="container-xxl ">

        <div class=" d-flex min-vh-100 justify-content-center align-items-center">
            <div class="col ">

                <div class="col col-lg-12">
                    <!--card iniciio  -->

                    <div class="card mb-3 " style=" background-color: transparent;">

                        <div class="col-md-12">
                            <div class="card-header text-center text-white fs-1">
                                Recuperar Cuenta

                            </div>

                            <!-- <form action="POST"> -->

                            <div class="card-body">

                                <label for="exampleFormControlInput1" class="form-label text-white ">Escribe tu correo</label>
                                <input type="mail" name="correo_text" class="form-control form-control-lg" id="correo_text">
                                <br>



                                <div id="botones">
                                    <div id="ocultar_boton">
                                        <input onclick="Restablecer_Constra()" class="btn btn-primary " value="Recuperar" readonly>

                                    </div>
                                    <div id="ocultar_loading">
                                        <button class="btn btn-primary" type="button" disabled>
                                            <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                                            <span role="status">Cargando...</span>
                                        </button>

                                    </div>


                                </div>




                                <!-- </form> -->

                                <div class="form-floating mt-3 color ">
                                    <div class="row">
                                        <div class="col">
                                            <a href="../Login/login.php">Ir a login</a>

                                        </div>

                                        <div class="col text-end">
                                            <a href="">Crear Cuenta</a>

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
    body {
        background-color: black;

    }
</style>

<!-- Scripts -->
<script src="../js/jquery.min.js"></script>
<script src="../Login/SweetAlert2/sweetalert2.js"></script>
<script src="../js/jquery.min.js"></script>

<script>
    $("#ocultar_loading").hide();
    // $("#ocultar_boton").hide();



    Restablecer_Constra = async () => {
        // return  Swal.fire("Llena los campos vacios","","warning");
        $("#ocultar_loading").show();
        $("#ocultar_boton").hide();

        var correo = $("#correo_text").val();

        if (correo.length == 0) {
            Swal.fire("Llena el campo de correo", "", "warning");
            $("#ocultar_boton").show();
            $("#ocultar_loading").hide();
        }

        var Caracteres = "abcdefghijkl@%.mnopqrstuvwxyzABCD@%.EFGHIJKLMNOPQRSTUVWXYZ1234567890@%.";
        var contrasena = "";
        for (var i = 0; i < 10; i++) {
            contrasena += Caracteres.charAt(Math.floor(Math.random() * Caracteres.length));
        }
        let arr_r_cuenta = [{
            correo: correo,
            pass: contrasena
        }];


        // console.log(arr_r_cuenta);

        const respuesta = await fetch('http://localhost:8080/admindos/controlador/usuario/controlador_recuperar_cuenta.php',

            {
                method: 'POST',
                header: {

                    'Content-Type': 'application/json; charset=utf-8'

                },
                body: JSON.stringify(arr_r_cuenta)



            })

        var data = await respuesta.json();
        // console.log(data);
        var socios = await data;

        console.log(socios);




        if (socios === 1) {
            Swal.fire("La contrasena se ha cambiado correctamente", "Revise su curreo <strong> " + correo + " </strong>", "success");
            $("#ocultar_loading").hide();
        } else if (socios === 2) {
            Swal.fire("El correo proporcionado no existe en el sistema", "Revise que este escrito correctamente <strong> " + correo + " </strong>", "warning");
            $("#ocultar_boton").show();
            $("#ocultar_loading").hide();
        } else {
            Swal.fire("Erro al cambiar contrasena", "contacte al administrador", "error");
            $("#ocultar_boton").show();
            $("#ocultar_loading").hide();
        }
    }
</script>