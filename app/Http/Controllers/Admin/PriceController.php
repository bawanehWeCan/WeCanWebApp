<?php

namespace App\Http\Controllers\admin;

use App\Models\Price;
use Illuminate\Http\Request;
use App\Http\Requests\PriceRequest;
use App\Http\Controllers\Controller;
use App\Models\Service;

class PriceController extends Controller
{
    public function index()
    {
        $data = Price::with('service')->paginate(5);
        return view('dashboard.prices.index',compact('data'));
    }

    public function create()
    {
        $services = Service::select('id','name')->get();
        return view('dashboard.prices.add-price',compact('services'));
    }

    public function store(PriceRequest $request)
    {

        Price::create($request->all());


        return redirect()->route('admin.prices')
                        ->with('success','تم إضافة السعر بنجاح');
    }

    public function destroy(Request $request)
    {
        $price = Price::find($request->id);
        if ($price) {
            unlink($price->image);
        }
        $price->delete();
        return redirect()->route('admin.prices')->with('success','تم حذف السعر بنجاح');
    }
}
