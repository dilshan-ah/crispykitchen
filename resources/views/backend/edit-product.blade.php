@extends('backend/master')
@section('admin-content')
<h1 class="h3 mb-2 text-gray-800">Edit Product</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-body">
    <div class="py-5">
        <form class="user" method="POST" action="{{Route('admin.update-product',$products->id)}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <div class="col-12 mb-3">
                    <input type="text" class="form-control form-control-user"  id="name" name="name" placeholder="Enter Product Name" value="{{$products->name}}" required>
                </div>
                <div class="col-12 mb-3">
                    <input type="text" class="form-control form-control-user" id="catname" placeholder="Enter Category Name" name="catname" value="{{$products->category_name}}" required>
                </div>
                <div class="col-12 mb-3">
                    <input type="text" class="form-control form-control-user" id="brandname" placeholder="Enter Brand Name" name="brandname" value="{{$products->brand_name}}" required>
                </div>

                <div class="col-12 mb-3">
                    <input type="int" class="form-control form-control-user" id="price" placeholder="Enter price" name="price" value="{{$products->price}}" required>
                </div>

                <div class="col-12 mb-3">
                    <textarea name="desc" class="form-control" id="p-desc" cols="30" rows="10" placeholder="Enter Product Description">{{$products->description}}</textarea>
                </div>

                <div class="col-12 mb-3">
                    <img src="{{asset('images/products')}}/{{$products->image}}" style="width: 100px;" alt="">
                </div>

                <div class="col-12 mb-3">
                    <input type="file" class="form-control" id="image" placeholder="Enter Product Image" name="image" value="{{$imageName}}">
                </div>

                <div class="col-12 mb-3">
                    <select name="status" id="status" class="form-control">
                        <option value="">--Select product status---</option>
                        <option value="1" @if($products->status == 1) selected @endif>Active</option>
                        <option value="0" @if($products->status == 0) selected @endif>Inactive</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-inline">
                Update Product
            </button>
            <hr>
        </form>
    </div>
    </div>
</div>
@endsection    