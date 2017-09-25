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
    var passwordM5 = $.md5(password);
    const authentication = firebase.auth();
    if (password == confirmPassword)
    {
        const promise = authentication.createUserWithEmailAndPassword(uname, passwordM5);
        promise.catch(e => {
            if (e != null)
            {
                $(".alert-empty-error").text(e.message);
                $(".alert-empty-error").show();
                $(".user-name").val("");
                $(".user-name").focus();
            }
        });
    } else {
        $(".alert-error").show();
        $(".password-txt").val("");
        $(".confirm-password-txt").val("");
        $(".password-txt").focus();
    }
}
firebase.auth().onAuthStateChanged(firebaseUser => {
    if (firebaseUser) {
        $("#signIn").hide();
        $("#signUp").hide();
        $("#signOut").show();
    } else {
        $("#signIn").show();
        $("#signUp").show();
        $("#signOut").hide();
        $(".alert-empty-error").text("Some Error Occured! Please try again later.");
        $(".alert-empty-error").show();
        $(".password-txt").val("");
        $(".confirm-password-txt").val("");
        $(".user-name").val("");
        $(".user-name").focus();
    }
});
function hideAlert(dom)
{
    $(".alert-error").hide();
}
function hideEmptyAlert(dom)
{
    $(".alert-empty-error").hide();
}
