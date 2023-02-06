<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CadWebTp1Etudiant extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',
        'courriel',
        'date_de_naissance',
        'adresse',
        'telephone',
        'ville_id',
    ];

    public function etudiantHasVille(){
        return $this->hasOne('App\Models\CadWebTp1Ville', 'id', 'ville_id');
    }
}
