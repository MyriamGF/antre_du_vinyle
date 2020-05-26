@extends("interfaceUser.index")
    @section("contenu")
        @component('interfaceUser.ariane')
            @slot('nom')
            @endslot
        @endcomponent
        <section class="liste-vinyles">
        <div class="vinyles-container">
        @foreach($vinyles as $vinyle)
            <a href="{{action('VinyleController@show', $vinyle)}}">
                <article class="vinyle">
                    <img class="vinyle-image" src="{{asset('images/disques/'.$vinyle->dossierImg.'/avant.jpg')}}" onerror="this.onerror=null;this.src='{{asset('images/svg/logo-normal-seul.svg')}}';" alt="{{$vinyle->nomAlbum}}">
                    <p class="vinyle-nom">{{$vinyle->nomAlbum}}</p>
                    <p class="vinyle-prix">{{$vinyle->prix}}</p>
                </article>
            </a>

        @endforeach
        </div>
        </section>
    @endsection
