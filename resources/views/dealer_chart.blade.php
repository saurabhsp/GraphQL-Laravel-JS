<!DOCTYPE html>
<html>
<head>
    <title>Dealer Growth Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h2>Dealers by Year</h2>
    <canvas id="dealerChart" style="max-width: 300px; max-height: 300px;"></canvas>

    <script>
        const ctx = document.getElementById('dealerChart').getContext('2d');
        const dealerChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: {!! json_encode($labels) !!},
                datasets: [{
                    label: 'Dealers by Year',
                    data: {!! json_encode($data) !!},
                    fill: true,
                    borderColor: 'magenta',
                    backgroundColor: 'rgba(255, 0, 255, 0.2)',
                    pointBackgroundColor: 'lime',
                    pointBorderColor: 'black',
                    pointRadius: 5,
                    tension: 0.4,
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
