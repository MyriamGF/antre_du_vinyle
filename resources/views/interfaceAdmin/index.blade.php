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
    <title>Liste des articles | ADV Administration</title>
</head>

<body>
    <div class="interface-admin">
        <nav class="nav-admin">
            <div class="fixed">
                <a href="index.html"><img src="../images/svg/logo-normal.svg" alt="Logo l'Antre du Vinyle"></a>
                <ul class="onglets">
                    <h2><span>Vos options</span></h2>
                    <a href="liste-commandes.html">
                        <li class="icone"><i class="fas fa-receipt"></i></li>
                        <li class="onglet">Afficher les commandes</li>
                    </a>
                    <a class="selected" href="liste-articles.html">
                        <li class="icone"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90.18 35.19">
                                <title>icone-disque</title>
                                <g id="Calque_2" data-name="Calque 2">
                                    <g id="Calque_1-2" data-name="Calque 1">
                                        <path d="M45.11,3.4C24.87,3.4,8.36,9.72,7.85,17.58v0c.51,7.85,17,14.18,37.26,14.18s36.75-6.33,37.25-14.18v0C81.86,9.72,65.33,3.4,45.11,3.4Zm0,21.47c-10.55,0-19.14-3.23-19.45-7.26v0c.31-4,8.9-7.26,19.45-7.26s19.15,3.22,19.46,7.26v0C64.23,21.64,55.65,24.87,45.08,24.87Zm20.37,1.55-.71.25a1.55,1.55,0,0,0-.2-1.06c.21-.06.41-.14.61-.21,5.49-2,8.95-4.81,8.95-7.83a5.56,5.56,0,0,0-2.1-4,1.59,1.59,0,0,0,.67-.78,6.59,6.59,0,0,1,2.43,4.78C75.1,21.1,71.42,24.23,65.45,26.42Z" />
                                        <path d="M45.09,0C20.21,0,0,7.87,0,17.58v0c0,9.71,20.21,17.58,45.09,17.58s45.05-7.87,45.09-17.58v0C90.14,7.87,70,0,45.09,0ZM84.37,17.61c-.48,8.3-17.87,15-39.26,15s-38.79-6.68-39.26-15v0c.47-8.3,17.86-15,39.26-15s38.78,6.69,39.26,15Z" />
                                        <path d="M45.09,11.08c-9.32,0-16.91,2.89-17.18,6.5v0c.27,3.61,7.86,6.5,17.18,6.5S62,21.22,62.27,17.61v0C62,14,54.42,11.08,45.09,11.08Zm0,7.86c-1.91,0-3.45-.6-3.45-1.35s1.54-1.34,3.45-1.34,3.45.6,3.45,1.34S47,18.94,45.09,18.94Z" />
                                    </g>
                                </g>
                            </svg></li>
                        <li class="onglet">Afficher tous les articles</li>
                    </a>
                    <a href="ajouter-article.html">
                        <li class="icone"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 116.17 48.88">
                                <title>icone-disque-plus</title>
                                <g id="Calque_2" data-name="Calque 2">
                                    <g id="Calque_1-2" data-name="Calque 1">
                                        <path d="M45.11,17.09c-20.24,0-36.75,6.32-37.26,14.18v0c.51,7.85,17,14.18,37.26,14.18S81.86,39.15,82.36,31.3v0C81.86,23.41,65.33,17.09,45.11,17.09Zm0,21.47c-10.55,0-19.14-3.23-19.45-7.26v0c.31-4,8.9-7.26,19.45-7.26s19.15,3.22,19.46,7.26v0C64.23,35.33,55.65,38.56,45.08,38.56Zm20.37,1.55-.71.25a1.55,1.55,0,0,0-.2-1.06c.21-.06.41-.14.61-.21,5.49-2,8.95-4.81,8.95-7.83a5.56,5.56,0,0,0-2.1-4,1.59,1.59,0,0,0,.67-.78,6.59,6.59,0,0,1,2.43,4.78C75.1,34.79,71.42,37.92,65.45,40.11Z" />
                                        <path d="M45.09,13.69C20.21,13.69,0,21.56,0,31.27v0C0,41,20.21,48.88,45.09,48.88S90.14,41,90.18,31.3v0C90.14,21.56,70,13.69,45.09,13.69ZM84.37,31.3c-.48,8.3-17.87,15-39.26,15S6.32,39.6,5.85,31.3v0c.47-8.3,17.86-15,39.26-15s38.78,6.69,39.26,15Z" />
                                        <path d="M45.09,24.77c-9.32,0-16.91,2.89-17.18,6.5v0c.27,3.61,7.86,6.5,17.18,6.5S62,34.91,62.27,31.3v0C62,27.66,54.42,24.77,45.09,24.77Zm0,7.86c-1.91,0-3.45-.6-3.45-1.35s1.54-1.34,3.45-1.34,3.45.6,3.45,1.34S47,32.63,45.09,32.63Z" />
                                        <polygon points="116.17 12.21 116.17 17.21 104.16 17.21 104.16 29.02 99.16 29.02 99.16 17.21 87.15 17.21 87.15 12.21 99.16 12.21 99.16 0 104.16 0 104.16 12.21 116.17 12.21" />
                                    </g>
                                </g>
                            </svg></li>
                        <li class="onglet">Ajouter un article</li>
                    </a>
                </ul>
                <a href="connexion.html"><i class="fas fa-sign-out-alt"></i> se déconnecter</a>
            </div>
        </nav>

        <div class="page-admin">
            <h2><span>Module de gestion du site</span></h2>
            <div class="contenu">
                <h3>Liste des articles</h3>
                <section class="liste-articles-admin">
                    <article class="article-admin">
                        <img src="../images/disques/game-dames-and-guitar-thangs/avant.jpg" alt="Game, Dames And Guitar Thangs">
                        <div class="article-infos-admin">
                            <ul class="infos">
                                <h4>Game, Dames And Guitar Thangs - Eddie Hazel</h4>
                                <li><span>Quantité en stock: </span>2</li>
                                <li><span>Genre: </span>Psychedelic soul, funk, hard rock</li>
                                <li><span>Sortie: </span>29 juillet 1977</li>
                                <li><span>Durée: </span>38:06 minutes</li>
                            </ul>

                            <div class="actions-article">
                                <a href="modifier-article.html"><i class="fas fa-edit"></i></a>
                                <a onclick="ouvrirPU()"><i class="far fa-times-circle"></i></a>
                                <p><span>Prix: </span>$229.99</p>
                            </div>
                        </div>
                    </article>
                    <article class="article-admin">
                        <img src="../images/disques/game-dames-and-guitar-thangs/avant.jpg" alt="Game, Dames And Guitar Thangs">
                        <div class="article-infos-admin">
                            <ul class="infos">
                                <h4>Game, Dames And Guitar Thangs - Eddie Hazel</h4>
                                <li><span>Quantité en stock: </span>2</li>
                                <li><span>Genre: </span>Psychedelic soul, funk, hard rock</li>
                                <li><span>Sortie: </span>29 juillet 1977</li>
                                <li><span>Durée: </span>38:06 minutes</li>
                            </ul>

                            <div class="actions-article">
                                <a href="modifier-article.html"><i class="fas fa-edit"></i></a>
                                <a onclick="ouvrirPU()"><i class="far fa-times-circle"></i></a>
                                <p><span>Prix: </span>$229.99</p>
                            </div>
                        </div>
                    </article>
                    <article class="article-admin">
                        <img src="../images/disques/game-dames-and-guitar-thangs/avant.jpg" alt="Game, Dames And Guitar Thangs">
                        <div class="article-infos-admin">
                            <ul class="infos">
                                <h4>Game, Dames And Guitar Thangs - Eddie Hazel</h4>
                                <li><span>Quantité en stock: </span>2</li>
                                <li><span>Genre: </span>Psychedelic soul, funk, hard rock</li>
                                <li><span>Sortie: </span>29 juillet 1977</li>
                                <li><span>Durée: </span>38:06 minutes</li>
                            </ul>

                            <div class="actions-article">
                                <a href="modifier-article.html"><i class="fas fa-edit"></i></a>
                                <a onclick="ouvrirPU()"><i class="far fa-times-circle"></i></a>
                                <p><span>Prix: </span>$229.99</p>
                            </div>
                        </div>
                    </article>

                </section>
            </div>
            <div class="pop-up" id="pop-up-delete">
                <a class="fermer-pop-up"><i class="fas fa-times"></i></a>
                <h3>Voulez-vous vraiment supprimer cet article?</h3>
                <article>
                    <img src="../images/disques/game-dames-and-guitar-thangs/avant.jpg" alt="Game, Dames And Guitar Thangs">
                    <div>
                        <h4>Game, Dames And Guitar Thangs - Eddie Hazel</h4>
                        <p><span>Prix: </span>$229.99</p>
                        <div class="actions-pop-up">
                            <a class="fermer-pop-up">Annuler</a>
                            <a class="">Supprimer</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
    </div>

    <!-- ACTIONS JQUERY / JAVASCRIPT -->
    <script src="../js/actions.js"></script>

</body>

</html>