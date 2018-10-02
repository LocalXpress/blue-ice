<?php
	include 'header.php';
?>


<body>
  <h4 class="ui horizontal divider header">
    <i class="bar chart icon"></i>
      Customer List:
  </h4>

  <table class="ui red table">
    <thead>
        <tr>
          <th>#Customer ID</th>
          <th>Name</th>
          <th>Phone</th>
          <th>Email ID</th>
          <th>Adhar Number</th>
          <th>Room Checked In</th>
          <th>Status</th>
        </tr>
    </thead>
    
    <tbody>
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
    </tbody>
  </table>
  <br>
  <br>
</body>


