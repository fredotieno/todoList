<?php
	$str = intval($_GET['str']);
	$con = mysqli_connect('localhost', 'root', 'Udonis 1', 'todoList');
        if (!$con) {
          die('Could not connect: ' . mysql_error());
        }
        echo "Hello";
        mysqli_query($con,"UPDATE Tasks SET Status=1 WHERE TaskName=$str");
        mysqli_close($con);