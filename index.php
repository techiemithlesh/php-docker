<?php

$connect = mysqli_connect(
    'db',  // Service name
    'php_docker', // Username
    'password', // Password
    'php_docker' // Database name
);

// Check the connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

$table_name = "php_docker_table"; 

// SQL query to select all data from the table
$query = "SELECT * FROM $table_name";

$response = mysqli_query($connect, $query);

if ($response) {
    echo "<strong>Data from $table_name</strong><br>";

    // Fetch and display the data
    while ($row = mysqli_fetch_assoc($response)) {
        echo "<p>Name: " . $row['name'] . "</p>";
        echo "<p>Email: " . $row['email'] . "</p><br>";
    }
} else {
    echo "Error: " . mysqli_error($connect);
}

// Close the connection
mysqli_close($connect);

?>
