var table;
table = firebase.database().ref('tb_user');
function validation()
{
    var flag = 0;
    if ($(".user-name").val() == "" || $(".password-txt").val() == "" || $(".confirm-password-txt").val() == "")
    {
        flag = 1;
    }
    return flag;
}
function signUp(dom)
{
    var f = validation();
    if (f == 1)
    {
        $(".alert-empty-error").show();
        return false;
    }
    var uname = $(".user-name").val();
    var password = $(".password-txt").val();
    var confirmPassword = $(".confirm-password-txt").val();
    if (password == confirmPassword)
    {
        var paswordMd5 = $.md5(confirmPassword);
        var data = table.push();
        data.set({
            username: uname,
            password: paswordMd5
        })
        closeSmallDialog();
        alertModal("Info", "New user added successfully");
    } else {
        $(".alert-error").show();
        $(".password-txt").val("");
        $(".confirm-password-txt").val("");
        $(".password-txt").focus();
    }
}
function hideAlert(dom)
{
    $(".alert-error").hide();
}
function hideEmptyAlert(dom)
{
    $(".alert-empty-error").hide();
}
