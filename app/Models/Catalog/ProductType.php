<?php

namespace App\Models\Catalog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductType extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_name'
    ];

    public function products(): HasMany
    {
        return $this->hasMany(ProductCatalog::class, 'fk_product_type');
    }
}
