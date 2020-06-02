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
function mostrar(id) {
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
} 



// funcion para Las personas denunciantes linea plateada
$(document).ready(function() {
    $("input[type=radio]").click(function(event){
        var valor = $(event.target).val();
        if(valor =="ReportanteSi"){
            $("#reportante").hide();
            
        } else if (valor == "ReportanteNo") {
            $("#reportante").show();
            
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
