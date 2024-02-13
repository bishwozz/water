<?php

namespace App\Http\Controllers\frontend;

namespace App\Http\Controllers\frontend;

use App\Models\Logo;
use App\Models\Setting;
use App\Models\Water;
use Illuminate\Routing\Controller;

class PlantController extends Controller
{
    public function index($id)
    {
        $logo = Logo::first();
        $settings = Setting::first();
        $waters = Water::where('id', '=', $id)->first();

        // dd($products);

        return view('sidebar.all', compact('waters', 'logo', 'settings', ));
    }

}
