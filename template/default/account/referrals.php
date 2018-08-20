<h2>Account Manager</h2>
<div class="row">
  <div class="col-lg-2">
    <?php include __DIR__."/menu.php"; ?>
  </div>
  <div class="col-lg-10">
    <div class="card card-body">
        <form>
         <div class="form-group">
          <label for="formGroupExampleInput">You URL </label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" value="<?php echo store_url("access/register?ref=");?>">
        </div>
        
          
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Check me out
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Validate</button>
        </form>
      </div>
    </div>
  </div>
