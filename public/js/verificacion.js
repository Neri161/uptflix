$(document).ready(function (){
    var mayus = new RegExp("^(?=.*[A-Z])");
    var lower = new RegExp("^(?=.*[a-z])");
    var len = new RegExp("^(?=.{6,})");

    $("#contrasenia-1").on("keyup",function (){
        var pass=$("#contrasenia-1").val();
        if(mayus.test(pass) && lower.test(pass) && len.test(pass)){
            $("#mensaje").text("Segura").css("color","green");
        }else{
            $("#mensaje").text("Insegura").css("color","red");
        }
    });
    $("#contrasenia-2").on("keyup",function (){
        var pass=$("#contrasenia-1").val();
        var pass2=$("#contrasenia-2").val();
        if(pass == pass2){
            $("#mensaje-2").text("Coinciden").css("color","green");
        }else{
            $("#mensaje-2").text("No coinciden").css("color","red");
        }
    });

    $("#guardar").click(function (){
        var nombre = $("#nombre").val();
        var apellidopaterno = $("#paterno").val();
        var apellidomaterno = $("#materno").val();
        var correo=$("#correo").val();
        var pass1=$("#contrasenia-1").val();
        var pass2=$("#contrasenia-2").val();
        if (nombre=="" || nombre==null){
            alert("Ingresa el Nombre");
            $("#nombre").focus();
            return false;
        }
        if (apellidopaterno=="" || apellidopaterno==null){
            alert("Ingresa el Apellido Paterno");
            $("#apellido-paterno").focus();
            return false;
        }
        if (apellidomaterno=="" || apellidomaterno==null){
            alert("Ingresa el Apellido Materno");
            $("#apellido-Materno").focus();
            return false;
        }
        if (correo=="" || correo==null){
            alert("Ingresa el correo");
            $("#correo").focus();
            return false;
        }
        if ((pass1=="" || pass1==null) || (pass2=="" || pass2==null)){
            alert("ingresa la contraseña");
            $("#password").focus();
            return false;
        }
        if (pass1 != pass2){
            alert("Las contraseñas no son iguales");
            $("#password").focus();
            return false;
        }
    });
});
