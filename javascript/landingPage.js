/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function showLoginModal(dom){
     var url = "./ajax/ajax-includePage.php?function=showLoginModal";
    $.ajax({
        type: 'POST',
        url: url,
        datatype: "html",
        success: function (data)
        {
            popSmallDialog("Sign in", data);
            $(".u-name").focus();
        }
    });
}
function showSignUpModal(dom){
     var url = "./ajax/ajax-includePage.php?function=showSignUpModal";
    $.ajax({
        type: 'POST',
        url: url,
        datatype: "html",
        success: function (data)
        {
            popSmallDialog("Sign up", data);
            $(".user-name").focus();
        }
    });
}
