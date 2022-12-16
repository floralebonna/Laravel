<?php
    if(isset($_GET['ID_Pemesanan'])){
        $name =$_GET['ID_Pemesanan'];
    }
    else {
        die ("Error. No Name Selected!");    
    }
    include "config.php";
    $query    =mysqli_query($conn, "SELECT * FROM informasi_pemesanan INNER JOIN 
    pelanggan ON informasi_pemesanan.ID_Pelanggan = pelanggan.ID_Pelanggan INNER JOIN 
    booking ON informasi_pemesanan.ID_Booking = booking.ID_Booking WHERE ID_Pemesanan='$name'");
    $data     =mysqli_fetch_array($query);
?>

<html>
    <head>
        <title>Pay Order</title>
        <link rel="stylesheet" href="styleyourorder.css">
    </head>
    <body>
        <div class="order-form">
            <h1 align="center">Your Order</h1><br><br>
            <form action="yourOrderLunas.php" method="POST">
                <table align="center">
                    <tr>
                        <td colspan="3" align="center"><p> Momaflovi Laundry </p></td>
                    </tr>

                    <tr>
                        <td>Name </td>
                        <td>:</td>
                        <td><?php echo $data['Name'] ?></td> 
                    </tr>

                    <tr>
                        <td>Phone Number </td>
                        <td>:</td>
                        <td><?php echo $data['Phone_number'] ?></td> 
                    </tr>

                    <tr>
                        <td>Address </td>
                        <td>:</td>
                        <td><?php echo $data['Address'] ?></td> 
                    </tr>

                    <tr>
                        <td>Booking </td>
                        <td>:</td>
                        <td><?php echo date('d-m-Y', strtotime($data["Date"])); ?></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td><?php echo $data['Time'] ?></td>
                    </tr>

                    <tr>
                        <td>Total </td>
                        <td>:</td>
                        <td><?php echo $data['Price'] ?></td> 
                    </tr>

                    <tr>
                        <td>Description </td>
                        <td>:</td>
                        <td><h4>Belum Lunas</h4></td> 
                    </tr>
                </table>
                    <tr>
                        <center><td colspan="3" align="center">
                            <a href="yourOrderLunas.php?ID_Pemesanan=<?=$data ['ID_Pemesanan']?>"><input type="button" name="pay" value="Pay"/></a>
                            <a href="confirmation.php?ID_Pemesanan=<?=$data ['ID_Pemesanan']?>"><input type="button" name="cancel" value="Cancel"/></a>
                        </td></center>
                    </tr>
            </form>
        </div>
    </body>
</html>