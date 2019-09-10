<?php

require "dbase.php";

// $q = intval($_GET['id']);
if (isset($_GET['id']))
{

$q = $_GET['id'];

// echo $q;

$sql = "SELECT a.name,b.id,b.date,b.quantity,b.type FROM item_list as a inner join item_history as b on a.id =b.id where a.id = '$q' ORDER BY b.date ASC" ;


$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
$headname="";
    // $rows = mysqli_fetch_assoc($result);
//$headname=$rows['name'];
     
    echo "<h4>".$headname."</h4>";
    echo "<table class='table table-hover'>
<tr>
<th class='text-center'>Quantity</th>
<th class='text-center'>Type</th>
<th class='text-center'>Date</th>

</tr>";

 while($row = mysqli_fetch_assoc($result)) {


//while($row = mysqli_fetch_array($result)) {
     if($row['type']==1)
    echo "<tr class='table-success'>";
else
    echo "<tr class='table-warning'>";
    echo "<td class='text-center'>" . $row['quantity'] . "</td><td class='text-center'>";
    if($row['type']==1)
    echo "In Stock";
    else
   echo "Used";
    echo "</td><td class='text-center'>" . $row['date'] . "</td>";   
    echo "</tr>";
//}
//}
}

echo "</table>";
}else{
    header('location: index.php');
}

}
?>