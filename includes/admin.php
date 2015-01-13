<? 
	
	
	if($_GET["myadminAction"]=="Add" or $_GET["myadminAction"]=="Edit" or $_GET["myadminAction"]=="View")
	{
		require_once ("admin_form.php");
		exit();
	}
	else
	{
		require_once ("admin_list.php");
	}
?>
