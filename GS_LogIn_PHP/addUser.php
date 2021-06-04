<?php
    require_once('store.php');

    $store->addUser();
    $users = $store->getUsers();

    foreach($users as $user) {
        echo $user['first_name']." ".$user['last_name']." - ".$user['email']."<br/>";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP Store | Add User</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="form-container">
            <form method="post">
                <div class="form-input">
                    <label for="">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="form-input">
                    <label for="">Password</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="form-input">
                    <label for="">First Name</label>
                    <input type="text" name="first_name" id="first_name">
                </div>
                <div class="form-input">
                    <label for="">Last Name</label>
                    <input type="text" name="last_name" id="last_name">
                </div>
                <button class="btn btn-primary" type="submit" name="add">Sign Up</button>
            </form>
        </div>
    </div>
    
</body>

</html>