
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background: linear-gradient(120deg, #6C63FF 0%, #8a2be2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Arial, sans-serif;
        }
        .login-container {
            background: rgba(255,255,255,0.95);
            padding: 2.5rem 2rem 2rem 2rem;
            border-radius: 18px;
            box-shadow: 0 8px 32px rgba(108,99,255,0.13);
            width: 100%;
            max-width: 350px;
            text-align: center;
        }
        .login-container h2 {
            color: #6C63FF;
            margin-bottom: 1.5rem;
            font-weight: 800;
            letter-spacing: -1px;
        }
        .login-container input[type="email"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 0.9rem 1rem;
            margin-bottom: 1.1rem;
            border: none;
            border-radius: 10px;
            background: #f3f4fa;
            font-size: 1rem;
            color: #333;
            box-shadow: 0 2px 8px rgba(108,99,255,0.07);
            outline: none;
            transition: box-shadow 0.2s;
        }
        .login-container input[type="email"]:focus,
        .login-container input[type="password"]:focus {
            box-shadow: 0 4px 16px rgba(108,99,255,0.18);
        }
        .login-container button {
            width: 100%;
            padding: 0.9rem;
            background: linear-gradient(90deg, #6C63FF 60%, #8a2be2 100%);
            color: #fff;
            border: none;
            border-radius: 10px;
            font-size: 1.1rem;
            font-weight: 700;
            cursor: pointer;
            transition: background 0.2s, box-shadow 0.2s;
            box-shadow: 0 2px 12px rgba(108,99,255,0.10);
        }
        .login-container button:hover {
            background: linear-gradient(90deg, #8a2be2 0%, #6C63FF 100%);
            box-shadow: 0 6px 24px rgba(108,99,255,0.15);
        }
        .login-container .login-footer {
            margin-top: 1.2rem;
            font-size: 0.98rem;
        }
        .login-container .login-footer a {
            color: #6C63FF;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.2s;
        }
        .login-container .login-footer a:hover {
            color: #8a2be2;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="{{ url('/login') }}" method="POST" autocomplete="off">
            @csrf
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Sign In</button>
        </form>
        <div class="login-footer">
            Don't have an account? <a href="#">Register</a>
        </div>
    </div>
</body>
</html>