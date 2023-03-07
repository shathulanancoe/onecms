
<?php
include("dbconfig.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANCOE_Cheque_Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    textarea {
  resize: none;
}
    </style>
</head>
<body>
      <center> <img src="Ancoe_logo.jpg" width="100" height="100"></center>
    <div class="text-center">
       <h1>Cheque Management System</h1>
  <h5><p>National College Of Education Addalaichenai</p></h5>
  <hr>
</div>

          
    <form>
    <div class="form-row">
    <div class="col-md-2"></div>
    <div class="col-md-4">
         Cheque Number :-  <input type="text" class="form-control" id="cheque_number" placeholder="Enter cheque_number" name="cheque_number">
    </div>
    <div class="col-md-4">
      Staff Name :- <input type="text" class="form-control" placeholder="Enter the Staff Name" name="nameofstaff">
    </div>
  </div>
  <div class="col-md-2"></div>

  <!--********************** -->
</br>
  <div class="form-row">
    <div class="col-md-2"></div>
    <div class="col-md-4">
         Cheque Amount :-  <input type="text" class="form-control" id="Amount" placeholder="Enter Amount" name="amount">
         
    </div>
    <div class="col-md-4">
    <div class="form-group">
 Select Staff Names
  <select class="form-control" id="sel1">
    <option>K.Punniyamoorthy</option>
<option>MC.Junaid</option>
    <option>MI.Jawfer</option>
    <option>A.Farook</option>
    <option>Minver.MH</option>
    <option>Ahamed Naleer</option>
    <option>MCF.Risviya</option>
    <option>Z.Thasleen</option>
    <option>Wazeel.AJL</option>
    <option>Mubarak.AM</option>
    <option>Farsad.KLM</option>
    <option>Lathif.AAA</option>
    <option>Swenthiran.K</option>
    <option>Muzammil.MT</option>
    <option>Nazeer Kani</option>
    <option>Pathmaraja.K</option>
    <option>Nahdhy.MN</option>
    <option>S.Karunananthan</option>
        <option>Fasmy.MI</option>
    <option>Naleem.A</option>
    <option>Anees Ali.AL</option>
    <option>Husain.MIMA</option>
    <option>Satheek.ARM</option>
    <option>S.Thasarathan.</option>
    <option>Niyas.AM</option>
    <option>AA.RAMEEZ</option>
      </select>
</div>



    </div>
  </div>
  <div class="col-md-2"></div>
 <!--********************** -->
 </br>
 <div class="form-row">
    <div class="col-md-2"></div>
    <div class="col-md-4">
         Cheque Date :-  <input type="date" class="form-control" id="dateofcheq"  name="dateofcheq">
    </div>
    <div class="col-md-4">
      Reason :-
      <div class="form-group">
    <textarea class="form-control" rows="5" id="comment"></textarea>
</div>
    </div>
  </div>
  <div class="col-md-2"></div>
<!--********************** -->
</br>
 <div class="form-row">
    <div class="col-md-2"></div>
    <div class="col-md-4">
    <button type="button" class="btn btn-danger" name="Save_chq_data" autosize="off">Save Data</button> 
    
     </div>
    <div class="col-md-4">
     
    </div>

    </div>
  </div>
  <div class="col-md-2"></div>
</form>

    <br>
    <?php
    $cheNum="";
  if(isset($_POST['Search'])){

      $cheNum = test_input($_POST["cheNum"]);
if(is_numeric($cheNum)){
 
    $sql = "SELECT * FROM chque_system WHERE Chq_num=$cheNum";
    $result = mysqli_query($conn, $sql);
    
  }
    

  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}}
 ?>
 <hr>


<hr>
<p class="text-center">© National College Of Education, Addalaichenai!. All Rights Reserved.</p>
<p class="text-center">System Developed By K.Shathulan @ 2023</p>
</body>
</html>