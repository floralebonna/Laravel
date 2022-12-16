<!DOCTYPE html>
<html>
<head>
    <title>Orderan</title>
    <link rel="stylesheet" href="styleorderan.css">
</head>
<body>
    <h1 align="center">List Orderan</h1>
    <form action="">
        <div class="search">
            <form method="GET" action="">
                <input type="text" name="cari" placeholder="Search">
            </form>
        </div>

        <table align="center" border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Addres</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Action</th>
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
                }else{
                    $query = mysqli_query($conn, "SELECT * FROM informasi_pemesanan INNER JOIN 
                    pelanggan ON informasi_pemesanan.ID_Pelanggan = pelanggan.ID_Pelanggan INNER JOIN 
                    booking ON informasi_pemesanan.ID_Booking = booking.ID_Booking");
                }
                while ($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td align="center"><?php echo $no++ ?></td>
                <td><?php echo $data['Name'] ?></td>
                <td><?php echo $data['Address'] ?></td>
                <td align="center"><?php echo date('d-m-Y', strtotime($data["Date"])); ?></td>
                <td align="center"><?php echo $data['Time'] ?></td>
                <td align="center">
                    <a href="yourOrderBelum.php?Name=<?=$data ['Name']?>"><button>Open</button></a>            
                </td>
            </tr>
            <?php } ?>
        </table>
        <center><a href="halamanPelanggan.php"><button class="button button2" type="submit" name="back">Back</button></a></center>
    </form>
</body>
</html>
    

