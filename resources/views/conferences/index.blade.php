<!DOCTYPE html>
<html>
<head>
    <title>Conferences</title>
</head>
<body>
    <h1>Conferences</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Conference Name</th>
                <th>Conference Logo</th>
                <th>SuperBowl Titles</th>
            </tr>
        </thead>
        <tbody>
            @foreach($conferences as $conference)
            <tr>
                <td>{{ $conference->name }}</td>
                <td><img src="{{ $conference->logo }}" alt="{{ $conference->name }} Logo" width="100"></td> <!-- Assuming logo is an image URL -->
                <td>{{ $conference->superbowl_titles }}</td> <!-- Assuming superbowl_titles is a column in the conferences table -->
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
