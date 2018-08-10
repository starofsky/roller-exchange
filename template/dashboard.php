<div class="row">
	<div class="col">
		BTC<br>
		73000
	</div>

	<div class="col">
		BTC<br>
		73000
	</div>


	<div class="col">
		BTC<br>
		73000
	</div>


	<div class="col">
		BTC<br>
		73000
	</div>


	<div class="col">
		BTC<br>
		73000
	</div>

	<div class="col">
		BTC<br>
		73000
	</div>
</div>
<div class="row d-flex flex-row">
	<div class="col-lg-3 col-sm-3">
		<div class="task border">
			<div class="sell-task"></div>
			<div class="price-task text-center bg-light">7500 <span>7500 $</span></div>
			<div class="buy-task"></div>
		</div>
	</div>
	<div class="col-lg-6 col-sm-6">
		<div class="chart border"></div>
		<br>
		<div class="controller">
			<nav>
			  <div class="nav nav-tabs" id="nav-tab" role="tablist">
			  	
			  	<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Limit</a>
			    <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Market</a>
			    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Stop limit</a>
			    
			  </div>
			</nav>
			<div class="tab-content border border-top-0" id="nav-tabContent">
			  	
			  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
			  		<?php include __DIR__."/forms/limit.php";?>
			  </div>
			</div>
		</div>

		
	</div>
	<div class="col-lg-3">
		<div id="coinValible">
			<nav>
			  <div class="nav nav-tabs" id="nav-tab" role="tablist">
			  	
			  	<a class="nav-item flex-sm-fill nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Favorites</a>
			    <a class="nav-item flex-sm-fill nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">BTC</a>
			    <a class="nav-item flex-sm-fill nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">ETH</a>
			    <a class="nav-item flex-sm-fill nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">LTC</a>
			  </div>
			</nav>
			<div class="tab-content" id="nav-tabContent">
			  	
			  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
			  	<div class="input-group mb-3 input-group-sm">
				  <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
				  <div class="input-group-append">
				    <button class="btn btn-outline-secondary" type="button">Search</button>
				  </div>
				</div>
				<div class="listcoins">
					<table class="table">
						<tr>
							<td>ETH</td>
							<td>2900</td>
							<td class="text-right">3000$</td>
						</tr>

						<tr>
							<td>LTC</td>
							<td>2900</td>
							<td class="text-right">3000$</td>
						</tr>


						<tr>
							<td>ETC</td>
							<td>2900</td>
							<td class="text-right">3000$</td>
						</tr>


						<tr>
							<td>NEO</td>
							<td>2900</td>
							<td class="text-right">3000$</td>
						</tr>

						<tr>
							<td>NEO</td>
							<td>2900</td>
							<td class="text-right">3000$</td>
						</tr>

						<tr>
							<td>NEO</td>
							<td>2900</td>
							<td class="text-right">3000$</td>
						</tr>

						<tr>
							<td>NEO</td>
							<td>2900</td>
							<td class="text-right">3000$</td>
						</tr>

						<tr>
							<td>NEO</td>
							<td>2900</td>
							<td class="text-right">3000$</td>
						</tr>

						<tr>
							<td>NEO</td>
							<td>2900</td>
							<td class="text-right">3000$</td>
						</tr>

					</table>
				</div>
			  </div>
			  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
			  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
			</div>
		</div>
		<!--// Trade History -->
		<div id="history">
			<h5>Trade History</h5>
			<div class="trade-history border align-items-end"></div>
		</div>
	</div>
</div>
<br>
<h5>Open Order</h5>
<div class="run-task">
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
			<th class="text-right"><a href="#" class="btn btn-outline-info btn-sm">Cancel All</a></th>
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
<script type="text/javascript">
	$(document).ready(function(){
		var history = $("#history").height();
		var parenHeight = $("#coinValible").parent().height();
		var priceTask = $(".price-task").outerHeight();
		$("#coinValible").height(parenHeight - history);
		//$(".task").height(parenHeight);
		$(".sell-task, .buy-task").height((parenHeight - priceTask - 2)/2);
	});
</script>