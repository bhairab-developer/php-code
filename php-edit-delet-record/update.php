<?php include 'fetch_form.php' ?>
<?php
$id=$_GET['id'];
$sql = "select * FROM  jan where id='$id'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
    ?>
    <form action="" method="post">
        <input type="text" name="name" value="<?php echo  $row["name"] ?>">
        <br>
        <input type="text" name="mail" value="<?php echo  $row["email"]?>">
        <br>
        <input type="submit" name="update"  value="update">
    </form> 
<?php
}
if(isset($_POST['update']))
{
$id=$_GET['id'];
$name = $_POST['name'];
$email = $_POST['mail'];
$sql1 = "UPDATE jan SET name = '$name' , email = '$email' WHERE  id='$id'";
$result1 = $conn->query($sql1);
if($result1){
{
    echo "Updated data successfully\n";
    header('Location: http://localhost/nton2019/')   ;
}
    die('Could not update data: ' . mysql_error());


}
}
 
?>