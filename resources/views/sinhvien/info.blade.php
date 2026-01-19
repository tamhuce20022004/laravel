<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông tin sinh viên</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 20px;
        }
        .container {
            background: white;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            max-width: 500px;
            width: 100%;
        }
        h1 {
            text-align: center;
            color: #667eea;
            margin-bottom: 30px;
        }
        .info-group {
            margin-bottom: 25px;
        }
        .label {
            font-weight: 600;
            color: #333;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .value {
            font-size: 18px;
            color: #666;
            margin-top: 8px;
            padding: 12px;
            background: #f5f5f5;
            border-left: 4px solid #667eea;
            padding-left: 15px;
            border-radius: 4px;
        }
        .back-link {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 30px;
            background: #667eea;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }
        .back-link:hover {
            background: #764ba2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thông tin sinh viên</h1>

        <div class="info-group">
            <div class="label">Họ và tên</div>
            <div class="value">{{ $name }}</div>
        </div>

        <div class="info-group">
            <div class="label">Mã số sinh viên (MSSV)</div>
            <div class="value">{{ $mssv }}</div>
        </div>

        <a href="{{ url('/') }}" class="back-link">← Về trang chủ</a>
    </div>
</body>
</html>
