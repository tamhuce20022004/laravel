<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách sản phẩm</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
        .btn-add { padding: 10px 20px; background: #28a745; color: white; text-decoration: none; border-radius: 4px; }
        .btn-add:hover { background: #218838; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background: #f8f9fa; font-weight: 600; }
        tr:hover { background: #f5f5f5; }
        .product-id { color: #666; font-size: 0.9em; }
    </style>
</head>
<body>
    <div class="header">
        <h1>Danh sách sản phẩm</h1>
        <a href="{{ route('product.add') }}" class="btn-add">+ Thêm mới sản phẩm</a>
    </div>

    @if($products->count() > 0)
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Tồn kho</th>
                <th>Mô tả</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td class="product-id">{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ number_format($product->price, 0, ',', '.') }}₫</td>
                <td>{{ $product->stock }}</td>
                <td>{{ Str::limit($product->description, 50) }}</td>
                <td>
                    @if($product->is_active)
                        <span style="color: green; font-weight: 600;">✓ Đang bán</span>
                    @else
                        <span style="color: red; font-weight: 600;">✗ Ngừng bán</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('product.show', $product->id) }}" style="color: #007bff; text-decoration: none;">Chi tiết</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div style="text-align: center; padding: 40px; color: #999;">
        <p>Không có sản phẩm nào trong database</p>
    </div>
    @endif

</body>
</html>