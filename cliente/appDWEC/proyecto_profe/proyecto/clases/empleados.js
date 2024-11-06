var listaEmpleados=[];
onload=()=>{
    cargarEmpleados();
    mostrarEmpleados();
}


function cargarEmpleados(){
empleado = new Empleado("1","11111111A","nacho","de isla","puesto1","...","activo",1900,"611111111","...");
listaEmpleados.push(empleado);
empleado = new Empleado("2","22222222B","adrian","sanchez","puesto2","...","activo",2000,"622222222","...");
listaEmpleados.push(empleado);
empleado = new Empleado("3","33333333C","daniel","esteban","puesto3","...","activo",2500,"633333333","...");
listaEmpleados.push(empleado);
empleado = new Empleado("4","44444444D","julian","delgado","puesto4","...","activo",2200,"644444444","...");
listaEmpleados.push(empleado);
empleado = new Empleado("5","33333333E","luis miguel","guerrero","puesto5","...","activo",2500,"655555555","...");
listaEmpleados.push(empleado);
}
