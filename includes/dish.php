<br><br>
<?php

require_once ("classes/misc_functions.php");
?>
<form>
<table width="100%;">
<thead>
  <tr>
	<th align="center" style="width:50px !important;">#</th>
    <th align="center" style="width:160px !important;">Category's Name</th>
	<th align="center" style="width:120px !important;">Dish's Name</th>
	<th align="center" style="width:300px !important;">Description</th>
	<th align="center" style="width:70px !important;">Status</th>
    <th align="center" style="width:70px !important;">Actions</th>
</tr>
</thead>

<tbody>
	<tr>
		<td align="center">
			<input style="min-height:24px; width:97%;" type="text" name="">
		</td>
		<td align="center">
			<select name="status" style="height:28px;">
				<option value="0">
					Select Category
				</option>
				<option value="1">
					Soup
				</option>
				<option value="2">
					Noodle
				</option>
				<option value="3">
					Drinks
				</option>
			</select>
		</td>
		<td align="center">
			<input style="min-height:24px; width:97%;" type="text" name="">
		</td>
		<td align="center">
			<input style="min-height:24px; width:97%;" type="text" name="">
		</td>
		<td align="center">
			<select name="status" style="height:28px;">
				<option value="1">
					Active
				</option>
				<option value="0">
					Deactive
				</option>
			</select>
		</td>
		<td align="center" style="width:100px;">
			<a title="Quick Add" href="index.php?myAction=Deficiency&myDeficiencyAction=Add"><img style="width:28px;" src="./images/add_icon.png" /></a>
		</td>
	</tr>
	
	<tr>
		
		<td align="center">
			1
		</td>
		<td align="center">
			Soup
		</td>
		<td align="center">
			Chicken
		</td>
		<td align="center">
			Chicken's Description
		</td>
		<td align="center">
			Active
		</td>
		<td align="center">
			<a title="Edit" href="index.php?myAction=Deficiency&myDeficiencyAction=Edit"><img  src="./images/edit_icon1.png" /></a>
		</td>
	</tr>
	
	<tr>
		
		<td align="center">
			2
		</td>
		<td align="center">
			Soup
		</td>
		<td align="center">
			Wonton
		</td>
		<td align="center">
			Wonton's Description
		</td>
		<td align="center">
		Active
		</td>
		<td align="center">
			<a title="Edit" href="index.php?myAction=Deficiency&myDeficiencyAction=Edit"><img  src="./images/edit_icon1.png" /></a>
		</td>
	</tr>
	
	<tr>
		
		<td align="center">
			3
		</td>
		<td align="center">
			Soup
		</td>
		<td align="center">
			Pho
		</td>
		<td align="center">
			Pho's Description
		</td>
		<td align="center">
			Active
		</td>
		<td align="center">
			<a title="Edit" href="index.php?myAction=Deficiency&myDeficiencyAction=Edit"><img  src="./images/edit_icon1.png" /></a>
		</td>
	</tr>
</tbody>
</table>
</form>