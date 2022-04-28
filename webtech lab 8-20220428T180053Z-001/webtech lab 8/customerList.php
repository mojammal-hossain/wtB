<?php
    session_start();
    if(isset($_SESSION['name_user'])){
        $name = $_SESSION['name_user'];
    
    global $name;
   
?>
<!doctype html>
<html lang="en">

<head>
    Required meta tags
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="agency1.css">
    <link rel="stylesheet" href="agency3.css">
    <link rel="stylesheet" href="agency2.css">

    <script src="js/package_script.js"></script>
    <style>
    .field {
        display: block;
        margin-bottom: 15px;
    }

    .formArea {
        margin: auto;
        width: 50%;
    }
    .result{
        display: none;
    }
    .row{
        width: 95%;
        margin: auto;
        margin-top: 25px;
        display: flex;
        justify-content: space-between;
    }
    .mn{
        width: 35%;
    }
    .search{
        width: 25%;
    }
    table{
        width: 95%;
        margin: auto;
    }
    </style>
    <title>Default Packages</title>
</head>

<body onload="getcus()">
    <section>
                <h1>Tourism Management System</h1>
                <p>The one stop service for travelling</p>
        
                <a  href="agency.php">DashBoard</a><br><br>
                
                            <a  href="profile.php">Your Profile</a><br><br>
                
                            <a  href="default_package.php">Add Default Package</a><br><br>
                        
                            <a  href="">Tourist Spot</a><br><br>
                        
                            <a  href="packageView.php" >Package List</a>  <br><br>  
                        
                            <a href="">Hotels</a><br><br>
                        
                            <a  href="">Transport</a><br><br>
                        

                            <a  href="customerList.php">Customer List</a><br><br>
                        <br>

                            <a  href="php_validation/logout.php">Logout</a><br><br>
              
         
                        <h4>Travel Agency Dashborad</h4>

                    <!-- <div class="search">
                        <label>Search : </label>
                        <input type="search" name="search" id="search" onkeyup="search()" onkeydown="hide()">
                        <div class="result">

                        </div> -->
                    <!-- </div>
                </div> -->
                <table>
                    <thead>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Role</th>
                    </thead>
                    <tbody id="bodyText">
                        
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    

</body>

</html>
<?php
    }
    else{
        header("location: login.php");
    }
?>