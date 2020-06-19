// Inicializar los componentes que requieren datos obtenidos de la base de datos.
    init();    

    function init(){

        $.ajax({
            type: 'GET',
            dataType: "json",
            url: 'vistas/ViewComponentes.php?sexo=get',
            success: function (data) {
              for (var key in data) {
                $('#DenuncianteSexo').append("<option value='" + data[key].CON_ID + "'>" + data[key].CON_DESCRIPCION + "</option>");
              }
            }
          });

          $.ajax({
            type: 'GET',
            dataType: "json",
            url: 'vistas/ViewComponentes.php?necesidad=get',
            success: function (data) {
              for (var key in data) {
                $('#DescripcionNecesidad').append("<option value='" + data[key].CON_ID + "'>" + data[key].CON_DESCRIPCION + "</option>");
              }
            }
          });

          $.ajax({
            type: 'GET',
            dataType: "json",
            url: 'vistas/ViewComponentes.php?terminacion_llamada=get',
            success: function (data) {
              for (var key in data) {
                $('#TerminacionLlamada').append("<option value='" + data[key].CON_ID + "'>" + data[key].CON_DESCRIPCION + "</option>");
              }
            }
          });
        
    }


// --------------------------------------------------------------------------------------------------------------------------- //

// Función para ocultar y/o desocultar el número de Folio de No más XT.

    $('#NoMasTrata').on('switchChange.bootstrapSwitch', function (event, state) {

        $("#FolioTrata").val('');
        
        if(state){
            $(".TrataFolio").fadeIn('fast');
        }else{
            $(".TrataFolio").fadeOut('fast');
        }

    });

// --------------------------------------------------------------------------------------------------------------------------- //

// Función para ocultar y/o desocultar el Programa Especial.

    $('#ProgramaEspecialSwitch').on('switchChange.bootstrapSwitch', function (event, state) {

        $('#ProgramaEspecial').html('<option value="" disabled selected>¿Cual?</option>');
        
        if(state){
            $.ajax({
                type: 'GET',
                dataType: "json",
                url: 'vistas/ViewComponentes.php?programa_especial=get',
                success: function (data) {
                  for (var key in data) {
                    $('#ProgramaEspecial').append("<option value='" + data[key].CON_ID + "'>" + data[key].CON_DESCRIPCION + "</option>");
                  }
                }
            });
            $(".ProgramaEspecialOpciones").fadeIn('fast');
        }else{
            $(".ProgramaEspecialOpciones").fadeOut('fast');
        }

    });

// --------------------------------------------------------------------------------------------------------------------------- //

// Función para ocultar y/o desocultar Personas.

$('#ReportanPersonaSwitch').on('switchChange.bootstrapSwitch', function (event, state) {
    
    if(state){
        $(".ReportanPersonaOpciones").fadeIn('fast');
    }else{
        $(".ReportanPersonaOpciones").fadeOut('fast');
        $(".PersonasTablaContainer").fadeOut('fast');
        $(".Personas").remove();
    }

});

// --------------------------------------------------------------------------------------------------------------------------- //


// Función para ocultar y/o desocultar lugar de los hechos.

$('#LugarHechosSwitch').on('switchChange.bootstrapSwitch', function (event, state) {
    
    if(state){
        $(".LugarHechosOpciones").fadeIn('fast');
    }else{
        $(".LugarHechosOpciones").fadeOut('fast');
        $(".LugarHechosTablaContainer").fadeOut('fast');
        $(".LugarHechosDireccion").remove();
    }

});

// --------------------------------------------------------------------------------------------------------------------------- //

// Función para ocultar y/o desocultar autos.

$('#ReportanAutoSwitch').on('switchChange.bootstrapSwitch', function (event, state) {

    $('#TempMarcaVehiculo').html('<option value="" disabled selected>Marca...</option>');
    $('#TempModeloVehiculo').html('<option value="" disabled selected>Modelo...</option>');
    $('#TempColorVehiculo').html('<option value="" disabled selected>Color...</option>');
    $('#TempPlacasVehiculo').val('');
    $('#TempCaracteristicasVehiculo').val('');
    $('#TempModeloVehiculo').prop('disabled', true);
    
    if(state){
        $.ajax({
            type: 'GET',
            dataType: "json",
            url: 'vistas/ViewComponentes.php?marca_vehiculo=get',
            success: function (data) {
              for (var key in data) {
                $('#TempMarcaVehiculo').append("<option value='" + data[key].M_CVEMARCA + "'>" + data[key].M_DESCMARCA + "</option>");
              }
            }
        });

        $.ajax({
            type: 'GET',
            dataType: "json",
            url: 'vistas/ViewComponentes.php?colores=get',
            success: function (data) {
              for (var key in data) {
                $('#TempColorVehiculo').append("<option value='" + data[key].C_CVECOLOR + "'>" + data[key].C_DESCCOLOR + "</option>");
              }
            }
        });

        $(".ReportanAutoOpciones").fadeIn('fast');
    }else{
        $(".ReportanAutoOpciones").fadeOut('fast');
        $(".AutosTablaContainer").fadeOut('fast');
        $(".ReportanAutoDatos").remove();
        $(".VehiculosAdded").remove();
    }

});

function initMarcas(){

    $('#TempMarcaVehiculo').html('<option value="" disabled selected>Marca...</option>');
    $('#TempColorVehiculo').html('<option value="" disabled selected>Color...</option>');

    $.ajax({
        type: 'GET',
        dataType: "json",
        url: 'vistas/ViewComponentes.php?marca_vehiculo=get',
        success: function (data) {
          for (var key in data) {
            $('#TempMarcaVehiculo').append("<option value='" + data[key].M_CVEMARCA + "'>" + data[key].M_DESCMARCA + "</option>");
          }
        }
    });

    $.ajax({
        type: 'GET',
        dataType: "json",
        url: 'vistas/ViewComponentes.php?colores=get',
        success: function (data) {
          for (var key in data) {
            $('#TempColorVehiculo').append("<option value='" + data[key].C_CVECOLOR + "'>" + data[key].C_DESCCOLOR + "</option>");
          }
        }
    });

}

function EmptyPersonaTemp(){
    $("#TempPersonaDenunciadaNombre").val('');
    $("#TempPersonaDenunciadaAlias").val('');
    $("#TempPersonaDenunciadaOcupacion").val('');
    $("#TempPersonaDenunciadaEdad").val('');
    $("#TempPersonaDenunciadaDomicilio").val('');
    $("#TempPersonaDenunciadaSeñas").val('');
    $("#TempPersonaDenunciadaColorOjos").val('Desconoce');
    $("#TempPersonaDenunciadaNariz").val('Desconoce');
    $("#TempPersonaDenunciadaColorCabello").val('Desconoce');
    $("#TempPersonaDenunciadaCantidadCabello").val('Desconoce');
    $("#TempPersonaDenunciadaBoca").val('Desconoce');
    $("#TempPersonaDenunciadaComplexion").val('Desconoce');
    $("#TempPersonaDenunciadaColorPiel").val('Desconoce');
    $("#TempPersonaDenunciadaCejas").val('Desconoce');

    $("#TempPersonaDenunciadaApellidoPaterno").val('');
    $("#TempPersonaDenunciadaApellidoMaterno").val('');
    
    
}

function getModelo(){

    $('#TempModeloVehiculo').html('<option value="" disabled selected>Modelo...</option>');
    $('#TempModeloVehiculo').prop('disabled', true);

    $.ajax({
        type: 'GET',
        dataType: "json",
        url: 'vistas/ViewComponentes.php?id_marca='+$("#TempMarcaVehiculo").val(),
        success: function (data) {
          for (var key in data) {
            $('#TempModeloVehiculo').append("<option value='" + data[key].M_CVESUBMARCA + "'>" + data[key].M_DESCSUBMARCA + "</option>");
          }
        }
    });

    $('#TempModeloVehiculo').prop('disabled', false);
}

// --------------------------------------------------------------------------------------------------------------------------- //

// Función para elegir el orígen del denunciante.

    function ShowOrigen(){

        switch (document.getElementById("DenuncianteOrigen").value) {
            case '1':

                $.ajax({
                    type: 'GET',
                    dataType: "json",
                    url: 'vistas/ViewUbicacion.php?origen=local',
                    success: function (data) {
                      $('#OrigenAlcaldia').html('');
                      $('#OrigenAlcaldia').html("<option disabled selected value=''>Selecciona una opción</option>");
                      for (var key in data) {
                        $('#OrigenAlcaldia').append("<option value='" + data[key].CON_ID + "'>" + data[key].CON_DESCRIPCION + "</option>");
                      }
                      $('#OrigenForaneo').html('');
                      $('#OrigenForaneo').html("<option disabled selected value=''>Selecciona una opción</option>");
                      $('#OrigenExtranjero').html('');
                      $('#OrigenExtranjero').html("<option disabled selected value=''>Selecciona una opción</option>");

                    }
                  });

                $("#foraneo").fadeOut(0);
                $("#extranjero").fadeOut(0);
                $("#local").fadeIn();

            break;
            case '2':

                $.ajax({
                    type: 'GET',
                    dataType: "json",
                    url: 'vistas/ViewUbicacion.php?origen=foraneo',
                    success: function (data) {
                      $('#OrigenForaneo').html('');
                      $('#OrigenForaneo').html("<option disabled selected value=''>Selecciona una opción</option>");
                      for (var key in data) {
                        $('#OrigenForaneo').append("<option value='" + data[key].C_ESTADO + "'>" + data[key].D_ESTADO + "</option>");
                      }
                      $('#OrigenAlcaldia').html('');
                      $('#OrigenAlcaldia').html("<option disabled selected value=''>Selecciona una opción</option>");
                      $('#OrigenExtranjero').html('');
                      $('#OrigenExtranjero').html("<option disabled selected value=''>Selecciona una opción</option>");
                    }
                  });

                $("#local").fadeOut(0);
                $("#extranjero").fadeOut(0);
                $("#foraneo").fadeIn();

            break;
            case '3':

                $.ajax({
                    type: 'GET',
                    dataType: "json",
                    url: 'vistas/ViewUbicacion.php?origen=extranjero',
                    success: function (data) {
                      $('#OrigenExtranjero').html('');
                      $('#OrigenExtranjero').html("<option disabled selected value=''>Selecciona una opción</option>");
                      for (var key in data) {
                        $('#OrigenExtranjero').append("<option value='" + data[key].PA_ID + "'>" + data[key].PA_NOMBRE + "</option>");
                      }
                      $('#OrigenAlcaldia').html('');
                      $('#OrigenAlcaldia').html("<option disabled selected value=''>Selecciona una opción</option>");
                      $('#OrigenForaneo').html('');
                      $('#OrigenForaneo').html("<option disabled selected value=''>Selecciona una opción</option>");
                    }
                  });

                $("#foraneo").fadeOut(0);
                $("#local").fadeOut(0);
                $("#extranjero").fadeIn();

            break;
            default:

                $("#local").fadeOut();
                $("#foraneo").fadeOut();
                $("#xtranjero").fadeOut();

         }
    }

// --------------------------------------------------------------------------------------------------------------------------- //

// Función para elegir la necesidad del denunciante.

    function seleccionarNecesidad(){

        switch (document.getElementById("DescripcionNecesidad").value) {

            // Se evaluan los que no despliegan catálogo de necesidad

            case '5': case '15': case '26': case '29': case '38': case '41': case '44': case '45': case '46': case '47': case '48': case '49':

                $(".Necesidad").fadeOut(); // <- Ocultar cada div de cada necesidad 
                $(".Necesidades").fadeOut(); // <- Ocultar div que contiene todos los div de necesidades

                $("#NecesidadCatalogo").fadeOut(); // <- Ocultar el select de catálogo
                $("#NecesidadDelitoInfraccion").fadeOut(); // <- Ocultar el select de delito/infracción

                $("#DescripcionCatalogo").html('<option value="" disabled selected>Selecciona una opción</option>'); // <- Darles por defecto el valor vacio
                $("#DescripcionDelitoInfraccion").html('<option value="" disabled selected>Selecciona una opción</option>'); // <- Darles por defecto el valor vacio

            break;

            // Se evaluan los que despliegan catálogo de necesidad

            case '3': case '6': case '12': case '14': case '16': case '18': case '27': // <- Estos son los que únicamente muestran un catálogo
            case '2': case '7': case '23': case '42': case '43': // <- Estos son los que muestran catálogo y delito/infracción
            
                $(".Necesidad").fadeOut(); // <- Ocultar cada div de cada necesidad 
                $(".Necesidades").fadeOut(); // <- Ocultar div que contiene todos los div de necesidades

                $("#NecesidadCatalogo").fadeIn(); // <- Mostrar el select de catálogo
                $("#NecesidadDelitoInfraccion").fadeOut(); // <- Ocultar el select de delito/infracción

                $("#DescripcionDelitoInfraccion").html('<option value="" disabled selected>Selecciona una opción</option>'); // <- Darles por defecto el valor vacio
                $('#DescripcionCatalogo').html("<option disabled selected value=''>Selecciona una opción</option>"); // <- Darles por defecto el valor vacio

                $.ajax({
                    type: 'GET',
                    dataType: "json",
                    url: 'vistas/ViewComponentes.php?catalogo=get&id_catalogo=' + document.getElementById("DescripcionNecesidad").value,
                    success: function (data) {
                      for (var key in data) {
                        var valor = data[key].CON_VALOR;
                        console.log("valor", valor);
                        $('#DescripcionCatalogo').append("<option value='" + (valor ? data[key].CON_VALOR : data[key].CON_ID) + "'>" + data[key].CON_DESCRIPCION + "</option>");
                      }
                    }
                  });

                  if(document.getElementById("DescripcionNecesidad").value == '27'){
                        mostrarDivNecesidad(document.getElementById("DescripcionNecesidad").value);
                  }

            break;

            case '1': case '4': case '13': case '35': case '40':

                $(".Necesidad").fadeOut(); // <- Ocultar cada div de cada necesidad 
                $(".Necesidades").fadeOut(); // <- Ocultar div que contiene todos los div de necesidades

                $("#NecesidadCatalogo").fadeOut(); // <- Ocultar el select de catálogo
                $("#NecesidadDelitoInfraccion").fadeOut(); // <- Ocultar el select de delito/infracción

                $("#DescripcionCatalogo").html('<option value="" disabled selected>Selecciona una opción</option>'); // <- Darles por defecto el valor vacio
                $("#DescripcionDelitoInfraccion").html('<option value="" disabled selected>Selecciona una opción</option>'); // <- Darles por defecto el valor vacio

                mostrarDivNecesidad(document.getElementById("DescripcionNecesidad").value);

            break;

            default:

                $(".Necesidad").fadeOut(); // <- Ocultar cada div de cada necesidad 
                $(".Necesidades").fadeOut(); // <- Ocultar div que contiene todos los div de necesidades

                $("#NecesidadCatalogo").fadeOut(); // <- Ocultar el select de catálogo
                $("#NecesidadDelitoInfraccion").fadeOut(); // <- Ocultar el select de delito/infracción

                $("#DescripcionCatalogo").html('<option value="" disabled selected>Selecciona una opción</option>'); // <- Darles por defecto el valor vacio
                $("#DescripcionDelitoInfraccion").html('<option value="" disabled selected>Selecciona una opción</option>'); // <- Darles por defecto el valor vacio
            
        }

    }

    function seleccionarCatalogo(){

        document.getElementById("DescripcionCatalogo").value;

        $(".Necesidad").fadeOut(); // <- Ocultar cada div de cada necesidad 
        $(".Necesidades").fadeOut(); // <- Ocultar div que contiene todos los div de necesidades

        $("#NecesidadCatalogo").fadeIn(); // <- Mostrar el select de catálogo
        $("#NecesidadDelitoInfraccion").fadeIn(); // <- Ocultar el select de delito/infracción

        $('#DescripcionCatalogo').html("<option disabled selected value=''>Selecciona una opción</option>"); // <- Darles por defecto el valor vacio

        $.ajax({
            type: 'GET',
            dataType: "json",
            url: 'vistas/ViewComponentes.php?catalogo=get&id_catalogo=' + document.getElementById("DescripcionNecesidad").value,
            success: function (data) {
              for (var key in data) {
                $('#DescripcionCatalogo').append("<option value='" + data[key].CON_ID + "'>" + data[key].CON_DESCRIPCION + "</option>");
              }
            }
          });

    }

    function mostrarDivNecesidad(id_necesidad){

        console.log(id_necesidad);

        $(".Necesidad").fadeOut(); // <- Ocultar cada div de cada necesidad 
        $(".Necesidades").fadeOut(); // <- Ocultar div que contiene todos los div de necesidades

    }

    function selectNecesidad(){

        switch (document.getElementById("DescripcionNecesidad").value) {
            case '40':
                $("#plateada").css('display','block');
                console.log("hola");
                
            break;
            case 'personadesaparecida':
                console.log("persona desaparecida");
                
                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
                break;
            case 'alcoholimetro':
                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor2
                console.log("alcoholimetro");
            break;
            case 'covid-19':
                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor2
                console.log("covid-19");
            break;
            case '35':
                
                $("#ViolenciaFamiliar").css('display','block');
                $("#CorrupcionPolicial").css('display','none');
                $("#ExtorcionTelefonica").css('display','none');
                $("#MaltratoInfantil").css('display','none');
                $("#ProteccionAnimales").css('display','none');
                $("#suicidio").css('display','none');
                $("#ReporteRed").css('display','none');
                
            break; 
            case 'terminalesseguras':
                console.log("terminalesseguras");
                
                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
            break;
            case 'migrantes':
                console.log("migrantes");
                
                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
            break;
            case 'cortada/equivocada':
                console.log("cortada/equivocada");
                
                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
            break;
            case 'informativa':
                console.log("informativa");
                
                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
            break;
            case '43':
                
                $("#CorrupcionPolicial").css('display','block');
                $("#ExtorcionTelefonica").css('display','none');
                $("#ProteccionAnimales").css('display','none');
                $("#MaltratoInfantil").css('display','none');
                $("#ViolenciaFamiliar").css('display','none');
                $("#suicidio").css('display','none');
                $("#ReporteRed").css('display','none');
            
                
            break;
            case 'robodevehiculos':
                console.log("robodevehiculos");
                
                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
            break;
            case '1':
                
                $("#ExtorcionTelefonica").css('display','block');
                $("#MaltratoInfantil").css('display','none');
                $("#ProteccionAnimales").css('display','none');
                $("#CorrupcionPolicial").css('display','none');
                $("#ViolenciaFamiliar").css('display','none');
                $("#suicidio").css('display','none');
                $("#ReporteRed").css('display','none');
                

                
            break;
            case 'actividaddelictiva':
                console.log("actividaddelictiva");
                
                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
            break;
            case 'orientacionjuridica':
                console.log("orientacionjuridica");
                
                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
            break;
            case '4':
                console.log("entro");
                $("#MaltratoInfantil").css('display','none');
                $("#ProteccionAnimales").css('display','block');
                $("#CorrupcionPolicial").css('display','none');
                $("#ViolenciaFamiliar").css('display','none');
                $("#suicidio").css('display','none');
                $("#ExtorcionTelefonica").css('display','none');
                $("#ReporteRed").css('display','none');
                

                    

                
                
                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
            break;
            case '27':
                
                $("#MaltratoInfantil").css('display','block');
                $("#ProteccionAnimales").css('display','none');
                $("#CorrupcionPolicial").css('display','none');
                $("#ViolenciaFamiliar").css('display','none');
                $("#suicidio").css('display','none');
                $("#ExtorcionTelefonica").css('display','none');
                $("#ReporteRed").css('display','none');
                
                
            break;
            case 'dulce':
                console.log("sistemaalertasocial");
                
                
                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
            break;
            case 'sidec':
                console.log("sidec");
                
                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
            break;
            case 'establecimientosmercantiles':
                console.log("establecimientosmercantiles");
                
                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
            break;
            case 'transporte':
                console.log("transporte");
                
                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
            break;
            case '12':
                console.log("apoyopsicologico");
                
                /*$.ajax ({

                    data: cod,
                    url:'../modelos/apoyo.modelo.php',
                    type: 'post',
                    before send: function(){
                        $("catalogo").html("procesando, espere por favor");
                    },
                    success: function (response){

                        $("catalogo").html(response);
                    }
                });*/
            break;
            case '13':
                
                $("#suicidio").css('display','block');
                $("#ViolenciaFamiliar").css('display','none');
                $("#CorrupcionPolicial").css('display','none');
                $("#ExtorcionTelefonica").css('display','none');
                $("#MaltratoInfantil").css('display','none');
                $("#ProteccionAnimales").css('display','none');
                $("#ReporteRed").css('display','none');
                $("#LineaPlateada").css('display','none');
                
            break;
            case 'emergencias':
                console.log("emergencias");
                
                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
            break;
            case 'reordenamientodetrabajadoresnoasalariados':
                console.log("reordenamientodetrabajadoresnoasalariados");
                
                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
            break;
            case 'protejamosanuestrosjovenes':
                console.log("protejamosanuestrosjovenes");
                
                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
            break;
            case 'personasensituaciondecalle':
                console.log("personasensituaciondecalle");
                
                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
            break;
            case 'culturacivica':
                console.log("culturacivica");
                
                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
            break;
            case 'otros':
                console.log("otros");
                
                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
            break;
            default:
                $("#suicidio").css('display','none');
                $("#ViolenciaFamiliar").css('display','none');
                $("#CorrupcionPolicial").css('display','none');
                $("#ExtorcionTelefonica").css('display','none');
                $("#MaltratoInfantil").css('display','none');
                $("#ProteccionAnimales").css('display','none');
                $("#ReporteRed").css('display','none'); 
                    
            }
    }

// --------------------------------------------------------------------------------------------------------------------------- //




// documento para Reportan autos
$(document).ready(function() {
    $("input[type=radio]").click(function(event){
        var valor = $(event.target).val();
        if(valor =="AutoSi"){
            $("#div1").show();
            
        } else if (valor == "AutoNo") {
            $("#div1").hide();
            
        } else { 
            // Otra cosa
        }
    });
});


    // funcion para Programas Especiales
$(document).ready(function() {
    $("input[type=radio]").click(function(event){
        var valor = $(event.target).val();
        if(valor =="si"){
            $("#ProgramaEspecial").show();
            
        } else if (valor == "no") {
            $("#ProgramaEspecial").hide();
            
        } else { 
            // Otra cosa
        }
    });
});
// funcion para lufar de los hechos
$(document).ready(function() {
    $("input[type=radio]").click(function(event){
        var valor = $(event.target).val();
        if(valor =="LugarSi"){
            $("#LugarHechos").show();
            
        } else if (valor == "LugarNo") {
            $("#LugarHechos").hide();
            
        } else { 
            // Otra cosa
        }
    });
});
// funcion para Descripcion personas denunciadas
$(document).ready(function() {
    $("input[type=radio]").click(function(event){
        var valor = $(event.target).val();
        if(valor =="ReportanPersonasSi"){
            $("#PersonasDenunciadas").show();
            
        } else if (valor == "ReportanPersonasNo") {
            $("#PersonasDenunciadas").hide();
            
        } else { 
            // Otra cosa
        }
    });
});


// funcion para Determinar el origen del usuario
/*function mostrar(id) {
    if (id == "foraneo") {
        $("#foraneo").show();
        $("#local").hide();
        $("#extranjero").hide();
        
    }

    if (id == "local") {
        $("#foraneo").hide();
        $("#local").show();
        $("#extranjero").hide();
        
    }

    if  (id == "extranjero") {
        $("#foraneo").hide();
        $("#local").hide();
        $("#extranjero").show();
        
    }
} */



// funcion para Las personas denunciantes linea plateada
$(document).ready(function() {
    $("input[type=radio]").click(function(event){
        var valor = $(event.target).val();
        if(valor =="ReportanteSi"){
            $("#DatosPersona").show();
            $("#reportante").hide();
            
        } else if (valor == "ReportanteNo") {
            $("#reportante").show();
            $("#DatosPersona").hide();
            
        } else { 
            // Otra cosa
        }
    });
});
// funcion para Las personas con y sin seguridad social
$(document).ready(function() {
    $("input[type=radio]").click(function(event){
        var valor = $(event.target).val();
        if(valor =="SeSoSi"){
            $("#seguridadSocial").show();
            
        } else if (valor == "SeSoNo") {
            $("#seguridadSocial").hide();
            
        } else { 
            // Otra cosa
        }
    });
});
//Funcion para datos de si el adulto vive solo o acompañado
$(document).ready(function() {
    $("input[type=radio]").click(function(event){
        var valor = $(event.target).val();
        if(valor =="acompañado"){
            $("#vive").show();
            
        } else if (valor == "solo") {
            $("#vive").hide();
            
        } else { 
            // Otra cosa
        }
    });
});

//Funcion para datos de si el adulto padece enfermedades
$(document).ready(function() {
    $("input[type=radio]").click(function(event){
        var valor = $(event.target).val();
        if(valor =="padece"){
            $("#cual").show();
            
        } else if (valor == "nopadece") {
            $("#cual").hide();
            
        } else { 
            // Otra cosa
        }
    });
});



        
