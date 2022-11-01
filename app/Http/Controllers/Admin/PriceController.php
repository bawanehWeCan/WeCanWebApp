<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PriceRequest;
use App\Models\Price;


class PriceController extends Controller
{

    public function index()
    {
        $data = Price::paginate(5);
        return view('dashboard.prices.index', compact('data'));
    }

    public function create()
    {
        $data = Price::paginate(5);
        return view('dashboard.prices.add_price', compact('data'));
    }

    public function store(PriceRequest $request)
    {


        $price = new Price();

        $price->image = $request->pic;
        $price->name = $request->name;

        $price->feature1 = $request->feature1;
        $price->feature2 = $request->feature2;
        $price->price = $request->price;


        $price->save();

        return redirect()->route('admin.prices')
            ->with('success', 'تم إضافةالسعر  بنجاح');
    }

    public function destroy(Request $request)
    {
        Price::find($request->id)->delete();
        return redirect()->route('admin.prices')->with('success', 'تم حذف السعر بنجاح');
    }

}
