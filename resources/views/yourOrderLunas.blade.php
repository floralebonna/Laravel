<html>
    <head>
        <title>Lunas Order</title>
        <link rel="stylesheet" href="styleorderlunas.css">
    </head>
    <body>
        <div class="order-form">
            <h1 align="center">Your Order</h1><br><br>
            <form action="buttonKaryawan.php" method="POST">
                <table align="center">
                    <?php
                        if(isset($_GET['ID_Pemesanan'])){
                            $idp =$_GET['ID_Pemesanan'];
                        }
                        else {
                            die ("Error. No ID Selected!");    
                        }
                        include "config.php";
                        $query    =mysqli_query($conn, "SELECT * FROM informasi_pemesanan INNER JOIN 
                        pelanggan ON informasi_pemesanan.ID_Pelanggan = pelanggan.ID_Pelanggan INNER JOIN 
                        booking ON informasi_pemesanan.ID_Booking = booking.ID_Booking WHERE ID_Pemesanan='$idp'");
                        while ( $data     = mysqli_fetch_array($query )){
                    ?>

                    <tr>
                        <td colspan="3" align="center"><p> Momaflovi Laundry </p></td>
                    </tr>

                    <tr>
                        <td>
                            <input type="hidden" name="ID_Pelanggan" value="<?php echo $data['ID_Pelanggan'] ?>" >
                        </td> 
                    </tr>

                    <tr>
                        <td>
                            <input type="hidden" name="ID_Booking" value="<?php echo $data['ID_Booking'] ?>" >
                        </td> 
                    </tr>

                    <tr>
                        <td>
                            <input type="hidden" name="ID_Pemesanan" value="<?php echo $data['ID_Pemesanan'] ?>" >
                        </td> 
                    </tr>

                    <tr>
                        <td>Name </td>
                        <td>:</td>
                        <td>
                            <input type="" name="Name" value="<?php echo $data['Name'] ?>">
                        </td> 
                    </tr>

                    <tr>
                        <td>Phone Number </td>
                        <td>:</td>
                        <td>
                            <input type="" name="Phone_number" value="<?php echo $data['Phone_number'] ?>">
                        </td> 
                    </tr>

                    <tr>
                        <td>Address </td>
                        <td>:</td>
                        <td>
                            <input type="" name="Address" value="<?php echo $data['Address'] ?>">
                        </td> 
                    </tr>

                    <tr>
                        <td>Booking </td>
                        <td>:</td>
                        <td>
                            <input type="" name="Date" value="<?php echo $data['Date'] ?>">
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="" name="Time" value="<?php echo $data['Time'] ?>">
                        </td>
                    </tr>

                    <tr>
                        <td>Total </td>
                        <td>:</td>
                        <td>
                            <input type="" name="Price" value="<?php echo $data['Price'] ?>">
                        </td> 
                    </tr>

                    <tr>
                        <td>Description </td>
                        <td>:</td>
                        <td><h5>Lunas</h5></td> 
                    </tr>
                    <?php } ?>
                </table>
                    <tr>
                        <center><td colspan="3" align="center"><a href="buttonKaryawan.php?ID_Pemesanan=<?=$data['ID_Pemesanan']?>">
                        <button type="submit" name="pay">OK</button></a></td>
                    </tr>
            </form>
        </div>
    </body>
</html>