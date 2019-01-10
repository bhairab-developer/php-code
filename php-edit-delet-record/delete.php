<?php include 'fetch_form.php' ?>
<?php
 $id=$_GET['id'];
 $sql = "DELETE FROM  jan where id='$id'";
 $result = $conn->query($sql);
 if($result){
   header('Location: http://localhost/nton2019/')   
  }
?>