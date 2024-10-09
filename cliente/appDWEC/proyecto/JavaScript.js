
onload = () => {
    cargarProyectos();
    pintarProyectos(listaProyectos);

}
var listaProyectos = new Array();

function enviar() {
    var usuarios = new Array();
    usuarios.push(["usuario1", "contraseña1"]);
    usuarios.push(["usuario2", "contraseña2"]);
    usuarios.push(["usuario3", "contraseña3"]);

    let usuariocorrecto = document.getElementById("user").value;
    let contraseñacorrecta = document.getElementById("password").value;

    if (usuarios.findIndex((usuario) => usuario[0] == usuariocorrecto && usuario[1] == contraseñacorrecta) != -1) {

        location.href = "aterrizaje.html"
    } else {
        document.getElementById("errorCodigoClave").className = "visiblelogin";
    }
    ;
}

function cargarProyectos() {

    listaProyectos.push([10, "Presupuesto IES El Cañaveral", "10000€"]);
    listaProyectos.push([4, "Presupuesto Itaca", "15000€"]);
    listaProyectos.push([80, "Presupuesto Metropolis Center", "20000€"]);
    listaProyectos.push([23, "Presupuesto Desatranques Jaén", "20000€"]);
    listaProyectos.push([67, "Presupuesto CasaDani", "20000€"]);
    listaProyectos.push([89, "Presupuesto La Casa del Libro", "20000€"]);
    listaProyectos.push([7, "Presupuesto Rebellion", "20000€"]);

}
function pintarProyectos(lista) {

    let tbody = document.getElementsByTagName("tbody")[0];
    tbody.innerHTML = "";

    let texto = "";
    listaProyectos.forEach(proyecto => {
        texto += `
        <tr>
            <td>${proyecto[0]}</td>
            <td>${proyecto[1]}</td>
            <td>${proyecto[2]}</td>
        </tr>`});
    tbody.insertAdjacentHTML("beforeend", texto);
}

function ordenarProyectos() {
    listaProyectos.sort((a, b) => {
        if (a[0] > b[0]) return 1
        else { return -1 }

    })
    pintarProyectos(listaProyectos);


}

function cancelar() {
    location.href = "aterrizaje.html";

}
function imprimir() {
    window.print();

}

function mostrarTablaAñadirProyecto(){
document.getElementById("nuevoProyecto").className="visible";

}

function nuevoProyecto() {
    añadirNuevoProyecto();

}

function añadirNuevoProyecto(){


}













/*
function imprimir() {
    
    listaProyectos.push([1, "Presupuesto IES El Cañaveral", "10000€"]);
    listaProyectos.push([2, "Presupuesto Itaca", "15000€"]);
    listaProyectos.push([3, "Presupuesto Metropolis Center", "20000€"]);
    listaProyectos.push([4, "Presupuesto Desatranques Jaén", "20000€"]);
    listaProyectos.push([5, "Presupuesto CasaDani", "20000€"]);
    listaProyectos.push([6, "Presupuesto La Casa del Libro", "20000€"]);
    listaProyectos.push([7, "Presupuesto Rebellion", "20000€"]);

    var Tabla = `<table><thead>
            <tr>
                <th>Código</th>
                <th>Descripcion</th>
                <th>Presupuesto Inicial</th>
            </tr>`;

    listaProyectos.forEach((proyecto, posicion, array) => Tabla += `<tr>
        <td>${proyecto[0]}</td>
        <td>${proyecto[1]}</td>
        <td>${proyecto[2]}</td>
    </tr>`);
    Tabla += `</thead></table>`;

    document.body.innerHTML = Tabla;
    document.getElementById("tablavisible").className = "oculto";
}
*/