class Vehiculo {
    constructor(marca, modelo, color, matricula, kilometros, cilindrada, antiguedad, foto, numeroAsientos = 4) {
        this.marca = marca;
        this.modelo = modelo;
        this.color = color;
        this.matricula = matricula;
        this.kilometros = kilometros;
        this.cilindrada = cilindrada;
        this.antiguedad = antiguedad;
        this.foto = foto;
        this.numeroAsientos = numeroAsientos;

    }
    verAntiguedad() {
        alert(`Este coche es del año ${this.antiguedad}`);
    }
    verDiseño() {
        let codigoHTML="<table><tbody>"
        for(propiedad in this){
        codigoHTML+=`<tr><td>${propiedad}</td><td>${this[propiedad]}</td></tr>`;
    }
    codigoHTML+="</tbody></table>";

    document.body.insertAdjacentHTML("beforeend",codigoHTML)

    }
    fijarColor() {
        `establecerá el color del coche pidiendoselo al usuario`
    }
    fijarFoto() {
        `establecerá el nombre del archivo de imagen del coche`
    }



}