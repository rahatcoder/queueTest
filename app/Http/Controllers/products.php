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
use App\Models\Product;
use Carbon\Carbon;

use Validator;


class products extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $products=product::where('products_status',1)->orderBy('products_id','desc')->get();
        return view('admin.user.products.all', compact('products'));
    }

    public function create(){
        return view('admin.user.products.add');
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
