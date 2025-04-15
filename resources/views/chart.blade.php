<!DOCTYPE html>
<html>
<head>
    <title>Pie Chart Example</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h2>Fruit Distribution</h2>
    <canvas id="myPieChart" width="400" height="400"></canvas>

    <script>
        const ctx = document.getElementById('myPieChart').getContext('2d');
        const myPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: {!! json_encode($labels) !!},
                datasets: [{
                    data: {!! json_encode($data) !!},
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
                }]
            },
            options: {
                responsive: true
            }
        });
    </script>
</body>
</html>
