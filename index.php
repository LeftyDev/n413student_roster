<?php
include("php/n413connect.php");

$query = "SELECT id, first_name, last_name, photo from class_roster";
$result = mysqli_query($link, $query);

$students = Array();
while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
	$students[] = Array(
        "id" => $row["id"],
        "first_name" => $row["first_name"],
        "last_name" => $row["last_name"],
        "photo" => $row["photo"]
    );
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/n413_roster.css" rel="stylesheet">
		<script src="js/jquery-1.11.3.js"></script>
        <script src="js/bootstrap.js"></script>
        <title>Student Roster</title>
        <script type="text/javascript">
			function student_clicked(student_id){
				alert("You have selected student #" + student_id + ".");
			}
		</script>
    </head>
    
    <body>

    	<!-- Bootstrap Navbar -->
    	<nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">N413 Student Roster&nbsp;&nbsp;&nbsp;</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><button type="button" class="btn btn-default navbar-btn">Login</button></li>
                    <li>&nbsp;</li>
                    <li><button type="button" class="btn btn-default navbar-btn">Sign Up</button></li>
                </ul>
            </div>
          </div>
        </nav>

        <div class="container">
          <div class="row">
            <div class="col-md-12">
    <?php
    foreach ($students as $student){
        echo '<div id="student_' . $student["id"] . '" class="student" onclick="student_clicked(\'' . $student["id"] . '\');">
				<img src="' . $student["photo"] . '" height="75">&nbsp;&nbsp;&nbsp;' . $student["last_name"] . ', ' . $student["first_name"] . '
			  </div>';
    }
    ?>
    		</div>
    	  </div>
    	</div>

    </body>
</html>