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

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Mô tả</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="product-id">001</td>
                <td>Laptop Dell XPS 13</td>
                <td>Laptop cao cấp với màn hình FHD, bộ xử lý Intel Core i7, RAM 16GB</td>
            </tr>
            <tr>
                <td class="product-id">002</td>
                <td>iPhone 15 Pro</td>
                <td>Điện thoại thông minh Apple với camera 48MP, chip A17 Pro, màn hình OLED 6.1 inch</td>
            </tr>
            <tr>
                <td class="product-id">003</td>
                <td>Samsung Galaxy Tab S9</td>
                <td>Máy tính bảng Samsung với màn hình AMOLED 11 inch, chip Snapdragon 8 Gen 2</td>
            </tr>
            <tr>
                <td class="product-id">004</td>
                <td>Sony WH-1000XM5</td>
                <td>Tai nghe chống ồn chủ động với pin 40 giờ, kết nối Bluetooth 5.3</td>
            </tr>
            <tr>
                <td class="product-id">005</td>
                <td>iPad Air 2024</td>
                <td>iPad Air với chip M2, màn hình Liquid Retina 11 inch, hỗ trợ Apple Pencil</td>
            </tr>
        </tbody>
    </table>

</body>
</html>