
<?php

$host = "localhost";
$user = "root";
$password = "";
$dbName = "control"; // name of dataBase

// Creat connection with the database 
$connectLink =mysqli_connect($host, $user, $password, $dbName);

if ($connectLink  === false)
{
    die("ERROR: Could not connect. ".mysqli_connect_error());
}
//----------------------------------------------
?>

<!DOCTYPE html> 

<html>
<head>
  
 <meta charset="UTF-8">
 <link rel="icon" 
   type="image/png" 
   href="/icon/Robot-icon.png"
   size="32x32"  
 >
 
<title>Connect to dataBase</title>

<style>

#body2{

background:rgba(176, 196, 255, 0.973);

}

</style>
</head> 
<body id="body2">
    
    
<div>

 <?php

    if (isset($_POST["Forwards"]))
{

    $sql = "INSERT INTO `control_button`(`Forwards`) VALUES ('F')";

    if (mysqli_query($connectLink , $sql))
    {
        echo "---> Enter Forwards";
    }
    else
    {
        echo "ERROR: Could not able to execute $sql. ".mysqli_error($connectLink );
    }
}

elseif(isset($_POST["Backwards"]))
{

    $sql = "INSERT INTO `control_button`(`Backwards`) VALUES ('B')";

    if (mysqli_query($connectLink , $sql))
    {
        echo "---> Enter Backwords";
    }
    else
    {
        echo "ERROR: Could not able to execute $sql. ".mysqli_error($connectLink);
    }
}


elseif(isset($_POST["left"]))
{

    $sql = "INSERT INTO `control_button`(`Left`) VALUES ('L')";

    if (mysqli_query($connectLink, $sql))
    {
        echo "---> Enter Lift";
    }
    else
    {
        echo "ERROR: Could not able to execute $sql. ".mysqli_error($connectLink );
    }
}


elseif(isset($_POST["Right"]))
{

    $sql = "INSERT INTO `control_button`(`Right`) VALUES ('R')";

    if (mysqli_query($connectLink , $sql))
    {
        echo "---> Enter Right";
    }
    else
    {
        echo "ERROR: Could not able to execute $sql. ".mysqli_error($connectLink);
    }
}



else
{
    $sql = "INSERT INTO `control_button`(`Stop`) VALUES ('S')";

    if (mysqli_query($connectLink , $sql))
    {
        echo "---> Enter Stop";
    }
    else
    {
        echo "ERROR: Could not able to execute $sql. ".mysqli_error($connectLink );
    }
    mysqli_close($connectLink); // close connection
} 


?>
</div>
</body>
</html>


