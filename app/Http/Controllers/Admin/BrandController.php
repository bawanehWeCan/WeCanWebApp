<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;

class BrandController extends Controller
{
    public function index()
    {
        $data = Brand::paginate(5);
        return view('dashboard.brands.index',compact('data'));
    }

    public function create()
    {
        return view('dashboard.brands.add-brand');
    }

    public function store(BrandRequest $request)
    {

        Brand::create($request->all());


        return redirect()->route('admin.brands')
                        ->with('success','تم إضافة العلامة التجارية بنجاح');
    }

    public function destroy(Request $request)
    {
        $brand = Brand::find($request->id);
        $brand->delete();
        if ($brand) {
            unlink($brand->image);
        }
        return redirect()->route('admin.brands')->with('success','تم حذف العلامة التجارية بنجاح');
    }
}
