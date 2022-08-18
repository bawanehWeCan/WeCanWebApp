<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function service( $id )
    {
        $service = Service::find( $id );
        
        return view('service', compact('service'));
    }


    public function services()
    {
        return view('services');
    }

    public function about()
    {
        return view('about');
    }

    public function help()
    {
        return view('help');
    }


    public function contact()
    {
        return view('contact');
    }
}
