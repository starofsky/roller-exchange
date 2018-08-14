<h5 class="title"><i class="ti-wallet"></i> Coind
	<div class="float-right">
		<a href="<?php echo admin_url("ann/create");?>" class="btn btn-primary"><i class="ti-plus"></i> Save</a>
	</div>
</h5>


<?php echo form_open(admin_url("ann/validate_create_ann"));?>
  <div class="form-group">
    <label for="exampleInputEmail1">Select Coin</label>
    <select name="coind" class="form-control">
    	<?php foreach ($data as $key => $value) { ?>
    		<optgroup label="<?php echo $key;?>"></optgroup>
    		<?php foreach ($value as $keys => $values) { ?>
    			<option value="<?php echo $key;?>-<?php echo $values->symbol;?>-<?php echo $values->name;?>"> [+] <?php echo $key;?> -  [<?php echo $values->symbol;?>] <?php echo $values->name;?></option>
    		<?php } ?>
    		
    	<?php } ?>
    </select>
    
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Icons</label>
    <div class="input-group mb-3">
	  <input type="text" class="form-control" name="icon" placeholder="Icon URL">
	  <div class="input-group-append">
	    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Upload</button>
	  </div>
	</div>
    <small id="emailHelp" class="form-text text-muted">Icon format 48x48</small>
  </div>

  <div class="form-group form-check">
    <input type="checkbox" name="status" value="1" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Online</label>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
