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
    <!-- Slick -->
    <link href="../vendors/slick/slick-theme.css" rel="stylesheet">
    <link href="../vendors/slick/slick.css" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <title>L'Antre du Vinyle | Accueil</title>
</head>

<body>
    <div class="interface-user">
        @include('interfaceUser.hautPage')

        <nav class="nav-principale sticky">
            <ul class="menu">
                <a href="#">
                    <li class="onglet actif">Accueil</li>
                </a>
                <a href="#nos-vinyles">
                    <li class="onglet">Nos vinyles</li>
                </a>

                <div class="onglet-groupe">
                    <li class="onglet">Commander</li>
                    <ul class="sous-menu">
                        <a href="#commander">
                            <li>Comment commander</li>
                        </a>
                        <a href="#livraison">
                            <li>Livraison</li>
                        </a>
                    </ul>
                </div>

                <a href="#promotion">
                    <li class="onglet">Promotions</li>
                </a>
                <div class="onglet-groupe">
                    <li class="onglet">À propos</li>
                    <ul class="sous-menu">
                        <a href="#heures">
                            <li>Heures d'ouverture</li>
                        </a>
                        <a href="#entreprise">
                            <li>L'entreprise</li>
                        </a>
                    </ul>
                </div>

            </ul>
            <button class="bouton-remonter" onclick="hautPage()" id="bouton-remonter" title="Haut de la page"><i class="fas fa-chevron-circle-up"></i></button>
        </nav>

        @include('interfaceUser.header')

        <!-- changer liens -->
        <section id="nos-vinyles" class="nouveaute">
            <h2><span>Nouvel arrivage</span></h2>
            <div class="nouveaute-carrousel carrousel-accueil">
                <article class="vinyle">
                    <a href="vinyle.html">
                        <img class="vinyle-image" src="../images/disques/game-dames-and-guitar-thangs/avant.jpg" alt="Couverture de l'album Game, Dames and
                                            Guitar Thangs">
                        <p class="vinyle-nom">Game, Dames and
                            Guitar Thangs - Eddie Hazel</p>
                    </a>
                </article>
                <article class="vinyle">
                    <a href="vinyle.html">
                        <img class="vinyle-image" src="../images/disques/game-dames-and-guitar-thangs/avant.jpg" alt="Couverture de l'album Game, Dames and
                                                Guitar Thangs">
                        <p class="vinyle-nom">Game, Dames and
                            Guitar Thangs - Eddie Hazel</p>
                    </a>
                </article>
                <article class="vinyle">
                    <a href="vinyle.html">
                        <img class="vinyle-image" src="../images/disques/game-dames-and-guitar-thangs/avant.jpg" alt="Couverture de l'album Game, Dames and
                                                    Guitar Thangs">
                        <p class="vinyle-nom">Game, Dames and
                            Guitar Thangs - Eddie Hazel</p>
                    </a>
                </article>
                <article class="vinyle">
                    <a href="vinyle.html">
                        <img class="vinyle-image" src="../images/disques/game-dames-and-guitar-thangs/avant.jpg" alt="Couverture de l'album Game, Dames and
                                                        Guitar Thangs">
                        <p class="vinyle-nom">Game, Dames and
                            Guitar Thangs - Eddie Hazel</p>
                    </a>
                </article>
                <article class="vinyle">
                    <a href="vinyle.html">
                        <img class="vinyle-image" src="../images/disques/game-dames-and-guitar-thangs/avant.jpg" alt="Couverture de l'album Game, Dames and
                                                            Guitar Thangs">
                        <p class="vinyle-nom">Game, Dames and
                            Guitar Thangs - Eddie Hazel</p>
                    </a>
                </article>

            </div>
            <a class="bouton" href="{{route('vinylesUser')}}">Tous nos vinyles</a>
        </section>

        <section id="heures" class="heures">
            <div class="heures-titre">
                <h2><span>Heures d'ouverture</span></h2>
            </div>
            <div class="heures-container">
                <ul>
                    <li>Lundi</li>
                    <li>9:30 à 21:00</li>
                </ul>
                <ul>
                    <li>Mardi</li>
                    <li>9:30 à 21:00</li>
                </ul>
                <ul>
                    <li>Mercredi</li>
                    <li>9:30 à 20:00</li>
                </ul>
                <ul>
                    <li>Jeudi</li>
                    <li>9:30 à 21:00</li>
                </ul>
                <ul>
                    <li>Vendredi</li>
                    <li>9:30 à 21:00</li>
                </ul>
                <ul>
                    <li>Samedi</li>
                    <li>9:00 à 17:00</li>
                </ul>
                <ul>
                    <li>Dimanche</li>
                    <li>10:00 à 17:00</li>
                </ul>
            </div>
        </section>

        <section id="promotion" class="promotion">
            <div class="promotion-container">
                <p>Vous pourriez avoir</br><span>50%</span> <span>de rabais</span> sur une</br>table tournante de votre
                    choix !</p>
                <img class="table-svg jello-horizontal" src="{{asset('../images/svg/table-tournante.svg')}}" alt="Illustration table tournante">
                <a class="bouton">En savoir plus</a>
            </div>

        </section>

        @include('interfaceUser.commander')

        <section id="entreprise" class="entreprise">
            <div class="entreprise-container">
                <div class="entreprise-titre">
                    <h2><span>L'entreprise</span></h2>
                </div>
                <p>L’Antre du Vinyle, c’est l’oeuvre d’un père de famille et de sa passion pour la musique. </p>
                <p>Notre petite entreprise familiale a ouvert ses portes en 2020 quand celui-ci s’est dit : « <span>les
                        33
                        tours que j’ai dans le sous-sol servent pas à grand-chose… Y’é tant de faire l’ménage !</span> »
                    Depuis ce
                    jour, il continue sa recherche de 33 tours usagés partout dans le Québec et entretient son petit
                    magasin en famille.</p>
                <p>Tous sont les bienvenus dans l’Antre du Vinyle ! Collectionneurs de vinyles, les passionnés de
                    musique rétro, ou simplement les curieux !</p>
                <p>Une variété de plus de mille 33 tours usagés québécois, américains et européens vous attendent. Venez
                    visiter notre magasin à Bois-des-filion dans la région des Laurentides.</p>
            </div>
        </section>

        @include('interfaceUser.footer')

    </div>

    <!-- ACTIONS JQUERY / JAVASCRIPT -->
    <script src="{{asset('../js/actions.js')}}"></script>

    <!-- SLICK - CARROUSELS -->
    <script src="{{asset('../vendors/slick/slick.min.js')}}"></script>
    <script src="{{asset('../js/carrousels.js')}}"></script>

</body>

</html>