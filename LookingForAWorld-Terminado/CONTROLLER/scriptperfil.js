  var modificarPerfil = document.getElementById("modificarPerfil");
  var modificar_perfil = document.getElementById("modificar_perfil");

  modificarPerfil.addEventListener("click", function() {
    if (modificar_perfil.style.display === "none") {
        modificar_perfil.style.display = "block";
    } else {
        modificar_perfil.style.display = "none";
    }
  });
