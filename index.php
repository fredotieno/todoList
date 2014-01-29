<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Fred Otieno">

    <title>ToDo List</title>
    <script type="text/javascript">
      function refresh(str)      
      {

        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.open("GET","checktask.php?q="+str,true);
        xmlhttp.send();
        alert(str);
      }
    </script>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/todo.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <h2 class="form-signin-heading">Add an item to your ToDo List</h2>
      <form class="form-signin" action="index.php" method="post" role="form">
        <input type="text" class="form-control" placeholder="Enter a Task" name="task">
        <hr>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Submit Task</button>
        <hr>
      </form>
      <?php
        $link = mysqli_connect('localhost', 'root', 'Udonis 1', 'todoList');
        if (!$link) {
          die('Could not connect: ' . mysql_error());
        }
        //echo 'Connected successfully';
        if(isset($_POST[task])){
        $sql="INSERT INTO Tasks (TaskName, Status)
        VALUES('$_POST[task]', 0)";

        if (!mysqli_query($link,$sql)){
          die('Error: ' . mysqli_error($link));
        }
      }
        $result = mysqli_query($link,"SELECT * FROM Tasks");
        echo "<form name=".'"tasks"'.">";
        while($row = mysqli_fetch_array($result)){
          if($row[Status] == 1){
            echo "<input type=".'"checkbox"'." value=".$row[TaskName]." checked>" . $row[TaskName];
          }
          else{
            echo "<input type=".'"checkbox"'." value=".$row[TaskName]." onchange=".'"refresh(this.value)"'.">" . $row[TaskName];
          }
          echo "<br/>";
        }
        echo "</form>";
        
        mysql_close($link);
      ?>

      

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
  

</body></html>