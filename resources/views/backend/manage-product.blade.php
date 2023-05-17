@extends('backend/master')
@section('admin-content')
<h1 class="h3 mb-2 text-gray-800">All Products</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Product list</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Sl#</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sl#</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>

                    @php
                    $i = 1;
                    @endphp

                    @if(count($products) > 0)

                        @foreach($products as $product)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>
                                <img src="images/products/{{$product->image}}" style="width: 50px;" alt="">
                            </td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->category_name}}</td>
                            <td>{{$product->brand_name}}</td>
                            <td>{{$product->price}}</td>
                            <td>
                            @if($product->status == 1)
                                <form action="{{Route('active.status',$product->id)}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="PUT">
                                    <button type="submit" class="btn btn-success btn-circle">
                                        <i class="fas fa-check"></i>
                                    </button>
                                </form>
                            @elseif($product->status == 0)
                                <form action="{{Route('inactive.status',$product->id)}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="PUT">
                                    <button type="submit" class="btn btn-danger btn-circle">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </form>
                            @endif  
                            </td>
                            <td>
                                <a href="{{Route('admin.edit-product',$product->id)}}" class="btn btn-primary btn-circle">
                                <i class="fas fa-pen"></i>
                                </a>

                                <a href="{{Route('admin.delete-product',$product->id)}}" class="btn btn-danger btn-circle">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach

                    @else 
                    <tr>
                        <td colspan="8"><p class="text-center">No data found</p></td>
                    </tr>   
                        
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection    