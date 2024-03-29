<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8" />
	<title>Sweetly</title>
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
    <link rel="stylesheet" href="{{ asset('public/assets/user/styles/color.css')}}" />
    
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico" />

    
    
</head>


<body>

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
                                    <li><a href="{{url('/')}}">Home</a></li>
                                        <ul>
                                            <li><a href="#">Only</a></li>
                                            <li><a href="#">Example of</a></li>
                                            <li><a href="#">The Dropdown</a></li>
                                        </ul>
                                    </li>
                                    <li class="current"><a href="{{url('agallery')}}">Gallery</a> </li>
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
        
		<!-- AFTERHEADER -->	                        
        <div id="outerafterheader">
        	<div class="container">
            	<div class="row">
                    <div id="afterheader" class="twelve columns">
                        <div id="trapezoid">
                            <h1 class="pagetitle">Gallery</h1>                    
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-line"></div>
        </div>
        <!-- END AFTERHEADER --> 
        
        <!-- MAIN CONTENT -->
        <div id="outermain">
        	<div class="container">
                <div class="row">
					<section id="maincontent" class="twelve columns">
                    
						<section id="content">
                            
                            <!-- Begin Portfolio Nav -->
                            <div id="filterlist">
                            	<span>Categories:</span>  
                                <ul id="filter">
                                    <li class="current first"><a href="#" data-filter="*">Show All</a></li>
                                    <li><a href="#" class="gallery1" data-filter=".gallery1">Gallery 1</a></li>
                                    <li><a href="#" class="gallery2" data-filter=".gallery2">Gallery 2</a></li>
                                    <li><a href="#" class="gallery3" data-filter=".gallery3">Gallery 3</a></li>
                                </ul> 
                                <div class="clear"></div>
                            </div> 
                            <!-- End Portfolio Nav -->    
                              
                            <!-- Begin Portfolio Items -->
                            <div class="row">
                            <div id="ts-portfolio">
                                @foreach($gallery as $gallery)
                                <div class="item columns alpha gallery1 gallery2" >
                                  
                                            <!-- -->
                                            <img  src="{{asset('public/images/'.$gallery->gambar)}}" alt="img12" width="300px" height="500px" />
                                            </a>
                                           
                                    <div class="ts-pf-text">
                                        <span>{{$gallery->nama}}</span>
                                        <p>{{$gallery->description}}</p>
                                    </div>
                                    
                                   
                                </div>
                                @endforeach
                            </div>
                                
                            <!-- End Portfolio Items -->
                            
                        </section>
                    
                	</section>

                
                
                <div class="clear"></div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
       
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
                                Copyright &copy; 2013-2014 Sweetly. Designed by	<a href="http://templatesquare.com" title="">TemplateSquare.Com</a>
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


<!-- jQuery PrettyPhoto -->
<script type="text/javascript" src="{{ asset('public/assets/user/js/jquery.prettyPhoto.js')}}"></script>
<script type="text/javascript" src="{{ asset('public/assets/user/js/fade.js')}}"></script>
<script type="text/javascript" src="{{ asset('public/assets/user/js/jquery-easing-1.3.js')}}"></script>

<!-- jQuery Isotope -->
<script type="text/javascript" src="{{ asset('public/assets/user/js/jquery.isotope.min.js')}}"></script>
<script>
function runisotope(){
	$container = jQuery('#ts-portfolio');
		$container.isotope({
			itemSelector : '.item'
		});

	// filter items when filter link is clicked
	jQuery('#filter li').click(function(){
	jQuery('#filter li').removeClass('current');
		jQuery(this).addClass('current');
			var selector = jQuery(this).find('a').attr('data-filter');
			$container.isotope({ filter: selector });
		return false;
	}); 
};
jQuery(window).load(function(){
	runisotope();
});

jQuery(window).smartresize(function(){
	runisotope();
});
</script>

</body>
</html>
