<html>
    <head>
        <title>Save Order</title>
        <link rel="stylesheet" href="stylesaveorders.css">
    </head>
    <body>
        <div class="order-form">
            <h1 align="center">Your Order</h1><br><br>
            <form action="edit.php" method="POST">
                <div class="form-group">
                    <table align="center">
                        <?php 
                            include "config.php";
                            $sql = $conn->query("SELECT * FROM pelanggan ORDER BY ID_Pelanggan DESC LIMIT 1");
                            while ( $data     = mysqli_fetch_array($sql)){
                        ?>

                        <tr>
                            <td colspan="3" align="center"><p>Momaflovi Laundry</p></td>
                        </tr>

                        <tr>
                            <td>
                                <input type="hidden" name="ID_Pelanggan" value="<?php echo $data['ID_Pelanggan'] ?>" >
                            </td> 
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

                        <?php } ?>

                        <?php 
                        $query = $conn->query("SELECT * FROM booking ORDER BY ID_Booking DESC LIMIT 1");
                        while ( $data     = mysqli_fetch_array($query)){
                    ?>

                    <tr>
                        <td>ID Booking</td>
                        <td>:</td>
                        <td>
                            <input type="text" name ="ID_Booking" value="<?php echo $data['ID_Booking'] ?>">
                        </td> 
                    </tr>

                    <tr>
                        <td>Date</td>
                        <td>:</td>
                        <td><?php echo date('d-m-Y', strtotime($data["Date"]));  ?></td>
                    </tr>

                    <tr>
                        <td>Time</td>
                        <td>:</td>
                        <td><?php echo $data['Time'] ?></td> 
                    </tr>

                    <?php } ?>
                </table>
            </div>
                <tr>
                    <center><td colspan="3" align="center">
                        <button type="submit" name ="save">Save</button>
                        <button type="submit" name ="edit">Edit</button>
                    </td></center>
                </tr>       
            </form>
        </div>
    </body>
</html>