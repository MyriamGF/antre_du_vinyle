<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vinyle extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'nomAlbum',
        'artiste',
        'genre',
        'sortie',
        'dureeMin',
        'dureeSec',
        'prix',
        'quantite',
        'dossierImg',

    ];

    static public $regles = [
        'nomAlbum' => 'required',
        'artiste' => 'required',
        'genre' => 'required',
        'sortie' => 'required',
        'dureeMin' => 'required',
        'dureeSec' => 'required',
        'prix' => 'required',
        'quantite' => 'required',
        'dossierImg' => 'required',
    ];

    static public function fake()
    {
        $f = \Faker\Factory::create("fr_CA");
        $resultat = new self();
        $resultat->nomAlbum = $f->text();
        $resultat->dossierImg = $f->text();
        $resultat->artiste = $f->name();
        $resultat->sortie = $f->date($format = 'Y-m-d');
        $resultat->dureeMin = $f->randomDigit();
        $resultat->dureeSec = $f->randomDigit();
        $resultat->prix = $f->text();
        $resultat->quantite = $f->randomDigit();
        $resultat->img1 = $f->imageUrl();
        $resultat->img2 = $f->imageUrl();
        $resultat->img3 = $f->imageUrl();
        return $resultat;
    }
}
