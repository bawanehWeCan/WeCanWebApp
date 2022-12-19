<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Faq;
use App\Models\Project;
use App\Models\Service;
use App\Models\TeamMember;
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
        $services=Service::orderBy('id','desc')->get();
        $brands = Brand::all();
        $projects = Project::all();
        return view('welcome',compact('brands','services','projects'));
    }


    public function service( $slug )
    {
        $service = Service::where('slug', $slug )->first();

        // get previous user id
        $previous = Service::where('id', '<', $service->id)->max('id');

        // get next user id
        $next = Service::where('id', '>', $service->id)->min('id');


        return view('service', compact('service','previous','next'));
    }


    public function services()
    {
        $services = Service::all();
        return view('services',compact('services'));
    }

    public function about()
    {
        $brands = Brand::all();
        return view('about',compact('brands'));
    }

    public function help()
    {
        $faqs = Faq::orderBy('order','asc')->get();
        $first =  $faqs->min('order');
        return view('help',compact('faqs','first'));
    }


    public function contact()
    {
        return view('contact');
    }

    public function project( $slug ){

        $project = Project::with('images')->where('slug', $slug )->first();
        $more = $project->service->projects;
        return view('project', compact('project','more') );

    }

    public function members()
    {
        $members = TeamMember::orderBy('order','asc')->get();
        return view('members',compact('members'));

    }
}
