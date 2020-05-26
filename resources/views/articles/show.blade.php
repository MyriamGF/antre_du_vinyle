@extends("interfaceAdmin.index")
@section("contenu")
<h3>Informations sur </br> {{$vinyle->nomAlbum}} de {{$vinyle->artiste}}</h3>
<section class="liste-articles-admin">
    <a href="{{action('VinyleController@indexAdmin')}}" class="bouton" style="margin-bottom:1rem">Retour à la liste</a>
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

@include('interfaceAdmin.popUp')
@endsection