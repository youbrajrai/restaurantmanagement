<x-app>
<style type="text/css">

.product{

    margin: 55px;

    text-align: center;

    font-size: 20px;

    padding: 15px;

    border-radius: 10px;

    color: #fff;

    background-color: #008B8B;

}

.category{

    display: flex;

}

body{

    background-color: #d2d2d2;

}

.categorys{

    background-color: #00ffff;

    height: 500px;

}

</style>
<div id="banner" class="banner full-screen-mode parallax">
        <div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        <div class="banner-cell">
                            <h1>Menu</h1>
                            <h2>Fresh,Fast,Tasty.</h2>
                        </div>
                        <!-- end banner-cell -->
                    </div>
                    <!-- end banner-text -->
                </div>
                <!-- end banner-static -->
            </div>
            <!-- end col -->
        </div>
        <!-- end container -->
    </div>
    <!-- end banner -->


             <!-- Modal -->
             <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h2 class="modal-title" id="exampleModalLongTitle">NOTICE FOR TABLE RESERVATION SYSTEM</h2>
                      <data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </div>
                    <div class="modal-body">
                     For Reservation and Table booking system <br> please contact this number : <h2>9804782268</h2>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>


 
    <div id="menu" class="menu-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
						Our Menu 	
					</h2>
                        <p class="title-caption text-center">Kush Garden is the fastest, easiest and most convenient way to enjoy the best food of your favourite restaurants at home, at the office or wherever you want to.</p>
                    </div>
                    <div class="container mt-5 justify-content-center">

                        <div class="row">
                    
                            <div class="col-md-12 category">

                                <div class="row">

                                    <ul class="nav nav-tabs">

                                        @foreach ($category as $item)

                                            <li class=" nav-item">

                                                <a href="{{ route('menu',['id' => $item->id]) }}" class="nav-link {{ $catTab == $item->id ? 'active' : '' }}">{{ $item->title }}</a>
                                                
                                            </li>

                                        @endforeach

                                    </ul>

                                    <div class="tab-content">

                                        @foreach ($category as $item)
                                        
                                            <div class="tab-pane {{ $catTab == $item->id ? 'active' : '' }}" id="home{{ $item->id }}" class="active">


                                                    @foreach ($item->products as $element)
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                                            <div class="offer-item">
                                                                <img src="{{asset('assets/img/product/'.$element->image)}}" alt="" class="img-responsive">
                                                                <div>
                                                                    <h3>{{ $element->title}}</h3>
                                                                    <p>
                                                                    {!! $element->content !!}
                                                                    </p>
                                                                </div>
                                                                <span class="offer-price">{{ $element->price}}</span>
                                                            </div>
                                                        </div>
                                                        <!-- end col -->                                                    

                                                    @endforeach

                                                

                                            </div>

                                        @endforeach

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- end tab-menu -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end menu -->    
</x-app>    