<h5 class="title"><i class="ti-wallet"></i> Coind
	<div class="float-right">
		<a href="<?php echo admin_url("ann/create");?>" class="btn btn-primary"><i class="ti-plus"></i> Add new coin</a>
	</div>
</h5>
<table class="table">
	<thead>
		<th>ID</th>
		<th>Base</th>
		<th>Name</th>
		<th>Symbol</th>
		<th>Last Prices</th>
		<th>24 High</th>
		<th>24 Low</th>
		<th>24 Volume</th>
		<th>Fee</th>
		<th>Status</th>

	</thead>
	<tbody>
		<?php foreach ($data as $key => $value) { ?>
			
		<tr>
			<td><?php echo $value->id;?></td>
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