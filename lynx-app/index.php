<?php
session_start();
//Followed a tutorial on how to sign up using database and php converted it to work with our database and added firstname and lastname variables 
 //tutorial can be found here https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php

 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ./home.php");
    exit;
}
//file that has the opendatabase function in it 

include('./functions/functions.php');
//opens the database name is connection
openDatabase();

//define variables 
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($connection, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: ./home.php");
                        } else{
                            // Password is not valid, display a generic error message
                            echo "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    echo "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($connection);
}

if (isset($_SESSION["loggedin"])) {
            include './templates/headerloggedin.php';
        } else { 
            include './templates/headerloggedout.php';
        }
        
?>

<img class="my-4 mx-auto d-block" src="./assets/images/lynx.png" alt="" >
<h1 class="display-4 my-2">Login</h1>
<p>Please fill in your credentials to login.</p>


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="log-in-form">
    <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" class="form-control ">
    </div>    
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="form-group">
        <input type="submit" class="w-100 btn btn-lg btn-primary" value="Login">
    </div>
</form>

</br>
<form action="./signup.php">
    <button class="btn btn-primary" type="submit">Sign Up</button>
    </form>
    <form action="./home.php">
    </br>
    <button class="btn btn-secondary" type="submit">Continue As Guest</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2017–2021</p>
</form>

<!--include the footer-->
<?php include('templates/footer.php'); ?>