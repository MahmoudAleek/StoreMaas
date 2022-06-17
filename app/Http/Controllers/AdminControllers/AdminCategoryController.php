<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;

use Illuminate\Http\Request;


class AdminCategoryController extends Controller
{
    public function ViewCategories(){

        $Categories = Category::latest()->get();
        $subCategories = SubCategory::latest()->get();

    
        return view('admin.category.view',compact('Categories','subCategories'));
    }

    public function Store(Request $request){

        
        $request->validate([
            'category_name' => 'required',
        ],[
            'category_name.required' => 'Please Insert Category Name',
        ]);

        // $image = $request->file('brand_image');
        // $imgName = hexdec(uniqid()).'.'. $image->getClientOriginalExtension();

        // Image::make($image)->resize(300,300)->save('upload/admin/brands/'.$imgName);
        // $imageUrl = 'upload/admin/brands/' . $imgName;

        $insertNewCat = new Category();
        $insertNewCat->name = $request->category_name;
        $insertNewCat->save();


        $notification = array(
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.categories')->with($notification);

    }

    public function categoryEditPage($id){

        $category = Category::findOrFail($id);

        return view('admin.category.edit',compact('category'));
    }

    public function Update(Request $request){

        $request->validate([
            'edit_category_name' => 'required',
        ],[
            'edit_category_name.required' => 'Please Insert Category Name',
        ]);

        $categoryId = $request->edit_category_id;
        $updatedCategory = Category::findOrFail($categoryId);


        $updatedCategory->name= $request->edit_category_name;
        $updatedCategory->save();

        $notification = array(
            'message' => 'Category Updated Seccussfully',
            'alert-type' => 'info'
        );

        return redirect()->route('all.categories')->with($notification);
        
    }

    public function Delete($id){
        $deletedCategory = Category::findOrFail($id);

        $deletedCategory->delete();

        $notification = array(
            'message' => 'Category Deleted Successfully',
            'alert-type' => 'warning'
        );

        return redirect()->route('all.categories')->with($notification);

    }
}
