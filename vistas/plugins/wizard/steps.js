// $(".tab-wizard").steps({
//     headerTag: "h6"
//     , bodyTag: "section"
//     , transitionEffect: "fade"
//     , titleTemplate: '<span class="step">#index#</span> #title#'
//     , labels: {
//         finish: "Guardar"
//     }
//     , onFinished: function (event, currentIndex) {
//        swal("Datos guardados", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
            
//     }
// });


var form = $(".validation-wizard").show();

$(".validation-wizard").steps({
    headerTag: "h6"
    , bodyTag: "section"
    , transitionEffect: "fade"
    , titleTemplate: '<span class="step">#index#</span> #title#'
    , labels: {
        finish: "Guardar"
    }
    , onStepChanging: function (event, currentIndex, newIndex) {
        return currentIndex > newIndex || !(3 === newIndex && Number($("#age-2").val()) < 18) && (currentIndex < newIndex && (form.find(".body:eq(" + newIndex + ") label.error").remove(), form.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form.validate().settings.ignore = ":disabled,:hidden", form.valid())
    }
    , onFinishing: function (event, currentIndex) {
        return form.validate().settings.ignore = ":disabled", form.valid()
    }
    , onFinished: function (event, currentIndex) {
        processData(form);
    }
}), $(".validation-wizard").validate({
    ignore: "input[type=hidden]"
    , errorClass: "text-danger"
    , successClass: "text-success"
    , highlight: function (element, errorClass) {
        $(element).removeClass(errorClass)
    }
    , unhighlight: function (element, errorClass) {
        $(element).removeClass(errorClass)
    }
    , errorPlacement: function (error, element) {
        error.insertAfter(element)
    }
    , rules: {
        email: {
            email: !0
        }
    }
})


function processData(){
    // form.submit();
    swal("Datos guardados correctamente", "","success"). then(function() {
        window.location = "./";
    });

    // swal({
    //     title: "Wow!",
    //     text: "Message!",
    //     type: "success"
    // }). then(function() {
    //     window.location = "index.php?page=captura_reporte";
    // });

}