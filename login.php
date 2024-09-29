<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Login Form
    </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body class="body_deg" background="./Assets/university.jpg">
    <div style="text-align: center">
        <div class="title_deg">
            LOGIN FORM
        </div>
        <div class="form_deg">
            <form action="login_check.php" method="POST" class="login_form">
                <div>
                    <label class="label_deg">Username</label>
                    <input type="text" name="username">
                </div>

                <div>
                    <label class="label_deg">Password</label>
                    <input type="Password" name="password">
                </div>

                <div>

                    <input class="btn btn-primary" type="submit" name="submit" value="Login">
                </div>
                <h6>
                    <?php
                    error_reporting(0);
                    session_start();
                    session_destroy();
                    
                    echo $_SESSION['loginMessage'];
                    ?>
                </h6>
            </form>
        </div>
    </div>
</body>

</html>