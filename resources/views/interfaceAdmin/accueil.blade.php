<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Icônes Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
    <!-- Polices -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Bibliothèque jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>ADV Administration</title>
</head>

<body>
    <div class="interface-admin">
        @include('interfaceAdmin.nav')

        <div class="page-admin">
            <h2><span>Module de gestion du site</span></h2>
            <div class="contenu">
                <h3>Vous avez...</h3>
                <section class="section-index-admin">
                    <p class="nombre-gestion">7</p>
                    <h4>Nouvelles commandes</h4>
                    <div class="boutons">
                        <a class="bouton" href="#">Afficher les commandes</a>
                    </div>

                </section>

                <section class="section-index-admin">
                    <p class="nombre-gestion">32</p>
                    <h4>Articles</h4>
                    <div class="boutons">
                        <a class="bouton" href="{{action('VinyleController@indexAdmin')}}">Gérer les articles</a>
                        <a class="bouton" href="{{action('VinyleController@create')}}">Ajouter un article</a>
                    </div>

                </section>
            </div>
        </div>
    </div>

    <!-- ACTIONS JQUERY / JAVASCRIPT -->
    <script src="{{asset('js/actions.js')}}"></script>

</body>

</html>