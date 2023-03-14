<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UE extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'nombreECU',
        'masseHoraireTotal',
        'masseHoraireEffectué',
    ];

    public function programme(): BelongsTo
    {
        return $this->belongsTo(Programme::class);
    }

    public function ecus(): HasMany
    {
        return $this->hasMany(ECU::class);
    }
}
