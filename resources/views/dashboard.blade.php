<!DOCTYPE html>
<html>
<head>
	<title>E-commerce project</title>

			<!-- font awesome -->

			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

			<!-- Boostrap CDN -->

			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

		<style>
			.fa-star{
			color: #e3c336;
			padding: 3%;
			}

			.img-body{
				height: 10px;
			}

			.custom-login{
			margin-top: 20px;
        	padding-top: 5px;
        	height: 550px;
        	margin-bottom: 100px;
    		}

    		.card-body{
    			text-align: center;
    		}

    		.container{
    			width: 100%;
    			height: auto;
   				/*background-color: red;*/
   				display: flex;
    			justify-content: space-around;
    			flex-direction: row; 
    			flex-flow: wrap;
    		}


		</style>

</head>
<body>
	{{View::make('navbar')}}

			
		<div class="container custom-login">
			@foreach($products as $item)
		<div class= "col-md-3 col-sm-6 my-3 my-md-1">
		
			<form action="add_to_cart" method="POST">
				@csrf
				<div class="card shadow dark">

						<img src="{{$item['image']}}">
					<div class="card-body">
						<h4 class="card-title">{{$item['name']}}</h4>
						 <h6 class="card-text">{{$item['description']}}</h6>
						<h6>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="far fa-star"></i>
						</h6>
						<small><s class="text-secondary">$1000</s></small>
						<h5>
						<span class="price">{{$item['price']}}</span>
						</h5>
						<input type="hidden" name="item_id" value="{{$item['id']}}">
						<button class="btn btn-warning my-2">Add to cart <i class="fas fa-shopping-cart"></i></button>
					</div>
					</div>
			</form>
		</div>
		@endforeach
		</div>

	






	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	{{View::make('footer')}}
</body>
</html>