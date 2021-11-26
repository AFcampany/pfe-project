<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paie extends Model
{
    use HasFactory;

    protected $fillable = [
        'pointage_id',
        'agent_id',
        'apprenti_id',
        
        'paie_de_base',
        'pourcentage',
        'semester',
        'montant',
    ];

   /* public function apprenti()
    {
        return $this->belongsTO(Apprenti::class);
    }*/


    public function agent()
    {
        return $this->hasOne(User::class);
    }

    
}
