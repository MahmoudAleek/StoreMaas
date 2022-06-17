<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SubCategory;

class AdminSubCategoryController extends Controller
{
    public function ViewCategories(){

        $subCategories = SubCategory::latest()->get();
    
        return view('admin.subcategory.view',compact('subCategories'));
    }

    public function Store(Request $request){

        
        $request->validate([
            'subcategory_name' => 'required',
            'cat_id' => 'required',

        ],[
            'subcategory_name.required' => 'Please Insert Sub Category Name',
        ]);


        $insertNewSubCat = new SubCategory();
        $insertNewSubCat->name = $request->subcategory_name;
        $insertNewSubCat->categoryId = $request->cat_id;
        $insertNewSubCat->save();


        $notification = array(
            'message' => 'Sub Category Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.categories')->with($notification);

    }

    public function categoryEditPage($id){

        $subCategory = SubCategory::findOrFail($id);

        return view('admin.subcategory.edit',compact('subCategory'));
    }

    public function Update(Request $request){

        $request->validate([
            'sub_category_name' => 'required',
        ],[
            'sub_category_name.required' => 'Please Insert Category Name',
        ]);

        $categoryId = $request->sub_category_id;
        $updatedCategory = SubCategory::findOrFail($categoryId);


        $updatedCategory->name= $request->sub_category_name;
        $updatedCategory->save();

        $notification = array(
            'message' => 'Sub Category Updated Seccussfully',
            'alert-type' => 'info'
        );

        return redirect()->route('all.sub-categories')->with($notification);
        
    }

    public function Delete($id){
        $deletedSubCategory = SubCategory::findOrFail($id);

        $deletedSubCategory->delete();

        $notification = array(
            'message' => 'Category Deleted Successfully',
            'alert-type' => 'warning'
        );

        return redirect()->route('all.sub-categories')->with($notification);

    }


    public function getSubCategories($category_id){
        $subCategories = SubCategory::where('categoryId',$category_id)->get();

        return json_encode($subCategories);
    }
}
