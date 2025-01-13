onload=()=>{

    const usuario = sessionStorage.getItem("usuario");

    crearCajaBienvenida(usuario);
    document.getElementById("botonMenu").addEventListener("click", () => menuVisibleOculto());

    if (usuario == 'admin') {
        document.getElementById("cajaAdmin").className = "visible";
        
        cajaAdmin.onclick = function() {
            window.location.href = "admin.html";
        };

    }
}


function crearDivTotales() {
    if (listaArtistas.length > 0) {
        let cajaGrande = document.getElementsByClassName("cajaGrande")[0];
        cajaGrande.innerHTML = "";
        for (let i = 0; i < listaArtistas.length; i++) {
            artista = listaArtistas[i];
            let div = document.createElement("div");
            cajaGrande.appendChild(div);
            div.className = `caja`;
            let texto = `
            <a onclick="mostrarDatosArtista('${artista.nombre}')" id="${i}"><img src="${artista.foto}" alt="" ></a>
                        <div class="interior" id="${i}">
                        <span id="errorNoRegistro" class="oculto errorCajaArtista" style="color: rgb(162, 0, 0);font-size: 125%;" >Accedea tu cuenta para ver el contenido</span>
                            <a onclick="mostrarDatosArtista('${artista.nombre}')">
                                <p class="titulo" id="">'${artista.nombre}'</p>
                            </a>
                            <a onclick="mostrarDatosArtista('${artista.nombre}')">
                                
                            </a>`;

            document.getElementsByClassName(`caja`)[i].innerHTML = texto;
            console.log(artista.nombre);
        }
    }
}

function mostrarDatosArtista(nombre){
console.log(nombre);
    let url = `artista.html?name=${nombre}`;
    window.location.href = url;  
}

function crearCajaBienvenida(usuario){
    let nav = document.getElementsByTagName("nav")[0];
     
     nav.className = "cabeceraInicio";
     let section = document.createElement("section");
     section.className= "navContenedor";
     nav.appendChild(section);
     

    let texto = `
            <div class="titulo"><span class="principal">TICKET-ON</span></div>
            <div class="titulo"><span class="secundario">Bienvenido/a ${usuario} </span></div>
            <div id="cajaAdmin" class="oculto">
                <p>Panel Admin</p>
            </div>
            <div class="menuDesplegable"><a><img class="imagenMenuDespleglable" src="../imagenes/menu.png" alt=""  id="botonMenu"></a><a href="../html/carrito.html"><img class="imagenMenuDespleglable" src="../imagenes/carrito.png" alt=""  id="botonCarrito"></a></div>
            `;
            

            document.getElementsByClassName(`navContenedor`)[0].innerHTML=texto;
}





// function crearDivAleatorios() {
//     if (listaArtistas.length > 0) {
//         max = 8;
//         let aux;
//         let aux2;
//         let cajaGrande = document.getElementsByClassName("cajaGrande")[0];

//         cajaGrande.innerHTML = "";
//         for (let i = 0; i < 3; i++) {
//             numero = Math.floor(Math.random() * (max + 1));
//             while (numero == aux || numero == aux2) {
//                 numero = Math.floor(Math.random() * (max + 1));
//             }
//             let artista = listaArtistas[numero];
//             let texto = `
//             <a onclick="cajaMostrarDatosArtista(event)" id="${i}"><img src="${artista.foto}" alt=""></a>
//                         <div class="interior" id="${i}">
//                         <span id="errorNoRegistro" class="oculto errorCajaArtista" style="color: rgb(162, 0, 0);font-size: 125%;" >Accedea tu cuenta para ver el contenido</span>
//                             <a onclick="cajaMostrarDatosArtista(event)">
//                                 <p class="titulo">${artista.nombre}</p>
//                             </a>
//                             <a onclick="cajaMostrarDatosArtista(event)">
//                             </a></div>`;

//             let div = document.createElement("div");
//             div.className = `caja`;
//             cajaGrande.appendChild(div);
//             document.getElementsByClassName(`caja`)[i].innerHTML = texto;
//             aux2 = aux;
//             aux = numero;

//         }
//     }
// }






