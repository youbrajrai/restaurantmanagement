<div id="our_team" class="team-main pad-top-100 pad-bottom-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
						Our Team 	
					</h2>
                        <p class="title-caption text-center">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                    </div>
                    <div class="team-box">
                    
                        <div class="row">
                        @forelse($teams as $key => $team)                            
                            <div class="col-md-4 col-sm-6">
                                <div class="sf-team">
                                    <div class="thumb">
                                        <a href="#"><img src="{{asset('assets/img/team/'.$team->image)}}" alt="" style="object-fit:fill;height:300px"></a>
                                    </div>
                                    <div class="text-col">
                                        <h3>{{$team->name}}</h3>
                                        <p>{{$team->designation}}</p>
                                        <ul class="team-social">
                                            <li><a target="_blank" href="{{$team->facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a target="_blank"  href="{{$team->twitter}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a target="_blank" href="{{$team->instagram}}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                            <li><a target="_blank" href="{{$team->linkedin}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                            @empty
                            @endforelse                               

                        </div>
                        <!-- end row -->
                     

                    </div>
                    <!-- end team-box -->

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>