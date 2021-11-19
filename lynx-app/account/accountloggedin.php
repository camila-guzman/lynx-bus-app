<div class = "container">
        <div class ="col">
            <h1> Account </h2>
        </div>
        <div class = "col">
            <?php
            global $connection;
            // open connection to database
            $connection = mysqli_connect("localhost", "jo889461", "!Throwaway123", "jo889461");
            if (!$connection){
                echo "<p> not connecting</p>";
            }
            $username = $_SESSION['username'];
            $sql = "SELECT * FROM users WHERE username = $username";
            $result = mysql_query($connection, $sql);
            echo mysqli_error($connection);
            if($result === FALSE){
                echo "<p>FALSE</p>";
                echo mysqli_error($sql);
            }
            while ($users = mysqli_fetch_assoc($result)){
                // helper variables
                $username = $users['username'];
                $firstname = $users['firstname'];
                $lastname = $users['lastname'];
                $password = $users['password'];
                echo  "<h3>" . $username . "</h3><h3>". $firstname . "</h3><h3>". $lastname . "</h3><h3>". $password; "</h3>"
            }
            global $connection;
        // close connection
        mysqli_close($connection);
            ?>
        </div>  
    </div>