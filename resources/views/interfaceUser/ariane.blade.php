<section class="ariane">
    <a href="{{route('accueilUser')}}">
        <h4>Accueil</h4>
    </a>
    <h4> / </h4>
    <a href="{{action('VinyleController@index')}}">
        <h4>Nos vinyles</h4>
    </a>
    <h4> / </h4>
    <h4>{{$nom}}</h4>
</section>