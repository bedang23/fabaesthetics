<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;
use App\Models\Service;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index() {

        $skinServices = $this->getServicesByCategory('skin-treatment');
        $cosmeticServices = $this->getServicesByCategory('cosmetic-treatment');
        $hairServices = $this->getServicesByCategory('hair-treatment');
        $laserServices = $this->getServicesByCategory('laser-treatment');
        $rejuvenationServices = $this->getServicesByCategory('skin-rejuvenation-treatment');
        $makeoverServices = $this->getServicesByCategory('make-over');


        return view('home-new', compact('skinServices', 'cosmeticServices', 'hairServices', 'laserServices', 'rejuvenationServices', 'makeoverServices'));
    }

    protected function getServicesByCategory($category)
    {
        return Service::where('category', $category)->get();
    }

    public function about() {

        $skinServices = $this->getServicesByCategory('skin-treatment');
        $cosmeticServices = $this->getServicesByCategory('cosmetic-treatment');
        $hairServices = $this->getServicesByCategory('hair-treatment');
        $laserServices = $this->getServicesByCategory('laser-treatment');
        $rejuvenationServices = $this->getServicesByCategory('skin-rejuvenation-treatment');
        $makeoverServices = $this->getServicesByCategory('make-over');

        return view('about', compact('skinServices', 'cosmeticServices', 'hairServices', 'laserServices', 'rejuvenationServices', 'makeoverServices'));
    }

    public function contact() {

        $skinServices = $this->getServicesByCategory('skin-treatment');
        $cosmeticServices = $this->getServicesByCategory('cosmetic-treatment');
        $hairServices = $this->getServicesByCategory('hair-treatment');
        $laserServices = $this->getServicesByCategory('laser-treatment');
        $rejuvenationServices = $this->getServicesByCategory('skin-rejuvenation-treatment');
        $makeoverServices = $this->getServicesByCategory('make-over');

        return view('contact', compact('skinServices', 'cosmeticServices', 'hairServices', 'laserServices', 'rejuvenationServices', 'makeoverServices'));
    }

    public function servicedetail() {

        $skinServices = $this->getServicesByCategory('skin-treatment');
        $cosmeticServices = $this->getServicesByCategory('cosmetic-treatment');
        $hairServices = $this->getServicesByCategory('hair-treatment');
        $laserServices = $this->getServicesByCategory('laser-treatment');
        $rejuvenationServices = $this->getServicesByCategory('skin-rejuvenation-treatment');
        $makeoverServices = $this->getServicesByCategory('make-over');

        return view('service', compact('skinServices', 'cosmeticServices', 'hairServices', 'laserServices', 'rejuvenationServices', 'makeoverServices'));
    }

    public function show($category, $slug)
    {

        $skinServices = $this->getServicesByCategory('skin-treatment');
        $cosmeticServices = $this->getServicesByCategory('cosmetic-treatment');
        $hairServices = $this->getServicesByCategory('hair-treatment');
        $laserServices = $this->getServicesByCategory('laser-treatment');
        $rejuvenationServices = $this->getServicesByCategory('skin-rejuvenation-treatment');
        $makeoverServices = $this->getServicesByCategory('make-over');

        // Retrieve service details based on category and service URL
        $service = Service::where('category', $category)->where('slug', $slug)->firstOrFail();

        // Pass the service details to the view
        return view('service-dynamic', compact('service','skinServices', 'cosmeticServices', 'hairServices', 'laserServices', 'rejuvenationServices', 'makeoverServices'));
    }

    public function contactsubmit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        Contacts::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        return redirect('contact-us/#alert')->with('message','Thank You for Contacting Us, we will get back to you soon.');

    }


}
