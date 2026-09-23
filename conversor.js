const selectCafe = document.getElementById('cafe');
const inputCantidad = document.getElementById('cantidad');
const inputResultado = document.getElementById('resultado')
const botonCalcular = document.getElementById('botoncalcular');


// Escuchar el clic del boton //
botonCalcular.addEventListener('click', function() {

// conversion de value a un numero //    
const precio = parseFloat(selectCafe.value) || 0;
const cantidad = parseInt(inputCantidad.value) || 0;

// condicional para filtrar que no sea 0 //
if (cantidad === 0){
    
    inputResultado.value = "cantidad no valida";
} else {
   // operacion con dos decimales
    const totalPago = precio * cantidad;
   inputResultado.value = totalPago.toFixed(2); 



}

});

