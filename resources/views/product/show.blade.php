<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $product->name }}</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background: #f5f5f5; }
        .container { max-width: 800px; margin: 0 auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .back-link { color: #007bff; text-decoration: none; margin-bottom: 20px; display: inline-block; }
        .back-link:hover { text-decoration: underline; }
        h1 { color: #333; margin-bottom: 20px; }
        .product-detail { margin: 20px 0; }
        .product-detail label { font-weight: 600; color: #666; display: block; margin-top: 15px; margin-bottom: 5px; }
        .product-detail .value { color: #333; padding: 10px; background: #f9f9f9; border-left: 3px solid #007bff; padding-left: 15px; }
        .price { font-size: 1.5em; color: #28a745; font-weight: bold; }
        .status { padding: 5px 10px; border-radius: 4px; display: inline-block; }
        .status.active { background: #d4edda; color: #155724; }
        .status.inactive { background: #f8d7da; color: #721c24; }
        .btn-back { padding: 10px 20px; background: #6c757d; color: white; text-decoration: none; border-radius: 4px; display: inline-block; margin-top: 20px; }
        .btn-back:hover { background: #5a6268; }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ route('product.index') }}" class="back-link">← Quay lại danh sách</a>
        
        <h1>{{ $product->name }}</h1>
        
        <div class="product-detail">
            <label>ID:</label>
            <div class="value">#{{ $product->id }}</div>
        </div>

        <div class="product-detail">
            <label>Slug:</label>
            <div class="value">{{ $product->slug }}</div>
        </div>

        <div class="product-detail">
            <label>Giá:</label>
            <div class="value price">{{ number_format($product->price, 0, ',', '.') }}₫</div>
        </div>

        <div class="product-detail">
            <label>Tồn kho:</label>
            <div class="value">{{ $product->stock }} sản phẩm</div>
        </div>

        <div class="product-detail">
            <label>Mô tả:</label>
            <div class="value">{{ $product->description ?? 'Không có mô tả' }}</div>
        </div>

        <div class="product-detail">
            <label>Trạng thái:</label>
            <div class="value">
                <span class="status {{ $product->is_active ? 'active' : 'inactive' }}">
                    @if($product->is_active)
                        ✓ Đang bán
                    @else
                        ✗ Ngừng bán
                    @endif
                </span>
            </div>
        </div>

        <div class="product-detail">
            <label>Ngày tạo:</label>
            <div class="value">{{ $product->created_at->format('d/m/Y H:i:s') }}</div>
        </div>

        <div class="product-detail">
            <label>Cập nhật lần cuối:</label>
            <div class="value">{{ $product->updated_at->format('d/m/Y H:i:s') }}</div>
        </div>

        <a href="{{ route('product.index') }}" class="btn-back">← Quay lại</a>
    </div>
</body>
</html>
