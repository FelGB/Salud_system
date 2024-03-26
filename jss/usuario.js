function VerificarUsuario(){

    var usu = $("#txt_usu").val();
    var con = $("#txt_con").val();

    if(usu.length==0 || con.length==0){
        return Swal.fire("Llene los campos vacios","🙃","warning")

    }

    $.ajax({
        url:'../controlador/usuario/controlador_verificar_usuario.php',
        type:'POST',
        data:{
            user:usu,
            pass:con
        }
    }).done(function(resp){

        if(resp==0){
            Swal.fire("Usuario o Contrase\u00f1a Incorrecta","","error");

            Conteo_intentos_sesion(usu);
            



        }else{
            var data=JSON.parse(resp);
            console.log(data);
            

            if(data[0][4]==='INACTIVO'){
                return Swal.fire("El usuario " + data[0][1] + " se encuntra suspendido "," Comuniquese con el administrador ","warning");
            }
            if(data[0][7]==2){

                return Swal.fire("Su cuenta esta bloqueada ","Para ingresar reestablesca su contraseña","warning");

            }
            $.ajax({

                url:'../controlador/usuario/controlador_crear_sesion.php',
                type:'POST',
                data:{
                    idusuario:data[0][0],
                    user:data[0][1],
                    rol:data[0][5]
                }

            }).done(function(resp){
                location.reload();

            })

            

           

        }

    })

   
}

var table;
function listar_usuario(){


    // new DataTable('#example');
    

     table= $('#tabla_usuario').DataTable({


            "responsive": false,    
            "ordering":true,
            "paging": true,
            "searching": { "regex": false },
            "lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"] ],
            "pageLength": 10,
            "destroy":true,
            "async": false ,
            "processing": true,
            
            "ajax":{
                "url":"../controlador/usuario/controlador_usuario_listar.php",
                "type":"POST"
            },

            "columns":[
                {"data":"usu_id"},
                {"data":"usu_estatus",
                    render: function (data, type, row ) {
                        
                        if(data=='ACTIVO'){
                            return  "<h4><span class='badge text-bg-primary'>"+data+"</span></h4>";                   
                        }else{
                            return "<h4><span class='badge text-bg-danger'>"+data+"</span><h4>";                 
                        }

                        
                    },
                    
                },
                {"data":"usu_name"},
                {"data":"usu_sexo",
                 "visible": false
                    
                },
                {"data":"rol_id",
                "visible":false
                },
                {"data":"rol_nombre"},
                {"data":"conteo",
                "visible": false
                },  
                {"defaultContent":"",
                        render:function(data, type,row){
                        if(row.usu_estatus=='ACTIVO'){

                            return "<button type='button' class='desactivar btn btn-danger ' > BAJA <i class='fa-solid fa-arrow-down fa-lg'></i></button>"

                        }else if(row.usu_estatus=='INACTIVO'){
                            return  "<button type='button' class='activar btn btn-primary' > ALTA <i class='fa-solid fa-arrow-up fa-lg'></i></button>"

                        }
                    }

                },
                {"defaultContent":"",

                        render:function(data, type,row){

                            return "<button type='button' class='editar btn btn-primary 'data-bs-toggle='modal' data-bs-target='#staticBackdrop2' > EDITAR <i class='fa-solid fa-user-pen fa-lg'></i></button>"
            
                        }   
                }
              
            ],
            
            
            "language":idioma_espanol,
            select: true


         });

        //  table.column(3).visible(false); 
        document.getElementById("dt-search-0").style.display="none";
        // document.getElementsByClassName("dt-search").style.display="none";

        $('input.global_filter').on( 'keyup click', function () {
            filterGlobal();
        } );
        $('input.dt-search-0').on( 'keyup click', function () {
            filterColumn( $(this).parents('tr').attr('data-column') );
        });
    
    function filterGlobal() {
        $('#tabla_usuario').DataTable().search(
            $('#global_filter').val(),
        ).draw();


    }

    baja_usu(table);

    alta_usu(table);
    editar_usuario(table);



}

const baja_usu = (table)=>{

    $('#tabla_usuario').on('click','.desactivar', function(){

        var data = table.row($(this).parents('tr')).data();
        // alert(data.usu_id);
        console.log(data.usu_id);

        Swal.fire({
            title: "<h1> Estas seguro de dar baja a: </hi> <strong class='badge text-bg-primary text-wrap' >  " +data.usu_name + " </strong>" ,
            showDenyButton: false,
            showCancelButton: true,
            confirmButtonText: "Si, Modificar",
            cancelButtonText: "Cancelar",
            // denyButtonText: `Don't save`
          }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {

                baja_usu_by_p(data.usu_id, 'INACTIVO',data.usu_name);
                // Swal.fire("Saved!", "", "success");

            } else if (result.isDenied) {
              Swal.fire("Changes are not saved", "", "info");
            }
          });
    
    });


}

const alta_usu = (table)=>{

    $('#tabla_usuario').on('click','.activar', function(){

        var data = table.row($(this).parents('tr')).data();
        // alert(data.usu_id);
        // console.log(data.usu_id);

        Swal.fire({
            title: "<h1> Estas seguro de dar alta a: </hi> <strong class='badge text-bg-primary text-wrap' >  " +data.usu_name + " </strong>" ,
            showDenyButton: false,
            showCancelButton: true,
            confirmButtonText: "Si, Modificar",
            cancelButtonText: "Cancelar",
            // denyButtonText: `Don't save`
          }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {

                baja_usu_by_p(data.usu_id, 'ACTIVO',data.usu_name);
                // Swal.fire("Saved!", "", "success");

            } else if (result.isDenied) {
              Swal.fire("Changes are not saved", "", "info");
            }
          });
    
    });


}

const baja_usu_by_p=async(id_usuario, estatus, usu_name)=>{

    let arr = [{ usuario_id:id_usuario , estatus:estatus } ];

    const respuesta = await fetch('http://localhost:8080/admindos/controlador/usuario/controlador_usuario_baja_by_id.php',
            
                        {
                            method:'POST',
                            header:{

                                'Content-Type': 'application/json; charset=utf-8'

                            },
                            body: JSON.stringify(arr)

                            
                            
                        })
                        var data = await respuesta.text(); 
                        // console.log(data);

                        var resss = await data;
                        // console.log(resss);
                        if(resss==1){
                            // return Swal.fire("Usuario","Intente con otro diferente","warning");

                            Swal.fire({
                                position: "top-end",
                                icon: "success",
                                title: "El usuario  <strong class='badge text-bg-primary text-wrap' > " + usu_name + " </strong> se ha modificado correctamente",
                                showConfirmButton: false,
                                timer: 3000
                            });

                             table.ajax.reload();
                            }else if(resss==0){
                               
                                Swal.fire("Oops hubo un error","usuario no modificado","error");



                        }

}

const editar_usuario = (table)=>{

    $('#tabla_usuario').on('click','.editar', function(){

        var data = table.row($(this).parents('tr')).data();
        // alert(data.usu_id);
        console.log(data);

        $("#id_inp_edit").val(data.usu_id);
        $("#nombre_inp_edit").val(data.usu_name);
        $("#genero_edit").val(data.usu_sexo);
        $("#normalize_edit_2").val(data.rol_nombre);
        $("#staticBackdropLabel2").val(data.usu_name);
    
    });

        



}


    const modificarUsuario = ()=>{

        var usu = $("#nombre_inp_edit").val();  
        var sexo = $("#genero_edit").val();
        var rol = $("#normalize_edit_2").val();
        var id = $("#id_inp_edit").val();
       

        if(usu.length===0 || sexo.length==0 || rol.lenght==0){
            return Swal.fire("Llena los campos vacios","","warning");

        }else{
            // enviar_form();
            enviar_form_editar(usu,sexo,rol,id);
            // return Swal.fire("Datos listos para enviar","","warning");
            
            

        }


    }

  
    const enviar_form_editar=async(usu,sexo,rol,id)=>{

                let arr_editar= [{ usuario:usu ,sexo:sexo ,rol:rol, id:id} ];
           

                console.log(arr_editar);

         const respuesta = await fetch('http://localhost:8080/admindos/controlador/usuario/controlador_usuario_editar.php',
        
                    {
                        method:'POST',
                        header:{

                            'Content-Type': 'application/json; charset=utf-8'

                        },
                        body: JSON.stringify(arr_editar)

                        
                        
                    })
                    
                    var data = await respuesta.text(); 
                    // console.log(data);
                    var socios = await data;
                        console.log(socios);

                    if (socios==1){

                        $("#staticBackdrop2").modal('hide');
                        TraerDatos();

                           table.ajax.reload();

                                Swal.fire({
                                                position: "top-end",
                                                icon: "success",
                                                title: "El usuario  <strong class='badge text-bg-primary text-wrap' > " + usu + " </strong> se ha editado correctamente",
                                                showConfirmButton: false,
                                                timer: 3000
                                            });


                    }else if(socios==2){
                        Swal.fire({
                            position: "top-end",
                            icon: "success",
                            title: "El correctamente",
                            showConfirmButton: false,
                            timer: 3000
                        });


                    }


                    
                    
                    

                    }


 TraerDatos=async()=>{

    var usuario =$("#usuario_session").val();

    let arr_send= [{ usuario:usuario }];


     const respuesta = await fetch('http://localhost:8080/admindos/controlador/usuario/controlador_traerdatos_modificar.php',
        
                        {
                        method:'POST',
                        header:{

                            'Content-Type': 'application/json; charset=utf-8'

                        },
                        body: JSON.stringify(arr_send)

                        
                        
                    })

                    var data = await respuesta.json(); 
                    //  var data = await respuesta.text();
                    // console.log(data);
                    var re = await data;
                        console.log(re);
                        // console.log(re[0]['usu_name']);
                        // alert(re[0]['usu_sexo']);
                        $("#bd_pass").val(re[0]['usu_pass']);


                        if(re[0]['usu_sexo']==="M"){

                            // alert(re[0]['usu_sexo']);
                            // console.log(re[0]['usu_sexo']);  
                            $("#img_nav_change").attr("src","../images/avatar-14.jpg");

                        }else if((re[0]['usu_sexo']==="F")){
                            $("#img_nav_change").attr("src","../images/avatar-13.jpg");

                        }
                       

}

Cambiar_contra=()=>{

    var idusuario = $("#id_usuario_session").val();
    var contrabd = $("#bd_pass").val();
    var contra_actual= $("#contra_actual").val();
    var nueva_contra = $("#nueva_contra").val();
    var nueva_contra_repe = $("#nueva_contra_repe").val();

    if( contra_actual.length===0 || nueva_contra.lenght===0 || nueva_contra_repe===0){
        return Swal.fire("Llena los campos vacios","","warning");

    }else if (nueva_contra != nueva_contra_repe){
        return Swal.fire("Los campos de las contraseñas no coinciden","Verifique que coincidan","warning");

    }else{

        enviar_datos_change_pass(idusuario,contrabd,contra_actual,nueva_contra);
    }



}

enviar_datos_change_pass=async(idusuario,contrabd,contra_actual,nueva_contra)=>{

    let arr_editar_pass= [{ usuarioid:idusuario ,contrabd:contrabd ,contra_actual:contra_actual, nueva_contra:nueva_contra} ];

    const respuesta = await fetch('http://localhost:8080/admindos/controlador/usuario/controlador_change_pass.php',
        
                        {
                        method:'POST',
                        header:{

                            'Content-Type': 'application/json; charset=utf-8'

                        },
                        body: JSON.stringify(arr_editar_pass)

                        
                        
                    })

                    var data = await respuesta.json(); 
                    var res  = await data;
                    console.log(res);
                     if(res===1){

                        $("#staticBackdrop2_edit_pass").modal('hide');
                        Swal.fire({
                            position: "top-end",
                            icon: "success",
                            title: "La contraseña  <strong class='badge text-bg-primary text-wrap' > se ha editado correctamente </strong> ",
                            showConfirmButton: false,
                            timer: 3000
                        });
                         TraerDatos();


                     }else if(res===2){
                        return Swal.fire("Tu contraseña actual no coincide con la contaseña de nuestra base de datos","","warning");

                     }else if(ress===0){
                        return Swal.fire("Ooops!! Hubo un error","","warning");

                     }




}

Conteo_intentos_sesion=async(usu)=>{

    let arr_usu_count= [{ user:usu } ];

    const respuesta = await fetch('http://localhost:8080/admindos/controlador/usuario/controlador_user_count.php',
        
                        {
                        method:'POST',
                        header:{

                            'Content-Type': 'application/json; charset=utf-8'

                        },
                        body: JSON.stringify(arr_usu_count)

                        
                        
                    })

                    var data = await respuesta.json(); 
                    var res  = await data;
                    console.log(res);
                     if(res<=1){
                        return Swal.fire("Advertencia"," Numero de intentos fallidos <strong class='badge text-bg-danger text-bg-secondary'> " + (parseInt(res)+1) + " </strong> <br> <h6 class='text-danger'>Usuario o contraseña incorrectos</h6>","warning");

                        
                     }else {
                        return Swal.fire("Advertencia"," Numero de intentos fallidos <strong class='badge text-bg-danger text-bg-secondary'> " + (parseInt(res)+1) + " </strong> <br> <h6 class='text-danger'>Usuario o contraseña incorrectos</h6><br><h5 class='text-danger'> Reestablesca su contraseña</h5> ","warning");

                     }



}

