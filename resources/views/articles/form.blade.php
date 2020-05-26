{{Form::model($vinyle, array('class' => 'form-admin', 'files' => true))}}
@if($errors->any())
<div style="color: var(--rouge); font-family: 'Raleway',sans-serif; font-weight:500; font-size:.9rem; text-transform: uppercase; margin-bottom: 1rem;">
    Veuillez corriger les erreurs du formulaire
</div>
@endif
<div class="groupe-champ">
    {{Form::label('nomAlbum', 'Nom de l\'album')}}
    {{Form::text('nomAlbum')}}
</div>
@error('nomAlbum')
<span class="groupe-erreur">
    {{$errors->first('nomAlbum')}}
</span>
@enderror
<div class="groupe-champ">
    {{Form::label('artiste', 'Nom de l\'artiste')}}
    {{Form::text('artiste')}}
</div>
@error('artiste')
<span class="groupe-erreur">
    {{$errors->first('artiste')}}
</span>
@enderror
<div class="groupe-champ">
    {{Form::label('genre', 'Genre')}}
    {{Form::text('genre')}}
</div>
@error('genre')
<span class="groupe-erreur">
    {{$errors->first('genre')}}
</span>
@enderror
<div class="groupe-champ">
    {{Form::label('sortie', 'Sortie de l\'album')}}
    {{Form::text('sortie')}}
</div>
@error('sortie')
<span class="groupe-erreur">
    {{$errors->first('sortie')}}
</span>
@enderror
<div class="groupe-champ">
    {{Form::label('dureeMin', 'Durée en minutes')}}
    {{Form::number('dureeMin')}}:
    {{Form::number('dureeSec')}}
</div>
@error('dureeMin')
<span class="groupe-erreur">
    {{$errors->first('dureeMin')}}
</span>
@enderror
@error('dureeSec')
<span class="groupe-erreur">
    {{$errors->first('dureeSec')}}
</span>
@enderror
<div class="groupe-champ">
    {{Form::label('prix', 'Prix')}}
    {{Form::number('prix', $vinyle->prix, array('step'=>'any'))}}
</div>
@error('prix')
<span class="groupe-erreur">
    {{$errors->first('prix')}}
</span>
@enderror
<div class="groupe-champ">
    {{Form::label('quantite', 'Quantité en stock')}}
    {{Form::number('quantite')}}
</div>
@error('quantite')
<span class="groupe-erreur">
    {{$errors->first('quantite')}}
</span>
@enderror

<div class="groupe-champ" style="display:column">
    {{Form::label('dossierImg', 'Dossier d\'images')}}
    {{Form::text('dossierImg')}}
    <div class="liste-images">
        <img src="{{asset('images/disques/'.$vinyle->dossierImg.'/avant.jpg')}}" alt="{{$vinyle->nomAlbum}}" onerror="this.onerror=null;this.src='{{asset('images/svg/logo-normal-seul.svg')}}';">
        <img src="{{asset('images/disques/'.$vinyle->dossierImg.'/arriere.jpg')}}" alt="{{$vinyle->nomAlbum}}" onerror="this.onerror=null;this.src='{{asset('images/svg/logo-normal-seul.svg')}}';">
        <img src="{{asset('images/disques/'.$vinyle->dossierImg.'/disque.jpg')}}" alt="{{$vinyle->nomAlbum}}" onerror="this.onerror=null;this.src='{{asset('images/svg/logo-normal-seul.svg')}}';">
    </div>
</div>
@error('dossierImg')
<span class="groupe-erreur">
    {{$errors->first('dossierImg')}}
</span>
@enderror

{{Form::submit('Enregistrer', array('class' => 'bouton-form-rouge'))}}
<a class="bouton-annuler" href="{{action('VinyleController@indexAdmin')}}" class="bouton" style="margin-top:1rem">Annuler</a>

{{Form::close()}}