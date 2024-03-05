<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\ProductCategory;
use App\Http\Controllers\PDF;
use Illuminate\Support\Rules;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Validator;

class productsCategoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $productsCategory=ProductCategory::where('procate_status',1)->orderBy('procate_id','DESC')->get();
        return view('admin.user.productCategory.all',compact('productsCategory'));
    }

    public function create(){
        return view('admin.user.productCategory.add');
    }

    public function view($id){
        $vue=ProductCategory::where('procate_status',1)->where('procate_id',$id)->FirstOrFail();
        return view('admin.user.productCategory.view', compact('vue'));
    }

<<<<<<< HEAD:app/Http/Controllers/productsCategory.php
    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'remarks' => 'required',
        ], [
            'name.required' => 'Please enter product category name',
            'remarks.required' => 'Please provide product category remarks',
        ]);
    
        // Assuming $creator is defined somewhere in your code
        $creator = auth()->user()->id; // Example: You might get the creator from the authenticated user
        
        $insert = ProductCategory::insertGetId([
            'procate_name' => $request->input('name'),
            'procate_remarks' => $request->input('remarks'),
            'expcate_creator' => $creator,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        
        if($insert) {
            // Success
            return redirect()->back()->with('success', 'Product category added successfully');
        } else {
            // Failure
            return redirect()->back()->with('error', 'Failed to add product category');
        }
=======
    public function store(Request $request){
        // $this->validate($request,[
        //     'name'=>'required',
        //     'remarks'=>'required',
        // ],[
        //     'name.required'=>'Please enter product category name',
        //     'remarks.required'=>'Please provide product category remarks',
            
            // $insert=ProductCategory::insertGetId([
            //     'procate_name'=>$request['name'],
            //     'procate_remarks'=>$request['remarks'],
            //     'created_at'=>Carbon::now()->toDateTimeString(),
            // ])
        //]);

        $data=$request->all();
        $insert=ProductCategory::create($data);

        if($insert){
            return redirect()->back();
        }else{
            return ('Opration Failed...');
        }

>>>>>>> 7990b09f377357c83618332df8b85f651833c919:app/Http/Controllers/ProductsCategoryController.php
    }

    public function edit($id){
        $edt=ProductCategory::where('procate_status',1)->where('procate_id',$id)->FirstOrFail();
        return view('admin.user.productCategory.edit', compact('edt'));
    }

    public function modify(Request $request){
<<<<<<< HEAD:app/Http/Controllers/productsCategory.php
        $id = $request->input('procate_id');
        // $id=$request['procate_id'];
    
=======
        
        $id=$request->id;

>>>>>>> 7990b09f377357c83618332df8b85f651833c919:app/Http/Controllers/ProductsCategoryController.php
        $this->validate($request,[
            'name' => 'required',
            'remarks' => 'required',
        ],[
<<<<<<< HEAD:app/Http/Controllers/productsCategory.php
            'name.required' => 'Please enter product category name',
            'remarks.required' => 'Please provide product category remarks',
        ]);
    
        $editor = Auth::user()->id;
    
        $update = ProductCategory::where('procate_id', $id)->update([
            'procate_name' => $request->input('name'),
            'procate_remarks' => $request->input('remarks'),
            'procate_editor' => $editor,
            'updated_at' => Carbon::now()->toDateTimeString(),
=======
            'name.required'=>'Please enter product category name',
            'remarks.required'=>'Please provide product category remarks',
        ]);

        $editor=Auth::user()->id;

        $update=ProductCategory::where('procate_id',$id)->update([
            'procate_name'=>$request['name'],
            'procate_remarks'=>$request['remarks'],
            'updated_at'=>Carbon::now()->toDateTimeString(),
>>>>>>> 7990b09f377357c83618332df8b85f651833c919:app/Http/Controllers/ProductsCategoryController.php
        ]);

        dd($update);
    
        if($update){
            return redirect()->back()->with('success', 'Product category modified successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to modify product category');
        }
    }

    public function distroy(){
        $id=$_POST[''];
        $delete = ProductCategory::where('procate_status',1)->where('procate_id',$id)->delete([]);

        if($delete){
          // return redirect('dashbexpense/category');
          Session::flash('success',' Successfully delete permanently expense_category information');
          return redirect('dashboard/recexpense/category');
        }else{}
          Session::flash('error','Opps! operation failed');
          return redirect('dashboard/recexpense/category');
   }

}