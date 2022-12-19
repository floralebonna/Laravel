<!DOCTYPE html>
<html>

<head>
    <title>Orderan</title>
    <link rel="stylesheet" href={{ asset('css/styleorderan.css') }}>
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
            @foreach ($data as $d)
                <tr>
                    <td align="center">{{ $loop->iteration }}</td>
                    <td>{{ $d->Name }}</td>
                    <td>{{ $d->alamat }}</td>
                    <td align="center">{{ \Carbon\Carbon::parse($d->date)->format('d M Y') }}</td>
                    <td align="center">{{ $d->time }}</td>
                    <td align="center">
                        <a href="orderan/{{ $d->id }}"><button>Open</button></a>
                    </td>
                </tr>
            @endforeach
        </table>
        <center><a href="/dashboard"><button class="button button2" type="submit"
                    name="back">Back</button></a></center>
    </form>
</body>

</html>
