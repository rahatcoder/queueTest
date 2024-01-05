<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\PDF;
use Illuminate\Support\Rules;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use Carbon\Carbon;
use Validator;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $users=User::where('status',1)->orderBy('id','DESC')->get();
        return view('admin.user.users.all',compact('users'));
    }
    
    public function create(){
        return view('admin.user.users.add');
    }

    public function store(Request $request){
        $request->validate([
            'username'=>'required | max:50',
            'email'=>'required | email |max:50',
            'password'=>'required | min:8 | max:16',
        ],[
            'username.required' => 'Please enter your username.',
            'email.required' => 'Please enter your email.',
            'password.required' => 'Please enter your password.',
        ]);

        $insert=User::insertGetId([
            'name'=>$request['username'],
            'email'=>$request['email'],
            'password'=>Hash::make($request['password']),
        ]);
    }

    public function view($id){
        $vue=user::where('status',1)->where('id',$id)->FirstOrFail();
        return view('admin.user.users.view', compact('vue'));
    }

    public function edit($id){
        $edt=User::where('status',1)->where('id',$id)->FirstOrFail();
        return view('admin.user.users.edit', compact('edt'));
    }

    public function modify(Request $request){
        $id=$request['id'];
        $request->validate([
            'username'=>'required | max:50',
            'email'=>'required | email |max:50',
        ],[
            'username.required' => 'Please enter your username.',
            'email.required' => 'Please enter your email.',
        ]);
        
        $update=User::where('id',$id)->update([
            'name'=>$request['username'],
            'email'=>$request['email'],
        ]);
        
        
        if($update){
            return redirect()->back();
        }
    }

    public function destroy(){
        return view();
    }
}
