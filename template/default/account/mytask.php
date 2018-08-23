<h5>Open Order</h5>
<div class="run-task">
	<table class="table" style="margin-bottom: 0;">
		<tbody>
			<td class="col-3">Date</td>
			<td class="col-1">Pair</td>
			<td class="col-1">Base</td>
			<td class="col-1">Side</td>
			<td class="col-1">Type</td>
			<td class="col-1">Price</td>
			<td class="col-1">Amount</td>
			
			<td class="col">Total</td>
			<td class="col-1">Filled%</td>
			
			<th class="text-right"><a href="/account/removetask/all" class="btn btn-outline-info btn-sm">Cancel All</a></th>
		</tbody>
	
		<tbody>
			<?php foreach ($data as $key => $value) { ?>
				
			<tr>
				<td><?php echo $value->created;?></td>
				<td><?php echo $value->symbol;?></td>
				
				<td><?php echo $value->base;?></td>
				<td><?php echo $value->trade_side;?></td>
				<td><?php echo $value->trade_type;?></td>
				<td><?php echo $value->prices;?></td>
				<td><?php echo $value->amount;?></td>
				
				<td><?php echo number_format(($value->amount * $value->prices),8);?></td>
				<td></td>
				<td class="text-right"><a href="/account/removetask/<?php echo $value->trade_id;?>" class="btn btn-sm btn-outline-info">Close</a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
<br>
<h5>My 24h Order History</h5>
<table class="table">
		<thead>
			<th>Date</th>
			<th>Pair</th>
			<th>Type</th>
			<th>Side</th>
			<th>Price</th>
			<th>Amount</th>
			<th>Filled%</th>
			<th>Total</th>
			<th>Trigger Conditions</th>
			<th class="text-right">Status</th>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</tbody>
	</table>