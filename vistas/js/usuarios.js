$(".TABLE-ACT").on("click", ".EliminarU", function(){
    var Uid = $(this).attr("Uid");

    window.location = "index.php?url=usuarios&Uid="+Uid;
});

$(".TABLE-ACT").on("click", ".EditarU", function(){
    var Uid = $(this).attr("Uid");
    var datos = new FormData();

    datos.append("Uid", Uid);

    $.ajax({
        url: "ajax/ajaxPrueba.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta){
            console.log(respuesta);
            $("#nombreN").val(respuesta["nombre"]);
            $("#Uid").val(respuesta["idU"]);
            $("#apellidosN").val(respuesta["apellidos"]);
            $("#ciudadN").val(respuesta["ciudad"]);
            /*Se está guardando el valor sin la necesidad de poner la descripción pq ya la tengo maquetada*/
            $("#departamentoN").val(respuesta["idDep"]);
            $("#rolN").val(respuesta["idRol"]);
        }
    })
});

$(".TABLE-DEPA").on("click", ".EliminarD", function(){
    var idD = $(this).attr("idD");

    window.location = "index.php?url=usuarios&idD="+idD;
});

$(".TABLE-DEPA").on("click", ".EditarD", function(){
    var idD = $(this).attr("idD");
    var datos2 = new FormData();

    datos2.append("idD", idD);

    $.ajax({
        url: "ajax/ajaxPrueba.php",
        method: "POST",
        data: datos2,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuestas){
            console.log(respuestas);
            $("#nombreDN").val(respuestas["descripcionD"]);
            $("#idD").val(respuestas["id"]);
        }
    })
});

$(".TABLE-ROL").on("click", ".EliminarR", function(){
    var idR = $(this).attr("idR");

    window.location = "index.php?url=usuarios&idR="+idR;
});

$(".TABLE-ROL").on("click", ".EditarR", function(){
    var idR = $(this).attr("idR");
    var datos3 = new FormData();

    datos3.append("idR", idR);

    $.ajax({
        url: "ajax/ajaxPrueba.php",
        method: "POST",
        data: datos3,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta){
            console.log(respuesta);
            $("#nombreRN").val(respuesta["descripcionR"]);
            $("#idR").val(respuesta["id"]);
        }
    })
});