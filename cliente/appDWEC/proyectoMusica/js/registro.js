
onload = () => {
    listaUsuarios = JSON.parse(localStorage.getItem("listaUsuarios"));
    
}

function registrarUsuario() {
    emailRegistro = document.getElementById("emailRegistro").value;
    usuarioRegistro = document.getElementById("usuarioRegistro").value;
    contrasennaRegistro = document.getElementById("contrasennaRegistro").value;
    confirmacionContrasennaRegistro = document.getElementById("confirmacionContrasennaRegistro").value;

    let emailValido=/^[a-zA-Z0-9._]+@(gmail\.com|hotmail\.com)$/;
    let usuarioValido=/^[A-Za-z]+$/;
    let contrasennaValido=/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!?])[A-Za-z\d@$!?]{8,}$/;

    if ((usuarioValido.test(usuarioRegistro))&&(emailValido.test(emailRegistro))&&(contrasennaValido.test(contrasennaRegistro))
        &&(confirmacionContrasennaRegistro==contrasennaRegistro)) {
            if (listaUsuarios.findIndex((usuario) => usuario.email == emailRegistro) != -1) {
                let mensajeError= "el email ya existe";
                registroErroneo(mensajeError);
            }else if (listaUsuarios.findIndex((usuario) => usuario.nombre == usuarioRegistro) != -1) {
                let mensajeError= "el usuario ya esta en uso";
                registroErroneo(mensajeError);
            }else{
                console.log("hola");
                let mensajeError= "dado de alta";
                registroCorrecto(mensajeError);
                usuario = new Usuario(0,emailRegistro,usuarioRegistro,contrasennaRegistro,null,null,null,null);
                listaUsuarios.push(usuario);
                localStorage.setItem("listaUsuarios",JSON.stringify(listaUsuarios));
                setTimeout(() => {
                    window.location.href = "./principalNoUsuario.html";
                }, 1000);
                
                

            }
    }else if(!(usuarioValido.test(usuarioRegistro))){
        let mensajeError= "el valor de usuario no cumple los requisitos(recuerda que puede contener solo letras mayusculas o minisculas)";
        registroErroneo(mensajeError);
    }else if(!(contrasennaValido.test(contrasennaRegistro))){
        let mensajeError= "el valor de contraseña no cumple los requisitos(recuerda que debe contener letras, numeros, un valor especial (@, $, !, ?) y un minimo de 8 caracteres)";
        registroErroneo(mensajeError);
    }else if(!confirmacionContrasennaRegistro==contrasennaRegistro){
        let mensajeError= "Las contraseñas no coinciden";
        registroErroneo(mensajeError);
    }
}

function registroErroneo(mensajeError){
       
    let nuevoP = document.createElement("p");
    nuevoP.style.color="red";
    nuevoP.innerHTML=mensajeError;
    let div = document.getElementById("cajaMensajeError");
    div.appendChild(nuevoP);

    setTimeout(() => {
        nuevoP.remove();
    }, 3000);

}
function registroCorrecto(mensajeError){
       
    let nuevoP = document.createElement("p");
    nuevoP.style.color="green";
    nuevoP.innerHTML=mensajeError;
    let div = document.getElementById("cajaMensajeError");
    div.appendChild(nuevoP);

    setTimeout(() => {
        nuevoP.remove();
    }, 3000);


}

