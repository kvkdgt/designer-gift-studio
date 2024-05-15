<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin | Designer Gift Studio</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    
    .login-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        width: 300px;
    }
    
    .login-container h2 {
        text-align: center;
        margin-bottom: 20px;
    }
    
    .login-container input[type="text"],
    .login-container input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    
    .login-container input[type="submit"] {
        width: 100%;
        padding: 10px;
        border: none;
        background-color: #0c2957;
        color: white;
        border-radius: 4px;
        cursor: pointer;
    }
    
    .login-container input[type="submit"]:hover {
        background-color: #385b92;
    }
    .logo {
        width:90%
    }
    .logo-class {
        display: flex;
        justify-content: center;
        width: 100%;
    }
    .error-msg {
        background-color:red;
        color: white;
        padding: 15px 10px;
        font-weight: 500;
    }
    
    @media (max-width: 400px) {
        .login-container {
            width: 90%;
        }
    }
</style>
</head>
<body>

<div class="login-container">
    <div class="logo-class">
    <img class="logo" src="{{ URL::asset('imgs/logo.png'); }}" alt="">
    </div>
    <h2>Admin Login</h2>
<?php
if (session()->has('error')) {
?>
<div class="error-msg">
{{session()->get('error')}}

</div>
<br>
<?php
session()->flush();
}
?>
    <form action="{{ route('loginCheck') }}" method="post">
        @csrf
        <input type="text" name="email" placeholder="email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
    </form>
</div>

</body>
</html>
