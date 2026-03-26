<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container">
        <h1 class="text-center pt-5 pb-3">Train table</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Train number</th>
                    <th scope="col">Company</th>
                    <th scope="col">Departure station</th>
                    <th scope="col">Arrival station</th>
                    <th scope="col">Departure time</th>
                    <th scope="col">Arrival time</th>
                    <th scope="col">Delayed</th>
                    <th scope="col">Cancelled</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr
                        class="{{ $train->is_delayed ? 'table-warning' : ($train->is_cancelled ? 'table-danger' : 'table-success') }}">
                        <th scope="row">{{ $train->code }}</th>
                        <td>{{ $train->company }}</td>
                        <td>{{ $train->departure_station }}</td>
                        <td>{{ $train->arrival_station }}</td>
                        <td>{{ $train->departure_time }}</td>
                        <td>{{ $train->arrival_time }}</td>
                        <td>{{ $train->isDelayed() }}</td>
                        <td>{{ $train->isCancelled() }}</td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</body>

</html>
