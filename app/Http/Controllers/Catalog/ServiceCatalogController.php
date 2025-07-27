<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use App\Models\Catalog\ServiceCatalog;
use Illuminate\Database\Eloquent\Collection;

class ServiceCatalogController extends Controller
{
    public function getServices(): Collection
    {
        return ServiceCatalog::where('is_active', true)
            ->orderBy('order','asc')
            ->get();
    }
}
