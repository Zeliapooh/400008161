<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="..\..\css\style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <title>Document</title>
</head>

<body>

  <main id="landingMain">

    <div class="container">
      <div class="row">
        <div class="col-sm-12 landingText">
          <h1>Tizelia's User Management System </h1>
          <div class="row">
            <div class="col-sm-12 landingPage">
              <p class="welcomeMessage">The number one User Management System website</p>
              <div class=" logoRow">
                <img class="landingLogo" src="..\..\css\Logo.png" class=" col-sm-12" alt="Logo" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="space"></div>
      <div class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-3">    
          <form>     
           <button type="submit" formaction="LoginView.php" class="btn btn-warning ">Login</button>
</form>
          <!-- <p><a href="LoginView.php"> Login </a></p> -->
</div>
        <div class="col-sm-3">
        <form>     

        <button type="submit" formaction="RegistrationView.php" class="btn btn-warning ">Register</button>
</form>     

        </div>
        <div class="col-sm-3"></div>
      </div>
    </div>

  </main>
</body>

</html>