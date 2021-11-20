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
           
            global $connection;
        // close connection
        mysqli_close($connection);
            ?>

            
        </div>  

        <div class="container light-style flex-grow-1 container-p-y">

   
        <h4 class="font-weight-bold py-3 mb-4">
      <h1 class="display-4 my-2">Account Information</h1>
    </h4>
    <div class="card overflow-hidden">
        
      <div class="row no-gutters row-bordered row-border-light">
    
        <div class="col-md-9">
          <div class="tab-content">
            <div class="tab-pane fade active show" id="account-general">

              <hr class="border-light m-0">

              <div class="card-body">
                <div class="form-group">
                  <label class="form-label">Username</label>
                  <input type="text" class="form-control mb-1" value="<?php echo $username1;?>" readonly>
                </div>
                <div class="form-group">
                  <label class="form-label">First Name</label>
                  <input type="text" class="form-control" value="<?php echo $firstname;?>" readonly>
                </div>
                <div class="form-group">
                  <label class="form-label">Last Name</label>
                  <input type="text" class="form-control mb-1" value="<?php echo $lastname;?>" readonly>
        </div>
                <div class="form-group">
                    <p> Coming soon contact Lynx via Email to reset password! </p>
                  <label class="form-label">Current password</label>
                  <input type="password" class="form-control" readonly>
                </div>
                <div class="form-group">
                  <label class="form-label">New password</label>
                  <input type="password" class="form-control"readonly>
                </div>

                <div class="form-group">
                  <label class="form-label">Repeat new password</label>
                  <input type="password" class="form-control"readonly>
              </div>

            </div>
            
          </div>
        </div>
      </div>
    </div>

    <div class="text-right mt-3">
            <form action= "./home.php">
      <button type="submit" class="btn btn-primary">Save changes</button>&nbsp;
        </form>
    </div>

  </div>
    </div>