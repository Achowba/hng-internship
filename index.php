<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "hng";

// Create connection to database
$connect = mysqli_connect($servername, $username, $password, $db);

// Check connection status
if (!$connect) {
    die ("Connection Failed: " . mysqli_connect_error());
}

// Retrieve from database
$sql = 'SELECT id, firstname, dateadded FROM test';
$query = mysqli_query($connect, $sql);

?>

<!doctype html>
<html>
<head>
    <title>Hotels NG | First Task</title>
</head>
<body>
<h3>Hotels NG First Task by Atauba Prince M.</h3>
<?php

echo '<table>
        <thead>
            <tr>
                <th>S/N</th>
                <th>NAME</th>               
                <th>DATE ADDED</th>
            </tr>
        </thead>
        <tbody>
      ';

while ($row = mysqli_fetch_array($query)) {
    echo '
    <tr>
        <td>' . $row['id'] . '</td>
        <td>' . $row['firstname'] . '</td>
        <td>' . $row['dateadded'], '</td>            
    </tr>';
}
echo '
    </tbody>
</table>';
?>
</body>
</html>