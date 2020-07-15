<?php
require_once('functions/init.php');


?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register.css">
    <title>Register!</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top myBg">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <form class="form-inline my-2 my-lg-0 mr-auto">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home1 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home2 <span class="sr-only">(current)</span></a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>
    <main>
        <section>
            <div class="img-bg">


            </div>
            <div class="img-form">

                <h3 class="text-center pt-2 bg-danger p-2 text-white mt-1">Register here!</h3>

                <form action="processRegister.php" method="POST" class="mid-form">
                    <div class="form-group">
                        <label class="label" for="firstname">First Name</label>
                        <input type="text" name="firstName" class="form-control" id="firstname" placeholder="Enter name">
                        <div></div>

                        <?php if (isset($_SESSION['firstnameErr'])) {
                            echo '<strong class="text-danger">' . $_SESSION['firstnameErr'] . '</strong>';
                            unset($_SESSION['firstnameErr']);
                        } ?>

                    </div>

                    <div class="form-group">
                        <label class="label" for="lastname">Last Name</label>
                        <input type="text" name="lastName" class="form-control" id="lastname" placeholder="Enter name">
                        <div></div>

                        <?php if (isset($_SESSION['lastnameErr'])) {
                            echo '<div><strong class="text-danger">' . $_SESSION['lastnameErr'] . '</strong></div>';
                            unset($_SESSION['lastnameErr']);
                        } ?>

                    </div>

                    <div class="form-group">
                        <label class="label" for="phonenumber">Phone Number</label>
                        <input type="text" name="phoneNumber" class="form-control" id="phonenumber" placeholder="Enter phone number">
                        <div></div>

                        <?php if (isset($_SESSION['phoneNumberErr'])) {
                            echo '<div><strong class="text-danger">' . $_SESSION['phoneNumberErr'] . '</strong></div>';
                            unset($_SESSION['phoneNumberErr']);
                        } ?>

                    </div>

                    <div class="form-group">
                        <label class="label" for="email">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                        <div></div>

                        <?php if (isset($_SESSION['emailErr'])) {
                            echo '<div><strong class="text-danger">' . $_SESSION['emailErr'] . '</strong></div>';
                            unset($_SESSION['emailErr']);
                        } ?>

                    </div>

                    <div class="form-group">
                        <label class="label" for="Password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter password ">
                        <div></div>

                        <?php if (isset($_SESSION['passwordErr'])) {
                            echo '<div><strong class="text-danger">' . $_SESSION['passwordErr'] . '</strong></div>';
                            unset($_SESSION['passwordErr']);
                        } ?>

                    </div>

                    <button type=" submit " name=" submit " class=" btn btn-danger btm ">Submit</button>
                </form>

            </div>


        </section>
    </main>







    <script src=" https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity=" sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin=" anonymous "></script>
    <script src=" https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js " integrity=" sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin=" anonymous "></script>
    <script src=" https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js " integrity=" sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI " crossorigin=" anonymous "></script>
</body>

</html>