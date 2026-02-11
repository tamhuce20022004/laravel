@extends('layout.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Thêm mới Danh mục</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
          <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Danh mục</a></li>
          <li class="breadcrumb-item active">Thêm mới</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Thêm mới Danh mục</h3>
        </div>
        <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            @if ($errors->any())
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Lỗi!</strong>
                <ul class="mb-0">
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif

            <div class="form-group">
              <label for="name">Tên danh mục <span class="text-danger">*</span></label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nhập tên danh mục" value="{{ old('name') }}" required>
              @error('name')
                <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>

            <div class="form-group">
              <label for="description">Mô tả</label>
              <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4" placeholder="Nhập mô tả danh mục">{{ old('description') }}</textarea>
              @error('description')
                <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>

            <div class="form-group">
              <label for="image">Hình ảnh</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                  <label class="custom-file-label" for="image">Chọn tệp hình ảnh</label>
                </div>
              </div>
              @error('image')
                <span class="invalid-feedback" style="display: block;">{{ $message }}</span>
              @enderror
            </div>

            <div class="form-group">
              <label for="parent_id">Danh mục cha</label>
              <select class="form-control @error('parent_id') is-invalid @enderror" id="parent_id" name="parent_id">
                <option value="">-- Không chọn --</option>
                @foreach (\App\Models\Category::where('is_delete', 0)->get() as $parent)
                  <option value="{{ $parent->id }}" {{ old('parent_id') == $parent->id ? 'selected' : '' }}>{{ $parent->name }}</option>
                @endforeach
              </select>
              @error('parent_id')
                <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>

            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1" checked>
                <label class="custom-control-label" for="is_active">Kích hoạt</label>
              </div>
            </div>
          </div>

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm mới</button>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Hủy</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /.content -->

<script>
  bsCustomFileInput.init();
</script>
@endsection
