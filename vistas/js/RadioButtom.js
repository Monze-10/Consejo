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
// funcion para Descripcion personas denunciadas
$(document).ready(function() {
    $("input[type=radio]").click(function(event){
        var valor = $(event.target).val();
        if(valor =="NoMasSi"){
            $("#NoMas").show();
            
            
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

//funcion origen

function ShowOrigen()
{
/* Para obtener el valor */
var ori = document.getElementById("origen").value;
alert(ori);

switch (ori) {
    case '1':
    $("#foraneo").css('display','block');
    $("#local").css('display','none');
    $("#Extranjero").css('display','none');
            
    break;
    case '2':
    $("#foraneo").css('display','none');
    $("#Local").css('display','block');
    $("#Extranjero").css('display','none');
        
    break;
    case '3':
    $("#foraneo").css('display','none');
    $("#Local").css('display','none');
    $("#Extranjero").css('display','block');
        
    break;
    default:
    $("#Local").css('display','none');
    $("#foraneo").css('display','none');
    $("#Extranjero").css('display','none');
        
    }
}

//funcion necesidades

function ShowSelected()
{
/* Para obtener el valor */
var cod = document.getElementById("producto").value;
alert(cod);

    switch (cod) {
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
            $("#MaltratoInfantil").css('display','none');
            $("#ProteccionAnimales").css('display','none');
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

        
