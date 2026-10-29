<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Equipment extends Model
{
    use HasFactory;

    protected $table = 'equipments';

    protected $fillable = [
        'category_id',
        'asset_code',
        'name',
        'specification',
        'condition',
        'status',
        'daily_rental_fee',
        'image_path',
    ];

    protected $casts = [
        'daily_rental_fee' => 'integer',
    ];


    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }


    public function loanRequests(): HasMany
    {
        return $this->hasMany(LoanRequest::class, 'equipment_id', 'id');
    }
}







