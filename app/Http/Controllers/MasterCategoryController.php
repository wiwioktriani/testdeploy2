<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MasterCategoryController extends Controller
{
    //
    public function storecat(Request $request){

        $validate_data = $request->validate([
            'category_name' => 'required|unique:categories|max:100'
        ]);

        Category::create($validate_data);
        return redirect()->back()->with('success','Cattegory Added Succesfully!');
    }

    public function show($id){
        $category_info = Category::find($id);
        return view('admin.category.edit',compact('category_info'));
    }

    public function update(Request $request, $id){
        $category = Category::findOrFail($id);
        $validate_data = $request->validate([
            'category_name' => 'required|unique:categories|max:100'
        ]);
        $category->update($validate_data);
        return redirect()->back()->with('success','Cattegory Updated Succesfully!');
    }

    public function delete(Request $request, $id){
        Category::findOrFail($id)->delete();
        return redirect()->back()->with('success','Cattegory Deleted Succesfully!');

    }

}
