<?php

namespace App\Http\Controllers;
use App\Add;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
//use App\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{

    public function index()
    {
        return view('admin_login');
    }

    public function show_dashboard()
    {
      if(\Auth::check()){
        if(\Auth::user()->role==0)
          return view('admin.dashboard');
      }

    }
    public function indexx()
    {
        if(session()->has('success_message')){
         Alert::success('', session()->get('success_message'));
        }
        return view('admin.add_admin');
    }
    public function  save_admin(Request $request)
    {
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['password']=Hash::make($request->password);
        $data['role']=0;
        DB::table('users')->insert($data);
        return Redirect::to('/add_admin')->withSuccessMessage('Admin added successfullly!!');

    }
	public function allAdmins ()
	{
		$all_admins = DB::table('users')->select('*')->where('role','0')->where('id','!=' ,\Auth::user()->id)->get();
		$manage_admins=view('admin.all_admins')->with('all_admins',$all_admins);

         return view('admin_layout')->with('admin.all_admins',$manage_admins);
	}
	public function DeleteAdmin($id)
	{
		DB::table('users')->where('id',$id)->delete();
		return Redirect ('all_admins');
	}

}
