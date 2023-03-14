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
        'masseHoraireTotal',
        'masseHoraireEcoulee',
    ];

    public function ue(): BelongsTo
    {
        return $this->belongsTo(UE::class);
    }
}
