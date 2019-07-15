        
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
                                <a href="index.html" title="Sweetly" ><img src="{{ asset('public/assets/user/images/Abimanyu Production New Logo Putih11.png')}}" alt="" /></a>
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



        <div id="outerbottom">
            <div class="container">
                <div class="row">
                    <div id="bottom-sidebar" class="twelve columns">
                        <div class="widget-homebottom">
                        <h3 class="widget-title">Paket</h3>
                        <div class="ts-features ">
                            <div class="row">
                            
                               @foreach($paket as $p)
                                <div class="columns fitem one_sixth">
                                    <div class="item-container">
                                        <a href="#">
                                            <div class="feature-img">
                                                <div class="img-container">
                                                    <img width="45" height="45" src="{{asset('public/images/'.$p->gambar)}}"  alt="icon2" />
                                                </div>
                                            </div>
                                        </a>
                                        <div class="recent-text-wrap">
                                            <h3 class="feature-title">{{$p->nama_paket}}<br/></h3>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>

                                </div>
                               
                                @endforeach
            </div>
        <div class="clear"></div>

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