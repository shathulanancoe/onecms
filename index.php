
<?php
include("dbconfig.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>ANCOE_Cheque_Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
      <center> <img src="Ancoe_logo.jpg" width="100" height="100"></center>
    <div class="text-center">
       <h1>Cheque Management System</h1>
  <h5><p>National College Of Education Addalaichenai</p></h5>
  <hr>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3></h3>
      <p></p>
    </div>
    <div class="col-sm-4">
    <form class="form-inline" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" Method="POST">
    <label for="cheNum" class="text-center">Enter Your Cheque Number :- </label> <br><br>
    <input type="text" class="form-control" id="cheNum" placeholder="Enter The Cheque No" name="cheNum" required="">&nbsp;&nbsp;
    <input type="submit" class="btn btn-danger" name="Search">
    
    </form>
    <br>
    <?php
    $cheNum="";
  if(isset($_POST['Search'])){

      $cheNum = test_input($_POST["cheNum"]);
if(is_numeric($cheNum)){
 
    $sql = "SELECT * FROM chque_system WHERE Chq_num=$cheNum";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        echo"<table>";
        echo"<tr><td>Cheque Number </td><td>:-</td>";
        echo"<td><h6>&nbsp;&nbsp;" . $row["Chq_num"]."</h6></td></tr>";
        echo"<tr><td>Proprietor Name </td><td>:-</td>";
        echo"<td><h6>&nbsp;&nbsp;" . $row["Emp_name"]."</h6></td></tr>";
        echo"<tr><td>Amount (Rs) </td><td>:-</td>";
        echo"<td><h6>&nbsp;&nbsp;" . $row["Amount"].".00</h6></td></tr>";
        echo"<tr><td>Cheque Date </td><td>:-</td>";
        echo"<td><h6>&nbsp;&nbsp;" . $row["chq_date"]."</h6></td></tr>";
        echo"<tr><td>Reason </td><td>:-</td>";
        echo"<td><h6>&nbsp;&nbsp;" . $row["Reason"]."</h6></td></tr>";
        echo"</table>";         
          
      }
    }
   else {
    echo "</br>";
    echo "<h6 class='text-danger'>";
    echo"No More Data from this cheque Number!";
    echo "</h6>";
  }}

else{
  echo "<h6 class='text-danger text-center'>Please Enter  Valid Cheque Number (Eg:- 12345) </h6>"; 
}
  }
    

  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>
 <hr>
    </div>
    <div class="col-sm-4">
      <h3></h3>
      <p></p>
    </div>
  </div>
</div>
<hr>
<p class="text-center">© National College Of Education, Addalaichenai!. All Rights Reserved.</p>
<p class="text-center">System Developed By K.Shathulan @ 2023</p>
</body>
</html>