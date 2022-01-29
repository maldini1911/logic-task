<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/rukada/color-admin/authentication-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Nov 2019 15:12:17 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Logic Task</title>
  <!--favicon-->
  <link rel="icon" href="{{asset('/')}}/admin/assets/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="{{asset('/')}}/admin/assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{asset('/')}}/admin/assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{asset('/')}}/admin/assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="{{asset('/')}}/admin/assets/css/app-style.css" rel="stylesheet"/>
  <style>
	  .card-authentication1
	  {
		  transform: translate(0,30%)
	  }

	  label{color:#fff}

  </style>
  <!-- Include this in your blade layout -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body class="" style="background:#111">
@include('sweet::alert')
 <!-- Start wrapper-->
 <div id="wrapper">
	<div class="card-authentication1 mx-auto">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="{{asset('/')}}/admin/assets/images/logo.png" alt="logo icon" class="rounded-circle" width="30%">
		 	</div>
		 
		    <form action="{{route('admin.auth.login')}}" method="POST">
			  @csrf
			  <div class="form-group">
			  <label for="exampleInputUsername" class="label">Email</label>
			   <div class="position-relative has-icon-right">
				  <input type="email" id="exampleInputUsername" class="form-control input-shadow" placeholder="Email" name="email">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
				<label for="exampleInputPassword" class="label">Password</label>
					<div class="position-relative has-icon-right">
						<input type="password" id="exampleInputPassword" class="form-control input-shadow" placeholder="Enter Password" name="password">
						<div class="form-control-position">
							<i class="icon-lock"></i>
						</div>
					</div>
				</div>

				<div class="text-center">
				<button type="submit" class="btn btn-primary" style="background:#0080A7;">Sign In</button>
				</div>
	     	</div>
    
		<!--Start Back To Top Button-->
		<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
		<!--End Back To Top Button-->
		</div><!--wrapper-->
		
  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('/')}}/admin/assets/js/jquery.min.js"></script>
  <script src="{{asset('/')}}/admin/assets/js/popper.min.js"></script>
  <script src="{{asset('/')}}/admin/assets/js/bootstrap.min.js"></script>
  
</body>

<!-- Mirrored from codervent.com/rukada/color-admin/authentication-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Nov 2019 15:12:17 GMT -->
</html>
