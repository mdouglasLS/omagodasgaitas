<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Database\Eloquent\Collection;

class BannerController extends Controller
{
    public function getBannersToHome(): Collection
    {
        return Banner::where('is_active', true)->orderBy('order','asc')->get();
    }
}
