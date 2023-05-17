@extends('backend/master')
@section('admin-content')
<h1 class="h3 mb-2 text-gray-800">All Products</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Reservations</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Sl#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Number of persons</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Request</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sl#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Number of persons</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Request</th>
                    </tr>
                </tfoot>
                <tbody>

                    @php
                    $i = 1;
                    @endphp

                    @if(count($reservations) > 0)

                        @foreach($reservations as $reservation)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>
                                {{$reservation->full_name}}
                            </td>
                            <td>{{$reservation->email_address}}</td>
                            <td>{{$reservation->phone_number}}</td>
                            <td>{{$reservation->number_of_persons}}</td>
                            <td>{{$reservation->date}}</td>
                            <td>{{$reservation->time}}</td>
                            <td>{{$reservation->special_request}}</td>
                            
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