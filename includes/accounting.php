<SCRIPT LANGUAGE='Javascript'> 
$(document).ready(function() {
                  oTable = $("#lotListTable").dataTable({
									"bJQueryUI": true,
                                    "bPaginate": false,
								    //"sScrollY": "600px",
                                    "bLengthChange": false,
                                    "bFilter": true,
                                    "bSort": true,
                                    "bInfo": true,
    								 "bProcessing": false,
									 "aaSorting": []
                         });
               } ); 

</SCRIPT>

<br>View By:  <label for="profit">Profit:</label><input type="radio" checked id="profit" name="view_type"  /> <label for="employees_pay">Employees pay:</label> <input type="radio" id="employees_pay" name="view_type"  />&nbsp; 
<br>Sort By: 
<form><select name="status" style="height:28px;">
	<option value="1">
		Today
	</option>
	<option value="2">
		This Week
	</option>
	<option value="3">
		This Month
	</option>
	<option value="4">
		This Quarter
	</option>
	<option value="5">
		This Year
	</option>
</select>

&nbsp;Or&nbsp;
From Date: <input name="from_date" type="text" class="datepicker">
To Date: <input name="to_date" type="text" class="datepicker">
<br><button>View</button>
</form>

<br><br>

<form>

<table width="100%" border="1" cellpadding="0" cellspacing="0" class="tableLotData" id="lotListTable">
<thead>
  <tr>
	<th align="center" style="width:100px !important;">Date</th>
	<th align="center" style="width:50px !important;">Table</th>
	<th align="center" style="width:80px !important;">Subtotal</th>
    <th align="center" style="width:80px !important;">Total</th>
</tr>
</thead>

<tbody>
	
	<tr>
		<td align="center">
			Jan 12 2015
		</td>
		<td align="center">
			1
		</td>
		<td align="center">
			$100
		</td>
		<td align="center">
			$113
		</td>
	</tr>
	
	<tr>
		<td align="center">
			Jan 12 2015
		</td>
		<td align="center">
			5
		</td>
		<td align="center">
			$300
		</td>
		<td align="center">
			$339
		</td>
	</tr>
	
	<tr>
		<td align="center">
			Jan 12 2015
		</td>
		<td align="center">
			8
		</td>
		<td align="center">
			$10
		</td>
		<td align="center">
			$13
		</td>
	</tr>
	
	<tr>
		<td align="center">
			Jan 12 2015
		</td>
		<td align="center">
			2
		</td>
		<td align="center">
			$80
		</td>
		<td align="center">
			$90.4
		</td>
	</tr>
	
	<tr>
		<td align="center">
			Jan 11 2015
		</td>
		<td align="center">
			1
		</td>
		<td align="center">
			$130
		</td>
		<td align="center">
			$146.9
		</td>
	</tr>
	
	<tr>
		<td align="center">
			Jan 8 2015
		</td>
		<td align="center">
			1
		</td>
		<td align="center">
			$130
		</td>
		<td align="center">
			$146.9
		</td>
	</tr>
	
	<tr>
		<td></td>
		<td align="right">
			<b>Sum</b>
		</td>
		<td align="center">
			<b>$750</b>
		</td>
		<td align="center">
			<b>$847.5</b>
		</td>
	</tr>
</tbody>
</table>
</form>