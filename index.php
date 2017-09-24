<link href="./style/bootstrap.min.css" rel="stylesheet">
<link href="./style/font-awesome.min.css" rel="stylesheet">
<link href="./style/animate.min.css" rel="stylesheet">
<link href="./style1/common.css" media="all" rel="stylesheet">
<link href="./skins/square/blue.css" rel="stylesheet">
<link href="./skins/flat/blue.css" rel="stylesheet">
<link href="./skins/flat/flat.css" rel="stylesheet">
<link href="./style1/cookies.css" rel="stylesheet">
<link href="./style1/landingPage.css" rel="stylesheet">
<link href="./style1/login.css" rel="stylesheet">
<link href="./style1/home.css" rel="stylesheet">
<link href="./style1/sign-up.css" rel="stylesheet">
<script type="text/javascript" src="./scripts/jquery-3.1.1.min.js"></script>
<script src="./scripts/bootstrap.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.4.0/firebase.js"></script>
<script type="text/javascript" src="conf/firebase-configuration.js"></script>
<script type="text/javascript" src="scripts/bootbox.min.js"></script>
<script type="text/javascript" src="./javascript/common.js"></script>
<script type="text/javascript" src="./javascript/landingPage.js"></script>
<script type="text/javascript" src="./scripts/md5.js"></script>
<script type="text/javascript" src="./javascript/sign-up.js"></script>
<script type="text/javascript" src="./javascript/login.js"></script>
<script type="text/javascript" src="./scripts/icheck.min.js"></script>
<?php
require_once './modal/modal.php';
blockHistory();
session_start();

//----------------------First Start-----------------------------------//
require_once './landingPage.php';
//--------------------------------------------------------------------//
?>
<?php

function includeLoginScripts() {
    ?>
    <link href="./style1/login.css" rel="stylesheet"/>
    <link href="./style1/loader.css" rel="stylesheet"/>
    <script src="./javascript/login.js"></script>
    <html>
        <head>
            <meta charset="UTF-8">
            <title class="title-cls">Loading...</title>
        </head>
    </html>
<?php } ?>
    <?php

//------------block back button of browser-------------//
function blockHistory() {
    ?>
    <script>
        history.pushState(null, null, document.URL);
        window.addEventListener('popstate', function () {
            history.pushState(null, null, document.URL);
        });
    </script>
    <?php
}
?>
