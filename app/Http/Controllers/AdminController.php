<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('layouts.admin');
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
