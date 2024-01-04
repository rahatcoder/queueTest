<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class products extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('admin.user.users.all');
    }

    public function create(){
        return view();
    }

    public function view(){
        return view();
    }

    public function store(){
        return view();
    }

    public function edit(){
        return view();
    }

    public function update(){
        return view();
    }

    public function distroy(){
        return view();
    }
}
