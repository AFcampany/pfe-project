<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    use HasFactory;

    protected $table="stagiaires";

    protected $fillable = ['nom','prenom','date_naissence','lieu_naissence','email',
    'niveau_scolaire','duree_stage','periode_de_stage_du','periode_de_stage_au',
    'diplome','etat_stagiaire','nom_et_prenom_tuteur','direction','specialite','theme','pdf','attestation'];
    
    
    protected $attributes = [
        'duree_stage'=>'3',
        'periode_de_stage_du'=>'1970/01/01',
        'periode_de_stage_au'=>'1970/01/01',
        'etat_stagiaire' => 0,
        'nom_et_prenom_tuteur'=>'vide',
        'direction'=>'vide',
        'specialite'=>'vide',
        'theme'=>'vide'
    ];
}
