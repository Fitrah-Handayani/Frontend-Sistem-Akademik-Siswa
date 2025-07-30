<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MyAkademisReport</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
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
            width: 100%;
            max-width: 400px;
            padding: 40px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .login-container h2 {
            text-align: center;
            color: #333;
            margin-bottom: 10px;
        }

        .login-container h3 {
            text-align: center;
            color: #333;
            font-weight: 600;
            margin-bottom: 30px;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            font-weight: 500;
        }

        select, input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        .btn-login {
            width: 100%;
            margin-top: 25px;
            padding: 10px;
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

        .icon-label::before {
            content: "👤 ";
        }

        .icon-lock::before {
            content: "🔒 ";
        }

        .icon-role::before {
            content: "⚙️ ";
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Masuk ke</h2>
        <h3>MyAkademisReport</h3>

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <label class="icon-role">Saya adalah:</label>
            <select name="role" required>
                <option value="">Pilih peran</option>
                <option value="siswa">Siswa</option>
                <option value="guru">Guru</option>
                <option value="admin">Admin</option>
            </select>

            <label class="icon-label">Nama Pengguna:</label>
            <input type="text" name="username" placeholder="Masukkan nama pengguna" required>

            <label class="icon-lock">Kata Sandi:</label>
            <input type="password" name="password" placeholder="Masukkan kata sandi" required>

            <button type="submit" class="btn-login">🔓 Masuk</button>
        </form>
    </div>
</body>
</html>
