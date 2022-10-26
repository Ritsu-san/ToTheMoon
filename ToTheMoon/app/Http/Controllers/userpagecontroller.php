<?php

namespace App\Http\Controllers;
use App\Models\destination;
use App\Models\User;
use Illuminate\Http\Request;
use Hash;
use Session;
use Response;
use Illuminate\Support\Facades\Auth;
use App\Models\UserVerify;
use Illuminate\Support\Str;
use Mail; 
use DB; 
use Carbon\Carbon; 

class userpagecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
       public function index()
    { $data['destination'] = destination::orderBy('id')->paginate(5);
        return view('index', $data);
    }
    public function login()
    {
        return view('login');
    }
       public function register()
    {
        return view('register');
    }
     public function customLogin(Request $Request)
    {
    
   
        $credentials = $Request->only('email','password');
        if (Auth::attempt($credentials)) {
             if (Auth::user()->user_type == 'Administrator')
      {
         return redirect()->intended('adminindex');  // admin dashboard path
        } else {
            return redirect()->intended('index');
                        
        }} else {
  
        return redirect("login");
    }}

      public function customRegister(Request $Request)
    {
        
        $data = $Request->all();
        $createUser = $this->create($data);
  
        $token = Str::random(64);
  
        UserVerify::create([
              'user_id' =>$createUser->id, 
              'token' => $token
            ]);
  
        Mail::send('emailVerificationEmail', ['token' => $token], function($message) use($Request){
              $message->to($Request->email);
              $message->subject('Email Verification Mail');
          });
         
        return redirect()->back();
    } 


    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        
        'password' => Hash::make($data['password'])
      ]);
    }

        public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
   public function verifyAccount($token)
    {
        $verifyUser = UserVerify::where('token', $token)->first();
  
        $message = 'Sorry your email cannot be identified.';
  
        if(!is_null($verifyUser) ){
            $user = $verifyUser->user;
              
            if(!$user->is_email_verified) {
                $verifyUser->user->is_email_verified = 1;
                $verifyUser->user->save();
                $message = "Your e-mail is verified. You can now login.";
            } else {
                $message = "Your e-mail is already verified. You can now login.";
            }
        }
  
      return redirect()->intended('index')->with('message', $message);
    }
     public function showForgetPasswordForm()
      {
         return view('forgetPassword');
      }
  

      public function submitForgetPasswordForm(Request $Request)
      {
          $Request->validate([
              'email' => 'required|email|exists:users',
          ]);
  
          $token = Str::random(64);
  
          DB::table('password_resets')->insert([
              'email' => $Request->email, 
              'token' => $token, 
              'created_at' => Carbon::now()
            ]);
  
          Mail::send('forgetPasswordmail', ['token' => $token], function($message) use($Request){
              $message->to($Request->email);
              $message->subject('Reset Password');
          });
  
          return back()->with('message', 'Your password reset link has been sent');
      }
    
      public function showResetPasswordForm($token) { 
         return view('forgetPasswordLink', ['token' => $token]);
      }
  
   
      public function submitResetPasswordForm(Request $Request)
      {
          $Request->validate([
              'email' => 'required|email|exists:users',
              'password' => 'required|string|max:12',
              
          ]);
  
          $updatePassword = DB::table('password_resets')
                              ->where([
                                'email' => $Request->email, 
                                'token' => $Request->token
                              ])
                              ->first();
  
          if(!$updatePassword){
              return back()->withInput()->with('error', 'Invalid token!');
          }
  
          $user = User::where('email', $Request->email)
                      ->update(['password' => Hash::make($Request->password)]);
 
          DB::table('password_resets')->where(['email'=> $Request->email])->delete();
  
          return redirect('/login')->with('message', 'Your password has been changed!');
      }


   }

