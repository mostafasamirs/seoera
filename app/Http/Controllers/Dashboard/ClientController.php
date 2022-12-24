<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Client;
use App\Models\Setting;
use App\Models\Language;
use App\traits\imageUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Client\ClientStoreRequest;
use App\Http\Requests\Client\ClientUpdateRequest;
use App\Http\Requests\Client\ClientProfileRequest;

class ClientController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $clients = Client::Search($request->search)->with('languages')->whereNotNull('id')->Paginate(15)->withQueryString()->fragment('clients');
        $settings = Setting::first();
        return view('dashboard.clients.index', compact('clients', 'settings'));
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

        return view('dashboard.clients.create', compact('settings','languages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientStoreRequest $request)
    {

        if ($request->password) {
            $password  = Hash::make($request->password);
        }
        $clients = Client::create(array_merge($request->validated(), ['password' => $password]));
        //upload hasFile image
        if ($request->hasFile('image')) {
            $fileExt            = $request->image->getClientOriginalExtension();
            $fileNameNew        = uniqid() . time() . '.' . $fileExt;
            $request->image->storeAs('public/clients_image/', $fileNameNew);
            $fileNew        = 'storage/clients_image/' . $fileNameNew;
            $clients->image = $fileNew;
            $clients->save();
        }
        //upload hasFile image


        return redirect()->route('clients.index')->with('toast_success', __('Created Successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $settings = Setting::first();
        $client = Client::findOrFail($id);
        return view('dashboard.clients.show', compact('client', 'settings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::findOrFail($id);
        $settings = Setting::first();
        $languages = Language::whereNotNull('id')->get();

        return view('dashboard.clients.edit', compact('client', 'settings','languages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClientUpdateRequest $request, Client $client)
    {

        if ($request->password) {
            $password  = Hash::make($request->password);
        } else {
            $password  =  $client->password;
        }

        $client->update(array_merge($request->safe()->except(['image']), ['password' => $password]));


          //update hasFile image
          if ($request->hasFile('image')) {
            if (Storage::disk('public')->exists('clients_image' . '/' . $client->image)) {
                Storage::disk('public')->delete('clients_image' . '/' . $client->image); //public_image the path disks file system
            } else {
                Storage::delete('clients_image' . $client->image);
            }
            $fileExt            = $request->image->getClientOriginalExtension();
            $fileNameNew        = uniqid() . time() . '.' . $fileExt;
            $request->image->storeAs('public/clients_image/', $fileNameNew);
            $fileNew        = 'storage/clients_image/' . $fileNameNew;
            $client->image = $fileNew;
            $client->update();
        } else {
            $fileNew =   $client->image;
        }
        //update hasFile image



        return redirect()->route('clients.index')->with('toast_success', __('Updated Successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Client::findOrFail($id)->delete();
        return redirect()->route('clients.index')->with('toast_success', __('Deleted Successfully.'));
    }

    // profileuser

    public function profileuser($id)
    {
        $settings = Setting::first();
        $languages = Language::whereNotNull('id')->get();
        $user = Client::where('id', auth()->user()->id)->findOrFail($id);
        return view('dashboard.clients.profile', compact('languages','user', 'settings'));
    }

    // updateuser
    public function updateuser(ClientProfileRequest $request, $id)
    {

        $client = Client::findOrFail($id);
        if ($request->password) {
            $password  = Hash::make($request->password);
        } else {
            $password  =  $client->password;
        }

        $client->update(array_merge($request->safe()->except(['image']), ['password' => $password]));

        //update hasFile image
        if ($request->hasFile('image')) {
            if (Storage::disk('public')->exists('clients_image' . '/' . $client->image)) {
                Storage::disk('public')->delete('clients_image' . '/' . $client->image); //public_image the path disks file system
            } else {
                Storage::delete('clients_image' . $client->image);
            }
            $fileExt            = $request->image->getClientOriginalExtension();
            $fileNameNew        = uniqid() . time() . '.' . $fileExt;
            $request->image->storeAs('public/clients_image/', $fileNameNew);
            $fileNew        = 'storage/clients_image/' . $fileNameNew;
            $client->image = $fileNew;
            $client->update();
        } else {
            $fileNew =   $client->image;
        }
        //update hasFile image


        return redirect()->route('profileuser', $client->id)->with('toast_success', __('Update Successfully.'));
    }
}
