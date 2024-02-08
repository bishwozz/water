<?php

namespace App\Http\Controllers\frontend;

use App\Models\Contact;
use App\Models\Logo;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ContactController extends Controller
{
    public function index()
    {
        $settings = Setting::first();
        $logo = Logo::first();

        return view('frontend.contact', compact('settings', 'logo', ));
    }
    public function store(Request $request)
    {
        $meassage = $request->validate([

            'name' => 'required|string',

        ]);

        Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'meas' => $request->input('meas'),
        ]);

        return view('frontend.contact');

    }
}
