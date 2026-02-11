@extends('layout.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Quản lý Danh mục</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
          <li class="breadcrumb-item active">Danh mục</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Danh sách Danh mục</h3>
          <div class="card-tools">
            <a href="{{ route('categories.create') }}" class="btn btn-primary btn-sm">
              <i class="fas fa-plus"></i> Thêm mới
            </a>
          </div>
        </div>
        <div class="card-body">
          @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ $message }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif

          @if ($categories->count() > 0)
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th style="width: 50px">#</th>
                  <th>Tên danh mục</th>
                  <th>Mô tả</th>
                  <th>Danh mục cha</th>
                  <th style="width: 100px">Trạng thái</th>
                  <th style="width: 150px">Thao tác</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($categories as $key => $category)
                  <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ Str::limit($category->description, 50) }}</td>
                    <td>
                      @if ($category->parent_id)
                        {{ App\Models\Category::find($category->parent_id)->name ?? 'N/A' }}
                      @else
                        <span class="badge badge-secondary">Không có</span>
                      @endif
                    </td>
                    <td>
                      @if ($category->is_active)
                        <span class="badge badge-success">Kích hoạt</span>
                      @else
                        <span class="badge badge-danger">Vô hiệu</span>
                      @endif
                    </td>
                    <td>
                      <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">
                        <i class="fas fa-edit"></i>
                      </a>
                      <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">
                          <i class="fas fa-trash"></i>
                        </button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          @else
            <div class="alert alert-info">Không có danh mục nào.</div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.content -->
@endsection
