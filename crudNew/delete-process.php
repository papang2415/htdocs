<?php
    // include_once 'database.php';
    // $sql = "DELETE FROM info WHERE id='" . $_GET["userid"] . "'";
    // if (mysqli_query($conn, $sql)) {
    //     header ("location: retrieve.php");
    // } else {
    //     echo "Error deleting record: " . mysqli_error($conn);
    // }
    // mysqli_close($conn);

    include_once 'database.php';
    $sql = "DELETE FROM employee WHERE EmployeeID='" . $_GET["userid"] . "'";
    if (mysqli_query($conn, $sql)) {
        header ("location: retrieve.php");
        // echo $sql;
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>