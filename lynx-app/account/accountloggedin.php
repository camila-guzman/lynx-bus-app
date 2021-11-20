<div class = "container">
        <div class ="col">
            <h1> Account </h2>
        </div>
        <div class = "col">
            <?php
            session_start();
            $id = $username = $firstname = $lastname = $password = "";
            global $connection;
            // open connection to database
            $connection = mysqli_connect("localhost", "jo889461", "!Throwaway123", "jo889461");
            if (!$connection){
                echo "<p> not connecting</p>";
            }
            else {
                $username = $_SESSION['username'];
                echo $username;
            $sql = "SELECT id, username, firstname, lastname, password FROM users WHERE username = '$username'";

            $result = mysqli_query($connection, $sql);
            if ($result === FALSE) {
                echo "<p>FALSE</p>";
                echo mysqli_error($result);
            }else{

                while ($finishedmaybe = mysqli_fetch_assoc($result)){
                    $id = $finishedmaybe['id'];
                    $username1 = $finishedmaybe['username'];
                    $firstname = $finishedmaybe['firstname'];
                    $lastname = $finishedmaybe['lastname'];
                    $password = $finishedmaybe['password'];
                     echo $username1;
                     echo $firstname;
                     echo $lastname;
                     echo $password;
                     echo $id;
            
                }
            }
          

            }
           
            echo "wow here to huh";
            global $connection;
        // close connection
        mysqli_close($connection);
            ?>
        </div>  
    </div>