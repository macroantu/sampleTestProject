const ctx = document.getElementById('lineChart');

new Chart(ctx, {
  type: 'line',
  data: {
    labels: ['Jan 2022', 'Apr 2022', 'Jul 2022', 'Green', 'Dec 2022'],
    datasets: [{
      label: 'Visitors',
      data: [40, 220, 200, 100, 300 ],
      borderColor: '#799DF0',
      borderWidth: 2 ,   

    }]
  },
  options: {
   responsive: true , 
   maintainAspectRatio: false , 
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});