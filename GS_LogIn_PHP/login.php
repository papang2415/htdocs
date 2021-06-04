<?php
    require_once('store.php');

    $store->login();

  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP Store | Log In</title>
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
</head>
<style>
body {
    /* background-image: url('https://getwallpapers.com/wallpaper/full/1/c/f/393303.jpg    ');
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%; */
}
</style>

<body>
    <div class="container">
        <div class="form-container">
            <form method="post">
                <div class="form-input">
                    <label for="">Username</label>
                    <input type="email" name="username" id="username">
                </div>
                <div class="form-input">
                    <label for="">Password</label>
                    <input type="password" name="password" id="password">
                </div>
                <button class="btn btn-primary" type="submit" name="submit">Login</button>
            </form>
        </div>
    </div>
</body>

</html>