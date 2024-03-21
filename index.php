<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: 'Times new roman', sans-serif;
            background-color: #f1f1f1; /* Warna latar belakang */
            color: #333; /* Warna teks */
            text-align: center;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-container {
            width: 300px;
            background-color: #fff; /* Warna latar belakang */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 0 auto;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .login-btn {
            background-color: #3498db; /* Warna tombol login */
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        .login-btn:hover {
            background-color: #2980b9; /* Warna tombol login saat dihover */
        }

        .remember-me {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 5px;
        }

        a {
            color: #27ae60; /* Warna teks hyperlink */
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .error-message {
            color: #e74c3c; /* Warna pesan kesalahan */
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="proses-login.php" method="post" onsubmit="return validateForm()">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            
            <div class="remember-me">
                <label>
                    <input type="checkbox" name="remember"> Ingat Saya
                </label>
            </div>
            
            <button type="submit" class="login-btn">Login</button>
        </form>
    </div>
</body>
</html>