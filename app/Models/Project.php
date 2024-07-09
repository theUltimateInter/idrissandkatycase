<?php

namespace App\Models;

use App\Models\Categorie;
use App\Models\ProjectImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        "NumProjet",
        "name",
        "ville",
        "Année",
        "Description",
        "maitre_ouvrage_id", // Nom de la colonne pour l'ID du maître d'ouvrage
        "architecte",
        "categorie_id",
        "video",
        "observation"
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function maitreOuvrage()
    {
        return $this->belongsTo(MaitreOuvrage::class, 'maitreOuvrage');
    }

    public function photos()
    {
        return $this->hasMany(ProjectImage::class);
    }

    public function addObservations()
    {
        return $this->hasMany(Observation::class);
    }
}
