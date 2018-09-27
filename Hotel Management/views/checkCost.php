<style type="text/css">
	table,td,tr
	{
		border: 1px solid black;
	}
	td
	{
		width: 200px;
		text-align: center;
	}
</style>

<center>
<h2>CUSTOMER DETAILS CASH MEMO</h2>
<hr>	
	<table>
		<tr>
			<td colspan="4">
				CUSTOMER DETAILS
			</td>	
		</tr>
		<tr>
			<td>Customer ID:</td>
			<td><?=$data['customerId']?></td>
			<td>Name:</td>
			<td><?=$data['name']?></td>
		</tr>
		<tr>
			<td>Phone:</td>
			<td><?=$data['phone']?></td>
			<td>Email:</td>
			<td><?=$data['email']?></td>
		</tr>
		<tr>
			<td>Adhar:</td>
			<td><?=$data['adhar']?></td>
			<td>Cost:</td>
			<td><?=$data['cost']?></td>
		</tr>
		<tr>
			<td colspan="4">
				<a href="../../booking/checkOutARomm/<?=$data['roomId']?>">Check Out</a>
			</td>	
		</tr>
	</table>
</center>