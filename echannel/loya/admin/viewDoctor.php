<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>| ABC E-Channel |</title>
        <link rel="stylesheet" href="src/w3.css">
        <link rel="stylesheet" href="src/latin_font.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="src/web-fonts-with-css/css/fontawesome-all.css">
        <link rel="stylesheet" href="src/web-fonts-with-css/css/fontawesome-all.min.css">    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Raleway" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/adminStyle.css">
        <link rel="stylesheet" href="css/doctorPageStyle.css">

    </head>
    <body>
        <?php include 'navBar.php'; ?>
        <div id="container">
            <?php include 'header_after_log.php'; ?>
        </div>
        <div class="container">
            <?php include 'subNavAdmin.php'; ?>
            <hr>
            <br>

            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <form id="searchDoctorForm"> 
                        <h3 class="text text-primary" style="text-align: center">List of Doctors</h3><br>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-10 mb-3"><input type="text" class="form-control" placeholder="Type the Doctor's Name Here..."></div>
                                <div class="col-md-2"><button type="submit" class="btn btn-outline-success">Search</button></div>
                            </div>
                        </div>
                    </form> 
                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "echannelling";
                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    $sql = "SELECT * FROM doctor";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        ?>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Specialty</th>
                                    <th scope="col">NIC</th>
                                    <th scope="col">Contact No</th>
                                    <th scope="col">Base Hospital</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row["docName"]; ?></th>
                                        <td><?php echo $row["address"]; ?></td>
                                        <td><?php echo $row["speciality"]; ?></td>
                                        <td><?php echo $row["NIC"]; ?></td>
                                        <td><?php echo $row["telNo"]; ?></td>
                                        <td><?php echo $row["hospital"]; ?></td>
                                        <td><?php echo $row["email"]; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-success btn-sm">Edit</button>
                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                        </td>

                                    </tr>
                                </tbody>
                                <?php
                            }
                        } else {
                            echo "0 results";
                        }

                        mysqli_close($conn);
                        ?>
                    </table>                  
                </div>
            </div>
        </div>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
