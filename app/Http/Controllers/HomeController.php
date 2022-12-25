<?php

namespace App\Http\Controllers;

use App\Models\Touch;

use App\Models\Setting;
use App\Models\Producer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Clientinformation\TouchStoreRequest;

class HomeController extends Controller
{
    /**---+++
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $settings = Setting::first();
        $products = Producer::whereNotNull('id')->where('public_unpublic','public')->get()->shuffle();
        return view('website.home',compact( 'settings','products'));
    }
    // home page
    public function home()
    {
        $settings = Setting::first();
        $products = Producer::whereNotNull('id')->where('public_unpublic','public')->get()->shuffle();
        return view('website.home',compact( 'settings', 'products'));
    }

    // products page

    public function products()
    {
        $settings = Setting::first();
        $products = Producer::whereNotNull('id')->where('public_unpublic','public')->Paginate(8)->withQueryString()->fragment('products');
        return view('website.products.products',compact( 'settings', 'products'));
    }


    public function product($id)
    {
        $settings = Setting::first();
        $product = Producer::findOrFail($id);
        $products = Producer::whereNotNull('id')->where('public_unpublic','public')->limit(4)->get()->shuffle();
        return view('website.products.product',compact( 'products','settings', 'product'));
    }



    public function store(TouchStoreRequest $request)
    {
        // dd($request->all());
        $touchs = Touch::create($request->validated());
        return response()->json(['success' => 'Thank you, the order has been sent.']);
    }

}
