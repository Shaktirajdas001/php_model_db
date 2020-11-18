<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  </head>
  <body>
          <?php

              include 'model.php';
              $model = new Model();
              $insert = $model->insert();

          ?>
          <form action="" method="post">
              <label for="">Name</label>
              <input type="text" name="name">
            
              <label for="">Email</label>
              <input type="email" name="email" >
           
              <label for="">Mobile No.</label>
              <input type="text" name="mobile" >
           
              <label for="">Address</label>
              <textarea name="address"></textarea>
           
              <button type="submit" name="submit" >Submit</button>
            
          </form>
  </body>
</html>