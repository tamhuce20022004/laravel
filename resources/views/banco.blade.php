<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bàn cờ vua {{ $n }}x{{ $n }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 20px;
        }
        .container {
            text-align: center;
        }
        h1 {
            color: white;
            margin-bottom: 30px;
        }
        .board {
            display: inline-grid;
            grid-template-columns: repeat({{ $n }}, 1fr);
            gap: 0;
            border: 3px solid #333;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }
        .square {
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            font-size: 12px;
        }
        .white {
            background-color: #f0d9b5;
        }
        .black {
            background-color: #b58863;
        }
        .back-link {
            display: inline-block;
            margin-top: 30px;
            padding: 12px 30px;
            background: white;
            color: #667eea;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
        }
        .back-link:hover {
            background: #f0f0f0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bàn cờ vua {{ $n }}x{{ $n }}</h1>

        <div class="board">
            @for ($i = 0; $i < $n; $i++)
                @for ($j = 0; $j < $n; $j++)
                    @php
                        $isWhite = ($i + $j) % 2 == 0;
                    @endphp
                    <div class="square {{ $isWhite ? 'white' : 'black' }}">
                        {{ chr(65 + $j) }}{{ $i + 1 }}
                    </div>
                @endfor
            @endfor
        </div>

        <a href="{{ url('/') }}" class="back-link">← Về trang chủ</a>
    </div>
</body>
</html>
