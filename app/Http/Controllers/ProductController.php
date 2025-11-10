<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
  public function store(Request $request)
{
    $filename = null;
    $brochure = null;
    $path = null;

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . rand(0, 9999) . '.' . $extension;
        $path = $file->storeAs('product', $filename, 'public');
    }

    if ($request->hasFile('brochure')) {
        $file = $request->file('brochure');
        $extension = $file->getClientOriginalExtension();
        $brochure = time() . rand(0, 9999) . '.' . $extension;
        $path = $file->storeAs('product', $brochure, 'public');
    }

    $request->validate([
        'category' => 'required|string',
        'model' => 'nullable|string',
        'battery_type' => 'nullable|string',
        'capacity_range' => 'nullable|string',
        'cycle_life' => 'nullable|string',
        'float_life' => 'nullable|string',
        'self_discharge' => 'nullable|string',
        'operational_temperature' => 'nullable|string',
        'efficency' => 'nullable|string',
        'construction' => 'nullable|string',
        'quality_control' => 'nullable|string',
        'certification' => 'nullable|string',
        'life_expectancy' => 'nullable|string',
        'eco_initiative' => 'nullable|string',
        'image' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        'key_feature' => 'nullable|string',
        'application' => 'nullable|string',
        'brochure' => 'nullable|mimes:pdf|max:2048',
    ]);

 $products = Product::create([
    'category' => $request->category,
    'model' => $request->model,
    'battery_type' => $request->battery_type ?? '',
    'capacity_range' => $request->capacity_range ?? '',
    'cycle_life' => $request->cycle_life ?? '',
    'float_life' => $request->float_life ?? '',
    'self_discharge' => $request->self_discharge ?? '',
    'operational_temperature' => $request->operational_temperature ?? '',
    'efficency' => $request->efficency ?? '',
    'construction' => $request->construction ?? '',
    'quality_control' => $request->quality_control ?? '',
    'certification' => $request->certification ?? '',
    'life_expectancy' => $request->life_expectancy ?? '',
    'eco_initiative' => $request->eco_initiative ?? '',
    'image' => $filename,
    'key_feature' => $request->key_feature ?? '',
    'application' => $request->application ?? '',
    'brochure' => $brochure ?? '',
]);


    return redirect('/admin/product/')->with('message', 'Product added successfully');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('/admin/product/');
    }
}
