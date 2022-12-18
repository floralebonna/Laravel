<html>
    <head>
        <title>Pay Order</title>
        <link rel="stylesheet" href={{ asset("css/styleyourorder.css") }}>
    </head>
    <body>
        <div class="order-form">
            <h1 align="center">Your Order</h1><br><br>
            <form action="/lunas/{{ $id }}" method="POST">
                @csrf
                <table align="center">
                    @foreach ($data as $data)
                    <tr>
                        <td colspan="3" align="center"><p> Momaflovi Laundry </p></td>
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
                        <td><h4>Belum Lunas</h4></td>
                    </tr>
                </table>
                    <tr>
                        <center><td colspan="3" align="center">
                            <a href="/lunas/{{ $id }}"><input type="button" name="pay" value="Pay"/></a>
                            <a href="/konfirmasi"><input type="button" name="cancel" value="Cancel"/></a>
                        </td></center>
                    </tr>
            </form>
        </div>
    </body>
</html>
