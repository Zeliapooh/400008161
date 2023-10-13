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
  <title>Registration Page</title>
</head>

<body>

  <main>

    <div class="container">
      <div class="row">
        <form class="col-sm-6" method="post" action="..\controllers\RegistrationController.php">
          <div id="col-sm-12 ">
            <img id="regis-img" src="..\..\css\registration-img.png" alt="pen">
          </div>
          <div id="col-sm-12 ">
            <h2 class="landingText">Register New User</h2>
          </div>
          <div class="form-row ">
            <div class="col">
              <label for="username">Username *</label>
              <input type="text" id="username" name="username" class="form-control" placeholder="John123" required>
              <?php if (isset($usernameErr)): ?>
                <span class="error">
                  <?php echo $usernameErr; ?>
                </span>
              <?php endif; ?>

            </div>
          </div>
          <div class="form-group">
            <label for="email">Email address *</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="john@outlook.com" required>
            <?php if (isset($emailErr)): ?>
              <span class="error">
                <?php echo $emailErr; ?>
              </span>
            <?php endif; ?>
          </div>
          <div class="form-group">
            <label for="password">Password *</label>
            <input type="password" name="password" class="form-control" id="password" required>
            <?php if (isset($passwordErr)): ?>
              <span class="error">
                <?php echo $passwordErr; ?>
              </span>
            <?php endif; ?>
          </div>
          <button type="submit" class="btn btn-warning registerbtn">Register</button>
        </form>
        <div class="col-sm-6 rightside">
        <p class="welcomeMessage">Welcome to the best site</p>
          <div class=" logoRow" >
          <img class="welcomeLogo" src="..\..\css\Logo.png" class=" col-sm-12" alt="Logo" />
            </div>              
        </div>
      </div>
      <div id="register-error"></div>
    </div>

  </main>
  </main>
</body>

</html>