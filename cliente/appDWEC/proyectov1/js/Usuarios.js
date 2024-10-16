class Usuarios {
    constructor(codigo, clave, nombre, apellidos, correo, puesto, fechaCambioContrasenna, estado, intentosFallidos, fechaUltimoAcceso, fechaUltimoAccesoInvalido) {
        this.codigo = codigo;
        this.clave = clave;
        this.nombre = nombre;
        this.apellidos = apellidos;
        this.correo = correo;
        this.puesto = puesto;
        this.fechaEntrada = new Date();
        this.fechaCambioContrasenna = new Date();
        this.estado = "ACTIVO";
        this.intentosFallidos = 0;
        this.fechaUltimoAcceso = new Date();
        this.fechaUltimoAccesoInvalido = fechaUltimoAccesoInvalido;
    }


}