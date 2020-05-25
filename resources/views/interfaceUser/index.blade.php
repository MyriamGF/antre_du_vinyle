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
    <link rel="stylesheet" href="../css/style.css">
    <title>Nos vinyles | L'Antre du Vinyle</title>
</head>

<body>
    <div class="interface-user">
        <section class="haut-page">
            <nav class="nav-user">
                <p><a href="">FR</a> | <a href=""><span>EN</span></a></p>
                <a href="" class="user-icon"><i class="fas fa-user"></i></a>
                <a href="" class="panier-icon"><i class="fas fa-shopping-cart"></i></a>
            </nav>
            <div class="logo-haut">
                <a href="index.html"><img class="logo-normal" src="../images/svg/logo-normal.svg" alt="Logo L'Antre du Vinyle"></a>
            </div>
        </section>

        <nav class="nav-principale sticky">
            <ul class="menu">
                <a href="index.html">
                    <li class="onglet">Accueil</li>
                </a>
                <a href="index.html#nos-vinyles">
                    <li class="onglet actif">Nos vinyles</li>
                </a>

                <div class="onglet-groupe">
                    <li class="onglet">Commander</li>
                    <ul class="sous-menu">
                        <a href="index.html#commander">
                            <li>Comment commander</li>
                        </a>
                        <a href="index.html#livraison">
                            <li>Livraison</li>
                        </a>
                    </ul>
                </div>

                <a href="index.html#promotion">
                    <li class="onglet">Promotions</li>
                </a>
                <div class="onglet-groupe">
                    <li class="onglet">À propos</li>
                    <ul class="sous-menu">
                        <a href="index.html#heures">
                            <li>Heures d'ouverture</li>
                        </a>
                        <a href="index.html#entreprise">
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
            <img src="../images/couches/disques.png" alt="Disques en pile">
        </section>

        @include('interfaceUser.ariane')

        <section class="liste-vinyles">
            <div class="vinyles-container">
                <a href="vinyle.html">
                    <article class="vinyle">
                        <img class="vinyle-image" src="../images/disques/game-dames-and-guitar-thangs/avant.jpg" alt="Couverture de l'album Game, Dames and
                                Guitar Thangs">
                        <p class="vinyle-nom">Game, Dames and
                            Guitar Thangs - Eddie Hazel</p>
                        <p class="vinyle-prix">$10.99</p>
                    </article>
                </a>
                <a href="vinyle.html">
                    <article class="vinyle">
                        <img class="vinyle-image" src="../images/disques/game-dames-and-guitar-thangs/avant.jpg" alt="Couverture de l'album Game, Dames and
                                    Guitar Thangs">
                        <p class="vinyle-nom">Game, Dames and
                            Guitar Thangs - Eddie Hazel</p>
                        <p class="vinyle-prix">$10.99</p>
                    </article>
                </a>
                <a href="vinyle.html">
                    <article class="vinyle">
                        <img class="vinyle-image" src="../images/disques/game-dames-and-guitar-thangs/avant.jpg" alt="Couverture de l'album Game, Dames and
                                        Guitar Thangs">
                        <p class="vinyle-nom">Game, Dames and
                            Guitar Thangs - Eddie Hazel</p>
                        <p class="vinyle-prix">$10.99</p>
                    </article>
                </a>
                <a href="vinyle.html">
                    <article class="vinyle">
                        <img class="vinyle-image" src="../images/disques/game-dames-and-guitar-thangs/avant.jpg" alt="Couverture de l'album Game, Dames and
                                            Guitar Thangs">
                        <p class="vinyle-nom">Game, Dames and
                            Guitar Thangs - Eddie Hazel</p>
                        <p class="vinyle-prix">$10.99</p>
                    </article>
                </a>
                <a href="vinyle.html">
                    <article class="vinyle">
                        <img class="vinyle-image" src="../images/disques/game-dames-and-guitar-thangs/avant.jpg" alt="Couverture de l'album Game, Dames and
                                                Guitar Thangs">
                        <p class="vinyle-nom">Game, Dames and
                            Guitar Thangs - Eddie Hazel</p>
                        <p class="vinyle-prix">$10.99</p>
                    </article>
                </a>
                <a href="vinyle.html">
                    <article class="vinyle">
                        <img class="vinyle-image" src="../images/disques/game-dames-and-guitar-thangs/avant.jpg" alt="Couverture de l'album Game, Dames and
                                                    Guitar Thangs">
                        <p class="vinyle-nom">Game, Dames and
                            Guitar Thangs - Eddie Hazel</p>
                        <p class="vinyle-prix">$10.99</p>
                    </article>
                </a>
                <a href="vinyle.html">
                    <article class="vinyle">
                        <img class="vinyle-image" src="../images/disques/game-dames-and-guitar-thangs/avant.jpg" alt="Couverture de l'album Game, Dames and
                                                        Guitar Thangs">
                        <p class="vinyle-nom">Game, Dames and
                            Guitar Thangs - Eddie Hazel</p>
                        <p class="vinyle-prix">$10.99</p>
                    </article>
                </a>
                <a href="vinyle.html">
                    <article class="vinyle">
                        <img class="vinyle-image" src="../images/disques/game-dames-and-guitar-thangs/avant.jpg" alt="Couverture de l'album Game, Dames and
                                                            Guitar Thangs">
                        <p class="vinyle-nom">Game, Dames and
                            Guitar Thangs - Eddie Hazel</p>
                        <p class="vinyle-prix">$10.99</p>
                    </article>
                </a>

            </div>
        </section>

        @include('interfaceUser.commander')

        @include('interfaceUser.footer')

    </div>

    <!-- ACTIONS JQUERY / JAVASCRIPT -->
    <script src="../js/actions.js"></script>

</body>

</html>