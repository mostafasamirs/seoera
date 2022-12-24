<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Setting;
use App\Models\Category;
use App\Models\Language;
use App\Models\Producer;
use App\traits\imageUpload;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Producer\ProducersRequest;

class ProducerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Producer::Search($request->search)->with('languages')->whereNotNull('id')->Paginate(15)->withQueryString()->fragment('products');
        $settings = Setting::first();
        // dd($products);
        return view('dashboard.products.index', compact('products', 'settings'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $settings = Setting::first();
        $languages = Language::whereNotNull('id')->get();
        return view('dashboard.products.create', compact('settings', 'languages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProducersRequest $request)
    {
        // dd($request);
        $products = Producer::create($request->validated());
        //upload hasFile image
        if ($request->hasFile('image')) {
            $fileExt            = $request->image->getClientOriginalExtension();
            $fileNameNew        = uniqid() . time() . '.' . $fileExt;
            $request->image->storeAs('public/products_image/', $fileNameNew);
            $fileNew        = 'storage/products_image/' . $fileNameNew;
            $products->image = $fileNew;
            $products->save();
        }
        //upload hasFile image
        return redirect()->route('products.index')->with('toast_success', __('Created Successfully.'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producer  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $settings = Setting::first();
        $product = Producer::findOrFail($id);
        return view('dashboard.products.show', compact('settings', 'product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $Producer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $settings = Setting::first();
        $product = Producer::findOrFail($id);
        $languages = Language::whereNotNull('id')->get();

        return view('dashboard.products.edit', compact('settings', 'product', 'languages'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producer  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProducersRequest $request, Producer $product)
    {
        $product->update(array_merge($request->safe()->except(['image'])));

        //update hasFile image
        if ($request->hasFile('image')) {
            if (Storage::disk('public')->exists('products_image' . '/' . $product->image)) {
                Storage::disk('public')->delete('products_image' . '/' . $product->image); //public_image the path disks file system
            } else {
                Storage::delete('products_image' . $product->image);
            }
            $fileExt            = $request->image->getClientOriginalExtension();
            $fileNameNew        = uniqid() . time() . '.' . $fileExt;
            $request->image->storeAs('public/products_image/', $fileNameNew);
            $fileNew        = 'storage/products_image/' . $fileNameNew;
            $product->image = $fileNew;
            $product->update();
        } else {
            $fileNew =   $product->image;
        }
        //update hasFile image

        return redirect()->route('products.index')->with('toast_success', __('Created Successfully.'));
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producer  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Producer::findOrFail($id)->delete();
        return redirect()->route('products.index')->with('toast_success', __('Deleted Successfully.'));
    }
    public function changpublic_unpublic($id)
    {
        $product = Producer::findOrFail($id);
        $chnage = $product->public_unpublic == 'public' ? 'unpublic' : 'public';
        $product->update(['public_unpublic' => $chnage]);
        return redirect()->back()->with('toast_success', __('Change Successfully.'));
    }
}
