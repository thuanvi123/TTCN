@extends('admin.layouts.quantri')
@section('title')
Quản trị danh mục
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
                    <h2>Quản lý danh mục</h2>
                    <div >
                        <a href="{{ url('admin/shop/category/create') }}" class="btn btn-success">Thêm danh mục</a>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Title seo</th>
                                        <th>Trạng thái </th>
                                        <th>Images</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($cats as $cat)
                                        <tr>
                                            <th scope="row">{{ $cat->id }}</th>
                                            <td>{{ $cat->name }}</td>
                                            <td>{{ $cat->slug }}</td>
                                            <td>{{ $cat->images }}</td>
                                            <td>
                                                <a href="{{ url('admin/shop/category/'.$cat->id.'/edit') }}" class="btn btn-warning">Sửa</a>
                                                <a href="{{ url('admin/shop/category/'.$cat->id.'/delete ') }}" class="btn btn-danger">Xóa</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $cats->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
