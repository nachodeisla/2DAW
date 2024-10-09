function comprobarPalindromo(palabraPalindromoOriginal) {
    var palabraPalindromo = palabraPalindromoOriginal.toLowerCase();
    palabraPalindromo = palabraPalindromo.split(" ").join("")
    textoAlReves= palabraPalindromo.split("").reverse().join("");
    
    if (extoAlReves==palabraPalindromo) {
        return true;
    }else {
        return false
    }
    
   








}console.log(comprobarPalindromo("girafarig"));