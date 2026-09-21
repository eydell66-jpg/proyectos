
const selectCafe = document.getElementById('cafe');
const inputCantidad = document.getElementById('cantidad');
const inputTotal = document.getElementById('total');

// funcion que realiza la operación matemática //
const precio = parseFloat(selectCafe.value) || 0;
const cantidad = parseInt(inputCantidad.value) || 0;

// operacion con dos decimales
const totalPago = precio * cantidad;

// Escuchar cambios en los elementos para calculo en tiempo real //
selectCafe.addEventListener('change', calcularTotal);
inputCantidad.addEventListener('input', calcularTotal);