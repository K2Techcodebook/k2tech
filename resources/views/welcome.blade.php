@include('sitelayout.header')

 @include('sitelayout.nav')
   @yield('content')


  <!-- START - Contain Wrapp -->
        <div class="contain-wrapp">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section-heading">
                            <h3>Our portfolio</h3>
                            <p></p>
                            <i class="fa fa-image"></i>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <!-- START - Gallery Filter  -->
                        <ul class="filter-items">
                            <li><a href="#" data-filter="" class="active">All</a></li>
                            <li><a href="#" data-filter="web">Web</a></li>
                            <li><a href="#" data-filter="graphic">Graphic</a></li>
                            <li><a href="#" data-filter="logo">Logo</a></li>
                            <li><a href="#" data-filter="app">App</a></li>
                        </ul>
                        <!-- END - Gallery Filter -->
                    </div>
                </div>

                <!-- START - Images Gallery -->
                <div id="gallery" class="masonry gallery">
                    <div class="row">
                        <!-- START - Gallery 01 -->
                        <div data-filter="web" class="grid-item col-xs-12 col-sm-4">
                            <div class="img-wrapper">
                                <div class="img-caption ecadaZoomInDown">
                                    <a href="{{URL::asset('img/gallery/img01_380x380.jpg')}}" data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>
                                    <h5><a href="portfolio_single_item.html">Project Title</a></h5>
                                    <a href="#" class="img-categorie">Web design</a>
                                </div>
                                <img src="{{URL::asset('img/gallery/img01_380x380.jpg')}}" class="img-responsive" alt="" />
                            </div>
                        </div>
                        <!-- END - Gallery 01 -->

                        <!-- START - Gallery 02 -->
                        <div data-filter="graphic" class="grid-item col-xs-12 col-sm-4">
                            <div class="img-wrapper">
                                <div class="img-caption ecadaZoomInDown">
                                    <a href="{{URL::asset('img/gallery/img02_380x380.jpg')}}" data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>
                                    <h5><a href="portfolio_single_item.html">Project Title</a></h5>
                                    <a href="#" class="img-categorie">Web design</a>
                                </div>
                                <img src="{{URL::asset('img/gallery/img02_380x380.jpg')}}" class="img-responsive" alt="" />
                            </div>
                        </div>
                        <!-- END - Gallery 02 -->

                        <!-- START - Gallery 03 -->
                        <div data-filter="app" class="grid-item col-xs-12 col-sm-4">
                            <div class="img-wrapper">
                                <div class="img-caption ecadaZoomInDown">
                                    <a href="{{URL::asset('img/gallery/img03_380x380.jpg')}}" data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>
                                    <h5><a href="portfolio_single_item.html">Project Title</a></h5>
                                    <a href="#" class="img-categorie">App design</a>
                                </div>
                                <img src="{{URL::asset('img/gallery/img03_380x380.jpg')}}" class="img-responsive" alt="" />
                            </div>
                        </div>
                        <!-- END - Gallery 03 -->

                        <!-- START - Gallery 04 -->
                        <div data-filter="logo" class="grid-item col-xs-12 col-sm-4">
                            <div class="img-wrapper">
                                <div class="img-caption ecadaZoomInDown">
                                    <a href="{{URL::asset('img/gallery/img04_380x380.jpg')}}" data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>
                                    <h5><a href="portfolio_single_item.html">Project Title</a></h5>
                                    <a href="#" class="img-categorie">Logo design</a>
                                </div>
                                <img src="{{URL::asset('img/gallery/img04_380x380.jpg')}}" class="img-responsive" alt="" />
                            </div>
                        </div>
                        <!-- END - Gallery 04 -->

                        <!-- START - Gallery 05 -->
                        <div data-filter="logo" class="grid-item col-xs-12 col-sm-4">
                            <div class="img-wrapper">
                                <div class="img-caption ecadaZoomInDown">
                                    <a href="{{URL::asset('img/gallery/img05_380x380.jpg')}}" data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>
                                    <h5><a href="portfolio_single_item.html">Project Title</a></h5>
                                    <a href="#" class="img-categorie">Logo design</a>
                                </div>
                                <img src="{{URL::asset('img/gallery/img05_380x380.jpg')}}" class="img-responsive" alt="" />
                            </div>
                        </div>
                        <!-- END - Gallery 05 -->

                        <!-- START - Gallery 06 -->
                        <div data-filter="web" class="grid-item col-xs-12 col-sm-4">
                            <div class="img-wrapper">
                                <div class="img-caption ecadaZoomInDown">
                                    <a href="{{URL::asset('img/gallery/img06_380x380.jpg')}}" data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>
                                    <h5><a href="portfolio_single_item.html">Project Title</a></h5>
                                    <a href="#" class="img-categorie">Web design</a>
                                </div>
                                <img src="{{URL::asset('img/gallery/img06_380x380.jpg')}}" class="img-responsive" alt="" />
                            </div>
                        </div>
                        <!-- END - Gallery 06 -->

                        <!-- START - Gallery 07 -->
                        <div data-filter="graphic" class="grid-item col-xs-12 col-sm-4">
                            <div class="img-wrapper">
                                <div class="img-caption ecadaZoomInDown">
                                    <a href="{{URL::asset('img/gallery/img07_380x380.jpg')}}" data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>
                                    <h5><a href="portfolio_single_item.html">Project Title</a></h5>
                                    <a href="#" class="img-categorie">Graphic design</a>
                                </div>
                                <img src="{{URL::asset('img/gallery/img07_380x380.jpg')}}" class="img-responsive" alt="" />
                            </div>
                        </div>
                        <!-- END - Gallery 07 -->

                        <!-- START - Gallery 08 -->
                        <div data-filter="app" class="grid-item col-xs-12 col-sm-4">
                            <div class="img-wrapper">
                                <div class="img-caption ecadaZoomInDown">
                                    <a href="{{URL::asset('img/gallery/img08_380x380.jpg')}}" data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>
                                    <h5><a href="portfolio_single_item.html">Project Title</a></h5>
                                    <a href="#" class="img-categorie">App design</a>
                                </div>
                                <img src="{{URL::asset('img/gallery/img08_380x380.jpg')}}" class="img-responsive" alt="" />
                            </div>
                        </div>
                        <!-- END - Gallery 08 -->

                        <!-- START - Gallery 09 -->
                        <div data-filter="logo" class="grid-item col-xs-12 col-sm-4">
                            <div class="img-wrapper">
                                <div class="img-caption ecadaZoomInDown">
                                    <a href="{{URL::asset('img/gallery/img09_380x380.jpg')}}" data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>
                                    <h5><a href="portfolio_single_item.html">Project Title</a></h5>
                                    <a href="#" class="img-categorie">Logo design</a>
                                </div>
                                <img src="{{URL::asset('img/gallery/img09_380x380.jpg')}}" class="img-responsive" alt="" />
                            </div>
                        </div>
                        <!-- END - Gallery 09 -->
                    </div>
                </div>
                <!-- END - Images Gallery -->


   <div class="modal" id="createTopic_" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content cta-wrapper cta-primary">
                    <div class="modal-header">
             <h4>Welcome to Our Website Please Are You ??????????????</h4>
        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>

                           </div>
                    <div class="modal-body">
                     
                      
                         <hr/>
                    
      <a class="btn-e btn-gray"   href="{{route('business_signup')}}" >{{ __('Register As Business') }}</a> or  <a class="btn-e btn-gray" href="{{route('affiliate_signup') }}">{{ __('Register As Affiliate') }}</a>

                                            </div>                                            
                                             
                                        </div>
                                </div>
                            </div>  <!--- end modal -->


   <div class="modal" id="create_" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content cta-wrapper cta-primary">
                    <div class="modal-header">
             <h4>Welcome to Our Website Please Are You ??????????????</h4>
        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>

                           </div>
                    <div class="modal-body">
                     
                      
                         <hr/>
                    
      <a class="btn-e btn-gray"   href="{{route('business_sign')}}" >{{ __('Login As Business') }}</a> or  <a class="btn-e btn-gray" href="{{route('affiliate_sign') }}">{{ __('Login As Affiliate') }}</a>

                                            </div>                                            
                                             
                                        </div>
                                </div>
                            </div>  <!--- end modal -->





            </div>
        </div>
        <!-- END - Contain Wrapp -->

        <!-- START - Contain Wrapp -->


        <!-- START - Parallax -->
        <div class="parallax parallax-three bg-clients">
            <div class="parallax-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 owl-column-wrapp text-center">
                            <div id="clients" class="owl-carousel leftControls-right">
                                <div class="item">
                                    <a href="#" class="client-logo"><img src="{{URL::asset('img/clients/logo01.png')}}" class="img-reponsive" alt="" /></a>
                                </div>
                                <div class="item">
                                    <a href="#" class="client-logo"><img src="{{URL::asset('img/clients/logo02.png')}}" class="img-reponsive" alt="" /></a>
                                </div>
                                <div class="item">
                                    <a href="#" class="client-logo"><img src="{{URL::asset('img/clients/logo03.png')}}" class="img-reponsive" alt="" /></a>
                                </div>
                                <div class="item">
                                    <a href="#" class="client-logo"><img src="{{URL::asset('img/clients/logo04.png')}}" class="img-reponsive" alt="" /></a>
                                </div>
                                <div class="item">
                                    <a href="#" class="client-logo"><img src="{{URL::asset('img/clients/logo05.png')}}" class="img-reponsive" alt="" /></a>
                                </div>
                                <div class="item">
                                    <a href="#" class="client-logo"><img src="{{URL::asset('img/clients/logo06.png')}}" class="img-reponsive" alt="" /></a>
                                </div>
                                <div class="item">
                                    <a href="#" class="client-logo"><img src="{{URL::asset('img/clients/logo07.png')}}" class="img-reponsive" alt="" /></a>
                                </div>
                                <div class="item">
                                    <a href="#" class="client-logo"><img src="{{URL::asset('img/clients/logo08.png')}}" class="img-reponsive" alt="" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END - Parallax -->

        <!-- START - Contain Wrapp -->

        <!-- END - Contain Wrapp -->

      @yield('footer')


            @include('sitelayout.footer')

@include('sitelayout.footerscript')