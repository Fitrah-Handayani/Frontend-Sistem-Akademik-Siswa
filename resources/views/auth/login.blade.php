<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MyAkademisReport</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
        }
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #236BFE, #7B42F6);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: #fff;
            border-radius: 10px;
            padding: 40px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 10px;
            color: #333;
        }
        .login-container h3 {
            text-align: center;
            color: #333;
            font-weight: 600;
            margin-bottom: 30px;
        }
        label {
            font-weight: 500;
            margin-top: 15px;
            display: block;
        }
        select, input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        .btn-login {
            width: 100%;
            margin-top: 25px;
            padding: 12px;
            background-color: #1E90FF;
            border: none;
            color: white;
            font-weight: bold;
            border-radius: 6px;
            cursor: pointer;
        }
        .btn-login:hover {
            background-color: #187bcd;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Masuk ke</h2>
        <h3>MyAkademisReport</h3>
        <form action="{{ route('login.submit') }}" method="POST">
            @csrf
            <label for="role">Saya adalah:</label>
            <select name="role" id="role" required>
                <option value="">-- Pilih peran --</option>
                <option value="siswa">Siswa</option>
                <option value="guru">Guru</option>
                <option value="walikelas">Wali Kelas</option>
                <option value="orangtua">Orang Tua</option>
                <option value="admin">Admin</option>
            </select>

            <label for="username">Nama Pengguna:</label>
            <input type="text" id="username" name="username" placeholder="Masukkan nama pengguna" required>

            <label for="password">Kata Sandi:</label>
            <input type="password" id="password" name="password" placeholder="Masukkan kata sandi" required>

            <button type="submit" class="btn-login">🔐 Masuk</button>
        </form>
    </div>
</body>
</html>
