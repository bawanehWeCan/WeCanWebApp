<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Requests\BrandRequest;

class BrandController extends Controller
{
    public function index()
    {
        $data = Brand::paginate(5);
        return view('dashboard.brands.index', compact('data'));
    }

    public function create()
    {
        $data = Brand::paginate(5);
        return view('dashboard.brands.add_brand', compact('data'));
    }

    public function store(BrandRequest $request)
    {


        $brand = new Brand();

        $brand->image = $request->pic;
        $brand->name = $request->name;
        $brand->link = $request->link;



        $brand->save();

        return redirect()->route('admin.brands')
            ->with('success', 'تم إضافة الماركة بنجاح');
    }

    public function destroy(Request $request)
    {
        Brand::find($request->id)->delete();
        return redirect()->route('admin.brands')->with('success', 'تم حذف الماركة بنجاح');
    }
}
