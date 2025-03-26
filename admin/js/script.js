const body = document.querySelector("body");
const sidebar = document.querySelector(".sidebar");
const toggle = document.querySelector(".toggle");
const searchBtn = document.querySelector(".search-box");
const modeSwitch = document.querySelector(".toggle-switch");
const modeText = document.querySelector(".mode-text");

toggle.addEventListener("click", function (e) {
    sidebar.classList.toggle("close");

});


modeSwitch.addEventListener('click', () => {
    body.classList.toggle("dark")
   if(body.classList.contains("dark")){
    modeText.innerText = "Oscuro";
    console.log('Luz'); 
   }else{
    modeText.innerText = "Luz"
    console.log('negro');
   }
});