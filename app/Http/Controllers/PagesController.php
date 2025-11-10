<?php

namespace App\Http\Controllers;

use App\Models\Product;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function company()
    {
        return view('pages.company-profile');
    }

    public function contact()
    {
        return view('pages.contact-us');
    }

    public function certification()
    {
        return view('pages.certificates');
    }

    public function events()
    {
        return view('pages.events');
    }

    public function journey()
    {
        return view('pages.our-journey');
    }

    // Pages

    public function inverter()
    {
        $product = Product::where('category', '=', 'inverter')->get();
        return view('pages.inverter-batteries', compact('product'));
    }

    public function inverterbat($id)
    {
        $product = Product::find($id);
        return view('pages.inverter-battery', compact('product'));
    }

    public function automotive()
    {
        $product = Product::where('category', '=', 'automotive')->get();
        return view('pages.automotive-batteries', compact('product'));
    }

    public function autobat($id)
    {
        $product = Product::find($id);
        return view('pages.automotive-battery', compact('product'));
    }

    public function solar()
    {
        $product = Product::where('category', '=', 'solar')->get();
        return view('pages.solar-batteries', compact('product'));
    }

    public function solarbat($id)
    {
        $product = Product::find($id);
        return view('pages.solar-battery', compact('product'));
    }

    public function erickshaw()
    {
        $product = Product::Where('category', '=', 'e-rckshaw')->get();
        return view('pages.e-rickshaw-batteries', compact('product'));
    }

    public function erickbatt($id)
    {
        $product = Product::find($id);
        return view('pages.e-rickshaw-battery', compact('product'));
    }

    public function lithium()
    {
        $product = Product::Where('category', '=', 'lithium')->get();
        return view('pages.lithium-batteries', compact('product'));
    }

    public function lithiumbatt($id)
    {
        $product = Product::find($id);
        return view('pages.lithium-battery', compact('product'));
    }

    public function loardcalc() {
      return view('pages.loadcalculator.index');
    }

    public function afghanistan() {
        return view('pages.country.afghanistan');
    }

    public function dubai() {
        return view('pages.country.dubai');
    }

    public function nigeria() {
        return view('pages.country.nigeria');
    }

    public function lebanon() {
        return view('pages.country.lebanon');
    }

    public function nepal() {
        return view('pages.country.nepal');
    }

    public function yemen() {
        return view('pages.country.yemen');
    }

     public function willard() {
      return view('pages.willard.index');
    }

    public function hawker() {
        return view('pages.hawker.index');
    }

    public function pacesetter() {
        return view('pages.pace-setter.index');
    }

    public function powerxl() {
        return view('pages.power-xl.index');
    }

    public function roadmaster() {
        return view('pages.road-master.index');
    }

}
