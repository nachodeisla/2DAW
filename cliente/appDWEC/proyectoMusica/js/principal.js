
var listaUsuarios = [];
var listaArtistas = [];

onload = () => {
    document.getElementById("botonMenu").addEventListener("click", () => menuVisibleOculto());
    cargarUsuarios();
    cargarArtistas();

}
function cargarUsuarios() {
    listaUsuarios.push(new Usuario("nacho@gmail.com", "nacho", "1234"));
    listaUsuarios.push(new Usuario("pablo@gmail.com", "pablo", "2345"));
    listaUsuarios.push(new Usuario("luismi@gmail.com", "luismi", "3456"));
    listaUsuarios.push(new Usuario("wiwi@gmail.com", "wiwi", "4567"));
    listaUsuarios.push(new Usuario("niñero@gmail.com", "niñero", "5678"));

}

function cargarArtistas() {
    listaArtistas.push(new Artista("../imagenes/onedirection.jpg", "One Direction", "Banda de música británico-irlandesa.", " "));
    listaArtistas.push(new Artista("../imagenes/saramalacara.png", "Saramalacara", "Es una cantante y rapera argentina conocida por ser antigua miembo del grupo RipGang", " "));
    listaArtistas.push(new Artista("../imagenes/lanadelrey.png", "Lana del rey", " ... ", " "));
    listaArtistas.push(new Artista("../imagenes/macmiller.jpg", "Mac miller", " ... ", " "));
    listaArtistas.push(new Artista("../imagenes/twentyonepilots.jpg", "Twenty one pilots", " ... ", " "));
    listaArtistas.push(new Artista("../imagenes/Estopa.jpg", "Estopa", "Duo español de rumba catalana formado por los hermanos David y Jose Manuel. ", " "));
    listaArtistas.push(new Artista("../imagenes/tylerthecreator.png", "Tyler the creator", " ... ", " "));
    listaArtistas.push(new Artista("../imagenes/bigbang.jpg", "Big Bang", " ... ", " "));


}


function comprobarUsuario() {
    nombre = document.getElementById("cajaUsuario").value;
    contrasenna = document.getElementById("cajaContrasenna").value;

    if (listaUsuarios.findIndex((usuario) => usuario.nombre == nombre &&
        usuario.contrasenna == contrasenna) != -1) {
        //cargar la página de usuario existe
        location.href = "../html/principalUsuario.html";

    } else {
        //mostrar un mensaje de error
        document.getElementById("errorCodigoClave").className = "visible";
        document.getElementById("errorNoRegistro").className = "oculto";
    }
}


function crearDivAleatorios() {
    max = 7;
    let aux;
    let aux2;
   
    for (let i = 1; i < 4; i++) {
        numero = Math.floor(Math.random() * (max + 1));
        while (numero == aux || numero==aux2) {
            numero = Math.floor(Math.random() * (max + 1));
        }
        let artista = listaArtistas[numero];
        let texto = `
                <a onclick="cajaRegistro()"><img src="${artista.foto}" alt=""></a>
                            <div class="interior">
                                <a onclick="cajaRegistro()">
                                    <p class="titulo">${artista.nombre}</p>
                                </a>
                                <a onclick="cajaRegistro()">
                                    <p class="descripcion">${artista.descripcion}</p>
                                </a></div>`;
        document.getElementsByClassName(`caja${i}`)[0].innerHTML = texto;
        aux2 = aux;
        aux = numero;
        
    }


}

function crearDivTotales() {
    for (let i = 0; i < listaArtistas.length; i++) {
        artista = listaArtistas[i];
    let texto = `
            <a onclick="cajaRegistro()"><img src="${artista.foto}" alt=""></a>
                        <div class="interior">
                            <a onclick="cajaRegistro()">
                                <p class="titulo">${artista.nombre}</p>
                            </a>
                            <a onclick="cajaRegistro()">
                                <p class="descripcion">${artista.descripcion}</p>
                            </a>`;
    document.getElementsByClassName(`caja${i}`)[0].innerHTML = texto;
        
    }
    
}

function menuVisibleOculto() {

    if (document.getElementById("menuDesplegable").className == "visible") {
        document.getElementById("menuDesplegable").className = "menuOculto";
    } else if (document.getElementById("menuDesplegable").className == "menuOculto") {
        document.getElementById("menuDesplegable").className = "visible";
    }

}



function cajaRegistro() {

    document.getElementById("errorNoRegistro").className = "visible";
    document.getElementById("errorCodigoClave").className = "oculto";
    location.href = "../html/principalNoUsuario.html#cabeceraInicio";
}


function pasarImagenes() {
    imagen = document.getElementsByTagName("img")[1];
    imagen.src
}