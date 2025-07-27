<?php

namespace App\Models\Catalog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductCatalog extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'fk_product_type',
        'priority',
    ];

    public function type(): BelongsTo
    {
        return $this->belongsTo(ProductType::class, 'fk_product_type');
    }
}
