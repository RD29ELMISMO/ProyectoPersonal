const Form = document.querySelector('#formSalario');

Form.addEventListener("submit", (e) => {
    e.preventDefault();
    console.log('ok');
    let xhr = new XMLHttpRequest();

    let Datos = new FormData(Form);

    xhr.open('POST', '../php/insertsalario.php', true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // cargarDatos();
            console.log(xhr.response);
            Form.reset();
        }
    }
    xhr.send(Datos);
});

// Cargar datos al cargar la página


    // function cargarDatos() {
    //     let xhr = new XMLHttpRequest();
    //     xhr.open('GET', '../php/mostrarsal.php', true);
    //     xhr.onload = () => {
    //         if (xhr.readyState == 4 && xhr.status == 200) {
    //             console.log(xhr.response);
    //             let json = JSON.parse(xhr.response);
    //             let tabla = document.getElementById('tbl_salario');
    //             tabla.innerHTML = '';

    //             for (let salario of json) {
    //                 tabla.innerHTML += `
    //                 <tr>
    //                     <td>${salario.profesor}</td>
    //                     <td>${salario.monto}</td>
    //                     <td>${salario.fecha}</td>
    //                 </tr>
    //                 `;
    //             }
    //         }
    //     }
    //     xhr.send();
    // }
    // cargarDatos();

