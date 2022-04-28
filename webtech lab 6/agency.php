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

    <script src="../../../assets/js/admin/dashboard_script.js" ></script>

    <title>Agency Home</title>
</head>
<body>
    <section>
    <div class="hg">
            <div class="banner-content">
                <h1>Tourism Management System</h1>
                <p>The one stop service for travelling</p>
            </div>
        </div>
        
                        <a href="agency.php">DashBoard</a><br>
                        
                            <a href="profile.php" >Your Profile</a>  <br>
                
                            <a  href="default_package.php" >Add Default Package</a> <br>   
                        
                            <a  href="" >Tourist Spot</a>    <br>
                        
                            <a href="packageView.php" >Package List</a>   <br> 
                        
                            <a href="">Hotels</a><br>  
                        
                            <a  href="">Transport</a><br>
                        
                            <a  href="customerList.php">Customer List</a><br><br>
                        
                            <a href="">Logout</a><br>
                        
            <div class="textarea">
                <h4>Travel Agency Dashborad</h4>

                <div align = 'left'>
                    <h4>Welcome <?=$name;?></h4>
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