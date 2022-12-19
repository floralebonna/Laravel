<html>

<head>
    <title>Lunas Order</title>
    <link rel="stylesheet" href={{ asset("css/styleorderlunas.css") }}>
</head>

<body>
    <div class="order-form">
        <h1 align="center">Your Order</h1><br><br>
        <form action="/konfirmasi" method="POST">
            @csrf
            <table align="center">
                @foreach ($data as $data)
                    <tr>
                        <td colspan="3" align="center">
                            <p> Momaflovi Laundry </p>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="hidden" name="ID_Pelanggan" value="{{ $data->idPelanggan }}">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="hidden" name="ID_Booking" value="{{ $data->idBooking }}">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="hidden" name="ID_Pemesanan" value="{{ $id }}">
                        </td>
                    </tr>

                    <tr>
                        <td>Name </td>
                        <td>:</td>
                        <td>{{ $data->Name }}</td>
                    </tr>

                    <tr>
                        <td>Phone Number </td>
                        <td>:</td>
                        <td>{{ $data->Phone_number }}</td>
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
                @endforeach

                <tr>
                    <td>Description </td>
                    <td>:</td>
                    <td>
                        <h5>Lunas</h5>
                    </td>
                </tr>
            </table>
            <tr>
                <center>
                    <td colspan="3" align="center"><a
                            href="/konfirmasi">
                            <button type="submit" name="pay">OK</button></a></td>
            </tr>
        </form>
    </div>
</body>

</html>
