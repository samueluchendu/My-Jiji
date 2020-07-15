<?php require_once('functions/init.php'); ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/MyLogin.css">
    <title>Login!</title>
</head>

<body>
    <main>
        <section>
            <div class="img-bg">

                <div class="text-center">
                    <?php if (isset($_SESSION['msg'])) {
                        echo '<div><strong class="text-success">' . $_SESSION['msg'] . '</strong></div>';
                        unset($_SESSION['msg']);
                    } ?>


                </div>
            </div>

            <div class="img-form">


                <h3 class="text-center pt-2 bg-danger p-2 text-white mt-1">Login here!</h3>

                <form action="processLogin.php" method="POST" class="mid-form">
                    <div class="text-center">
                        <?php if (isset($_SESSION['loginErr'])) {
                            echo '<div><strong class="text-danger">' .  $_SESSION['loginErr'] . '</strong></div>';
                            unset($_SESSION['loginErr']);
                        } ?>
                        <div></div>
                    </div>

                    <div class="form-group">
                        <label class="label" for=email>Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter name">
                        <div></div>

                        <?php if (isset($_SESSION['emailErr'])) {
                            echo '<div><strong class="text-danger">' . $_SESSION['emailErr'] . '</strong></div>';
                            unset($_SESSION['emailErr']);
                        } ?>
                    </div>


                    <div class="form-group">
                        <label class=" label " for=" Password ">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                        <div></div>

                        <?php if (isset($_SESSION['passwordErr'])) {
                            echo '<div><strong class="text-danger">' . $_SESSION['passwordErr'] . '</strong></div>';
                            unset($_SESSION['passwordErr']);
                        } ?>

                    </div>

                    <button type="submit" name="login" class="btn btn-danger btm">Login</button>

                </form>

                <p class="text-center">Dont have an account? <a href="register.php">Register</a>&nbsp; <a class="pwd" href="">Forget password</a></p>
            </div>


        </section>
    </main>







    <script src=" https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="
                            sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="
                            anonymous "></script>
    <script src=" https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js " integrity="
                            sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin="
                            anonymous "></script>
    <script src=" https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js " integrity="
                            sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI " crossorigin="
                            anonymous "></script>
</body>

</html>