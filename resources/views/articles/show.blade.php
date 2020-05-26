@extends("interfaceAdmin.index")
@section("contenu")
<h3>Informations sur </br> {{$vinyle->nomAlbum}} de {{$vinyle->artiste}}</h3>
<section class="liste-articles-admin">
    <article class="article-admin">
        <img src="{{asset('images/disques/'.$vinyle->dossierImg.'/avant.jpg')}}" alt="{{$vinyle->nomAlbum}}" onerror="this.onerror=null;this.src='{{asset('images/svg/logo-normal-seul.svg')}}';">
        <div class="article-infos-admin">
            <ul class="infos" style="font-size:1.15rem">
                <li><span>Quantité en stock: </span>{{$vinyle->quantite}}</li>
                <li><span>Genre: </span>{{$vinyle->genre}}</li>
                <li><span>Sortie: </span>{{$vinyle->sortie}}</li>
                <li><span>Durée: </span>{{$vinyle->dureeMin}}:{{$vinyle->dureeSec}} minutes</li>
                <li><span>Prix: </span>${{$vinyle->prix}}</li>
            </ul>

            <div class="actions-article">
                <a href="{{action('VinyleController@edit', $vinyle)}}"><i class="fas fa-edit"></i>
                    <p class="act-tag">Modifier</p>
                </a>
                <a onclick="ouvrirPU()"><i class="far fa-times-circle"></i>
                    <p class="act-tag">Supprimer</p>
                </a>
            </div>
        </div>
    </article>

</section>

<div class="pop-up" id="pop-up-delete">
    <a class="fermer-pop-up"><i class="fas fa-times"></i></a>
    <h3>Voulez-vous vraiment supprimer cet article?</h3>
    <article>
        <img src="{{asset('images/disques/'.$vinyle->dossierImg.'/avant.jpg')}}" alt="{{$vinyle->nomAlbum}}" onerror="this.onerror=null;this.src='{{asset('images/svg/logo-normal-seul.svg')}}';">
        <div>
            <h4>{{$vinyle->nomAlbum}} - {{$vinyle->artiste}}</h4>
            <p><span>Prix: </span>${{$vinyle->prix}}</p>
            <div class="actions-pop-up">
                <a class="fermer-pop-up">Annuler</a>
                <a href="{{action('VinyleController@destroy', $vinyle)}}" class="">Supprimer</a>
            </div>
        </div>
    </article>
</div>
@endsection