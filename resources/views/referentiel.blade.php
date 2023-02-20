<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Référentiel de formation</title>
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
                        <div class="col-6"><i class="{{ $type['libelleType'] == "Métier" ? "fa-sharp fa-solid fa-screwdriver-wrench" : "fa-solid fa-school" }}"></i> {{ $type['libelleType'] }}</div>
                        <div class="col-6 text-right"></div>
                    </div>
                </div>
            </div>
            <div id="btn">
                <a href="#haut" class="btn btn-light" style="border-radius: 70px;"><img src="/IKONS/PNG/32/arrow_up.png"></a>
            </div>
            <div class="content-head">
                <div class="container mt-4 col-md-5" style="border:none;">
                    <div class="card-header mt-4 text-center text-white bg-secondary" style="font-weight:600; font-size:25px;">
                        Formations {{ $type['libelleType'] }}
                    </div>
                    <div class="card-body mt-4">
                        <p class="text-center" style="font-weight:600; font-size:25px;">Choisir le référentiel de formation</p>
                    </div>
                    <div class="row">
                        @forelse ($type->referentiels as $referentiel)
                                <div class="col-md-6 text-center mt-4">
                                    <a href="/referentiels/{{ $referentiel['id'] }}" class="btn btn-secondary" style="width:200px;">{{ $referentiel['libelleReferentiel'] }}</a>
                                </div>
                        @empty
                            <div class="text-center">
                                <p class="text-center" style="font-weight:600; font-size:25px;">Aucun référentiel disponible</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="/js/sc.js"></script>
</html>

