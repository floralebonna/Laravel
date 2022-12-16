<!DOCTYPE html>
<html>
<head>
    <title>Rekapitulation</title>
    <link rel="stylesheet" href="stylerecapitulation.css">
</head>
<body>
    <h1 align="center">Data Rekapitulation</h1>
    <form action="recapitulation.php" method="GET">
        <center><input type="date" name="tglawal"> to
        <input type="date" name="tglakhir">
        <input type="submit" value="Search"></center>
    </form><br>
    
    <table align="center" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Addres</th>
                <th>Date</th>
                <th>Time</th>
                <th>Price</th>
            </tr>
        </thead>

        <?php
            include "config.php";
            $no=1;
            $total = 0;
            if(isset($_GET['tglawal'])) {
                $tglawal = $_GET['tglawal'];
                $tglakhir = $_GET['tglakhir'];
                $query = $query = mysqli_query($conn, "SELECT * FROM rekapitulasi WHERE Date  between 
                '".$tglawal."' and '".$tglakhir."' order by ID");
            }else{
                $query = mysqli_query($conn, "SELECT * FROM rekapitulasi");
            }
            while ($data = mysqli_fetch_array($query)){
                $total += $data['Price'];
            ?>
        <tr>
            <td align="center"><?php echo $no++ ?></td>
            <td><?= $data ['Name'] ?></td>
            <td align="center"><?= $data ['Phone_number'] ?></td>
            <td><?= $data ['Address'] ?></td>
            <td align="center"><?php echo date('d-m-Y', strtotime($data["Date"])); ?></td>
            <td align="center"><?= $data ['Time'] ?></td>
            <td align="center"><?= $data ['Price'] ?></td>
        </tr>
        
        <?php } ?>
        
        <?php
            $query1 = mysqli_query($conn, "SELECT SUM(Price) AS Jumlah FROM rekapitulasi");
            while ($data1 = mysqli_fetch_array($query1)){
        ?>

        <tr>
            <td colspan="6" align="center">Total Income</td>
            <td align="center"><?= $total ?></td>
        </tr>

        <?php } ?>
    </table>
    <center><a href="print.php"><button class="button button2" type="submit" name="print">Print &#128424;</button></a>
    <a href="halamanKaryawan.php"><button class="button button2" type="submit" name="back">Back</button></a></center>
</body>
</html>
    

