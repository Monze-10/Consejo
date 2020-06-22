<!--div para no mas extorsiones-->

<div class="row" style="display: none" id="ExtorcionTelefonica">
    <h3>Extorsión Telefonica/Fraude</h3>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="wlocation2"> Canalizada por : <span class="danger">*</span> </label>
                <select class="custom-select form-control " id="" name="">
                    
                    <option value=" ">Selecciona una opciòn </option>
                    <?php foreach($canaliza as $canalizado) : ?>
                        <option value="<?php echo $canalizado['CON_ID']?>"><?php echo $canalizado['CON_DESCRIPCION']?></option>

                    <?php endforeach; ?>    
                    
                </select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="wlastName2"> Folio Canalizada : <span class="danger">*</span> </label>
                <input type="text" class="form-control" id="wlastName2" name="lastName"> 
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="wlocation2"> Probable Conducta Delictiva : <span class="danger">*</span> </label>
                <select class="custom-select form-control " id="" name="">
                    
                    <option value=" ">Selecciona una opciòn </option>
                    <?php foreach($conducta as $cconducta) : ?>
                        <option value="<?php echo $cconducta['CON_ID']?>"><?php echo $cconducta['CON_DESCRIPCION']?></option>

                    <?php endforeach; ?>    
                    
                </select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="wlocation2">
                Exigencia Requerida : <span class="danger">*</span> </label>
                <select class="custom-select form-control " id="" name="">
                    
                    <option value=" ">Selecciona una opciòn </option>
                    <?php foreach($conducta as $cconducta) : ?>
                        <option value="<?php echo $cconducta['CON_ID']?>"><?php echo $cconducta['CON_DESCRIPCION']?></option>

                    <?php endforeach; ?>    
                    
                </select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="wlocation2">
                Forma en la que se realiza el contacto : <span class="danger">*</span> </label>
                <select class="custom-select form-control " id="" name="">
                    
                    <option value=" ">Selecciona una opciòn </option>
                    <?php foreach($contacto as $ccontacto) : ?>
                        <option value="<?php echo $ccontacto['CON_ID']?>"><?php echo $ccontacto['CON_DESCRIPCION']?></option>

                    <?php endforeach; ?>    
                    
                </select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="wlocation2">
                Tipo de telefono en que se recibe la llamada :: <span class="danger">*</span> </label>
                <select class="custom-select form-control " id="" name="">
                    
                    <option value=" ">Selecciona una opciòn </option>
                    <?php foreach($forma as $fforma) : ?>
                        <option value="<?php echo $fforma['CON_ID']?>"><?php echo $fforma['CON_DESCRIPCION']?></option>

                    <?php endforeach; ?>    
                    
                </select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="wfirstName2"> Número del que llaman : <span class="danger">*</span> </label>
                <input type="text" class="form-control" id="wfirstName2" name="firstName"> 
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="wlastName2"> Número del que envian el mensaje : <span class="danger">*</span> </label>
                <input type="text" class="form-control" id="wlastName2" name="lastName"> 
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="wlastName2"> Número al que piden comunicarse : <span class="danger">*</span> </label>
                <input type="text" class="form-control" id="wlastName2" name="lastName"> 
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="wlastName2"> Dirección electronica involucrada : <span class="danger">*</span> </label>
                <input type="email" class="form-control" id="wlastName2" name="lastName"> 
                
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>Lugar en que se recibe la llamada :</label>
                <label class="custom-control custom-radio">
                <input id="radio3" name="radio" type="radio" class="custom-control-input">
                <span class="custom-control-label">Si</span>
                </label>
                <label class="custom-control custom-radio">
                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                <span class="custom-control-label">No</span>
                </label>
            </div>
        </div>

        <div class="col-md-6"  id="">
            <div class="form-group">
            <label for="wlocation2"> Estado : <span class="danger">*</span> </label>
                <select class="custom-select form-control" id="" name="">
                    
                    <option value="">Selecciona una opcion</option>
                    <?php foreach ($ciudad as $estado): ?>
                        <option value="<?php echo $estado['C_ESTADO']?>"><?php echo $estado['D_ESTADO']?></option>
                    <?php endforeach; ?>
                </select>        
                    
            </div>
        </div>

        <div class="col-md-6"  id="">
            <div class="form-group">
            <label for="wlocation2">Estatus de los hechos : <span class="danger">*</span> </label>
                <select class="custom-select form-control" id="" name="">
                    
                    <option value="">Selecciona una opcion</option>
                    <?php foreach ($hechos as $chechos): ?>
                        <option value="<?php echo $chechos['CON_ID']?>"><?php echo $chechos['CON_DESCRIPCION']?></option>
                    <?php endforeach; ?>
                </select>        
                    
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="form-group">
                <label>¿Inicio Averiguación Previa? :</label>
                <label class="custom-control custom-radio">
                <input id="radio3" name="radio" type="radio" class="custom-control-input">
                <span class="custom-control-label">Si</span>
                </label>
                <label class="custom-control custom-radio">
                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                <span class="custom-control-label">No</span>
                </label>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="wlastName2"> Número de Averiguación Prèvia : <span class="danger">*</span> </label>
                <input type="text" class="form-control" id="wlastName2" name="lastName"> 
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>¿Requiere Acompañamiento? :</label>
                <label class="custom-control custom-radio">
                <input id="radio3" name="radio" type="radio" class="custom-control-input">
                <span class="custom-control-label">Si</span>
                </label>
                <label class="custom-control custom-radio">
                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                <span class="custom-control-label">No</span>
                </label>
            </div>
        </div>
    </div>                
</div>
<!--aqui termina no mas extorsiones-->
<!--div para companimal-->
<div class="row" style="display: none" id="ProteccionAnimales">
    <h3>Protecciòn a los animales</h3>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="wintType1">Problematica de Maltrato :</label>
                    <select class="custom-select form-control" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                        <option value="Banquet">Normal</option>
                        <option value="Fund Raiser">Difficult</option>
                        <option value="Dinner Party">Hard</option>
                    </select>
            </div>  
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="wintType1">Gènero :</label>
                    <select class="custom-select form-control" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                        <option value="Banquet">Normal</option>
                        <option value="Fund Raiser">Difficult</option>
                        <option value="Dinner Party">Hard</option>
                    </select>
            </div>  
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="wintType1">Canalizaciòn :</label>
                    <select class="custom-select form-control" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                        <option value="Banquet">Normal</option>
                        <option value="Fund Raiser">Difficult</option>
                        <option value="Dinner Party">Hard</option>
                    </select>
            </div>  
        </div>
    </div>
</div>

<!--div para suicidio-->
<div class="row" style="display: none" id="suicidio">
    <h3>Suicidio</h3>
    <div class="row">
        <div class="col-md-6"  id="">
            <div class="form-group">
            <label for="wlocation2"> Quien Realizò la llamada: <span class="danger">*</span> </label>
                <select class="custom-select form-control" id="" name="">
                    
                    <option value="">Selecciona una opcion</option>
                    <?php foreach ($llamada as $cllamada): ?>
                        <option value="<?php echo $cllamada['CON_ID']?>"><?php echo $cllamada['CON_DESCRIPCION']?></option>
                    <?php endforeach; ?>
                </select>        
                    
            </div>
        </div>
        <div class="col-md-6">
            <h3>En caso de un menor de edad,registro de nombre del papà, mamà o tuto</h3>
        </div> 
        <div class="col-md-6"  id="">
            <div class="form-group">
            <label for="wlocation2"> Nivel de Escolaridad : <span class="danger">*</span> </label>
                <select class="custom-select form-control" id="" name="">
                    
                    <option value="">Selecciona una opcion</option>
                    <?php foreach ($escolar as $cescolar): ?>
                        <option value="<?php echo $cescolar['CON_ID']?>"><?php echo $cescolar['CON_DESCRIPCION']?></option>
                    <?php endforeach; ?>
                </select>        
                    
            </div>
        </div>
        <div class="col-md-6"  id="">
            <div class="form-group">
            <label for="wlocation2"> Ocupación: <span class="danger">*</span> </label>
                <select class="custom-select form-control" id="" name="">
                    
                    <option value="">Selecciona una opcion</option>
                    <?php foreach ($ocupacion as $cocupacion): ?>
                        <option value="<?php echo $cocupacion['CON_ID']?>"><?php echo $cocupacion['CON_DESCRIPCION']?></option>
                    <?php endforeach; ?>
                </select>        
                    
            </div>
        </div>
        <div class="col-md-6"  id="">
            <div class="form-group">
            <label for="wlocation2"> Estado Civil: <span class="danger">*</span> </label>
                <select class="custom-select form-control" id="" name="">
                    
                    <option value="">Selecciona una opcion</option>
                    <?php foreach ($civil as $ccivil): ?>
                        <option value="<?php echo $ccivil['CON_ID']?>"><?php echo $ccivil['CON_DESCRIPCION']?></option>
                    <?php endforeach; ?>
                </select>        
                    
            </div>
        </div>
        <div class="col-md-6"  id="">
            <div class="form-group">
            <label for="wlocation2"> Seguridad Social: <span class="danger">*</span> </label>
                <select class="custom-select form-control" id="" name="">
                    
                    <option value="">Selecciona una opcion</option>
                    <?php foreach ($social as $csocial): ?>
                        <option value="<?php echo $csocial['CON_ID']?>"><?php echo $csocial['CON_DESCRIPCION']?></option>
                    <?php endforeach; ?>
                </select>        
                    
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Es beneficiario de algùn programa social</label>
                    <label class="custom-control custom-radio">
                        <input id="radio3" name="radio" type="radio" class="custom-control-input">
                        <span class="custom-control-label">Si</span>
                    </label>
                    <label class="custom-control custom-radio">
                        <input id="radio4" name="radio" type="radio" class="custom-control-input">
                        <span class="custom-control-label">No</span>
                    </label>
                    
            </div>
        </div>
        <div class="col-md-6"  id="">
            <div class="form-group">
            <label for="wlocation2"> Etapa :<span class="danger">*</span> </label>
                <select class="custom-select form-control" id="" name="">
                    
                    <option value="">Selecciona una opcion</option>
                    <?php foreach ($etapa as $cetapa): ?>
                        <option value="<?php echo $cetapa['CON_ID']?>"><?php echo $cetapa['CON_DESCRIPCION']?></option>
                    <?php endforeach; ?>
                </select>        
                    
            </div>
        </div>
        <div class="col-md-6"  id="">
            <div class="form-group">
            <label for="wlocation2"> Enfermedad:<span class="danger">*</span> </label>
                <select class="custom-select form-control" id="" name="">
                    
                    <option value="">Selecciona una opcion</option>
                    <?php foreach ($enfermedad as $cenfermedad): ?>
                        <option value="<?php echo $cenfermedad['CON_ID']?>"><?php echo $cenfermedad['CON_DESCRIPCION']?></option>
                    <?php endforeach; ?>
                </select>        
                    
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Antecedentes de hospitalizaciòn</label>
                    <label class="custom-control custom-radio">
                        <input id="radio3" name="radio" type="radio" class="custom-control-input">
                        <span class="custom-control-label">Si</span>
                    </label>
                    <label class="custom-control custom-radio">
                        <input id="radio4" name="radio" type="radio" class="custom-control-input">
                        <span class="custom-control-label">No</span>
                    </label>
                    
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Consumo de sustancias  :</label>
                    <label class="custom-control custom-radio">
                        <input id="radio3" name="radio" type="radio" class="custom-control-input">
                        <span class="custom-control-label">Si</span>
                    </label>
                    <label class="custom-control custom-radio">
                        <input id="radio4" name="radio" type="radio" class="custom-control-input">
                        <span class="custom-control-label">No</span>
                    </label>
                    
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Antecedentes familiares de enfermedad mental :</label>
                    <label class="custom-control custom-radio">
                        <input id="radio3" name="radio" type="radio" class="custom-control-input">
                        <span class="custom-control-label">Si</span>
                    </label>
                    <label class="custom-control custom-radio">
                        <input id="radio4" name="radio" type="radio" class="custom-control-input">
                        <span class="custom-control-label">No</span>
                    </label>
                    
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Antecedentes familiares de consumo de sustancias :</label>
                    <label class="custom-control custom-radio">
                        <input id="radio3" name="radio" type="radio" class="custom-control-input">
                        <span class="custom-control-label">Si</span>
                    </label>
                    <label class="custom-control custom-radio">
                        <input id="radio4" name="radio" type="radio" class="custom-control-input">
                        <span class="custom-control-label">No</span>
                    </label>
                    
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Antecedentes de suicidio en familia, trabajo, escuela :</label>
                    <label class="custom-control custom-radio">
                        <input id="radio3" name="radio" type="radio" class="custom-control-input">
                        <span class="custom-control-label">Si</span>
                    </label>
                    <label class="custom-control custom-radio">
                        <input id="radio4" name="radio" type="radio" class="custom-control-input">
                        <span class="custom-control-label">No</span>
                    </label>
                    
            </div>
        </div>
        <div class="col-md-6"  id="">
            <div class="form-group">
            <label for="wlocation2"> Vive con:<span class="danger">*</span> </label>
                <select class="custom-select form-control" id="" name="">
                    
                    <option value="">Selecciona una opcion</option>
                    <?php foreach ($vive as $cvive): ?>
                        <option value="<?php echo $cvive['CON_ID']?>"><?php echo $cvive['CON_DESCRIPCION']?></option>
                    <?php endforeach; ?>
                </select>        
                    
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Red de apoyo:</label>
                    <label class="custom-control custom-radio">
                        <input id="radio3" name="radio" type="radio" class="custom-control-input">
                        <span class="custom-control-label">Si</span>
                    </label>
                    <label class="custom-control custom-radio">
                        <input id="radio4" name="radio" type="radio" class="custom-control-input">
                        <span class="custom-control-label">No</span>
                    </label>
                    
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Derivaciòn a:</label>
                    <label class="custom-control custom-radio">
                        <input id="radio3" name="radio" type="radio" class="custom-control-input">
                        <span class="custom-control-label">DIF, D.F.</span>
                    </label>
                    <label class="custom-control custom-radio">
                        <input id="radio4" name="radio" type="radio" class="custom-control-input">
                        <span class="custom-control-label">Externo</span>
                    </label>
                    
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Servicio de emergencia:</label>
                    <label class="custom-control custom-radio">
                        <input id="radio3" name="radio" type="radio" class="custom-control-input">
                        <span class="custom-control-label">Si</span>
                    </label>
                    <label class="custom-control custom-radio">
                        <input id="radio4" name="radio" type="radio" class="custom-control-input">
                        <span class="custom-control-label">No</span>
                    </label>
                    
            </div>
        </div>
        <div class="col-md-6"  id="">
            <div class="form-group">
            <label for="wlocation2"> Observaciònes:<span class="danger">*</span> </label>
                <select class="custom-select form-control" id="" name="">
                    
                    <option value="">Selecciona una opcion</option>
                    <?php foreach ($observa as $cobserva): ?>
                        <option value="<?php echo $cobserva['CON_ID']?>"><?php echo $cobserva['CON_DESCRIPCION']?></option>
                    <?php endforeach; ?>
                </select>        
                    
            </div>
        </div>
    </div>
</div>
<!--Aqui termina suicidio-->
<!--Aqui empieza maltrato infantil-->
<div class="row" style="display: none" id="MaltratoInfantil">
    <h3>Maltrato Infatil</h3>
    <h4>Datos de los generadores de conductas violentas</h4>    
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="wfirstName2"> Nombre : <span class="danger">*</span> </label>
                <input type="text" class="form-control" id="wfirstName2" name="firstName">     
            </div>        
        </div>
        <div class="col-md-3"  id="">
            <div class="form-group">
            <label for="wlocation2"> Parentesco :<span class="danger">*</span> </label>
                <select class="custom-select form-control" id="" name="">
                    
                    <option value="">Selecciona una opcion</option>
                    <?php foreach ($parentesco as $cparentesco): ?>
                        <option value="<?php echo $cparentesco['CON_ID']?>"><?php echo $cparentesco['CON_DESCRIPCION']?></option>
                    <?php endforeach; ?>
                </select>        
                    
            </div>
        </div>
        <div class="col-md-3"  id="">
            <div class="form-group">
            <label for="wlocation2"> Edad :<span class="danger">*</span> </label>
                <select class="custom-select form-control" id="" name="">
                    
                    <option value="">Selecciona una opcion</option>
                    <?php foreach ($age as $cage): ?>
                        <option value="<?php echo $cage['CON_ID']?>"><?php echo $cage['CON_DESCRIPCION']?></option>
                    <?php endforeach; ?>
                </select>        
                    
            </div>
        </div>
        <div class="col-md-3"  id="">
            <div class="form-group">
            <label for="wlocation2"> Sexo: <span class="danger">*</span> </label>
                <select class="custom-select form-control" id="" name="">
                    
                    <option value="">Selecciona una opcion</option>
                    <?php foreach ($sexo as $csexo): ?>
                        <option value="<?php echo $csexo['CON_ID']?>"><?php echo $csexo['CON_DESCRIPCION']?></option>
                    <?php endforeach; ?>
                </select>        
                    
            </div>
        </div>
        <div class="col-md-3"  id="">
            <div class="form-group">
            <label for="wlocation2"> Ocupación: <span class="danger">*</span> </label>
                <select class="custom-select form-control" id="" name="">
                    
                    <option value="">Selecciona una opcion</option>
                    <?php foreach ($ocupa as $cocupa): ?>
                        <option value="<?php echo $cocupa['CON_ID']?>"><?php echo $cocupa['CON_DESCRIPCION']?></option>
                    <?php endforeach; ?>
                </select>        
                    
            </div>
        </div>  
    </div> 
    <h4>Datos de los responsables de la crianza o cuidado</h4> 
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="wfirstName2"> Nombre : <span class="danger">*</span> </label>
                <input type="text" class="form-control" id="wfirstName2" name="firstName">     
            </div>        
        </div>
        <div class="col-md-3"  id="">
            <div class="form-group">
            <label for="wlocation2"> Parentesco :<span class="danger">*</span> </label>
                <select class="custom-select form-control" id="" name="">
                    
                    <option value="">Selecciona una opcion</option>
                    <?php foreach ($parentesco as $cparentesco): ?>
                        <option value="<?php echo $cparentesco['CON_ID']?>"><?php echo $cparentesco['CON_DESCRIPCION']?></option>
                    <?php endforeach; ?>
                </select>        
                    
            </div>
        </div>
        <div class="col-md-3"  id="">
            <div class="form-group">
            <label for="wlocation2"> Edad :<span class="danger">*</span> </label>
                <select class="custom-select form-control" id="" name="">
                    
                    <option value="">Selecciona una opcion</option>
                    <?php foreach ($age as $cage): ?>
                        <option value="<?php echo $cage['CON_ID']?>"><?php echo $cage['CON_DESCRIPCION']?></option>
                    <?php endforeach; ?>
                </select>        
                    
            </div>
        </div>
        <div class="col-md-3"  id="">
            <div class="form-group">
            <label for="wlocation2"> Sexo: <span class="danger">*</span> </label>
                <select class="custom-select form-control" id="" name="">
                    
                    <option value="">Selecciona una opcion</option>
                    <?php foreach ($sexo as $csexo): ?>
                        <option value="<?php echo $csexo['CON_ID']?>"><?php echo $csexo['CON_DESCRIPCION']?></option>
                    <?php endforeach; ?>
                </select>        
                    
            </div>
        </div>
        <div class="col-md-3"  id="">
            <div class="form-group">
            <label for="wlocation2"> Ocupación: <span class="danger">*</span> </label>
                <select class="custom-select form-control" id="" name="">
                    
                    <option value="">Selecciona una opcion</option>
                    <?php foreach ($ocupa as $cocupa): ?>
                        <option value="<?php echo $cocupa['CON_ID']?>"><?php echo $cocupa['CON_DESCRIPCION']?></option>
                    <?php endforeach; ?>
                </select>        
                    
            </div>
        </div> 
    </div>
    <h4>Datos de los menores para intervenciòn social</h4> 
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="wfirstName2"> Nombre : <span class="danger">*</span> </label>
                <input type="text" class="form-control" id="wfirstName2" name="firstName">     
            </div>        
        </div>
        
        <div class="col-md-3"  id="">
            <div class="form-group">
            <label for="wlocation2"> Edad :<span class="danger">*</span> </label>
                <select class="custom-select form-control" id="" name="">
                    
                    <option value="">Selecciona una opcion</option>
                    <?php foreach ($age as $cage): ?>
                        <option value="<?php echo $cage['CON_ID']?>"><?php echo $cage['CON_DESCRIPCION']?></option>
                    <?php endforeach; ?>
                </select>        
                    
            </div>
        </div>

        <div class="col-md-3"  id="">
            <div class="form-group">
            <label for="wlocation2"> Sexo: <span class="danger">*</span> </label>
                <select class="custom-select form-control" id="" name="">
                    
                    <option value="">Selecciona una opcion</option>
                    <?php foreach ($sexo as $csexo): ?>
                        <option value="<?php echo $csexo['CON_ID']?>"><?php echo $csexo['CON_DESCRIPCION']?></option>
                    <?php endforeach; ?>
                </select>        
                    
            </div>
        </div>
        <div class="col-md-3"  id="">
            <div class="form-group">
            <label for="wlocation2"> Grado Escolar: <span class="danger">*</span> </label>
                <select class="custom-select form-control" id="" name="">
                    
                    <option value="">Selecciona una opcion</option>
                    <?php foreach ($esc as $cesc): ?>
                        <option value="<?php echo $cesc['CON_ID']?>"><?php echo $cesc['CON_DESCRIPCION']?></option>
                    <?php endforeach; ?>
                </select>        
                    
            </div>
        </div>
        <div class="col-md-3"  id="">
            <div class="form-group">
            <label for="wlocation2"> ¿Cada cuando ocurre el maltrato?: <span class="danger">*</span> </label>
                <select class="custom-select form-control" id="" name="">
                    
                    <option value="">Selecciona una opcion</option>
                    <?php foreach ($mal as $cmal): ?>
                        <option value="<?php echo $cmal['CON_ID']?>"><?php echo $cmal['CON_DESCRIPCION']?></option>
                    <?php endforeach; ?>
                </select>        
                    
            </div>
        </div>
        <div class="col-md-3"  id="">
            <div class="form-group">
            <label for="wlocation2"> ¿Desde cuándo,comenzó el maltrato?: <span class="danger">*</span> </label>
                <select class="custom-select form-control" id="" name="">
                    
                    <option value="">Selecciona una opcion</option>
                    <?php foreach ($desde as $cdesde): ?>
                        <option value="<?php echo $cdesde['CON_ID']?>"><?php echo $cdesde['CON_DESCRIPCION']?></option>
                    <?php endforeach; ?>
                </select>        
                    
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>¿Acepta que el DIF le devuelva la llamada de seguimiento? :</label>
                    <label class="custom-control custom-radio">
                        <input id="radio3" name="radio" type="radio" class="custom-control-input">
                        <span class="custom-control-label">Si</span>
                    </label>
                    <label class="custom-control custom-radio">
                        <input id="radio4" name="radio" type="radio" class="custom-control-input">
                        <span class="custom-control-label">No</span>
                    </label>     
            
            </div>   

        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="wintType1">¿Horario en que se puede marcar?</label>
                    <select class="custom-select form-control" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                        <option value="">Selecciona una opciòn</option>
                        <option value="Banquet">00:00</option>
                        <option value="Banquet">00:30</option>
                        <option value="Banquet">01:00</option>
                        <option value="Banquet">01:30</option>
                        <option value="Banquet">02:00</option>
                        <option value="Banquet">02:30</option>
                        <option value="Banquet">03:00</option>
                        <option value="Banquet">03:30</option>
                        <option value="Banquet">04:00</option>
                        <option value="Banquet">04:30</option>
                        <option value="Fund Raiser">05:00</option>
                        <option value="Dinner Party">05:30</option>
                        <option value="Banquet">06:00</option>
                        <option value="Banquet">06:30</option>
                        <option value="Banquet">07:00</option>
                        <option value="Banquet">07:30</option>
                        <option value="Banquet">08:00</option>
                        <option value="Banquet">08:30</option>
                        <option value="Banquet">09:00</option>
                        <option value="Banquet">09:30</option>
                        <option value="Banquet">10:00</option>
                        <option value="Banquet">10:30</option>
                        <option value="Banquet">11:00</option>
                        <option value="Banquet">11:30</option>
                        <option value="Banquet">12:00</option>
                        <option value="Banquet">12:30</option>
                        <option value="Banquet">13:00</option>
                        <option value="Banquet">13:30</option>
                        <option value="Banquet">14:00</option>
                        <option value="Banquet">14:30</option>
                        <option value="Banquet">15:00</option>
                        <option value="Banquet">15:30</option>
                        <option value="Banquet">16:00</option>
                        <option value="Banquet">16:30</option>
                        <option value="Banquet">17:00</option>
                        <option value="Banquet">17:30</option>
                        <option value="Banquet">18:00</option>
                        <option value="Banquet">18:30</option>
                        <option value="Banquet">19:00</option>
                        <option value="Banquet">19:30</option>
                        <option value="Banquet">20:00</option>
                        <option value="Banquet">20:30</option>
                        <option value="Banquet">21:00</option>
                        <option value="Banquet">21:30</option>
                        <option value="Banquet">22:00</option>
                        <option value="Banquet">22:30</option>
                        <option value="Banquet">23:00</option>
                        <option value="Banquet">23:30</option>
                    
                    </select>
                
            </div>

        </div>                    
    </div>        
</div>
<!--aqui termina el div de maltrato infantil-->
<!--aqui empieza el div de violencia familiar-->

<div class="row" style="display: none" id="ViolenciaFamiliar">
    <h3>Violencia Familiar</h3>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>¿Esta deacuerdo con recibir una llamada de seguimiento? :</label>
                    <label class="custom-control custom-radio">
                        <input id="radio3" name="radio" type="radio" class="custom-control-input">
                        <span class="custom-control-label">Si</span>
                    </label>
                    <label class="custom-control custom-radio">
                        <input id="radio4" name="radio" type="radio" class="custom-control-input">
                        <span class="custom-control-label">No</span>
                    </label>     
            
            </div>   

        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="wintType1">¿Horario en que se puede marcar?</label>
                    <select class="custom-select form-control" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                        <option value="">Selecciona una opciòn</option>
                        <option value="Banquet">00:00</option>
                        <option value="Banquet">00:30</option>
                        <option value="Banquet">01:00</option>
                        <option value="Banquet">01:30</option>
                        <option value="Banquet">02:00</option>
                        <option value="Banquet">02:30</option>
                        <option value="Banquet">03:00</option>
                        <option value="Banquet">03:30</option>
                        <option value="Banquet">04:00</option>
                        <option value="Banquet">04:30</option>
                        <option value="Fund Raiser">05:00</option>
                        <option value="Dinner Party">05:30</option>
                        <option value="Banquet">06:00</option>
                        <option value="Banquet">06:30</option>
                        <option value="Banquet">07:00</option>
                        <option value="Banquet">07:30</option>
                        <option value="Banquet">08:00</option>
                        <option value="Banquet">08:30</option>
                        <option value="Banquet">09:00</option>
                        <option value="Banquet">09:30</option>
                        <option value="Banquet">10:00</option>
                        <option value="Banquet">10:30</option>
                        <option value="Banquet">11:00</option>
                        <option value="Banquet">11:30</option>
                        <option value="Banquet">12:00</option>
                        <option value="Banquet">12:30</option>
                        <option value="Banquet">13:00</option>
                        <option value="Banquet">13:30</option>
                        <option value="Banquet">14:00</option>
                        <option value="Banquet">14:30</option>
                        <option value="Banquet">15:00</option>
                        <option value="Banquet">15:30</option>
                        <option value="Banquet">16:00</option>
                        <option value="Banquet">16:30</option>
                        <option value="Banquet">17:00</option>
                        <option value="Banquet">17:30</option>
                        <option value="Banquet">18:00</option>
                        <option value="Banquet">18:30</option>
                        <option value="Banquet">19:00</option>
                        <option value="Banquet">19:30</option>
                        <option value="Banquet">20:00</option>
                        <option value="Banquet">20:30</option>
                        <option value="Banquet">21:00</option>
                        <option value="Banquet">21:30</option>
                        <option value="Banquet">22:00</option>
                        <option value="Banquet">22:30</option>
                        <option value="Banquet">23:00</option>
                        <option value="Banquet">23:30</option>
                    
                    </select>
                
            </div>

        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="wfirstName2"> Telefono de Casa : <span class="danger">*</span> </label>
                <input type="text" class="form-control" id="wfirstName2" name="firstName">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="wfirstName2"> Telefono de Oficina : <span class="danger">*</span> </label>
                <input type="text" class="form-control" id="wfirstName2" name="firstName">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="wfirstName2"> Telefono Celular : <span class="danger">*</span> </label>
                <input type="text" class="form-control" id="wfirstName2" name="firstName">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="wfirstName2"> Telefono de Recados : <span class="danger">*</span> </label>
                <input type="text" class="form-control" id="wfirstName2" name="firstName">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="wfirstName2"> Telefono Familiar : <span class="danger">*</span> </label>
                <input type="text" class="form-control" id="wfirstName2" name="firstName">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">

                <label>Tipo de Violencia</label>
                <div class="input-group">
                    <ul class="icheck-list">
                        <li>
                            <input type="checkbox" class="check" id="minimal-checkbox-1">
                            <label for="minimal-checkbox-1">Fisica</label>
                        </li>
                        <li>
                            <input type="checkbox" class="check" id="minimal-checkbox-2" checked>
                            <label for="minimal-checkbox-2">Psicologica</label>
                        </li>
                        <li>
                            <input type="checkbox" class="check" id="minimal-checkbox-1">
                            <label for="minimal-checkbox-1">Económica</label>
                        </li>
                        <li>
                            <input type="checkbox" class="check" id="minimal-checkbox-2" checked>
                            <label for="minimal-checkbox-2">Patrimonial</label>
                        </li>
                        <li>
                            <input type="checkbox" class="check" id="minimal-checkbox-2" checked>
                            <label for="minimal-checkbox-2">Sexual</label>
                
                        </li>

                </div>  
            </div>
        </div>               
        <div class="col-md-3">
            <div class="form-group">
                <label for="wintType1">Temporalidad de la violencia</label>
                    <select class="custom-select form-control" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                        <option value="">Selecciona una Opciòn</option>
                        <option value="Banquet">Màs de un mes</option>
                        <option value="Banquet">1-7 años</option>
                        <option value="Fund Raiser">8-14 años</option>
                        <option value="Dinner Party">Evento ùnico</option>
                        <option value="Banquet">Desconoce</option>
                    </select>
                
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="wintType1">Frecuencia de la violencia</label>
                    <select class="custom-select form-control" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                        <option value="">Selecciona una opciòn</option>
                        <option value="Banquet">Diario</option>
                        <option value="Fund Raiser">Semanal</option>
                        <option value="Dinner Party">Mensual</option>
                        <option value="Banquet">Anual</option>
                        <option value="Banquet">Evento ùnico</option>
                        <option value="Banquet">Desconoce</option>
                    </select>
                
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="wintType1">Ocupaciòn :</label>
                    <select class="custom-select form-control" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                        <option value="">Selecciona una opciòn</option>
                        <option value="Banquet">Profesionista</option>
                        <option value="Banquet">Empleado</option>
                        <option value="Banquet">Desempleado</option>
                        <option value="Banquet">Ama de Casa</option>
                        <option value="Fund Raiser">Obrero</option>
                        <option value="Dinner Party">Estudiante</option>
                        <option value="Dinner Party">Otro</option>
                        <option value="Banquet">Sin Dato</option>
                    </select>
            </div>  
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>¿Tienes hijos (as)? :</label>
                    <label class="custom-control custom-radio">
                        <input id="radio3" name="radio" type="radio" class="custom-control-input">
                        <span class="custom-control-label">Si</span>
                    </label>
                    <label class="custom-control custom-radio">
                        <input id="radio4" name="radio" type="radio" class="custom-control-input">
                        <span class="custom-control-label">No</span>
                    </label>     
            
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="wfirstName2">¿Cuantos? : <span class="danger">*</span> </label>
                <input type="text" class="form-control" id="wfirstName2" name="firstName">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="wfirstName2">¿De que edad? : <span class="danger">*</span> </label>
                <input type="text" class="form-control" id="wfirstName2" name="firstName">
            </div>
        </div>                
    </div>                    
</div>
<!--aqui termina violencia familiar-->
<!--aqui empieza comision contra corrupcion policial-->
<div class="row" style="display: none" id="CorrupcionPolicial">
    <h3>Comisión Ciudadana contra la corrupción policial</h3>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>La persona que habla es policia?:</label>
                    <label class="custom-control custom-radio">
                        <input id="radio3" name="radio" type="radio" class="custom-control-input">
                        <span class="custom-control-label">Si</span>
                    </label>
                    <label class="custom-control custom-radio">
                        <input id="radio4" name="radio" type="radio" class="custom-control-input">
                        <span class="custom-control-label">No</span>
                    </label> 
                    
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <label for="wlocation2">De que Coorporación es : <span class="danger">*</span> </label>
                    <select class="custom-select form-control " id="wlocation2" name="location">
                        <option value="">Selecciona una opciòn</option>
                        <option value="">Policìa Preventiva</option>
                        <option value="">Policìa Industrial</option>
                        <option value="">Policìa Auxiliar</option>
                        <option value="">Policìa Transito</option>
                        <option value="">Otro</option>
                        
                    </select>
            </div>
        </div>
        <div class="col-md-6">
                <div class="form-group">
                <label for="wfirstName2"> Especifique : <span class="danger">*</span> </label>
                <input type="text" class="form-control" id="wfirstName2" name="firstName"> 
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="wlocation2">Quien llama es : <span class="danger">*</span> </label>
                    <select class="custom-select form-control " id="wlocation2" name="location">
                        <option value="">Selecciona una opciòn</option>
                        <option value="">Testigo</option>
                        <option value="">Vìctima</option>
                        
                    </select>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label>Procede como reporte Policia? :</label>
                    <label class="custom-control custom-radio">
                        <input id="radio3" name="radio" type="radio" class="custom-control-input">
                        <span class="custom-control-label">Si</span>
                    </label>
                    <label class="custom-control custom-radio">
                        <input id="radio4" name="radio" type="radio" class="custom-control-input">
                        <span class="custom-control-label">No</span>
                    </label> 
                    
            </div>
        </div>
    </div>
</div>
<!--aqui termina corrupcion policial-->
<!--aqui comienza linea plateada-->
<div class="row" id="plateada" >
    <div class="row">
        <h3>Linea Plateada </h3>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>¿Se esta comunicando el adulto mayor?  :</label>
                    <label class="custom-control custom-radio">
                        <input value="ReportanteSi" name="radio" type="radio" class="custom-control-input">
                        <span class="custom-control-label">Si</span>
                    </label>
                    <label class="custom-control custom-radio">
                        <input value="ReportanteNo" name="radio" type="radio" class="custom-control-input">
                        <span class="custom-control-label">No</span>
                    </label>
                    
            </div>
        </div>
    </div>
</div>


<div class="row" style="display: none" id="reportante">
    <h3>Datos del Reportante</h3>
    <div class="row">    
        
        <div class="col-md-6">
            <div class="form-group">
                
                <label for="wfirstName2"> Nombre : <span class="danger">*</span> </label>
                
                <input type="text" class="form-control" id="wfirstName2" name="firstName"> </div>
                
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="wfirstName2"> Edad : <span class="danger">*</span> </label>
                <input type="text" class="form-control" id="wfirstName2" name="firstName"> </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="wfirstName2"> Telefono : <span class="danger">*</span> </label>
                <br> </br>
                <input type="text" class="form-control" id="wfirstName2" name="firstName"> </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <p>¿Que parentesco tiene con el adulto mayor?</p>
                <label for="wfirstName2"> Parentesco : <span class="danger">*</span> </label>
                <input type="text" class="form-control" id="wfirstName2" name="firstName"> </div>
        </div>
    </div>    
    
</div>
<div class="row" style="display: none" id="DatosPersona">
    <h3>Datos de la persona</h3>
        <div class="row">    
            
            <div class="col-md-6">
                <div class="form-group">
                    
                    <label for="wfirstName2"> Nombre : <span class="danger">*</span> </label>
                    
                    <input type="text" class="form-control required" id="wfirstName2" name="firstName"> </div>
                    
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="wfirstName2"> Apellido Paterno : <span class="danger">*</span> </label>
                    <input type="text" class="form-control required" id="wfirstName2" name="firstName"> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="wfirstName2"> Apellido Materno : <span class="danger">*</span> </label>
                    <input type="text" class="form-control required" id="wfirstName2" name="firstName"> </div>
            </div>
            <div class="col-md-6"  id="">
                <div class="form-group">
                <label for="wlocation2"> Edad : <span class="danger">*</span> </label>
                    <select class="custom-select form-control" id="" name="">
                        
                        <option value="">Selecciona una opcion</option>
                        <?php foreach ($edad as $cedad): ?>
                            <option value="<?php echo $cedad['CON_ID']?>"><?php echo $cedad['CON_DESCRIPCION']?></option>
                        <?php endforeach; ?>
                    </select>        
                        
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="wjobTitle2">Telefono :</label>
                    <input type="number" class="form-control required" id="wjobTitle2">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="wfirstName2">Codigo Postal : <span class="danger">*</span> </label>
                    <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group">
                    <label for="wfirstName2">Colonia : <span class="danger">*</span> </label>
                    <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="wfirstName2">Estado : <span class="danger">*</span> </label>
                    <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="wfirstName2">Alcaldìa : <span class="danger">*</span> </label>
                    <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="wfirstName2">Calle : <span class="danger">*</span> </label>
                    <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="wfirstName2">Numero Interior : <span class="danger">*</span> </label>
                    <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="wfirstName2">Numero Exterior : <span class="danger">*</span> </label>
                    <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>¿Usted es derechohabiente?  :</label>
                        <label class="custom-control custom-radio">
                            <input value="SeSoSi" name="radio" type="radio" class="custom-control-input">
                            <span class="custom-control-label">Si</span>
                        </label>
                        <label class="custom-control custom-radio">
                            <input value="SeSoNo" name="radio" type="radio" class="custom-control-input">
                            <span class="custom-control-label">No</span>
                        </label>
                        
                </div>
            </div>
            <div class="col-md-6" style="display: none" id="seguridadSocial">
                <div class="form-group">
                    <label for="wlocation2"> Indique la instituciòn : <span class="danger">*</span> </label>
                    <select class="custom-select form-control required" id="wlocation2" name="location" onChange="mostrar(this.value)";>
                        <option value="">Selecciona una opciòn</option>
                        <option value="1">IMSS</option>
                        <option value="2">ISSSTE</option>
                        <option value="3">SEDENA</option>
                        <option value="4">OTROS</option>
                        
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>¿Cuenta con pensiòn alimentaria del Gobierno de la CDMX?  :</label>
                        <label class="custom-control custom-radio">
                            <input value="" name="radio" type="radio" class="custom-control-input">
                            <span class="custom-control-label">Si</span>
                        </label>
                        <label class="custom-control custom-radio">
                            <input value="" name="radio" type="radio" class="custom-control-input">
                            <span class="custom-control-label">No</span>
                        </label>
                        
                </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
                <label>¿Sabe leer y escribir?  :</label>
                    <label class="custom-control custom-radio">
                        <input value="" name="radio" type="radio" class="custom-control-input">
                        <span class="custom-control-label">Si</span>
                    </label>
                    <label class="custom-control custom-radio">
                        <input value="" name="radio" type="radio" class="custom-control-input">
                        <span class="custom-control-label">No</span>
                    </label>
                    
            </div>
            <h3>Salud</h3>
        </div>                
    </div>    
    <div class="row" id="salud"  >

        <div class="col-md-6">
            <div class="form-group">
                <label>¿tiene algùna incapacidad fìsica para comprar, preparar y/o consumir sus alimentos:</label>
                    <label class="custom-control custom-radio">
                        <input value="IncaSi" name="Incapacidad" type="radio" class="custom-control-input">
                        <span class="custom-control-label">Si</span>
                    </label>
                    <label class="custom-control custom-radio">
                        <input value="IncaNo" name="Incapacidad" type="radio" class="custom-control-input">
                        <span class="custom-control-label">No</span>
                    </label>
                    
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>¿Padece algun(as) enfermedad(es)?:</label>
                    
                    <label class="custom-control custom-radio">
                        <input value="padece" name="PadeceEnfermedad" type="radio" class="custom-control-input">
                        <span class="custom-control-label">Si</span>
                    </label>
                    <label class="custom-control custom-radio">
                        <input value="nopadece" name="PadeceEnfermedad" type="radio" class="custom-control-input">
                        <span class="custom-control-label">No</span>
                    </label>
                    
            </div>
        </div>
        <div class="col-md-6" style="display : none" id="cual">
            <div class="form-group">
                <label for="wjobTitle2">Cuales :</label>
                <input type="text" class="form-control" id="wjobTitle2">
            </div>
        </div>
    
    </div>
    
</div>
<h3>Con Quien Vive</h3>                              

<div class="row"  id="ViveCon">
    <div class="col-md-6">
        <div class="form-group">
            <label>¿Con quièn vive? :</label>
                <label class="custom-control custom-radio">
                    <input value="solo" name="radio" type="radio" class="custom-control-input">
                    <span class="custom-control-label">Solo</span>
                </label>
                <label class="custom-control custom-radio">
                    <input value="acompañado" name="radio" type="radio" class="custom-control-input">
                    <span class="custom-control-label">Acompañado</span>
                </label>
                
        </div>
    </div>
    <div class="row" style="display: none" id="vive">
        <div class="col-md-6">
            <div class="form-group">
                <label for="wfirstName2"> Nombre : <span class="danger">*</span> </label>
                <br> </br>
                <input type="text" class="form-control" id="wfirstName2" name="firstName"> </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <p>¿Que parentesco tiene con el adulto mayor?</p>
                <label for="wfirstName2"> Parentesco : <span class="danger">*</span> </label>
                <input type="text" class="form-control" id="wfirstName2" name="firstName"> </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="wfirstName2"> Edad : <span class="danger">*</span> </label>
                <input type="text" class="form-control" id="wfirstName2" name="firstName"> </div>
        </div>
            
            
        
    </div>
</div>
<!--aqui termina linea plateada--> 
