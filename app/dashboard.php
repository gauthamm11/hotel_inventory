<?php
require "dbase.php";
?>
 <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Product', 'Minimum Value', 'Current Status']
          <?php
$sql = "SELECT a.name,a.current_status,a.threshold,a.metric FROM item_list as a  where a.current_status <= a.threshold";
          $result = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_assoc($result)) {
 	echo ", [ '".$row['name']."(" .$row['metric'].")','" .$row['threshold'] ."','" . $row['current_status'] ."']";
 }
          
          ?>         
        ]);

        var options = {
          chart: {
            title: 'Product  Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
