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