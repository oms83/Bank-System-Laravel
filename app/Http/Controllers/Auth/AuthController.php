<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\PasswordReset;
use App\Mail\CustomerResetPasswordMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    function login(Request $request){

        //Check using Email Address
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $loginValue = $request->input('email');
        //Get Login Type
        $login_type = $this->getLoginType( $loginValue);

        //Change request type based on user input
        $request->merge([
            $login_type => $loginValue
        ]);


        $credentials = $request->only($login_type, 'password');

        if (Auth::attempt($credentials, $request->remember)) {

            $user = Auth::user();
            //Check if user is a customer or admin
            if( $user?->can('login') ){
                // Log them in
                return redirect('/dashboard');
            }

            Auth::logout();
            return back()->withInput()->with('error', 'Unauthorized access');


        }

        return back()->withInput()->with('error', 'We cant find an account with this credentials. Please make sure you entered the right information');

    }

    public function getLoginType($loginValue) {

        if(filter_var($loginValue, FILTER_VALIDATE_EMAIL ) ){
            return "email";
        }

        return "username";

    }

    function logout(Request $request){

        Auth::logout();
        return redirect('login');
    }


    function reset_account(Request $request){

        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where("email",$request->email)
        ->orWhere("username",$request->email)->first();

        if(!empty($user)){

            $reset = new PasswordReset();
            $reset->email = $request->email;
            $reset->token = Str::random(40);
            $reset->save();

            $link = route("password_setup")."/".$reset->token;

            //Sending Reset Password mail to customer
            Mail::to($user->email)->queue(new CustomerResetPasswordMail($user,$link));

            return back()->withInput()->with('success', 'A password resent link has been sent to your your email');

        }else{
            return back()->withInput()->with('error', 'We cant find an account with this credentials. Please make sure you entered the right information');
        }


    }

    function start_account_password(Request $request, $code){

        $passwordReset = PasswordReset::where("token",$code)->first();
        if( !empty($passwordReset) ){
            return view('auth.customer.set_account_password')->with("code",$code);
        }

        return redirect()->route('reset_account')->with('error', '<b>Ooops!!</b> Invalid Credentials. Please make sure you entered the right information');
    }

    function set_account_password(Request $request){

        $passwordReset = PasswordReset::where("token",$request->code)->first();

        if( !empty($passwordReset) ){

            $this->validate($request, [
                'password' => 'required|confirmed|min:6',
            ]);

            //SET THE NEW PASSWORD
            $new_password = Hash::make($request->password);
            $user = User::where("email",$passwordReset->email)->first();
            $user->password = $new_password;
            $user->save();
            return redirect()->route('reset_account')->with('success', '<b>Successful!!</b> Your Account Password Has Been Reset');
            //END PASSWORD SETTING

        }

        return redirect()->route('reset_account')->with('error', '<b>Ooops!!</b> Invalid Credentials. Please make sure you entered the right information');


    }


}
