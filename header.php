<?php
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
include ("dbcon.php");
?>
<!DOCTYPE html>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Vulnerable Application</title>
		<style type="text/css">
		
			body {
				margin:0;
				padding:0;
				font-family: Sans-Serif;
				line-height: 1.5em;
			}
			
			#header {
				background: #ccc;
				height: 100px;
				
			}
			
			#header h1 {
				margin: 0;
				padding-top: 15px;
			}
			
			main {
				padding-bottom: 10010px;
				margin-bottom: -10000px;
				float: left;
				width: 100%;
			}
			
			#nav {
				padding-bottom: 10010px;
				margin-bottom: -10000px;
				float: left;
				width: 230px;
				margin-left: -100%;
				background: #eee;
			}
			
			#footer {
				clear: left;
				width: 100%;
				background: #ccc;
				text-align: center;
				padding: 4px 0;
				bottom:0px;
				position:fixed;
			}
	
			#wrapper {
				overflow: hidden;
			}
						
			#content {
				margin-left: 230px; /* Same as 'nav' width */
			}
			
			.innertube {
				margin: 15px; /* Padding for content */
				margin-top: 0;
			}
		
			p {
				color: #555;
			}
	
			nav ul {
				list-style-type: none;
				margin: 0;
				padding: 0;
			}
			
			nav ul a {
				color: darkgreen;
				text-decoration: none;
			}
		.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
}
		</style>
		
		<script>

  window.alert = function() {
    document.getElementById("crak").innerHTML="Ohhh...You did it!!!!!!!!!!!!!";
  
  };
</script>
	</head>
	
	<body>		

		<header id="header">
			<div class="innertube">
				<h1>Welcome to Highly Vulnerable Application</h1>
				<?php
				if(isset($_SESSION['user'] )){
					?>
				<div class="dropdown" style="float:right">
				<span>Welcome User,<?php echo $_SESSION['user'] ; ?></span>
				
  
  <div class="dropdown-content">
    <a href="changePassword.php">Change Password</a>
  <a href="logout.php">Logout</a>
  </div>
  </div>
</div>
				
				
				<?php } ?>
			</div>
		</header>
		
		<div id="wrapper">
		
			<main>
				<div id="content">
					<div class="innertube">
						<h1>Test Your Skill</h1>
						<h1 id="crak"></h1>