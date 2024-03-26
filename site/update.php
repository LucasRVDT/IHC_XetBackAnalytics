<?php
include "dbconnect.php";

$id=$_GET['updateid'];

$sql="select * from students where studentID=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
  $first_name=$row['first_name'];
  $last_name=$row['last_name'];
  $adddress=$row['adddress'];
  $gender=$row['gender'];
  $dateofbirth =$row['dateofbirth'];

if (isset($_POST['submitt'])) {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $adddress = $_POST['adddress'];
  $gender = $_POST['gender'];
  $dateofbirth = $_POST['dateofbirth'];
  $sql = "update students set studentID=$id,first_name='$first_name',last_name='$last_name',adddress='$adddress',gender='$gender',dateofbirth='$dateofbirth' where studentID=$id";
  $result = mysqli_query($conn, $sql);
  if ($result) {
     echo "Data updated  successfully";
  } else {

    die("Connection failed: " . $conn->connect_error);
  }
}



?>


<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body>
  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <div class="mb-md-5 mt-md-4 pb-5">
                <h2 class="fw-bold mb-2 text-uppercase">New Student</h2>
                <p class="text-white-50 mb-5">Please Enter New Student Info! </p>
                <form method="post">

                  <div class="form-outline form-white mb-4">
                    <input type="text" id="first_name" class="form-control form-control-lg" name="first_name" placeholder="Enter your Firstname" value=<?php echo $first_name;?>>
                    <label class="form-label">First name </label>
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="text" id="last_name" class="form-control form-control-lg" name="last_name" placeholder="Enter your Lastname"  value=<?php echo $last_name;?>>
                    <label class="form-label">Last name</label>
                  </div>


                  <div class="form-outline form-white mb-4">
                    <input type="text" id="adddress" class="form-control form-control-lg" name="adddress" placeholder="Enter your address"  value=<?php echo $adddress;?>>
                    <label class="form-label">address</label>
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="text" id="gender" class="form-control form-control-lg" name="gender" placeholder="Enter your gender"  value=<?php echo $gender;?>>
                    <label class="form-label">gender</label>
                  </div>
                  <div class="form-outline form-white mb-4">
                    <input type="date" id="dateofbirth" class="form-control form-control-lg" name="dateofbirth">
                    <label class="form-label">Date of Birth </label>
                  </div>

                  <button class="btn btn-outline-light btn-lg px-5" type="submit" name="submitt" id="submitt">Update</button>
                </form>
                <a href="student.php"> <button class="btn btn-outline-light btn-lg px-5"  value="Back">Back</button></a>

              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>