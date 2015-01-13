<br><br>
<img src="images/construction.jpg" alt="">
<br>
<b>Thanks for your visit!</b>
<br><br>
<script>

jQuery(document).ready(function() {
  // expand or collapse My order list
  jQuery(".myorder_expand").hide();
  //toggle
  jQuery(".myorder").click(function()
  {
    jQuery(this).next(".myorder_expand").slideToggle(500);
  });
  // hide or show a Category
  jQuery(".categoryLink").click(function()
  {
	//jQuery(".myorder_expand").hide();
    var categoryLink = $(this).text();
	//console.log(categoryLink);
	jQuery(".category").hide();
	jQuery("#"+categoryLink).show();
	$(".categoryLink").parent().attr("class","");
	$(this).parent().attr("class","current");
  });
  
  $().UItoTop({ easingType: 'easeOutQuart' });
               $('.tooltip').tooltipster();
		   
});
</script>

<?
	require_once ("admin_process.php");
?>
<? 
if($_GET["siteName"]!="")
echo ' - Site: <b>'.$_GET["siteName"].'</b>';
else if($_GET["siteShortName"]!="")
echo ' - Site: <b>'.$siteName.'</b>';
if($_GET["lotNumber"]!="")
echo ' - Lot: <b>'.$_GET["lotNumber"].'</b>';
 ?>


<ul class="tabs">	
	<li <? if($_GET["adminStatus"]==0 or !isset($_GET["adminStatus"])) echo 'class="current"'; ?>>
		<a href='index.php?myAction=admin&adminStatus=0<? if(isset($_GET["lotNumber"])) echo "&lotNumber=".$_GET["lotNumber"]; 
		if(isset($_GET["siteShortName"])) echo "&siteShortName=".$_GET["siteShortName"];
		?>'>My Business</a>
	</li>
	<li <? if($_GET["adminStatus"]==1) echo 'class="current"'; ?>>
		<a href='index.php?myAction=admin&adminStatus=1<? if(isset($_GET["lotNumber"])) echo "&lotNumber=".$_GET["lotNumber"]; 
		if(isset($_GET["siteShortName"])) echo "&siteShortName=".$_GET["siteShortName"];
		?>'>Table</a>
	</li>
	<li <? if($_GET["adminStatus"]==2) echo 'class="current"'; ?>>
		<a href='index.php?myAction=admin&adminStatus=2<? if(isset($_GET["lotNumber"])) echo "&lotNumber=".$_GET["lotNumber"]; 
		if(isset($_GET["siteShortName"])) echo "&siteShortName=".$_GET["siteShortName"];
		?>'>Category</a>
	</li>
	<li <? if($_GET["adminStatus"]==3) echo 'class="current"'; ?>>
		<a href='index.php?myAction=admin&adminStatus=3<? if(isset($_GET["lotNumber"])) echo "&lotNumber=".$_GET["lotNumber"]; 
		if(isset($_GET["siteShortName"])) echo "&siteShortName=".$_GET["siteShortName"];
		?>'>Dish</a>
	</li>
	<li <? if($_GET["adminStatus"]==4) echo 'class="current"'; ?>>
		<a href='index.php?myAction=admin&adminStatus=4<? if(isset($_GET["lotNumber"])) echo "&lotNumber=".$_GET["lotNumber"]; 
		if(isset($_GET["siteShortName"])) echo "&siteShortName=".$_GET["siteShortName"];
		?>'>Acounting</a>
	</li>
	<li <? if($_GET["adminStatus"]==5) echo 'class="current"'; ?>>
		<a href='index.php?myAction=admin&adminStatus=5<? if(isset($_GET["lotNumber"])) echo "&lotNumber=".$_GET["lotNumber"]; 
		if(isset($_GET["siteShortName"])) echo "&siteShortName=".$_GET["siteShortName"];
		?>'>History</a>
	</li>
</ul>
<?
	if($_GET["adminStatus"]==0 or !isset($_GET["adminStatus"]))
	require_once ("my_business.php");
	if($_GET["adminStatus"]==1)
	require_once ("table.php");
	if($_GET["adminStatus"]==2)
	require_once ("category.php");
	if($_GET["adminStatus"]==3)
	require_once ("dish.php");
	if($_GET["adminStatus"]==4)
	require_once ("accounting.php");
	if($_GET["adminStatus"]==5)
	require_once ("history.php");
?>