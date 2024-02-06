<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class LandingController extends Controller
{
    public function __invoke(BannerController $bannerController): View
    {
        $banners = $bannerController->getBannersToHome();
        return view('home', compact('banners'));
    }
}
