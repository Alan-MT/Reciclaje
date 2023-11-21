
function actualizarCantidad() {
  var tipoResiduoSelect = document.getElementById("nombreT");
  var cantidadLabel = document.getElementById("cantidadLabel");

  // Obtener la cantidad del tipo de residuo seleccionado
  var cantidadSeleccionada = tipoResiduoSelect.options[tipoResiduoSelect.selectedIndex].getAttribute("data-cantidad");


  cantidadLabel.textContent = cantidadSeleccionada;
}
