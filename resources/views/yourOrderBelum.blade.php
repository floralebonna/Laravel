<html>

<head>
    <title>Belum Order</title>
    <link rel="stylesheet" href={{ asset('css/styleyourorder.css') }}>
</head>

<body>
    <div class="order-form">
        <h1 align="center">Your Order</h1><br><br>
        <form action="" method="POST">
            <table align="center">
                @foreach ($data as $data)
                    <tr>
                        <td colspan="3" align="center">
                            <p> Momaflovi Laundry </p>
                        </td>
                    </tr>
                    <tr>
                        <td>Name </td>
                        <td>:</td>
                        <td>{{ $data->Name }}</td>
                    </tr>
                    <tr>
                        <td>Address </td>
                        <td>:</td>
                        <td>{{ $data->alamat }}</td>
                    </tr>
                    <tr>
                        <td>Booking </td>
                        <td>:</td>
                        <td>{{ \Carbon\Carbon::parse($data->date)->format('d M Y') }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>{{ $data->time }}</td>
                    </tr>
                    <tr>
                        <td>Total </td>
                        <td>:</td>
                        <td>@convert($data->Price)</td>
                    </tr>
                    <tr>
                        <td>Description </td>
                        <td>:</td>
                        <td>
                            <h4>Belum Lunas</h4>
                        </td>
                    </tr>
                @endforeach
            </table>
        </form>
    </div>
</body>

</html>
