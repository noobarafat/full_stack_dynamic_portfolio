<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Portfolio</title>
    <link rel="stylesheet" href="{{ asset('styles/style.css') }}">
    <style>
        .register-container {
            max-width: 400px;
            margin: 60px auto;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 8px 32px rgba(108,99,255,0.10);
            padding: 2.5rem 2rem 2rem 2rem;
        }
        .register-container h2 {
            text-align: center;
            color: #6C63FF;
            margin-bottom: 1.5rem;
            font-weight: 800;
        }
        .register-form label {
            font-weight: 500;
            color: #444;
            margin-bottom: 0.3rem;
            display: block;
        }
        .register-form input {
            width: 100%;
            padding: 0.7rem 1rem;
            border-radius: 10px;
            border: 1px solid #e0e0e0;
            margin-bottom: 1.1rem;
            font-size: 1rem;
            background: #f8f9ff;
            transition: box-shadow 0.2s;
        }
        .register-form input:focus {
            box-shadow: 0 4px 16px rgba(108,99,255,0.18);
            outline: none;
        }
        .register-btn {
            width: 100%;
            background: linear-gradient(90deg, #6C63FF 60%, #8a2be2 100%);
            color: #fff;
            font-size: 1.1rem;
            font-weight: 700;
            border: none;
            border-radius: 30px;
            padding: 0.9rem 0;
            cursor: pointer;
            margin-top: 0.5rem;
            transition: background 0.2s, box-shadow 0.2s;
        }
        .register-btn:hover {
            background: linear-gradient(90deg, #8a2be2 0%, #6C63FF 100%);
            box-shadow: 0 6px 24px rgba(108,99,255,0.15);
        }
        .register-link {
            text-align: center;
            margin-top: 1.2rem;
            font-size: 0.98rem;
        }
        .register-link a {
            color: #6C63FF;
            text-decoration: none;
            font-weight: 600;
        }
        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Create Account</h2>
        <form class="register-form" method="POST" action="{{ route('register') }}">
            @csrf
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required autofocus>

            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <label for="password_confirmation">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>

            <button type="submit" class="register-btn">Register</button>
        </form>
        <div class="register-link">
            Already have an account? <a href="{{ url('/login') }}">Login</a>
        </div>
    </div>
</body>
</html>