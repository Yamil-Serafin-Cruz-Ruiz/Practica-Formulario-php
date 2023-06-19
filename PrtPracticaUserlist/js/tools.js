var btnEnv = document.getElementById("btn-enviar");

btnEnv.addEventListener("click", function(event){

    var pass1 = document.getElementById("pss1").value;
    var pass2 = document.getElementById("pss2").value;
    caja = document.getElementById("msj_exit");

    if (pass1 !== pass2 ){
        event.preventDefault();
        caja.textContent = "Las contraseñas no coinciden.";
    } else{
        caja.textContent = "Las contraseñas coinciden.";
    }
})
