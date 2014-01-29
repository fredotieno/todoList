<?php
        $link = mysqli_connect('localhost', 'root', 'Udonis 1', 'todoList');
        if (!$link) {
          die('Could not connect: ' . mysql_error());
        }
        if(isset($_POST[task])){
        $sql="INSERT INTO Tasks (TaskName, Status)
        VALUES('$_POST[task]', 0)";

        if (!mysqli_query($link,$sql)){
          die('Error: ' . mysqli_error($link));
        }
      }