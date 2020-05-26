{{Form::model($vinyle, array('class' => 'form-admin', 'files' => true))}}
<div class="groupe-champ">
    {{Form::label('nomAlbum', 'Nom de l\'album')}}
    {{Form::text('nomAlbum')}}
</div>
<div class="groupe-champ">
    {{Form::label('artiste', 'Nom de l\'artiste')}}
    {{Form::text('artiste')}}
</div>
<div class="groupe-champ">
    {{Form::label('genre', 'Genre')}}
    {{Form::text('genre')}}
</div>
<div class="groupe-champ">
    {{Form::label('sortie', 'Sortie de l\'album')}}
    {{Form::text('sortie')}}
</div>
<div class="groupe-champ">
    {{Form::label('dureeMin', 'Durée en minutes')}}
    {{Form::number('dureeMin')}}:
    {{Form::number('dureeSec')}}
</div>
<div class="groupe-champ">
    {{Form::label('prix', 'Prix')}}
    {{Form::number('prix', $vinyle->prix, array('step'=>'any'))}}
</div>
<div class="groupe-champ">
    {{Form::label('quantite', 'Quantité en stock')}}
    {{Form::number('quantite')}}
</div>

<div class="groupe-champ" style="display:column">
    {{Form::label('dossierImg', 'Dossier d\'images')}}
    {{Form::text('dossierImg')}}
    <div class="liste-images">
        <img src="{{asset('images/disques/'.$vinyle->dossierImg.'/avant.jpg')}}" alt="{{$vinyle->nomAlbum}}" onerror="this.onerror=null;this.src='{{asset('images/svg/logo-normal-seul.svg')}}';">
        <img src="{{asset('images/disques/'.$vinyle->dossierImg.'/arriere.jpg')}}" alt="{{$vinyle->nomAlbum}}" onerror="this.onerror=null;this.src='{{asset('images/svg/logo-normal-seul.svg')}}';">
        <img src="{{asset('images/disques/'.$vinyle->dossierImg.'/disque.jpg')}}" alt="{{$vinyle->nomAlbum}}" onerror="this.onerror=null;this.src='{{asset('images/svg/logo-normal-seul.svg')}}';">
    </div>
</div>

{{Form::submit('Enregistrer', array('class' => 'bouton-form-rouge'))}}
<a class="bouton-annuler" href="{{action('VinyleController@indexAdmin')}}" class="bouton" style="margin-top:1rem">Annuler</a>

{{Form::close()}}