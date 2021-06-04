<?php
    include_once 'database.php';
	if(count($_POST)>0) {
		$fname = $_POST['first_name'];
		$mname = $_POST['middle_name'];
		$lname = $_POST['last_name'];
		$age = $_POST['age'];
		$address = $_POST['address'];
		$gender = $_POST['gender'];

		mysqli_query($conn,"UPDATE employee SET FirstName ='{$fname}', MiddleName = '{$mname}', LastName = '{$lname}', Age = '{$age}',
		Address = '{$address}', Gender = '{$gender}'
		WHERE EmployeeID =" . $_POST['id']);
		header("location: retrieve.php");
    } 
    $result = mysqli_query($conn, "SELECT * FROM employee WHERE EmployeeID = '". $_GET['id'] . "'");

    $row = mysqli_fetch_array($result);

?>
<html>

<head>
    <title>Update User's Data</title>

</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">

<body>
    <div class="container h-100">
        <div class="row justify-content-center">
            <div class="col-10 col-md-8 col-lg-6">
                <form id="form" class="h-80 p-10 mb-2 bg-secondary text-white" method="POST">
                    <h4 class="text-success bg-dark">Update User's Info</h4>
                    <hr>
                    <div>
                        <?php if(isset($message)) { echo $message; } ?>
                    </div>
                    <div class="row justify-align-center">
                        <div class="col-6">
                            <label class="text-success" for="validationServer01">First name</label>
                            <input type="hidden" name="id" value="<?php echo $row['EmployeeID']; ?>">
                            <input type="text" class="form-control bg-dark text-white" name="first_name"
                                value="<?php echo $row['FirstName']; ?>">
                        </div>
                        <div class="col-6">
                            <label class="text-success" for="validationServer02">Middle Name</label>
                            <input type="text" class="form-control bg-dark text-white" name="middle_name"
                                value="<?php echo $row['MiddleName']; ?>" required>
                        </div>
                        <div class="col-6">
                            <label class="text-success" for="validationServer02">Last name</label>
                            <input type="text" class="form-control bg-dark text-white" name="last_name"
                                value="<?php echo $row['LastName']; ?>">
                        </div>
                        <div class="col-6">
                            <label class="text-success" for="validationServer03">Age</label>
                            <input type="text" class="form-control bg-dark text-white" name="age"
                                value="<?php echo $row['Age']; ?>">
                        </div>
                        <div class="col-6">
                            <label class="text-success" for="validationServer04">Address</label>
                            <input type="text" name="address" class="form-control bg-dark text-white"
                                value="<?php echo $row['Address']; ?>">
                        </div>
                        <div class="col-6">
                            <label class="text-success" for="validationServer04">Gender</label>
                            <input type="text" name="gender" class="form-control bg-dark text-white"
                                value="<?php echo $row['Gender']; ?>">
                        </div>
                    </div>
                    <hr>
                    <p>Nothing to Change? <a class="text-white" href="retrieve.php">View Users</a></p>
                    <button class="btn btn-info" type="submit" name="submit" class="buttom">Update User</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>