<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LandingLayout extends Component
{
    public function render(): View|Closure|string
    {
        $socialMedia = [
            'facebook' => 'https://www.facebook.com/pianidiego',
            'instagram' => 'https://www.instagram.com/omagodasgaitas_/',
            'youtube' => 'https://www.youtube.com/@omagodasgaitas',
            'whatsapp' => 'https://api.whatsapp.com/message/3N3RI3PHJ7MKC1?autoload=1&app_absent=0',
        ];
        return view('layouts.landing', compact('socialMedia'));
    }
}
