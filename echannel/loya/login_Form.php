<?php
require('db.php');


if (isset($_POST['login'])) {
    $email = $_POST['username'];
    $password = $_POST['password'];
	
	$sql = "SELECT * FROM userlogin WHERE username='".$email."' and password='".$password."'";
	echo '$email';
	$result = mysqli_query($conn, $sql);
    $rows = mysqli_num_rows($result);
	
	if ($rows > 0) {
		
		$result =  mysqli_query($conn,"select * from userLogin where username = '".$email."'");
		
		while($row=mysqli_fetch_array($result)){
			$resultcategory = $row['userCategory'];
			$uid =$row['id'];
			$pw = $row['password'];
			$result2 = mysqli_query($conn,"select * from admin WHERE id='".$uid."'");
			$result3 = mysqli_query($conn,"select * from doctor WHERE id='".$uid."'");
			$result4 = mysqli_query($conn,"select * from receptionist WHERE id='".$uid."'");
			$result5 = mysqli_query($conn,"select * from patient WHERE id='".$uid."'");
			
			echo '</br></br></br></br> Errrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrooooooooor '.$resultcategory;	
			
			if($resultcategory == 1){
				
				session_start();
				$_SESSION['sid']=$resultcategory;
				$_SESSION['userid'] = $uid;
				$_SESSION['userPassword'] = $pw;
				
				header('location:admin/index.php');
					while($row=mysqli_fetch_array($result2)){
					session_start();
					$adminName = $row['adminName'];
					$address = $row['address'];
					$email = $row['email'];
					$tel = $row['telNo'];
					
					
					$_SESSION['name']=$adminName;
					$_SESSION['address']=$address;
					$_SESSION['email']=$email;
					$_SESSION['tel']=$tel;
					}
						
			
			}
			
			if($resultcategory == 2){
				
				session_start();
				$_SESSION['sid2']=$resultcategory;
				$_SESSION['userid'] = $uid;
				$_SESSION['userPassword'] = $pw;
				
				header('location:doctor/index.php');
					while($row=mysqli_fetch_array($result3)){
					session_start();
					$docName = $row['docName'];
					$address = $row['address'];
					$email = $row['email'];
					$tel = $row['telNo'];
					
					
					$_SESSION['name']=$docName;
					$_SESSION['address']=$address;
					$_SESSION['email']=$email;
					$_SESSION['tel']=$tel;
						
			
					}
			}
			
			if($resultcategory == 3){
				
				session_start();
				$_SESSION['sid3']=$resultcategory;
				$_SESSION['userid'] = $uid;
				$_SESSION['userPassword'] = $pw;
				
				header('location:receptionist/index.php');
					while($row=mysqli_fetch_array($result4)){
					session_start();
					$recName = $row['recName'];
					$address = $row['address'];
					$email = $row['email'];
					$tel = $row['telNo'];
					
					
					$_SESSION['name']=$docName;
					$_SESSION['address']=$address;
					$_SESSION['email']=$email;
					$_SESSION['tel']=$tel;
						
			
					}
			}
			
			if($resultcategory == 4){
				
				session_start();
				$_SESSION['sid4']=$resultcategory;
				$_SESSION['userid'] = $uid;
				$_SESSION['userPassword'] = $pw;
				
				header('location:patient/index.php');
					while($row=mysqli_fetch_array($result5)){
					session_start();
					$patientName = $row['patientName'];
					$address = $row['address'];
					$email = $row['email'];
					$tel = $row['telNo'];
					
					
					$_SESSION['name']=$patientName;
					$_SESSION['address']=$address;
					$_SESSION['email']=$email;
					$_SESSION['tel']=$tel;
						
			
					}
			}
		
			
	

		}
			


    } else {
		   echo "<br><br><br> USERNAME PASSWORD NOT MATCHED";
        
    }  
	
	

} 









?>







<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="src/web-fonts-with-css/css/fontawesome-all.css">
	<link rel="stylesheet" href="src/web-fonts-with-css/css/fontawesome-all.min.css"> 
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<style>	
img {
    position: absolute;
    left: 0px;
    top: 0px;
    z-index: -1;
}
</style>
</head>
<body>
<div id="container">
             
            <?php include 'navbarHome.php'; ?>
        
        </div>
        <div class="w3-display-container w3-content img-responsive"  style="max-width:1500px; height:500px">
		
        <img src="images/b.jpg" alt="Table" class="w3-opacity-max" style="max-width:1500px; height:585px">
        
        
  
 
<div class="w3-container w3-half w3-margin-top w3-display-middle" style="padding-top:70px ; padding-left:80px ;  padding-right:80px">
<header class="w3-container w3-blue" align="center">
  <h1>Login</h1>
</header>

<form class="w3-container w3-card-4 w3-white " method="post" name="login" >

            <div class="w3-row w3-section">
            <label>User Name</label>
              <div class="input-group">
					<span class="input-group-addon">
						<i class="glyphicon glyphicon-user"></i>
					</span> 
                	<input type="text"  class="form-control" name="username" placeholder="Username" required="required"   autofocus/>
              </div>
            </div>
<div class="w3-row w3-section ">
			<label>Password</label>
              <div class="input-group">
					<span class="input-group-addon">
						<i class="glyphicon glyphicon-lock"></i>
					</span>
                            
                	<input type="password" class="form-control" name="password" placeholder="Password" required="required"  autofocus/></br>
              </div>
            </div>


<div class="w3-row w3-section w3 w3-text-black" ><div class=""> Forgot passoword? </div>
</div>

    <div class="w3-row w3-section w3"><div class=""><div class="panel-footer">
    								
                   					 No Worries, <a href="reset_pw.php" style="text-decoration:underline">Click Here</a> to get New password or <a href="register_patient.php" style="text-decoration:underline">Create an Account</a>
                    
  									</div></div></div>

  <button type="submit" class="w3-button w3-block w3-half w3-blue w3-section w3-ripple w3-padding" name="login">Login</button>
  <button class="w3-button w3-block w3-half w3-section w3-red  w3-ripple w3-padding">Cancel</button>

</form>

</div>
</div>
<br><br><br><br>

 <?php include 'footer.php'; ?>


</body>
</html>

