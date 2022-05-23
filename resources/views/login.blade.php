<!DOCTYPE html>
<html>
<head>
	<title>E-commerce project</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  	<div class="container-fluid">
    <a class="navbar-brand fas fa-shopping-basket" href="#"> Shopping-Cart</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

    <div class="container custom-login">
		<div class="row">
			<div class="col-md-4 offset-md-4 form-div login">
			<h2 style="text-align: center;">Login here</h2>

				<form action="{{route('check')}}" method="post">
					
					@if(Session::get('success'))

					<div class="alert alert-success">
					{{ Session::get('success') }}


					</div>
					@endif

					@if(Session::get('fail'))
					<div class="alert alert-danger">
						{{Session::get('fail')}}
					</div>
					@endif
					@csrf

					
					 <div class="form-group">
					 	
					 	<label for="username">Email:</label>
					 	<input type="text" name="email" class="form-control form-control-lg" value="{{old('email')}}">
					 	<span class="text-danger">@error('email'){{($message)}} @enderror</span>

					 </div>
					 
					 <div class="form-group">
					 	<label for="username">Password:</label>
					 	<input type="password" name="password" class="form-control form-control-lg">
					 	<span class="text-danger">@error('password'){{($message)}} @enderror</span><br>

					 </div>
					 
					 <div class="form-group">
					 	<button type="submit" class="btn btn-primary btn-block btn-lg">Login </button><br><br>
					 	<a href="{{ route('register')}}">I haven't registered yet.</a>
					 </div>
					 
				</form>
			</div>
		</div>
	</div>
	{{View::make('footer')}}
    <style>
    	.custom-login{
        	height: 550px;
        	padding-top: 100px;
        	margin-top: 2px;

    }
    </style>
</body>

</html>

	
