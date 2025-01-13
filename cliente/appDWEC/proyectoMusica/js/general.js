var listaUsuarios = [];
cargarUsuarios();
var listaArtistas = [];
cargarArtistas();
var listaProductos = [];
cargarProductos();





async function cargarUsuarios() {
    let lecturaUsuarios = await fetch("../json/Usuarios.json");
    listaUsuarios = await lecturaUsuarios.json();
    localStorage.setItem("listaUsuarios", JSON.stringify(listaUsuarios));
    listaUsuarios.forEach(usuario=>{
        usuario.mostrarUsuario = new Usuario().mostrarUsuario
});

}

async function cargarArtistas() {
    let lecturaArtistas = await fetch("../json/Artistas.json");
    listaArtistas = await lecturaArtistas.json();
    localStorage.setItem("listaArtistas", JSON.stringify(listaArtistas));
    listaArtistas.forEach(artista=>{
        artista.mostrarDatosArtista = new Artista().mostrarDatosArtista;
        console.log(artista.mostrarDatosArtista());
    });

}

async function cargarProductos(){
    let lecturaProductos = await fetch("../json/Productos.json");
    listaProductos = await lecturaProductos.json();
    localStorage.setItem("listaProductos", JSON.stringify(listaProductos));
    listaProductos.forEach(producto=>{
        producto.mostrarAClientes = new Producto().mostrarAClientes
});
}


function comprobarUsuario() {
    let nombre = document.getElementById("cajaUsuario").value;
    let contrasenna = document.getElementById("cajaContrasenna").value;

    if (listaUsuarios.findIndex((usuario) => usuario.nombre == nombre &&
        usuario.contrasenna == contrasenna) != -1) {
        //cargar la página de usuario existe
        sessionStorage.setItem("usuario", nombre);
        sessionStorage.setItem("contraseña", contrasenna);
        sessionStorage.setItem("usuario/contraseña", nombre+"/"+contrasenna);

        location.href = "../html/principal.html";

    } else {
        //mostrar un mensaje de error

        // let alertaErrorCodigoClave = [...document.getElementsByClassName("cajasRegistro")];

        // alertaErrorCodigoClave.forEach(caja => {
        //     setTimeout(() => {
        //         caja.setAttribute({"border-color":"red"});
        //     }, 3000);
        // });

        document.getElementById("cajaUsuario").style.borderColor = "red";
        document.getElementById("cajaContrasenna").style.borderColor = "red";
        document.getElementById("errorCodigoClave").className = "visible";
        setTimeout(() => {
            document.getElementById("cajaUsuario").style.borderColor = "white";
            document.getElementById("cajaContrasenna").style.borderColor = "white";
            document.getElementById("errorCodigoClave").className = "oculto";
        }, 3000)


        document.getElementById("errorNoRegistro").className = "oculto";
    }
}

function menuVisibleOculto() {

    if (document.getElementById("menuDesplegable").className == "visible") {
        document.getElementById("menuDesplegable").className = "menuOculto";
    } else if (document.getElementById("menuDesplegable").className == "menuOculto") {
        document.getElementById("menuDesplegable").className = "visible";
    }

}



    
function mostrarUsuario(usuarioActivo){
    usuarioActivo.mostrarUsuario();

}

function pasarImagenes() {
    imagen = document.getElementsByTagName("img")[1];
    imagen.src
}