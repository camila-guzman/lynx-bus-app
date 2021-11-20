<div class = "container">
        <div class ="col">
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
                
            
                }
            }
          

            }
            
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(empty(trim($_POST["passwordnew"]))){
            $password_err = "Please enter a password.";     
        } elseif(strlen(trim($_POST["passwordnew"])) < 6){
            $password_err = "Password must have atleast 6 characters.";
        } else{
            $passwordnew = trim($_POST["passwordnew"]);
        }
        
        // Validate confirm password
        if(empty(trim($_POST["confirm_password"]))){
            $confirm_password_err = "Please confirm password.";     
        } else{
            $confirm_password = trim($_POST["confirm_password"]);
            if(empty($password_err) && ($passwordnew != $confirm_password)){
                $confirm_password_err = "Password did not match.";
            }
        }

        if(empty($confirm_password_err)&& empty($password_err)){

        $sql = "UPDATE users  SET password = '$param_password' WHERE username = '$username'";
         
        if($stmt = mysqli_prepare($connection, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_password);
            
            
            // Set parameters
            $param_password = password_hash($passwordnew, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: ../account.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.2";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }

        }
        mysqli_close($connection);
    }

    ?>

        </div>  

        <div class="container light-style flex-grow-1 container-p-y">

   
        <h4 class="font-weight-bold py-3 mb-4">
      Account Information
    </h4>
    <div class="card overflow-hidden">
        
      <div class="row no-gutters row-bordered row-border-light">
    
        <div class="col-md-9">
          <div class="tab-content">
            <div class="tab-pane fade active show" id="account-general">

              <hr class="border-light m-0">

              <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>" readonly>
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div> 
            <div class="form-group">
                <label>First Name</label>
                <input type="text" name="firstname" class="form-control <?php echo (!empty($firstname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $firstname; ?>" readonly>
                <span class="invalid-feedback"><?php echo $firstname_err; ?></span>
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="lastname" class="form-control <?php echo (!empty($lastname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $lastname; ?>" readonly>
                <span class="invalid-feedback"><?php echo $lastname_err; ?></span>
            </div>   
            <div class="form-group">
                <label>New Password</label>
                <input type="password" name="passwordnew" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $passwordnew; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>

            <div class="form-group">
                <label>Repeat New Password</label>
                <input type="password" name="password_confirm" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>

               

            </div>
            
          </div>
        </div>
      </div>
    </div>

    <div class="text-right mt-3">
      <button type="button" class="btn btn-primary">Save changes</button>&nbsp;
      <button type="button" class="btn btn-default">Cancel</button>
    </div>

  </div>
    </div>