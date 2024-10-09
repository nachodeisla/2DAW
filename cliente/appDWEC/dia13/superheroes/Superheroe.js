class SuperHeroe{
    constructor(identidadSecreta, colorTraje, superpoderes, cantidadPeso){
        this.identidadSecreta = identidadSecreta;
        this.colorTraje = colorTraje;
        this.superpoderes = superpoderes;
        this.cantidadPeso =cantidadPeso;
        
    }
}
class SuperHeroeVolador extends SuperHeroe{

    constructor(identidadSecreta, colorTraje, superpoderes, cantidadPeso, velocidadVuelo){
        this.super(identidadSecreta, colorTraje, superpoderes, cantidadPeso);
        this.velocidadVuelo =velocidadVuelo ;

    }

}