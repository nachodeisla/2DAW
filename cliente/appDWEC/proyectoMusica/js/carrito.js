
    
var contadorCargaArtistas=0;
let carrito=[];
onload = () => {
    crearCajaBusqueda();
    
    document.getElementById("botonMenu").addEventListener("click", () => menuVisibleOculto());
    const usuario = sessionStorage.getItem("usuario");
    if (usuario == 'admin') {
        document.getElementById("cajaAdmin").className = "visible";
        
        cajaAdmin.onclick = function() {
            window.location.href = "admin.html";
        };
    }
    let recuperarCookieCarrito= recuperarCookie("carrito");
    if(recuperarCookieCarrito){

       carrito = JSON.parse(recuperarCookieCarrito);
       crearProductoCompra(carrito);
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
            
            <div class="titulo"><span class="secundario">tu carrito</span></div>
            <div id="cajaAdmin" class="oculto">
                <p>Panel Admin</p>
            </div>
            <div class="menuDesplegable"><a><img class="imagenMenuDespleglable" src="../imagenes/menu.png" alt=""  id="botonMenu"></a></div>    
            `;

            document.getElementsByClassName(`navContenedor`)[0].innerHTML=texto;
}



function recuperarCookie(nombreCookie){

    let listaCoockies=`; ${document.cookie}`;
    let miCookie = listaCoockies.split(`; ${nombreCookie}=`);
    if(miCookie.length===2){
        return miCookie.pop().split(";").shift();
    }

}


function crearProductoCompra(lista){

    let productosCarrito = document.getElementsByClassName("productosCarrito")[0];
    let totalCarrito = document.getElementsByClassName("totalCarrito")[0];
    productosCarrito.innerHTML="";
    totalCarrito.innerHTML="";



    let resumen = document.createElement("p");
            resumen.className="resumen";
            resumen.innerHTML="Resumen:";
    totalCarrito.appendChild(resumen);

    lista.forEach(producto => {
    
            let divProducto = document.createElement("div");
                divProducto.className="producto";
        productosCarrito.appendChild(divProducto);
                let divCaracteristicas = document.createElement("div");
                    divCaracteristicas.className="caracteristicas";
            divProducto.appendChild(divCaracteristicas);
                    let imgProducto = document.createElement("img");
                        imgProducto.className="productoImagen";
                        imgProducto.src=producto.productoFoto;
                    let nombreProducto = document.createElement("p");
                        nombreProducto.className="productoNombre";
                        nombreProducto.innerHTML=producto.productoNombre;
                    let precioProducto = document.createElement("p");
                        precioProducto.className="productoPrecio";
                        precioProducto.innerHTML=producto.productoPrecio+"€";
                divCaracteristicas.appendChild(imgProducto);
                divCaracteristicas.appendChild(nombreProducto);
                divCaracteristicas.appendChild(precioProducto);

                let divOpciones = document.createElement("div");
                    divOpciones.className="opciones";
            divProducto.appendChild(divOpciones);
                    let imgBasura = document.createElement("img");
                        imgBasura.className="basuraImagen";
                        imgBasura.src="../imagenes/basura.png";
                        imgBasura.id=producto.productoNombre;
                        imgBasura.addEventListener("click", () => eliminarProductoCesta(event));
                    let divCantidad = document.createElement("div");
                        nombreProducto.className="productoCantidad";

                divOpciones.appendChild(imgBasura);
                divOpciones.appendChild(divCantidad);

                        let botonRestar = document.createElement("button");
                        botonRestar.id="botonRestar";
                        botonRestar.innerHTML="-";
                        let cajaCantidad = document.createElement("input");
                        cajaCantidad.id="cajaCantidad";
                        cajaCantidad.value=producto.productoCantidad;
                        let botonSumar = document.createElement("button");
                        botonSumar.id="botonSumar";
                        botonSumar.innerHTML="+";

                    divCantidad.appendChild(botonRestar);
                    divCantidad.appendChild(cajaCantidad);
                    divCantidad.appendChild(botonSumar);

            
            let divPrecioProductos = document.createElement("div");
            divPrecioProductos.className="precioProductos";
                let nombreProducto2 = document.createElement("p");
                        nombreProducto2.className="productoNombre";
                        nombreProducto2.innerHTML=producto.productoNombre;

                let precioProductoTotal = document.createElement("p");
                        precioProductoTotal.className="productoPrecioTotal";
                        precioProductoTotal.innerHTML= producto.productoPrecio*producto.productoCantidad+"€";
                        
                        divPrecioProductos.appendChild(nombreProducto2);
                        divPrecioProductos.appendChild(precioProductoTotal);

            totalCarrito.appendChild(divPrecioProductos);
            

        });

       
        let total = document.createElement("p");
                total.innerHTML="Total: " + totalCompra(lista);
                
        let botonCompra = document.createElement("button");
            botonCompra.id="comprar";

        totalCarrito.appendChild(total);
        totalCarrito.appendChild(botonCompra);
    
}


function totalCompra(lista){
    let precioTotal=0;
    lista.forEach(producto => {
        precioTotal +=  parseInt(producto.productoPrecio) * parseInt(producto.productoCantidad);
    });
    return precioTotal;     
}


function eliminarProductoCesta(event){

    let productoAEliminar = event.target.id;
   
    let posicionProductoAEliminar=carrito.findIndex(producto => {
        producto.productoNombre==productoAEliminar;
    });
    alert(posicionProductoAEliminar);

}
