class Proyecto {
    constructor(codigo, nombre, descripcion, fechaInicio, fechaLimite, cliente, tipo, presupuestoInicial, responsable) {
        this.codigo = codigo;
        this.nombre = nombre;
        this.descripcion = descripcion;
        this.fechaInicio = fechaInicio;
        this.fechaLimite = fechaLimite;
        this.estado = "p";
        this.tipo = tipo;
        this.cliente = cliente;
        
        this.presupuestoInicial = presupuestoInicial;
        this.responsable = responsable;
    }
    verDetalle() {

    }
}