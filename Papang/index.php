
<?php 
include './include/server.php';
include './include/header.php';
?>


<div class="container w-25 bg-secondary p-2 mt-5 rounded">
    <div class="card">
        <div class="card-header text-center"><b>PN REGISTER</b></div>
        <form action="./include/server.php" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label for="username"><b>Username</b></label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                </div>
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
                <button name="register" class= "btn btn-block btn-outline-primary">Register</button>
            </div>
            <center><p>Already have an account? <a href="./pages/login.php">Log In</a></p></center>
            
        </form>
    </div>
</div>
    

<?php include './include/footer.php' ?>