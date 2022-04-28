
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
    <link rel="stylesheet" href="../../../assets/css/profileDetails.css">
    
    <script src="js/package_script.js"></script>

    <script src="../../../assets/js/admin/dashboard_script.js" ></script>

    <style>
        .field{
            display: block;
            margin-bottom: 15px;
        }
        .formArea{
            margin: auto;
            width: 50%;
        }
    </style>
    <title>Default Packages</title>
</head>
<body onload="getData()">
    <section>
    <div>
            <div>
                <h1>Tourism Management System</h1>
                <p>The one stop service for travelling</p>
            </div>
        </div>
        
                    <a href="agency.php">DashBoard</a><br><br>
                    
                            <a href="profile.php" >Your Profile</a> <br><br>   
                        
                            <a href="default_package.php" >Add Default Package</a><br>   <br> 
                        
                            <a  href="" >Tourist Spot</a>    <br><br>
                        
                            <a href="packageView.php">Package List</a>  <br>  <br>
                        
                            <a href="">Hotels</a><br> <br>   

                            <a  href="">Transport</a><br><br>
            
                            <a  href="">Customer List</a><br><br>
                        <br>
                            <a href="php_validation/logout.php">Logout</a>

            <div class="textarea">
                <h4>Travel Agency Dashborad</h4>

                <div class="formArea">
                    <form action="" method="POST" onsubmit="validatePackage()">
                        <div class="field">
                            <label>Package</label>
                            <input type="text" name="package" id="name">
                        </div>
                        <div class="field">
                            <label for="package_type">Package Type:</label>
                            <select name="package_type" id="package_type">
                              <option value="platinum">Platinum</option>
                              <option value="gold">Gold</option>
                              <option value="silver">Silver</option>
                            </select>
                        </div>
                        <div class="field">
                            <label>Package Price</label>
                            <input type="text" name="price" id="price">
                        </div>
                        <div class="field">
                            <label for="package_type">Transport:</label>
                            <select name="transportation_id" id="transportation_id">
                              
                            </select>
                        </div>
                        <div class="field">
                            <label for="package_type">Package Type:</label>
                            <select name="package_type" id="tourist_spot">
                              
                            </select>
                        </div>
                        <div class="field">
                            <label for="package_type">Package Type:</label>
                            <select name="package_type" id="residency">
                              
                            </select>
                        </div>
                        <div class="field">
                            <input type="submit" value="Submit" name="submit">
                        </div>
                        
                        

                        

                        


                        

                        

                    </form>
                </div>
                
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