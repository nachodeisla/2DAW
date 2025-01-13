
onload = () => {

    crearCajaRegistro();

}


 function crearCajaRegistro(){
     let nav = document.getElementsByTagName("nav")[0];
     
     nav.className = "cabeceraInicio";
     let section = document.createElement("section");
     section.className= "navContenedor";
     nav.appendChild(section);
     
    
     console.log(listaUsuarios);

     let usuario=listaUsuarios.findIndex((usuario)=>usuario.email=="nouser@gmail.com");
     
     

     let texto = `
                 <div class="titulo"><h2 class="">TICKET-ON</h2></div>
             <div class="menuRegistro"><form action=""><p>
                         <img src="../imagenes/user.png" alt="" width="20vw"> <input type="text" id="cajaUsuario" class="">
                         <img src="../imagenes/key.png" alt="" width="20vw"> <input type="password" id="cajaContrasenna" clas="">
                         <button type="button" value="Entrar" onclick="comprobarUsuario()">Entrar</button>
                         <a href="./registro.html"><button type="button" value="Registrarse">Registrarse</button></a>
                         <span id="errorCodigoClave" class="oculto" style="color: rgb(162, 0, 0);font-size: 125%;"> Error </span>
                     </p></form></div>
             <div class="menuDesplegable">
                 
             </div> 
             `
            //  +usuario.mostrarUsuario()
             ;

             document.getElementsByClassName(`navContenedor`)[0].innerHTML=texto;
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
            <a onclick="cajaNoRegistro(event)" id="${i}"><img src="${artista.foto}" alt="" ></a>
                        <div class="interior" id="${i}">
                        <span id="errorNoRegistro" class="oculto errorCajaArtista" style="color: rgb(162, 0, 0);font-size: 125%;" >Accedea tu cuenta para ver el contenido</span>
                            <a onclick="cajaNoRegistro(event)">
                                <p class="titulo" id="">${artista.nombre}</p>
                            </a>
                            <a onclick="cajaNoRegistro(event)">
                            </a>`;

            document.getElementsByClassName(`caja`)[i].innerHTML = texto;

        }
    }
}



function cajaNoRegistro(event) {
    document.getElementById("cajaUsuario").style.borderColor = "white";
    document.getElementById("cajaContrasenna").style.borderColor = "white";
    document.getElementById("errorCodigoClave").className = "oculto";

    let posicion = event.currentTarget;
    console.log(posicion);
    let mensajeNoRegistro = document.getElementsByClassName("errorCajaArtista");

    mensajeNoRegistro[posicion.id].className = "visible errorCajaArtista";
    if (mensajeNoRegistro[posicion.id].className == "visible errorCajaArtista") {

        setTimeout(() => {
            mensajeNoRegistro[posicion.id].className = "oculto errorCajaArtista";
        }, 3000);
    }

    if (mensajeNoRegistro.className == "visible") {

        setTimeout(() => {
            mensajeNoRegistro.className = "oculto";
        }, 3000);
    }
}


function pasarImagenes() {
    imagen = document.getElementsByTagName("img")[1];
    imagen.src
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
    //             <a onclick="cajaNoRegistro(event)" id="${i}"><img src="${artista.foto}" alt=""></a>
    //                         <div class="interior" id="${i}">
    //                         <span id="errorNoRegistro" class="oculto errorCajaArtista" style="color: rgb(162, 0, 0);font-size: 125%;" >Accedea tu cuenta para ver el contenido</span>
    //                             <a onclick="cajaNoRegistro(event)">
    //                                 <p class="titulo">${artista.nombre}</p>
    //                             </a>
    //                             <a onclick="cajaNoRegistro(event)">
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
    