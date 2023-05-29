<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
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
        return view('pages.users', compact('users', 'countries', 'roles'));

    }
    public function store(Request $request)
    {

            try {

                //check if profile picture was selected and upload it for the user account

                $validator = Validator::make($request->all(), [
                    'email' => 'required|email|unique:users',
                    'alt_email' => 'nullable|unique:users',
                    'phone_number' => 'required|unique:users',
                ]);

                if ($validator->fails()) {
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
                    $image = $request->file('picture');
                    $name = Str::slug($request->input('name'), '_') . time();
                    $folder = '/uploads/user/profile/';
                    $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
                    $this->uploadOne($image, $folder, 'public', $name);
                    $user->picture = $filePath;
                }

                if (!empty($request->username)) {
                    $user->username = $request->username;
                } else {
                    $user->username = self::generateUsername($request->country_id);
                }

                $user->save();
                @dd();
                $user->assignRole($request->role);


                return back()->withInput()->with('success', 'User Account Disabling Successful');

            } catch (Exception $ex) {

                return back()->withInput()->with('error', 'User Account Creation Failed. An Error Occurred Please Try Again Later');

            }

       

    }

    public function update(Request $request, int $id)
    {
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

        
        }


}
