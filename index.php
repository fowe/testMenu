<? 
//$query = 'select * from categories';
	
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>menu</title>
<link href="style_menu.css" rel="stylesheet" type="text/css" />
<link href="js/css/smoothness/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css"/>

<script src="js/jquery-2.1.0.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.2.1.js"></script>
<script src="js/script.js"></script> 
<script src="js/jquery.tooltipster.js"></script>
<script src="js/jquery.ui.totop.js"></script>

<script src="js/jquery-ui-1.8.16.custom.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  
 <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
 <link rel="stylesheet" href="DatePickerStyle.css">
  <script>
  $(function() {
    $( ".datepicker" ).datepicker();
  });
  </script>
</head>
  

<?  
//require_once("includes/check_session.php");
//require_once ("includes/classes/login_functions.php");
require_once ("includes/classes/misc_functions.php");
require_once ("includes/classes/mysql_ultimate.php");  
require_once ("includes/index_logic.php");
require_once ("includes/initialize_logic.php");
//include_once("googleanalytics.php");

?>

<body>
	<header>
		
		<img style="position:absolute;top:0;left:10px;" src="images/logo.png" alt="">
		<a href="#" style="color:white;text-decoration:none;padding:5px;font-weight:bold;background-color:#419CFC;position:absolute;right:10px;bottom:10px;">Setting</a>
	</header>
	<!--<h1>Restaurant's logo</h1>-->
	<div id="admin_container">
	<? include_once("includes/admin.php"); ?>
	</div>
	<footer></footer>
</body>

</html>