<?php
$function=$_REQUEST['function'];
switch ($function)
{
    case "showLoginModal":showLoginModal();
        break;
    case "showSignUpModal":showSignUpModal();
        break;
}
function showLoginModal()
{
    require_once '../login.php';
}
function showSignUpModal()
{
    require_once '../sign-up.php';
}

?>

