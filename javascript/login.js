$(document).bind('keypress', function (e) {
    if (e.keyCode == 13) {
        $('.button-cls').trigger('click');
    }
});
function login(dom)
{
    var usersRef = firebase.database().ref();
    var userName = $(".u-name").val();
    var password = $(".pass-txt").val();
    var passwordMd5 = $.md5(password);
    if (userName == "" || password == "")
    {
        $("#showAlert").removeClass("alert-success-info");
        $("#showAlert").addClass("alert-empty-error");
        $("#showAlert").text("Please Enter User name and Password.!");
        $("#showAlert").show();
        return false;
    } else {
    }
}
