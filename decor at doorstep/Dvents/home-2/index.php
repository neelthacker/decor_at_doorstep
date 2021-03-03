<?php

$con = mysqli_connect("localhost", "root", "", "decor_at_doorstep");  

    if(isset($_POST['submit']))
    {
        
            $UserName = $_POST['name'];
            $UserEmail = $_POST['email'];
            $UserNumber = $_POST['number'];
            $UserDescription = $_POST['description'];

            $query = " INSERT INTO user_contact (User_Name, User_Email,User_Number,User_Description) VALUES('$UserName','$UserEmail','$UserNumber','$UserDescription')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                echo '<script>alert("Some entery is missing")</script>'; 
            }
            
    }
   

?>

<!DOCTYPE html>
<html lang="en-US" >



<!-- Mirrored from demo.ovathemes.com/dvents/home-2/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Apr 2020 07:51:53 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="../xmlrpc.php">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <title> &#8211; Decor at Doresteps</title>
<link rel='dns-prefetch' href='http://demo.ovathemes.com/' />
<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
<link rel='dns-prefetch' href='http://s.w.org/' />
<link rel="alternate" type="application/rss+xml" title="Decor at Doorstep &raquo; Feed" href="../feed/index.php" />
<link rel="alternate" type="application/rss+xml" title="Decor at Doorstep &raquo; Comments Feed" href="../comments/feed/index.php" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/demo.ovathemes.com\/dvents\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.3.2"}};
			!function(e,a,t){var r,n,o,i,p=a.createElement("canvas"),s=p.getContext&&p.getContext("2d");function c(e,t){var a=String.fromCharCode;s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,e),0,0);var r=p.toDataURL();return s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,t),0,0),r===p.toDataURL()}function l(e){if(!s||!s.fillText)return!1;switch(s.textBaseline="top",s.font="600 32px Arial",e){case"flag":return!c([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])&&(!c([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!c([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]));case"emoji":return!c([55357,56424,55356,57342,8205,55358,56605,8205,55357,56424,55356,57340],[55357,56424,55356,57342,8203,55358,56605,8203,55357,56424,55356,57340])}return!1}function d(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(i=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},o=0;o<i.length;o++)t.supports[i[o]]=l(i[o]),t.supports.everything=t.supports.everything&&t.supports[i[o]],"flag"!==i[o]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[i[o]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(r=t.source||{}).concatemoji?d(r.concatemoji):r.wpemoji&&r.twemoji&&(d(r.twemoji),d(r.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='wp-block-library-css'  href='../wp-includes/css/dist/block-library/style.min9dff.css?ver=5.3.2' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='../wp-content/plugins/contact-form-7/includes/css/stylesb62d.css?ver=5.1.6' type='text/css' media='all' />
<link rel='stylesheet' id='parent-style-css'  href='../wp-content/themes/ova-dvents/style9dff.css?ver=5.3.2' type='text/css' media='all' />
<link rel='stylesheet' id='ova-dvents-fonts-css'  href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%22%7CRaleway%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%7CPoppins%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900&amp;subset=latin%2Clatin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css'  href='../wp-content/themes/ova-dvents/assets/libs/bootstrap/bootstrap.css' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='../wp-content/themes/ova-dvents/assets/plugins/font-awesome-4.4.0/css/font-awesome.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='ova-dvents-master-css'  href='../wp-content/themes/ova-dvents/assets/css/master.css' type='text/css' media='all' />
<link rel='stylesheet' id='ova-dvents-default-css'  href='../wp-content/themes/ova-dvents/assets/css/default.css' type='text/css' media='all' />
<link rel='stylesheet' id='parent-stylesheet-css'  href='../wp-content/themes/ova-dvents/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='ova-dvents-style-css'  href='../wp-content/themes/ova-dvents-child/style.css' type='text/css' media='all' />
<style id='ova-dvents-style-inline-css' type='text/css'>

    body{
      font-family: Roboto, sans-serif !important;
    }
    
    h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6{
        font-family: Poppins;
    }
    .btn, 
    .b-isotope-filter > li > a
    {
        font-family: Poppins;
    }
    
	a,
	.text-primary,
	.text-primary_h:hover,
	.text-primary_b:before,
	.text-primary_a:after,
	.list > li > a:hover,
	.list-mark-1 li:before,
	.pager li > a:hover,
	.pager li > a:hover .icon,
	.pagination_primary > li:first-child > a:hover,
	.pagination_primary > li:first-child > a:hover .icon,
	.pagination_primary > li:last-child > a:hover,
	.pagination_primary > li:last-child > a:hover .icon,
	.search-close:hover,
	.breadcrumb > li > a:hover,
	.navbar .navbar-nav > li > a:hover,
	.b-blockquote-3:after,
	.b-contact-social-net .social-net .social-net__link:hover,
	.pagination > .active > a,
	.pagination > .active > span,
	.pagination > .active > a:hover,
	.pagination > .active > span:hover,
	.pagination > .active > a:focus,
	.pagination > .active > span:focus,
	.footer-list__link:hover,
	.list_icon_color-primary li:before {color: #fe3e01;}
	.dropdown-menu > .active > a{
		background-color: #fe3e01 !important;
	}

	.b-post-sm-2 .entry-title a:hover,
	.b-events-2 .b-events-calendar__wrap:hover,
	.b-post-sm-2 .entry-title:hover,
	.b-post-sm-2 .entry-title a:hover,
	.b-events__title a:hover,
	.b-events-2__title a:hover,
	.pagination .current,
	.pagination li a:hover,
	.pagination li span:hover,
	ul.yamm>li.active>a,
	.b-events__details .icon
	{
		color: #fe3e01 !important;
	}
	.bg-primary,
	.bg-primary_h:hover,
	.bg-primary_b:before,
	.bg-primary_a:after,
	.btn:after,
	.pagination_primary > .active > a,
	.pagination_primary > .active > span,
	.pagination_primary > .active > a,
	.pagination_primary > .active > span,
	.pagination_primary > li > a:hover,
	.pagination_primary > li > a:focus,
	.dropcap_primary:first-letter,
	.tooltip-1 .tooltip-inner,
	.btn-primary,
	.forms__label-check-1:after,
	.forms__label-radio-2:before,
	.panel-default > .panel-heading,
	.b-isotope-filter > li > a.current:after,
	.b-isotope-filter > li > a:hover:after,
	.owl-theme .owl-controls .owl-page.active span,
	.owl-theme .owl-controls.clickable .owl-page:hover span,
	.b-pricing.active .b-pricing-price,
	.b-team .social-net__item:hover,
	.bx-wrapper .bx-pager.bx-default-pager a:hover,
	.bx-wrapper .bx-pager.bx-default-pager a.active,
	.bx-wrapper .bx-pager.bx-default-pager a:focus {background-color: #fe3e01;}
	
	
	.border_prim,
	.border_prim_h:hover,
	.pagination > .active > a,
	.pagination > .active > span,
	.pagination a:hover,
	.pagination span:hover,
	.pagination a:focus,
	.pagination span:focus,
	.progress_border_primary,
	.forms__label-radio-2:before,
	.owl-theme_mod-a .owl-controls .owl-page.active span,
	.owl-theme_mod-a .owl-controls.clickable .owl-page:hover span {border-color: #fe3e01;}
	
	.border-t_prim,
	.border-t_prim_a:after,
	.border-t_prim_b:before,
	.border-t_prim_h:hover,
	.tooltip-1.top .tooltip-arrow,
	.tooltip-1.top-left .tooltip-arrow,
	.tooltip-1.top-right .tooltip-arrow {border-top-color: #fe3e01;}
	
	.border-r_prim,
	.border-r_prim_h:hover,
	.tooltip-1.right .tooltip-arrow {border-right-color: #fe3e01;}
	
	.border-b_prim,
	.border-b_prim_h:hover,
	.tooltip-1.bottom .tooltip-arrow,
	.tooltip-1.bottom-left .tooltip-arrow,
	.tooltip-1.bottom-right .tooltip-arrow,
	.table_primary > thead > tr > th,
	.collapse.in {border-bottom-color: #fe3e01;}
	
	.border-l_prim,
	.border-l_prim_h:hover,
	.tooltip-1.left .tooltip-arrow,
	.border-left_primary:before,
	.b-blockquote-1 {border-left-color: #fe3e01;}
	.b-taglines__inner:before{ background-color: #fe3e01;}
	
	.navbar .navbar-nav > li > a { font-family: Poppins; }
	a.comment-reply-link{ font-family: Poppins; }
	.pagination__title,
	.progress__title ,
	.progress-w-number .progress-bar__number,
	.b-advertisement__label,
	.b-blockquote-3 .b-blockquote__author,
	.b-contact__name,
	.b-events .b-events-calendar,
	.b-events-2 .b-events-calendar,
	.b-info,
	.b-isotope-filter > li > a,
	.b-isotope-grid__title,
	.b-isotope__info,
	.b-post-1 .entry-footer .social-net__title,
	.b-post-1 .entry-footer .post-tags__link,
	.comments-list .comment-author,
	.comments-list .comment-btn,
	.about-author__title,
	.b-progress-list__item,
	.b-request-estimate__title,
	.b-taglines__title,
	.b-title-page__title,
	.footer .footer-section__subtitle,
	.widget-list .widget-list__link,
	.list-tags__link { font-family: Poppins; }

  
</style>
<link rel='stylesheet' id='js_composer_front-css'  href='../wp-content/plugins/js_composer/assets/css/js_composer.min9b2d.css?ver=6.1' type='text/css' media='all' />
<script type='text/javascript' src='../wp-includes/js/jquery/jquery4a5f.js?ver=1.12.4-wp'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>
<link rel='https://api.w.org/' href='../wp-json/index.php' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.3.2" />
<link rel="canonical" href="index.php" />
<link rel='shortlink' href='../index4978.php?p=244' />
<link rel="alternate" type="application/json+oembed" href="../wp-json/oembed/1.0/embed6ab0.json?url=http%3A%2F%2Fdemo.ovathemes.com%2Fdvents%2Fhome-2%2F" />
<link rel="alternate" type="text/xml+oembed" href="../wp-json/oembed/1.0/embed6ecf?url=http%3A%2F%2Fdemo.ovathemes.com%2Fdvents%2Fhome-2%2F&amp;format=xml" />
<meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."/>
<link rel="icon" href="../wp-content/uploads/2017/07/cropped-favicon-32x32.jpg" sizes="32x32" />
<link rel="icon" href="../wp-content/uploads/2017/07/cropped-favicon-192x192.jpg" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="../wp-content/uploads/2017/07/cropped-favicon-180x180.jpg" />
<meta name="msapplication-TileImage" content="http://demo.ovathemes.com/dvents/wp-content/uploads/2017/07/cropped-favicon-270x270.jpg" />
		<style type="text/css" id="wp-custom-css">
			.l-theme{max-width: 100%;}		</style>
		<style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1497177312395{background-image: url(../wp-content/uploads/2017/06/2-20985.jpg?id=146) !important;}.vc_custom_1497238475111{background-image: url(http://demo.ovathemes.com/dvents/wp-content/uploads/2017/06/2-2.jpg?id=146) !important;}.vc_custom_1499328454423{padding-bottom: 0px !important;}.vc_custom_1496978006309{padding-top: 0px !important;}.vc_custom_1498722038811{padding-bottom: 50px !important;}.vc_custom_1497253471038{background-image: url(http://demo.ovathemes.com/dvents/wp-content/uploads/2017/06/2-2.jpg?id=146) !important;}.vc_custom_1498642768805{padding-top: 0px !important;}.vc_custom_1497238518702{padding-top: 0px !important;}.vc_custom_1497249505789{padding-top: 0px !important;}</style><noscript><style> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript></head>

<body class="page-template-default page page-id-244 wpb-js-composer js-comp-ver-6.1 vc_responsive" >

    <div class="ovatheme_container_wide l-theme animated-css">
        <div class="wrapper">
    	
        <div class="header-search open-search">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                <div class="navbar-search">
                    <form class="search-global" action="http://demo.ovathemes.com/dvents/"  >
                        <input type="text" placeholder="Type to search" autocomplete="off" name="s" value="" class="search-global__input"/>
                        <button class="search-global__btn"><i class="icon stroke icon-Search"></i></button>
                        <div class="search-global__note">Begin typing your search above and press return to search.</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <button type="button" class="search-close close"><i class="fa fa-times"></i></button>
</div>


<div data-off-canvas="mobile-slidebar left overlay">
    
    <ul id="menu-mobile-menu" class="nav navbar-nav">
	<li class=" active"><a title="Home" href="index.php">Home</a></li>
<li><a title="Services" href="../services/index.php">Services</a></li>
<li><a title="Events" href="../events/index.php">Events</a></li>
<li><a title="About" href="../about/index.php">About</a></li>
	<li><a title="Blog" href="../blog/index.php">Gallery</a></li>

<li><a title="Contact" href="../contact/index.php">Contact</a></li>

</ul></div>




<div class="wrap-fixed-menu" id="fixedMenu">
    <nav class="fullscreen-center-menu">
        <div class="menu-main-menu-container">
            <ul id="menu-popup-menu" class="menu"><li><a href="../index.php">Home</a></li>
<li><a href="../services/index.php">Services</a></li>
<li><a href="../events/index.php">Events</a></li>
<li><a href="../about/index.php">About</a></li>
<li><a href="../blog/index.php">Blog</a></li>
<li><a href="../contact/index.php">Get in Touch</a></li>
</ul>
        </div>
    </nav>
    <button type="button" class="fullmenu-close"><i class="fa fa-times"></i></button>
</div>
<header class="header header-boxed-width header-background-trans header-logo-black header-topbarbox-1-left header-topbarbox-2-right header-navibox-1-left header-navibox-2-right header-navibox-3-right header-navibox-4-right">
    <div class="top-bar">
        <div class="container container-boxed-width">
            <div class="container">
                <div class="header-topbarbox-1">

                    <ul class="top-bar-contact">
	                    		                    <li class="top-bar-contact__item"><i class="icon icon-call-in"></i> (+91) 70438 15495</li><li class="top-bar-contact__item"><i class="icon icon-envelope-open"></i> h.rathod5005@gmail.com</li><li class="top-bar-contact__item"><i class="icon icon-clock"></i> 24*7</li>	                                        </ul>
                </div>
                <div class="header-topbarbox-2">
                    <ul class="social-net list-inline">
	                    		                    <li class="social-net__item">
                     <a class="social-net__link text-primary_h" href="#" ><i class="icon fa fa-twitter"></i></a>
                 </li><li class="social-net__item">
                     <a class="social-net__link text-primary_h" href="#" ><i class="icon fa fa-facebook"></i></a>
                 </li><li class="social-net__item">
                     <a class="social-net__link text-primary_h" href="#" ><i class="icon fa fa-google-plus"></i></a>
                 </li><li class="social-net__item">
                     <a class="social-net__link text-primary_h" href="#" ><i class="icon fa fa-linkedin"></i></a>
                 </li>	                                        </ul>
                    <!-- end social-list-->
                </div>
            </div>
        </div>
    </div>
    <div class="container container-boxed-width">
        <div class="row" >
        <nav id="nav" class="navbar">
            <div class="container">
                <div class="header-navibox-1">
                    <!-- Mobile Trigger Start-->
                    <button class="menu-mobile-button visible-xs-block js-toggle-mobile-slidebar toggle-menu-button">
                        <i class="toggle-menu-button-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </i>
                    </button>
                    <!-- Mobile Trigger End-->
                   
                </div>
                <div class="header-navibox-3">
                    <ul class="nav navbar-nav hidden-xs clearfix vcenter">
                        <li>
                            <button class="js-toggle-screen toggle-menu-button">
                                <i class="toggle-menu-button-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </i>
                            </button>
                        </li>
                        <li><a href="#" class="btn_header_search"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="header-navibox-2">

	                <ul id="menu-primary-menu" class="yamm main-menu nav navbar-nav"><li><a title="HOME" href="index.php">HOME</a></li>
<li><a title="SERVICES" href="../services/index.php">SERVICES</a></li>
<li><a title="Events" href="../events/index.php">Events</a></li>
<li><a title="ABOUT" href="../about/index.php">ABOUT</a></li>
	<li><a title="Blog" href="../blog/index.php">Gallery</a></li>
<li><a title="CONTACT" href="../contact/index.php">CONTACT</a></li>

</ul>

                </div>
            </div>
        </nav>
        </div>
    </div>
</header>




        		<section class="page-section ">
		    <div class="container">
		        <div class="">
		            <div class=" ovatheme_nosidebar" >
	
<div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding vc_row-o-content-middle vc_row-flex"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div 
	id="main-slider" 
	data-slider-width="100%" 
	data-slider-height="860" 
	data-slider-arrows="true" 
	data-slider-buttons="false" 
	data-slider-autoplay="true" 
	data-slideAnimationDuration="700" 
	class="main-slider slider-pro  main-slider_mod-a ">
	<div class="sp-slides"><div class="sp-slide ">
				<img src="../wp-content/uploads/2017/06/bg-2.jpg" alt="We are the Event Management Specialists" class="sp-image"/>
	            <div class="container">
	              <div class="row">
	                <div class="col-sm-10 ">
	                 
	<div 
	data-width="100%" 
	data-show-transition="left" 
	data-hide-transition="left" 
	data-show-duration="2000" 
	data-show-delay="1200" 
	data-hide-delay="400" 
	class="main-slider__info sp-layer">We are the Event Management Specialists</div>
	<h2 data-width="100%" 
	data-show-transition="left" 
	data-hide-transition="left" 
	data-show-duration="800" 
	data-show-delay="400" 
	data-hide-delay="400" 
	class="main-slider__title sp-layer">WE PERSONALIZE YOUR WEDDING EVENTS</h2>
	                  <div data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="1200" data-show-delay="600" data-hide-delay="400" class="sp-layer">
	                    <div class="main-slider__decor bg-primary"></div>
	                  </div>
	                  <div data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="1200" data-show-delay="2000" data-hide-delay="400" class="sp-layer"><a href="http://demo.ovathemes.com/service" class="main-slider__btn btn btn-default">our features</a></div>
	                </div>
	              </div>
	            </div>
             </div><div class="sp-slide ">
				<img src="../wp-content/uploads/2017/06/bg-1.jpg" alt="Birthday Event Management Specialists" class="sp-image"/>
	            <div class="container">
	              <div class="row">
	                <div class="col-sm-10 ">
	                  
	    <div data-width="100%" 
	    data-show-transition="right" 
	    data-hide-transition="left" 
	    data-show-duration="1200" 
	    data-show-delay="2000" 
	    data-hide-delay="400" 
	    data-vertical="190px" 
	    data-horizontal="0" 
	    class="main-slider__item-1 sp-layer"><img src="../wp-content/uploads/2017/06/item-2-1.png" alt="Item"/></div> 
	    <div data-width="100%" 
	    data-show-transition="left" 
	    data-hide-transition="left" 
	    data-show-duration="1200" 
	    data-show-delay="2000" 
	    data-hide-delay="400" 
	    data-vertical="250px" 
	    data-horizontal="100%" 
	    class="main-slider__item-2 sp-layer"><img src="../wp-content/uploads/2017/06/item-1-1.png" alt="Item"/></div> 
	    <div data-width="100%" 
	    data-show-transition="right" 
	    data-hide-transition="left" 
	    data-show-duration="1200" 
	    data-show-delay="2000" 
	    data-hide-delay="400" 
	    data-vertical="630px" 
	    data-horizontal="0" 
	    class="main-slider__item-3 sp-layer"><img src="../wp-content/uploads/2017/06/item-3-1.png" alt="Item"/></div>
	<div 
	data-width="100%" 
	data-show-transition="left" 
	data-hide-transition="left" 
	data-show-duration="2000" 
	data-show-delay="1200" 
	data-hide-delay="400" 
	class="main-slider__info sp-layer">Birthday Event Management Specialists</div>
	<h2 data-width="100%" 
	data-show-transition="left" 
	data-hide-transition="left" 
	data-show-duration="800" 
	data-show-delay="400" 
	data-hide-delay="400" 
	class="main-slider__title sp-layer">CELEBRATE YOUR EVENTS THAT LASTS LONGER</h2>
	                  <div data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="1200" data-show-delay="600" data-hide-delay="400" class="sp-layer">
	                    <div class="main-slider__decor bg-primary"></div>
	                  </div>
	                  <div data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="1200" data-show-delay="2000" data-hide-delay="400" class="sp-layer"><a href="http://demo.ovathemes.com/contact" class="main-slider__btn btn btn-primary">ask for a quote</a><a href="http://demo.ovathemes.com/about" class="main-slider__btn btn btn-default">read more</a></div>
	                </div>
	              </div>
	            </div>
             </div></div>
	</div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div class="vc_row wpb_row vc_row-fluid request-estimate-container vc_row-o-content-middle vc_row-flex"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"> 
 		<div class="col-xs-12">
            <div class="section-area">
              <div class="b-request-estimate">
                <div class="b-request-estimate__info">Wedding Functions to Birthday Parties and Corporate Events to Musical Functions, We offer full Events Management Services!</div><div class="b-request-estimate__title bg-primary"><span class="ui-decor-2"></span>request your event estimate</div>
              </div>
            </div>
          </div></div></div></div></div><div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid request-estimate-container vc_row-o-content-middle vc_row-flex"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
				<section class="section-type-1 ">
	                <div class="label-vertical">
		                <div class="container">
			                <div class="row">
			                    <div class="col-md-4"><img src="../wp-content/uploads/2017/06/1-6.jpg" alt="Making your events smarter &amp; impactful by personalised event management." class="img-w-radius img-responsive" ></div>
				                <div class="col-md-8">
					                <div class="section-type-1__inner">
						                  <div class="ui-decor-1"><img src="../wp-content/uploads/2017/06/ui-decor-1.png" alt="Making your events smarter &amp; impactful by personalised event management."></div>
						                  <h2 class="ui-title-block">Welcome to<span class="text-primary"> Decor at Doorstep</span></h2>
						                  <div class="ui-subtitle-block">Making your events smarter &amp; impactful by personalised event management.</div>
					                    	<p>Consectetur elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqul enim ad minim veniam quis rud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidata non proident sunt in qui officia deserunt mol lit anim id est laborum tempore.</p>
<p>Laboris volputate quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis autea dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					                     
					                  </div>
					            </div>    
			                </div>
		                </div>
	                </div>
                </section>
                
				
	</div></div></div></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid b-services area-bg area-bg_dark area-bg_op_90 parallax area-bg-table-cell vc_custom_1497177312395 vc_row-has-fill"><div class="area-bg__inner wpb_column vc_column_container vc_col-sm-12 vc_col-lg-5 vc_col-md-5"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="ui-decor-1"><img src="../wp-content/uploads/2017/06/ui-decor-1.png" alt="DecorAtStepsServices" ></div><h2 class="ui-title-block"><span class="text-primary">Decor at Doorstep</span> Services</h2><div class="ui-subtitle-block">We make your events smart &amp; impactful by personalised event management services.</div>
	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ex ea consequat duis aute irure dolor in reprehenderit in voluptate labore et dolore.</p>

		</div>
	</div>
</div></div></div><div class="area-bg__inner wpb_column vc_column_container vc_col-sm-12 vc_col-lg-7 vc_col-md-7"><div class="vc_column-inner"><div class="wpb_wrapper"><div data-slides = 3 data-button = "true" data-autoplay = "true" data-time-next = "500" class="bxslider  "  ><section class="b-advantages-2 b-advantages-2_light"><i class="b-advantages-2__icon flaticon-people"></i>
                <div class="b-advantages-2__inner">
                  <h3 class="b-advantages-2__title ui-title-inner bg-primary_b">Wedding Events</h3>
                  <div class="b-advantages-2__info">Sit amet consectetur elit sed lusm tempor incidant temdore ut labore dolore lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</div>
                </div>
             </section><section class="b-advantages-2 b-advantages-2_light"><i class="b-advantages-2__icon flaticon-food"></i>
                <div class="b-advantages-2__inner">
                  <h3 class="b-advantages-2__title ui-title-inner bg-primary_b">Birthday Parties</h3>
                  <div class="b-advantages-2__info">Sit amet consectetur elit sed lusm tempor incidant temdore ut labore dolore lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</div>
                </div>
             </section><section class="b-advantages-2 b-advantages-2_light"><i class="b-advantages-2__icon flaticon-karaoke"></i>
                <div class="b-advantages-2__inner">
                  <h3 class="b-advantages-2__title ui-title-inner bg-primary_b">Corporate Seminars</h3>
                  <div class="b-advantages-2__info">Sit amet consectetur elit sed lusm tempor incidant temdore ut labore dolore lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</div>
                </div>
             </section><section class="b-advantages-2 b-advantages-2_light"><i class="b-advantages-2__icon flaticon-people"></i>
                <div class="b-advantages-2__inner">
                  <h3 class="b-advantages-2__title ui-title-inner bg-primary_b">Wedding Events</h3>
                  <div class="b-advantages-2__info">Sit amet consectetur elit sed lusm tempor incidant temdore ut labore dolore lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</div>
                </div>
             </section><section class="b-advantages-2 b-advantages-2_light"><i class="b-advantages-2__icon flaticon-people"></i>
                <div class="b-advantages-2__inner">
                  <h3 class="b-advantages-2__title ui-title-inner bg-primary_b">Wedding Events</h3>
                  <div class="b-advantages-2__info">Sit amet consectetur elit sed lusm tempor incidant temdore ut labore dolore lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</div>
                </div>
             </section><section class="b-advantages-2 b-advantages-2_light"><i class="b-advantages-2__icon flaticon-food"></i>
                <div class="b-advantages-2__inner">
                  <h3 class="b-advantages-2__title ui-title-inner bg-primary_b">Birthday Parties</h3>
                  <div class="b-advantages-2__info">Sit amet consectetur elit sed lusm tempor incidant temdore ut labore dolore lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</div>
                </div>
             </section></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid b-info-section request-estimate-container"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-7 vc_col-md-6"><div class="vc_column-inner vc_custom_1498642768805"><div class="wpb_wrapper">
          <div class="row">
            <div class="col-sm-6"><img src="../wp-content/uploads/2017/06/1.png" alt="Info image 1" class="b-info-section__img-1 img-mask"/></div>
            <div class="col-sm-6"><img src="../wp-content/uploads/2017/06/2-4.jpg" alt="Info image 2" class="b-info-section__img-2 img-mask"/></div>
          </div>
	</div></div></div><div class="b-info-section__inner wpb_column vc_column_container vc_col-sm-12 vc_col-lg-5 vc_col-md-6"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="ui-decor-1"><img src="../wp-content/uploads/2017/06/ui-decor-1.png" alt="Dvents- Events That Lasts" ></div><h2 class="ui-title-block"><span class="text-primary">Decor at Doorstep</span> - Events That Lasts</h2><div class="ui-subtitle-block">You should choose Decor at Doorstep Services because we bring your guests closer to you &amp; helps you to create a relationship that lasts long!</div>
	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			<p>Consectetur elit sed do eiusmod tempor incididunt ut labore et dolore magna aliquled tempor enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea volputate consequat aute irure dolor reprehenderit.</p>

		</div>
	</div>

	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			<ul class="list list-mark-5 list_bold list_icon_color-primary">
<li>Excepteur sint occaecat cupidata non proident sunt</li>
<li>Qui officia deserunt anim labor tempore laboris volputate</li>
<li>Tempor incididunt uet labore dolore magna aliqua</li>
<li>Enim lanim veniam quis nostrud exercitation ullamco</li>
</ul>

		</div>
	</div>
</div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid b-taglines area-bg area-bg_dark parallax area-bg-table-cell vc_custom_1497238475111 vc_row-has-fill vc_row-no-padding vc_row-o-content-middle vc_row-flex"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner vc_custom_1497238518702"><div class="wpb_wrapper">
		 <div class="area-bg__inner">
	          <div class="container">
	            <div class="row">
					<div class="col-sm-10 col-sm-offset-1">
			            <div class="b-taglines__inner">
			              <h2 class="b-taglines__title">With a full range of Event Planning Services, our Clients have Successful &amp; Prosperous Events!</h2>
			              <div class="b-taglines__text">We make your events smart &amp; impactful by personalised event management services.</div>
			            </div>
		            </div>
	            </div>
	          </div>
          </div>
	</div></div></div></div><div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6"><div class="vc_column-inner"><div class="wpb_wrapper">
			<section data-stellar-background-ratio="0.4" class="b-info section-texture section-radius stellar section-texture_green section-radius " style=" background-color: #01cb93;background-image: url(../wp-content/uploads/2017/06/texture-1.png);">
              <h2 class="b-info__title">Get in Touch With Us!</h2>
              <div class="b-info__text">Ask questions, schedule a meeting or request a proposal. Let’s Get Started</div>
              <a href="#" class="b-info__btn btn btn-default btn-sm btn-effect">contact us now</a>
            </section>
	</div></div></div><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6"><div class="vc_column-inner"><div class="wpb_wrapper">
			<section data-stellar-background-ratio="0.4" class="b-info section-texture section-radius stellar section-texture_green section-radius " style=" background-color: #0170cb;background-image: url(../wp-content/uploads/2017/06/texture-1.png);">
              <h2 class="b-info__title">Do You want To Work With Us!</h2>
              <div class="b-info__text">If you are talented enough than you can join our team and have a bright future</div>
              <a href="#" class="b-info__btn btn btn-default btn-sm btn-effect">join our team</a>
            </section>
	</div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid section-default"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="area-bg__inner ">
         </div></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div class="vc_row-full-width vc_clearfix"></div><div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid block-table block-table-md vc_row-no-padding vc_row-o-equal-height vc_row-flex"><div class="block-table__cell row-eq-height wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
		<div class="block-table block-table-md ">
	        <div class="block-table__cell col-md-6">
	          <section data-stellar-background-ratio="0.4" class="section-form-contact section-form-contact_color_white  bg-primary stellar">
	            <div class="ui-decor-1"><img src="../wp-content/uploads/2017/06/ui-decor-1.png" alt="Dvents Send us a message for your personalized event booking."></div>
	            <h2 class="ui-title-block"><span>Decor at Doorstep</span> Contact Form</h2>
	            <div class="ui-subtitle-block">Send us a message for your personalized event booking.</div>
	            <div id="success"></div>
	            <div role="form" class="wpcf7" id="wpcf7-f170-p244-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<form enctype="multipart/form-data" method="post" >

<div class="b-form-contacts ui-form">
<div class="row">
<div class="col-md-5">
               <span><input type="text" name="name"  size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="user-name" aria-required="true" aria-invalid="false" placeholder="Full Name" /></span>
               <span><input type="text" name="number" size="40" class="wpcf7-form-control wpcf7-text form-control" id="user-phone" aria-invalid="false" placeholder="Phone" /></span>
               <span><input type="email" name="email" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" id="user-email" aria-required="true" aria-invalid="false" placeholder="Your Email ID" /></span>
               <span><textarea name="description" cols="40" rows="3" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control" id="user-message" aria-required="true" aria-invalid="false" placeholder="Message ..."></textarea></span>
                 <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info" />
           </div>

</div>

<div class="wpcf7-response-output wpcf7-display-none"></div></form></div>
	          </section>
	        </div>
	        <div class="block-table__cell col-md-6"><img src="../wp-content/uploads/2017/06/2-6.jpg" alt="Dvents Send us a message for your personalized event booking."></div>
      </div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div class="vc_row wpb_row vc_row-fluid section-default"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="ui-decor-1"><img src="../wp-content/uploads/2017/06/ui-decor-1.png" alt="decor" class="center-block"></div><div class="text-center">
					<h2 class="ui-title-block"><span class="text-primary">Latest News</span> Decor at Doorstep</h2>
                	<div class="ui-subtitle-block">We make your events smart &amp; impactful by personalised event management services.</div>
              	</div>
	<div 
		style = "padding-bottom:60px"
		data-min480="1" 
		data-min768="2" 
		data-min992="3" 
		data-min1200="3" 
		data-pagination="true" 
		data-navigation="false" 
		data-auto-play="7000" 
		data-stop-on-hover="true" 
		class="owl-carousel owl-theme enable-owl-carousel "><table><section class="b-post-sm b-post-sm-2 clearfix">
                  <div class="entry-media">
                  	
                  		<tr>
                  			
                  	<?php  
                  	$connect = mysqli_connect("localhost", "root", "", "decor_at_doorstep");
                $query = "SELECT * FROM news ORDER BY id DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))
                	{
                		$Picture1=$row['name'];
                		?>
                                   <a><?php echo ' <img src="data:image/jpeg;base64,'.base64_encode($Picture1 ).'" height="400" width="200" class="img-thumnail" />  
                                   ';?> </a>
                <?php	 } ?> </tr>

            

                  	
                  </div>
                                  </section>
                              </table></div></div></div></div></div>
				
						</div>


	

	</div></div></section>

	
				<footer class="footer">
	<div class="footer__main">
		<div class="container">
						<div class="row">
				<div class="col-xs-12">
					<div class="text-center"><a href="../home-2/index.php" class="footer__logo"><img src="../wp-content/uploads/2017/06/logo.png" alt="Decor at Doorstep Events Management Companies and Agencies" class="img-responsive"/></a></div>
				</div>
			</div>
            			<div class="row">
				<div class="col-md-8 col-md-offset-2">
														<div class="textwidget"><script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-dvents.min.js"></script><script>(function() {
	window.mc4wp = window.mc4wp || {
		listeners: [],
		forms: {
			on: function(evt, cb) {
				window.mc4wp.listeners.push(
					{
						event   : evt,
						callback: cb
					}
				);
			}
		}
	}
})();
</script><!-- Mailchimp for WordPress v4.7.5 - https://wordpress.org/plugins/mailchimp-for-wp/ --><form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-506" method="post" data-id="506" data-name="subcriber" ><div class="mc4wp-form-fields"><div class="footer-form">  
   <div class="row">
      <div class="col-sm-5">
        <h3 class="footer-form__title">Get the FREE Newsletter</h3>
        <div class="footer-form__info">Sign up to get the updates about new events</div>
      </div>
      <div class="col-sm-7">
        <div class="form-group">
          <input type="email" placeholder="Your email address ..." class="footer-form__input"/>
          <button type = "submit" class="footer-form__btn form-control-feedback"><i class="icon icon-envelope-open text-primary_h"></i></button>
        </div>
      </div>
    </div>
</div>
</div><label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" /></label><input type="hidden" name="_mc4wp_timestamp" value="1586936953" /><input type="hidden" name="_mc4wp_form_id" value="506" /><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" /><div class="mc4wp-response"></div></form><!-- / Mailchimp for WordPress Plugin --></div>
											</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="footer-section">
													<h3 class="footer-section__title ui-title-inner"><i class="ui-decor-2 bg-primary"></i>About Decor at Doorstep</h3>
		    <div class="footer-section__subtitle">The Events Specialists!</div>
            <div class="footer__info">
                <p>Aorem ipsum dolor sit amet elit sed lum tempor incididunt ut labore el dolore alg minim veniam quis nostrud lorem psum dolor sit amet sed incididunt.                                                </p>
            </div>
		<a href="http://demo.ovathemes.com/about" class="btn btn-default btn-xs"><i class="icon"></i> Read More</a>											</div>
				</div>
				<div class="col-md-3">
					<section class="footer-section">
													<h3 class="footer-section__title ui-title-inner"><i class="ui-decor-2 bg-primary"></i>Keep In Touch</h3>			<div class="textwidget"></div>
		<div class="footer__contact"><i class="icon icon-map"></i> Sector No 5, Oslo Road, Near Bhavnath Temple, Plot No 512, Gandhidham(kutch) - 370201</div><div class="footer__contact"><i class="icon icon-call-in"></i> (+91) 92651 98408
(+91) 70438 15495
(+91) 99781 23237</div><div class="footer__contact"><i class="icon icon-envelope-open"></i> h.rathod5005@gmail.com</div><div class="footer__contact"><i class="icon icon-clock"></i> 24*7</div>											</section>
				</div>
				<div class="col-md-3">
					<section class="footer-section">
													<h3 class="footer-section__title ui-title-inner"><i class="ui-decor-2 bg-primary"></i>Events Gallery</h3><ul class="footer-gallery list-unstyled js-zoom-gallery clearfix"><li class="footer-gallery__item">
                    <a href="../wp-content/uploads/2017/06/7-1.jpg" class="footer-gallery__link js-zoom-gallery__item">
                    <img src="../wp-content/uploads/2017/06/7-1.jpg" alt="wedding events" class="img-responsive"/>
                    </a>
                 </li><li class="footer-gallery__item">
                    <a href="../wp-content/uploads/2017/06/8.jpg" class="footer-gallery__link js-zoom-gallery__item">
                    <img src="../wp-content/uploads/2017/06/8.jpg" alt="social meetings" class="img-responsive"/>
                    </a>
                 </li><li class="footer-gallery__item">
                    <a href="../wp-content/uploads/2017/06/6-1.jpg" class="footer-gallery__link js-zoom-gallery__item">
                    <img src="../wp-content/uploads/2017/06/6-1.jpg" alt="birthday parties" class="img-responsive"/>
                    </a>
                 </li><li class="footer-gallery__item">
                    <a href="../wp-content/uploads/2017/06/5-1.jpg" class="footer-gallery__link js-zoom-gallery__item">
                    <img src="../wp-content/uploads/2017/06/5-1.jpg" alt="proposal events" class="img-responsive"/>
                    </a>
                 </li><li class="footer-gallery__item">
                    <a href="../wp-content/uploads/2017/06/1-3.jpg" class="footer-gallery__link js-zoom-gallery__item">
                    <img src="../wp-content/uploads/2017/06/1-3.jpg" alt="Kids at Party" class="img-responsive"/>
                    </a>
                 </li><li class="footer-gallery__item">
                    <a href="../wp-content/uploads/2017/06/2-1.jpg" class="footer-gallery__link js-zoom-gallery__item">
                    <img src="../wp-content/uploads/2017/06/2-1.jpg" alt="Kids at Party" class="img-responsive"/>
                    </a>
                 </li></ul>											</section>
				</div>
				<div class="col-md-3">
					<section class="footer-section">
													<h3 class="footer-section__title ui-title-inner"><i class="ui-decor-2 bg-primary"></i>Quick Links</h3>			<div class="textwidget"><ul class="footer-list list list-mark-4 list-unstyled ">
	            
<li class="footer-list__item"><a href="#" class="footer-list__link">Our Services</a></li><li class="footer-list__item"><a href="#" class="footer-list__link">Our Team</a></li><li class="footer-list__item"><a href="#" class="footer-list__link">About Decor at Doorstep</a></li>
<li class="footer-list__item"><a href="#" class="footer-list__link">Clients List</a></li><li class="footer-list__item"><a href="#" class="footer-list__link">News</a></li>
<li class="footer-list__item"><a href="#" class="footer-list__link">Brochure</a></li>
<li class="footer-list__item"><a href="#" class="footer-list__link">Get In Touch</a></li>

	        </ul></div>
													</section>
				</div>
			</div>
		</div>
	</div>
	<div class="footer__bottom">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
														<div class="textwidget"><div class="copyright pull-left">© 2017<strong> Decor at Doorstep</strong> &#8211; The Events Specialists All Rights Reserved.<a class="copyright__link" href="../terms-of-use/index.php"> Terms of Use</a><a class="copyright__link" href="../privacy-policy/index.php">Privacy Policy</a></div>
</div>
												<ul class="social-net list-inline pull-right">
													<li class="social-net__item"><a href="http://abc.com/" class="social-net__link text-primary_h"><i class="icon fa fa-youtube"></i></a></li><li class="social-net__item"><a href="#" class="social-net__link text-primary_h"><i class="icon fa fa-twitter"></i></a></li><li class="social-net__item"><a href="#" class="social-net__link text-primary_h"><i class="icon fa fa-facebook"></i></a></li><li class="social-net__item"><a href="#" class="social-net__link text-primary_h"><i class="icon fa fa-google-plus"></i></a></li><li class="social-net__item"><a href="#" class="social-net__link text-primary_h"><i class="icon fa fa-instagram"></i></a></li>											</ul>
				</div>
			</div>
		</div>
	</div>
</footer>			</div> <!-- /wrapper -->
		</div><!-- /container_boxed -->
		<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-dvents.min.js"></script><script>(function() {function maybePrefixUrlField() {
	if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
		this.value = "http://" + this.value;
	}
}

var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
if (urlFields) {
	for (var j=0; j < urlFields.length; j++) {
		urlFields[j].addEventListener('blur', maybePrefixUrlField);
	}
}
})();</script><script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"http:\/\/demo.ovathemes.com\/dvents\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/contact-form-7/includes/js/scriptsb62d.js?ver=5.1.6'></script>
<script type='text/javascript' src='../wp-content/themes/ova-dvents/assets/libs/jquery-migrate-1.2.1.js'></script>
<script type='text/javascript' src='../wp-content/themes/ova-dvents/assets/libs/bootstrap/bootstrap.js'></script>
<script type='text/javascript' src='../wp-content/themes/ova-dvents/assets/plugins/bootstrap-select/js/bootstrap-select.min.js'></script>
<script type='text/javascript' src='../wp-content/themes/ova-dvents/assets/plugins/owl-carousel/owl.carousel.min.js'></script>
<script type='text/javascript' src='../wp-content/themes/ova-dvents/assets/plugins/bxslider/vendor/jquery.easing.1.3.js'></script>
<script type='text/javascript' src='../wp-content/themes/ova-dvents/assets/plugins/bxslider/vendor/jquery.fitvids.js'></script>
<script type='text/javascript' src='../wp-content/themes/ova-dvents/assets/plugins/bxslider/jquery.bxslider.min.js'></script>
<script type='text/javascript' src='../wp-content/themes/ova-dvents/assets/plugins/magnific-popup/jquery.magnific-popup.min.js'></script>
<script type='text/javascript' src='../wp-content/themes/ova-dvents/assets/plugins/headers/slidebar.js'></script>
<script type='text/javascript' src='../wp-content/themes/ova-dvents/assets/plugins/headers/header.js'></script>
<script type='text/javascript' src='../wp-content/themes/ova-dvents/assets/plugins/jqBootstrapValidation.js'></script>
<script type='text/javascript' src='../wp-content/themes/ova-dvents/assets/plugins/stellar/jquery.stellar.min.js'></script>
<script type='text/javascript' src='../wp-content/themes/ova-dvents/assets/plugins/isotope/isotope.pkgd.min.js'></script>
<script type='text/javascript' src='../wp-content/themes/ova-dvents/assets/plugins/isotope/imagesLoaded.js'></script>
<script type='text/javascript' src='../wp-content/themes/ova-dvents/assets/plugins/rendro-easy-pie-chart/jquery.easypiechart.min.js'></script>
<script type='text/javascript' src='../wp-content/themes/ova-dvents/assets/plugins/rendro-easy-pie-chart/waypoints.min.js'></script>
<script type='text/javascript' src='../wp-content/themes/ova-dvents/assets/plugins/scrollreveal/scrollreveal.min.js'></script>
<script type='text/javascript' src='../wp-content/themes/ova-dvents/assets/plugins/slider-pro/jquery.sliderPro.min.js'></script>
<script type='text/javascript' src='../wp-content/themes/ova-dvents/assets/js/custom.js'></script>
<script type='text/javascript' src='../wp-includes/js/wp-embed.min9dff.js?ver=5.3.2'></script>
<script type='text/javascript' src='../wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min9b2d.js?ver=6.1'></script>
<script type='text/javascript' src='../wp-content/plugins/mailchimp-for-wp/assets/js/forms.min66f2.js?ver=4.7.5'></script>
	</body><!-- /body -->

<!-- Mirrored from demo.ovathemes.com/vs/home-2/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Apr 2020 07:56:26 GMT -->
</html>



