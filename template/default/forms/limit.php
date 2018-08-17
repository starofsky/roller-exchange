<div class="row">
	<div class="col border-right" style="padding-right:15px; ">
		<h5>Buy <div class="float-right">
			<i class="ti-wallet"></i> <?php echo $pair;?>
		</div></h5>
	<form id="formBuyLimit" method="post" action="<?php echo store_url("api/buy/".$base."/".$pair);?>">
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 col-form-label col-form-label-sm">Amount</label>
	    <div class="col-sm-8">
	      <input type="number" class="form-control form-control-sm" name="amount" value="Amount">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="inputPassword" class="col-sm-4 col-form-label col-form-label-sm">Prices</label>
	    <div class="col-sm-8">
	      <input type="number" class="form-control form-control-sm" name="prices" placeholder="Prices">
	    </div>
	  </div>

	  <div class="form-group">
	   
	    <input type="range" class="form-control-range" id="formControlRange">
	  </div>

	  <div class="form-group row">
	    <label for="inputPassword" class="col-sm-4 col-form-label col-form-label-sm">Total</label>
	    <div class="col-sm-8">
	      <input type="number" readonly="" class="form-control form-control-sm" placeholder="0.00">
	    </div>
	  </div>

	  <button class="btn btn-block btn-outline-info btnBuy" type="submit">Buy</button>
	</form>
	</div>
	<div class="col" style="padding-left:15px; ">
		<h5>Sell <div class="float-right">
			<i class="ti-wallet"></i> <?php echo $pair;?>
		</div></h5>
		<form id="formSellLimit" method="post" action="<?php echo store_url("api/sell/".$base."/".$pair);?>">
	  <div class="form-group row">
	    <label for="staticEmail" class="col-sm-4 col-form-label col-form-label-sm">Amount</label>
	    <div class="col-sm-8">
	      <input type="number" class="form-control form-control-sm" name="amount" id="staticEmail" value="Amount">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="inputPassword" class="col-sm-4 col-form-label col-form-label-sm">Prices</label>
	    <div class="col-sm-8">
	      <input type="number" class="form-control form-control-sm" name="prices" placeholder="Prices">
	    </div>
	  </div>

	  <div class="form-group">
	   
	    <input type="range" class="form-control-range" id="formControlRange">
	  </div>

	  <div class="form-group row">
	    <label for="inputPassword" class="col-sm-4 col-form-label col-form-label-sm">Total</label>
	    <div class="col-sm-8">
	      <input type="number" readonly="" class="form-control form-control-sm" placeholder="0.00">
	    </div>
	  </div>

	  <button class="btn btn-block btn-outline-primary btnSell" type="submit">Sell</button>
	</form>
	</div>
</div>

<script type="text/javascript">
	jQuery(document).ready(function(){
		$("form#formSellLimit").submit(function(){
			var form = $(this);
		    var url = form.attr('action');
		    
		    $.ajax({
		           type: "POST",
		           url: url,
		           data: form.serialize(), // serializes the form's elements.
		           success: function(data)
		           {
		               alert(data); // show response from the php script.
		           }	
	         });
		    getDataJson();
		    return false;
		});
		$("form#formBuyLimit").submit(function(){
			var form = $(this);
		    var url = form.attr('action');;

		    $.ajax({
		           type: "POST",
		           url: url,
		           data: form.serialize(), // serializes the form's elements.
		           success: function(data)
		           {
		               alert(data); // show response from the php script.
		           }	
	         });
		    getDataJson();
		    return false;
		});
	});
</script>