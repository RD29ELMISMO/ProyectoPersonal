
window.onload = function () {
    let inscribir = document.getElementById('inscribir');
    inscribir.addEventListener('submit', function (e) {
        e.preventDefault();
        // console.log('hola');
        const formData = new FormData(inscribir);
        const xhr = new XMLHttpRequest();
        xhr.open('POST', './php/insertLogin.php', true);
       
        xhr.onreadystatechange = function () {
            if (xhr.status == 200 && xhr.readyState == 4) {
                // mostrarTodos();
                // console.log(xhr.response);
                inscribir.reset();
                // window.location.href = './login.php';
            }
        }
        xhr.send(formData);
    });

    let iniciar = document.getElementById('iniciar');
    iniciar.addEventListener('submit', function (e) {
        e.preventDefault();
        // console.log('hola');
        const formData = new FormData(iniciar);
        const xhr = new XMLHttpRequest();
        xhr.open('POST', './php/session.php', true);
        xhr.onreadystatechange = function () {
            if (xhr.status == 200 && xhr.readyState == 4) {
               if(xhr.response == 1){
                window.location.href = "./index.php";
               }
            }
        }
        xhr.send(formData);
    });
};

