<?php

namespace App\Http\Controllers;
use App\Models\BrandModel;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class BrandController extends Controller
{
    public function Index()
    {
        $brands = BrandModel::all();
        return view('Layout.Brands.index',compact('brands'));
    }
    public function Create()
    {
        return view('Layout.Brands.create');
    }



    // Save the Brands on Database Table brand_models

    public function SaveInfo(Request $request)
    {
        // dd($request);
        // $Data = $request->only('name','seller','origin','location','rating');
        // dd($Data);
      
        BrandModel::create([
        'name' => $request->name,
        'seller' => $request->seller,
        'location' => $request->location,
        'origin' => $request->origin,
        'rating' => $request->rating,
        ]);

        return redirect('/AdminPannel/Brands');     
    }
}
