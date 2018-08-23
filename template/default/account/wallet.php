<h2>Account Manager</h2>
<div class="row">
	<div class="col-lg-2">
		<?php include __DIR__."/menu.php"; ?>
	</div>
	<div class="col-lg-10">
		<div class="card card-body">
		<h5>All Coins</h5>
		<table class="table table-hover">
			<thead>
				
				
				<th>Symbol</th>
				<th>Wallet</th>
				<th>Deposit</th>
				
				<th>Withdraw</th>
				<th>Main Account</th>
				<th width="12%">Transfer</th>
				<th>Trading Account</th>
				<th>On Orders</th>

			</thead>
			<tbody>
				<?php foreach ($data as $key => $value) { ?>
					
				<tr>
					
					
					<td><b>[<?php echo $value->symbol;?>]</b> <?php echo $value->name;?></td>
					
					<td><?php
					echo (isset($value->wallet) && $value->wallet ? $value->wallet : '<a class="btn btn-sm btn-outline-info" href="'.store_url("account/renderwallet/".$value->symbol).'"><i class="ti-hand-point-right"></i> Render<a>');
					if($value->status == 1){ 
						echo '<br> Server : Online';
					}else{
						echo '<br> Server : Disable';
					}
					?></td>
					<td class="text-center"><button class="btn btn-outline-info btn-sm"><i class="ti-angle-down"></i></button></td>
					<td class="text-center"><button class="btn btn-outline-primary  btn-sm"><i class="ti-angle-up"></i></button></td>
					<td><?php echo $value->main_amount;?></td>
					<td><div class="input-group">
						  <div class="input-group-prepend" id="button-addon3">
						    <button class="btn btn-outline-info btn-sm" type="button"><i class="ti-arrow-circle-left"></i></button>
						    
						  </div>
						  <input type="text" class="form-control form-control-sm" placeholder="" aria-label="Example text with two button addons" aria-describedby="button-addon3">
						  	<div class="input-group-append" id="button-addon4">
							  <button class="btn btn-outline-info btn-sm" type="button"><i class="ti-arrow-circle-right"></i></button>
							</div>
						</div>
					</td>
					<td><?php echo $value->trade_amount_avalible;?> <button class="btn btn-outline-info btn-sm float-right"><i class="ti-hand-point-right"></i> Go</button></td>
					<td><?php echo $value->trade_amount_block;?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		</div>
	</div>
</div>