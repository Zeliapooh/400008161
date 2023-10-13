<?php
if (session_status() == PHP_SESSION_ACTIVE || session_status() != PHP_SESSION_NONE) {
    if ($_SESSION["role"] != 'Research Group Manager') {
        header('location:..\views\LoginView.php');
    }
} else {
    header('location:..\views\LoginView.php');
}
?>
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
    <title>Research Group Manager Dashboard</title>
    <link rel="icon" href="..\..\css\Logo.png" type="image/x-icon">
</head>

<body>

    <main>
        <div class="container">
            <div class="row">
                <img src="..\..\css\Logo.png" class=" col-sm-2" alt="Logo" />
                <div class="col-sm-2"></div>
                <div class="col-sm-2"></div>
                <div class="col-sm-2"></div>
                <div class="col-sm-2"></div>
                <div class="col-sm-2">
                    <p ><a href= "..\controllers\Logout.php"> Log Out </a></p>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-5">
                    <?php echo $_SESSION["role"] . ": " . $_SESSION["username"]; ?>
                </div>

                <div class="col-sm-2"></div>
                <div class="col-sm-3">Email:
                    <?php echo $_SESSION["email"]; ?>
                </div>
                <div class="col-sm-2"></div>

            </div>
            <div class="row">
                <div class="space"> </div>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>

                <!-- @if($_SESSION["role"] == 'Research Group Manager') -->
                <div class="col-sm-3">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" aria-pressed="true">Create New
                            Study</button>
                </div>
                <!-- @endif -->

                <div class="col-sm-2"></div>
                <!-- @if($_SESSION["role"] == 'Research Group Manager') -->
                <div class="col-sm-3"><button type="button" class="btn btn-primary btn-lg btn-block"
                        aria-pressed="true">View all Studies</button></div>

                <!-- @endif -->
                <div class="col-sm-2"></div>
            </div>

            <div class="row">
                <div class="space"> </div>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <!-- @if($_SESSION["role"] == 'Research Study Manager') -->
                <div class="col-sm-3"><button type="button" class="btn btn-primary btn-lg btn-block"
                        aria-pressed="true">Delete Previous Study</button></div>
                <!-- @endif -->
                <div class="col-sm-2"></div>

                <!-- @if($_SESSION["role"] == 'Researcher') -->
                
                <div class="col-sm-3">
                <form action="..\controllers\CreateUserController.php" method="post">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" aria-pressed="true">Create New Researchers</button>
                    </form>
                </div>
                <!-- @endif -->
                <div class="col-sm-2"></div>

            </div>

        </div>

    </main>
    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: #003366;">
            Copyright © Tizelia Norville. All Rights Reserved.
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>