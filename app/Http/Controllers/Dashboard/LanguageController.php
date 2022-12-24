<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Setting;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Languages\LanguagesRequest;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $languages = Language::Search($request->search)->whereNotNull('id')->Paginate(15)->withQueryString()->fragment('languages');
        $settings = Setting::first();
        return view('dashboard.languages.index', compact('languages', 'settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $settings = Setting::first();
        return view('dashboard.languages.create', compact('settings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LanguagesRequest $request)
    {
        $languages = Language::create($request->validated());
        //upload hasFile image
        if ($request->hasFile('image')) {
            $fileExt            = $request->image->getClientOriginalExtension();
            $fileNameNew        = uniqid() . time() . '.' . $fileExt;
            $request->image->storeAs('public/languages_image/', $fileNameNew);
            $fileNew        = 'storage/languages_image/' . $fileNameNew;
            $languages->image = $fileNew;
            $languages->save();
        }
        //upload hasFile image
        return redirect()->route('languages.index')->with('toast_success', __('Created Successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $settings = Setting::first();
        $language = Language::findOrFail($id);
        return view('dashboard.languages.show', compact('settings', 'language'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $settings = Setting::first();
        $language = Language::findOrFail($id);

        return view('dashboard.languages.edit', compact('settings', 'language'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function update(LanguagesRequest $request, Language $language)
    {
        $language->update(array_merge($request->safe()->except(['image'])));

        //update hasFile image
        if ($request->hasFile('image')) {
            if (Storage::disk('public')->exists('languages_image' . '/' . $language->image)) {
                Storage::disk('public')->delete('languages_image' . '/' . $language->image); //public_image the path disks file system
            } else {
                Storage::delete('languages_image' . $language->image);
            }
            $fileExt            = $request->image->getClientOriginalExtension();
            $fileNameNew        = uniqid() . time() . '.' . $fileExt;
            $request->image->storeAs('public/languages_image/', $fileNameNew);
            $fileNew        = 'storage/languages_image/' . $fileNameNew;
            $language->image = $fileNew;
            $language->update();
        } else {
            $fileNew =   $language->image;
        }
        //update hasFile image
        return redirect()->route('languages.index')->with('toast_success', __('Created Successfully.'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $language = Language::findOrFail($id)->delete();
        return redirect()->route('languages.index')->with('toast_success', __('Deleted Successfully.'));
    }
}
