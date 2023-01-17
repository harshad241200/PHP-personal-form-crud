<?php
include_once 'function.php';
$obj = new A();
$result = $obj->getDataById($_GET['id']);

if(isset($_POST["submit"])){

    

    $uploads = 'uploads/';
    $file_name = rand(1000,9999).'.jpg';
    $target = $uploads.$file_name;
    
    move_uploaded_file($_FILES['imagefile']['tmp_name'], $target);
    
      $id = $_POST['hiddenId'];
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $image = $file_name;
    
      //$prod = new Product;
      $answer = $obj->update($fname, $lname, $email, $address, $image, $id);   
    
    }
    
    
    if($result !== false){
    ?>
    



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <form action="" method="post" enctype="multipart/form-data">

    <label>First Name</label>
    <input type="text" name="fname" value="<?=isset($result['fname']) ? $result['fname'] : ''?>"><br><br>

    <label>Last Name</label>
    <input type="text" name="lname" value="<?=isset($result['lname']) ? $result['lname'] : ''?>"><br><br>

    <label>Email</label>
    <input type="text" name="email" value="<?=isset($result['email']) ? $result['email'] : ''?>"><br><br>

    <label>Address</label>
    <input type="text" name="address" value="<?=isset($result['address']) ? $result['address'] : ''?>"><br><br>

    <label>file upload</label>
    <input type="file" class="form-control-file" name="imagefile">


    <input type="hidden" name="hiddenId" value="<?=$result['id']?>">    <!-- Value visible during inspect of page -->


    <input type="submit" class="btn btn-primary" name="submit"/>


</form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php



}
else{

    echo "No records found";
    exit;         // ends the script!!


}
?>