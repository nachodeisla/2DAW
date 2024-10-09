class Alumno {
    constructor(nombre, apellidos,numeroMatricula,listaDeModulos) {
        this.nombre = nombre |"Sin nombre";
        this.apellidos = apellidos | "Sin apellidos";
        this.numeroMatricula = numeroMatricula | "sin matricula";
        this.listaDeModulos = listaDeModulos | [];
    }
    mostrarDetalles() {
        let htmldiv = `
            <div>
            <p>El nombre del alumno es : ${this.nombre}</p>
            <p>Los apellidos del alumno son : ${this.apellidos}</p>
            <p>El numero de matricula es : ${this.numeroMatricula}</p>
            <p>Los modulos del alumno son : ${this.listaDeModulos}</p>
        `
        document.body.insertAdjacentHTML("beforeend", htmldiv);
    }
    modificarMatricula() {

    }
}

