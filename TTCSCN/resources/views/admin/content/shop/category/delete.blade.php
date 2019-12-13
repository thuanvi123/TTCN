@extends('admin.layouts.quantri')
@section('title')
    Xóa  danh mục
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Trang chủ </a></li>
                            <li class="breadcrumb-item"><a href="#">Danh mục  </a></li>
                            <li class=" breadcrumb-item active">Thêm mới </li>
                        </ol>
                    </nav>
                    <h2>sửa danh mục{{$cat->id .':'.$cat->name}} </h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="container">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form  name="category" action="{{ url('admin/shop/category/'.$cat->id.'/delete') }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger">Xóa</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
