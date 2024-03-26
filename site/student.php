<?php
include 'dbconnect.php';
?>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
</head>

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-10">
      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">SL no</th>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">Address</th>
            <th scope="col">Gender</th>
            <th scope="col">dateofbirth</th>
            <th scope="col">Operation</th>
          </tr>
        </thead>
        <tbody>
          <?php
$sql="SELECT * FROM students";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
  $id=$row['studentID'];
  $first_name=$row['first_name'];
  $last_name=$row['last_name'];
  $Adddress=$row['adddress'];
  $gender=$row['gender'];
  $dateofbirth =$row['dateofbirth'];
  echo '<tr>
  <th scope="row">'.$id.'</th>
  <td>'.$first_name.'</td>
  <td>'.$last_name.'</td>
  <td>'.$Adddress.'</td>
  <td>'.$gender.'</td>
  <td>'.$dateofbirth.'</td>
  <td>
  <button class="btn-primary"><a href="update.php?updateid='.$id.'" class="btn btn-primary btn-sm" >Update</a> </button>
  <button class="btn btn-danger "><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a> </button>
  
           </td>
</tr>';
}


          ?>

        </tbody>
      </table>
     <a href="add.php"><button type="button" class="btn btn-outline-light btn-rounded"  data-mdb-ripple-color="dark" >Add Student</button></a>


                </div>
                
