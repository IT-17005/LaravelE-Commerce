<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Image;
class CategoriesController extends Controller
{
    public function index(){
        $categories = Category::orderBy('id','desc')->get();
        return view ('backend.pages.categories.index',compact('categories',$categories));
    }

    public function create(){
        $main_categories = Category::orderBy('name','desc')->where('parent_id',NULL)->get();
        return view('backend.pages.categories.create',compact('main_categories'));
    }

    public function store(Request $request){
     $this->validate($request,[
    'name' => 'required',
    'image' => 'nullable|image',
    ],
    [
        'name.required' => 'Please provide a category name',
        'image.image' => 'Please provide a valid image with .jpg, .png, .jpeg, .gif extension...',
    ]);
     $category = new Category();
     $category->name = $request->name;
     $category->description = $request->description;
     $category->parent_id = $request->parent_id;
     //insert image also
     if($request->image != NULL){
        $image = $request->file('image');
        $img = time().'.'.$image->getClientOriginalExtension();
        $location = public_path('/images/products/categories/'.$img);
        Image::make($image)->save($location);

    }
     $category->image = $img;
     $category->save();
     session()->flash('success','A new category has added successfully!!');
     return redirect()->route('admin.categories');
    }

    public function edit($id){
        $main_categories = Category::orderBy('name','desc')->where('parent_id',NULL)->get();
        $category = Category::find($id);
        if(!is_null($category)){
            return view('backend.pages.categories.edit',compact('category','main_categories'));
        }
        else{
            return redirect()->route('admin.categories');
        }
    }

}
