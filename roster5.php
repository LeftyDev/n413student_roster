<?php
include("php/n413connect.php");

//find which week of class we are in
$classStart = new DateTime('2017-01-11 12:00'); 
$thisDate = new DateTime("now");
$interval = $classStart->diff($thisDate);
$days = $interval->format('%a');
$weeks = round($days/7);
$class_week = $weeks+1;
//----------------------------------------------

$query = "SELECT id, first_name, last_name, photo FROM class_roster";
$result = mysqli_query($link, $query);

$students = Array();
while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
	$week_query = "SELECT week FROM attendance 
					WHERE roster_id = '".$row["id"]."'
					AND week = '".$class_week."'";
	$week_result = mysqli_query($link, $week_query);
	$present_this_week = false;	
	if (mysqli_num_rows($week_result) > 0){$present_this_week = true;}			
	
	$students[] = Array( 	"id" => $row["id"],
							"first_name" => $row["first_name"],
							"last_name" => $row["last_name"],
							"photo" => $row["photo"], 
							"present" => $present_this_week);
}


?>

<DOCTYPE html>
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
			var class_week = <?php echo $class_week; ?>;
			function set_attendance(id){
				//use the jQuery post function to send the id to the server, and update the screen
				$.post("php/set_attendance.php",
						{id:id, week:class_week},
						function(data){
							$("#student_"+id).empty();
							$("#student_"+id).html(data);
							$("#student_"+id).attr("class","present-student");
						},
						"text"
				);
			}
		</script>
    </head>
    
    <body>
    	<!-- BEGIN Bootstrap Navbar -->
    	<nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">N413 Roster</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
        <!-- END Bootstrap Navbar -->
        <div class="container">
          <div class="row">
            <div class="col-md-2"></div> <!-- 2-column spacer -->
            <div class="col-md-10"> <!-- column for content -->
            	<h3>N413 Attendance Week <?php echo $class_week; ?></h3> 
    <?php
    foreach ($students as $student){
					
		if($student["present"]){
        	echo '
				<div id="student_'.$student["id"].'" class="present-student">
					<img src="'.$student["photo"].'" height="30"> '.$student["first_name"].' '.$student["last_name"].'
					<span class="glyphicon glyphicon-check" aria-hidden="true" style="float:right;margin-right:0.3em;"></span>
				</div>';
		}else{
			echo '
				<div id="student_'.$student["id"].'" class="student" onclick="javascript:set_attendance(\''.$student["id"].'\');">
					<img src="'.$student["photo"].'" height="30"> '.$student["first_name"].' '.$student["last_name"].'
					<span class="glyphicon glyphicon-unchecked" aria-hidden="true" style="float:right;margin-right:0.3em;"></span>
				</div>';
		}		
    }
    ?>
    		</div> <!-- /col-md-10 -->
    	  </div> <!-- /.row -->
    	</div>  <!-- /.container -->
    </body>
</html>