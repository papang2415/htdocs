<!DOCTYPE html>
<html>

<head>
    <title>Add User</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">

<body>



$firstN = $_GET["fname"];
$middleN = $_GET["mname"];
$lastN = $_GET["lname"];
$age = $_GET["age"];
$address = $_GET["add"];
$gender = $_GET["gender"];
// $passW = $_GET["myPass"];
// $emailE = $_GET["myEmail"];

 $sql = "INSERT INTO employee (FirstName,MiddleName, LastName, Age, Address, Gender)
 VALUES ('".$firstN."', '".$middleN."','".$lastN."','".$age."','".$address."','".$gender."')";

    <div class="container">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <form class="bg-secondary text-white" id="form" method="GET" action="http://192.168.0.16:8081/EncisoArchi/save.php">
                    <h4 class="text-success bg-dark">Create New User</h4>
                    <hr>
                    <div class="row justify-align-center">
                        <div class="col-6">
                            <label class="text-success" for="validationServer01">First name</label>
                            <input type="text" class="form-control bg-dark text-white" name="fname"
                                placeholder="First name.." required>
                        </div>
                        <div class="col-6">
                            <label class="text-success" for="validationServer02">Middle Name</label>
                            <input type="text" class="form-control bg-dark text-white" name="mname"
                                placeholder="Middle name.." required>
                        </div>
                        <div class="col-6">
                            <label class="text-success" for="validationServer02">Last name</label>
                            <input type="text" class="form-control bg-dark text-white" name="lname"
                                placeholder="Last name.." required>
                        </div>
                        <div class="col-6">
                            <label class="text-success" for="validationServer03">Age</label>
                            <input type="text" class="form-control bg-dark text-white" name="age"
                                placeholder="Must be 18 and above" required>
                        </div>
                        <div class="col-6">
                            <label class="text-success" for="validationServer04">Address</label>
                            <input type="text" name="add" class="form-control bg-dark text-white"
                                placeholder="Cebu City" required>
                        </div>
                        <div class="col-6">
                            <label class="text-success" for="validationServer04">Gender</label>
                            <input type="text" name="gender" class="form-control bg-dark text-white"
                                placeholder="Male or Female" required>
                        </div>
                    </div>
                    <hr>
                    <p>Already Registered? <a class="text-white" href="retrieve.php">View Users</a></p>
                    <input type = "hidden" value="<?=$SQLString?>">
                    <button class="btn btn-primary" type="submit" class="input1" name="save">Create User</button>

                </form>
            </div>
        </div>
    </div>
</body>

</html>