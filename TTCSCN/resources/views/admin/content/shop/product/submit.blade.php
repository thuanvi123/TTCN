@extends('admin.layouts.quantri')
@section('title')
    Thêm mới sản phẩm
@endsection
@section('content')
    <h1> Thêm mới sản phẩm </h1>

    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Trang chủ </a></li>
                            <li class="breadcrumb-item"><a href="#">Sản phẩm   </a></li>
                            <li class=" breadcrumb-item active">Thêm mới </li>
                        </ol>
                    </nav>
                    <h2>Thêm mới sản phẩm</h2>
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
                            <form  name="product" action="{{ url('admin/shop/product') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Tên danh sản phẩm :</label>
                                    <input type="text" class="form-control" value="{{ old('pro_name')}}" id="focusedInput" placeholder="Default Input" name="pro_name">
                                    @if($errors->has('pro_name'))
                                        <span class="error-text">
                                            {{$errors->first('pro_name')}}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label  for="focusedinput">Danh mục</label>
                                    <div>
                                        <select name="pro_category_id">
                                            <option value="0">Không có danh mục</option>
                                            @foreach($cats as $cat)
                                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
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
                                    <label for="pwd">Gía bán niêm yết:</label>
                                    <input type="text" class="form-control" value="{{old('pro_price')}}" id="focusedInput" placeholder="" name="pro_price">
                                </div>
                                <div class="form-group">
                                    <label for="name">Gía bán khuyến mại  :</label>
                                    <input type="text" value="{{old('pro_sale')}}" class="form-control" id="focusedInput" placeholder=" " name="pro_sale">
                                </div>
                                <div class="form-group">
                                    <label for="name">Images :</label>
                                    <input type="text" class="form-control"  value="{{old('pro_avatar')}}" id="focusedInput" placeholder="" name="pro_avatar">
                                </div>
                                <div class="form-group">
                                    <label for="name">Meta title :</label>
                                    <input type="text" class="form-control"  value="{{old('pro_description')}}" id="focusedInput" placeholder="Meta title" name="pro_description">
                                    @if($errors->has('pro_description'))
                                        <span class="error-text">
                                            {{$errors->first('pro_description')}}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="name">Meta description :</label>
                                    <input type="text" class="form-control"  value="{{old('pro_description_seo')}}" id="focusedInput" placeholder="Meta description " name="pro_description_seo">
                                    @if($errors->has('pro_description_seo'))
                                        <span class="error-text">
                                            {{$errors->first('pro_description_seo')}}
                                        </span>
                                    @endif
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
