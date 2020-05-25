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
    <!-- Slick -->
    <link href="../vendors/slick/slick-theme.css" rel="stylesheet">
    <link href="../vendors/slick/slick.css" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <title>L'Antre du Vinyle | Accueil</title>
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

        <header class="header-accueil">
            <h1>Plus d’un millier de</br><span>Vinyles usagés</span></br>à découvrir</h1>
        </header>

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
            <a class="bouton" href="nos-vinyles.html">Tous nos vinyles</a>
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
                <img class="table-svg jello-horizontal" src="../images/svg/table-tournante.svg" alt="Illustration table tournante">
                <a class="bouton" href="promotions.html">En savoir plus</a>
            </div>

        </section>

        <section id="commander" class="commander">
            <h2><span>Comment commander</span></h2>
            <div class="commander-etapes">
                <ul>
                    <li class="slide-top-1"><span>1.</span></li>
                    <li>Ajouter les articles désirés au panier.</li>
                </ul>
                <ul>
                    <li class="slide-top-2"><span>2.</span></li>
                    <li>Consulter votre liste d’achats en cliquant sur l’icône du
                        panier et confirmer l’envoi du bon de commande.</li>
                </ul>
                <ul>
                    <li class="slide-top-3"><span>3.</span></li>
                    <li>Un de nos représentants vous contactera pour procéder
                        au paiement par téléphone ou virement Interac.</li>
                </ul>
                <ul>
                    <li class="slide-top-4"><span>4.</span></li>
                    <li>La marchandise vous sera livrée à domicile dans les
                        plus brefs délais.</li>
                </ul>

            </div>
        </section>

        <section id="livraison" class="livraison">
            <h2><span>Livraison</span></h2>
            <div class="livraison-container">
                <div class="livraison-texte">
                    <p>Nous offrons la livraison dans un rayon de 15 km à partir de notre magasin à Bois-des-filion.
                        Faites-vous partie du rayon admissible pour la livraison de vos achats? </p>
                    <p>Découvrez-le ici en insérant votre code postal.</p>
                    <form action="">
                        <div class="groupe-champ">
                            <input type="text" id="codepostal" name="codepostal" placeholder="Votre code postal"></div>
                        <input class="bouton-form" type="submit" onclick="alert('Vous êtes admissible pour la livraison!')" value="Vérifier">
                    </form>
                </div>
                <div class="livraison-image">
                    <img class="livraison-image swing-in-bottom-fwd" alt="Boîte de livraison" src="../images/couches/boite-300.png" srcset="../images/couches/boite-300.png 300w,
                    ../images/couches/boite-600.png 600w,
                    ../images/couches/boite-900.png 900w" sizes="(max-width: 1024px) 150px, (max-width: 1200px) 300px, (max-width: 1800px) 400px, 500px">
                </div>
            </div>

        </section>

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
    <script src="../js/actions.js"></script>

    <!-- SLICK - CARROUSELS -->
    <script src="../vendors/slick/slick.min.js"></script>
    <script src="../js/carrousels.js"></script>

</body>

</html>