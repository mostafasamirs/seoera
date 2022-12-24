<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Touch;
use App\Models\Setting;
use App\Exports\TouchExport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class TouchController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     // $this->middleware('isadmin');
    //     $this->middleware('permission:show-touch', ['only' => ['index', 'show']]);
    //     $this->middleware('permission:add-touch', ['only' => ['create', 'store']]);
    //     $this->middleware('permission:edit-touch', ['only' => ['edit', 'update']]);
    //     $this->middleware('permission:delete-touch', ['only' => ['destroy']]);
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $touchs = Touch::Search($request->search)->whereNotNull('id')->latest()->Paginate(15)->withQueryString()->fragment('orders');
        $settings = Setting::first();

        return view('dashboard.touchs.index',compact('touchs','settings'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Touch  $touch
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $settings = Setting::first();

        $touch = Touch::findOrFail($id);
        return view('dashboard.touchs.show', compact('touch','settings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Touch  $touch
     * @return \Illuminate\Http\Response
     */
    public function edit(Touch $touch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Touch  $touch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Touch $touch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Touch  $touch
     * @return \Illuminate\Http\Response
     */

    public function destroy(Touch $touch)
    {
        $touch->delete();
        // $touch->subjects()->delete();
        return redirect()->route('touchs.index')->with('toast_success', __('Deleted Successfully.'));

    }

    public function export(Touch $touch)
    {
        return Excel::download(new TouchExport($touch), 'Orders.xlsx');
    }

}
