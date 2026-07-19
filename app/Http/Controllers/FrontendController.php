<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contacts;
use App\Models\Forms;
use App\Models\Service;
use App\Models\Blog;
use App\Mail\LandingPageEnquiry;
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

        $blogs = Blog::latest()->take(3)->get();

        return view('home-new', compact('blogs', 'skinServices', 'cosmeticServices', 'hairServices', 'laserServices', 'rejuvenationServices', 'makeoverServices'));
    }


     public function newhome() {

        $skinServices = $this->getServicesByCategory('skin-treatment');
        $cosmeticServices = $this->getServicesByCategory('cosmetic-treatment');
        $hairServices = $this->getServicesByCategory('hair-treatment');
        $laserServices = $this->getServicesByCategory('laser-treatment');
        $rejuvenationServices = $this->getServicesByCategory('skin-rejuvenation-treatment');
        $makeoverServices = $this->getServicesByCategory('make-over');

        $blogs = Blog::latest()->paginate(10);


        return view('home', compact('blogs', 'skinServices', 'cosmeticServices', 'hairServices', 'laserServices', 'rejuvenationServices', 'makeoverServices'));

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


    public function landingpage(){
        return view('landing-page');
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
        return view('service-dynamic-new', compact('service','skinServices', 'cosmeticServices', 'hairServices', 'laserServices', 'rejuvenationServices', 'makeoverServices'));
    }


    public function blogList()
    {
        $skinServices = $this->getServicesByCategory('skin-treatment');
        $cosmeticServices = $this->getServicesByCategory('cosmetic-treatment');
        $hairServices = $this->getServicesByCategory('hair-treatment');
        $laserServices = $this->getServicesByCategory('laser-treatment');
        $rejuvenationServices = $this->getServicesByCategory('skin-rejuvenation-treatment');
        $makeoverServices = $this->getServicesByCategory('make-over');

        $blogs = Blog::latest()->paginate(10); // Fetch latest blogs with pagination

        return view('blog-list', compact(
            'blogs', 'skinServices', 'cosmeticServices', 'hairServices', 'laserServices', 'rejuvenationServices', 'makeoverServices'
        ));
    }



    public function showblog($category, $slug)
    {

        $skinServices = $this->getServicesByCategory('skin-treatment');
        $cosmeticServices = $this->getServicesByCategory('cosmetic-treatment');
        $hairServices = $this->getServicesByCategory('hair-treatment');
        $laserServices = $this->getServicesByCategory('laser-treatment');
        $rejuvenationServices = $this->getServicesByCategory('skin-rejuvenation-treatment');
        $makeoverServices = $this->getServicesByCategory('make-over');

        // Retrieve service details based on category and service URL
        $blog = Blog::where('category', $category)->where('slug', $slug)->firstOrFail();

        // Pass the service details to the view
        return view('blog-detail', compact('blog','skinServices', 'cosmeticServices', 'hairServices', 'laserServices', 'rejuvenationServices', 'makeoverServices'));
    }

    /**
     * Lightweight bot/spam detection: honeypot, submit-timing and link flooding.
     * Returns true when the submission looks automated.
     */
    private function isSpam(Request $request): bool
    {
        // 1) Honeypot field must remain empty for real users
        if (filled($request->input('hp_field'))) {
            return true;
        }

        // 2) Timing trap: forms filled in under 3 seconds are almost always bots
        try {
            $rendered = (int) decrypt($request->input('_ft'));
            if ($rendered > 0 && (time() - $rendered) < 3) {
                return true;
            }
        } catch (\Throwable $e) {
            // Missing/forged token — don't punish legitimate users, just skip this check
        }

        // 3) Link flooding in the message
        if (substr_count(strtolower((string) $request->input('message')), 'http') >= 4) {
            return true;
        }

        return false;
    }

    public function contactsubmit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:120',
            'email' => 'required|email|max:150',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|max:3000',
        ]);

        // Silently drop bot submissions (respond as success so bots get no signal)
        if ($this->isSpam($request)) {
            return redirect()->back()->with('message', 'Thank You for Contacting Us, we will get back to you soon.')->withFragment('contactForm');
        }

        Contacts::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('message', 'Thank You for Contacting Us, we will get back to you soon.')->withFragment('contactForm');

    }



    public function landingpageformsubmit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:120',
            'email' => 'required|email|max:150',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|max:3000',
        ]);

        // Silently drop bot submissions
        if ($this->isSpam($request)) {
            return redirect()->route('form.success');
        }

        $formData = $request->only(['name', 'email', 'phone', 'message']);

        // Save to database
        // Forms::create($formData);
        DB::table('forms')->insert($formData);



        Mail::to('drsamreen8@gmail.com')
        ->bcc(['bedangbanerjee@gmail.com','tejalloke17@gmail.com'])
        ->send(new LandingPageEnquiry($formData));
        
        
         DB::disconnect();

        return redirect()->route('form.success');

    }


}
