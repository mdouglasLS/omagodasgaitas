<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Catalog\ProductCatalogController;
use App\Http\Controllers\Catalog\ServiceCatalogController;
use Illuminate\View\View;

class LandingController extends Controller
{
    public function __invoke(BannerController $bannerController, ServiceCatalogController $serviceCatalogController, ProductCatalogController $productCatalogController): View
    {
        $banners = $bannerController->getBannersToHome();
        $services = $serviceCatalogController->getServices();
//        $products = $productCatalogController->show();
        return view('home', compact('banners', 'services'));
    }
}
