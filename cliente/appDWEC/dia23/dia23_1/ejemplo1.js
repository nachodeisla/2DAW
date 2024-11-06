onload=()=>{
document.getElementsByTagName("button")[0].addEventListener("click", crearCookie)



}

function crearCookie(){

   let valor= document.getElementById("cajaCookie").value;
   let contenidoEntrada= document.cookie.split(";").find(cookie=>cookie.split("=")[0].trim()=="botonCookie");
   if (contenidoEntrada) {
    document.cookie=`botonCookie=` +contenidoEntrada.split("=")[1]+ " - " +valor;
   }else{
    document.cookie=`botonCookie =`+valor;
   }
    



    // let cookies = Document.cookie.split(";");  
    // let carritoCookies = cookies.find(cookie => cookie.split("=")[0].trim() == "botonCookie")
    // if (!carritoCookies) {
    //     document.cookie = "botonCookie=1";
    // }else{
    //     let valorBoton = parseInt(carritoCookies.split("=")[1]);
    //             document.cookie=`botonCookie=${valorBoton+1}`;
    // }

}