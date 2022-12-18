<!DOCTYPE html>
<html>

<head>
    <title>Rekapitulation</title>
    <link rel="stylesheet" href={{ asset("css/stylerecapitulation.css") }}>
</head>

<body>
    <h1 align="center">Data Rekapitulation</h1>
    <form action="/rekap" method="post">
        @csrf
        <center><input type="date" name="tglawal"> to
            <input type="date" name="tglakhir">
            <input type="submit" value="Search">
        </center>
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
        @foreach ($data as $d)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $d->Name }}</td>
                <td>{{ $d->Phone_number }}</td>
                <td>{{ $d->alamat }}</td>
                <td>{{ \Carbon\Carbon::parse($d->date)->format('d M Y') }}</td>
                <td>{{ $d->time }}</td>
                {{-- <td align="center">{{ $loop->iteration }}</td>
            <td>{{ $data['Name'] }}</td>
            <td align="center">{{ $data['Phone_number'] }}</td>
            <td>{{ $data['Address'] }}</td>
            <td align="center">{{ date('d-m-Y', strtotime($data['Date'])); }}</td>
            <td align="center">{{ $data['Time'] }}</td> --}}
                <td align="center">{{ $d->Price }}</td>
            </tr>
        @endforeach
        @foreach ($total as $t)
        <tr>
            <td colspan="6" align="center">Total Income</td>
            <td align="center">{{ $t->sum }}</td>
        </tr>
        @endforeach
    </table>
    <center><a href="/print"><button class="button button2" type="submit" name="print">Print
                &#128424;</button></a>
        <a href="/dashboard"><button class="button button2" type="submit" name="back">Back</button></a>
    </center>
</body>

</html>
