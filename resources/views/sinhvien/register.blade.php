<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng Kí</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }
        
        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
            font-size: 28px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 500;
        }
        
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        
        input[type="text"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 5px rgba(102, 126, 234, 0.3);
        }
        
        button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s;
        }
        
        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }
        
        .form-footer {
            text-align: center;
            margin-top: 20px;
            color: #666;
        }
        
        .form-footer a {
            color: #667eea;
            text-decoration: none;
            font-weight: 500;
        }
        
        .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Đăng Ký Tài Khoản</h2>
        <p class="message">Vui lòng điền thông tin để tạo tài khoản mới</p>

        <form action="{{ route('register.store') }}" method="POST">
            @csrf <div class="form-group">
                <label for="username">Tên đăng nhập:</label>
                <input type="text" id="username" name="username" class="form-control" placeholder="Nhập tên đăng nhập" required>
            </div>

            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Nhập mật khẩu" required>
            </div>

            <div class="form-group">
                <label for="repass">Nhập lại mật khẩu:</label>
                <input type="password" id="repass" name="repass" class="form-control" placeholder="Xác nhận mật khẩu" required>
            </div>

            <div class="form-group">
                <label for="mssv">Mã số sinh viên (MSSV):</label>
                <input type="text" id="mssv" name="mssv" class="form-control" placeholder="Ví dụ: B1901234" required>
            </div>

            <div class="form-group">
                <label for="lopmonhoc">Lớp môn học:</label>
                <input type="text" id="lopmonhoc" name="lopmonhoc" class="form-control" placeholder="Ví dụ: CT101-01" required>
            </div>

            <div class="form-group">
                <label>Giới tính:</label>
                <div class="radio-group">
                    <label class="radio-inline">
                        <input type="radio" name="gioitinh" value="Nam" checked> Nam
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="gioitinh" value="Nu"> Nữ
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="gioitinh" value="Khac"> Khác
                    </label>
                </div>
            </div>

            <div class="btn-group">
                <button type="submit" class="btn-primary">Đăng Ký</button>
                <a href="/login" class="btn-secondary">Đã có tài khoản? Đăng nhập</a>
            </div>
        </form>
    </div>
</body>
</html>