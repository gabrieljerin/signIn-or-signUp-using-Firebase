
<div class="nav-div">
        <nav class="navbar navbar-inverse navbar-fixed-top nav-change-color shadow-cls">
  <div class="container-fluid">
      <!------------------------responsive menu----------------------------->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
      <!--------------------------------------------------------------------->
      <div class="collapse navbar-collapse" id="myNavbar">
          <!--------------------common Menu---------------------->
          <!----------------------------------------------------->
          
          <!-------------------DropDown menu without hover--------------------->
       <ul class="nav navbar-nav navbar-right">
           <li id="signIn" class="drp-cls"><a class="a-cls-hover" href="#" onclick="showLoginModal(this)"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign in</a></li>
           <li id="signUp" class="drp-cls"><a class="a-cls-hover" href="#" onclick="showSignUpModal(this)"><i class="fa fa-user-plus" aria-hidden="true"></i>Sign up</a></li>
           <li id="signOut" class="drp-cls" style="display: none;"><a class="a-cls-hover" href="#" onclick="signOut(this)"><i class="fa fa-sign-out" aria-hidden="true"></i>Sign out</a></li>
       </ul>
          <!-------------------------------------------------------------------->
  </div>
  </div>
</nav>
        
</div>
