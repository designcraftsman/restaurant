<?php
if (!isset($_POST['name']) || !isset($_POST['phone']) || !isset($_POST['email']) || !isset($_POST['seats']) || !isset($_POST['date']) || !isset($_POST['time']) || !isset($_POST['request'])) {
    echo('Please make sure to complete the form.');
} else {
    try {
        // Establish a database connection (replace with your actual database configuration)
        $db = new PDO('mysql:host=localhost;dbname=users', 'root', 'root');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $seats = $_POST['seats'];
        $date = $_POST['date']; 
        $time = $_POST['time'];
        $request = $_POST['request'];

        // Prepare the SQL query using placeholders
        $sqlQuery = 'INSERT INTO reservedTables (name ,phone ,email ,seats ,date ,time ,request) VALUES (:name,:phone,:email,:seats,:date,:time,:request)';
        $insertData = $db->prepare($sqlQuery);
        $insertData->execute([
            'name' => $email,
            'phone' => $phone,
            'email' => $email,
            'seats' => $seats,
            'date' => $date,
            'time' =>$time,
            'request'=> $request,
        ]);
    } catch (PDOException $e) {
        echo 'An error occurred: ' . $e->getMessage();
    }
}
?>