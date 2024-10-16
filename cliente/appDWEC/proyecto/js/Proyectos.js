onload = ()=>{
    cargarProyectos();
    pintarProyectos(listaProyectos);
    document.getElementById("nuevo").getElementsByTagName("p")[0].addEventListener("click",()=>{ document.getElementById("nuevo").className="oculto";})
}
function crearNuevo(){
    document.getElementById("nuevo").className="visible";
    document.getElementById("guardar").className="visible";
    document.getElementById("actualizar").className="oculto";
}
function volver(){
    location.href="aterrizaje.html"
}
function imprimir(){
    window.print();
}



function ordenar(campo){
    listaProyectos.sort((a,b)=>{
        if (a[campo]>b[campo])return 1;
        else return -1;
    });
    pintarProyectos(listaProyectos);
}
var listaProyectos=[];
function cargarProyectos(){
    listaProyectos.push(new Proyecto(1,
                                     "Proyecto 1",
                                     "",
                                     "1",
                                    new Date(),
                                    new Date(),
                                    "SW",
                                    1000,
                                    "Ana Marquez"));
    listaProyectos.push(new Proyecto(2,
                                     "Proyecto 2",
                                     "",
                                     "2",
                                    new Date(),
                                    new Date(),
                                    "Redes",
                                    2000,
                                    "Ana Marquez"));
    listaProyectos.push(new Proyecto(3,
                                     "Proyecto 3",
                                     "",
                                     "3",
                                    new Date(),
                                    new Date(),
                                    "IA",
                                    3000,
                                    "Julia Marquez"));
}

 function borrarProyecto(codigoProyecto){
     let proyectoBorrar = listaProyectos.findIndex((proyecto) => proyecto.codigo==codigoProyecto);
     if(proyectoBorrar!=-1){
         listaProyectos.splice(proyectoBorrar,1);
     }
     pintarProyectos(listaProyectos);
}

function verProyecto(codigo){
    document.getElementById("nuevo").className="visible";
    document.getElementById("guardar").className="oculto";
    document.getElementById("actualizar").className="oculto";
     let posicion = listaProyectos.findIndex((proyecto) => proyecto.codigo==codigo);
     if(posicion!=-1){

        document.getElementById("codigo").value=listaProyectos[posicion].codigo;


     }
     pintarProyectos(listaProyectos);
}

function editarProyecto(codigo){
    document.getElementById("nuevo").className="visible";
    document.getElementById("guardar").className="oculto";
    document.getElementById("actualizar").className="visible";
     let posicion = listaProyectos.findIndex((proyecto) => proyecto.codigo==codigo);
     if(posicion!=-1){

        document.getElementById("codigo").value=listaProyectos[posicion].codigo;


     }
     pintarProyectos(listaProyectos);
}


function pintarProyectos(lista){
    let tbody=document.getElementsByTagName("tbody")[0];
    tbody.innerHTML="";
    let texto="";
    lista.forEach(elemento => {
        texto+=`<tr>
            <td>${elemento.codigo}</td>
            <td>${elemento.nombre}</td>
            <td>${elemento.presupuestoInicial}</td>
            <td><img style=\"width:40px\"src=\"./imagenes/papelera.png\" onclick=\"borrarProyecto(${elemento.codigo})\"></td>
            <td><img style=\"width:40px\"src=\"./imagenes/lupa.png\" onclick=\"verProyecto(${elemento.codigo})\"></td>
            <td><img style=\"width:40px\"src=\"./imagenes/lapiz.png\" onclick=\"editarProyecto(${elemento.codigo})\"></td>
        </tr>`
    });
    tbody.insertAdjacentHTML("beforeend",texto);
}