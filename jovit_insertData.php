<?php

include "jovit_connection.php";

if(isset($_POST['saveData']))
{
    $firstname= $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $gender = $_POST['gender'];
    $birthdate = $_POST['birthDate'];
    $address = $_POST['address'];
    $department = $_POST['departmentId'];

    $query = "INSERT INTO tbl_jovit2(`firstName`,`lastName`,`gender`,`birthDate`,`address`,`departmentId`) 
              VALUES ('$firstname','$lastname','$gender','$birthdate','$address','department')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: jovit_index.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>