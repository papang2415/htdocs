
<?php include './../include/server.php'; ?>

<?php

    $result = $conn->query("SELECT * FROM users WHERE id=" .$_GET['id']);

    if($result->num_rows >0){
        $user = $result->fetch_assoc();
    }else{
        redirectError('./error.php');
    }
?>

<h1>WELCOME <?php echo $user['email']; ?></h1>