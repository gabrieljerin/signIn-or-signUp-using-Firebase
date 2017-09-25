$(document).bind('keypress', function (e) {
    if (e.keyCode == 13) {
        $('.button-cls').trigger('click');
    }
});
function login(dom)
{
    var userName = $(".u-name").val();
    var password = $(".pass-txt").val();
    var passwordMd5 = $.md5(password);
    const authentication = firebase.auth();
    if (userName == "" || password == "")
    {
        $("#showAlert").removeClass("alert-success-info");
        $("#showAlert").addClass("alert-empty-error");
        $("#showAlert").text("Please Enter User name and Password.!");
        $("#showAlert").show();
        return false;
    } else {
        const promise = authentication.signInWithEmailAndPassword(userName, passwordMd5);
        promise.catch(e =>{
            if(e!=null)
            {
            $("#showAlert").text(e.message);
                $("#showAlert").removeClass("alert-success-info");
                $("#showAlert").addClass("alert-empty-error");
                $("#showAlert").show();
                $(".u-name").val("");
                $(".pass-txt").val("");
                $(".u-name").focus();
            }
            });
    }
}
firebase.auth().onAuthStateChanged(firebaseUser => {
    if (firebaseUser) {
        $("#signIn").hide();
        $("#signUp").hide();
        $("#signOut").show();
        closeSmallDialog();
    } else {
        $("#signIn").show();
        $("#signUp").show();
        $("#signOut").hide();
        $("#showAlert").text("Some Error Occured! Please try again later.");
        $("#showAlert").removeClass("alert-success-info");
        $("#showAlert").addClass("alert-empty-error");
        $("#showAlert").show();
        $(".password-txt").val("");
        $(".confirm-password-txt").val("");
        $(".user-name").val("");
        $(".user-name").focus();
    }
});
function signOut(dom)
{
    firebase.auth().signOut();
    $("#signIn").show();
    $("#signUp").show();
    $("#signOut").hide();
}