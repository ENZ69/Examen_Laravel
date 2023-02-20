<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dashboard</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
      }

      #header {
        background-color: #215856;
        color: white;
        padding: 20px;
        font-size: 20px;
      }

      #container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        padding: 20px;
      }

      .card {
        width: 30%;
        margin: 10px;
        background-color: #f2f2f2;
        border-radius: 5px;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
      }

      .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
      }

      .card-header {
        background-color: #215856;
        color: white;
        padding: 10px;
        font-size: 20px;
        text-align: center;
      }

      .card-body {
        padding: 10px;
      }

      table {
        border-collapse: collapse;
        width: 100%;
      }

      th, td {
        text-align: left;
        padding: 8px;
      }

      tr:nth-child(even) {
        background-color: #f2f2f2;
      }
    </style>
  </head>
  <body>
    <div id="header" class="row">
      <div class="col-md-5">Candidat Enregistré</div>
      <div class="col-md-5"><a href="/dashboard" style="text-decoration:none; color:white;"><i class="fa-solid fa-gauge"></i>Monsieurs ces graphes ne sont pas réels cliquez ici pour le Dashboard</a></div>
    </div>
    <div id="container">
        <div class="card">
            <div class="card-header">Graphique 1</div>
            <div class="card-body">
                <canvas id="myChart"></canvas>
            </div>
        </div>
        <div class="card">
            <div class="card-header">Graphique 2</div>
            <div class="card-body">
                <canvas id="Chartp" width="50" height="10"></canvas>
            </div>
        </div>
        <div class="card">
            <div class="card-header">Tableau de données</div>
            <div class="card-body">
                <table>
                    <tr>
                        <th>Nom</th>
                        <th>Âge</th>
                        <th>Ville</th>
                    </tr>
                    <tr>
                        <td>John</td>
                        <td>30</td>
                        <td>New York</td>
                    </tr>
                    <tr>
                        <td>Jane</td>
                        <td>25</td>
                        <td>Los Angeles</td>
                    </tr>
                    <tr>
                        <td>Bob</td>
                        <td>45</td>
                        <td>Chicago</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-header">Graphique 3</div>
            <div class="card-body">
                <canvas id="Chartd"></canvas>
            </div>
        </div>
        <div class="card">
            <div class="card-header">Graphique 4</div>
            <div class="card-body">
                <canvas id="Chart"></canvas>
            </div>
        </div>
        <div class="card">
            <div class="card-header">Tableau de données</div>
            <div class="card-body">
                <table>
                    <tr>
                        <th>Nom</th>
                        <th>Âge</th>
                        <th>Ville</th>
                    </tr>
                    <tr>
                        <td>John</td>
                        <td>30</td>
                        <td>New York</td>
                    </tr>
                    <tr>
                        <td>Jane</td>
                        <td>25</td>
                        <td>Los Angeles</td>
                    </tr>
                    <tr>
                        <td>Bob</td>
                        <td>45</td>
                        <td>Chicago</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var categories = ['A', 'B', 'C', 'D', 'E'];
        var values = [];
        for (var i = 0; i < categories.length; i++) {
        values.push(Math.floor(Math.random() * 100));
        }

        // Créer le graphique à barres
        var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: categories,
            datasets: [{
            label: 'Valeurs',
            data: values,
            backgroundColor: ['blue','red','yellow','pink','purple',],
            borderColor: ['blue','red','yellow','pink','purple',],
            borderWidth: 1
            }]
        },
        options: {
            scales: {
            yAxes: [{
                ticks: {
                beginAtZero: true
                }
            }]
            }
        }
        });
    </script>
    <script>
        var ctx = document.getElementById('Chart').getContext('2d');
        var categories = ['A', 'B', 'C', 'D', 'E'];
        var values = [];
        for (var i = 0; i < categories.length; i++) {
        values.push(Math.floor(Math.random() * 100));
        }

        // Créer le graphique à barres
        var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: categories,
            datasets: [{
            label: 'Valeurs',
            data: values,
            backgroundColor:['red','purple','yellow','pink','blue',],
            borderColor: ['red','purple','yellow','pink','blue',],
            borderWidth: 1
            }]
        },
        options: {
            scales: {
            yAxes: [{
                ticks: {
                beginAtZero: true
                }
            }]
            }
        }
        });
    </script>
    <script>
        var ctx = document.getElementById('Chartd').getContext('2d');
        var categories = ['A', 'B', 'C', 'D', 'E'];
        var values = [];
        for (var i = 0; i < categories.length; i++) {
        values.push(Math.floor(Math.random() * 100));
        }

        // Créer le graphique à barres
        var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: categories,
            datasets: [{
            label: 'Valeurs',
            data: values,
            backgroundColor: ['yellow','purple','red','pink','blue',],
            borderColor: ['yellow','purple','red','pink','blue',],
            borderWidth: 1
            }]
        },
        options: {
            scales: {
            yAxes: [{
                ticks: {
                beginAtZero: true
                }
            }]
            }
        }
        });
    </script>
    <script>
        var ctx = document.getElementById('Chartp').getContext('2d');
        var categories = ['A', 'B', 'C', 'D', 'E'];
        var values = [];
        for (var i = 0; i < categories.length; i++) {
        values.push(Math.floor(Math.random() * 100));
        }

        // Créer le graphique à barres
        var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: categories,
            datasets: [{
            label: 'Valeurs',
            data: values,
            backgroundColor: ['red','purple','yellow','pink','blue',],
            borderColor: ['red','purple','yellow','pink','blue',],
            borderWidth: 1
            }]
        },
        options: {
            scales: {
            yAxes: [{
                ticks: {
                beginAtZero: true
                }
            }]
            }
        }
        });
    </script>
</body>
</html>
