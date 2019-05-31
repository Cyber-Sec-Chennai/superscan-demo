<?php

session_start();

$now = time();

if (isset($_SESSION['discard_after']) && $now > $_SESSION['discard_after']) {
    // this session has worn out its welcome; kill it and start a brand new one
    header("location:/vsamm1/logout.php");
    session_destroy();
    session_start();
}

// either new or old, it should live at most for another hour
$_SESSION['discard_after'] = $now + 3600;

	if(!isset($_SESSION["sessid"]))
	{
		header("location:/vsamm1/login.php");
		exit;
	}
	$usergrp= $_SESSION["user_group"];
	$role = $_SESSION["user_role"];
	$user = $_SESSION["login_user"];
	$profile = $_SESSION['fname'];
	$proj = isset($_SESSION['proj']) ? $_SESSION['proj'] : '';
	include 'config.php';
	include 'update.php';
	
/*	if(isset($_POST["upload"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["file"]["tmp_name"]));  
      $query = "INSERT into upload(file_name) VALUES ('$file')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }  
 */
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>GOVERNANCE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   
    <style>
   body{
            
          background-color:white; 
		  overflow-x:none;
        }
        
        .container {
    width: 1297px;
	float:none;
//	margin-bottom:20px;
	margin-left:20px;
}
        .containers {
    width: 1347px;
	padding:10px;
	float:none;
	//background-color:rgba(1,1,1,0.5);
	//margin-top:20px;
	//margin-left: 20px;
}
        
       .nav-justified>li>a{
            
            background-color: #337ab7;
            margin-left: 2px;
           color: white;
    font-weight: bold;
        }
         /*
        .nav-justified>li>a>.active{
            
            background-color: yellow;
            color:black;
            font-weight: bold;
        }*/

                .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
    color: white;
    background-color: #e0440e;
            font-weight: bold;
}
        
/*        .nav>li>a:hover {
    text-decoration: none;	
    background-color: yellow;
}
        */
        
        .nav .open>a, .nav .open>a:focus, .nav .open>a:hover {
    background-color: #ff9900;
    border-color: #337ab7;
            font-weight: bold;
            color: black;
}
        


        
        .nav>li>a:hover, .nav>li>a:focus, .nav .open>a, .nav .open>a:hover, .nav .open>a:focus, {
    background:yellow;
}
        .nav>li>a:focus, .nav>li>a:hover {
    text-decoration: none;
    background-color: #ff9900;
}

.table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
  //  border: 1px solid black;
}      
   .table>thead:first-child>tr:first-child>th {
   // border-top: 1px solid black;
	background-color:#1bb69b;
	color: white;
}
        
        
        
        
/*      Start  Dropdown Menu*/

.dropdown-menu>li>a {
    color:white;
    font-weight:700;
}
.dropdown ul.dropdown-menu {
    border-radius:4px;
    box-shadow:none;
    margin-top:10px;
    width:224px;
    margin-left: 25%;
}
.dropdown ul.dropdown-menu:before {
    content: "";
    border-bottom: 10px solid #fff;
    border-right: 10px solid transparent;
    border-left: 10px solid transparent;
    position: absolute;
	left:3px;
    top: -10px;
  //  right: 16px;
    z-index: 10;
}
.dropdown ul.dropdown-menu:after {
    content: "";
    border-bottom: 12px solid #ccc;
    border-right: 12px solid transparent;
    border-left: 12px solid transparent;
    position: absolute;
    top: -12px;
	width:27px;
   // right: 14px;
    z-index: 9;
        }
        
        .nav-justified>.dropdown .dropdown-menu {
    
    background-color: steelblue;
        }
        
/*   End Dropdown     */
     
        
        
 .btn-circle {
  width: 40px;
  height: 40px;
  text-align: center;
  padding: 6px 0;
  //float:right;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
  margin-left:200px;
}
.btn-circle.btn-lg {
  width: 40px;
  background-color:#3c3c3c;
  height: 40px;
  padding: 5px 11px;
  font-size: 18px;
  line-height: 1.33;
  border-radius: 25px;
  margin-right:10px;
}
.btn-circle.btn-xl {
  width: 40px;
  height: 40px;
  padding: 10px 16px;
  font-size: 24px;
  background-color;#9b9b9d;
  line-height: 1.33;
  border-radius: 35px;
}

        

        .pad {
  
			padding-left: 40px;
			//background-color:rgba(23,67,88,0.5);
			box-shadow: 10px 10px 20px black;
            color: black;
			border-radius:5px;
}

.h3{
				color:black;
				font-weight:bold;
				text-align:center;
			}
			
        .dropdown-menu>li>a:hover {
            color: white;
            background-color: #286090;
        
        }
        a.btn.pwd.btns.btn-default.btn-block.btns {
    color: black;
}
        a.btn.pwd.btns.btn-default.btn-block.btns:hover {
    color: white;
}
        .dpn ul.dropdown-menu:before{
            display:none;

        }  
        li.dropdown {
            
            width:230px;
}
     hr.new1 {
	/* border-top: 1.5px solid grey; */
}    
        .dpn ul.dropdown-menu:after {
            
            display: none;
			content: "";
    border-bottom: 12px solid #fd0303;
    border-right: 12px solid transparent;
    border-left: 12px solid transparent;
    position: absolute;
    top: -12px;
    /* right: 14px; */
    z-index: 9;
        }
		.caret{
			margin-left:5px;
		}
		.protitle{
			text-align:center;
			font-weight:bold;
			color:#f0807f;
		//	background-color:rgba(1,1,1,10);
		//	width:20%;
			font-size:20px;
		//	margin-left:40%;
			margin-top:10px;
		}
    </style>
    
       <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script type="text/javascript">
   
   <?php 
			$query_dr= mysqli_query($connection, "select SUM(score) as score from verification_dr where project='$proj'");
			$query_ir= mysqli_query($connection, "select SUM(score) as score from verification_ir where project='$proj'");
			$query_st= mysqli_query($connection, "select SUM(score) as score from verification_st where project='$proj'");
			
			$dr= mysqli_fetch_object($query_dr);
			$ir= mysqli_fetch_object($query_ir);
			$st= mysqli_fetch_object($query_st);
		?>

      google.charts.load("current", {packages:["corechart"]});

      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

       var data = google.visualization.arrayToDataTable([
          ['Security Practice', 'Score'],
          ['Design Review',  parseFloat('<?php echo $dr->score; ?>')],
          ['Implementation Review', parseFloat('<?php echo $ir->score; ?>')],
          ['Security Testing', parseFloat('<?php echo $st->score; ?>')],
          
        ]);

        var options = {

            is3D: true,

            legend:'bottom',

        pieSliceText: 'value',

            backgroundColor: '#FFFFFF',

           

          

          

            tooltip: {

            text: 'value'

        }

        };


 


        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));

function selectHandler()

        {

            var selectedItem = chart.getSelection();

            var item=selectedItem[0];

            if (item.row==0) {

                location.href="/vsamm1/dashboard/verification/verification_dr.php";

            }

            else if(item.row==1)

            {

                location.href="/vsamm1/dashboard/verification/verification_ir.php";

            }

            else if(item.row==2){

                location.href="/vsamm1/dashboard/verification/verification_st.php";

            }

            else if(item.row==3){

                location.href="VerfDR.php";

            }

        }

	 google.visualization.events.addListener(chart, 'select', selectHandler);

        
        chart.draw(data, options);

      }
</script>
    <script type="text/javascript">
	
	<?php 
			$query_yes= mysqli_query($connection,"select count(*) as score from verification_dr where score=1 and project='$proj'");
			$query_half= mysqli_query($connection,"select count(*) as score from verification_dr where score=0.5 and project='$proj'");
			$query_some= mysqli_query($connection,"select count(*) as score from verification_dr where score=0.2 and project='$proj'" );
			$query_no= mysqli_query($connection,"select count(*) as score from verification_dr where score=0 and project='$proj'");
			
			$yes= mysqli_fetch_object($query_yes);
			$half= mysqli_fetch_object($query_half);
			$some= mysqli_fetch_object($query_some);
			$no= mysqli_fetch_object($query_no);
		?>
		
		
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Type', 'Assessment Factor'],
          ['Yes(1.0)',     parseFloat('<?php echo $yes->score; ?>')],
          ['Half(0.5)',      parseFloat('<?php echo $half->score; ?>')],
          ['Some(0.2)',  parseFloat('<?php echo $some->score; ?>')],
		  ['No(0)', parseFloat('<?php echo $no->score; ?>')],
          
        ]);
          
           var options = {
            legend:'bottom',
          backgroundColor: '#0000',
		  
		  
        };
          var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_materialS'));
      chart.draw(data, options);

        /*var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));*/
      }
    </script>
    
	
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
	
	<?php 
			$query_yes= mysqli_query($connection,"select count(*) as score from verification_dr where score=1 and project='$proj'");
			$query_no= mysqli_query($connection,"select count(*) as score from verification_dr where score<1 and project='$proj'");
			
			$yes= mysqli_fetch_object($query_yes);
			$no= mysqli_fetch_object($query_no);
		?>
		
		
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Effort', 'Amount given'],
		  ['Positive', parseFloat('<?php echo $yes->score; ?>')],
          ['Negative', parseFloat('<?php echo $no->score; ?>')],
		  	
        ]);

        var options = {
          pieHole: 0.6,
          pieSliceTextStyle: {
            color: 'white',
          },
          legend: 'bottom'
        };

        var chart = new google.visualization.PieChart(document.getElementById('donut_single'));
        chart.draw(data, options);
      }
    </script>
      
    
</head>
<body>

<div class="containers">
  <ul class="nav nav-pills nav-justified">
    <li style="width:208px;"><a href="/vsamm1/dashboard/home.php">Home</a></li>
      <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Governance <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li class="active"><a href="/vsamm1/dashboard/governance/governance_sm.php">Strategy & Metrics</a></li>
          <li class="divider"></li>
        <li><a href="/vsamm1/dashboard/governance/governance_eg.php">Education & Guidance</a></li>
          <li class="divider"></li>
        <li><a href="/vsamm1/dashboard/governance/governance_pc.php">Policy and Compliance</a></li>                        
      </ul>
    </li>
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Construction<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="/vsamm1/dashboard/construction/construction_ta.php">Threat Assessment</a></li>
          <li class="divider"></li>
        <li><a href="/vsamm1/dashboard/construction/construction_sr.php">Security Requirements</a></li>
          <li class="divider"></li>
        <li><a href="/vsamm1/dashboard/construction/construction_sa.php">Secure Architecture</a></li>                        
      </ul></li>
    <li class="dropdown active"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Verification<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a data-toggle='pill' href="/vsamm1/dashboard/verification/verification_dr.php">Design Review</a></li>
          <li class="divider"></li>
        <li><a href="/vsamm1/dashboard/verification/verification_ir.php">Implementation Review</a></li>
          <li class="divider"></li>
        <li><a href="/vsamm1/dashboard/verification/verification_st.php">Security Testing</a></li>                        
      </ul></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Operations<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="/vsamm1/dashboard/operations/operations_im.php">Issue Management</a></li>
          <li class="divider"></li>
        <li><a href="/vsamm1/dashboard/operations/operations_eh.php">Environment Hardening</a></li>
          <li class="divider"></li>
        <li><a href="/vsamm1/dashboard/operations/operations_oe.php">Operational Enablement</a></li>                        
      </ul></li>
      
       <li class="dropdown dpn"><button type="button"  class="btn btn-primary btn-circle btn-lg dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></button>
	<!--	<div style="text-align:right;font-weight:bold;color:grey"> <?php echo $role.' - '.$profile; ?></div>  -->
		<ul id="products-menu" class="dropdown-menu clearfix" role="menu" style="position: absolute;top: 100%;left:90px;z-index: 1000; float:left; min-width: 188px; padding: 27px 0;margin: 2px -29px 0;font-size: 14px;text-align: left;list-style: none;background-color: rgba(1,1,1,0.6);background-clip: padding-box; border: 1px solid #ccc; border: 1px solid rgba(0,0,0,.15); border-radius: 5px; -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);box-shadow: 0 6px 12px rgba(0,0,0,.175);width:170px;">
           <?php
				if($_SESSION['user_role']=="Admin"){ ?>
			<li style="width: 170px;margin-left: 10px;"><a href="/vsamm1/usermanage/index.php" role="button" class="btn btn-primary btn-block">User Management</a></li>
			<li style="width: 170px;margin-left: 10px;margin-top:10px;"><a href="/vsamm1/usermanage/question.php" role="button" class="btn btn-primary btn-block">Questionnaire</a></li>
			<li style="width: 170px;margin-left: 10px;margin-top:10px;"><a href="" role="button" class="btn btn-primary btn-block">File Management</a></li>
			<li style="width: 170px;margin-left: 10px;margin-top:10px;"><a href="/vsamm1/usermanage/report.php" role="button" class="btn btn-primary btn-block">Report Management</a></li>
		<li style="width: 170px;margin-left: 10px;margin-top:10px;"><a href="/vsamm1/usermanage/notification.php" role="button" class="btn btn-primary btn-block">Notifications</a></li>

		<?php		}   ?>
			<li style="width: 170px;margin-left: 10px; margin-top:10px"><a href="/vsamm1/logout.php" role="button" class="btn btn-primary btn-block">Sign Out<span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
            <li style="width: 150px;margin-left: 20px;margin-top: 12px;"><a href="/vsamm1/dashboard/changepswd.php"  role="button" class="btn pwd btns btn-default btn-block btns" >Profile</a></li>
                        
        </ul>

    </li>
    <!--  <div class="protitle"><?php echo $proj; ?></div> -->
  </ul>
     
 
<!--
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
      
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
-->

       
</div>

<?php
$query_drcount= mysqli_query($connection,"select count(*) as total from verification_dr where project='$proj'");
$drcount= mysqli_fetch_object($query_drcount);

$query_ircount= mysqli_query($connection,"select count(*) as total from verification_ir where project='$proj'");
$ircount= mysqli_fetch_object($query_ircount);

$query_stcount= mysqli_query($connection,"select count(*) as total from verification_st where project='$proj'");
$stcount= mysqli_fetch_object($query_stcount);

$all = $drcount->total + $ircount->total + $stcount->total;
$verall = $dr->score + $ir->score + $st->score;

?>
    
   <hr style="margin-bottom:0px;margin-top:0px;"></hr>
<br><br>
    <div class="container">
        <div class="row">
           
            
    <div class="col-md-4 pad card">
	<div class="h3">Verification</div>
        <div id="donutchart" style="width: 100%; height: 360px;"></div>
        <h4 style="color:black;"><b>Total Score</b>:<span><?php echo number_format((float)$verall, 1, '.', '');?>/&nbsp;<?php echo $all; ?></span></h4>
        </div>
		
		
		<div class="col-md-4 pad card">
		<div class="h3">Design Review</div>
        <div id="columnchart_materialS" style="width: 100%; height: 360px;"></div>
        <h4 style="color:black;"><b>Total Score</b>:<span><?php echo number_format((float)$dr->score, 1, '.', '');?>/&nbsp;<?php echo $drcount->total; ?></span></h4>
        </div>
		
		
		
		<div class="col-md-4 pad">
		<div class="h3">Net Mitigation</div>
        <div id="donut_single" style="width: 100%; height: 360px;"></div>
        <h4 style="color:white;"><b>Total Score</b>:<span>2/5</span></h4>
        </div>
    
       
    
       
    </div>
	</div>
	
	
	
	<div class="container">
    <br><br>
    
        <div class="row">
		
        
        <div class="col-md-12">
       
        <div style="border-radius:10px;" class="table-responsive">

                
              <table class='table table-hover table-responsive table-striped'>
                   
                 <thead id="tabhead">
       <tr>
            <th class="">vSSAMM-ID</th>
            <th class="">ASSESSMENT FACTOR</th>
            <th class="">SCORE</th>
            <th class="">USER</th>
            <th class="">AUDITOR</th>
            
			<?php 
			if($usergrp == "Verification" and ($role == "Auditor" or $role == "User")){ ?>
			<th class="">ACTION</th>
			<?php } ?>
        </tr> 
    </thead>
    <tbody>
    
    
<?php
/*
if(isset($_POST['upload']))
{
	if (($_FILES['my_file']['name']!="")){
// Where the file is going to be stored
	$target_dir = "upload/";
	$file = $_FILES['my_file']['name'];
	$path = pathinfo($file);
	$filename = $path['filename'];
	$ext = $path['extension'];
	$temp_name = $_FILES['my_file']['tmp_name'];
	$path_filename_ext = $target_dir.$filename.".".$ext;
	echo $path_filename_ext;
 
// Check if file already exists
if (file_exists($path_filename_ext)) {
 echo "Sorry, file already exists.";
 }else{
 move_uploaded_file($temp_name,$path_filename_ext);
 echo "Congratulations! File Uploaded Successfully.";
 
 }
}
}
*/

	
// PAGINATION VARIABLES
// page is the current page, if there's nothing set, default is page 1
$page = isset($_GET['page']) ? $_GET['page'] : 1;
 
// set records or rows of data per page
$records_per_page = 10;
 
// calculate for the query LIMIT clause
$from_record_num = ($records_per_page * $page) - $records_per_page;
$table  = mysqli_query($connection ,"SELECT * FROM verification_dr where project='$proj' ORDER BY id ASC LIMIT $from_record_num, $records_per_page");
		if($table){
          while($row  = mysqli_fetch_array($table)){ ?>
              <tr id="<?php echo $row['id']; ?>">
                <td data-target="vsammid"><?php echo "VER-DR ".$row['id']; ?></td>
                <td data-target="question"><?php echo $row['question']; ?></td>
                <td data-target="score"><?php echo $row['score']; ?></td>
                <td data-target="owner"><?php echo $row['owner']; ?></td>
                <td data-target="audit"><?php echo $row['audit']; ?></td>
                <td style="display:none"; data-target="precomment"><?php echo $row['comment']; ?></td>
                <td style="display:none"; data-target="commentor"><?php echo $row['commentor']; ?></td>
				
				
				<?php 
				if($usergrp == "Verification" and  ($role == "User" or $role == "Auditor"))
				{ ?>
                <td style="text-align:center;"><a href="#" class="btn btn-default" style="background:#3399ff;color:white;" data-role="update" data-id="<?php echo $row['id'] ;?>">Edit</a></td>
				<?php } ?>
              </tr>
         <?php }
echo "</tbody>";
echo "</table>";


// PAGINATION
// count total number of rows
		$query = "SELECT COUNT(*) as total_rows FROM verification_dr where project='$proj' ";
		$stmt = $con->prepare($query);
		$stmt->execute();
		 
		// get total rows
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$total_rows = $row['total_rows'];


		// paginate records
		$page_url="verification_dr.php?";
		include_once "paging.php";
		}

		// if no records found
		else{
			echo "<div class='alert alert-danger'>No records found.</div>";
		}
?>
       

<div class="clearfix"></div>

                
            </div>
            
        </div>
	</div>
     
</div>

<div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Edit Score</h4>
          </div>
		  <form class='editform' id='editform' method="post"  enctype="multipart/form-data">
          <div class="modal-body">
              <div class="form-group">
                <label>Assessment Factor</label>
                <input type="text" id="question" class="form-control" readonly>
              </div>
              <div class="form-group">
                <label>Score</label>
                <select class="form-control" id="score">
					<option>-- Select Score--</option>
					<option value="0">0.0</option>
					<option value="0.2">0.2</option>
					<option value="0.5">0.5</option>
					<option value="1">1.0</option>
				  </select>
              </div>

               <div class="form-group">
                <label>Auditor</label>
                <input type="text" id="audit" value="" class="form-control" readonly>
              </div>
			  
			  <div class="form-group">
                <label>User</label>
                <input type="text" id="owner" class="form-control" readonly>
              </div>
			  
			  <div class="form-group">
                <label>Previous Comment</label>
                <textarea rows="2" id="precomment" class="form-control" readonly ></textarea>
              </div>
			  
			  <div class="form-group">
                <label>New Comment</label>
                <textarea rows="2" id="newcomment" class="form-control" placeholder="Enter Your Comment"></textarea>
              </div>
			  
			  
			  <div class="form-group">
              <label>Artifacts</label>
						<input type='file' name='file' id='file' class='form-control' >
              </div>
					
			  
                <input type="hidden" id="userId" class="form-control">


          </div>
          <div class="modal-footer">
            <input type='submit' id="save" class="btn btn-primary pull-right" value="Update" >
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          </div>
		 </form>
        </div>

      </div>
    </div>


<!-- Modal -->
<div id="uploadModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">File upload form</h4>
      </div>
      <div class="modal-body">
        <!-- Form -->
        <form method='post' action='' enctype="multipart/form-data">
		<div class="form-group">
                <label>Assessment Factor</label>
                <input type="text" id="question" class="form-control">
        </div>
          Select file : <input type='file' name='file' id='file' class='form-control' ><br>
          <input type='button' class='btn btn-info' value='Upload' id='upload'>
        </form>

        <!-- Preview-->
        <div id='preview'></div>
      </div>
 
    </div>

  </div>
</div>






	

</body>

<script>

user = '<?php echo $profile; ?>';
role = '<?php echo $role ;?>';
pro = '<?php echo $_SESSION['proj']; ?>';


  $(document).ready(function(){

    //  append values in input fields
      $(document).on('click','a[data-role=update]',function(){
            var id  = $(this).data('id');
            var question  = $('#'+id).children('td[data-target=question]').text();
            var score  = $('#'+id).children('td[data-target=score]').text();
            var audit  = $('#'+id).children('td[data-target=audit]').text();
            var commentor  = $('#'+id).children('td[data-target=commentor]').text();
            var owner  = $('#'+id).children('td[data-target=owner]').text();
            var precomment  = $('#'+id).children('td[data-target=precomment]').text();
			if(precomment!=""){
            precomment  = $('#'+id).children('td[data-target=precomment]').text();
			precomment+='\n[commented by - ';
			precomment+=$('#'+id).children('td[data-target=commentor]').text();
			precomment+=']';
			}
			
			if(audit=="" && role == "Auditor"){ audit=user; }
			if(owner=="" && role == "User"){ owner=user; }

            $('#question').val(question);
            $('#score').val(score);
            $('#owner').val(owner);
			$('#audit').val(audit);
			$('#commentor').val(commentor);
			$('#precomment').val(precomment);
			$('#newcomment').attr("placeholder","Enter your Comment here..!" ).val();
            $('#userId').val(id);
            $('#myModal').modal('toggle');
      });

      // now create event to get data from fields and update in database 

       $('#save').click(function(){
		   
		var id  = $('#userId').val(); 
        var question =  $('#question').val();
        var score =  $('#score').val();
		var audit =   $('#audit').val();
		var owner =   $('#owner').val();
        var commentor =   $('#commentor').val();
        var newcomment =   $('#newcomment').val();
		var files = $('#file')[0].files[0];
		   
		   var fd = new FormData();
		   fd.append('id',id);
		   fd.append('score', score);
		   fd.append('tbl','verification_dr');
		   fd.append('secprac',"Design Review");
		   fd.append('question',question);
		   fd.append('audit',audit);
		   fd.append('owner',owner);
		   fd.append('newcomment', newcomment);
		   fd.append('pro', pro);
		   
		   if($('#file').val() != '') {            
			  $.each($('#file').prop("files"), function(k,v){
				  var filename = v['name'];    
				  var ext = filename.split('.').pop().toLowerCase();
				  if($.inArray(ext, ['pdf','doc','docx']) == -1) {
					  alert('Please upload only pdf,doc,docx format files.');
					  return false;
				  }
				  else{
					  fd.append('file',files);
				  }
			  });        
			}
		  
					
		  if(newcomment!=""){commentor=user};
		  fd.append('commentor', commentor);

          $.ajax({
              url      : 'update.php',
              type   : 'post', 
			//  dataType: "JSON",
			 // data		:$('form.editform').serialize(),
            //  data     : {tbl: "governance_sm", question : question , score: score , audit : audit , owner: owner, newcomment: newcomment, commentor: commentor, file: file, id: id},
				data 	: fd,
				contentType: false,
				processData: false,
			 success  : function(response){
                            // now update user record in table 
                             $('#'+id).children('td[data-target=question]').text(question);
                             $('#'+id).children('td[data-target=score]').text(score);
                             $('#'+id).children('td[data-target=audit]').text(audit);
                             $('#'+id).children('td[data-target=owner]').text(owner);
                             $('#'+id).children('td[data-target=commentor]').text(commentor);
                             $('#'+id).children('td[data-target=newcomment]').text(newcomment);
							 alert("Image Inserted into Database"); 
                             $('#myModal').modal('toggle');
							////alert(response);
							window.location.reload();
                         }
          });
       });
	   
	
			
	  
	  
  });
</script>   
    
    

</html>
