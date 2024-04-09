<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Contacts;
use App\Models\Service;
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
        if (session::has('user')){
            $contacts = DB::table('contacts')->get();
            return view('admin/contact', compact('contacts'));
        } else {
            return view('admin/login');
        }
    }



    //Service
    public function servicelist()
    {
      $value=session()->get('user');
      if(isset($value))
      {
      $record_details = Service::select('*')->orderBy('id', 'desc')->paginate(10);
      return view('admin/service/list', compact('record_details'));
      }
      else{
          return view('admin/login');
      }
    }

    public function servicecreate(Request $request)
    {
      $value=session()->get('user');
      if(isset($value))
      {
      return view('admin/service/create');
      }
      else{
          return view('admin/login');
      }
    }
    public function saveservice(Request $request)
    {
        $newRecord = new Service;
        $newRecord->title = $request['title'];
        $newRecord->seo_title = $request['seo_title'];
        $newRecord->seo_description = $request['seo_description'];
        $newRecord->content = $request['content'];
        //echo "<pre>";print_r($newRecord);exit;
        $newRecord->save();
        return redirect('admin/service/list');
    }

    public function serviceedit($id)
    {
      $value=session()->get('user');
      if(isset($value))
      {
      $edit_article_details = Service::where('id',$id)->first();
      return view('admin/service/edit',compact('edit_article_details'));
      }
      else{
          return view('admin/login');
      }
     }
     public function updateservice(Request $request)
    {
      //$request =  Service::all()->toArray();
        $mesg="";
        $newRecord = Service::find($request['id']);
        //echo"<pre>";print_r($request['content']);exit;
        $newRecord->title = $request['title'];
        $newRecord->seo_title = $request['seo_title'];
        $newRecord->seo_description = $request['seo_description'];
        $newRecord->content = $request['content'];
        //echo "<pre>";print_r($newRecord);exit;
        $newRecord->save();
        if($newRecord->save()){
            $mesg = "Data saved successfully";
        }
        return redirect('admin/service/list')->with('mesg', 'Data saved successfully!');
     }
     public function deleteservice(Request $request)
    {
        $record=Service::where('id', $request['id'])->delete();
        return redirect('admin/service/list')->with('msg', 'Data deleted successfully!');
     }


}
