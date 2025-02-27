<?php

declare(strict_types=1);

namespace App\Models\Resource;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subcategory extends Model
{
    use HasFactory;

    protected $table = 'resource_subcategories';

    protected $with = ['types'];

    protected $casts = [
        'custom_attributes' => 'array',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function types(): HasMany
    {
        return $this->hasMany(Type::class);
    }
}
