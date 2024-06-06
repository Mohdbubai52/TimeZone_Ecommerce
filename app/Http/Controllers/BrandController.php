<?php

namespace App\Http\Controllers;
use App\Models\BrandModel;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class BrandController extends Controller
{
    public function Index()
    {
        return view('Layout.Brands.index');
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
        $SaveData = new BrandModel;

        $SaveData->name = $request->name;
        $SaveData->seller = $request->seller;
        $SaveData->location = $request->location;
        $SaveData->origin = $request->origin;
        $SaveData->rating = $request->rating;
        $SaveData->save();

        return redirect('/AdminPannel/Brands');     
    }
}
