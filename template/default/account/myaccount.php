<h2>Account Manager</h2>
<div class="row">
	<div class="col-lg-2">
		<?php include __DIR__."/menu.php"; ?>
	</div>
	<div class="col-lg-10">
		<div class="card card-body">
		<h5>All Coins</h5>
		<table class="table">
			<thead>
				
				
				<th colspan="2">Symbol</th>
				<th>Wallet</th>
				<th>Deposit</th>
				
				<th>Withdraw</th>
				<th>Main Account</th>
				<th>Transfer</th>
				<th>Trading Account</th>
				<th>On Orders</th>

			</thead>
			<tbody>
				<?php foreach ($data as $key => $value) { ?>
					
				<tr>
					
					
					<td><?php echo $value->name;?></td>
					<td><?php echo $value->symbol;?></td>
					<td>Last Prices</td>
					<td><i class="ti-plus"></i></td>
					<td><i class="ti-plus"></i></td>
					<td>24 Volume</td>
					<td>Fee</td>
					<td>Status</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		</div>
	</div>
</div>