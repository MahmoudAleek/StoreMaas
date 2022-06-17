<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
 use App\Models\Category;
 use App\Models\SubCategory;
 use App\Models\Brand;
 use App\Models\Property;
 use App\Models\ProductDetail;
 use App\Models\ProductImage;
 use Session;
 use Auth;
 use Image;

class AdminProductController extends Controller
{
    public function ViewProducts(){

        // $allProducts = Product::latest()->get();
    
        // return view('admin.product.view',compact('allProducts'));
        return true;
    }
    
    
    /* page add product & some realated info like sub category and brand */ 
    public function AddProduct(){
    
        $brands = Brand::latest()->get();
        $categories = Category::latest()->get();
    
        return view('admin.product.addproduct',compact('brands','categories'));
    }
    
    public function StoreProducts(Request $request){
            // $request->validate([
            //     'title' => 'required',
            //     'model' => 'required',
            //     'description' => 'required',
            //     'state' => 'required',
            //     'note' => 'required',
            //     'Available_time' => 'required',
            //     'images' => 'required',
            //     'owner_Id' => 'required',
            //     'sub_category_id' => 'required',
            //     'brand_id' => 'required',
            // ],[
            //     'product_name.required' => 'test test test test',
            //     'product_name.required' => 'test test test test',
            //     'product_name.required' => 'test test test test']);
    
            // Add data to product table // 
            $newProduct = new Product();
            $newProduct->title = $request->title;
            $newProduct->model = $request->model;
            $newProduct->description = $request->description;
            $newProduct->state = $request->state;
            $newProduct->note = $request->note;
            $newProduct->ownerId = auth::guard('admin')->user()->id;
            $newProduct->subcategoryId = $request->subcategory_id;
            $newProduct->brandId = $request->brand_id;
            $newProduct->save();
            
            // add product images to table products_images // 
            $images = $request->file('images');
            $productId = $newProduct->id;
            // $this->addProductImages($images,$productId);

            foreach($images as $img){
                $img_gen = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
                $up_location = 'upload/admin/products/';
                Image::make($img)->resize(250,250)->save($up_location.$img_gen);
    
                $last_img = $up_location . $img_gen;
    
                $image = new ProductImage();
                $image->image = $last_img;
                $image->productId = $productId;
                $image->save();
            }

            Session::put('productId',$productId);
            return redirect()->route('product.property');
            
    }

    private function addProductImages($images,$productId){

        return 'test';
        foreach($images as $img){
            $img_gen = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
            $up_location = 'upload/admin/products/';
            Image::make($img)->resize(250,250)->save($up_location.$img_gen);

            $last_img = $up_location . $img_gen;

            $image = new ProductImage();
            $image->image = $last_img;
            $image->productId = $productId;
            $image->save();
        }

    }

    public function propertyPage(){

        return view('admin.product.addproperty');
    }

    public function StoreProperty(Request $request){
        $request->validate([
            'property_name' => 'required',
            'property_description' => 'required',
        ]);

        $newProperty = new Property();
        $newProperty->name = $request->property_name;
        $newProperty->description = $request->property_description;
        $newProperty->save();
        

        $allProperty = Property::latest()->get();
        return view('admin.product.addproductdetails',compact('allProperty'));
    }

    public function StoreProductDetails(Request $request){

        $request->validate([
            'property_value',
            'price',
            'quantity'
        ]);
        
        $newPropductDetails = new ProductDetail();
        $newPropductDetails->value = $request->property_value;
        $newPropductDetails->price = $request->price;
        $newPropductDetails->quantity = $request->quantity;
        $newPropductDetails->productId = $newProduct->id;
        $newPropductDetails->save();

    }


    
}
