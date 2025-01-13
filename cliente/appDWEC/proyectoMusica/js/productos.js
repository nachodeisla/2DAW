
    
var contadorCargaArtistas=0;
onload = () => {
    crearCajaBusqueda();
    setTimeout(crearOpcionesInicial,100);
    document.getElementById("botonMenu").addEventListener("click", () => menuVisibleOculto());
    const usuario = sessionStorage.getItem("usuario");
    if (usuario == 'admin') {
        document.getElementById("cajaAdmin").className = "visible";
        
        cajaAdmin.onclick = function() {
            window.location.href = "admin.html";
        };

    }
}

function crearOpcionesInicial(){
    if (listaArtistas.length>0) crearOpciones(listaArtistas);
    else {
        contadorCargaArtistas++;
        if (contadorCargaArtistas<10) setTimeout(100,crearOpcionesInicial);
    }
}


    


function crearCajaBusqueda(){
    console.log(listaProductos);
    let nav = document.getElementsByTagName("nav")[0];
     
     nav.className = "cabeceraInicio";
     let section = document.createElement("section");
     section.className= "navContenedor";
     nav.appendChild(section);
     

    let texto = `
            <div class="titulo"><span class="principal">TICKET-ON</span></div>
            <div class="menuBusqueda"><img src="../imagenes/lupa.png"  width="30vw" alt=""><input type="text" class="busqueda" id="barraBusquedaProducto" placeholder="Busca un artista" onkeyup="buscarProductos()"></div>
            <div id="cajaAdmin" class="oculto">
                <p>Panel Admin</p>
            </div>
            <div class="menuDesplegable"><a><img class="imagenMenuDespleglable" src="../imagenes/menu.png" alt=""  id="botonMenu"></a><a href="../html/carrito.html"><img class="imagenMenuDespleglable" src="../imagenes/carrito.png" alt=""  id="botonCarrito"></a></div>    
            `;

            document.getElementsByClassName(`navContenedor`)[0].innerHTML=texto;
}

function crearOpciones(){
    let selectArtistas = document.getElementById("selectArtistas");
    for (let i = 0; i < listaArtistas.length ; i++) {
        let option = document.createElement("option");
        option.value=listaArtistas[i].nombre;
        option.innerText=listaArtistas[i].nombre;
        //option.innerHTML=listaArtistas[i].nombre;
        //option.appendChild(document.createTextNode(listaArtistas[i].nombre))
        selectArtistas.appendChild(option);
    }
}


function buscarProductos(){
    let busquedaProducto = document.getElementById("barraBusquedaProducto").value;
    let listaProductosFiltrada=listaProductos.filter((producto)=>producto.artista.toLowerCase().includes(busquedaProducto.toLowerCase()))
    crearDivProductos(listaProductosFiltrada)
}

function filtrarListaProductos(){
    let listaProductosFiltrada=[];
    let productoBusqueda =  document.getElementById("productoBusqueda").value;
    let artistaBusqueda = document.getElementById("selectArtistas").value;

    if ((productoBusqueda!="todos")&&(artistaBusqueda!="todos")) {

        listaProductosFiltrada= listaProductos.filter((producto)=> 
            producto.artista == artistaBusqueda && producto.producto==productoBusqueda)

    }else if((productoBusqueda=="todos")&&(artistaBusqueda!="todos")) {

        listaProductosFiltrada= listaProductos.filter((producto)=> 
            producto.artista == artistaBusqueda)

    }else if((productoBusqueda!="todos")&&(artistaBusqueda=="todos")) {

        listaProductosFiltrada= listaProductos.filter((producto)=> 
            producto.producto==productoBusqueda)

    }else{

        listaProductosFiltrada=listaProductos.concat();

    }
    console.log(listaProductosFiltrada);
    crearDivProductos(listaProductosFiltrada);
}
function crearDivProductos(lista) {
    
    if (lista.length > 0) {
        let cajaGrande = document.getElementsByClassName("cajaGrande")[0];
        cajaGrande.innerHTML = "";
        for (let i = 0; i < lista.length; i++) {
            
            let div = document.createElement("div");
            cajaGrande.appendChild(div);
            div.className = `caja`;
            let texto = lista[i].mostrarAClientes();

            document.getElementsByClassName(`caja`)[i].innerHTML = texto;

        }
    }
}

let carrito;
function annadirAlCarrito(event){
    let cookieCarrito=recuperarCookie("carrito");
    if(cookieCarrito){

       carrito = JSON.parse(cookieCarrito);

    }else{

         carrito = [];

    }

    let productoCarrito = carrito.find((producto) => producto.productoId == event.currentTarget.id);
    let productoAAnnadir = listaProductos.find((producto) => producto.id == event.currentTarget.id);

    if (productoCarrito) {

        productoCarrito.productoCantidad += 1;
        productoAAnnadir.stock -= 1;

    }else{

        carrito.push({productoId: productoAAnnadir.id, productoFoto: productoAAnnadir.foto, productoNombre: productoAAnnadir.nombre,
                     productoPrecio: productoAAnnadir.precio, productoCantidad: 1});
        productoAAnnadir.stock -= 1;

    }

    document.cookie =`carrito=${JSON.stringify(carrito)}`;

}

function recuperarCookie(nombreCookie){

    let listaCoockies=`; ${document.cookie}`;
    let miCookie = listaCoockies.split(`; ${nombreCookie}=`);
    if(miCookie.length===2){
        return miCookie.pop().split(";").shift();
    }

}