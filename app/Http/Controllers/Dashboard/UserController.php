<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\Setting;
use App\Models\Language;
use App\traits\imageUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Users\UserStoreRequest;
use App\Http\Requests\Users\UserUpdateRequest;
use App\Http\Requests\Users\UserProfileRequest;

class UserController extends Controller
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
        $users = User::Search($request->search)->with('languages')->whereNotNull('id')->whereNotIn('id', [1,2])->Paginate(15)->withQueryString()->fragment('users');
        $settings = Setting::first();
        return view('dashboard.users.index', compact('users', 'settings'));
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

        return view('dashboard.users.create', compact('settings','languages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {

        if ($request->password) {
            $password  = Hash::make($request->password);
        }
        $users = User::create(array_merge($request->validated(), ['password' => $password]));
        //upload hasFile image
        if ($request->hasFile('image')) {
            $fileExt            = $request->image->getClientOriginalExtension();
            $fileNameNew        = uniqid() . time() . '.' . $fileExt;
            $request->image->storeAs('public/users_image/', $fileNameNew);
            $fileNew        = 'storage/users_image/' . $fileNameNew;
            $users->image = $fileNew;
            $users->save();
        }
        //upload hasFile image


        return redirect()->route('users.index')->with('toast_success', __('Created Successfully.'));
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
        $user = User::whereNotIn('id', [1, 2])->findOrFail($id);
        return view('dashboard.users.show', compact('user', 'settings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::whereNotIn('id', [1, 2])->findOrFail($id);
        $settings = Setting::first();
        $languages = Language::whereNotNull('id')->get();

        return view('dashboard.users.edit', compact('user', 'settings','languages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, User $user)
    {

        if ($request->password) {
            $password  = Hash::make($request->password);
        } else {
            $password  =  $user->password;
        }

        $user->update(array_merge($request->safe()->except(['image']), ['password' => $password]));


          //update hasFile image
          if ($request->hasFile('image')) {
            if (Storage::disk('public')->exists('users_image' . '/' . $user->image)) {
                Storage::disk('public')->delete('users_image' . '/' . $user->image); //public_image the path disks file system
            } else {
                Storage::delete('users_image' . $user->image);
            }
            $fileExt            = $request->image->getClientOriginalExtension();
            $fileNameNew        = uniqid() . time() . '.' . $fileExt;
            $request->image->storeAs('public/users_image/', $fileNameNew);
            $fileNew        = 'storage/users_image/' . $fileNameNew;
            $user->image = $fileNew;
            $user->update();
        } else {
            $fileNew =   $user->image;
        }
        //update hasFile image



        return redirect()->route('users.index')->with('toast_success', __('Updated Successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('users.index')->with('toast_success', __('Deleted Successfully.'));
    }

    // profileuser

    public function profileuser($id)
    {
        $settings = Setting::first();
        $languages = Language::whereNotNull('id')->get();
        $user = User::where('id', auth()->user()->id)->findOrFail($id);
        return view('dashboard.users.profile', compact('languages','user', 'settings'));
    }

    // updateuser
    public function updateuser(UserProfileRequest $request, $id)
    {

        $user = User::findOrFail($id);
        if ($request->password) {
            $password  = Hash::make($request->password);
        } else {
            $password  =  $user->password;
        }

        $user->update(array_merge($request->safe()->except(['image']), ['password' => $password]));

        //update hasFile image
        if ($request->hasFile('image')) {
            if (Storage::disk('public')->exists('users_image' . '/' . $user->image)) {
                Storage::disk('public')->delete('users_image' . '/' . $user->image); //public_image the path disks file system
            } else {
                Storage::delete('users_image' . $user->image);
            }
            $fileExt            = $request->image->getClientOriginalExtension();
            $fileNameNew        = uniqid() . time() . '.' . $fileExt;
            $request->image->storeAs('public/users_image/', $fileNameNew);
            $fileNew        = 'storage/users_image/' . $fileNameNew;
            $user->image = $fileNew;
            $user->update();
        } else {
            $fileNew =   $user->image;
        }
        //update hasFile image


        return redirect()->route('profileuser', $user->id)->with('toast_success', __('Update Successfully.'));
    }
}
