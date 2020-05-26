@extends("interfaceAdmin.index")
@section("contenu")
<h3>Liste des articles</h3>
<section class="liste-articles-admin">
    @foreach($vinyles as $vinyle)
    <article class="article-admin">
        <img src="{{asset('images/disques/'.$vinyle->dossierImg.'/avant.jpg')}}" alt="{{$vinyle->nomAlbum}}" onerror="this.onerror=null;this.src='{{asset('images/svg/logo-normal-seul.svg')}}';">
        <div class="article-infos-admin">
            <ul class="infos">
                <h4>{{$vinyle->nomAlbum}} - {{$vinyle->artiste}}</h4>
                <li><span>Quantité en stock: </span>{{$vinyle->quantite}}</li>
                <li><span>Genre: </span>{{$vinyle->genre}}</li>
                <li><span>Sortie: </span>{{$vinyle->sortie}}</li>
                <li><span>Durée: </span>{{$vinyle->dureeMin}}:{{$vinyle->dureeSec}} minutes</li>
            </ul>

            <div class="actions-article">
                <a href="{{action('VinyleController@edit', $vinyle)}}"><i class="fas fa-edit"></i></a>
                <a href="{{action('VinyleController@showAdmin', $vinyle)}}"><i class="fas fa-info-circle"></i></i></a>
                <p><span>Prix: </span>${{$vinyle->prix}}</p>
            </div>
        </div>
    </article>
    @endforeach
</section>
@endsection