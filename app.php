<?php

function connect_to_database()
{
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'php_catalyst';
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die('Connection failed: ' . mysqli_connect_error());
    }
    return $conn;
}

// / the first row is the header row with the column names[name,surname,email] so trying to skip it.
function read_csv_file_and_remove_first_row($file_name)
{
    if (!file_exists($file_name)) {
        echo "File $file_name does not exist";
        exit(1);
    }
    $csv_file = fopen($file_name, 'r');
    $data = [];
    
}






if (empty($argv[1])) {
    echo "Please provide a file name. \n";
    exit(1); // Graceful Shutdown
} else {
    connect_to_database();
    read_csv_file_and_remove_first_row($argv[1]);
}
