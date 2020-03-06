<h1>Hello World!</h1>

<?php


$username = 'root';
$password = 'root';
$dbname = 'firstdb';

try {
    $conn = new PDO("mysql:host=localhost; dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connected successfully<br>';

    echo '<table border="1">';

    $stmt = $conn->query('SELECT * from khachhang WHERE doanhso > 0');

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr><td>". $row['makh'] ."</td><td>". $row['diachi']. "</td></tr>"; 
    }

    echo '</table>';
}

catch(PDOException $e)
    {
    echo $sql . 'Error!!!!<br>' . $e->getMessage();
    }

$conn = null;
?>