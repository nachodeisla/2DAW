class Empleado {
    constructor(codigo, dni, nombre, apellidos, puesto, foto, estado, nomina, contacto, curriculum) {
        this.codigo = codigo;
        this.dni = dni;
        this.nombre = nombre;
        this.apellidos = apellidos;
        this.puesto = puesto;
        this.foto = foto;
        this.estado = estado ||;
        this.nomina = nomina ||;
        this.contacto = contacto ||;
        this.curriculum = curriculum ||;


    }


}
