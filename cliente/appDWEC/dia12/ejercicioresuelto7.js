function elevar(base, exponente) {
    let resultadoFinal = base;
    for (let index = 1; index < exponente; index++) {
        resultadoFinal = resultadoFinal*base;
        
    }
    return resultadoFinal;
    
}console.log(elevar(3,5));