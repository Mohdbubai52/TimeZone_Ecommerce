@extends('Layout.AdminDashboard.AdminHeader');
@section('Pages')
    <div class="card">
        <h5 class="card-header">
            All Brands
            <a href="{{ url('/AdminPannel/Brands/Create') }}" class="btn rounded-pill btn-primary float-end">
                <i class="bx bx-list-plus"></i> Add Brand</a>



        </h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr class="text-nowrap">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Seller</th>
                        <th>Location</th>
                        <th>Brand Origin</th>
                        <th>Rating</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($brands as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->seller }}</td>
                            <td>{{ $item->location }}</td>
                            <td>{{ $item->origin }}</td>
                            <td>{{ $item->rating }}</td>
                            <td><a class="btn btn-danger btn-sm" href="{{url('/AdminPannel/Brands')}}?{{$item->id}}">Delete</a> <a
                                    class="btn btn-sm btn-success"href="{{url('/AdminPannel/Brands/Edit')}}?{{$item->id}}" >Edit</a></td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
