<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Traits\UploadTrait;
use App\Models\Bank;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class BankController extends Controller
{

    use UploadTrait;

    public function index(Request $request){
        $banks = Bank::withTrashed()->paginate(20);
        return view('pages.banks', compact('banks'));
    }


    public function store(Request $request){

        try{

            if( Auth::user()?->can('add-bank') ){

                $bank = new Bank();
                $bank->name = $request->name;

                // Check if a profile image has been uploaded
                if ($request->has('picture')) {
                    // Get image file
                    $image = $request->file('picture');
                    // Make a image name based on user name and current timestamp
                    $name = Str::slug($request->input('name'), '_') . time();
                    // Define folder path
                    $folder = '/uploads/card_types/images/';
                    // Make a file path where image will be stored [ folder path + file name + file extension]
                    $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
                    // Upload image
                    $this->uploadOne($image, $folder, 'public', $name);
                    // Set user profile image path in database to filePath
                    $bank->picture = $filePath;
                }

                $bank->code = $request->code;
                $bank->save();
                return back()->withInput()->with('success', 'Bank Addition Successful');
            }else{
                return back()->withInput()->with('error', 'Bank Addition Failed. UnAuthorized Action Failed');
            }

        }catch(Exception $ex){
            return back()->withInput()->with('error', 'Bank Addition Failed. An Error Occurred Please Try Again Later');
        }

    }


    public function update(Request $request,int $id){

        try{

            if( Auth::user()?->can('edit-bank') ){

                $bank = Bank::findOrfail($id);
                $bank->name = $request->name;

                // Check if a profile image has been uploaded
                if ($request->has('picture')) {
                    // Get image file
                    $image = $request->file('picture');
                    // Make a image name based on user name and current timestamp
                    $name = Str::slug($request->input('name'), '_') . time();
                    // Define folder path
                    $folder = '/uploads/card_types/images/';
                    // Make a file path where image will be stored [ folder path + file name + file extension]
                    $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
                    // Upload image
                    $this->uploadOne($image, $folder, 'public', $name);
                    // Set user profile image path in database to filePath
                    $bank->picture = $filePath;
                }

                $bank->code = $request->code;
                $bank->save();
                return back()->withInput()->with('success', 'Bank Update Successful');
            }

            return back()->withInput()->with('error', 'Bank Update Failed. UnAuthorized Action Failed');

        }catch(Exception $ex){
            return back()->withInput()->with('error', 'Bank Update Failed. An Error Occurred Please Try Again Later');
        }

    }


    public function destory(Request $request,int $id){

        if( Auth::user()?->can('delete-bank') ){

            try{
                $bank = Bank::findOrfail($id);
                $bank->delete();
                return back()->withInput()->with('success', 'Bank Disabling Successful');
            }catch(Exception $ex){
                return back()->withInput()->with('error', 'Bank Disabling Failed. Bank Is Currently In Use in Other Bank Accounts');
            }

        }else{

            return back()->withInput()->with('error', 'Bank Disabling Failed. UnAuthorized Action Failed');

        }

    }

    public function restore(Request $request,int $id){

        if( Auth::user()?->can('restore-bank') ){

            $bank = Bank::withTrashed()->findOrfail($id);
            $bank->restore();
            return back()->withInput()->with('success', 'Bank Restoration Successful');

        }

        return back()->withInput()->with('error', 'Bank Restoration Failed. UnAuthorized Action Failed');

    }


}
