listaVideojuegos=[];
function cargarVideojuegos(){
    listaVideojuegos.push(  {"nombre":"Pokemon Esmeralda",
                            "precio":"19.99€",
                            "foto":"../tienda/img/pokemonesmeralda.png"});
    
    listaVideojuegos.push(  {"nombre":"Golden Sun",
                            "precio":"19.99€",
                            "foto":"../tienda/img/goldensun.png"});

    listaVideojuegos.push(  {"nombre":"Dragon Quest IX",
                            "precio":"19.99€",
                            "foto":"../tienda/img/dragonquestix.png"});

    listaVideojuegos.push(  {"nombre":"Castlevania",
                            "precio":"19.99€",
                            "foto":"../tienda/img/castlevania.png"});
                            
    listaVideojuegos.push(  {"nombre":"Pokemon Mundo Msterioso",
                            "precio":"19.99€",
                            "foto":"../tienda/img/pokemonmundomisterioso.png"});
    
    listaVideojuegos.push(  {"nombre":"Animal Crossing",
                            "precio":"19.99€",
                            "foto":"../tienda/img/animalcrossing.png"});

    listaVideojuegos.push(  {"nombre":"Kingdom Hearts",
                            "precio":"19.99€",
                            "foto":"../tienda/img/kingdomhearts.png"});

    listaVideojuegos.push(  {"nombre":"Samus",
                            "precio":"19.99€",
                            "foto":"../tienda/img/samus.png"});                        
}

function mostrarVideojuegos(posicion){
    //let posicion = event.data.posicion;
    $("#detalle")
                .css({"justify-content":"center"}).empty();
    $("<button type='button'> <- </button>")
                                .appendTo("#detalle")
                                .on("click",{}, ()=>mostrarVideojuegos(posicion-4))
                                ;  

    for (let i = posicion; i < (posicion+4); i++) {
        let div= $("<div></div>")
                                .appendTo("#detalle")
                                .css({"border":"solid 2px red","text-align":"center","margin-left":"1%","margin-right":"1%"});
        //    div.append("<img src='${listaVideojuegos[0].foto}'>");
           $(`<img src='${listaVideojuegos[i].foto}'>`)
                                                        .css({"width": "200px","height": "200px"})
                                                        .appendTo(div);
           $(`<p>${listaVideojuegos[i].nombre}</p>`)
                                                    .appendTo(div);
           $(`<p>${listaVideojuegos[i].precio}</p>`)
                                                    .appendTo(div);
        
    }

    $(`<button type='button'> -> </button>`)
                                            .appendTo("#detalle")
                                            .on("click",{}, ()=>mostrarVideojuegos(posicion+4))
                                            ; 

    
  
}

function actualizarCarrito(){
    let lista=[];
    if (localStorage.getItem("carrito")) {
        lista=JSON.parse(localStorage.getItem("carrito"))
    }
    // $("#carrito").text(lista.length)
    $("carrito").empty();
    $(`<h1>${lista.length}</h1>`).css({"color":"red"}).appendTo("#carrito");
}

$(document).ready(()=>{
    $("<img src='../tienda/img/anuncio.gif'>")
                                                .appendTo('#carrusel')
                                                .css({"width":"100px",
                                                      "position":"absolute"
                                                })
                                                .animate({
                                                    left: 400,
                                                    width:"+=50px"
                                                },2000);
    actualizarCarrito();
cargarVideojuegos();
mostrarVideojuegos(0);
});