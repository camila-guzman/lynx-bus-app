<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width initial-scale=1.0" />
  <title>Lynx Bus App</title>
   
  <!--stylesheet-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />

  <link rel="stylesheet" href="./css/main.css" />
    
</head>
<body>

  <div class="container-fluid">
    <nav class="navbar navbar-light bg-light" aria-label="First navbar example">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="search-icon">
          <a href="./search.php" >
            <i class="fas fa-search fa-2x"></i>
          </a>
        </div>
        <a class="navbar-brand" href="#"></a>

        <div class="collapse navbar-collapse" id="navbarsExample01">
          <ul class="navbar-nav me-auto mb-2">
            <li class="nav-item">
              <a class="nav-link"  href="../home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../routes.php">Routes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../tripplanner.php">Trip Planner</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="../buspasses.php">Bus Passes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Account.php">Account</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Settings</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown01">
              <li><a class="dropdown-item" href="../settings/language.php">Language</a></li>
              <li><a class="dropdown-item" href="../settings/accessibility.php">Accessibility</a></li>
              <li><a class="dropdown-item" href="../settings/paymentsettings.php">Payment Settings</a></li>
              <li><a class="dropdown-item" href="../settings/help.php">Help</a></li>
            </ul>
          </li>
          </ul>
          <form>
            <input class="form-control" type="text" placeholder="Search" aria-label="Search">
          </form>
        </div>

      <nav class="navbar fixed-bottom navbar-light bg-light justify-content-center">
        <a href="./home.php" class="d-flex my-3 me-md-auto link-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#Icon_metro-home"/></svg>
        </a>
      </nav>
    </div>
  </nav>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>