let formularioCentro = document.getElementById("formCentro");
formularioCentro.addEventListener("submit", function (e) {
  e.preventDefault();
  let datos = new FormData(formularioCentro);
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "../php/centros.php", true);
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      if (xhr.responseText == 1) {
        Swal.fire({
          title: "Registro de Centro",
          text: "Centro Registrado Exitosamente",
          icon: "success",
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = '../otros/centros.php';
          }

        });
        formularioCentro.reset();
        MostrarCentro();
      } else if (xhr.responseText == 2) {
        Swal.fire({
          title: "Fallo en la insercion",
          text: "No se puedo registrar el centro, algo salió mal",
          icon: "warning",
        });
      } else if (xhr.responseText == 3) {
        Swal.fire({
          title: "Archivo no permitido",
          text: "El formato del archivo no es el esperado, para continuar tu archivo debe tener los siguientes formatos [jpg, png, jpeg]",
          icon: "error",
        });
      }
    } else {
      Swal.fire({
        title: "Algo salió mal",
        icon: "error",
      });
    }
  };
  xhr.send(datos);
});

function MostrarCentro() {
  let xhr = new XMLHttpRequest();
  xhr.open("GET", "../php/mostrarCentro.php", true);

  xhr.onload = function () {
    if (xhr.status === 200) {
      try {
        let datosCentro = JSON.parse(xhr.response);

        let tabla = document.getElementById('idtbody');
        tabla.innerHTML = '';

        for (let fila of datosCentro) {
          tabla.innerHTML += `
                 <tr>
                        <td class="text-center img">
                            <img src="../img/${fila.foto}" alt="perfil">
                            <input type="file" name="" id="">
                        </td>
                        <td class="text-center">${fila.nombre}</td>
                        <td class="text-center">${fila.direccion}</td>
                        <td class="text-center">${fila.representante}</td>
                        <td class="text-center">${fila.email}</td>
                        <td class="text-center">${fila.telefono}</td>
                       
                        <td class="text-center">
                            <a href="">
                                <i class='bx bx-revision icon'></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="">
                                <i class='bx bx-low-vision'></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="" onclick="confirmar(${fila.id_centro},${fila.foto},${fila.nombre})" class="btn btn-danger" title="Eliminar">
                                <i class='bx bxs-trash-alt icon'></i>
                            </a>
                        </td>
                        
                        </tr>
          `;
        }
      } catch (error) {
        console.error("Error al analizar la respuesta JSON:", error);
      }
    } else {
      console.error("Error en la solicitud: " + xhr.status);
    }
  };

  xhr.onerror = function () {
    console.error("Error de red o problema con la solicitud.");
  };

  xhr.send();
}
MostrarCentro();

// CONFIRMAR ANTES DE ELIMINAR
function confirmar(id, nombre, foto) {
    Swal.fire({
        title: `¿Estás seguro de que desea eliminar el centro "${nombre}"?`,
        text: "Esta acción es irreversible",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Eliminar",
        cancelButtonText: "Cancelar"
    }).then((result) => {
        if (result.isConfirmed) {
            eliminar(id, foto);
        }
    });
}

function eliminar(codigo, foto) {
    const xhr = new XMLHttpRequest();
    xhr.open("GET", `../php/eliminarCentro.php?codigo=${codigo}&foto=${foto}`, true);
    
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            if (xhr.responseText === "1") {
                Swal.fire({
                    title: "Eliminado!",
                    text: "El centro ha sido eliminado exitosamente.",
                    icon: "success"
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = '../otros/centros.php';
                    }
                });
                MostrarCentro(); // Refresh the table
            } else {
                Swal.fire({
                    title: "Error!",
                    text: "No se pudo eliminar el centro.",
                    icon: "error"
                });
            }
        }
    };
    
    xhr.onerror = function() {
        Swal.fire({
            title: "Error!",
            text: "Hubo un problema de conexión.",
            icon: "error"
        });
    };
    
    xhr.send();
}