<?php

namespace App\Http\Controllers\frontend;

use App\Models\About;
use App\Models\Logo;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        $settings = Setting::first();
        $logo = Logo::first();
        $about = About::first();

        return view('frontend.profile', compact('settings', 'logo', 'about'));
    }

    public function store(Request $request)
    {

        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Specify the path within the public storage directory
            $image->storeAs('uploads', $imageName, 'public');

            // The $imagePath will now contain the path relative to the 'public' disk
            $imagePath = 'uploads/' . $imageName;
        }

        Logo::Create([

            'image' => $imagePath,
        ]);

        Setting::Create([

            'image' => $imagePath,
        ]);

    }
}