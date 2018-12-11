<?php // Create two new DateTime-objects...



        $db = mysqli_connect("localhost","root","","hr_db");
		$sql = "SELECT *  FROM table_timelog where id = 1";
        $result = mysqli_query($db,$sql);

        while ($row = mysqli_fetch_array($result)) {
        	$time1 = $row['time_in'];
        	$time2 = $row['time_out'];
        	
        	$timestamp1 = strtotime($time1);
        	$timestamp2 = strtotime($time2);



        	$hours1 = date('H', $timestamp1);
        	$hours2 = date('H', $timestamp2);

        	$dif = $hours2 - $hours1;
        }


      echo $dif;


?>