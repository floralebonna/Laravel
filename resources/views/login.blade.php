<html>

<head>
    <title>Login Form</title>
    <link rel="stylesheet" href={{ asset('css/stylelogin.css') }}>
</head>

<body>
    @if (session()->has('error'))
        <h1>{{ session('error') }}</h1>
    @endif
    <div class="login-form">
        <h1 align="center">LOG IN</h1>
        <form action="/login" method="POST">
            @csrf
            <br>
            <p>Username</p>
            <input type="text" name="Username" id="Username" placeholder="Enter Your Username">
            <p>Password</p>
            <input type="password" name="password" id="Password" placeholder="Enter Your Password">
            <center><button type="submit"name="login">Login</button></center>
            <br>
            <center>
                <h5>Don't have an account ?<a href="/registrasi">Sign In</a></h5>
            </center>
        </form>
    </div>
</body>

</html>
