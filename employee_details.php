<?php
    $id = $_POST['id'];
    $name = $_POST['name'];

    $conn = new mysqli('localhost', 'root', '', 'company');

    if($conn->connect_error)
    {
        die("Connection Failed : ".$conn->connect_error);
    }
    else
    {
        $stmt = $conn->prepare("insert into employee(em_id, em_name) values(?,?)");
        $stmt->bind_param("is", $id, $name);
        $stmt->execute();
        echo"Employee Registered Succesfully...";
        $stmt->close();
        $conn->close();
    }
?>