let Form = document.querySelector('#formEstudiante');

Form.addEventListener("submit",(e)=> {
  
    e.preventDefault();
    // console.log('hola perez');
    let xhr = new XMLHttpRequest();
    let Datos = new FormData(Form);
    xhr.open('POST','../php/insertarEstudiante.php',true);
    xhr.onreadystatechange = function () {
        if(xhr.readyState == 4 && xhr.status == 200){
            CargarDatos();
            console.log(xhr.response);
            Form.reset();
        }
    };
    xhr.send(Datos);
});

function CargarDatos(){
    let xhr = new XMLHttpRequest();
    xhr.open('GET','../php/verestudiante.php',true);
    xhr.onload = function () {
        let json = JSON.parse(xhr.response);
        let tabla = document.getElementById('tabla');
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
                        <td class="text-center">${datos.tutor}</td>
                        <td class="text-center">${datos.telf_tutor}</td>
                        <td class="text-center">${datos.Ubicacion}</td>
                        <td class="text-center">${datos.correo}</td>
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
                            <a href="" item="${datos.id_estudiantes}r" id="id">
                                <i class='bx bxs-trash-alt icon'></i>
                            </a>
                        </td>
                    </tr>
            `
         }
        //  let btn = document.querySelectorAll("id");
        //  for (let i = 0; i < btn.length; i++) {
        //    let id = btn[i].getAttribute("item");
        //    console.log(id); 
        //  }
    };
    xhr.send();
}
CargarDatos();
