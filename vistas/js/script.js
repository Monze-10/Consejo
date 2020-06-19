document.getElementById("temp_lugar_hechos_cp").addEventListener("keyup", function () {

  
  if ($(this).val().length == 5) {

    $.ajax({
      type: 'GET',
      dataType: "json",
      url: 'vistas/ViewUbicacion.php?codigo_postal=' + $(this).val(),
      success: function (data) {

        if(data.length != 0){
          $('#temp_lugar_hechos_estado').html('');
          for (var key in data) {
            $('#temp_lugar_hechos_estado').html('<option value="' + data[key].codigo_estado + '">' + data[key].nombre_estado + '</option>');

            $.ajax({
              type: 'GET',
              dataType: "json",
              url: 'vistas/ViewUbicacion.php?codigo_cp=' + data[key].codigo_cp,
              success: function (data2) {
                $('#temp_lugar_hechos_colonia').html('');
                for (var key2 in data2) {
                  $('#temp_lugar_hechos_colonia').append('<option value="' + data2[key2].codigo_colonia + '">' + data2[key2].nombre_colonia + '</option>');

                  $.ajax({
                    type: 'GET',
                    dataType: "json",
                    url: 'vistas/ViewUbicacion.php?codigo_municipio=' + data2[key2].codigo_municipio,
                    success: function (data3) {
                      $('#temp_lugar_hechos_municipio').html('');
                      for (var key3 in data3) {
                        $('#temp_lugar_hechos_municipio').html('<option value="' + data3[key3].codigo_municipio + '">' + data3[key3].nombre_municipio + '</option>');
                      }
                    }
                  });
                }
              }
            });

            $("#TempLugarHechosAdd").fadeIn('fast');
            $('#temp_lugar_hechos_estado').prop('disabled', false);
            $('#temp_lugar_hechos_colonia').prop('disabled', false);
            $('#temp_lugar_hechos_municipio').prop('disabled', false);

          }
        }
      }
    });
  } else {

    $("#TempLugarHechosAdd").fadeOut('fast');

    $('#temp_lugar_hechos_estado').html('<option value="" disabled selected>Selecciona una opcion</option>');
    $('#temp_lugar_hechos_estado').prop('disabled', true);

    $('#temp_lugar_hechos_municipio').html('<option value="" disabled selected>Selecciona una opcion</option>');
    $('#temp_lugar_hechos_municipio').prop('disabled', true);

    $('#temp_lugar_hechos_colonia').html('<option value="" disabled selected>Selecciona una opcion</option>');
    $('#temp_lugar_hechos_colonia').prop('disabled', true);

  }

});


function isNumberKey(evt) {
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57))
    return false;
  return true;
}


function EmptyLugarHechosTemp(){

  $("#TempLugarHechosAdd").fadeOut('fast');

  $("#temp_lugar_hechos_cp").val("");
  $("#temp_lugar_hechos_calle").val("");
  $("#temp_lugar_hechos_no_ext").val("");
  $("#temp_lugar_hechos_no_int").val("");
  $("#temp_lugar_hechos_referencias").val("");
  $("#temp_lugar_hechos_telefono").val("");

  $('#temp_lugar_hechos_estado').html('<option value="" disabled selected>Selecciona una opcion</option>');
  $('#temp_lugar_hechos_estado').prop('disabled', true);

  $('#temp_lugar_hechos_municipio').html('<option value="" disabled selected>Selecciona una opcion</option>');
  $('#temp_lugar_hechos_municipio').prop('disabled', true);

  $('#temp_lugar_hechos_colonia').html('<option value="" disabled selected>Selecciona una opcion</option>');
  $('#temp_lugar_hechos_colonia').prop('disabled', true);

}

count = $(".LugarHechosDireccion").length;
countVehiculo = $(".VehiculosAdded").length;
countPersona = $(".PersonasAdded").length;

function addLugarHechosToTable(){

  count = count + 1; 

  $(".LugarHechosRows").append("<tr id='LugarHechosDireccion" + count  + "' class='LugarHechosDireccion'><td class='align-middle'><input class='no-style' type='hidden' name='lugar_hechos_cp[]' value='" + $("#temp_lugar_hechos_cp").val() + "' readonly>" + $("#temp_lugar_hechos_cp").val() + "</td><td class='align-middle'><input class='no-style' type='hidden' name='lugar_hechos_estado[]' value='" + $("#temp_lugar_hechos_estado").val() + "' readonly>" + $("#temp_lugar_hechos_estado option:selected").text() + "</td><td class='align-middle'><input class='no-style' type='hidden' name='lugar_hechos_colonia[]' value='" + $("#temp_lugar_hechos_colonia").val() + "' readonly>" + $("#temp_lugar_hechos_colonia option:selected").text() + "</td><td class='align-middle'><input class='no-style' type='hidden' name='lugar_hechos_alcaldia[]' value='" + $("#temp_lugar_hechos_municipio").val() + "' readonly>" + $("#temp_lugar_hechos_municipio option:selected").text() + "</td><td class='align-middle'><input class='no-style' type='hidden' name='lugar_hechos_calle[]' value='" + $("#temp_lugar_hechos_calle").val() + "' readonly>" + $("#temp_lugar_hechos_calle").val() + "</td><td class='align-middle'><input class='no-style' type='hidden' name='lugar_hechos_no_ext[]' value='" + $("#temp_lugar_hechos_no_ext").val() + "' readonly>" + $("#temp_lugar_hechos_no_ext").val() + "</td><td class='align-middle'><input class='no-style' type='hidden' name='lugar_hechos_no_int[]' value='" + $("#temp_lugar_hechos_no_int").val() + "' readonly>" + $("#temp_lugar_hechos_no_int").val() + "</td><td class='align-middle'><input class='no-style' type='hidden' name='lugar_hechos_referencias[]' value='" + $("#temp_lugar_hechos_referencias").val() + "' readonly>" + $("#temp_lugar_hechos_referencias").val() + "</td><td class='align-middle'><input class='no-style' type='hidden' name='lugar_hechos_telefono[]' value='" + $("#temp_lugar_hechos_telefono").val() + "' readonly>" + $("#temp_lugar_hechos_telefono").val() + "</td><td class='align-middle'><button type='button' class='btn btn-danger btn-circle' style='z-index:20!important;' onclick='DeleteLugarHechosDireccion($(\"#LugarHechosDireccion" + count + "\"));'><i class='fa fa-trash'></i></button></td></tr>");
  countLugarHechosDireccion();
  EmptyLugarHechosTemp();

}

function addPersonaToTable(){

  countPersona = countPersona + 1; 

  $(".PersonasRows").append("<tr id='Persona" + countPersona  + "' class='Personas'><td class='align-middle'><input class='no-style' type='hidden' name='persona_reportada_nombre[]' value='" + $("#TempPersonaDenunciadaNombre").val() + "' readonly><input class='no-style' type='hidden' name='persona_reportada_apellido_paterno[]' value='" + $("#TempPersonaDenunciadaApellidoPaterno").val() + "' readonly><input class='no-style' type='hidden' name='persona_reportada_apellido_materno[]' value='" + $("#TempPersonaDenunciadaApellidoMaterno").val() + "' readonly>" + $("#TempPersonaDenunciadaNombre").val() + " " + $("#TempPersonaDenunciadaApellidoPaterno").val() + " " + $("#TempPersonaDenunciadaApellidoMaterno").val() + "</td><td class='align-middle'><input class='no-style' type='hidden' name='persona_reportada_alias[]' value='" + $("#TempPersonaDenunciadaAlias").val() + "' readonly>" + $("#TempPersonaDenunciadaAlias").val() + "</td><td class='align-middle'><input class='no-style' type='hidden' name='persona_reportada_ocupacion[]' value='" + $("#TempPersonaDenunciadaOcupacion").val() + "' readonly>" + $("#TempPersonaDenunciadaOcupacion").val() + "</td><td class='align-middle'><input class='no-style' type='hidden' name='persona_reportada_edad[]' value='" + $("#TempPersonaDenunciadaEdad").val() + "' readonly>" + $("#TempPersonaDenunciadaEdad").val() + "</td><td class='align-middle'><input class='no-style' type='hidden' name='persona_reportada_domicilio[]' value='" + $("#TempPersonaDenunciadaDomicilio").val() + "' readonly>" + $("#TempPersonaDenunciadaDomicilio").val() + "</td><td class='align-middle'><input class='no-style' type='hidden' name='persona_reportada_señas[]' value='" + $("#TempPersonaDenunciadaSeñas").val() + "' readonly>" + $("#TempPersonaDenunciadaSeñas").val() + "</td><td class='align-middle'><input class='no-style' type='hidden' name='persona_reportada_color_ojos[]' value='" + $("#TempPersonaDenunciadaColorOjos").val() + "' readonly>" + $("#TempPersonaDenunciadaColorOjos").val() + "</td><td class='align-middle'><input class='no-style' type='hidden' name='persona_reportada_nariz[]' value='" + $("#TempPersonaDenunciadaNariz").val() + "' readonly>" + $("#TempPersonaDenunciadaNariz").val() + "</td><td class='align-middle'><input class='no-style' type='hidden' name='persona_reportada_color_cabello[]' value='" + $("#TempPersonaDenunciadaColorCabello").val() + "' readonly>" + $("#TempPersonaDenunciadaColorCabello").val() + "</td><td class='align-middle'><input class='no-style' type='hidden' name='persona_reportada_cantidad_cabello[]' value='" + $("#TempPersonaDenunciadaCantidadCabello").val() + "' readonly>" + $("#TempPersonaDenunciadaCantidadCabello").val() + "</td><td class='align-middle'><input class='no-style' type='hidden' name='persona_reportada_boca[]' value='" + $("#TempPersonaDenunciadaBoca").val() + "' readonly>" + $("#TempPersonaDenunciadaBoca").val() + "</td><td class='align-middle'><input class='no-style' type='hidden' name='persona_reportada_complexion[]' value='" + $("#TempPersonaDenunciadaComplexion").val() + "' readonly>" + $("#TempPersonaDenunciadaComplexion").val() + "</td><td class='align-middle'><input class='no-style' type='hidden' name='persona_reportada_color_piel[]' value='" + $("#TempPersonaDenunciadaColorPiel").val() + "' readonly>" + $("#TempPersonaDenunciadaColorPiel").val() + "</td><td class='align-middle'><input class='no-style' type='hidden' name='persona_reportada_cejas[]' value='" + $("#TempPersonaDenunciadaCejas").val() + "' readonly>" + $("#TempPersonaDenunciadaCejas").val() + "</td><td class='align-middle'><button type='button' class='btn btn-danger btn-circle' style='z-index:20!important;' onclick='DeletePersona($(\"#Persona" + countPersona + "\"));'><i class='fa fa-trash'></i></button></td></tr>");
  countPersonas();
  EmptyPersonaTemp();

}

function DeleteLugarHechosDireccion(id){
  $(id).remove();
  countLugarHechosDireccion();
  EmptyLugarHechosTemp();
}

function DeletePersona(id){
  $(id).remove();
  countPersonas();
  EmptyPersonaTemp();
}

function countLugarHechosDireccion(){
  if($(".LugarHechosDireccion").length != 0){
    $(".LugarHechosTablaContainer").fadeIn();
  }else{
    $(".LugarHechosTablaContainer").fadeOut();
  }
}

function countPersonas(){
  if($(".Personas").length != 0){
    $(".PersonasTablaContainer").fadeIn();
  }else{
    $(".PersonasTablaContainer").fadeOut();
  }
}


function EmptyReportanAutoTemp(){

  $("#TempVehiculoAdd").fadeOut('fast');

  $('#TempMarcaVehiculo').html('<option value="" disabled selected>Marca...</option>');
  $('#TempModeloVehiculo').html('<option value="" disabled selected>Modelo...</option>');
  $('#TempColorVehiculo').html('<option value="" disabled selected>Color...</option>');
  $('#TempPlacasVehiculo').val('');
  $('#TempCaracteristicasVehiculo').val('');
  $('#TempModeloVehiculo').prop('disabled', true);

}

function showSaveVehiculo(){

  $("#TempVehiculoAdd").fadeIn('fast');

}

function countTotalVehiculos(){
  if($(".VehiculosAdded").length != 0){
    $(".AutosTablaContainer").fadeIn();
  }else{
    $(".AutosTablaContainer").fadeOut();
  }
}

function DeleteVehiculo(id){
  $(id).remove();
  countTotalVehiculos();
  EmptyReportanAutoTemp();
}

function addVehiculoToTable(){

  countVehiculo = countVehiculo + 1; 

  $(".AutosRows").append("<tr id='VehiculoAdded" + countVehiculo  + "' class='VehiculosAdded'><td class='align-middle'><input class='no-style' type='hidden' name='MarcaVehiculo[]' value='" + $("#TempMarcaVehiculo").val() + "' readonly>" + $("#TempMarcaVehiculo option:selected").text() + "</td><td class='align-middle'><input class='no-style' type='hidden' name='ModeloVehiculo[]' value='" + $("#TempModeloVehiculo").val() + "' readonly>" + $("#TempModeloVehiculo option:selected").text() + "</td><td class='align-middle'><input class='no-style' type='hidden' name='ColorVehiculo[]' value='" + $("#TempColorVehiculo").val() + "' readonly>" + $("#TempColorVehiculo option:selected").text() + "</td><td class='align-middle'><input class='no-style' type='hidden' name='PlacasVehiculo[]' value='" + $("#TempPlacasVehiculo").val() + "' readonly>" + $("#TempPlacasVehiculo").val() + "</td><td class='align-middle'><input class='no-style' type='hidden' name='CaracteristicasVehiculo[]' value='" + $("#TempCaracteristicasVehiculo").val() + "' readonly>" + $("#TempCaracteristicasVehiculo").val() + "</td><td class='align-middle'><button type='button' class='btn btn-danger btn-circle' style='z-index:20!important;' onclick='DeleteVehiculo($(\"#VehiculoAdded" + countVehiculo + "\"));'><i class='fa fa-trash'></i></button></td></tr>");
  countTotalVehiculos();
  EmptyReportanAutoTemp();

}