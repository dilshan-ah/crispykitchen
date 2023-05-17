@extends('backend/master')
@section('admin-content')
<h1 class="h3 mb-2 text-gray-800">All Users</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">User list</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Sl#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sl#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>

                    @php
                    $i = 1;
                    @endphp

                    @if(count($users) > 0)

                        @foreach($users as $user)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <a href="{{Route('admin.user-edit',$user->id)}}" class="btn btn-primary btn-circle">
                                <i class="fas fa-pen"></i>
                                </a>

                                <a href="{{Route('admin.user-del',$user->id)}}" class="btn btn-danger btn-circle">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach

                    @else    
                        <p>No data found</p>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection    