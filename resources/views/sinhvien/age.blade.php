<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nhập Tuổi</title>
</head>
<body>
    <h2>Nhập thông tin tuổi</h2>

    @if(session('success'))
        <div style="color: green; margin-bottom: 10px;">
            {{ session('success') }} (Tuổi trong session: {{ session('tuoi_da_luu') }})
        </div>
    @endif

    <form action="{{ route('age.store') }}" method="POST">
        @csrf <label for="age">Nhập tuổi của bạn:</label>
        <input type="number" name="age" id="age" placeholder="Ví dụ: 20" required>
        
        <button type="submit">Lưu vào Session</button>
    </form>
</body>
</html>