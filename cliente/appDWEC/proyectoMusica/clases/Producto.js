
class Producto{
    constructor(id, artista, producto, nombre, descripcion, foto, precio, stock){
        this.id = id;
        this.artista = artista;
        this.producto = producto;
        this.nombre = nombre;
        this.descripcion = descripcion;
        this.foto = foto;
        this.precio = precio;
        this.stock = stock;


        this.mostrarAClientes= function(dato){
           return `<a onclick="" id=`+dato+`></a>
                        <div class="interior" id=`+dato+`>
                        <span id="errorNoRegistro" class="oculto errorCajaArtista" style="color: rgb(162, 0, 0);font-size: 125%;" >Accedea tu cuenta para ver el contenido</span>
                            <a onclick="">
                                <p class="titulo" id="">`+this.artista+`</p>
                            </a>
                            <a onclick="">
                                <p class="descripcion" id="">`+this.descripcion+`</p>
                                <p class="precio" id="">precio: `+this.precio+`€</p>
                                <p class="cantidad" id="">stock disponible: `+this.stock+`</p>
                                <p class="annadircarrito" id="annadircarrito">
                                <button type="button" class="boton" onclick="annadirAlCarrito(event)" id=`+this.id+`>Añadir al carrito</p>
                            </a>` 
        }

        this.eliminarProducto = function(index){
            delete listaProductos[index]
        }
    }
}




