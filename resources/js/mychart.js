import Chart from 'chart.js/auto';

const labels = [
  'Wheat',
  'Maize',
  'Rice',
  'Sugarcane',
  'Cotton'
];

const data = {
    labels: labels,
    datasets: [{
      label: 'Area and Production of Important Crops (2020-21)',
      data: [9168.2, 1417.8, 3335.1, 1165.0, 2078.9],
      backgroundColor: [
        '#F7941D',
        '#262262',
        '#DA1C5C',
        '#39B54A',
        '#1B75BC'
      ],
      hoverOffset: 4
    }]
};

const config = {
  type: 'doughnut',
  data:data,
  options: {
    aspectRatio: 1.5,
    plugins: {
      title: {
        display: false,
        text: '',
        font: {
          size: 20,
          weight: 'bold',
          family: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif"
        },
        padding: {
          top: 10,
          bottom: 30
        }
      },
      legend: {  
        display: true,
        position: 'bottom',
        
        labels: {
          font: {
            size: 14,
            family: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif"
          }
        }
      }
    }
  }
};

new Chart(
    document.getElementById('myChart'),
    config
);
