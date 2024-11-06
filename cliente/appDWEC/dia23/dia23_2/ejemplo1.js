onload=()=>{
document.getElementsByTagName("button")[0].addEventListener("click", crearCookie)



}

function crearCookie(){

   let nombre= document.getElementById("nombre").value;
   let clave= document.getElementById("clave").value;


   let contenidoEntrada= document.cookie.split(";").find(cookie=>cookie.split("=")[0].trim()=="botonCookie");
   let listaUsuarios=[];
   if (contenidoEntrada) {


    listaUsuarios =JSON.parse(contenidoEntrada.split("=")[1]);
   }
    

   listaUsuarios.push({"usuario":nombre,"clave":clave})
   document.cookie=`botonCookie=${JSON.stringify(listaUsuarios) }`;


    // let cookies = Document.cookie.split(";");  
    // let carritoCookies = cookies.find(cookie => cookie.split("=")[0].trim() == "botonCookie")
    // if (!carritoCookies) {
    //     document.cookie = "botonCookie=1";
    // }else{
    //     let valorBoton = parseInt(carritoCookies.split("=")[1]);
    //             document.cookie=`botonCookie=${valorBoton+1}`;
    // }

}