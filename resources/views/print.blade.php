<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rekapitulation Laundry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>

</head>

<body onload="window.print()">
    <div class="panel panel-default">
        <div class=" panel-body">
            <div class="row">
                <div class="col-md-2">
                    <img src={{ asset("img/Logo.png") }} class="img-responsive pull-left" style="max-height:130px;display:inline">
                </div>

                <div class="col-md-8">
                    <font size="6"><b>
                            <p class="text-center">Laundry Self Service</p>
                    </font>
                    <font size="10" face="Vivaldi"><b>
                            <p class="text-center">Momaflovi</p>
                    </font>
                    <font size="2" face="Arial"><b>
                            <p class="text-center">Jl. Paingan, Krodan, Maguwoharjo, Kec. Depok, Kabupaten Sleman,
                                Daerah Istimewa Yogyakarta 55281</p>
                    </font>
                </div>

                <style type="text/css">
                    hr.style2 {
                        border-top: 3px double #8c8b8b;
                    }
                </style>
            </div>
        </div>

        <hr class="style2">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr class="bg-primary">
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Addres</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
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
            </tbody>
        </table>
</body>

</html>
