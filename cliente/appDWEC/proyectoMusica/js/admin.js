onload = () => {
    listaArtistas = JSON.parse(localStorage.getItem("listaArtistas"));
    listaUsuarios = JSON.parse(localStorage.getItem("listaUsuarios"));
    listaProductos = JSON.parse(localStorage.getItem("listaProductos"));
    mostrarListaArtista();
    mostrarListaUsuario();
    mostrarListaProducto();
}

function mostrarListaArtista() {
    let listaArtistaContenedor = document.getElementById("listaArtista");
    listaArtistaContenedor.innerHTML = "";

    listaArtistas.forEach((artista, index) => {
        artista = new Artista(
        artista.foto,
        artista.nombre,
        artista.descripcion,
        artista.enlace,
        artista.edad
    );

        let divArtista = document.createElement("div");
        divArtista.innerHTML = artista.nombre;
        let botonEliminar = document.createElement("button");
        botonEliminar.innerHTML = "Eliminar";

        botonEliminar.onclick = function () {
            artista.eliminarArtista(index);
            mostrarListaArtista();
        };

        divArtista.appendChild(botonEliminar);

        listaArtistaContenedor.appendChild(divArtista);
    });
}

function mostrarListaUsuario() {
  let listaUsuarioContenedor = document.getElementById("listaUsuario");
  listaUsuarioContenedor.innerHTML = "";

  listaUsuarios.forEach((usuario, index) => {
      usuario = new Usuario(
      usuario.id,
      usuario.email,
      usuario.nombre,
      usuario.contrasenna,
      usuario.foto,
      usuario.edad,
      usuario.direccion,
      usuario.enlace

  );

      let divUsuario = document.createElement("div");
      divUsuario.innerHTML = usuario.nombre+" / "+usuario.email;
      
      let botonEliminar = document.createElement("button");
      botonEliminar.innerHTML = "Eliminar";

      botonEliminar.onclick = function () {
          usuario.eliminarUsuario(index);
          mostrarListaUsuario();
      };

      divUsuario.appendChild(botonEliminar);

      listaUsuarioContenedor.appendChild(divUsuario);
  });
}



function mostrarListaProducto() {
    let listaProductoContenedor = document.getElementById("listaProducto");
    listaProductoContenedor.innerHTML = "";
  
    listaProductos.forEach((producto, index) => {
        producto = new Producto(
        producto.artista,
        producto.producto,
        producto.nombre,
        producto.descripcion,
        producto.foto,
        producto.precio,
        producto.cantidad
 
    );
  
        let divProducto = document.createElement("div");
        divProducto.innerHTML = producto.producto+" de "+producto.artista+" /cantidad: "+producto.cantidad;
        
        let botonEliminar = document.createElement("button");
        botonEliminar.innerHTML = "Eliminar";
  
        botonEliminar.onclick = function () {
            producto.eliminarProducto(index);
            mostrarListaProducto();
        };
  
        divProducto.appendChild(botonEliminar);
  
        listaProductoContenedor.appendChild(divProducto);
    });
  }

