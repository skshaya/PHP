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
    
 <!--library to charts Moris-->   
 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
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
<div class="w3-container w3-padding" >
			<br><br><br><br>
			<div class="w3-container w3-padding " >
				<h1 align="left"><strong>Cholesterol</strong></h1>
                <button class="w3-button w3-blue w3-round-large w3-padding">Add New</button>
                <button class="w3-button w3-red w3-round-large w3-padding">Clear</button>
                <button class="w3-button w3-green w3-round-large w3-padding" onClick="goBack()">Back</button>
				<hr>
			</div>

<div id="myfirstchart" style="height: 250px;"></div>
<div class="w3-row-padding" style="padding-left:250px">
	<br><br><br>
    <div class="w3-threequarter w3-padding" >
    
        <div class="w3-card-4">
        
            <header class="w3-container w3-grey">
                <h3>2018/05/24</h3>
            </header>
        
            <div class="w3-container w3-padding">
                <div class="row">
                    <div class="w3-container" >
                        <span style="color:red">
                        <h2 style="font-size:72px;">173</h2>
                        GLUCOSE(mg/dL)</span>
                    </div>


                </div>
                
            </div>
            
    
            <footer class="w3-container w3-grey">
              <h5>Last Report Statistics</h5>
            </footer>
        
        </div>
        
    </div>
    
    
</div>

</body>
<script>
  new Morris.Line({
  // ID of the element in which to draw the chart.
  element: 'myfirstchart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  
  data: [
    { year: '2008-02-24', Total_mg_dL: 174},
    { year: '2008-04-24', Total_mg_dL: 154 },
    { year: '2008-05-24', Total_mg_dL: 185 },
    { year: '2008-06-24', Total_mg_dL: 139 },
    { year: '2008-08-24', Total_mg_dL: 200 }
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'year',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['Total_mg_dL'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Value']
});
</script>
<script type="text/javascript" src="src/js/jquery-3.2.1.min.js"></script>
<script>
function goBack() {
    window.history.back();
}
</script>
</html> 