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
              $row = $model->edit($id);

              if (isset($_POST['update'])) {
                if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['address'])) {
                  if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['address']) ) {
                    
                    $data['id'] = $id;
                    $data['name'] = $_POST['name'];
                    $data['mobile'] = $_POST['mobile'];
                    $data['email'] = $_POST['email'];
                    $data['address'] = $_POST['address'];

                    $update = $model->update($data);

                    if($update)
                    {
                      echo "<script>alert('record update successfully');</script>";
                      echo "<script>window.location.href = 'records.php';</script>";
                    }
                    else
                    {
                      echo "<script>alert('record update failed');</script>";
                      echo "<script>window.location.href = 'records.php';</script>";
                    }

                  }else
                  {
                    echo "<script>alert('empty');</script>";
                    header("Location: edit.php?id=$id");
                  }
                }
              }

          ?>
          <form action="" method="post">
            
              <label for="">Name</label>
              <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control">
            
              <label for="">Email</label>
              <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control">
           
              <label for="">Mobile No.</label>
              <input type="text" name="mobile" value="<?php echo $row['mobile']; ?>" class="form-control">
      
              <label for="">Address</label>
              <textarea name="address" id="" cols="" rows="3" class="form-control"><?php echo $row['address']; ?></textarea>
            
              <button type="submit" name="update" class="btn btn-primary">Submit</button>
           
          </form>

    
  </body>
</html>