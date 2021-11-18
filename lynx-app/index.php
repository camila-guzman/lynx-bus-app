<!DOCTYPE html>
<html>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="./css/main.css" />
<style>
    .spacer{
        height: 300px;
    }
    .btn-primary{
        background-color: #d60c8c;
        border-color: #d60c8c;
    }
    .btn-primary:hover{
        background-color: #ce5ba4;
        border-color: #ce5ba4;
    }
    </style>
<body class="text-center">
    <div class="spacer">
</div>
    <main class="form-signin">
      <form action="/functions/formverification.php" method="post">
        <img class="mb-4" src="./assets/images/lynx.png" alt="" >
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    
        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
    
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember Me
          </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign In</button>
    
      </form>
     
    </main>
</br>
    
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
    
    <form action="./home.php">
    </br>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Continue As Guest</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
  </form>
      </body>
</html>