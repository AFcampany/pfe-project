<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenti extends Model
{
    use HasFactory;
    
    protected $table="apprentis";


    protected $fillable = ['nom','prenom','date_naissence','lieu_naissence','email', 'num_tel',
    'niveau_scolaire','duree_stage','periode_de_stage_du','periode_de_stage_au',
    'diplome','etat_apprenti', 'code_postale', 'etablisement_formation', 'nom_et_prenom_tuteur',
    'direction','specialite', 'avis', 'observation' ,'pdf','attestation'];
    
    
    protected $attributes = [
        'duree_stage'=> 0,
        'diplome'=>0,
        'periode_de_stage_du'=>'1970/01/01',
        'periode_de_stage_au'=>'1970/01/01',
        'etat_apprenti' => 0,
        'code_postale'=> '000',
        'nom_et_prenom_tuteur'=>'vide',
        'specialite'=>'vide',
        'avis' => 0,
        'observation' => 'vide'
       
    ];

    public function latests(){

    return $this->hasOne(Pointage::class,'apprenti_id','id')->latestOfMany();

    }

    public function paies()
    {
        return $this->hasMany(Paie::class);
    }

    

}
