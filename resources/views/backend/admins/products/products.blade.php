@extends('backend.layouts.home')
@section('tittle', 'Product')
@section('content')
    <table class="table table-bordered" id="product-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Publish</th>
                <th>Quantity</th>
                <th>Update at</th>
            </tr>
        </thead>
    </table>
@stop
@section("appendjs")
    <script>
        $(function() {
            $('#product-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.product.getdata') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'price', name: 'price' },
                    { data: 'publish', name: 'publish' },
                    { data: 'quantity', name: 'quantity' },
                    { data: 'updated_at', name: 'updated_at' }
                ]
            });
        });
    </script>
@endsection