<!DOCTYPE html>
<html>
<head>
    <title>Divisions</title>
</head>
<body>
    <h1>Divisions</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Division Name</th>
                <th>SuperBowl Titles</th>
            </tr>
        </thead>
        <tbody>
            @foreach($divisions as $division)
            <tr>
                <td>{{ $division->name }}</td>
                <td>{{ $division->superbowl_titles }}</td> <!-- Assuming superbowl_titles is a column in the divisions table -->
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
