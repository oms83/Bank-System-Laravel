<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\Models\Country;


class UserController extends Controller
{
    //

    public function index(Request $request)
    {

        $countries = Country::get();
        $roles = Role::all()->pluck('name');
        $users = User::withTrashed()->orderBy('created_at', 'DESC')->paginate(20);
        //return $users[0]->getRoleNames();
        return view('pages.users', compact('users', 'countries', 'roles'));

    }

    public function store(Request $request)
    {

        if (Auth::user()?->can('add-user')) {


            DB::beginTransaction();

            try {

                //check if profile picture was selected and upload it for the user account

                $validator = Validator::make($request->all(), [
                    'email' => 'required|email|unique:users',
                    'alt_email' => 'nullable|unique:users',
                    'phone_number' => 'required|unique:users',
                ]);

                if ($validator->fails()) {
                    //Session::flash('error', $validator->messages()->first());
                    return redirect()->back()->withInput()->with('error', $validator->messages()->first());
                }


                $user = new User();
                $user->first_name = $request->first_name;
                $user->last_name = $request->last_name;
                $user->email = $request->email;
                $user->alt_email = $request->alt_email;
                $user->phone_number = $request->phone_number;
                $user->password = Hash::make($request->password);
                $user->country_id = $request->country_id;
                $user->description = $request->description;
                $user->address = $request->address;

                // Check if a profile image has been uploaded
                if ($request->has('picture')) {
                    // Get image file
                    $image = $request->file('picture');
                    // Make a image name based on user name and current timestamp
                    $name = Str::slug($request->input('name'), '_') . time();
                    // Define folder path
                    $folder = '/uploads/user/profile/';
                    // Make a file path where image will be stored [ folder path + file name + file extension]
                    $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
                    // Upload image
                    $this->uploadOne($image, $folder, 'public', $name);
                    // Set user profile image path in database to filePath
                    $user->picture = $filePath;
                }

                if (!empty($request->username)) {
                    $user->username = $request->username;
                } else {
                    $user->username = self::generateUsername($request->country_id);
                }

                $user->save();

                $user->assignRole($request->role);


                DB::commit();
                return back()->withInput()->with('success', 'User Account Disabling Successful');

            } catch (Exception $ex) {

                DB::rollback();
                return back()->withInput()->with('error', 'User Account Creation Failed. An Error Occurred Please Try Again Later');

            }

        } else {

            return back()->withInput()->with('error', 'User Account Creation Failed. UnAuthorized Action Failed');

        }


    }

    public function update(Request $request, int $id)
    {

        if (Auth::user()?->can('edit-user')) {


            DB::beginTransaction();

            try {

                //check if profile picture was selected and upload it for the user account

                $validator = Validator::make($request->all(), [
                    'email' => 'required|email|unique:users,email,' . $id,
                    'alt_email' => 'nullable|unique:users,alt_email,' . $id,
                    'phone_number' => 'required|unique:users,phone_number,' . $id,
                ]);

                if ($validator->fails()) {
                    //Session::flash('error', $validator->messages()->first());
                    return redirect()->back()->withInput()->with('error', $validator->messages()->first());
                }


                $user = User::findOrfail($id);
                $user->first_name = $request->first_name;
                $user->last_name = $request->last_name;
                $user->email = $request->email;
                $user->alt_email = $request->alt_email;
                $user->phone_number = $request->phone_number;
                $user->country_id = $request->country_id;
                $user->description = $request->description;
                $user->address = $request->address;

                $user->save();

                $user->syncRoles([$request->role]);


                DB::commit();
                return back()->withInput()->with('success', 'User Account Update Successful');

            } catch (Exception $ex) {

                DB::rollback();
                return back()->withInput()->with('error', 'User Account Update Failed. An Error Occurred Please Try Again Later');

            }

        } else {

            return back()->withInput()->with('error', 'User Account Update Failed. UnAuthorized Action Failed');

        }

    }

    public function destory(Request $request, int $id)
    {

        if (Auth::user()?->can('delete-user') && Auth::id() != $id) {

            $user = User::findOrfail($id);
            $user->delete();
            return back()->withInput()->with('success', 'User Account Disabling Successful');

        }

        if (Auth::id() == $id) {

            return back()->withInput()->with('error', 'User Account Disabling Failed. Current User Account Can\'t be deleted');

        }

        return back()->withInput()->with('error', 'User Account Disabling Failed. UnAuthorized Action Failed');

    }

    public function restore(Request $request, int $id)
    {

        if (Auth::user()?->can('restore-user') && Auth::id() != $id) {

            $user = User::withTrashed()->findOrfail($id);
            $user->restore();
            return back()->withInput()->with('success', 'User Account Restoration Successful');

        }

        if (Auth::id() == $id) {

            return back()->withInput()->with('error', 'User Account Restoration Failed. Current User Account Can\'t be restored');

        }

        return back()->withInput()->with('error', 'User Account Restoration Failed. UnAuthorized Action Failed');
        //return redirect()->route('cards')->with('error', 'Card Addition Failed. UnAuthorized Action Failed');

    }

    public function change_password(Request $request, int $id)
    {

        try {

            if (Auth::user()?->can('change-password')) {

                $user = User::withTrashed()->findOrfail($id);
                $user->password = Hash::make($request->password);
                $user->Save();
                return back()->withInput()->with('success', 'User Account Password Change Successful');

            }

            if (Auth::id() == $id) {

                return back()->withInput()->with('error', 'User Account Password Change Failed. Current User Account Can\'t be restored');

            }

        } catch (Exception $ex) {
            return back()->withInput()->with('error', 'User Account Password Change Failed. UnAuthorized Action Failed');
        }

    }

    final public function generateUsername(int $country_id): string
    {

        $country = Country::findOrfail($country_id);
        return $country->code . "" . date('myHis');

    }


}
