<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body bgcolor="#F0F0F0">
<div id="container">
            <?php include 'header.php'; ?>
        </div>
<div class="w3-container">
<br><br><br>
<div class="row">
  <button class="w3-button  w3-blue w3-border w3-border-black w3-round-large ">MyBooking</button>
  <button class="w3-button w3-blue w3-border w3-border-black w3-round-large">New Booking</button>
  <button class="w3-button w3-blue w3-border w3-border-black w3-round-large">Search Booking</button>
</div>
<br>
  <table class="w3-table-all">
    <thead>
      <tr class="w3-red">
        <th>Ref No</th>
        <th>Recipt No</th>
        <th>Name</th>
        <th>Time</th>
        <th>Doctor</th>
        <th>Session</th>
        <th>Hospital</th>
        <th>Rebook</th>
      </tr>
    </thead>
    <tr>
      <td>001</td>
      <td>R021</td>
      <td>M A R Wedisa</td>
      <td>2.00</td>
      <td>Mr.Kariyawasam</td>
      <td>Afternoon</td>
      <td>Balangoda Hospital pvt(LTD)</td>
      <td>Yes</td>
    </tr>
    
  </table>
</div>
<br><br><br><br><br>
<div class="navbar-fixed-bottom">
 <?php include 'footer.php'; ?>
</div>
</body>
</html>