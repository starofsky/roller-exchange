<div class="loginForm">
    <h2 class="text-left mb-4">Verify 2 FA</h2>
    <div class="card">
        <div class="card-body">
            <form role="form" method="post" action="<?php echo store_url("access/verify2fa");?>" accept-charset="UTF-8">
                <div class="form-group">
                    <div class="mx-auto">
                        <input type="text" name="2fa" class="form-control" id="input2FaForm" placeholder="Mã xác thực" required="true">
                    </div>
                </div>
                <div class="form-group">
                    <div class="mx-auto">
                        <button type="submit" class="btn btn-primary btn-block btn-lg" name="verify" value="1">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<style type="text/css">
    .loginForm{
        margin: auto;
        width: 350px;
    }
</style>

<script type="text/javascript">
    $(document).ready(function(){
        var margin = ($(window).outerHeight() - $(".loginForm").outerHeight()) / 2;
        $(".loginForm").css("margin-top",margin);
    });
</script>