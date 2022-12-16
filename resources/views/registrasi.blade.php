<?php
include 'cekregistrasi.php';

if(isset($_POST["register"])){
    if(registrasi($_POST)>0){
        echo"<script>
                alert('Registrasi Berhasil!');
                document.location.href = 'login.php';
            </script>
        ";
    }else{
        echo mysqli_error($conn);
    }
}
?>
<html>
<head>
    <title>Register Form</title>
    <link rel="stylesheet" href="styleregistrasi.css">
</head>
<body>
<div class="Register-form">
        <h1 align="center">REGISTER</h1>
        <form action="" method="POST">
            <br>
            <br>
            <p>Full Name&emsp;&emsp;&nbsp;:&ensp;
                <input type="text" name="Name" id="Name"placeholder="Full Name"></p>
            <p>Email &emsp;&emsp;&emsp;&emsp;:&nbsp;
                <input type="email" name="Email" id="Email" placeholder="Email"></p>
            <p>Phone Number&ensp;:&ensp;
                <input type="text" name="Phone_number" id="Phone_number" placeholder="Phone Number" maxlength="14"></p>
            <p>Username&emsp;&emsp;&nbsp;:&ensp;
                <input type="text" name="Username" id="Username" placeholder="Username"></p>
            <p>Password &emsp;&emsp;&nbsp;:&ensp;<input type="password" name="Password" id="Password" placeholder="Password" maxlength="8"></p>
            <p>Confirm&emsp;&emsp;&emsp;&nbsp;:&ensp;<input type="password" name="conpass" id="conpass"placeholder="Confirm Password" maxlength="8"><p>

            <br>
            <br>
            <center><button type="submit" name="register">Register</button></center>
            <br>
            <center><h6>Already have an account ?<a href="login.php">Login</a></h6></center>
        </form>
    </div>
</body>
</html>