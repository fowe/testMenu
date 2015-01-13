<br><br>
<?php

require_once ("classes/misc_functions.php");
?>
<form>
<table width="650px;">
<thead>
  <tr>
	<th align="center" style="width:50px !important;">Table</th>
    <th align="center" style="width:200px !important;">Description</th>
	<th align="center" style="width:80px !important;">Status</th>
    <th align="center" style="width:80px !important;">Actions</th>
</tr>
</thead>

<tbody>
	<tr>
		<td align="center">
			<input style="min-height:24px; width:99%;" type="text" name="">
		</td>
		<td align="center">
			<input style="min-height:24px; width:98%;" type="text" name="">
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
			First test table
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
		<td align="center">
			<a title="Edit" href="index.php?myAction=Deficiency&myDeficiencyAction=Edit"><img  src="./images/edit_icon1.png" /></a>
		</td>
	</tr>
	
	<tr>
		
		<td align="center">
			2
		</td>
		<td align="center">
			2nd test table
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
		<td align="center">
			<a title="Edit" href="index.php?myAction=Deficiency&myDeficiencyAction=Edit"><img  src="./images/edit_icon1.png" /></a>
		</td>
	</tr>
</tbody>
</table>
</form>