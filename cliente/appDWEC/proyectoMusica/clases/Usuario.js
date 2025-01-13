
class Usuario{
    constructor(id, email, nombre, contrasenna, foto, edad, direccion, enlace){
        this.id = id;
        this.email = email;
        this.nombre = nombre;
        this.contrasenna = contrasenna;
        this.foto = foto;
        this.edad = edad;
        this.direccion = direccion;
        this.enlace=enlace;

        this.mostrarUsuario = function(){
            return `
            <div class="perfil">
            <img src="${this.foto}" alt="" width="20px" height="20px">
            <p>${this.nombre}</p>
            </div>
            `
        }
        this.eliminarUsuario = function(index){
            delete listaUsuarios[index]
        }
    }
}