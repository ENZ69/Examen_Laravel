<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>statistique des formations</title>
        <link rel="stylesheet" href={{ asset('css/bootstrap.css') }}>
        <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
        <link rel="stylesheet" href={{ asset('css/style.css') }}>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div class="page">
            <div class="sidebar">
                <div class="sidebar-hader">
                    <div class="sidebar-logo-container">
                        <h4 id="logo">SM.APP</h4>
                    </div>
                </div>
                <div class="sidebar-body">
                    <ul class="navigation-list">
                        <li class="navigation-list-item">
                            <a class="navigation-link" style="text-decoration: none;" href="/dashboard">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa-solid fa-user-graduate"></i>
                                    </div>
                                    <div class="col-10">
                                        Nombre de candidat/formation
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="navigation-list-item">
                            <a class="navigation-link" style="text-decoration: none;" href="/Formation_Par_Referentiel">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa-solid fa-book"></i>
                                    </div>
                                    <div class="col-10">
                                        Nombre de formation/referentiel
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="navigation-list-item">
                            <a class="navigation-link" style="text-decoration: none;" href="/candidats_par_sexe">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa-solid fa-venus-mars"></i>
                                    </div>
                                    <div class="col-10">
                                        Candidats/sexe
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="navigation-list-item" >
                            <a class="navigation-link" style="text-decoration: none;" href="/formationParType">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa-solid fa-list-check"></i>
                                    </div>
                                    <div class="col-10">
                                       Formation/Types
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="navigation-list-item">
                            <a class="navigation-link" style="text-decoration: none;" href="/Tranche_age">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa-solid fa-chart-pie"></i>
                                    </div>
                                    <div class="col-10">
                                        Tranche d'âge
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="navigation-list-item" style="background:#011f1d;">
                            <a class="navigation-link" style="text-decoration: none;" href="/statform">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa-solid fa-chart-line"></i>
                                    </div>
                                    <div class="col-10">
                                        Statistiques des formations
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="navigation-list-item">
                            <a class="navigation-link" style="text-decoration: none;" href="/">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa-solid fa-user-plus"></i>
                                    </div>
                                    <div class="col-10">
                                        Ajouter un candidat
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="content">
                <nav class="navbar navbar-light" id="haut">
                    <div class="container-fluid">
                        <button class="btn sidebarToggle">
                            <i class="fa-solid fa-bars fa-3x"></i>
                        </button>
                        <div class="d-flex">
                            <a href="/" style="text-decoration:none;" class="text-white"><i class="fa-solid fa-house fa-2x"></i></a>
                        </div>
                    </div>
                </nav>
                <div class="container-fluid" id="sousnavbar">
                    <div class="row">
                        <div class="col-6">Statistiques des formations</div>
                    </div>
                </div>
                <div class="content-head" style="margin-left:220px;">
                    <canvas id="chart"></canvas>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var ctx = document.getElementById('chart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['En cours', 'En attente'],
                    datasets: [{
                        label: 'Statistiques des formations',
                        data: [
                            {{ $formations_en_cours->count() }},
                            {{ $formations_en_attente->count() }}
                        ],
                        backgroundColor: [
                            '#d1d1d1',
                            '#063331',
                        ],
                        borderColor: [
                            '#d1d1d1',
                            '#063331',
                        ],
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
        <script src="/js/sc.js"></script>
    </body>
</html>
