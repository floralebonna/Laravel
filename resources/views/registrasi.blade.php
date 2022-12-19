<html>

<head>
    <title>Register Form</title>
    <link rel="stylesheet" href={{ asset('css/styleregistrasi.css') }}>
    <style>
        body {
            background: url('img/gambar.png') no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="Register-form">
        <h1 align="center">REGISTER</h1>
        <form action="/registrasi" method="POST">
            @csrf
            <br>
            <br>
            <p>Full Name&emsp;&emsp;&nbsp;:&ensp;
                <input type="text" name="name" id="name" placeholder="Full Name">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </p>
            <p>Email &emsp;&emsp;&emsp;&emsp;:&nbsp;
                <input type="email" name="email" id="email" placeholder="Email">
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </p>
            <p>Phone Number&ensp;:&ensp;
                <input type="text" name="Phone_Number" id="Phone_Number" placeholder="Phone Number" maxlength="14">
                @error('Phone_Number')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </p>
            <p>Username&emsp;&emsp;&nbsp;:&ensp;
                <input type="text" name="Username" id="Username" placeholder="Username">
                @error('Username')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </p>
            <p>Password &emsp;&emsp;&nbsp;:&ensp;<input type="password" name="password" id="Password"
                    placeholder="Password" maxlength="8"></p>
                    @error('password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            <p>Confirm&emsp;&emsp;&emsp;&nbsp;:&ensp;<input type="password" name="password_confirmation"
                    id="conpass"placeholder="Confirm Password" maxlength="8">
                    @error('password_confirmation')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            <p>

                <br>
                <br>
                <center><button type="submit" name="register">Register</button></center>
                <br>
                <center>
                    <h6>Already have an account ?<a href="/login">Login</a></h6>
                </center>
        </form>
    </div>
</body>

</html>
