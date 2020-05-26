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