<html>

<head>
    <title>Order Form</title>
    <link rel="stylesheet" href={{ asset('css/styleformOrder.css') }}>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {
            var d = new Date().toISOString();
            var minDate = d.substring(0, 11) + "00:00";
            console.log(minDate);

            $(".datetimepicker").attr({
                "value": minDate,
                "min": minDate,
            });
        });
    </script>
</head>

<body>
    <div class="order-form">
        <form action="/formOrder" method="POST" id="mycool">
            @csrf
            <h1 align="center">Order Form</h1><br><br>
            <p>Name &emsp;&emsp;&emsp;&emsp;&ensp;: &emsp;<input type="text" name="Name" id="Name"
                    placeholder="Name"></p>
            <p>Phone Number &ensp;&ensp;: &emsp;<input type="text" name="Phone_number" id="Phone_number"
                    placeholder="Phone Number" maxlength="14"></p>
            <p>Address &emsp;&emsp;&emsp;&ensp;: &emsp;<input type="text" name="Address"
                    id="Address"placeholder="Address"></p>
            <p>Booking &emsp;&emsp;&emsp;&ensp;:
                <br>
            <h5>Date</h5><input type="datetime-local" name="date" id="Date" class="form-control datetimepicker">
            <h5>Time</h5>
            <select name="time" id="Time">Time
                @foreach ($jam as $j)
                    <option value="{{ $j }}">{{ $j }}</option>
                @endforeach
            </select>
            </p>
            <center><button type="submit" name="submit">Submit</button>
                <a href="/dashboard">Cancel</a>
            </center>
        </form>
    </div>

</body>

</html>
