<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ECU extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'masse_horaire_total',
        'masse_horaire_ecoulee',
        'nom_enseignant',
        'ue_id',
    ];

    public function ue(): BelongsTo
    {
        return $this->belongsTo(UE::class);
    }
}
