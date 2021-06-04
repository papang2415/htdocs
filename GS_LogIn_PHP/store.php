<?php
    class Store {
        private $server = "mysql:host=localhost;dbname=crud";
        private $user = "root";
        private $pass = "";
        private $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        );
        protected $connection;

        public function openConnection() {
            try {

                $this->connection = new PDO(
                    $this->server,
                    $this->user,
                    $this->pass,
                    $this->options
                );
                return $this->connection;

            } catch(PDOException $error) {
                echo "Error connection: ".$error->getMessage();
                
            } //end try-catch

        } //end function openConnection

        public function closeConnection() {

            $this->connection = null;

        }//end function closeConnection

        public function getUsers() {

            $connection = $this->openConnection();
            $statement = $connection->prepare("SELECT * FROM GS_users");
            $statement->execute();
            $users = $statement->fetchAll();
            $userCount = $statement->rowCount();

            if($userCount > 0) {
                return $users;
            } else {
                return 0;

            } //end if-else

        } //end function getUsers

        public function login() {

            if(isset($_POST['submit'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];

                $connection = $this->openConnection();
                $statement = $connection->prepare(
                    "SELECT * FROM GS_users WHERE email = ? AND password = ?"

                );
                $statement ->execute([$username,$password]);
                $user = $statement->fetch();
                $total = $statement->rowCount();

                if($total > 0) {

                    // echo "<h1 class='text-success'>Welcome ".$user['first_name']." ".$user['last_name']."!!!!"."</h1>";
                    // header('Location:addUser.php');
                    header('Location:signup.php');

                } else {

                    echo "<h1 class='text-danger'>Login failed!</h1>";
                } //end if_else

            } //end if isset

        } //end function login

        public function addUser() {

            if(isset($_POST['add'])) {

                $email = $_POST['email'];
                $password = $_POST['password'];
                $fname = $_POST['first_name'];
                $lname = $_POST['last_name'];

                if($this->checkUserExist($email) == 0) {

                    $connection = $this->openConnection();
                    $statement = $connection->prepare(
                        "INSERT INTO GS_users(email,password,first_name,last_name) VALUES(?,?,?,?)"
                    );
                    
                    $statement->execute([$email,$password,$fname,$lname]);
                    $total = $statement->rowCount();

                    echo "<h1 class='text-success'>Created Successfully</h1>";

                } else {

                    echo "<h1 class='text-danger'>User already Exist!!</h1>";

                } //end if else checkUserExist

            } //end if else

        } //end function assUser


        public function checkUserExist($email) {

            $connection = $this->openConnection();
            $statement = $connection->prepare(
                "SELECT * FROM GS_users WHERE email = ?"
            );
            $statement ->execute([$email]);
            $total = $statement->rowCount();

            return $total;

        } //end function checkUserExist
            
    }//end class Store

$store = new Store();

?>