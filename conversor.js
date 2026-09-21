
const selectCafe = document.getElementById('cafe');
const inputCantidad = document.getElementById('cantidad');
const inputResultado = document.getElementById('resultado')
const botonCalcular = document.getElementById('botoncalcular');

// Escuchar el clic del boton //
botonCalcular.addEventListener('click', function() {

// conversion de value a un numero //    
const precio = parseFloat(selectCafe.value) || 0;

const cantidad = parseInt(inputCantidad.value) || 0;

// operacion con dos decimales
const totalPago = precio * cantidad;

// Mostramos el resultado en la casilla resultado //
inputResultado.value = totalPago.toFixed(2);

});


