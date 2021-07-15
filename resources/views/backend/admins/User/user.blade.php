@extends('backend.layouts.home')
@section('tittle', 'Users')
@section('content')
    <table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th>Avatar</th>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
                <th>Created At</th>
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
                ajax: '{!! route('admin.user.getdata') !!}',
                columns: [
                    { data: 'avatar', name: 'avatar' },
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    { data: 'action', name: 'action' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'updated_at', name: 'updated_at' }
                ]
            });
        });
    </script>
@endsection