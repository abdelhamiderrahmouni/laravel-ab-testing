<?php

namespace AbdelhamidErrahmouni\LaravelABTesting\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Goal extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'experiment_id',
        'count',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function scopeWhereActive($query, bool $condition = true)
    {
        return $query->where('is_active', $condition);
    }

    public function experiment(): BelongsTo
    {
        return $this->belongsTo(Experiment::class);
    }

    public function incrementCount(): void
    {
        $this->count++;
        $this->save();
    }

    public function decrementCount(): void
    {
        $this->count--;
        $this->save();
    }
}
