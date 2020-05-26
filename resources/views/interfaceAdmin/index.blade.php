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
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Gestion articles | ADV Administration</title>
</head>

<body>
    <div class="interface-admin">
        @include('interfaceAdmin.nav')
        <div class="page-admin">
            <h2><span>Module de gestion du site</span></h2>
            <div class="contenu">
                @section('contenu')
                @show
            </div>
        </div>
    </div>

    <!-- ACTIONS JQUERY / JAVASCRIPT -->
    <script src="{{asset('js/actions.js')}}"></script>

</body>

</html>