<?php

namespace App\Http\Controllers\frontend;

use App\Models\Logo;
use App\Models\Product;
use App\Models\Raw;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $settings = Setting::first();
        $logo = Logo::first();
        $products = Product::orderBy('id')->get();

        $raws = Raw::first();
        // dd($products);

        return view('sidebar.rawmaterials', compact('settings', 'logo', 'raws', 'products'));
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

        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Specify the path within the public storage directory
            $image->storeAs('uploads', $imageName, 'public');

            // The $imagePath will now contain the path relative to the 'public' disk
            $imagePath = 'uploads/' . $imageName;
        }

        Product::Create([

            'image' => $imagePath,
        ]);

    }
}
