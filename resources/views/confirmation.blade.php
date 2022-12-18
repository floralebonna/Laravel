<!DOCTYPE html>
<html>

<head>
    <title>Konfirmasi</title>
    <link rel="stylesheet" href={{ asset('css/styleconfirmationsss.css') }}>
    <style>
        body {
            background-image: url('img/gambar.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
    </style>
</head>

<body>
    <div class="home">
        <a href="/dashboard"><button><img src={{ asset('img/home.png') }} width=33></button></a>
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
        @foreach ($data as $d)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $d->Name }}</td>
                <td>{{ $d->Phone_number }}</td>
                <td>{{ $d->alamat }}</td>
                <td>{{ \Carbon\Carbon::parse($d->date)->format('d M Y') }}</td>
                <td>{{ $d->time }}</td>
                <td align="center">
                    <a href="/pay/{{ $d->id }}"><img src={{ asset('img/open.png') }}
                            width=50></a>
                    <a href="/konfirmasi/{{ $d->id }}" onclick="return confirm('Yakin Hapus Data ?');"><img
                            src={{ asset('img/delete.jpeg') }} width=50></a>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
