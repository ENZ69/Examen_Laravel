<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ajout du candidat</title>
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
                            <a class="navigation-link" style="text-decoration: none;" href="/gestion">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa-solid fa-gear"></i>
                                    </div>
                                    <div class="col-10">
                                        Gestion des Types
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="navigation-list-item active">
                            <a class="navigation-link" style="text-decoration: none;" href="/gestionReferentiels">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa-solid fa-gear"></i>
                                    </div>
                                    <div class="col-10">
                                        Gestion des Référentiel
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="navigation-list-item">
                            <a class="navigation-link" style="text-decoration: none;" href="/gestionFormations">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa-solid fa-gear"></i>
                                    </div>
                                    <div class="col-10">
                                        Gestion des Formations
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
                        <div class="col-6"><i class="fa-solid fa-pen-to-square"></i> Modification d'un référentiel</div>
                    </div>
                </div>
            </div>
            <div id="btn" style="border:none; display:flex;">
                <a href="#haut" class="btn btn-light" style="border-radius: 70px; background: #ffff;"><img src="/IKONS/PNG/32/arrow_up.png"></a>
            </div>
            <div class="content-head">
                    <div class="container col-md-6">
                        <div class="card ">
                            <div class="card-header text-center bg-secondary text-white">
                                <br>
                                <h5><i class="fa-solid fa-pen-to-square"></i> Modification du Référentiel</h5>
                            </div>
                            <form action="{{ route('referentiels.update', $referentiel->id) }}" method="POST" id="mon-formulaire">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="mt-4">
                                        <div>
                                            <label class="h6">Nom</label>
                                        </div>
                                        <div>
                                            <input type="text"  name="libelleReferentiel" class="form-control" id="libelleReferentiel" value="{{ old('libelleReferentiel', $referentiel->libelleReferentiel) }}">                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <div>
                                            <label class="h6">Horaire</label>
                                        </div>
                                        <div>
                                            <input type="number"  name="horaire" class="form-control" id="horaire" value="{{ old('horaire', $referentiel->horaire) }}">                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-center" style="border:none;">
                                    <button type="submit" class="btn btn-secondary">Modifier</button>
                                </div>
                            </form>
                        </div>
                        <br>
                        <br>
                    </div>
            </div>
        </div>
    </body>
    <script src="/js/sc.js"></script>
    <script>
        const formulaire = document.getElementById('mon-formulaire');
        const champs = formulaire.querySelectorAll('input, select, textarea');
        for (let i = 0; i < champs.length; i++) {
          champs[i].setAttribute('required', '');
        }
      </script>
</html>
