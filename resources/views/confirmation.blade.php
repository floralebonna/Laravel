<?php
    session_start();

    if (!isset($_SESSION["login"])){
        header("Location: login.php");
        exit;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Konfirmasi</title>
    <link rel="stylesheet" href="styleconfirmationsss.css">
</head>
<body>
    <div class="home">
        <a href="halamanKaryawan.php"><button><img src="home.png" width=33></button></a>
    </div>

    <div class="search">
        <form method="GET" action="">
            <input type="text" name="cari" placeholder="Search">
        </form>
    </div>

    <table align="center" border="1">
        <br>
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Addres</th>
                <th>Date</th>
                <th>Time</th>
                <th>Description</th>
            </tr>
        </thead>

        <?php
            include "config.php";
            $no=1;

            if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
                $query = mysqli_query($conn, "SELECT * FROM informasi_pemesanan INNER JOIN 
                pelanggan ON informasi_pemesanan.ID_Pelanggan = pelanggan.ID_Pelanggan INNER JOIN 
                booking ON informasi_pemesanan.ID_Booking = booking.ID_Booking WHERE 
                Name LIKE '%". $_GET['cari']."%'");

        ?>
            <center><a href="confirmation.php"><button class="button button2" type="submit" name="back">Back</button></a></center>
        <?php
            }else{
                $query = mysqli_query($conn, "SELECT * FROM informasi_pemesanan INNER JOIN 
                pelanggan ON informasi_pemesanan.ID_Pelanggan = pelanggan.ID_Pelanggan INNER JOIN 
                booking ON informasi_pemesanan.ID_Booking = booking.ID_Booking");
            }

            while ($data = mysqli_fetch_array($query)){
            ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?= $data ['Name'] ?></td>
            <td><?= $data ['Phone_number'] ?></td>
            <td><?= $data ['Address'] ?></td>
            <td><?php echo date('d-m-Y', strtotime($data["Date"])); ?></td>
            <td><?= $data ['Time'] ?></td>
            <td align="center">
                <a href="yourOrderPay.php?ID_Pemesanan=<?=$data ['ID_Pemesanan']?>"><img src="open.png" width=50></a>
                <a href="delete.php?ID_Pemesanan=<?=$data ['ID_Pemesanan']?>" onclick ="return confirm('Yakin Hapus Data ?');"><img src="delete.jpeg" width=50></a>                
            </td> 
        </tr>
    <?php } ?>
    </table>
</body>
</html>
    

