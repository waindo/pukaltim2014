
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login Halaman Administrator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
		background:#333;
      }

      .form-signin {
        max-width: 200px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
		margin-top:200px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
		-moz-border-radius: 5px;
		-webkit-border-radius: 5px;
		border-radius: 5px;

      }

    </style>
    <script type="text/javascript">
function validasi(form){
if (form.username.value == ""){
alert("Anda belum mengisikan Username");
form.username.focus();
return (false);
}
     
if (form.password.value == ""){
alert("Anda belum mengisikan Password");
form.password.focus();
return (false);
}
return (true);
}
</script>
<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
<body OnLoad="document.login.username.focus();">

    <div class="container">

      <form class="form-signin" method="post" action="cek_login.php" onSubmit="return validasi(this)">
        <h4 class="form-signin-heading" style="text-align:center">LOGIN ADMIN</h4>
        <div class="input-prepend">
  		<span class="add-on"><i class=" icon-user"></i></span>
 		<input class="span2" id="prependedInput" type="text" placeholder="Username" name="username">
		</div>
        <div class="input-prepend">
  		<span class="add-on"><i class="icon-lock"></i></span>
 		<input class="span2" id="prependedInput" type="password" placeholder="Password" name="password">
		</div>
        <button class="btn btn-primary" type="submit">Login</button>
      </form>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
