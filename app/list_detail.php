<?php

require "dbase.php";

// $q = intval($_GET['id']);
if (isset($_GET['id'])){

$q = $_GET['id'];

  $sql = "SELECT b.id,b.date,b.quantity,b.type FROM item_list as a inner join item_history as b
 a.id =b.id where a.id = '$q'
 ORDER BY b.date ASC" ;


$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){

 while($row = mysqli_fetch_assoc($result)) {


echo "<table>
<tr>
<th>ID</th>
<th>Quantity</th>
<th>Type</th>
<th>Date</th>

</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['quantity'] . "</td>";
    echo "<td>" ;if($row['type']==1)
    echo "In Stock";
    else
   echo "Used";
    echo "<td>" . $row['date'] . "</td>";   
    echo "</tr>";
}
echo "</table>";
}
}else{
	echo "0 results";
}

}else{
	header('location: index.php');
}


?>