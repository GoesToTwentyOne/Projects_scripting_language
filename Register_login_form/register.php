<?php

// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Register form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
  <div class="container ">
    <div class="row ">
      <div class="col-lg-7 m-auto">
        <h3 class="text-center bg-success">Register form</h3>
        <form action="register_post.php" method="post">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
            <?php
            if (isset($_SESSION['name'])) {
              echo $_SESSION['name'];
              unset($_SESSION['name']);
            }
             ?>
          </div>
          <div class="form-group">
            <label for="email">Email address:</label>
            <input type="text" class="form-control" id="email" name="email">
            <?php
            if (isset($_SESSION['email'])) {
              echo $_SESSION['email'];
              unset($_SESSION['email']);
            }
             ?>

          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control " id="pwd" name="pwd">

            <?php
            if (isset($_SESSION['password'])) {
              echo $_SESSION['password'];
              unset($_SESSION['password']);
            }

            ?>
          </div>
          <div class="text-center ">
            <button type="submit" class="btn btn-primary ">Submit</button>

          </div>

        </form>

      </div>

    </div>

  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
