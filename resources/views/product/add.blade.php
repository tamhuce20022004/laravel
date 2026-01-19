<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm sản phẩm</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .form-group { margin-bottom: 12px; }
        label { display:block; margin-bottom:6px; font-weight:600; }
        input[type="text"], textarea { width:100%; padding:8px; box-sizing:border-box; }
        .error { color: #c00; font-size:0.9em; }
        .actions { margin-top:14px; }
        .success-message {
            display: none;
            padding: 15px;
            background: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
            border-radius: 4px;
            margin-bottom: 20px;
            font-weight: 600;
        }
        .success-message.show {
            display: block;
        }
    </style>
</head>
<body>
    <h1>Thêm mới sản phẩm</h1>

    <div id="successMessage" class="success-message">
        ✓ Thêm sản phẩm thành công!
    </div>

    <form id="productForm">
        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" name="id" id="id">
        </div>

        <div class="form-group">
            <label for="name">Tên sản phẩm</label>
            <input type="text" name="name" id="name" required>
        </div>

        <div class="form-group">
            <label for="description">Mô tả</label>
            <textarea name="description" id="description" rows="5"></textarea>
        </div>

        <div class="actions">
            <button type="submit">Lưu</button>
            <a href="{{ url('product') }}" style="margin-left:10px;">Hủy</a>
        </div>
    </form>

    <script>
        document.getElementById('productForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Hiện thông báo thành công
            const successMessage = document.getElementById('successMessage');
            successMessage.classList.add('show');
            
            // Reset form
            this.reset();
            
            // Ẩn thông báo sau 3 giây
            setTimeout(() => {
                successMessage.classList.remove('show');
            }, 3000);
        });
    </script>

</body>
</html>