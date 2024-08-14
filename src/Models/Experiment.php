<?php

namespace AbdelhamidErrahmouni\LaravelABTesting\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Experiment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'visitors',
        'engagement',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /*---------------------------------------------------------------------
     * Scopes
     *---------------------------------------------------------------------*/
    public function scopeWhereActive($query, bool $condition = true)
    {
        return $query->where('is_active', $condition);
    }

    /*---------------------------------------------------------------------
     * Relations
     *---------------------------------------------------------------------*/

    public function goals(): HasMany
    {
        return $this->hasMany(Goal::class);
    }

    /*---------------------------------------------------------------------
     * Actions
     *---------------------------------------------------------------------*/
    public function incrementVisitors(): void
    {
        $this->visitors++;
        $this->save();
    }

    public function decrementVisitors(): void
    {
        $this->visitors--;
        $this->save();
    }

    public function incrementEngagement(): void
    {
        $this->engagement++;
        $this->save();
    }

    public function decrementEngagement(): void
    {
        $this->engagement--;
        $this->save();
    }
}
