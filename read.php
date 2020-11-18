<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title></title>
  </head>
  <body>
          <?php

              include 'model.php';
              $model = new Model();
              $id = $_REQUEST['id'];
              $row = $model->fetch_single($id);
              if(!empty($row)){

          ?>
          
              <p>Name = <?php echo $row['name']; ?></p>
              <p>Email = <?php echo $row['email']; ?></p>
              <p>Mobile No. = <?php echo $row['mobile']; ?></p>
              <p>Address = <?php echo $row['address']; ?></p>
            </div>
          </div>
          <?php
            }
            else
            {
            echo "no data";
          }
          ?>
  </body>
</html>