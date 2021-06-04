
<?php 
include './../include/server.php';
include './../include/header.php';
?>


<div class="container w-25 bg-secondary p-2 mt-5 rounded">
    <div class="card">
        <div class="card-header text-center"><b>Log In</b></div>
        <form action="./../include/server.php" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label for="email"><b>Email</b></label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email Address">
                </div>
                <div class="form-group">
                    <label for="password"><b>Password</b></label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="••••••••••••••">
                </div>
            </div>
            <div class="card-footer">
                <button name="login" class= "btn btn-block btn-outline-primary">Continue</button>
            </div>
            <center><p>Doesn't have an account? <a href="./../index.php">Register</a></p></center>
        </form>
    </div>
</div>