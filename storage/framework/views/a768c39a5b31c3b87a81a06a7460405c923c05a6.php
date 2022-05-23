<?php
 use App\Http\Controllers\MainController;

 $total=0;
 if(Session::has('LoggedUser'))
  {

  $total = MainController::cartItem();

  }
?>

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
    <div class="collapse navbar-collapse tabs">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item wow">
          <a class="nav-link fas fa-shopping-cart" href="#">cart(<?php echo e($total); ?>)</a>
        </li>

        <?php if(Session::has('LoggedUser')): ?>
        <li class="dropdown">
      <a class="dropdown-toggle lead" data-toggle="dropdown" href="#" style="color: white; text-decoration: none;"><?php echo e(Session::get('LoggedUser')); ?> </a>

        <ul class="dropdown-menu" style="background-color: #141e21;">
          <li><a href="logout" class="leads" >Logout</a></li>
        </ul>
      </li>
      <?php else: ?>
          <a href="login">Login</a>
      <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
    
</body>
<style>
    .wow{
        padding-left: 210%;
        /*background-color: red;*/  
        }
    .dropdown{
/*      background-color: green;
*/     padding-left:10%;
      text-decoration: none;
      font-style: italic;
    }
    .leads{
      text-decoration: none;
      font-family: sans-serif;
      color: white;
    }

    }
</style>
</html>
<?php /**PATH E:\laravel_project\ecommerce\resources\views/navbar.blade.php ENDPATH**/ ?>