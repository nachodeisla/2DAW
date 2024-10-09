class Tienda {

    constructor(nombre, direccion, telefono) {
        this.nombre = nombre;
        this.direccion = direccion;
        this.telefono = telefono;
        this.listaVehiculos = [];

    }
    annadirVehiculo(vehiculo) {
        this.listaVehiculos.push(vehiculo);


    }

    async cargarVehiculos() {
        /*let vehiculo1 = new Vehiculo("ford", "mustang", "negro", "8080 mdc", 40000, 150, 2010, "coche1.png", 5);
        this.annadirVehiculo(vehiculo1);
        let vehiculo2 = new Vehiculo("bmw", "z4", "negro", "2222 bbb", 40000, 150, 2010, "coche2.png", 5);
        this.annadirVehiculo(vehiculo2);*/

        let datosVehiculos = await fetch("coches.json");
        this.listaVehiculos = await datosVehiculos.json();
        this.mostrarVehiculos();
        
    }
    

    mostrarVehiculos() {

        /*alert(`Este coche es de la marca ${this.marca}, 
        es el modelo ${this.modelo}, 
        es de color ${this.color}, 
        tiene la matricula ${this.matricula}, 
        tiene un total de ${this.kilometros} km, 
        tiene una cilindrada de ${this.cilindrada}, 
        es del año ${this.antiguedad},
        <br>${this.foto}<br> 
        y tiene ${this.asientos} asientos        
        `)*/

        
            
           this.listaVehiculos.forEach(vehiculo=>{
            let codigoHTML = "<table border=2><tbody>"
            for(let propiedad in vehiculo){
                if (propiedada == "foto") {
                    codigoHTML += `<tr><td>${propiedad}</td><td><img src="${vehiculo[propiedad]}"></td></tr>`;
                }else{
                codigoHTML += `<tr><td>${propiedad}</td><td>${vehiculo[propiedad]}</td></tr>`;
            }
            }
            codigoHTML += "</tbody></table>";
            codigoHTML += "<br>";
            document.body.insertAdjacentHTML("beforeend", codigoHTML)
        })
            

            

        
    }



}
