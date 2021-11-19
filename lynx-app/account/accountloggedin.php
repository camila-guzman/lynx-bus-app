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
            $_SESSION["username"] = $usernamevar;  
            echo "i got to here"; 
           
            $sql = sprintf("SELECT username, firstname, lastname, password FROM users WHERE username = $usernamevar");
            $result = mysqli_query($sql);
            echo "i got to here as well";

            while ($row = mysql_fetch_assoc($result)) {
                echo $row['username'];
                echo $row['firstname'];
                echo $row['lastname'];
                echo $row['password'];
            }
            echo "wow here to huh";
            global $connection;
        // close connection
        mysqli_close($connection);
            ?>
        </div>  
    </div>