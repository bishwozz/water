<?php

namespace App\Http\Controllers\frontend;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'meas' => 'required',

        ]);
        // dd($request);

        try {

            Review::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'rate' => $request->input('rate'),
                'meas' => $request->input('meas'),

            ]);

            return redirect()->back();

        } catch (\Throwable $th) {
            dd($th);
        }

    }
}
