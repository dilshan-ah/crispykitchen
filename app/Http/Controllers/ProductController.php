<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use File;

class ProductController extends Controller
{
    public function add_index(){
        return view('backend/add-product');
    }

    public function insert_product(Request $request){
        $products = new Product();

        $imageName = "";

        if($image = $request->file('image')){
            $imageName = time().uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/products',$imageName);
        }

        $products->name = $request->name;
        $products->category_name = $request->catname;
        $products->brand_name = $request->brandname;
        $products->description = $request->desc;
        $products->image = $imageName;
        $products->price = $request->price;
        $products->name = $request->name;
        $products->status = $request->status;

        $products->save();

        return back();
    }


    public function show_product(){
        $products = Product::all();
        return view('backend/manage-product',compact('products'));
    }

    public function delete_product($id){
        $products = Product::find($id);

        $deleteOldImage = "images/products/".$products->image;

        if(file_exists($deleteOldImage)){
            File::delete($deleteOldImage);
        }

        $products->delete();

        return back();
    }

    public function edit_product($id){
        $products = Product::find($id);

        $imageName = "images/products/".$products->image;

        return view('backend/edit-product',compact('products','imageName'));
    }

    public function update_product(Request $request,$id){
        $products = Product::find($id);

        $imageName = "";

        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time().uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/products',$imageName);

            $product->image = $imageName;
            // Delete the old image
            if ($product->image && file_exists(public_path('images/products/' . $product->image))) {
            unlink(public_path('images/products/' . $product->image));
            }
        }else {
            $imageName = $products->image;
          }

        $products->name = $request->name;
        $products->category_name = $request->catname;
        $products->brand_name = $request->brandname;
        $products->description = $request->desc;
        $products->image = $imageName;
        $products->price = $request->price;
        $products->name = $request->name;
        $products->status = $request->status;

        $products->update();

        return redirect()->route('admin.manage-product');
    }

    public function activeStatus(Request $request, $id){
        $products = Product::find($id);
        $products->status = 0;
        $products->update();
        return redirect()->route('admin.manage-product');
    }

    public function inactiveStatus(Request $request, $id){
        $products = Product::find($id);
        $products->status = 1;
        $products->update();
        return redirect()->route('admin.manage-product');
    }
}
