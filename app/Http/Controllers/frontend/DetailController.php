<?php

namespace App\Http\Controllers\frontend;

use App\Models\Logo;
use App\Models\Image;
use App\Models\Review;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Routing\Controller;

class DetailController extends Controller
{
    // public function edit(Request $request, $id)
    // {
    //     // dd($id);
    //     $products = Product::find($id);

    //     return view('sidebar.products', compact('products'));
    // }

    public function index($id)
    {
        $logo = Logo::first();
        $settings = Setting::first();
        $products = Product::where('id', '=', $id)->first();
        $images = Image::where('product_id', '=', $id)->get();
        $review = Review::all();

        //    dd($image,$id);

        return view('sidebar.products', compact('products', 'logo', 'settings', 'images', 'review'));
    }

}
