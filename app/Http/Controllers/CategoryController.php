<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create(){
        return view('categories.create');
    }
    public function store(Request $request){
        $request->validate([
            'categoryname'=>'required|unique:categories',
        ]);
        $category = new Category;
        $category->categoryname = $request->categoryname;
        $result = $category->save();
        if($result){
            return redirect(route('category'));
        }
        else{
            return ['404'];
        }
    }
    public function edit($id){
        $data = Category::findOrFail($id);
        if($data){
            return view('categories.edit',['data'=>$data]); 
        }
        else{
            return ['404'];
        }
    }
    public function update(Request $request, $id){
        $data = Category::findOrFail($id);
        if($data){
            $data->categoryname = $request->categoryname;
            $result = $data->save();
            if($result){
                return redirect(route('category'));
            }
            else{
                return ['404'];
            }
        }
        else{
            return ['404'];
        }
    }
    public function delete($id){
        $data = Category::find($id);
        return view('categories.delete',['data'=>$data]); 
    }
    public function destroy($id){
        $result = Category::destroy($id);
        if($result){
            return redirect(route('category'));
        }
        else{
            return ['404'];
        }
    }
}
