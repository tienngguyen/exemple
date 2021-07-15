@extends('backend.layouts.home')
@section('tittle', 'Orders')
@section('content')
    <table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Status</th>
                <th>Updated At</th>
            </tr>
        </thead>
    </table>
@stop
@section("appendjs")
<script>
    $(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('admin.orders.getdata') !!}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'customer_name', name: 'customer_name' },
                { data: 'customer_email', name: 'customer_email' },
                { data: 'customer_phone', name: 'customer_phone' },
                { data: 'customer_address', name: 'customer_address' },
                { data: 'order_status', name: 'order_status' },
                { data: 'updated_at', name: 'updated_at' }
            ]
        });
    });
</script>
@endsection