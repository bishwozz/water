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
        $contact = $request->validate([

            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'meas' => 'required',

        ]);
        // dd($request);

        try {

            Contact::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'meas' => $request->input('meas'),

            ]);
            dd($request);

            return response()->json(['success' => 'creating the contact.']);

        } catch (\Throwable $th) {
            return response()->json(['error' => 'An error occurred while creating the contact.']);

        }

    }
}
