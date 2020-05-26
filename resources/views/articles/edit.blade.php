@extends('interfaceAdmin.index')
@section('contenu')
<h3>Modifier un article</h3>
@include('articles.form')
<div class="div-sup"><a onclick="ouvrirPU()" class="sup-form"><i class="far fa-times-circle"></i></a></div>

@include('interfaceAdmin.popUp')

@endsection