<?php

$con = mysqli_connect("localhost", "root", "", "decor_at_doorstep");  

    if(isset($_POST['submit']))
    {
        
            $UserName = $_POST['username'];
            $UserEmail = $_POST['email'];
            $UserNumber = $_POST['phone'];
            $UserDescription = $_POST['message'];

            $query = " INSERT INTO user_contact (User_Name,User_Email,User_Number,User_Description) VALUES('$UserName','$UserEmail','$UserNumber','$UserDescription')";
            $result = mysqli_query($con,$query);

            
           	if($result)
            {
                echo 'your data is inserted'; 
            }
            
    }
   

?>

<!DOCTYPE html>
<html lang="en-US" >


<!-- Mirrored from demo.ovathemes.com/dvents/contact/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Apr 2020 07:57:06 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="../xmlrpc.php">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <title>Get in Touch &#8211; Decor at Doorstep</title>
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
<link rel='shortlink' href='../indexa260.php?p=464' />
<link rel="alternate" type="application/json+oembed" href="../wp-json/oembed/1.0/embed3c29.json?url=http%3A%2F%2Fdemo.ovathemes.com%2Fdvents%2Fcontact%2F" />
<link rel="alternate" type="text/xml+oembed" href="../wp-json/oembed/1.0/embed78c3?url=http%3A%2F%2Fdemo.ovathemes.com%2Fdvents%2Fcontact%2F&amp;format=xml" />
<meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."/>
<link rel="icon" href="../wp-content/uploads/2017/07/cropped-favicon-32x32.jpg" sizes="32x32" />
<link rel="icon" href="../wp-content/uploads/2017/07/cropped-favicon-192x192.jpg" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="../wp-content/uploads/2017/07/cropped-favicon-180x180.jpg" />
<meta name="msapplication-TileImage" content="http://demo.ovathemes.com/dvents/wp-content/uploads/2017/07/cropped-favicon-270x270.jpg" />
		<style type="text/css" id="wp-custom-css">
			.l-theme{max-width: 100%;}		</style>
		<noscript><style> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript></head>

<body class="page-template-default page page-id-464 wpb-js-composer js-comp-ver-6.1 vc_responsive" >

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
    <a href="../index.php" class="navbar-brand scroll">
                    <img src="../wp-content/uploads/2017/06/logo.png" class="normal-logo" alt="Decor at Doorstep">
            <img src="../wp-content/uploads/2017/06/logo-dark.png" alt="Decor at Doorstep" class="scroll-logo hidden-xs"/>
            </a>

    <ul id="menu-mobile-menu" class="nav navbar-nav">
	<li><a title="Home 2" href="../home-2/index.php">Home</a></li>

<li><a title="Services" href="../services/index.php">Services</a></li>
<li><a title="Events" href="../events/index.php">Events</a></li>
<li><a title="About" href="../about/index.php">About</a></li>
<li><a title="Blog" href="../blog/index.php">Gallery</a></li>
	
<li class=" active"><a title="Contact" href="index.php">Contact</a></li>

</ul></div>




<div class="wrap-fixed-menu" id="fixedMenu">
    <nav class="fullscreen-center-menu">
        <div class="menu-main-menu-container">
            <ul id="menu-popup-menu" class="menu"><li><a href="../index.php">Home</a></li>
<li><a href="../services/index.php">Services</a></li>
<li><a href="../events/index.php">Events</a></li>
<li><a href="../about/index.php">About</a></li>
<li><a href="../blog/index.php">Blog</a></li>
<li><a href="index.php" aria-current="page">Get in Touch</a></li>
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
	                    		                    <li class="top-bar-contact__item"><i class="icon icon-call-in"></i> (+91) 70438 15495</li><li class="top-bar-contact__item"><i class="icon icon-envelope-open"></i>h.rathod5005@gmail.com</li><li class="top-bar-contact__item"><i class="icon icon-clock"></i> 24*7</li>	                                        </ul>
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

	                <ul id="menu-primary-menu" class="yamm main-menu nav navbar-nav">
	<li><a title="Home 2" href="../home-2/index.php">HOME</a></li>

<li><a title="SERVICES" href="../services/index.php">SERVICES</a></li>
<li><a title="Events" href="../events/index.php">EVENTS</a></li>
<li><a title="ABOUT" href="../about/index.php">ABOUT</a></li>
<li><a title="Blog" href="../blog/index.php">GALLERY</a></li>
	
<li class=" active"><a title="CONTACT" href="index.php">CONTACT</a></li>

</ul>

                </div>
            </div>
        </nav>
        </div>
    </div>
</header>




<div class="b-title-page area-bg area-bg_dark " style="background-image: url(../wp-content/uploads/2017/06/bg-1-3.jpg)">
    <div class="area-bg__inner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                                            <div class="ui-decor-2 ui-decor-2_vert bg-primary"></div>
                        <h1 class="b-title-page__title">Contact Us</h1>
                                        	                    <div id="breadcrumbs" >
        

		            <div class="breadcrumbs">
						<div class="breadcrumbs-pattern">
							<div class="container">
								<div class="row">
									<ul class="breadcrumb"><li><a href="../index.php">Home</a></li>  <li>Get in Touch</li></ul>
										</div>
									</div>
								</div>
							</div></div>
                                    </div>
            </div>
        </div>
    </div>
</div>

        		<section class="page-section ">
		    <div class="container">
		        <div class="">
		            <div class=" ovatheme_nosidebar" >
	
<div class="vc_row wpb_row vc_row-fluid section-contact"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="ui-decor-1"><img src="../wp-content/uploads/2017/06/ui-decor-1.png" alt="decor" class="center-block"></div>
              <div class="text-center">
                <h2 class="b-contact__title ui-subtitle-block">Contact us if you need our services. We will be happy to make your events memorable!</h2>
              </div><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4"><div class="vc_column-inner"><div class="wpb_wrapper"><div 
	data-stellar-background-ratio="0.4" 
	style="background-color: #01cb93; background-image: url(../wp-content/uploads/2017/06/texture-1.png)" 
	class="b-contact stellar section-texture section-radius " >
                <div class="b-contact__name">Address</div>
                <div class="b-contact__info">Sector No 5, Oslo Road, Near Bhavnath Temple, Plot No 512, Gandhidham(kutch) - 370201</div>
                <div class="b-contact__icon icon-map"></div>
              </div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4"><div class="vc_column-inner"><div class="wpb_wrapper"><div 
	data-stellar-background-ratio="0.4" 
	style="background-color: #0170cb; background-image: url(../wp-content/uploads/2017/06/texture-1.png)" 
	class="b-contact stellar section-texture section-radius " >
                <div class="b-contact__name">Phone</div>
                <div class="b-contact__info">(+91) 70438 15495</div>
                <div class="b-contact__icon icon-call-in"></div>
              </div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4"><div class="vc_column-inner"><div class="wpb_wrapper"><div 
	data-stellar-background-ratio="0.4" 
	style="background-color: #555555; background-image: url(../wp-content/uploads/2017/06/texture-1.png)" 
	class="b-contact stellar section-texture section-radius " >
                <div class="b-contact__name">Email</div>
                <div class="b-contact__info"><a href="http://demo.ovathemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="234a4d454c514e634755464d57500d404c4e">h.rathod5005@gmail.com</a></div>
                <div class="b-contact__icon icon-envelope-open"></div>
              </div></div></div></div></div></div></div></div></div><div class="vc_row wpb_row vc_row-fluid section-form-contact vc_row-o-equal-height vc_row-flex"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6"><div class="vc_column-inner"><div class="wpb_wrapper"><div role="form" class="wpcf7" id="wpcf7-f472-p464-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="wpcf7-form" >
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="472" />
<input type="hidden" name="_wpcf7_version" value="5.1.6" />
<input type="hidden" name="_wpcf7_locale" value="en_US" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f472-p464-o1" />
<input type="hidden" name="_wpcf7_container_post" value="464" />
</div>

<h2 class="ui-title-block">
    <i class="ui-decor-2 bg-primary"></i> message form</h2>
<div id="success"></div>
<div  class="b-form-contacts ui-form">
<div class="row">
<div class="col-md-6">
              <span class="wpcf7-form-control-wrap username"><input type="text" name="username" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="user-name" aria-required="true"  placeholder="Full Name" /></span>
              <span class="wpcf7-form-control-wrap phone"><input type="tel" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel form-control" id="user-phone"  placeholder="Phone" /></span>
              <span class="wpcf7-form-control-wrap phone"><input type="tel" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel form-control" id="user-phone"  placeholder="Your Email ID" /></span></p></div>
</div>
<div class="row">
<div class="col-xs-12">
              <span class="wpcf7-form-control-wrap messages"><textarea name="messages" cols="40" rows="3" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control" id="user-message" aria-required="true"  placeholder="Your Message ..."></textarea></span><br />
              <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info" />
           </div></div></div>
</form></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="wpb_gmaps_widget wpb_content_element map"><div class="wpb_wrapper"><div class="wpb_map_wraper"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6304.829986131271!2d-122.4746968033092!3d37.80374752160443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808586e6302615a1%3A0x86bd130251757c00!2sStorey+Ave%2C+San+Francisco%2C+CA+94129!5e0!3m2!1sen!2sus!4v1435826432051" width="600" height="500" frameborder="0" style="border:0" allowfullscreen></iframe></div></div></div></div></div></div></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid b-contact-social-net bg-grey text-center"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"> <ul class="social-net list-inline "><li class="social-net__item"><a  href="#" class="social-net__link text-primary_h"><i class="icon fa fa-twitter"></i></a></li><li class="social-net__item"><a  href="#" class="social-net__link text-primary_h"><i class="icon fa fa-facebook"></i></a></li><li class="social-net__item"><a  href="#" class="social-net__link text-primary_h"><i class="icon fa fa-google-plus"></i></a></li><li class="social-net__item"><a  href="#" class="social-net__link text-primary_h"><i class="icon fa fa-instagram"></i></a></li><li class="social-net__item"><a  href="#" class="social-net__link text-primary_h"><i class="icon fa fa-skype"></i></a></li><li class="social-net__item"><a  href="#" class="social-net__link text-primary_h"><i class="icon fa fa-behance"></i></a></li><li class="social-net__item"><a  href="#" class="social-net__link text-primary_h"><i class="icon fa fa-vimeo"></i></a></li></ul></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div>
				
						</div>


	

	</div></div></section>

	
				<footer class="footer">
	<div class="footer__main">
		<div class="container">
						<div class="row">
				<div class="col-xs-12">
					<div class="text-center"><a href="../index.php" class="footer__logo"><img src="../wp-content/uploads/2017/06/logo.png" alt="Decor at Doorstep" class="img-responsive"/></a></div>
				</div>
			</div>
            			<div class="row">
				<div class="col-md-8 col-md-offset-2">
														<div class="textwidget"><script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>(function() {
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
</div><label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" /></label><input type="hidden" name="_mc4wp_timestamp" value="1586936995" /><input type="hidden" name="_mc4wp_form_id" value="506" /><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" /><div class="mc4wp-response"></div></form><!-- / Mailchimp for WordPress Plugin --></div>
											</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="footer-section">
													<h3 class="footer-section__title ui-title-inner"><i class="ui-decor-2 bg-primary"></i>About Dvents</h3>
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
	            
<li class="footer-list__item"><a href="#" class="footer-list__link">Our Services</a></li><li class="footer-list__item"><a href="#" class="footer-list__link">Our Team</a></li><li class="footer-list__item"><a href="#" class="footer-list__link">About Dvents</a></li>
<li class="footer-list__item"><a href="#" class="footer-list__link">Clients List</a></li><li class="footer-list__item"><a href="#" class="footer-list__link">News Blog</a></li>
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
														<div class="textwidget"><div class="copyright pull-left">© 2017<strong> Dvents</strong> &#8211; The Events Specialists All Rights Reserved.<a class="copyright__link" href="../terms-of-use/index.php"> Terms of Use</a><a class="copyright__link" href="../privacy-policy/index.php">Privacy Policy</a></div>
</div>
												<ul class="social-net list-inline pull-right">
													<li class="social-net__item"><a href="http://abc.com/" class="social-net__link text-primary_h"><i class="icon fa fa-youtube"></i></a></li><li class="social-net__item"><a href="#" class="social-net__link text-primary_h"><i class="icon fa fa-twitter"></i></a></li><li class="social-net__item"><a href="#" class="social-net__link text-primary_h"><i class="icon fa fa-facebook"></i></a></li><li class="social-net__item"><a href="#" class="social-net__link text-primary_h"><i class="icon fa fa-google-plus"></i></a></li><li class="social-net__item"><a href="#" class="social-net__link text-primary_h"><i class="icon fa fa-instagram"></i></a></li>											</ul>
				</div>
			</div>
		</div>
	</div>
</footer>			</div> <!-- /wrapper -->
		</div><!-- /container_boxed -->
		<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>(function() {function maybePrefixUrlField() {
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

<!-- Mirrored from demo.ovathemes.com/dvents/contact/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Apr 2020 07:57:09 GMT -->
</html>



