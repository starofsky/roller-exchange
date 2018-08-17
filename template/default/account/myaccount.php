<h5>All Coins</h5>
<table class="table">
	<thead>
		
		
		<th colspan="3">Symbol</th>
		<th>Wallet</th>
		<th>Options</th>
		<th>Status</th>

	</thead>
	<tbody>
		<?php foreach ($data as $key => $value) { ?>
			
		<tr>
			
			<th><?php echo $value->base;?></th>
			<td><?php echo $value->name;?></td>
			<td><?php echo $value->symbol;?></td>
			<td>Last Prices</td>
			<td>24 High</td>
			<td>24 Low</td>
			<td>24 Volume</td>
			<td>Fee</td>
			<td>Status</td>
		</tr>
		<?php } ?>
	</tbody>
</table>