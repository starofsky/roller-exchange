<h2>Account Manager</h2>
<div class="row">
  <div class="col-lg-2">
    <?php include __DIR__."/menu.php"; ?>
  </div>
  <div class="col-lg-10">
      <div class="card">
          <div class="card-body">
              <h4 class="card-title">Google Authenticator
                  <?php

                  if ($actived_2fa)
                  {
                      ?>
                      <span class="badge badge-success">Enabled</span>
                      <?php
                  }
                  else
                  {
                      ?>
                      <span class="badge badge-danger">Not Enabled</span>
                  <?php } ?>
              </h4>
          </div>
          <div class="card-text">
              <form method="post" style="padding-left: 20px" action="<?php echo store_url("account/authentication");?>">
                  <?php
                  if (!$actived_2fa)
                  {
                      ?>
                      <div class="form-group row">
                          <label class="col-4 col-form-label">QR Code</label>
                          <div class="col-8">
                              <img src="<?php echo $qrCodeUrl; ?>" />
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-4 col-form-label">Secret Code</label>
                          <div class="col-8">
                              <input style="width: 50%" class="form-control" name="secret" readonly=""  type="text" value="<?php echo $secret ?>"/>
        </div>
        </div>
                  <?php } ?>
                  <div class="form-group row">
                      <label class="col-4 col-form-label">Verification Code</label>
                      <div class="col-8">
                          <input style="width: 50%" name="verification_code" class="form-control" placeholder="Verification code" type="text">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-4 col-form-label"></label>
                      <div class="col-8">
                          <?php
                          if (!$actived_2fa)
                          {
                              ?>
                              <button type="submit" name="security" value="1" class="btn btn-primary">Enable</button>
                          <?php } else { ?>
                              <button type="submit" name="security" value="2" class="btn btn-danger">Disable</button>
                          <?php } ?>
            </div>
          </div>
        </form>
      </div>
      </div>`
    </div>
  </div>
