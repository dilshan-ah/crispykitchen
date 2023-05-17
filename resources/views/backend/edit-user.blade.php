@extends('backend/master')
@section('admin-content')
<h1 class="h3 mb-2 text-gray-800">Edit Users</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-body">
    <div class="py-5">
        <form class="user" method="POST" action="{{ Route('admin.user-update',$users->id) }}">
            @csrf
            <div class="form-group row">
                <div class="col-12 mb-3">
                    <input type="text" class="form-control form-control-user"  id="name"  type="text" name="name" placeholder="First Name" value="{{$users->name}}" required>
                </div>
                <div class="col-12">
                    <input type="email" class="form-control form-control-user" id="email" placeholder="Email Address" type="email" name="email" value="{{$users->email}}" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-inline">
                Update user
            </button>
            <hr>
        </form>
    </div>
    </div>
</div>
@endsection    