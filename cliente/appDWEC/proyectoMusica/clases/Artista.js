
class Artista{
    constructor(foto, nombre, descripcion, enlace, edad){
        this.foto = foto;
        this.nombre = nombre;
        this.descripcion = descripcion;
        this.enlace = enlace;
        this.edad = edad;

        this.mostrarDatosArtista= function(){
            return `    <div class="cajaArtista">
                        <a href="./principal.html">Pagina principal</a>
                        <p class="nombre">`+this.nombre+`</p>
                        <img src="`+this.foto+`" alt="">
                        <div class="">
                            <p class="descripcion">`+this.descripcion+`</p>
                            <a onclick="`+this.enlace+`">Pagina del artista</a>
                        </div>
                        </div>`;
                        }
                              
        this.eliminarArtista = function(index){
            delete listaArtistas[index]
        }
        
        }
    }





