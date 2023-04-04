<?php

$host = "localhost:3306";
$dbusername = "root";
$dbpassword = "";
$dbname = "artgalleryproject";

$conn = new PDO("mysql:host=".$host.";dbname=".$dbname, $dbusername, $dbpassword);

// check connection
if (!$conn){
    die("connection failed");

}

else{
    $name = filter_input(INPUT_POST, "name"); 
    if($query = "select customer.CID,customer.NAME,customer.STREET,customer.CITY,state.STATENAME,customer.ZIPCODE from customer join state on customer.STATEAB = state.STATEAB where state.stateAB = :name or state.STATENAME = :name")
    {
       if($query==null){
           echo "Record is not available";
           die();
       } 
       else{
           $stmt = $conn->prepare($query);
           $stmt->execute(array(":name" => $name));
           $rows = $stmt->fetchALL(PDO::FETCH_ASSOC);
       }
    }
}
?>

<html>
    <head>
        <title>Display data</title>
<style type = "text/css">

    table{
        width: 80%;
        border-collapse: collapse;
        color: blue;
        text-align: left;
    }
    th{
        background-color: grey;
        color: blue;
    }
    tr:nth-child(even){background-color:#f2f2f2;}
</style>
        </head>
    <body>
    <table>
        <tr>
            <th>CID</th>
            <th>Customer Name</th>
            <th> Street</th>
            <th>City</th>
            <th>State</th>
            <th>Zipcode</th>
		</tr>
        
<?php

foreach($rows as $row){
    echo "<tr><td>". $row["CID"]."</td><td>".$row["NAME"]."</td><td>".$row["STREET"]."</td><td>".$row["CITY"]."</td><td>".$row["STATENAME"]."</td><td>".$row["ZIPCODE"]."</td></tr>";
}


echo "</table>";
?>

</table>

</body>
</html>
