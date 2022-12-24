<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Sitting\SittingUpdateRequest;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $settings = Setting::Search($request->search)->first();
        return view('dashboard.settings.show',compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $settings  = Setting::first();

        return view('dashboard.settings.create',compact('settings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $setting = Setting::findOrFail($id);
        $settings  = Setting::first();

        return view('dashboard.settings.create',compact('setting','settings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(SittingUpdateRequest $request, Setting $setting)
    {
        $setting->update($request->validated());
        if ($request->hasFile('logo')) {
            if (file_exists(public_path() . '/storage/setting_logo' . '/' . $setting->logo)) {
                if (Storage::exists('public/setting_logo/' . $setting->logo)) {
                    Storage::delete('public/setting_logo/' . $setting->logo);
                }
            }
            $fileExt            = $request->logo->getClientOriginalExtension();
            $fileNameNew        = uniqid() . time() . '.' . $fileExt;
            $request->logo->storeAs('public/setting_logo/', $fileNameNew);
            $fileNew        = 'storage/setting_logo/' . $fileNameNew;
            $setting->logo = $fileNew;
            $setting->update();
        } else {
            $fileNew =   $setting->logo;
        }

        if ($request->hasFile('icon')) {
            if (file_exists(public_path() . '/storage/setting_icon' . '/' . $setting->icon)) {
                if (Storage::exists('public/setting_icon/' . $setting->icon)) {
                    Storage::delete('public/setting_icon/' . $setting->icon);
                }
            }
            $fileExt            = $request->icon->getClientOriginalExtension();
            $fileNameNew        = uniqid() . time() . '.' . $fileExt;
            $request->icon->storeAs('public/setting_icon/', $fileNameNew);
            $fileNew        = 'storage/setting_icon/' . $fileNameNew;
            $setting->icon = $fileNew;
            $setting->update();
        } else {
            $fileNew =   $setting->icon;
        }
        return redirect()->route('settings.index')->with('toast_success', __('Successfully.'));
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
