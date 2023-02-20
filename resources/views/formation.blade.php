<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>choix de formation</title>
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
                        <div class="col-6"><i class="fa-sharp fa-solid fa-school-circle-check"></i> {{ $referenciel['libelleReferentiel'] }}</div>
                        <div class="col-6 text-right"></div>
                    </div>
                </div>
            </div>
            <div id="btn">
                <a href="#haut" class="btn btn-light" style="border-radius: 70px;"><img src="/IKONS/PNG/32/arrow_up.png"></a>
            </div>
            <div class="content-head">
            <div class="container mt-4" style="border:none;">
                <div class="card-header mt-4 text-center text-white bg-secondary" style="font-weight:600; font-size:25px;">
                    Formations en {{ $referenciel['libelleReferentiel'] }}
                </div>
                <div class="card-body mt-4">
                    <p class="text-center" style="font-weight:600; font-size:25px;">Choisir la formation</p>
                </div>
                <div class="row">
                    @forelse ($referenciel->formations as $formation)
                            <div class="col-md-6 text-center mt-4">
                                <div class="card" style="border:none;">
                                    <div class="card-header text-center text-white bg-secondary" style="display:flex; border:none;">
                                        <div class="col-md-6" style="width:40%;">
                                            {{ $formation['nomFormation'] }}
                                        </div>
                                        <div class="col-md-6" style="width:40%;">
                                            Durée: {{ $formation['duree'] }} ans
                                        </div>
                                    </div>
                                    <div class="card-body text-center" style="border:none;">
                                        {{ $formation['description'] }}
                                    </div>
                                    <div class="card-footer" style="border:none;">
                                        <a href="/formations/{{ $formation['id'] }}" class="btn btn-secondary" style="width:200px;">CHOISIR</a>
                                    </div>
                                </div>
                            </div>
                    @empty
                        <div class="text-center">
                            <p class="text-center" style="font-weight:600; font-size:25px;">Aucune formation disponible.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </body>
    <script src="/js/sc.js"></script>
</html>
