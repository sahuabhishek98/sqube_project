<?php
$db = mysqli_connect('localhost', 'root', '', 'sqube');
if($db){
	// echo "conenction successful";
}else{
	echo "no connection";
}




?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/res.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
    *{
        top:0;
        margin:0;
    }
.d1{
background-color:aqua;
color:black;
height:50px;
text-align:center;
font-size:30px;
border-radius:25px;
margin-top:15px;
}
.adj{
    text-align:center;
    margin-top:25px;
}
.c1{
 font-size:20px;
 padding:5px;
 text-align:center;
 margin-top:23px;
 margin-left:150px;
 background-color:tomato;
 border:none;
 border-radius:15px;
 width:80px;
 cursor:pointer;
}
.ri{
    margin-left:900px;
}
    </style>

</head>
<body>
<div class="d1" >
    Job Seeker Data
    <span class="ri"><a href="index.php" class="btn btn-danger">  Logout</a>   </span>
</div>
<form action="" method="post">
<div class="form-group col-sm-8 adj">
    <label for="dur">Select According By opening</label>
    <select id="dur" class="form-select" name="check">
       <option selected>Select</option>
      <option value="laraveldevloper">LARAVEL/PHP DEVELOPERS</option>
      <option value="reactdeveloper">REACT DEVELOPER</option>
      <option value="nodejsdeveloper">NODEJS DEVELOPER</option>
      <option value="ui_uxdeveloper">UI/UX DESIGNER</option>
      <option value="mobileappdeveloper">MOBILE APP DEVELOPER</option>
      <option value="qatesting">QA / SOFTWARE TESTING</option>

    </select>
    <div><input type="submit" name="submit" class="c1" value="submit"></div>
  </div>
</form>
<div class="container">
<?php
if(isset($_POST['submit'])){
    $checkbox =$_POST['check'];
    if($checkbox == "laraveldevloper")
    {
  
      $query1="select * from laraveldevloper"; 
             $res = mysqli_query($db,$query1);
             
             
    }
    elseif ($checkbox=="reactdeveloper") {
  
      $query2="select * from reactdeveloper "; 
       $res =  mysqli_query($db,$query2);
    } 
    elseif ($checkbox=="nodejsdeveloper") {
  
      $query2="select * from nodejsdeveloper "; 
       $res =  mysqli_query($db,$query2);
    }
    elseif ($checkbox=="ui_uxdeveloper") {
  
      $query2="select * from ui_uxdeveloper"; 
       $res =  mysqli_query($db,$query2);
    }
    elseif ($checkbox=="mobileappdeveloper") {
  
      $query2="select * from mobileappdeveloper "; 
       $res =  mysqli_query($db,$query2);
    }
    elseif ($checkbox=="qatesting") {
  
      $query2="select * from qatesting"; 
       $res =  mysqli_query($db,$query2);
    }

    

if(mysqli_num_rows($res)>0){
    echo '<table class="table">';
      echo "<thead>";
      echo"<tr>";
       echo "<th>ID</th>";
       echo "<th>Full Name</th>";
       echo "<th>Email</th>";
       echo "<th>Phone</th>";
       echo "<th>Cover Letter</th>";
       echo "<th>Resume</th>";
      echo"</tr>";
      echo "</thead>";
      echo"<tbody>";
      while($row=mysqli_fetch_assoc($res)){
        echo "<tr>";
         echo"<td>". $row['id']."</td>";
         echo"<td>". $row['fname']."</td>";
         echo"<td>". $row['email']."</td>";
         echo"<td>". $row['phone']."</td>";
         echo"<td>". $row['coverletter']."</td>";
         echo"<td>". $row['resume']."</td>";
        echo "</tr>";
      }
      echo "</tbody>";
      echo '</table>';
   }else{
       echo "No records";
   }
}
?>
</div>
</body>
</html>