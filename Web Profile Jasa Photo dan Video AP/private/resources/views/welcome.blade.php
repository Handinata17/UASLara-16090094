
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8" />
    <title>Abimanyu Production</title>
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    

    <!-- CSS
  ================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans|Lusitana:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('public/assets/user/styles/prettyPhoto.css')}}"  media="screen" />
    <link rel="stylesheet" href="{{ asset('public/assets/user/styles/flexslider.css')}}" />
    <link rel="stylesheet" href="{{ asset('public/assets/user/styles/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('public/assets/user/styles/layout.css')}}" />
    <link rel="stylesheet" href="{{ asset('public/assets/user/styles/camera.css')}}" />
    <link rel="stylesheet" href="{{ asset('public/assets/user/styles/color.css')}}" />

    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    
    
</head>


<body class="home">

<div id="bodychild">
    <div id="outercontainer">
    
        <!-- HEADER -->
        <div id="outerheader">
            <div id="headercontainer">
                <div class="container">
                    <header id="top">
                        <div id="logo">                 
                            <div id="logoimg">
                                <a href="index.html" title="ABIMANYU PRODUCTION" ><img src="{{ asset('public/assets/user/images/Abimanyu Production New Logo Putih11.png')}}" alt="" /></a>
                            </div>
                        </div>
                        <section id="navigation">
                            <nav id="nav-wrap">
                                <ul id="topnav" class="sf-menu">
                                    <li class="current"><a href="{{url('/')}}">Home</a></li>
                
                                        <ul>
                                            <li><a href="#">Only</a></li>
                                            <li><a href="#">Example of</a></li>
                                            <li><a href="#">The Dropdown</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url('agallery')}}">Gallery</a> </li>
                                    <li><a href="{{url('apaket')}}">Paket</a> </li>
                                </ul><!-- topnav -->
                                <div class="clear"></div>
                            </nav><!-- nav -->
                            <div class="clear"></div>
                        </section>
                        <div class="clear"></div>
                    </header>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <!-- END HEADER -->
        
        <!-- SLIDER -->
        <div id="outerslider">
        <section id="slider">
                
                <div id="slideritems">
                
                    <div class="slider-img" data-src="{{ asset('public/assets/user/images/content/slide2.jpg')}}">
                        <div class="camera_caption fadeIn">
                            <div class="slider-title"><a href="#">WELCOME to ABIMANYU PRODUCTION</a></div>
                            <div class="slider-desc">Menerima Jasa Photo dan Video <br />
                            </div>
                        </div>
                    </div>
            
                    <div class="slider-img" data-src="{{ asset('public/assets/user/images/content/slide1.jpg')}}">
                        <div class="camera_caption fadeIn">
                            <div class="slider-title"><a href="#">WELCOME to ABIMANYU PRODUCTION</a></div>
                            <div class="slider-desc">Menerima Jasa Photo dan Video<br />
                            
                            </div>
                        </div>
                    </div>
            
                    <div class="slider-img" data-src="{{ asset('public/assets/user/images/content/slide3.jpg')}}">
                        <div class="camera_caption fadeIn">
                            <div class="slider-title"><a href="#">WELCOME to ABIMANYU PRODUCTION</a></div>
                            <div class="slider-desc">Menerima Jasa Photo dan Video<br />
                        </div>
                        </div>
                    </div>   
                             
                </div>
                <div class="clear"></div>
            </section>
        </div>
        <!-- END SLIDER -->    
        
        <!-- MAIN CONTENT -->
        <div id="outermain">
            <div class="container">
                <div class="row">
                
                    <section id="maincontent" class="twelve columns">
                    
                        <section id="content">
                            <h3 class="widget-title">Gallery</h3>
                              
                            <!-- Begin Portfolio Items -->
                            <div class="row">
                            <div id="ts-portfolio">
                                
                                @foreach($gallery as $gallery)
                                <div class="item one_fourth columns alpha gallery2" >
                                    <div class="ts-pf-img">
                                        <div class="frame">
                                            <a class="pfzoom" href="" data-rel=prettyPhoto[mixed] title="Our Wedding">
                                            <span class="rollover"></span>
                                            <img  src="{{asset('public/images/'.$gallery->gambar)}}" alt="post2" />
                                            </a>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <div class="ts-pf-text">
                                        <h3 class="pftitle"><a href="#" title="Wedding"><span>{{$gallery->nama}}</span></a></h3>
                                        <!-- <div class="textcontainer"{{$gallery->description}}</div> -->
                                    </div>
                                    
                                    <div class="clear"></div>
                                </div>
                                @endforeach

                               
                                        <p></p>
                                    </div>
                                    
                                   
                                </div>
                            </div>
                                
                            </div>
                            </div>
                            <!-- End Portfolio Items -->
                            
                        </section>
                    
                    </section>
                
                
                <div class="clear"></div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
        
        
        <!-- BOTTOM -->
        <div id="outerbottom">
            <div class="container">
                <div class="row">
                    <div id="bottom-sidebar" class="twelve columns">
                        <div class="widget-homebottom">
                        <h3 class="widget-title">Our Wedding Planner</h3>
                        <div class="ts-features ">
                            <div class="row">
                            
                                <div class="columns fitem one_sixth">
                                    <div class="item-container">
                                        <a href="#">
                                            <div class="feature-img">
                                                <div class="img-container">
                                                    <img width="45" height="45" src="images/content/icon1.png"  alt="icon1" />
                                                </div>
                                            </div>
                                        </a>
                                        <div class="recent-text-wrap">
                                            <h3 class="feature-title">Honeymoon <br/> Ideas</h3>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            
                                <div class="columns fitem one_sixth">
                                    <div class="item-container">
                                        <a href="#">
                                            <div class="feature-img">
                                                <div class="img-container">
                                                    <img width="45" height="45" src="images/content/icon2.png"  alt="icon2" />
                                                </div>
                                            </div>
                                        </a>
                                        <div class="recent-text-wrap">
                                            <h3 class="feature-title">Decoration<br/>Ideas</h3>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                
                                <div class="columns fitem one_sixth">
                                    <div class="item-container">
                                        <a href="#">
                                            <div class="feature-img">
                                                <div class="img-container">
                                                    <img width="45" height="45" src="images/content/icon3.png"  alt="icon3" />
                                                </div>
                                            </div>
                                        </a>
                                        <div class="recent-text-wrap">
                                            <h3 class="feature-title">Party<br/> Ideas</h3>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            
                                <div class="columns fitem one_sixth">
                                    <div class="item-container">
                                        <a href="#">
                                            <div class="feature-img">
                                                <div class="img-container">
                                                    <img width="45" height="45" src="images/content/icon4.png"  alt="icon4" />
                                                </div>
                                            </div>
                                        </a>
                                        <div class="recent-text-wrap">
                                            <h3 class="feature-title">Wedding<br/> Transport</h3>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                
                                <div class="columns fitem one_sixth">
                                    <div class="item-container">
                                        <a href="#">
                                            <div class="feature-img">
                                                <div class="img-container">
                                                    <img width="45" height="45" src="images/content/icon5.png"  alt="icon5" />
                                                </div>
                                            </div>
                                        </a>
                                        <div class="recent-text-wrap">
                                            <h3 class="feature-title">Wedding<br/> Menu</h3>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            
                                <div class="columns fitem one_sixth">
                                    <div class="item-container">
                                        <a href="#">
                                            <div class="feature-img">
                                                <div class="img-container">
                                                    <img width="45" height="45" src="images/content/icon6.png"  alt="icon6" />
                                                </div>
                                            </div>
                                        </a>
                                        <div class="recent-text-wrap">
                                            <h3 class="feature-title">Wedding<br/> Flowers</h3>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                
                                <div class="clear"></div>
                            </div>
                            
                        </div>
                        <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <!-- END BOTTOM -->
        
       
        <!-- FOOTER -->
        <footer id="footer">

            <!-- FOOTER SIDEBAR -->
            <div id="outerfootersidebar">
                <div class="container">
                    <div id="footersidebar" class="row"> 

                        <div id="footcol1"  class="three columns">
                            <ul>
                                <li class="widget-container">
                                    <h2 class="widget-title">About Us</h2>
                                    <h4 class="font-std">Consectetur adipisicing elit sed do eiusmod Incididunt</h4>
                                    
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod Incididunt ut labore et dolore magna aliqua.  Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. 
                                    Cum sociis natoque. penatibus et magnis dis
                                </li>
                            </ul>
                        </div>
                        <div id="footcol2"  class="three columns">
                            <ul>
                                <li class="widget-container">
                                    <h2 class="widget-title">Categories</h2>
                                    <ul class="p-left">
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Engagement Rings</a></li>
                                        <li><a href="#">Wedding Decoration</a></li>
                                        <li><a href="#">Wedding Cakes</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Flowers</a></li>
                                    </ul>
                                    <ul class="p-right">
                                        <li><a href="#">Flowers</a></li>
                                        <li><a href="#">Food And Drink</a></li>
                                        <li><a href="#">Stationery</a></li>
                                        <li><a href="#">Men</a></li>
                                        <li><a href="#">Accessories</a></li>
                                        <li><a href="#">Gift</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div id="footcol3"  class="three columns">
                            <ul>
                                <li class="widget-container">
                                    <h2 class="widget-title">Contact info</h2>
                                    <div class="contact-info">
                                    <strong>Our Location:</strong><br/>
                                    3569 Miami Road,<br/>
                                    LA, M09 77R<br/>
                                    <strong>Phone:</strong> +1 800 325 2564<br/>
                                    <strong>Fax:</strong> +1 800 325 2564<br/>
                                    <strong>Email:</strong> mail@sweetly.com<br/>
                                    <strong>Website:</strong> www.sweetly.com
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="footcol4"  class="three columns">
                            <ul>
                                <li class="widget-container widget_slide">
                                    <h3 class="widget-title">Testimonials</h3>
                                    <div id="testiitems" class="flexslider">
                                        <ul class="slides">
                                            <li>
                                                <div class="testi-item">
                                                <div class="quote">" Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. 
                                                Fusce suscipit varius mi. Cum sociis natoque. "</div>
                                                <div class="testi-user">Paul Black, Manager</div>
                                                </div>
                                            </li>
                                            <li>                                                    
                                                <div class="testi-item">
                                                <div class="quote">" Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. 
                                                Fusce suscipit varius mi. Cum sociis natoque. "</div>
                                                <div class="testi-user">Jane Smith, CEO - Company</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <!-- END FOOTER SIDEBAR -->

            <!-- COPYRIGHT -->
            <div id="outercopyright">
                <div class="container">
                    <div class="row">
                        <div class="twelve columns">
                        <div id="copyright-wrap">
                            <div id="copyright">
                                Copyright &copy; 2013-2014 Sweetly. Designed by <a href="http://templatesquare.com" title="">TemplateSquare.Com</a>
                            </div>
                            <ul class="sn">
                                <li><a href="http://twitter.com" title="Twitter"><span class="icon-img twitter"></span></a></li>
                                <li><a href="http://facebook.com" title="Facebook"><span class="icon-img facebook"></span></a></li>
                                <li><a href="https://plus.google.com" title="Google+"><span class="icon-img google"></span></a></li>
                                <li><a href="http://pinterest.com" title="Pinterest"><span class="icon-img pinterest"></span></a></li>

                            </ul>
                        </div> 
                        </div>
                    </div>
                </div>
            </div>
            <!-- END COPYRIGHT -->
        </footer>
        <!-- END FOOTER -->
        <div class="clear"></div><!-- clear float --> 
    </div><!-- end outercontainer -->
</div><!-- end bodychild -->


<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        // -->
<!-- ////////////////////////////////// -->
<script type="text/javascript" src="{{ asset('public/assets/user/js/jquery-1.11.1.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('public/assets/user/js/jquery-migrate-1.2.1.min.js')}}"></script>

    
<script>
  document.createElement('header');
  document.createElement('section');
  document.createElement('article');
  document.createElement('aside');
  document.createElement('nav');
  document.createElement('footer');
</script>

<!-- jQuery Superfish -->
        <script type="text/javascript" src="{{ asset('public/assets/user/js/hoverIntent.js')}}"></script> 
        <script type="text/javascript" src="{{ asset('public/assets/user/js/superfish.js')}}"></script> 
        <script type="text/javascript" src="{{ asset('public/assets/user/js/supersubs.js')}}"></script>


<!-- jQuery Dropdown Mobile -->
        <script type="text/javascript" src="{{ asset('public/assets/user/js/tinynav.min.js')}}"></script>

<!-- Custom Script -->
        <script type="text/javascript" src="{{ asset('public/assets/user/js/custom.js')}}"></script>

<!-- jQuery Flex Slider -->
        <script type="text/javascript" src="{{ asset('public/assets/user/js/jquery.flexslider-min.js')}}"></script>

<script type="text/javascript">
jQuery(window).load(function() {
    jQuery('#testiitems').flexslider({
        animation: "fade",
        touch:true,
        animationDuration: 6000,
        directionNav: true,
        controlNav: false
    });
        
});
</script>

<!-- jQuery Camera Slider -->
<script type="text/javascript" src="{{ asset('public/assets/user/js/camera.min.js')}}"></script>
<script type="text/javascript">
jQuery(document).ready(function() {
    if(jQuery('#slideritems').length){
        jQuery('#slideritems').camera({
            height: '33.6%', /* to set the slider height */
            fx: 'random', /* to set the slider effect */
            autoAdvance: true,
            pagination: true,
            navigation:false,
            navigationHover: false,
            playPause: false,
            thumbnails: false,
            loader: 'none',
            imagePath: '../images/'
        });
    }
        
});
</script>

<!-- jQuery PrettyPhoto -->
<script type="text/javascript" src="{{ asset('public/assets/user/js/jquery.prettyPhoto.js')}}"></script>
<script type="text/javascript" src="{{ asset('public/assets/user/js/fade.js')}}"></script>
<script type="text/javascript" src="{{ asset('public/assets/user/js/jquery-easing-1.3.js')}}"></script>


</body>
</html>
