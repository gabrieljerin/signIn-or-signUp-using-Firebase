<?php ?>
<html>
    <head></head>
    <body>
        <form action="#" id="loginFrm">
            <div class="row">
                <div class="alert-empty-error">Please Enter Data.!</div>
                <div class="col-sm-12 form-group has-feedback">
                    <input type="text" class="form-control txt-flat user-name" placeholder="Username" value="" onkeyup="hideEmptyAlert(this)"/>
                    <span class="fa fa-user fa-1x form-control-feedback span-icon-cls"></span>
                </div>
            </div>
            <div class="row top-space">
                <div class="col-sm-12 form-group has-feedback">
                    <input type="password" class="form-control txt-flat password-txt" placeholder="Password" onkeyup="hideAlert(this);hideEmptyAlert(this)"/>
                    <span class="fa fa-key fa-1x form-control-feedback span-icon-cls"></span>
                </div>
            </div>
            <div class="alert-error">Password Mismatch</div>
            <div class="row top-space">
                <div class="col-sm-12 form-group has-feedback">
                    <input type="password" class="form-control txt-flat confirm-password-txt" placeholder="Confirm Password" onkeyup="hideAlert(this);hideEmptyAlert(this)"/>
                    <span class="fa fa-check fa-1x form-control-feedback span-icon-cls"></span>
                </div>
            </div>
            <div class="row top-space">
                <div class="col-sm-3"></div>
                <div class="col-sm-12">
                    <button type="button" class="btn btn-success botton-cls style-btn-cls btn-flat sign-up-btn" onclick="signUp(this)"><span class="fa fa-user-plus fa-1x"></span>&nbsp;Sign up</button>
                    <button type="button" class="btn btn-danger botton-cls btn-flat" title="Click to Close" data-dismiss="modal"><span class="fa fa-close"></span>&nbsp;Cancel</button>
                </div>
            </div>
        </form>
    </body>
</html>

