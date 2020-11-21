

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="src/w3.css">
	<link rel="stylesheet" href="src/latin_font.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="src/web-fonts-with-css/css/fontawesome-all.css">
	<link rel="stylesheet" href="src/web-fonts-with-css/css/fontawesome-all.min.css">    
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

  
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
            <?php include 'header_after_log.php'; ?>
        </div>

        
<div class="w3-display-container w3-content img-responsive"  style="max-width:1500px; height:500px">
		
        <img src="images/b.jpg" alt="Table" class="w3-opacity-max" style="max-width:1500px; height:500px">
        
       
        
        <div class="w3-display-container" style="padding-left:418px; ">    
            <br><br><br><br><br>
            <form action="/action_page.php" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin " style="width:500px;">
            <h2 class="w3-center">Channel Your Doctor</h2>
            <div class="w3-row w3-section">
              <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user-md"></i></div>
                <div class="w3-rest">
                  <input class="form-control" id="name" name="name" placeholder="Doctor's Name" type="text"/>
                </div>
            </div>

            <div class="w3-row w3-section">
              <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-stethoscope custom"></i></div>
                <div class="w3-rest">
                  <input class="form-control" id="spec" name="spec" placeholder="Specialization" type="text"/>
                </div>
            </div>
            
            <div class="w3-row w3-section">
              <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-calendar"></i></div>
                <div class="w3-rest">
              
                  <div class="w3-display-container">
                   <div class="input-group">
                    <div class="input-group-addon">
                     <span class="add-on">
                     </span>
                     
                    </div>
                    <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text"/>
                   </div>
                  </div>

                </div>
            

               
            <a href="search_Doc.php" class="w3-btn w3-block w3-section w3-blue w3-ripple w3-padding" >Search</a>

            </form>
        </div>
        </div>
 </div>
  <br>  <br>	
        <header class="w3-container">
    <h5 align="center"><b><i class="fa fa-dashboard"></i>Patient Life Cycle Management</b></h5>
  </header>
 
  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-card w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-medkit custom w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>52</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Medicine</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-card w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-user-md custom w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>99</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Medical tips</h4>
      </div>
    </div>
    <a href="myHealth.php">
    <div class="w3-quarter">
      <div class="w3-container w3-card w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-heartbeat custom w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>23</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>My Health</h4>
      </div>
      </div>
    </a>
    <div class="w3-quarter">
      <div class="w3-container w3-card w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-hospital custom w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>50</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Lab Report</h4>
      </div>
    </div>
  </div>
  
  <br><br>
  <!-- Footer -->
<div class="navbar-fixed-bottom">
 <?php include 'footer.php'; ?>
</div>

<!-- End page content -->

  
  
  
  
<script type="text/javascript" src="src/js/jquery-3.2.1.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>


<script>
	$(document).ready(function(){
		var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>

</body>
</html> 


