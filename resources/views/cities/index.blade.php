<!DOCTYPE html>
<html>
<head>
    <title>Cities</title>
</head>
<body>
    <h1>Cities</h1>
    <table border="1">
        <thead>
            <tr>
                <th>State</th>
                <th>Division</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cities as $city)
            <tr>
                <td>{{ $city->state }}</td>
                <td>{{ $city->division->name }}</td> <!-- Assuming division has a 'name' attribute -->
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
