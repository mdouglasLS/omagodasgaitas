<?php

namespace App\Http\Controllers;

use App\Models\ServiceCatalog;
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
