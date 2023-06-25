<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;

class SettingsController extends Controller
{
    //

    function index(Request $request)
    {
        //return $request;
        $setting = Setting::where('user_id', Auth::id())->first();
        if (empty($setting)) {
            $setting = new Setting();
            $setting->user_id = Auth::id();
            $setting->save();
        }
        return view('pages.settings', compact('setting'));
    }

    function update(Request $request)
    {


        $setting = Setting::where('user_id', Auth::id())->first();
        if ($request->sms_notification == "on") {
            $setting->sms_notification = 1;
        } else {
            $setting->sms_notification = 0;
        }

        if ($request->email_notification == "on") {
            $setting->email_notification = 1;
        } else {
            $setting->email_notification = 0;
        }

        if ($request->monthly_notification == "on") {
            $setting->monthly_notification = 1;
        } else {
            $setting->monthly_notification = 0;
        }

        $setting->save();

        return redirect()->route('settings')->with('success', 'Account Settings Updated Successfully.');

    }


}
