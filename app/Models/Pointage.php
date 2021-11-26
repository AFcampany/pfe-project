<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pointage extends Model
{
    use HasFactory;

    protected $table="pointages";

    protected $fillable = [
        'agent_id',
        'apprenti_id',
        'nbr_absence',
        'period',
    ];

  /*  public function aprenti()
{
    return $this->belongsTO(Apprenti::class);
}*/

}
