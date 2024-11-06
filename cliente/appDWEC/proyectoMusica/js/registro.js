
var listaUsuarios = [];
cargarUsuarios();
function cargarUsuarios() {
    listaUsuarios.push(new Usuario("nacho@gmail.com", "nacho", "1234"));
    listaUsuarios.push(new Usuario("pablo@gmail.com", "pablo", "2345"));
    listaUsuarios.push(new Usuario("luismi@gmail.com", "luismi", "3456"));
    listaUsuarios.push(new Usuario("wiwi@gmail.com", "wiwi", "4567"));
    listaUsuarios.push(new Usuario("niñero@gmail.com", "niñero", "5678"));

}


function registrarUsuario() {
    emailRegistro = document.getElementById("emailRegistro").value;
    usuarioRegistro = document.getElementById("usuarioRegistro").value;
    contrasennaRegistro = document.getElementById("contrasennaRegistro").value;
    confirmacionContrasennaRegistro = document.getElementById("confirmacionContrasennaRegistro").value;

    if (listaUsuarios.findIndex((usuario) => usuario.email == emailRegistro ||
        usuario.nombre == usuarioRegistro) != -1) {
        
        document.getElementById("usuario-correoYaExistente").className = "visible1"
        document.getElementById("errorContraseña").className = "oculto"
        document.getElementById("registroExitoso").className = "oculto"

    } else {
       if (contrasennaRegistro!= "" && confirmacionContrasennaRegistro!= "" && 
            (contrasennaRegistro=confirmacionContrasennaRegistro) &&
            contrasennaRegistro!= -1 && confirmacionContrasennaRegistro!= -1
            ){
        listaUsuarios.push(new Usuario(emailRegistro, usuarioRegistro, contrasennaRegistro));
        document.getElementById("registroExitoso").className = "visible2"
        document.getElementById("errorContraseña").className = "oculto"
        document.getElementById("usuario-correoYaExistente").className = "oculto"
    }else{
        document.getElementById("errorContraseña").className = "visible1"
        document.getElementById("registroExitoso").className = "oculto"
        document.getElementById("usuario-correoYaExistente").className = "oculto"
    }
    }
}



function menuAparece() {


}