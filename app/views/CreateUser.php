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
    <title>Create User Page</title>
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
                    <p><a href="..\controllers\Logout.php"> Log Out </a></p>
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
        </div>
        <div class="row">
            <div class="space"> </div>
        </div>
        <div class="container">
            <div class="row">
                <form method="post" action="..\controllers\CreateUserController.php">

                    <div class="row createUserRow">
                        <div class="col-sm-2">
                            <label for="username" class="createUserLabel">Username:</label>
                        </div>
                        <div class="col-sm-4"><input type="text" id="username" name="username" class="form-control"
                                placeholder="John123" required>
                        </div>
                        <div class="col-sm-6">
                            <?php if (isset($usernameErr)): ?>
                                <span class="error">
                                    <?php echo $usernameErr; ?>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row createUserRow">
                        <div class="col-sm-2">
                            <label for="email" class="createUserLabel">Email address:</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="john@outlook.com" required>
                        </div>
                        <div class="col-sm-6">
                            <?php if (isset($emailErr)): ?>
                                <span class="error">
                                    <?php echo $emailErr; ?>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row createUserRow">
                        <div class="col-sm-2">
                            <label for="password" class="createUserLabel">Password:</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <div class="col-sm-6">

                            <?php if (isset($passwordErr)): ?>
                                <span class="error">
                                    <?php echo $passwordErr; ?>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row createUserRow">
                        <div class="col-sm-2">
                            <label for="rolesFound" class="createUserLabel">Role:</label>
                        </div>
                        <div class="col-sm-4">
                            <!-- <SELECT NAME="rolesFound"  ID ="rolesFound"> <?php echo "$select_str"; ?> 
                            </SELECT>  -->
                            <select id="rolesFound" name="rolesFound">
                                <option value="Research Study Manager">Research Study Manager</option>
                                <option value="Researcher">Researcher</option>

                            </select>
                        </div>
                        <div class="col-sm-6">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-warning registerbtn">Register</button>
                    <div class="row addedMsg">
                    <div class="col-sm-12">

                        <?php if (isset($addedMsg)): ?>
                            <span class="error">
                                <?php echo $addedMsg; ?>
                            </span>
                        <?php endif; ?>
                        </div>
                        </div>
                </form>

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