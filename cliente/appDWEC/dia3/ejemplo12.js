function añadir(){
    var nombre = document.getElementById("nombre").value;
    var numero = document.getElementById("puntos").value;
    var texto = `<tr>
                    <td>${nombre}</td>
                    <td>${numero}</td>
                <tr>`;
document.getElementById("tbody").innerHTML += texto;
}