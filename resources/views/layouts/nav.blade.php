 <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Kiyoshi Sushi</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">

  @if (Auth::check())
      <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="./order">Order</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="./showpurchases">View Purchase Records</a>
            </li>
      <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="./purchase">New Purchase Record</a>
            </li>
      </li>
      <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="./createorder">New Menu Item</a>
            </li>

    <a class="nav-link ml-auto" href="#">{{ Auth::user()->first_name }}</a>
    @else

  
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="./login">Login</a>
            </li>
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="./register">Register</a>
            </li>
            
      <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="./about">About</a>
            </li>

            <li>
              
            </li>
            
         
                
      

              @endif

    
     </ul>
        </div>
      </div>
    </nav>