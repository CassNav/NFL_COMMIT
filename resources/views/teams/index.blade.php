<!DOCTYPE html>
<html>
<head>
    <title>Teams</title>
</head>
<body>
    <h1>Teams</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>City</th>
                <th>Titles</th>
                <th>Logo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teams as $team)
            <tr>
                <td>{{ $team->name }}</td>
                <td>{{ $team->city->name }}</td> <!-- Assuming city has a 'name' attribute -->
                <td>{{ $team->titles }}</td>
                <td><img src="{{ $team->logo }}" alt="{{ $team->name }} Logo" width="100"></td> <!-- Assuming logo is an image URL -->
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
