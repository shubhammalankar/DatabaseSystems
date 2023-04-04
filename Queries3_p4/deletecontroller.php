

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
    
    $statename = filter_input(INPUT_POST, "statename"); 

    $query = "DELETE FROM state WHERE statename='$statename' ";


    if($conn->query($query)){
        echo"  Deleted Successfully  ";
    }
    else{
        echo"error: ".$conn->error;
    }
}
$conn->close();
?>



