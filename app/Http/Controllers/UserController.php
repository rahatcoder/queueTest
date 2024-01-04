<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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

    public function view(){
        $vue=user::where('status',1)->FirstOrFail();
        return view('admin.user.users.view', compact('vue'));
    }

    public function edit(){
        return view();
    }

    public function update(){
        return view();
    }

    public function destroy(){
        return view();
    }
}
