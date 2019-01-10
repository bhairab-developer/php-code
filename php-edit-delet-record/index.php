<?php include 'fetch_form.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Record Fetch From Database </h2>            
  <table class="table table-striped">
    
    <tbody>
    <?php
    $sql = "SELECT * FROM jan";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        ?>
       <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Delete</th>
        <th>Edit</th>
      </tr>
    </thead>
           <?php
        while($row = $result->fetch_assoc()) {
            ?>
             <tr>
        <td><?php echo $row["id"] ?></td>
        <td><?php echo  $row["name"] ?></td>
        <td><?php echo  $row["email"]?></td>
                 <td><a href="delete.php?id=<?php echo $row["id"]?>"></a>
            <div class="btn btn-sm btn-danger">Delete</div>
        </td>
        <td><a href="update.php?id=<?php echo $row["id"]?>"><div class="btn btn-sm btn-primary">Edit</div></a></td>
      </tr>
            
           <?php
        }
         
    } else {
        ?>
         <tr>
        <td> No records found in database</td>
        </tr>
             <?php
    }
    $conn->close();
    ?>
     
     
    </tbody>
  </table>
</div>

</body>
</html>
 