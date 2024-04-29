var botonesResponder = document.querySelectorAll(".responder");

botonesResponder.forEach(function(botonResponder) {
  var contenedorRespuesta = botonResponder.nextElementSibling;
  var contenedorcomentario = botonResponder.parentNode.parentNode.nextElementSibling;

  botonResponder.addEventListener("click", function() {
    if (contenedorRespuesta.style.display === "none" && contenedorcomentario.style.display === "none") {
      contenedorRespuesta.style.display = "block";
      contenedorcomentario.style.display = "block";
      botonResponder.textContent = "Ocultar";
    } else {
      contenedorRespuesta.style.display = "none";
      contenedorcomentario.style.display = "none";
      botonResponder.textContent = "Responder";
    }
  });
});