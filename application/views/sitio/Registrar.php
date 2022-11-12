
    <div class="container" id="idregister">

            <div class="row justify-content-center">
                <div class="row col-lg-8 border">
                        <h4 style="text-align: center; color: black">Registrar Centros de Salud - EPS</h4>
                       <br>       
                        <form id="formidEps" name="formEps" class="form-horizontal" method="post">

                            <input type="hidden" id="edit_idEps" name="idEps" value=""> <p class="text-primary">Los campos con asterisco (<font color="red">*</font>) son obligatorios.
                        </p>

                            <p class="text-primary"></p>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label class="control-label">Código(<font color="red">*</font>)</label>
                                    <input type="text" class="form-control" id="codigo" name="codigo" required="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="control-label">ID-Eps(<font color="red">*</font>)</label>
                                    <input type="text" class="form-control valid validText" id="idEps" name="idEps" required="" maxlength="30">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text">Eps(<font color="red">*</font>)</label>
                                    <input type="text" class="form-control valid validText" id="eps" name="eps" required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="text">Caregoría(<font color="red">*</font>)</label>
                                    <input type="text" class="form-control valid validNumber" id="categoria" name="categoria" required="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text">Especifíque </label>
                                    <input type="text" class="form-control valid validEmail" id="especifique" name="especifique" >
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text">Indicador</label>
                                    <input type="text" class="form-control valid validNumber" id="categoria" name="categoria"  >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="text">Resultado </label>
                                    <input type="text" class="form-control valid validEmail" id="especifique" name="especifique" >
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="text">Unidad(<font color="red">*</font>)</label>
                                    <input type="text" class="form-control valid validNumber" id="categoria" name="categoria" required="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="text">Fuente</label>
                                    <input type="text" class="form-control valid validNumber" id="categoria" name="categoria" >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="text">Fuente corte(<font color="red">*</font>) </label>
                                    <input type="text" class="form-control valid validEmail" id="especifique" name="especifique" required="">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="text">Link fuente</label>
                                    <input type="text" class="form-control valid validNumber" id="categoria" name="categoria" >
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="title-footer">
                                    <button id="updateCliente" class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">
                                            Guardar</span> </button>&nbsp;&nbsp;&nbsp;
                                    
                                </div>
                            </div>
                        </form>
                </div>
            </div>        
     </div>
