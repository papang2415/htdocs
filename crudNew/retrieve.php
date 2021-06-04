<?php
    include_once 'database.php';
    $result = mysqli_query($conn,"SELECT * FROM Employee");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Retrive data</title>
</head>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="style.css">

<style>
table,h1 {
    text-align: center;
    border-radius: 20px;
    border: 2px solid white;
}

td,th {
    transition: transform .75s;
}

td:hover,th:hover {
    background-color: white;
    color: black;
    transform: scale(1.2);
    padding-right: 10px;
    padding-left: 10px;
    border-radius: 20px;
    cursor: pointer;
}
h1 {
    padding: 20px;
    background-color: chocolate;
    width: 100%;

}
</style>

<body>
    <?php
                if (mysqli_num_rows($result) > 0) {
            ?>

    <div class="container">
        <div class="container">
            <h1 class="text-white">User Lists</h1>
        </div>
        <table class="table table-striped table-bordered table-dark" >
            <thead>
                <tr>
                    <th class="bg-primary text-dark">ID No</th>
                    <th class="bg-primary text-dark">First Name</th>
                    <th class="bg-primary text-dark">Middle Name</th>
                    <th class="bg-primary text-dark">Last Name</th>
                    <th class="bg-primary text-dark">Age</th>
                    <th class="bg-primary text-dark">Address</th>
                    <th class="bg-primary text-dark">Gender</th>
                    <th class="bg-primary text-dark">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                            $i=0;
                            while($row = mysqli_fetch_array($result)) {
                        ?>
                <tr>
                    <th><?php echo $row["EmployeeID"]; ?></th>
                    <td><?php echo $row["FirstName"]; ?></td>
                    <td><?php echo $row["MiddleName"]; ?></td>
                    <td><?php echo $row["LastName"]; ?></td>
                    <td><?php echo $row["Age"]; ?></td>
                    <td><?php echo $row["Address"]; ?></td>
                    <td><?php echo $row["Gender"]; ?></td> 
                    <td class="d-flex justify-content-around"><a
                            href="update-process.php?id=<?php echo $row["EmployeeID"];?>"><button
                                class="btn btn-primary">Update</button></a>
                        <a href="delete-process.php?userid=<?php echo $row["EmployeeID"]; ?>"><button
                                class="btn btn-danger">Delete</button></a>
                    </td>

                    <!-- <th><?php echo $row["employeeID"]; ?></th>
                    <td><?php echo $row["firstname"]; ?></td>
                    <td><?php echo $row["middlename"]; ?></td>
                    <td><?php echo $row["lastname"]; ?></td>
                    <td><?php echo $row["age"]; ?></td>
                    <td><?php echo $row["address"]; ?></td>
                    <td><?php echo $row["gender"]; ?></td>
                    <td class="d-flex justify-content-around"><a
                            href="update-process.php?id=<?php echo $row["employeeID"];?>"><button
                                class="btn btn-primary">Update</button></a>
                        <a href="delete-process.php?userid=<?php echo $row["employeeID"]; ?>"><button
                                class="btn btn-danger">Delete</button></a>
                    </td> -->
                </tr>
                <?php
                             $i++;
                            }
                        ?>
            </tbody>
        </table>
        <a href="insert.php"><button class="btn btn-primary">Add New User</button></a>
    </div>
    <?php
                }
                else{
                  echo "";
                }
            ?>
</body>

</html>