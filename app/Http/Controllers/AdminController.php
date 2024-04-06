<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Contacts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Auth;


class AdminController extends Controller
{

    public function index()
    {
        if(session()->has('user')) {
            return redirect('admin/dashboard');
        } else {
            return view('admin/login');
        }
    }

    public function doLogin(Request $request)
    {
            $username = $request['username'];
            $password =$request['password'];
            $admin = Admin::doLogin($username , $password);
            if(!empty($admin)){
                $session = session()->put('user',$username);
                $sessionuser = session()->put('userdata',$admin);
                $value=session()->get('user');
                if (isset($value)){
                      return redirect('admin/dashboard');
                }
                else{

                    $msg = "Incorrect Credentials!!";
                     return view('admin/login',compact('msg'));
                }
            }
            else{
                $msg = "Incorrect Credentials!!";
                return view('admin/login',compact('msg'));
            }

    }

    public function login()
    {
        if(session()->has('user')) {
            return redirect('admin/dashboard');
        } else {
            return view('admin/login');
        }
    }

    public function dashboard()
    {
        $value=session()->get('user');
       //echo "<pre>";print_r($value);exit;
        if(isset($value))
        {
            return view('admin/dashboard');
        }
        else{
            return view('admin/login');
        }
    }

    public function logout()
    {
        if(session()->has('user')) {
            session()->forget('user');
            return redirect('admin')->with('success', 'You have been logged out successfully.');
        } else {
            return redirect('admin')->with('error', 'You are not logged in.');
        }
    }


    public function contact(){
        $data = array();
        if (session::has('user')){
            $data = Admin::where('id', '=', session::get('user'))->first();

            $contacts = DB::table('contacts')->get();

            return view('admin/contactlist', compact('data','contacts'));
        }
    }


}
