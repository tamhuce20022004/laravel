<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng Kí Thành Công</title>
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
            max-width: 500px;
            text-align: center;
        }
        
        .success-icon {
            width: 80px;
            height: 80px;
            background: #10b981;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 20px;
            font-size: 48px;
        }
        
        h2 {
            color: #333;
            font-size: 28px;
            margin-bottom: 15px;
        }
        
        .message {
            color: #666;
            font-size: 18px;
            margin-bottom: 10px;
        }
        
        .username-display {
            background: #f0f4ff;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
            color: #667eea;
            font-weight: 600;
            font-size: 16px;
        }
        
        .info-text {
            color: #999;
            font-size: 14px;
            margin: 20px 0;
        }
        
        .btn-group {
            display: flex;
            gap: 10px;
            margin-top: 30px;
        }
        
        button, a {
            flex: 1;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: transform 0.2s;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }
        
        .btn-secondary {
            background: #f0f0f0;
            color: #333;
            border: 1px solid #ddd;
        }
        
        .btn-secondary:hover {
            background: #e8e8e8;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="success-icon">✓</div>
        
        <h2>Đăng Kí Thành Công!</h2>
        
        <p class="message">Chúc mừng bạn đã đăng kí tài khoản thành công</p>
        
        <div class="username-display">
            Tài khoản: {{ $username }}
        </div>
        
        <p class="info-text">
            Tài khoản của bạn đã được tạo và sẵn sàng để sử dụng.
        </p>
        
        <div class="btn-group">
            <a href="/login" class="btn-primary">Đăng Nhập Ngay</a>
            <a href="/" class="btn-secondary">Quay Lại Trang Chủ</a>
        </div>
    </div>
</body>
</html>
