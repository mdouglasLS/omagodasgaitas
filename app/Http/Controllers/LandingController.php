<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class LandingController extends Controller
{
    public function __invoke(BannerController $bannerController, ServiceCatalogController $serviceCatalogController): View
    {
        $banners = $bannerController->getBannersToHome();
        $services = $serviceCatalogController->getServices();
        return view('home', compact('banners', 'services'));
    }
}
