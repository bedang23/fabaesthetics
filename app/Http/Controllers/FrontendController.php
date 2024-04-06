<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

    public function contactsubmit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            'number' => 'required'
        ]);

        Contacts::create([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return redirect('contact-us/#alert')->with('message','Thank You for Contacting Us');

    }

}
