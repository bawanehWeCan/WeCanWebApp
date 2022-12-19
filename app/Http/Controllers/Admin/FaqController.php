<?php

namespace App\Http\Controllers\admin;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Requests\FaqRequest;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
    public function index()
    {
        $data = Faq::paginate(5);
        return view('dashboard.faqs.index',compact('data'));
    }

    public function create()
    {
        return view('dashboard.faqs.add_faq');
    }

    public function store(FaqRequest $request)
    {

        Faq::create($request->all());


        return redirect()->route('admin.faqs')
                        ->with('success','تم إضافة المساعدة بنجاح');
    }

    public function destroy(Request $request)
    {
        Faq::find($request->id)->delete();
        return redirect()->route('admin.faqs')->with('success','تم حذف المساعدة بنجاح');
    }
}
