<style type="text/css">
	table,td
	{
		border: 			1px solid black;
	}
	table
	{
		margin-top: 		10%;
		margin-left: 		30%;
	}
	td
	{
		text-align: 		center;
	}
</style>

<table>
	<form action="../../booking/insertRoomValues/<?=$data?>" method="post">
		<tr>
			<td colspan="2">Room No. <?=$data?></td>	
		</tr>
		<tr>
			<td><input type="text" name="name" placeholder="Enter the name" required></td>
			<td><input type="text" name="phone" placeholder="Enter the Phone Number" required></td>
		</tr>

		<tr>
			<td><input type="email" name="email" placeholder="Enter the Email ID" required></td>
			<td><input type="text" name="adhar" placeholder="Enter the Adhar Number" required></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="SUBMIT"></td>
			<td><input type="reset" name="rest" value="RESET"></td>
		</tr>
	</form>
</table>