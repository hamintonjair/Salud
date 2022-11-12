<!-- Header Section End -->


<main class="app-content">

    <div>
    <ul class="app-breadcrumb breadcrumb "></class=>
        <h3>Listado de EPS</h3>
    </ul>
    </div>
    <!-- Categories Section Begin -->
   
      <div class="row justify-content-center">
          <div class="col-lg-10 offset-lg2">
              <div class="card">
                    <div class="card-body text-center">    
                        <div class="table-responsive">
                            <table id="example" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                       
                                        <th>Codigo</th>
                                        <th>IdEps</th>
                                        <th>Eps</th>
                                        <th>Categoria</th>
                                        <!-- <th>Servicio</th> -->
                                        <th>Especifique</th>
                                        <th>Indicador</th>
                                        <!-- <th>Resultado</th> -->
                                        <th>Unidad</th>
                                        <th>Fuente</th>
                                        <th>Fecha corte</th>
                                        <th>Link Fuente</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>    
                                <?php 
								foreach($eps as $e)

								echo' 
								      <tr>									     
										  <td>'.$e->codigo.'</td> 
										  <td>'.$e->idEps.'</td> 	
                                          <td>'.$e->eps.'</td> 
										  <td>'.$e->categoria.'</td> 	
                                          <td>'.$e->especifique.'</td> 
										  <td>'.$e->Indicador.'</td> 	
                                          <td>'.$e->unidad.'</td> 
										  <td>'.$e->fuente.'</td> 	
                                          <td>'.$e->fuentecorte.'</td> 	
                                          <td>'.$e->linkfuente.'</td> 									
										  <td>'.$e->opcion = '<div class="text-center">
										  <a href="Sitio/Editar/'.$e->_id.'" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh">Editar</i></a>
										  <a href="Sitio/Eliminar/'.$e->_id.'" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete">Delete</i></a>
										  </td> 
                                        

                                     						
									
								';

							                    
            ?>   
                            
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>

<!-- Categories Section End -->