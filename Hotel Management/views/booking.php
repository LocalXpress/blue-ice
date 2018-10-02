<?php
	include 'header.php';
?>

<style>
.grid-container 
{
  display: 					grid;
  grid-template-columns: 	auto auto auto auto;
  background-color: 		#eafffa;
  padding: 					10px;
}

.grid-item 
{
  background-color: 		rgba(255, 255, 255, 0.8);
  border: 					1px solid black;
  padding: 					5px;
  font-size: 				20px;
  text-align: 				center;
  border-radius: 			1px;
}
.booked
{
	background-color: red;
}
section
{
	width: 70%;
	margin: 2em auto;
}
</style>

<h4 class="ui horizontal divider header">
    <i class="bar chart icon"></i>BOOK A ROOM
</h4>
<section>
	<div class="grid-container">
		<?php foreach($data as $room):?>
		  <div class="grid-item">
		  		<p><?=$room['roomId']?></p>
		  		<i>Bed:  </i><?=$room['no_of_bed']?>
		  		<i>Cost: </i><?=$room['cost']?><br>
		  		<?php if($room['booked']==0):?>
		  			<a href="booking/bookARomm/<?=$room['roomId']?>">book</a>
		  		<?php else:?>
		  			<div class="Booked">
		  				<a href="booking/checkCost/<?=$room['roomId']?>">Check OUT</a>
		  			</div>
		  		<?php endif?>	
		  </div>
	  	<?php endforeach?>  
	</div>
</section>