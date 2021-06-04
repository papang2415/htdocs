<?php
    require_once('store.php');

    $store->addUser();
    $users = $store->getUsers();

    foreach($users as $user) {
        echo "<p class='text-success'>".$user['first_name']." ".$user['last_name']." - ".$user['email']."<br/>";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP Store | Add User</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<style>
body {
    background-image: url('https://getwallpapers.com/wallpaper/full/e/3/e/151787.jpg');
    background-size: inherit;
    background-repeat: no-repeat;

}

#login {
    -webkit-perspective: 1000px;
    -moz-perspective: 1000px;
    perspective: 1000px;
    margin-top: 50px;
    margin-left: 30%;
}

.login {
    font-family: 'Josefin Sans', sans-serif;
    -webkit-transition: .3s;
    -moz-transition: .3s;
    transition: .3s;
    -webkit-transform: rotateY(40deg);
    -moz-transform: rotateY(40deg);
    transform: rotateY(40deg);
}

.login:hover {
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    transform: rotate(0);
}

.login article {}

.login .form-group {
    margin-bottom: 17px;
}

.login .form-control,
.login .btn {
    border-radius: 0;
}

.login .btn {
    text-transform: uppercase;
    letter-spacing: 3px;
}

.input-group-addon {
    border-radius: 0;
    color: #fff;
    background: #f3aa0c;
    border: #f3aa0c;
}

.forgot {
    font-size: 16px;
}

.forgot a {
    color: #333;
}

.forgot a:hover {
    color: #5cb85c;
}

#inner-wrapper,
#contact-us .contact-form,
#contact-us .our-address {
    color: #1d1d1d;
    font-size: 19px;
    line-height: 1.7em;
    font-weight: 300;
    padding: 50px;
    background: #fff;
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    margin-bottom: 100px;
}

.input-group-addon {
    border-radius: 0;
    border-top-right-radius: 0px;
    border-bottom-right-radius: 0px;
    color: #fff;
    background: #f3aa0c;
    border: #f3aa0c;
    border-right-color: rgb(243, 170, 12);
    border-right-style: none;
    border-right-width: medium;
}
</style>

<body>
    <div class="col-md-4 col-md-offset-4" id="login">
        <section id="inner-wrapper" class="login">
            <article>
                <form method="post">
                    <div class="form-group">
                    <h2>Sign In</h2>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"> </i></span>
                            <input class="form-control" type="email" name="email" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"> </i></span>
                            <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input class="form-control" type="text" name="first_name" id="first_name" placeholder="First Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"> </i></span>
                            <input class="form-control" type="text" name="last_name" id="last_name" placeholder="Last Names">
                        </div>
                    </div>
                    <button type="submit" name="add" class="btn btn-success btn-block">Submit</button>
                </form>
            </article>
        </section>
    </div>
</body>

</html>