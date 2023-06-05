<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Traits\UploadTrait;
use App\Models\CardType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CardTypeController extends Controller
{
    //
    use UploadTrait;

    public function index(Request $request){

        $cardTypes = CardType::paginate(20);
        return view('pages.card_types', compact('cardTypes'));
    }

    public function store(Request $request){

        try{

            if( Auth::user()?->can('add-card-type') ){
                $cardType = new CardType();
                $cardType->name = $request->name;

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
                    $cardType->picture = $filePath;
                }

                $cardType->style = $request->style;
                $cardType->save();
                return back()->withInput()->with('success', 'Card Type Addition Successful');
            }

            return back()->withInput()->with('error', 'Card Type Addition Failed. UnAuthorized Action Failed');

        }catch(Exception $ex){
            return back()->withInput()->with('error', 'Card Type Addition Failed. An Error Occurred Please Try Again Later');
        }

    }


    public function update(Request $request,int $id){

        try{

            if( Auth::user()?->can('edit-card-type') ){

                $cardType = CardType::findOrfail($id);
                $cardType->name = $request->name;

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
                    $cardType->picture = $filePath;
                }

                $cardType->style = $request->style;
                $cardType->save();
                return back()->withInput()->with('success', 'Card Type Update Successful');
            }

            return back()->withInput()->with('error', 'Card Type Update Failed. UnAuthorized Action Failed');

        }catch(Exception $ex){
            return back()->withInput()->with('error', 'Card Type Update Failed. An Error Occurred Please Try Again Later');
        }

    }



}

