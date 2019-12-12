@extends('admin.layouts.quantri')
@section('title')
    Thêm mới danh mục
@endsection
@section('content')
    <style>
        .error-text{
            color: red;
        }
    </style>    <div class="row">
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
                    <h2>Thêm mới danh mục</h2>
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
                            <form action="" name="category" action="{{ url('admin/shop/category') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Tên danh mục :</label>
                                    <input type="text" class="form-control" value="{{ old('name')}}" id="focusedInput" placeholder="Tên danh mục " name="name">
                                    @if($errors->has('name'))
                                        <span class="error-text">
                                            {{$errors->first('name')}}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="focusedinput" >Homepage</label>
                                    <div>
                                        <select name="homepage">
                                            <option value="0">Không</option>
                                            <option value="1">Có</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">slug :</label>
                                    <input type="text" class="form-control" value="{{old('c_slug')}}" id="focusedInput" placeholder=" " name="c_slug">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Icon:</label>
                                    <input type="text" class="form-control" value="{{old('c_icon')}}" id="focusedInput" placeholder="fa fa-home" name="c_icon">
                                    @if($errors->has('c_icon'))
                                        <span class="error-text">
                                            {{$errors->first('c_icon')}}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="name">Images :</label>
                                    <input type="text" value="{{old('c_avatar')}}" class="form-control" id="focusedInput" placeholder=" " name="c_avatar">
                                </div>
                                <div class="form-group">
                                    <label for="name">Meta title :</label>
                                    <input type="text" class="form-control"  value="{{old('c_title_seo')}}" id="focusedInput" placeholder="Meta title" name="title_seo">
                                    @if($errors->has('c_title_seo'))
                                        <span class="error-text">
                                            {{$errors->first('c_title_seo')}}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="name">Meta description :</label>
                                    <input type="text" class="form-control"  value="{{old('c_description_seo')}}" id="focusedInput" placeholder="Meta description " name="c_description_seo">
                                    @if($errors->has('c_description_seo'))
                                        <span class="error-text">
                                            {{$errors->first('c_description_seo')}}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label><input type="checkbox">Nổi bật </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection