var listanombre=["juan","jose","jaime","jazmin"];

function añadir() {


    var nombre = document.getElementById("nombre").value;
    



    var puntos = document.getElementById("puntos").value;
    var tabla1 = document.getElementById("tabla1");
    var tbody = document.getElementById("tbody");
    var contador = document.getElementById("contador").value;

    tabla1.appendChild(tbody);
    document.body.appendChild(tabla1);

    var filanueva = document.createElement("tr");
    tbody.appendChild(filanueva);

    var columnanueva = document.createElement("td");
    filanueva.appendChild(columnanueva);

    var columnanueva2 = document.createElement("td");
    filanueva.appendChild(columnanueva2);

    var contenidonombre = document.createTextNode(nombre);
    columnanueva.appendChild(contenidonombre);
    var contenidopuntos = document.createTextNode(puntos);
    columnanueva2.appendChild(contenidopuntos);

    document.getElementById("contador").value = parseInt(document.getElementById("contador").value) + parseInt(contenidopuntos);


}



/* solucion
function añadir2() {
    let nombre = document.getElementById("nombre").value;
    let puntos = document.getElementById("puntos").value;
    let texto = '<tr>
        < td > $(nombre)</td>
        < td > $(puntos)</td>
        </tr>
        '

}*/