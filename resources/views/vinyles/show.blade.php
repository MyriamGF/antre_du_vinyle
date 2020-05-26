@extends("interfaceUser.index")
@section("contenu")
    @component('interfaceUser.ariane')
        @slot('nom')
        {{$vinyle->nomAlbum}}
        @endslot
    @endcomponent
    <section class="vinyle-details">
        <h3>{{$vinyle->nomAlbum}} - {{$vinyle->artiste}}</h3>
        <div class="details-container">
            <div class="details-carrousel">
                <div class="carrousel-vinyle" style="width: 30vw;">
                    <img src="{{asset('../images/disques/'.$vinyle->dossierImg.'/avant.jpg')}}" alt="{{$vinyle->nomAlbum}}" onerror="this.onerror=null;this.src='{{asset('images/svg/logo-normal-seul.svg')}}';">
                    <img src="{{asset('../images/disques/'.$vinyle->dossierImg.'/arriere.jpg')}}" alt="{{$vinyle->nomAlbum}}" onerror="this.onerror=null;this.src='{{asset('images/svg/logo-normal-seul.svg')}}';">
                    <img src="{{asset('../images/disques/'.$vinyle->dossierImg.'/disque.jpg')}}" alt="{{$vinyle->nomAlbum}}" onerror="this.onerror=null;this.src='{{asset('images/svg/logo-normal-seul.svg')}}';">

                </div>
                <div class="carrousel-vignettes" style="width: 30vw;">
                    <img src="{{asset('../images/disques/'.$vinyle->dossierImg.'/avant.jpg')}}" alt="{{$vinyle->nomAlbum}}" onerror="this.onerror=null;this.src='{{asset('images/svg/logo-normal-seul.svg')}}';">
                    <img src="{{asset('../images/disques/'.$vinyle->dossierImg.'/arriere.jpg')}}" alt="{{$vinyle->nomAlbum}}" onerror="this.onerror=null;this.src='{{asset('images/svg/logo-normal-seul.svg')}}';">
                    <img src="{{asset('../images/disques/'.$vinyle->dossierImg.'/disque.jpg')}}" alt="{{$vinyle->nomAlbum}}" onerror="this.onerror=null;this.src='{{asset('images/svg/logo-normal-seul.svg')}}';">
                </div>
            </div>
            <div class="details-infos">
                <div class="details-prix">
                    <p>${{$vinyle->prix}} CAD</p>
                </div>
                <ul>
                    <li class="quantite">{{$vinyle->quantite}} en stock</li>
                    <li><span>Genre: </span>{{$vinyle->genre}}</li>
                    <li><span>Sortie: </span>{{$vinyle->sortie}}</li>
                    <li><span>Durée: </span>{{$vinyle->dureeMin}}:{{$vinyle->dureeSec}} minutes</li>
                </ul>
                <a class="bouton">Ajouter au panier <i class="fas fa-plus"></i></a>

            </div>
        </div>
    </section>

    <section class="suggestions">
        <h3>Vous pourriez aussi aimer...</h3>
        <div class="suggestions-container">
            
            <a href="vinyle.html">
                <article class="vinyle">
                    <img class="vinyle-image" src="../images/disques/game-dames-and-guitar-thangs/avant.jpg" alt="Couverture de l'album Game, Dames and
                                                            Guitar Thangs">
                    <p class="vinyle-nom">Game, Dames and
                        Guitar Thangs - Eddie Hazel</p>
                </article>
            </a><a href="vinyle.html">
                <article class="vinyle">
                    <img class="vinyle-image" src="../images/disques/game-dames-and-guitar-thangs/avant.jpg" alt="Couverture de l'album Game, Dames and
                                                                Guitar Thangs">
                    <p class="vinyle-nom">Game, Dames and
                        Guitar Thangs - Eddie Hazel</p>
                </article>
            </a><a href="vinyle.html">
                <article class="vinyle">
                    <img class="vinyle-image" src="../images/disques/game-dames-and-guitar-thangs/avant.jpg" alt="Couverture de l'album Game, Dames and
                                                                    Guitar Thangs">
                    <p class="vinyle-nom">Game, Dames and
                        Guitar Thangs - Eddie Hazel</p>
                </article>
            </a>
        </div>
    </section>
@endsection