@extends("interfaceUser.index")
    @section("contenu")
        <section class="liste-vinyles">
        <div class="vinyles-container">
        @foreach($vinyles as $vinyle)
            <a href="{{action('VinyleController@show', $vinyle)}}">
                <article class="vinyle">
                    <img class="vinyle-image" src="{{asset('images/disques/'.$vinyle->dossierImg.'/avant.jpg')}}" alt="{{$vinyle->nomAlbum}}">
                    <p class="vinyle-nom">{{$vinyle->nomAlbum}}</p>
                    <p class="vinyle-prix">{{$vinyle->prix}}</p>
                </article>
            </a>

        @endforeach
        </div>
        </section>
    @endsection
