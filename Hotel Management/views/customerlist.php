<?php
	include 'header.php';
?>

<style type="text/css">
	table,tr,td
	{
		border: 			1px solid black;
	}
	table
	{
		width: 				100%;
	}
	td
	{
		text-align: 		center;
	}
</style>
<br><br><br><br>

<table>

	<tr>
		<td>#Customer ID</td>
		<td>Name</td>
		<td>Phone</td>
		<td>Email ID</td>
		<td>Adhar Number</td>
		<td>Room Checked In</td>
		<td>Status</td>
	</tr>
<?php foreach($data as $customer):?>
	<tr>
		<td><?=$customer['customerId']?></td>
		<td><?=$customer['name']?></td>
		<td><?=$customer['phone']?></td>
		<td><?=$customer['email']?></td>
		<td><?=$customer['adhar']?></td>
		<td><?=$customer['roomId']?></td>
		<?php if($customer['checked']==0):?>
			<td>Not Yet Checked</td>
		<?php else:?>
			<td>Checked</td>
		<?php endif?>
	</tr>
<?php endforeach ?>
</table>