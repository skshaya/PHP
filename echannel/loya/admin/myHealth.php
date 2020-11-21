<!DOCTYPE html>
<html>
<head>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="../src/font-awesome.min.css">
	<link rel="stylesheet" href="../src/web-fonts-with-css/css/fontawesome-all.min.css">    
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script defer src="https://use.fontawesome.com/releases/v5.0.12/js/all.js" integrity="sha384-Voup2lBiiyZYkRto2XWqbzxHXwzcm4A5RfdfG6466bu5LqjwwrjXCMBQBLMWh7qR" crossorigin="anonymous"></script>
<style>#div_color {
    background-color: #E3E3E3;
}
#mark{
	background-color: red;
}

</style>
</head>
<body>
<div id="container">
            <?php include 'header_after_log.php'; ?>
        </div>
<div class="w3-container w3-padding" id="div_color">
			<br><br><br><br>
			<div class="w3-container w3-padding" >
				<h1 align="center"><strong>My Health</strong></h1>
				<hr>
			</div>
            <br>
			<div class="row" style="padding-left:140px;padding-bottom:30px">
          
				<div class="col-lg-2">
					<div class="w3-text">
						
						<h1>21</h1>
						<span>Age(Years)</span>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="w3-text">
						
						<h1>189</h1>
						<span>Height(cm)</span>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="w3-text">
						<h1>89</h1>
						<span>Weight(kg)</span>
                    </div>
				</div>
                
                <div class="col-lg-3">
					<div class="w3-text">
						<h1>28.7</h1>
						<span>BMI <kbd class="bg-danger"><strong>(overweight)</strong></kbd></span>
					</div>
				</div>
                
                 <div class="col-lg-3">
					<div class="w3-text">
						<h1><kbd class="bg-danger">B++</kbd></h1>
						<span>Blood Group</span>
					</div>
				</div>
			</div>
			

	</div>
    
	<div class="row" style="padding-left:350px;padding-top:50px;padding-right:350px">
              <div class="col-lg-4" style="width:50px">
             	<i class="fas fa-smoking fa-2x" ></i>
                
                <h5 style="padding-top:10px"> Smoking</h5>
                <span>Not Specified</span>
               </div>
               <div class="col-lg-4" style="width:50px"><i class="fas fa-beer fa-2x" ></i>
                <h5 style="padding-top:10px">Alcohol</h5>
                <span>Not Specified</span>
               </div>            
               <div class="col-lg-4" style="width:50px"><i class="fas fa-heart fa-2x" ></i>
                <h5 style="padding-top:10px">Water Intake</h5>
                <span>Not Specified</span>
               </div>
  
    </div>
<hr>
   	<div class="row" style="padding-left:350px;padding-top:50px;padding-right:350px;padding-bottom:35px;">
              <div class="col-lg-3" style="width:50px">
             	<i class="fas fa-phone-square fa-lg" ></i>
                 <span style="padding-top:10px">0710193381</span><br>
                <p><b>Contact(Mobile)</b></p>
               </div>
               <div class="col-lg-3" style="width:50px"><i class="fas fa-home fa-lg" ></i>
                 <span style="padding-top:10px">0335680060</span><br>
                <p><b>Contact(Home)</b></p>
               </div>            
               <div class="col-lg-3" style="width:50px"><i class="fas fa-user fa-lg" ></i>
                 <span style="padding-top:10px">933183297v</span><br>
                <p><b>NIC</b></p>
               </div>
               <div class="col-lg-3" style="width:50px"><i class="fas fa-map-marker fa-lg" ></i>
                <span style="padding-top:10px">Mirigama
                </span><p><b>Address</b></p>
               </div>
  
    </div>
	
<hr>	
 <div class="w3-container w3-padding" id="div_color">
 <h2>Medical Test Profile</h2>
 </div>   
<hr>

<div class="w3-row-padding">
    <div class="w3-half w3-padding">
    
        <div class="w3-card-4">
        
            <header class="w3-container w3-white">
                <h1>Cholesterol</h1>
            </header>
        
            <div class="w3-container">
                <div class="row">
                    <div class="col-lg-6">
                        <span style="color:red">
                        <h2 style="font-size:72px;">173</h2>
                        total(mg/dL)</span>
                    </div>
                    <div class="col-lg-3">
                        <h5>65</h5>
                        HDL(mg/dL)
                    </div>
                    <div class="col-lg-3">
                        <h5>98</h5>
                        LDL(mg/dL)
                    </div>
                </div>
                
            </div>
            
    
            <footer class="w3-container w3-white">
              <a href="cholostrolChart.php"><h5>View History</h5></a>
            </footer>
        
        </div>
        
    </div>
    
    <div class="w3-half w3-padding">
    
        <div class="w3-card-4">
        
            <header class="w3-container w3-white">
                <h1>Fasting Blood Sugar</h1>
            </header>
        
            <div class="w3-container">
                <div class="row">
                    <div class="col-lg-6">
                        <span style="color:red">
                        <h2 style="font-size:72px;">173</h2>
                        GLUCOSE(mg/dL)</span>
                    </div>
                </div>
                
            </div>
        
            <footer class="w3-container w3-white">
              <a href="fastingBloodSugarChart.php"><h5>View History</h5></a>
            </footer>
        
        </div>
        
    </div>
</div>
<br><br><br>
<div class="w3-row-padding">
    <div class="w3-half w3-padding">
    
        <div class="w3-card-4">
        
            <header class="w3-container w3-white">
                <h1>Random Blood Sugar</h1>
            </header>
        
            <div class="w3-container">
                <div class="row">
                    <div class="col-lg-6">
                        <span style="color:red">
                        <h2 style="font-size:72px;">173</h2>
                        total(mg/dL)</span>
                    </div>
                    <div class="col-lg-3">
                        <h5>65</h5>
                        HDL(mg/dL)
                    </div>
                    <div class="col-lg-3">
                        <h5>98</h5>
                        LDL(mg/dL)
                    </div>
                </div>
                
                
            </div>
            
    
            <footer class="w3-container w3-white">
              <a href="randomBloodSugarChart.php"><h5>View History</h5></a>
            </footer>
        
        </div>
        
    </div>
    
    <div class="w3-half w3-padding">
    
        <div class="w3-card-4">
        
            <header class="w3-container w3-white">
                <h1>Blood Pressure</h1>
            </header>
        
            <div class="w3-container">
                <div class="row">
                    <div class="col-lg-6">
                        <span style="color:red">
                        <h2 style="font-size:72px;">173</h2>
                        GLUCOSE(mg/dL)</span>
                    </div>
                </div>
                
            </div>
        
            <footer class="w3-container w3-white">
              <a href="#"><h5>View History</h5></a>
            </footer>
        
        </div>
        
    </div>
</div>
<br><br><br>
<div class="w3-row-padding">
    <div class="w3-half w3-padding">
    
        <div class="w3-card-4">
        
            <header class="w3-container w3-white">
                <h1>Weight</h1>
            </header>
        
            <div class="w3-container">
                <div class="row">
                    <div class="col-lg-6">
                        <span style="color:red">
                        <h2 style="font-size:72px;">173</h2>
                        total(mg/dL)</span>
                    </div>
                    <div class="col-lg-3">
                        <h5>65</h5>
                        HDL(mg/dL)
                    </div>
                    <div class="col-lg-3">
                        <h5>98</h5>
                        LDL(mg/dL)
                    </div>
                </div>
                
            </div>
            
    
            <footer class="w3-container w3-white">
              <a href="#"><h5>View History</h5></a>
            </footer>
        
        </div>
        
    </div>
    
    <div class="w3-half w3-padding">
    
        <div class="w3-card-4">
        
            <header class="w3-container w3-white">
                <h1>Height</h1>
            </header>
        
            <div class="w3-container">
                <div class="row">
                    <div class="col-lg-6">
                        <span style="color:red">
                        <h2 style="font-size:72px;">173</h2>
                        GLUCOSE(mg/dL)</span>
                    </div>
                </div>
                
            </div>
        
            <footer class="w3-container w3-white">
              <a href="#"><h5>View History</h5></a>
            </footer>
        
        </div>
        
    </div>
</div>

<hr>	
 <div class="w3-container w3-padding" id="div_color">
 <h2>My Prescriptions</h2>
 <button class="w3-button w3-red w3-round-large w3-right w3-padding">Add New</button>
 </div>   
<hr>
<div class="container" align="center">You don't have any prescriptions
in your list</div>
<hr>	


 <div class="w3-container w3-padding" id="div_color">
 <h2>My Allergies</h2>
 <button class="w3-button w3-red w3-round-large w3-right w3-padding">Add New</button>
 </div>   
<hr>
<div class="container" align="center">You don't have allergy profile
created</div>
<hr>

<br>
<div class="navbar-fixed-bottom">
 <?php include 'footer.php'; ?>
</div>
</body>
</html> 