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

            $('#temp_lugar_hechos_estado').prop('disabled', false);
            $('#temp_lugar_hechos_colonia').prop('disabled', false);
            $('#temp_lugar_hechos_municipio').prop('disabled', false);

          }
        }
      }
    });
  } else {

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