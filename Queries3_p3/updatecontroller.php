
<?php

$host = "localhost:3306";
$dbusername = "root";
$dbpassword = "";
$dbname = "artgalleryproject";


$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
}

else{
    $stateab = filter_input(INPUT_POST, "stateab"); 
    $statename = filter_input(INPUT_POST, "statename"); 

    $query = "UPDATE state SET stateab='$stateab' where statename='$statename'";


    if($conn->query($query)){
        echo"Record Updated Successfully";
    }
    else{
        echo"error: ".$conn->error;
    }
}
$conn->close();
?>
