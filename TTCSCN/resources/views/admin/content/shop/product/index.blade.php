@extends('admin.layouts.quantri')
@section('title')
    Quản lý sản phẩm
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
                            <li class=" breadcrumb-item active">Danh sách </li>
                        </ol>
                    </nav>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <h2>Quản lý sản phẩm </h2>
                    <div >
                        <a href="{{ url('admin/shop/product/create') }}" class="btn btn-success">Thêm sản phẩm</a>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tên</th>
                                        <th style="width: 150px">Images</th>
                                        <th>Giá niêm yết</th>
                                        <th>Giá bán</th>
                                        <th>Tồn kho</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($products as $product)
                                        <tr>
                                            <th scope="row">{{ $product->id }}</th>
                                            <td>{{ $product->pro_name }}</td>
                                            <td>
                                                {{ $product->pro_avatar }}
                                            </td>
                                            <td>{{ $product->pro_price }}</td>
                                            <td>{{ $product->pro_sale }}</td>
                                            <td>{{ $product->pro_stock }}</td>
                                            <td>
                                                <a href="{{ url('admin/shop/product/'.$product->id.'/edit') }}" class="btn btn-warning">Sửa</a>
                                                <a href="{{ url('admin/shop/product/'.$product->id.'/delete ') }}" class="btn btn-danger">Xóa</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $products->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection