<?php

namespace App\Http\Controllers\frontend;

use App\Models\Logo;
use App\Models\Setting;
use App\Models\Water;
use App\Models\Wtr;
use Illuminate\Routing\Controller;

class WaterController extends Controller
{
    public function index()
    {
        $settings = Setting::first();
        $logo = Logo::first();
        $wtr = Wtr::first();
        $water = Water::orderBy('id')->get();

        return view('sidebar.water', compact('logo', 'settings', 'wtr', 'water'));
    }
}
