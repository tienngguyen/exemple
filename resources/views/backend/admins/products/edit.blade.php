{{--@dd($product)--}}
@extends('backend.layouts.home')
@section('tittle', 'Product')
@section('content')
    <h1>Cập nhật admin</h1>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form name="admin" action="{{ url("/admin/product/update/$product->id") }}" method="post" enctype="multipart/form-data">

        @csrf

        <div class="form-group">
            <label for="name">Tên:</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $product->name }}">
        </div>


        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" name="price" class="form-control" id="price" value="{{ $product->price }}">
        </div>

        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="text" name="quantity" class="form-control" id="quantity" value="{{ $product->quantity }}">
        </div>

        <div class="form-group">
            <label for="category_id">Category:</label>
            <input type="text" name="category_id" class="form-control" id="category_id" value="{{ $product->category_id }}">
        </div>

{{--        <div class="form-group">--}}
{{--            <label for="image">Ảnh đại diện:</label>--}}
{{--            <input type="file" name="avatar" class="form-control" id="image">--}}
{{--        </div>--}}

        <div class="form-group">
            <label for="desc">Mô tả:</label>
            <textarea name="desc" class="form-control" rows="5" id="desc">{{ $product->desc }}</textarea>
        </div>


        <button type="submit" id="submit" class="btn btn-info">Cập nhật thông tin admin</button>
    </form>

@endsection
@section("appendjs")
{{--    <script>--}}
{{--        $(document).on('click', '#submit', function(event) {--}}
{{--            event.preventDefault();--}}
{{--            let href = $(this).attr('data-attr');--}}
{{--            $.ajax({--}}
{{--                url: href--}}
{{--                , beforeSend: function() {--}}
{{--                    $('#loader').show();--}}
{{--                },--}}
{{--                // return the result--}}
{{--                success: function(result) {--}}
{{--                    $('#smallModal').modal("show");--}}
{{--                    $('#smallBody').html(result).show();--}}
{{--                }--}}
{{--                , complete: function() {--}}
{{--                    $('#loader').hide();--}}
{{--                }--}}
{{--                , error: function(jqXHR, testStatus, error) {--}}
{{--                    console.log(error);--}}
{{--                    alert("Page " + href + " cannot open. Error:" + error);--}}
{{--                    $('#loader').hide();--}}
{{--                }--}}
{{--                , timeout: 8000--}}
{{--            })--}}
{{--        });--}}
{{--    </script>--}}
@endsection
