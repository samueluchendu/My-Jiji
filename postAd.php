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
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" ></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/postAd.css">
    <script type="text/javascript">
        $(document).ready(function() {

            $('#category').on('change', function() {
                var category_id = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "subCategory.php",
                    data: 'category_id='+ category_id,
                    success: function(result) {
                        console.log(result);
                        $("#sub_category").html(result);
                    }
                });
            });
        });
    </script>

    <title>Post Advert</title>
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
                <h3 class="text-center pt-2 myBg p-4 text-white mt-1 font-weight-bold">Post Ad!</h3>

                <form action="subCategory.php" method="POST" class="mid-form">
                    <div class="form-group">
                        <label class="label" for=name>Name</label>
                        <input type="text" name='email' class="form-control" id="name" placeholder="Your name">
                    </div>


                    <div class=" form-group ">
                        <label class="label" for="phonenumber">Phone Number</label>
                        <input type="text" name="phoneNumber" class="form-control" id="phonenumber" placeholder="Enter Phone Number ">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputState" class="label">Category</label>
                            <select id="category" class="form-control" name="category">
                                <option selected>Choose...</option>
                                <?php

                                $categories = getAllCategory();
                                while ($row = mysqli_fetch_assoc($categories)) {
                                ?>
                                    <option value="<?php echo $row['category_id'] ?>"> <?php echo $row['category_name'] ?> </option>

                                <?php  }

                                ?>

                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState" class="label">Sub-Category</label>
                            <select id="sub_category" class="form-control" name="sub-category">
                                <option selected>Choose...</option>

                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputState" class="label">Region</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState" class="label">Place</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="label" for=name>Title</label>
                        <input type="text" name='title' class="form-control" id="name" placeholder="Your title">
                    </div>

                    <div class="form-group">
                        <label class="label" for=name>Price</label>
                        <input type="text" name='title' class="form-control naira" id="name" placeholder="=N=">
                    </div>

                    <div class="form-group">
                        <label class="label" for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description....."></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1"></label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div><br>

                    <button type="submit" name="login" class="btn btn-danger btm">Post Advert</button>

                </form>


            </div>


        </section>
    </main>


 





   
</body>

</html>
