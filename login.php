<?php ?>
<html>
    <head></head>
    <body>
        <form action="#" id="loginFrm">
            <div class="row">
                <div id="showAlert" class="alert-success-info"></div>
                <div class="col-sm-12 form-group has-feedback">
                    <input name="login[userName]" type="text" class="form-control txt-flat u-name" placeholder="Username" value=""/>
                    <span class="fa fa-user fa-1x form-control-feedback span-icon-cls"></span>
                </div>
            </div>
            <div class="row top-space">
                <div class="col-sm-12 form-group has-feedback">
                    <input name="login[password]" type="password" class="form-control txt-flat pass-txt" placeholder="Password"/>
                    <span class="fa fa-key fa-1x form-control-feedback span-icon-cls"></span>
                </div>
            </div>
            <div class="row top-space">
                <div class="col-sm-3"></div>
                <div class="col-sm-12">
                    <button type="button" class="btn btn-success botton-cls style-btn-cls btn-flat" onclick="login(this)"><span class="fa fa-sign-in fa-1x"></span>&nbsp;Sign in</button>
                    <button type="button" class="btn btn-danger botton-cls btn-flat" title="Click to Close" data-dismiss="modal"><span class="fa fa-close"></span>&nbsp;Cancel</button>
                </div>
            </div>
        </form>
    </body>
</html>