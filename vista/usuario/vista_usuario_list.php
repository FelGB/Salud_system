<!-- <link href="../../plantilla/plugins/DataTables/datatables.min.css" rel="stylesheet"> -->
<!-- aqui empieza dinamicamente -->
<!-- <script type="text/javascript" src="../../jss/usuario.js"></script> -->

<style>
    .test {
        position: relative;
        /* display:inline-block; */
    }



    /* .test .fa-circle-check {
  position: absolute;
  top: 0;
  right: 0;
} */

    .input-group-text {
        position: absolute;
        right: 0;
        top: 0;
        margin-top: 4px;
        margin-right: 4px;
    }
</style>
<!-- card  -->
<div class="col-md-12 ">

    <!-- buscador y boton -->
    <div class="row">
        <div class="col-8">
            <div class="card shadow-lg p-3 mb-0 bg-body-tertiary rounded">
                <div class="card-body ">
                    <div class="input-group input-group-lg">
                        <span class="input-group-text" id="inputGroup-sizing-lg"><i class="fa-solid fa-magnifying-glass" style="color: #FFD43B;"></i></span>
                        <input id="global_filter" placeholder="Ingresa dato a buscar" type="text" class="form-control global_filter" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                    </div>

                </div>

            </div>

        </div>
        <!-- boton -->
        <div class="col-4">
            <div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                <div class="card-body ">

                    <div class="d-grid gap-2 mb-0 ">

                        <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#staticBackdrop">Nuevo Usuario</button>



                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- buscador y boton fin-->




    <div class="card h-100 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
        <!-- card header  -->
        <div class="card-header">
            <h4 class="mb-0">Contenido del Usuario </h4>
        </div>

        <!-- table  -->
        <!-- <script src="../../jss/usuario.js?rev="></script> -->
        <!-- <php echo time();> -->
        <script src="../../jss/usuario.js"></script>
        <div class="card-body ">
            <h6 class="card-text">Contenido del usuario Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit deleniti eaque omnis, minus blanditiis atque tempore maiores, similique repudiandae modi vitae est minima sunt pariatur temporibus quo. Beatae, officiis sunt.</h6>
            <!-- empieza contenido  -->
            <table id="tabla_usuario" class=" display nowrap dataTable dtr-inline collapsed" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Estatus</th>
                        <th>Nombre</th>
                        <th>Rol</th>
                        <th>Acccion</th>
                        <th>Rol</th>
                        <th>Conteo</th>
                        <th>Altas y Bajas</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Sexo</th>
                        <th>Rol</th>
                        <th>Estatus</th>
                        <th>Rol</th>
                        <th>Conteo</th>
                        <th>Altas y Bajas</th>
                        <th>Editar</th>
                    </tr>
                </tfoot>
            </table>

            <!-- termina contenido  -->

        </div>


    </div>
</div>
<!-- aqui termina dinamicamente -->
<!-- <script src="../../plantilla/plugins/DataTables/datatables.min.js"></script> -->



<!-- MODAL INICIO-->

<!-- <button type="button" class="btn btn-primary" >
        Launch static backdrop modal
        </button> -->

<!-- Modal -->
<div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header bg-primary border border-info border-start-0 rounded-end ">
                <h1 class="modal-title fs-5 text-light" id="staticBackdropLabel">Registrar Nuevo Usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="form" autocomplete="false" onsubmit="return false">
                <div class="modal-body">

                    <div class="row">



                        <div class="col-12">

                            <label class="form-label">Nombre Usuario</label>
                            <div class="test">
                                <input id="nombre_inp" name="nombre_inp" class="form-control border border-primary border-start-1 rounded-end " type="text" placeholder="Ingresa el nombre" aria-label=".form-control-lg example">
                                <label id="ocultar_nombre_alert"></label>
                                <div id="romoveclassid_nombre" class="input-group-text bg-white">
                                    <i class="fa-solid fa-circle-check text-success"></i>
                                </div>
                                <input type="text" id="verify_nombre" hidden>
                            </div>
                            <!-- <br> -->
                            <label class="form-label">Correo Electronico</label>
                            <div class="test">
                                <input id="correo_electronico" name="correo_electronico" class="form-control border border-primary border-start-1 rounded-end" type="text" placeholder="Ingresa tu correo" aria-label=".form-control-lg example">
                                <label id="ocultar"></label>
                                <div id="romoveclassid" class="input-group-text bg-white">
                                    <i class="fa-solid fa-circle-check text-success"></i>
                                </div>
                                <input type="text" id="verify_correo" hidden>
                            </div>
                            <!-- <br> -->

                            <label class="form-label">Numero de Telefono</label>
                            <div class="test">
                                <input id="num_telefono" name="num_telefono" class="form-control border border-primary border-start-1 rounded-end" type="number" placeholder="Ingresa tu Num.Telefono " aria-label=".form-control-lg example">
                                <label id="ocultar_num"></label>
                                <div id="romoveclassid_num" class="input-group-text bg-white">
                                    <i class="fa-solid fa-circle-check text-success"></i>
                                </div>
                                <input type="text" id="verify_telefono" hidden>
                            </div>

                            <!-- <br> -->

                            <label class="form-label">Selecciona el Genero</label>
                            <div class="test">
                                <select id="genero" name="genero" class="form-select border border-primary border-start-1 rounded-end ">
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>
                                <label id="ocultar_genero"></label>
                                <div id="romoveclassid_select" class="input-group-text bg-white">
                                    <i class="fa-solid fa-circle-check text-success"></i>
                                </div>
                            </div>

                            <label class="form-label">Ingresa Contrase&ntildea</label>
                            <div class="test">
                                <input id="pass1" name="pass1" class="form-control border border-primary border-start-1 rounded-end" type="password" placeholder="Ingresa Contraseña" aria-label=".form-control-lg example">
                                <label id="ocultar_pass"></label>
                                <div id="romoveclassid_pass" class="input-group-text bg-white">
                                    <i class="fa-solid fa-circle-check text-success"></i>
                                </div>
                                <input type="text" id="verify_pass1" hidden>
                            </div>

                            <!-- <br> -->
                            <label class="form-label">Repite Contrase&ntildea</label>
                            <div class="test">
                                <input id="pass2" name="pass2" class="form-control border border-primary border-start-1 rounded-end" type="password" placeholder="Repite Contraseña" aria-label=".form-control-lg example">
                                <label id="ocultar_pass_match_alert"></label>
                                <div id="romoveclassid_pass_match" class="input-group-text bg-white">
                                    <i class="fa-solid fa-circle-check text-success"></i>
                                </div>
                                <input type="text" id="verify_pass2" hidden>
                            </div>
                            <!-- <br> -->
                            <div class="test">
                                <label class="form-label">Selecciona </label>
                                <select class="form-select border border-primary border-start-1 rounded-end" id="normalize" name="normalize" data-placeholder="Selecciona un rol">
                                </select>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button class="btn btn-primary" type="submit" onclick="cargar()">Registrar</button>
                </div>



        </div>
        </form>
    </div>
</div>





<!-- MODAL FIN -->


<!-- Modal EDITAR USU-->
<div class="modal fade " id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel2" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header bg-primary  border border-info border-start-0 rounded-end ">
                <h1 class="modal-title fs-5 text-light" id="staticBackdropLabel2" type="text">Editar Usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="form2" autocomplete="false" onsubmit="return false">
                <div class="modal-body">

                    <div class="row">



                        <div class="col-12">
                            <h1>Editar</h1>

                            <label class="form-label">Usuario ID:</label>
                            <input id="id_inp_edit" name="id_inp_edit" class="form-control border border-primary border-start-1 rounded-end " type="text" placeholder="Ingresa el nombre" aria-label=".form-control-lg example" disabled readonly>
                            <br>

                            <label class="form-label">Nombre Usuario</label>
                            <input id="nombre_inp_edit" name="nombre_inp_edit" class="form-control border border-primary border-start-1 rounded-end " type="text" placeholder="Ingresa el nombre" aria-label=".form-control-lg example">
                            <br>

                            <!-- <label class="form-label" >Correo Electronico</label>    
                                            <input id="nombre_inp_edit" name="nombre_inp_edit" class="form-control border border-primary border-start-1 rounded-end " type="text" placeholder="Ingresa el nombre" aria-label=".form-control-lg example">
                                            <br> -->

                            <label class="form-label">Selecciona el Genero</label>
                            <select id="genero_edit" name="genero_edit" class="form-select border border-primary border-start-1 rounded-end ">
                                <option value="M">Masculino</option>
                                <option value="F">Femenino</option>
                            </select>
                            <!-- <br>
                                            <label  class="form-label" >Ingresa Contrase&ntildea</label>
                                            <input id="pass1_edit" name="pass1_edit" class="form-control border border-primary border-start-1 rounded-end" type="password" placeholder="Ingresa Contraseña" aria-label=".form-control-lg example">
                                            <br>
                                            <label  class="form-label">Repite Contrase&ntildea</label>
                                            <input id="pass2_edit" name="pass2_edit" class="form-control border border-primary border-start-1 rounded-end" type="password" placeholder="Repite Contraseña" aria-label=".form-control-lg example"> -->

                            <br>
                            <label class="form-label">Selecciona </label>


                            <select class="form-select border border-primary border-start-1 rounded-end" aria-label="Default select example" id="normalize_edit_2" name="normalize_edit_2">
                                <option selected>Open this select menu</option>


                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button class="btn btn-primary" type="submit" onclick="modificarUsuario()">Editar</button>
                </div>



        </div>
        </form>
    </div>
</div>


<!-- MODAL FIN EDITAR USU -->






<style>
    div.halfOpacity {
        opacity: 0.6 !important;


    }
</style>



<!-- <script src="../../plantilla/plugins/jquery/jquery.slim.min.js"></script>s -->

<script>
    $(document).ready(function() {


        console.log(location.href);
        listar_usuario();
        datos_Combo();



    });







    var datos_Combo = async () => {
        const res = await fetch('http://localhost:8080/admindos/controlador/usuario/controlador_combo_listar.php');
        const data = await res.json();

        // console.log(data);
        // console.log(data[0].rol);
        // console.log(data[0].id);
        // console.log(data[0].result.rol_id);

        var cadena = "";

        if (data) {
            for (var i = 0; i < data.length; i++) {
                cadena +=
                    "<option value='" + data[i].id + "'>" + data[i].rol + "</option>";
            }
            $("#normalize").html(cadena);
            $("#normalize_edit_2").html(cadena);
        } else {

            cadena += "<option >SIN DATOS</option>";

        }
        // $('#normalize').selectize();

    }



    //     hello = () => {
    //   return "Hello World!";
    // }


    var registrar_usuario = () => {

        var usu = $("#nombre_inp").val();
        var contra = $("#pass1").val();
        var contra2 = $("#pass2").val();
        var sexo = $("#genero").val();
        var rol = $("#normalize").val();

        // datos correctos
        var verify_correo = $("#verify_correo").val();
        var verify_telefono = $("#verify_telefono").val();
        var verify_pass1 = $("#verify_pass1").val();
        var verify_pass2 = $("#verify_pass2").val();
        var verify_nombre = $('#verify_nombre').val();



        if (usu.length === 0 || contra.length === 0 || contra2.length === 0 || sexo.length == 0 || rol.lenght == 0) {
            return Swal.fire("Llena los campos vacios", "", "warning");

        } else if (contra != contra2) {
            return Swal.fire("Las contrasenas no coinciden", "", "warning");


        } else if (verify_correo === "INCORRECTO" || verify_telefono === "INCORRECTO" || verify_pass1 === "INCORRECTO" || verify_pass2 === "INCORRECTO" || verify_nombre === "INCORRECTO") {

            return Swal.fire("Llena correctamente los campos en rojo", "", "warning");


        } else {
            enviar_form();

        }



    }


    var enviar_data = () => {

        let form = document.getElementById('form');

        form.addEventListener('submit', function(e) {

            // e.preventDefault();

            let payload = new FormData(form);

            console.log([payload]);

            fetch('http://localhost:8080/admindos/controlador/usuario/controlador_usuario_registro.php', {
                    method: 'POST',
                    body: payload,
                    // headers: {"Content-type": "application/json; charset=UTF-8"}
                })
                .then(res => res.text())
                .then(res => {
                    console.log(res)

                    if (res == "1") {

                        $("#staticBackdrop").modal('hide');
                        table.ajax.reload();

                        Swal.fire({
                            position: "top-end",
                            icon: "success",
                            title: "El usuario se ha registrado correctamente",
                            showConfirmButton: false,
                            timer: 2000
                        });



                    } else if (res == "2") {
                        // return Swal.fire("Usuario","Intente con otro diferente","warning");

                        Swal.fire("El usuario ya Existe", "Intente con otro diferente", "warning");




                    }

                })
                .catch((error) => console.error('Error:', error))



        })

    }



    const enviar_form = async () => {

        var usu_e = $("#nombre_inp").val();
        var contra_e = $("#pass1").val();
        var contra2_e = $("#pass2").val();
        var sexo_e = $("#genero").val();
        var rol_e = $("#normalize").val();
        var telefono_e = $("#num_telefono").val();
        var correo_e = $("#correo_electronico").val();


        let arr = [{
            usuario: usu_e,
            contra: contra_e,
            sexo: sexo_e,
            rol: rol_e,
            telefono: telefono_e,
            correo: correo_e
        }];


        console.log(arr);

        const respuesta = await fetch('http://localhost:8080/admindos/controlador/usuario/controlador_usuario_registro.php',

            {
                method: 'POST',
                header: {

                    'Content-Type': 'application/json; charset=utf-8'

                },
                body: JSON.stringify(arr)



            })


        var data = await respuesta.json();
        // console.log(data);

        var resss = await data;
        console.log(resss);

        if (resss == 2) {
            // return Swal.fire("Usuario","Intente con otro diferente","warning");

            Swal.fire("El usuario ya Existe", "Intente con otro diferente", "warning");
        } else if (resss == 1) {

            $("#staticBackdrop").modal('hide');
            table.ajax.reload();

            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "El usuario se ha registrado correctamente",
                showConfirmButton: false,
                timer: 2000
            });



        }



    }



    cargar = () => {

        registrar_usuario();



    }



    // .then(res => res.text())
    // .then(res => console.log(res))
    // .catch((error) => console.error('Error:', error))  
</script>

<script>
    $('#romoveclassid').hide();
    $('#romoveclassid_num').hide();
    $('#romoveclassid_select').hide();
    $('#romoveclassid_pass').hide();
    $('#romoveclassid_pass_match').hide();
    $('#romoveclassid_nombre').hide();
    $("#genero").removeClass("border-danger").addClass("border-success border-3 rounded-pill");

    const validate_numberphone = (number) => {
        return number.match(
            /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im
        );

    }


    const validateEmail = (email) => {
        return email.match(
            /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        );
    };

    const validatePassword = (pass) => {
        // var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;
        // return re.match(pass);
        return pass.search(

            /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/
        );
    };

    const validate = () => {
        const $result = $('#ocultar');
        const email = $('#correo_electronico').val();
        const email2 = $('#correo_electronico');
        const quitardiv = $('#romoveclassid');
        $result.text('');

        if (validateEmail(email)) {
            // $result.text(email + ' is valid.');
            $result.css('color', 'green');
            $("#correo_electronico").removeClass("border-danger").addClass("border-success border-3 rounded-pill");
            // email2.css('border', '3px solid');
            quitardiv.show();
            $("#verify_correo").val("CORRECTO");

        } else {

            $result.text(email + ' no es valido.');
            $result.css('color', 'red');
            $("#correo_electronico").removeClass("border-primary rounded-pill").addClass("border-danger border-3");
            // email2.css('border', '3px solid');
            quitardiv.hide();
            $("#verify_correo").val("INCORRECTO");
        }
        return false;
    }
    $('#correo_electronico').on('input', validate);

    const validate_num = () => {
        const $result = $('#ocultar_num');
        const num = $('#num_telefono').val();
        // const email2 = $('#num_telefono');
        const quitardivs = $('#romoveclassid_num');
        $result.text('');

        if (validate_numberphone(num)) {
            // $result.text(email + ' is valid.');
            $result.css('color', 'green');
            $("#num_telefono").removeClass("border-danger").addClass("border-success border-3 rounded-pill");
            // email2.css('border', '3px solid');
            quitardivs.show();
            $("#verify_telefono").val("CORRECTO");

        } else {

            $result.text(num + ' no es valido.');
            $result.css('color', 'red');
            $("#num_telefono").removeClass("border-primary rounded-pill").addClass("border-danger border-3");
            // email2.css('border', '3px solid');
            quitardivs.hide();
            $("#verify_telefono").val("INCORRECTO");
        }
        return false;
    }
    $('#num_telefono').on('input', validate_num);

    const validate_select = () => {
        const $result_genero = $('#ocultar_genero');
        const genero = $('#genero').val();
        const quitardivss = $('#romoveclassid_select');
        $result_genero.text('');



        if (genero === "F" || genero === "M") {
            // $result.text(email + ' is valid.');
            $result_genero.css('color', 'green');
            $("#genero").removeClass("border-danger").addClass("border-success border-3 rounded-pill");
            // email2.css('border', '3px solid');
            quitardivss.show();

        } else {

            $result_genero.text(genero + ' no es valido.');
            $result_genero.css('color', 'red');
            $("#genero").removeClass("border-primary rounded-pill").addClass("border-danger border-3");
            // email2.css('border', '3px solid');
            quitardivss.hide();
        }
        return false;
    }
    $('#genero').on('input', validate_select);

    const validate_pass = () => {
        const $result_pass = $('#ocultar_pass');
        const pass_one = $('#pass1').val();
        const quitardiv_pass = $('#romoveclassid_pass');
        $result_pass.text('');



        if (pass_one.length <= 7) {
            $result_pass.text('La contrasena debe tener al menos 8 caracteres');
            $result_pass.css('color', 'red');
            quitardiv_pass.hide();
            $("#verify_pass1").val("INCORRECTO");

            $("#pass1").removeClass("border-primary rounded-pill ").addClass("border-danger border-3");
        } else if (pass_one.search(/[0-9]/) < 0) {
            // $result_pass.text('La contrasena debe tener al menos 1 simbolo');
            // $result_pass.text('La contrasena debe tener una letra mayuscula');
            // $result_pass.text('La contrasena debe tener una letra minuscula');

            $result_pass.text('La contrasena debe tener un numero');
            $result_pass.css('color', 'red');
            $("#pass1").addClass("border-danger border-3");
            quitardiv_pass.hide();
            $("#verify_pass1").val("INCORRECTO");


        } else if (pass_one.search(/[a-z]/) < 0) {

            $result_pass.text('La contrasena debe tener al menos 1 letra minuscula');
            $result_pass.css('color', 'red');
            quitardiv_pass.hide();
            $("#pass1").removeClass("border-primary rounded-pill ").addClass("border-danger border-3");
            $("#verify_pass1").val("INCORRECTO");
            // ("#pass1").removeClass("border-primary rounded-pill").addClass("border-danger border-3");

        } else if (pass_one.search(/[A-Z]/) < 0) {

            $result_pass.text('La contrasena debe tener al menos 1 letra Mayuscula');
            $result_pass.css('color', 'red');
            quitardiv_pass.hide();
            $("#pass1").addClass("border-danger border-3");
            $("#verify_pass1").val("INCORRECTO");


        } else {

            $result_pass.text('');
            $("#pass1").removeClass("border-danger").addClass("border-success rounded-pill border-3");
            quitardiv_pass.show();
            $("#verify_pass1").val("CORRECTO");

        }
    }
    $('#pass1').on('input', validate_pass);


    const match_pss = () => {
        const contra = $("#pass1").val();
        const contra2 = $("#pass2").val();
        const quitardiv_pass = $('#romoveclassid_pass_match');
        const result_match = $('#ocultar_pass_match_alert');
        result_match.text('');

        if (contra != contra2) {
            result_match.text('Las comtrasenas no coinciden');
            result_match.css('color', 'red');
            $("#pass2").removeClass("border-primary rounded-pill ").addClass("border-danger border-3");
            $('#romoveclassid_pass_match').hide();
            $("#verify_pass2").val("INCORRECTO");

        } else {
            $('#romoveclassid_pass_match').show();
            $("#pass2").removeClass("border-danger").addClass("border-success rounded-pill border-3");
            $("#verify_pass2").val("CORRECTO");

        }


    }

    $('#pass2').on('input', match_pss);


    const verify_nombre = () => {

        const nombre = $("#nombre_inp").val();
        const quitarlabel = $("#ocultar_nombre_alert");
        // const verify_nombre = $("#verify_nombre");

        quitarlabel.text('');

        if (nombre.length <= 2) {
            $("#nombre_inp").removeClass("border-primary rounded-pill").addClass("border-danger border-3");
            quitarlabel.text('El nombre debe tener al menos 3 caracteres');
            quitarlabel.css('color', 'red');
            $('#romoveclassid_nombre').hide();

            $('#verify_nombre').val('INCORRECTO');

        } else {
            $("#nombre_inp").removeClass("border-danger").addClass("border-success rounded-pill border-3");
            $('#romoveclassid_nombre').show();
            $('#verify_nombre').val('CORRECTO');

        }

    }
    $('#nombre_inp').on('input', verify_nombre);
</script>