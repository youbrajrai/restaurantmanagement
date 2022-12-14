<div id="loader">
    <div id="status"></div>
</div>
<div id="site-header">
    <header id="header" class="header-block-top" style="background-color:#48A14D">
        <div class="container">
            <div class="row">
                <div class="main-menu">
                    <!-- navbar -->
                    <nav class="navbar navbar-default" id="mainNav">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="logo"> 
                                <a class="navbar-brand js-scroll-trigger logo-header" href="{{route('main')}}">
                                    <img src="{{asset('images/1.jpeg')}}" alt="" height="60px;" width="130px;" style="object-fit: contain;
                                    border-radius: 50%;
                                    image-rendering: pixelated;
                                    width: 100%;">
                                </a>
                            </div>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li> <a href="#"><class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="font-family: comic sans ms;">
                                    Reservation System</a></li>
                                <!-- <li class="active"><a href="index.html">Home</a></li> -->
                                <li><a href="{{route('about')}}">About us</a></li>
                                <li><a href="{{route('menu')}}">Menu</a></li>
                                <!-- <li><a href="#">Gallery</a></li> -->
                                <li><a href="{{route('contact')}}">Contact us</a></li>
                                <li> <a class="nav-link" href="{{route('login')}}">
                                    <i class="bi bi-user"></i>Login</a></li>
                                <!-- <li> <a class="nav-link" href="cart.html">
                                    <i class="fa fa-shopping-basket"></i>Cart<span class="dot text-center">0</span></a></li> -->

        <!-- Button trigger modal -->



        
                            </ul>
                        </div>
                        <!-- end nav-collapse -->
                    </nav>
                    <!-- end navbar -->
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </header>
    <!-- end header -->
</div>
<!-- end site-header -->



