const Form = document.querySelector("#formProfe");

Form.addEventListener("submit", (e) => {
    e.preventDefault();
    let xhr = new XMLHttpRequest();
    let Datos = new FormData(Form);
    xhr.open("POST", "../php/insertprofes.php", true);
    xhr.onload = () => {
      if (xhr.readyState == 4 && xhr.status == 200) {
        CargarDatos();
        console.log(xhr.response);
        formProfe.reset();
      }
    };
    xhr.send(Datos);
  
});

function CargarDatos(){
    let xhr = new XMLHttpRequest();

    xhr.open('GET','../php/mostrarprofe.php',true);

    xhr.onload = function () {
        let json = JSON.parse(xhr.response);

        let tabla = document.getElementById('profetbl');
        
        tabla.innerHTML = '';

         for(let datos of json){
            tabla.innerHTML += `
            <tr>
                        <td class="text-center img">
                            <img src="../img/${datos.foto}" alt="perfil">
                            <input type="file" name="" id="">
                        </td>
                        <td class="text-center">${datos.nombre}</td>
                        <td class="text-center">${datos.apellido}</td>
                        <td class="text-center">${datos.edad}</td>
                        
                        <td class="text-center">${datos.contacto}</td>
                        <td class="text-center">${datos.email}</td>
                        <td class="text-center">${datos.ubicacion}</td>
                        <td class="text-center">${datos.nivel_academico}</td>
                        <td class="text-center">
                            <a href="" class="btn btn-primary onclick="actualizar('${datos.foto}','${datos.nombre}','${datos.apellido}','${datos.edad}',
                            '${datos.contacto}','${datos.email}','${datos.ubicacion}','${datos.nivel_academico}')"">
                                <i class='bx bx-revision icon'></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="" class="btn ver">
                                <i class='bx bx-low-vision icon'></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href=" " class="btn  borrar" onclick ="eliminar(id)">
                                <i class='bx bxs-trash-alt icon'></i>
                            </a>
                        </td>
                    </tr>
            `
         }
    };
    xhr.send();
}
CargarDatos();

