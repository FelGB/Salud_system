<script src="../../jss/usuario.js"></script>
<script>
    TraerDatos();
   
</script>

<div class="card">
  <h5 class="card-header bg-primary text-white">Configuracion</h5>
  <div class="card-body">
    <h5 class="card-title fs-4">Cambiar Contraseña</h5>
    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
    <a  class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2_edit_pass">Cambiar</a>
  </div>
  <div class="card-body mt-0">
    <h5 class="card-title fs-4">Cambiar foto de perfil</h5>
    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
    <a href="#" class="btn btn-outline-primary">Cambiar</a>
  </div>
</div>




<!-- Modal Cambiar contrasena-->
<div class="modal fade " id="staticBackdrop2_edit_pass" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel_editar_contra" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
                    <div class="modal-header bg-primary  border border-info border-start-0 rounded-end ">
                        <h1 class="modal-title fs-5 text-light" id="staticBackdropLabel_editar_contra"  type="text" >Editar Usuario</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                <form id="form_editar_pass" autocomplete="false" onsubmit="return false" >
                    <div class="modal-body">

                                <div class="row">

                                    

                                        <div class="col-12">
                                            <h3>Cambiar Contraseña</h3>
                                            

                                            <label class="form-label" hidden >Usuario ID:</label>    
                                            <input hidden  id="bd_pass" name="bd_pass" class="form-control border border-primary border-start-1 rounded-end " type="text" placeholder="Ingresa el nombre" aria-label=".form-control-lg example" disabled readonly>
                                            <br>

                                            <label class="form-label" >Contraseña Actual</label>    
                                                <input id="contra_actual" name="contra_actual" 
                                                class="form-control border border-primary border-start-1 rounded-end " type="password" placeholder="Ingresa tu contraseña actual"
                                                aria-label=".form-control-lg example">
                                            <br>
                                            <label class="form-label" >Nueva Contraseña</label>
                                                <input id="nueva_contra" name="nueva_contra" 
                                                class="form-control border border-primary border-start-1 rounded-end " type="password" placeholder="Ingresa tu contraseña nueva"
                                                aria-label=".form-control-lg example">
                                            
                                            <br>
                                            <label class="form-label">Repetir Contraseña </label>
                                                <input id="nueva_contra_repe" name="nueva_contra_repe" 
                                                class="form-control border border-primary border-start-1 rounded-end " type="password" placeholder="Repite tu contraseña nueva"
                                                aria-label=".form-control-lg example">   
                                           
                                        </div>
                                

                                </div>
             
                         </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <button class="btn btn-primary" type="submit" onclick="Cambiar_contra()" >Editar</button>
                                    </div>

                                

                    </div>
                </form>
            </div>
        </div>



   <!-- MODAL FIN Cambiar contrasena -->