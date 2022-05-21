/*const productos = [
    {nombre: 'Platanos', valor: 500},
    {nombre: 'Pera', valor: 500},
    {nombre: 'Sandia', valor: 500},
    {nombre: 'Melon', valor: 500},
]



const formulario = document.querySelector('#formulario');
const boton = document.querySelector('#boton');
const resultado = document.querySelector('#resultado');

// FUNCION
const filtrar = ()=> {
    //console.log(formulario.value);
    resultado.innerHTML = '';

    const texto = formulario.value.toLowerCase();
    for(let producto of productos){
        let nombre = producto.nombre.toLowerCase();
        if(nombre.indexOf(texto) !== -1){
            resultado.innerHTML +=  `
            <li>${producto.nombre} - valor: ${producto.valor}</li>
            `
        }
    }

    if(resultado.innerHTML === ''){
        resultado.innerHTML +=  `
            <li>No Existe.....</li>
            `
    }
}


boton.addEventListener('click', filtrar)*/