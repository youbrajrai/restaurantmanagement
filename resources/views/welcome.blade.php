<x-app>

@section('banner')
@include('layouts.banner')
@endsection
@section('about')
@include('layouts.about')
@endsection
@section('special_menu')
@include('layouts.specialmenu')
@endsection
@section ('content')
<section class="text-center">
<div id="menu" class="menu-main pad-top-100 pad-bottom-100">
    <div class="container" style="margin-bottom: 50px;">
        <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
            <h2 class="block-title text-center">Our Menu</h2>
            <p class="title-caption text-center">Kush Garden is the fastest, easiest and most convenient way to enjoy the best food of your favourite restaurants at home, at the office or wherever you want to.</p>
        </div>

<div class="col-md-3 col-sm-6">
<div class="product-grid" style="border-style: hidden;">
<div class="product-image">
<a href="#">
<img class="pic-1" src="images/momo.jpg">
<img class="pic-2" src="images/momo.jpg">
</a>


</div>

<div class="product-content">
<h3><a href="#">Momo</a></h3>
<div class="price">Rs.160.00
<span>Rs.120.00</span>
</div>

</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="product-grid"style="border-style: hidden; border: 2px solid white;">
<div class="product-image">
<a href="#">
<img class="pic-1" src="images/pizza.jpg">
<img class="pic-2" src="images/pizza.jpg">
</a>


</div>

<div class="product-content">
<h3><a href="#">Pizza</a></h3>
<div class="price">Rs.50.00
<span>Rs.100.00</span>
</div>

</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="product-grid" style="border-style: hidden;">
<div class="product-image">
<a href="#">
<img class="pic-1" src="images/chowmein.jpg">
<img class="pic-2" src="images/chowmein.jpg">
</a>


</div>

<div class="product-content">
<h3><a href="#">Chowmein</a></h3>
<div class="price">Rs.50.00
<span>Rs.100.00</span>
</div>

</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="product-grid" style="border-style: hidden;">
<div class="product-image">
<a href="#">
<img class="pic-1" src="images/pizza.jpg">
<img class="pic-2" src="images/pizza.jpg">
</a>

</div>

<div class="product-content">
<h3><a href="#">Pizza</a></h3>
<div class="price">Rs.50.00
<span>Rs.10.00</span>
</div>

</div>
</div>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h2 class="modal-title" id="exampleModalLongTitle" style="font-family: comic sans ms;">NOTICE FOR TABLE RESERVATION SYSTEM</h2>
<data-dismiss="modal">
<span aria-hidden="true">&times;</span>
</div>
<div class="modal-body" style="font-family: comic sans ms; color: #0bf417;">
<h2> For Reservation and Table booking system <br> please contact this number : <h1>9804782268</h1></h2>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-primary" data-dismiss="modal" style="font-family: comic sans ms;">Close</button>
</div>
</div>
</div>
</div>

<!-- end col -->
</div>
<!-- end row -->
</div>
<!-- end container -->
</div>
<a href="menu.html"> <button type="button" class="btn btn-primary btn-lg">More menu</button></a>

</section>
@endsection
</x-app>