
<div class="row">
	<div class="col">
		<?php echo $pair;?> / <?php echo $base;?><br>
		<?php echo $info->name;?>
	</div>

	<div class="col">
		Last Prices<br>
		<span id="lastprices"></span>
	</div>


	<div class="col">
		Last 24h change<br>
		<span id="change24"></span>
	</div>


	<div class="col">
		24h High<br>
		<span id="high24"></span>
	</div>


	<div class="col">
		24h Low<br>
		<span id="low24"></span>
	</div>

	<div class="col">
		24h Volume<br>
		<span id="volume24"></span>/<span id="volume24btc"></span>
	</div>
</div>
<br>
<div class="row d-flex flex-row">
	<div class="col-lg-9 col-sm-3">

		<div class="chart border" id="main_chart">Loadding chart..</div>
	</div>
	<div class="col-lg-3 col-sm-3">
		<div id="coinValible" class="border">
			<nav>
			  <div class="nav nav-tabs" id="nav-tab" role="tablist">
			  	
			  	<a class="nav-item flex-sm-fill nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" title="Favorites"><i class="ti-star"></i></a>
			  	<?php 
			  	$i = 0;
			  	foreach ($data as $key => $value) { 
			  		$i++;
			  	?>
			    <a class="nav-item flex-sm-fill nav-link <?php echo ($base == $key ? "active" : "");?>" id="nav-home-tab" data-toggle="tab" href="#nav-trade-<?php echo strtolower($key);?>" role="tab" aria-controls="nav-home" aria-selected="true"><?php echo $key;?></a>
			    <?php } ?>
			  </div>
			</nav>
			<div class="tab-content" id="nav-tabContent">
			  <?php 
			  $i = 0;
			  foreach ($data as $key => $value) { 
			  	$i++;
			  	?>
			  <div class="tab-pane fade <?php echo ($base == $key ? "show active" : "");?>" id="nav-trade-<?php echo strtolower($key);?>" role="tabpanel" aria-labelledby="nav-home-tab">
			  	<div class="input-group mb-3 input-group-sm">
				  <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
				  <div class="input-group-append">
				    <button class="btn btn-outline-secondary" type="button">Search</button>
				  </div>
				</div>
				<div class="listcoins">
					<table class="table">
						<?php foreach ($value as $key_alt => $value_alt) { ?>
							<tr id="coind_<?php echo $key.$value_alt->symbol;?>">
								<td width="2%"><i class="ti-star"></i></td>
								<td><a href="<?php echo store_url("exchange/".$key."/".$value_alt->symbol);?>" title="<?php echo $value_alt->name;?>"><?php echo $value_alt->symbol;?></a></td>
								<td>0</td>
								<td class="text-right">0</td>
							</tr>
						<?php } ?>
						

						

					</table>
				</div>
			  </div>
			  <?php } ?>
			  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
			  
			</div>
		</div>
	</div>
</div>
		<br>
<div class="row d-flex flex-row">
	<div class="col-lg-3 col-sm-3">
		<div class="task border">
			<div class="sell-task">
				<?php include __DIR__."/forms/ask.php";?>
			</div>
			<div class="price-task text-center bg-light">7500 <span>7500 <?php echo $base;?></span></div>
			<div class="buy-task">
				<?php include __DIR__."/forms/bid.php";?>
			</div>
		</div>
	</div>
	<div class="col-lg-6 col-sm-6">
		
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

		<br>
		<div class="border" style="padding:30px; min-height: 350px;">
			<h5>Depth</h5>
		</div>
		
	</div>
	<div class="col-lg-3">
		<div id="trol">
			
			<div class="trade-history border align-items-end" id="chatbox">
				<?php include __DIR__."/forms/troll.php";?>
			</div>
			<form id="chatForm">
			<div class="input-group mb-3 input-group-sm" style="margin-top: 5px;">
			  <input type="text" class="form-control" placeholder="Enter Chat" aria-label="Recipient's username" aria-describedby="button-addon2">
			  <div class="input-group-append">
			    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Send</button>
			  </div>
			</div>
			</form>
		</div>
		<!--// Trade History -->
		<div id="history">
			<h5>Trade History</h5>
			<div class="history-task border align-items-end">
				<?php include __DIR__."/forms/history.php";?>
			</div>
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
<script type="text/javascript" src="<?php echo resource_url("charts/static/js/charts.js");?>"></script>
<style type="text/css">
	#main_chart div label:first-child, #main_chart div select#type{ display:none; }
</style>
<script type="text/javascript">
	$(document).ready(function(){
		var history = $("#history").height();
		var parenHeight = $(".controller").parent().height();
		var priceTask = $(".price-task").outerHeight();
		//$("#coinValible").height($("#main_chart").height());
		//$(".task").height(parenHeight);
		$(".sell-task, .buy-task").height((parenHeight - priceTask - 2)/2);
		
		$(".sell-task").animate({scrollTop: $(".sell-task").get(0).scrollHeight}, 500);
		getDataJson();
		var socket = io.connect('//api.btcrip.co:8080');

		socket.on('connect', function () {
		    console.log('connected');

		    socket.on('broadcast', function (data) {
		        console.log(data);
		        //socket.emit("broadcast", data);
		        //alert(data.text);
		        if(data.type == "notification"){
		        	getDataJson();
		        }
		        if(data.type == "chat"){
		        	$("#chatbox ul").append('<li>'+data.text+'</li>');
		        	$("#chatbox").animate({scrollTop: $("#chatbox").get(0).scrollHeight}, 100);
		        }
		        
		    });

		    socket.on('disconnect', function () {
		        console.log('disconnected');
		    });
		});

		$("form#chatForm").submit(function(){
			var inbox = $(this).find("input[type=text]");
			$.ajax({
		        url: "/api/chat",
		        type: "post",
		        data: {text : inbox.val()}
		    });
		    inbox.val('');
		    return false;
		});
		
	});
	
	var getDataJson = function(){
			$.getJSON("/api/trade/<?php echo $base;?>/<?php echo $pair;?>", function(data){
				$.each(data, function(keys, value){
					sum = 0;
					$.each(value, function(index, vdata){
						if(keys == "sell"){
							sum = Number.parseFloat(vdata.amount * vdata.prices) + Number.parseFloat(sum);
							$("."+keys+"-task #sdata-"+(20-index)+" td:eq(0)").text(vdata.prices);
							$("."+keys+"-task #sdata-"+(20-index)+" td:eq(1)").text(vdata.amount);
							$("."+keys+"-task #sdata-"+(20-index)+" td:eq(2)").text(sum.toFixed(8));
						}else{
							sum = Number.parseFloat(vdata.amount * vdata.prices) + Number.parseFloat(sum);
							$("."+keys+"-task #sdata-"+index+" td:eq(0)").text(vdata.prices);
							$("."+keys+"-task #sdata-"+index+" td:eq(1)").text(vdata.amount);
							$("."+keys+"-task #sdata-"+index+" td:eq(2)").text(sum.toFixed(8));
						}
						if(keys == "history"){
							if(vdata.trade_type == "buy"){
								$(".history-task #sdata-"+index).removeClass("red");
								$(".history-task #sdata-"+index).addClass("green");
							}else{
								$(".history-task #sdata-"+index).removeClass("green");
								$(".history-task #sdata-"+index).addClass("red");
							}
						}
						
					});
				});
				$("#lastprices").html(data.sumary.lastprice);
				$("#change24").html(data.sumary.change);
				$("#high24").html(data.sumary.high);
				$("#low24").html(data.sumary.low);
				$("#volume24").html(data.sumary.volume);
				$("#volume24btc").html(data.sumary.volumebtc);
				
				$("#coind_<?php echo $base;?><?php echo $pair;?> td:eq(2)").html(data.sumary.lastprice);
				$("#coind_<?php echo $base;?><?php echo $pair;?> td:eq(3)").html(data.sumary.volume);

				$(".sell-task tr").on("click", function(){
					var prices = $("td:eq(0)",this).text();
					var amount = $("td:eq(1)",this).text();
					$("#formBuyLimit [name='prices']").val(prices);
					$("#formBuyLimit [name='amount']").val(amount);
				});

				$(".buy-task tr").on("click", function(){
					var prices = $("td:eq(0)",this).text();
					var amount = $("td:eq(1)",this).text();
					$("#formSellLimit [name='prices']").val(prices);
					$("#formSellLimit [name='amount']").val(amount);
				});

			});
		}
</script>