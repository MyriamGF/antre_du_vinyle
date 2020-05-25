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
    <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <title>Nos vinyles | L'Antre du Vinyle</title>
</head>

<body>
    <div class="interface-user">
        @include('interfaceUser.hautPage')

        <nav class="nav-principale sticky">
            <ul class="menu">
                <a href="{{route('accueilUser')}}">
                    <li class="onglet">Accueil</li>
                </a>
                <a href="{{route('accueilUser')}}#nos-vinyles">
                    <li class="onglet actif">Nos vinyles</li>
                </a>

                <div class="onglet-groupe">
                    <li class="onglet">Commander</li>
                    <ul class="sous-menu">
                        <a href="{{route('accueilUser')}}#commander">
                            <li>Comment commander</li>
                        </a>
                        <a href="{{route('accueilUser')}}#livraison">
                            <li>Livraison</li>
                        </a>
                    </ul>
                </div>

                <a href="{{route('accueilUser')}}#promotion">
                    <li class="onglet">Promotions</li>
                </a>
                <div class="onglet-groupe">
                    <li class="onglet">À propos</li>
                    <ul class="sous-menu">
                        <a href="{{route('accueilUser')}}#heures">
                            <li>Heures d'ouverture</li>
                        </a>
                        <a href="{{route('accueilUser')}}#entreprise">
                            <li>L'entreprise</li>
                        </a>
                    </ul>
                </div>

            </ul>
            <button class="bouton-remonter" onclick="hautPage()" id="bouton-remonter" title="Haut de la page"><i class="fas fa-chevron-circle-up"></i></button>
        </nav>

        <header class="header-vinyles">
        </header>

        <section class="vinyles-intro">
            <h2><span>Nos vinyles</span></h2>
            <div class="intro-container">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna aliqua.</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
            </div>
            <img src="{{asset('../images/couches/disques.png')}}" alt="Disques en pile">
        </section>

        @include('interfaceUser.ariane')

        section('contenu')

        @show

        @include('interfaceUser.commander')

        @include('interfaceUser.footer')

    </div>

    <!-- ACTIONS JQUERY / JAVASCRIPT -->
    <script src="{{asset('../js/actions.js')}}"></script>

</body>

</html>