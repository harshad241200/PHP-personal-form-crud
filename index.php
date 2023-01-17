<?php
include_once 'function.php';

$obj = new A();
$result = $obj->displayAlldetail();


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Color</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
    
<?php 
if($result !== false){

  foreach($result as $data){

?>

<tr>
<td><?=$data['id']?></td>
  <td><?=$data['fname']?></td>
  <td><?=$data['lname']?></td>
  <td><?=$data['email']?></td>
  <td><?=$data['address']?></td>
  <td><image width="100" height="100" src="uploads/<?=$data['fileimage']?>"></td>
  <td><a href="edit.php?id=<?=$data['id']?>">edit</a></td>
  <td><a href="delete.php?id=<?=$data['id']?>">delete</a></td>

</tr>

<?php
  }

  }
  else{
  ?>

  <tr><td colspan="4">No data found!!</td></tr>

  <?php
  }
  ?>


  </tbody>
</table>



</div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>