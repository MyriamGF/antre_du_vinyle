<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Icônes Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
    <!-- Polices -->
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Bibliothèque jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Connexion | ADV Administration</title>
</head>

<body>
    <div class="connexion-admin">
        <img src="{{asset('images/svg/logo-normal.svg')}}" alt="Logo l'Antre du Vinyle">
        <h1>Module de gestion du site</h1>
        <form action="{{route('accueilAdmin')}}">
            <div class="groupe-champ">
                <label for="nom-admin"><i class="fas fa-user-circle"></i></label>
                <input class="champ" id="nom-admin" type="text" placeholder="Nom d'utilisateur">
            </div>
            <div class="groupe-champ">
                <label for="mdp-admin"><i class="fas fa-lock"></i></label>
                <input class="champ" id="mdp-admin" type="password" placeholder="Mot de passe">
            </div>
            <input class="bouton-form" type="submit" value="Se connecter">
            <a href="">Mot de passe oublié?</a>
        </form>

    </div>

    <!-- ACTIONS JQUERY / JAVASCRIPT -->
    <script src="{{asset('js/actions.js')}}"></script>

</body>

</html>