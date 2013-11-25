<div id="menu">
<div id size="fontsize" >
Geohangout
</div>
</div>

<div id ="loginbox">
<h3>Login<h3>
<form method ='POST' action = '/users/p_login'>
  <input type="text" name="email1" style="width:200px; height:20px;" placeholder="Email"><br><br>
  <input type="password" name="password1" style="width:200px; height:20px;"placeholder="Password"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="Submit" value="Log in" style="width:60px; height:30px;" background-color="green;"><br>
   
   <?php if(isset($error)): ?>	
		<div class='error'>
            Login failed. Please double check your email and password
        </div>        
    <?php endif; ?>
    
  <input type="checkbox" name="vehicle" value="Car"> Remember-<span style="color:blue;font-weight:bold"> <a href="" style="text-decoration:none">Forget? </a></span>
	
</form>
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
  FB.init({
    appId      : '556751651084947',
    status     : true, // check login status
    cookie     : true, // enable cookies to allow the server to access the session
    xfbml      : true  // parse XFBML
  });

  // Here we subscribe to the auth.authResponseChange JavaScript event. This event is fired
  // for any authentication related change, such as login, logout or session refresh. This means that
  // whenever someone who was previously logged out tries to log in again, the correct case below 
  // will be handled. 
  FB.Event.subscribe('auth.authResponseChange', function(response) {
    // Here we specify what we do with the response anytime this event occurs. 
    if (response.status === 'connected') {
      // The response object is returned with a status field that lets the app know the current
      // login status of the person. In this case, we're handling the situation where they 
      // have logged in to the app.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // In this case, the person is logged into Facebook, but not into the app, so we call
      // FB.login() to prompt them to do so. 
      // In real-life usage, you wouldn't want to immediately prompt someone to login 
      // like this, for two reasons:
      // (1) JavaScript created popup windows are blocked by most browsers unless they 
      // result from direct interaction from people using the app (such as a mouse click)
      // (2) it is a bad experience to be continually prompted to login upon page load.
      FB.login(function(response) {
		  if (response.authResponse) 
		  	  {
			  // The person logged into your app
			  alert("haha");
			  window.location.assign("http://p1.geohangout.biz");
			  }
		  else 
		  	  {
			  // The person cancelled the login dialog
			  }
			  	});        
    } 
    else {
      // In this case, the person is not logged into Facebook, so we call the login() 
      // function to prompt them to do so. Note that at this stage there is no indication
      // of whether they are logged into the app. If they aren't then they'll see the Login
      // dialog right after they log in to Facebook. 
      // The same caveats as above apply to the FB.login() call here.
      FB.login();
    }
  });
  };

  // Load the SDK asynchronously
  (function(d){
   var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
   if (d.getElementById(id)) {return;}
   js = d.createElement('script'); js.id = id; js.async = true;
   js.src = "//connect.facebook.net/en_US/all.js";
   ref.parentNode.insertBefore(js, ref);
  }(document));

  // Here we run a very simple test of the Graph API after login is successful. 
  // This testAPI() function is only called in those cases. 
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Good to see you, ' + response.email + '.');
      window.location.assign("http://p1.geohangout.biz");
    });
  }
</script>
<!--
  Below we include the Login Button social plugin. This button uses the JavaScript SDK to
  present a graphical Login button that triggers the FB.login() function when clicked. -->
<fb:login-button show-faces="true" width="200" max-rows="1"></fb:login-button>

</div>

<div id="signupbox">
<h3> Sign up </h3>
<form method = 'POST' action = '/users/p_signup'>
	First Name <input type = 'text' name = 'first_name' style="width:200px; height:20px;" placeholder="First name"> <br> <br>
	Last Name <input type ='text' name = 'last_name' style="width:200px; height:20px;" placeholder="Last name"><br><br>
	Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type ='text' name = 'email' style="width:200px; height:20px;" placeholder="Email"><br><br>
	Password &nbsp; <input type ='password' name = 'password' style="width:200px; height:20px;"  placeholder="Passwords">

<?php if(isset($uniqueness)): ?>
		<div class = "error">
			Signup failed, you already have an account.
		</div>			
<?php endif; ?>	

<?php if(isset($blankness)):?>
		<div class = "error">
			Please fill in the blank filed(s).
		</div>			
<?php endif; ?>	

	<input type = 'submit' value = 'Sign Up' style="width:60px; height:30px;"> <br>
</form>
<div>
