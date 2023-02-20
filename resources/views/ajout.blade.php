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
                        <div class="col-6"><i class="fa-solid fa-user-plus"></i> Ajout d'un candidat</div>
                    </div>
                </div>
            </div>
            <div id="btn" style="border:none; display:flex;">
                <a href="#haut" class="btn btn-light" style="border-radius: 70px; background: #ffff;"><img src="/IKONS/PNG/32/arrow_up.png"></a>
            </div>
            <div class="content-head">
                    <div class="container">
                        <div class="card">
                            <div class="card-header text-center">
                                <br>
                                <h5><img src="/IKONS/PNG/32/user.png"> Ajouter un candidat</h5>
                            </div>
                            <form action="/ajoute" method="POST" id="mon-formulaire">
                                @csrf
                                <div class="card-body">
                                    <div class="mt-4">
                                        <div>
                                            <label class="h6">Nom</label>
                                        </div>
                                        <div>
                                            <input type="text"  name="nomCandidat" class="form-control" placeholder="Nom du candidat" id="nom">
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <div>
                                            <label class="h6">Prénom</label>
                                        </div>
                                        <div>
                                            <input type="text" name="prenom" class="form-control" placeholder="Prenom du candidat" id="prenom">
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <div>
                                            <label class="h6">Email</label>
                                        </div>
                                        <div>
                                            <input type="email" name="email" class="form-control" placeholder="email du candidat" id="email">
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <div>
                                            <label class="h6">Age</label>
                                        </div>
                                        <div>
                                            <input type="number" name="age" class="form-control" placeholder="Age du candidat" id="age" min="0" max="35">
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <div>
                                            <label class="h6">Niveau d'étude</label>
                                        </div>
                                        <div>
                                            <input type="text" name="niveauEtude" class="form-control" placeholder="Niveau d'étude du candidat" id="niveau">
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <div>
                                            <input type="text" name="formations" class="form-control" id="niveau" value="{{ $formation['id'] }}" hidden>
                                        </div>
                                    </div>
                                    <div class="mt-4 text-center">
                                        <div>
                                            <label class="h6">Sexe</label>
                                        </div>
                                        <div>
                                            <select name="sexe" id="sexe" >
                                                <option value="">--Faites votre choix--</option>
                                                <option value="Homme">Homme</option>
                                                <option value="Femme">Femme</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-secondary">Enregistrer</button>
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
