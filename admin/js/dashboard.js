
function mostrarDatos()  {
  let xhr = new XMLHttpRequest();
  xhr.open('GET','./classes/Statistics.php',true);
  console.log(xhr.response);
  xhr.onload = function () {
    if (this.status == 200) {
      let response = JSON.parse(this.response);
      console.log(response);
    //   updateCounters(response);
    //   updateChart(response);
    }
  }
  xhr.send();
}



// Update counters with animation
// function updateCounters(data) {
//     const counters = document.querySelectorAll('.counter');
//     const speed = 200;

//     counters.forEach(counter => {
//         const target = data[counter.parentElement.parentElement.classList[1]];
//         counter.dataset.target = target;
        
//         const count = +counter.innerText;
//         const increment = target / speed;

//         if(count < target) {
//             counter.innerText = Math.ceil(count + increment);
//             setTimeout(() => updateCounter(counter), 1);
//         } else {
//             counter.innerText = target;
//         }
//     });
// }

// // Create and update chart
// const ctx = document.getElementById('mychart');
// let myChart = null;

// function updateChart(data) {
//     const chartData = {
//         labels: ['Profesores', 'Estudiantes', 'Centros', 'Notificaciones'],
//         datasets: [{
//             label: 'Estadísticas Generales',
//             data: [
//                 data.profesores,
//                 data.estudiantes,
//                 data.centros,
//                 data.notificaciones
//             ],
//             borderColor: 'rgb(75, 192, 192)',
//             backgroundColor: 'rgb(46, 197, 197)',
//             tension: 0.1
//         }]
//     };

//     if(myChart) {
//         myChart.data = chartData;
//         myChart.update();
//     } else {
//         myChart = new Chart(ctx, {
//             type: 'bar',
//             data: chartData,
//             options: {
//                 responsive: true,
//                 maintainAspectRatio: false,
//                 scales: {
//                     y: {
//                         beginAtZero: true,
//                         grid: {
//                             color: 'rgb(53, 178, 216)'
//                         }
//                     },
//                     x: {
//                         grid: {
//                             color: 'rgb(58, 132, 216)'
//                         }
//                     }
//                 },
//                 plugins: {
//                     legend: {
//                         labels: {
//                             color: 'rgb(209, 22, 22)'
//                         }
//                     }
//                 },
//                 animation: {
//                     duration: 2000,
//                     easing: 'easeInOutQuart'
//                 }
//             }
//         });
//     }
// }

// // Initial load
// fetchStats();

// // Refresh every 5 minutes
// setInterval(fetchStats, 300000);