<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title></title>
  </head>
  <body>
   
          <table>
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile No.</th>
                <th>Address</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php

                include 'model.php';
                $model = new Model();
                $rows = $model->fetch();
                $i = 1; 
                if(!empty($rows)){
                  foreach($rows as $row){ 
              ?>
              <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['mobile']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td>
                 <button> <a href="read.php?id=<?php echo $row['id']; ?>" class="badge badge-info">Read</a></button>
                  <button><a href="delete.php?id=<?php echo $row['id']; ?>" class="badge badge-danger">Delete</a></button>
                  <button><a href="edit.php?id=<?php echo $row['id']; ?>" class="badge badge-success">Edit</a></button>
                </td>
              </tr>

              <?php
                }
              }else{
                echo "no data";
            }

              ?>
            </tbody>
          </table>
  </body>
</html>