<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller {

    public function create_category() {
        $data = array();
        $data['top_menu'] = view('admin.includes.top_menu');
        $data['main_menu'] = view('admin.includes.main_menu');
        $data['main_content'] = view('admin.category.add_category_form');
        return view('admin.dashboard.master')->with($data);
    }
    public function save_category(Request $request) {
        $category = new Category();
        $category->category_name=$request->category_name;
        $category->category_description=$request->category_description;
        $category->publication_status=$request->publication_status;
        $category->save();
        return redirect('/add-category');       
    }
    public function manage_category() {
        $category_info = Category::all();
        $data = array();
        $data['top_menu'] = view('admin.includes.top_menu');
        $data['main_menu'] = view('admin.includes.main_menu');
        $data['main_content'] = view('admin.category.manage_category_content', ['all_category' =>$category_info] );
        return view('admin.dashboard.master')->with($data);
    }
    public function unpublished_category($id) {
        $category_info =Category::find($id);
        $category_info->publication_status = 0;
        $category_info->save();
        
        return redirect('/manage-category')->with('message', 'Category info unpublished successfully');
    }
    public function published_category($id) {
        $category_info =Category::find($id);
        $category_info->publication_status = 1;
        $category_info->save();
        
        return redirect('/manage-category')->with('message', 'Category info published successfully');
    }
    public function edit_category($id) {
        $category_info =Category::find($id);
        $data = array();
        $data['top_menu'] = view('admin.includes.top_menu');
        $data['main_menu'] = view('admin.includes.main_menu');
        $data['main_content'] = view('admin.category.edit_category_content', ['category_info' =>$category_info] );
        return view('admin.dashboard.master')->with($data);
    }
    public function update_category(Request $request) {
        $category_id = $request->input('category_id');
        $category_info = Category::find($category_id);
        $category_info->category_name = $request->input('category_name');
        $category_info->category_description = $request->input('category_description');
        $category_info->publication_status = $request->input('publication_status');
        
        $category_info->save();
        return redirect('/manage-category')->with('message', 'Category info update successfully');
    }
    public function delete_category($id) {
        $category_info = Category::find($id);
        $category_info->delete();
        return redirect('/manage-category')->with('message', 'Category info delete successfully');
    }
}
