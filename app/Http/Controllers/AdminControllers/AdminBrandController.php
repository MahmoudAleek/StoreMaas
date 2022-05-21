<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

use Image;

class AdminBrandController extends Controller
{
    public function brandsView(){
        
        $brands = Brand::latest()->get();
    
        return view('admin.brand.view',compact('brands'));
    }

    public function store(Request $request){

        $request->validate([
            'brand_name' => 'required',
            'brand_image' => 'required'
        ],[
            'brand_name.required' => 'Please Insert Brand Name',
            'brand_image.required' => 'Please Insert Brand Image',
        ]);

        $image = $request->file('brand_image');
        $imgName = hexdec(uniqid()).'.'. $image->getClientOriginalExtension();

        Image::make($image)->resize(300,300)->save('upload/admin/brands/'.$imgName);
        $imageUrl = 'upload/admin/brands/' . $imgName;

        $insertNewBrand = new Brand();
        $insertNewBrand->name = $request->brand_name;
        $insertNewBrand->image = $imageUrl;
        $insertNewBrand->save();


        $notification = array(
            'message' => 'Brand Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.brands')->with($notification);

    }

    public function brandEditPage($id){
        $brand = Brand::findOrFail($id);

        return view('admin.brand.edit',compact('brand'));
    }

    public function Update(Request $request){

        $request->validate([
            'brand_name' => 'required',
        ],[
            'brand_name.required' => 'Please Insert Brand Name',
            'brand_image.required' => 'Please Insert Brand Image',
        ]);

        $brandId = $request->brand_id;
        $oldBrandImage = $request->old_brand_image;

        $updateBrand = Brand::findOrFail($brandId);
        
        if($request->file('brand_image')){

            unlink($oldBrandImage);

            $image = $request->file('brand_image');
            $imgName = hexdec(uniqid()).'.'. $image->getClientOriginalExtension();
    
            Image::make($image)->resize(300,300)->save('upload/admin/brands/'.$imgName);
            $imageUrl = 'upload/admin/brands/' . $imgName;

            $updateBrand->image = $imageUrl;
    
        }

        $updateBrand->name= $request->brand_name;
        $updateBrand->save();

        $notification = array(
            'message' => 'brand Updated Seccussfully',
            'alert-type' => 'info'
        );

        return redirect()->route('all.brands')->with($notification);
        
    }

    public function Delete($id){
        $deletedBrand = Brand::findOrFail($id);

        $brandImage = $deletedBrand->image;
        unlink($brandImage);

        $deletedBrand->delete();

        $notification = array(
            'message' => 'Brand Deleted Successfully',
            'alert-type' => 'warning'
        );

        return redirect()->route('all.brands')->with($notification);

    }
}
