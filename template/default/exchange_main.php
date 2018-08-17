</main>
<div class="slider">
	<div class="container text-center">
			<div class="head-intro text-center"><h1 class="block-title">Blockchain Assets Trading Platform</h1> 

						<h4>
                            The first 300K registered members will be free of trading fees in the first year.
                            <br> With each member invited, you will receive an additional one month free trading fee.
                        </h4> 
                        <h2 class="mt-30">
                            Exchange Launch at:
                        </h2> 
                        <div id="timewapper">
	                        <div class="timer-wapper">
	                        	
	                        </div>
                        </div>
                        
            </div>
	</div>
	<div class="slider-bg"></div>
</div>


<main class="container" ruler="main">
	<h3>Market 24h</h3>
	<table class="table">
	<thead>
		
		
		<th colspan="3">Symbol</th>
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
			
			<th><a href="<?php echo store_url("exchange/".$value->base."/".$value->symbol);?>"><?php echo $value->base;?></th>
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