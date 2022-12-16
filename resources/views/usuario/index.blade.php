<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="{{ url('assets/images/icons/favicon.ico') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ url('assets//vendor/bootstrap/css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ url('assets//fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ url('assets//vendor/animate/animate.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ url('assets//vendor/css-hamburgers/hamburgers.min.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ url('assets//vendor/select2/select2.min.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ url('assets//css/util.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ url('assets///css/main.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ url('assets///css/usar.css') }}"/>
</head>
<body>
	
	<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="{{ url('usuario/login') }}" method="post">
            @csrf
						@if(session()->has('error'))
							<div class="alert alert-info mx-auto" style="height:50px">{{ session()->get('error') }}</div>
						@endif
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">Sign in</p>
            
          </div>


          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" name="correo" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter a valid email address" />
            <label class="form-label" for="form3Example3">Email address</label>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="{{ url('usuario/create') }}"
                class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    
    
  </div>
</section>

</body>
</html>