<?php 
session_start();
require 'utils.php';
?>
<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="img/favicon.ico">
    <title>Kurukshetra'17</title>
    <link rel='stylesheet' id='promogear-bootstrap-css'  href='wp-content/themes/promo-gear/assets/css/bootstrap3a05.css' type='text/css' media='all' />
    <!--<link rel='stylesheet' id='promogear-bootstrap-select-min-css'  href='wp-content/themes/promo-gear/assets/css/bootstrap-select.min3a05.css' type='text/css' media='all' />-->
    <link rel='stylesheet' id='promogear-font-awesome-min-css'  href='wp-content/themes/promo-gear/assets/css/font-awesome.min3a05.css' type='text/css' media='all' />
    <link rel='stylesheet' id='promogear-animate-min-css'  href='wp-content/themes/promo-gear/assets/css/animate.min3a05.css' type='text/css' media='all' />
    <link rel='stylesheet' id='promogear-jquery-fullpage-css'  href='wp-content/themes/promo-gear/assets/css/jquery.fullPage3a05.css' type='text/css' media='all' />
    <link rel='stylesheet' id='promogear-main-styles-css'  href='wp-content/themes/promo-gear/assets/css/style3a05.css' type='text/css' media='all' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <link rel='stylesheet' href="css/res.css">
    <link rel='stylesheet' href="css/loader.css">
    <link rel='stylesheet' href="css/initiatives.css">
    <link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.7/css/bootstrap-dialog.min.css'/>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Proza+Libre"/>

    <!-- h1 font -->
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

    <!-- h2 font -->
    <link href="https://fonts.googleapis.com/css?family=Aref+Ruqaa|Reem+Kufi" rel="stylesheet">     

    <!--hospitality-->
    <link rel="stylesheet" type="text/css" href="css/hospi/demo.css" />
    <!-- event and workshop -->
    <link rel="stylesheet" type="text/css" href="css/eventIcons.css" />
    <style id='promogear-main-styles-inline-css' type='text/css'>
        #mystyle {
            margin: 0 auto;
        }                
        h1, .h1 {font-family:'Abril Fatface', cursive;font-size: 56px;font-weight: 400;color: #d73e4d;text-align: inherit;margin-top: 0px;margin-bottom: 15px;}
        h2, .h2 {font-family: 'Aref Ruqaa', serif;font-size: 48px;font-weight: 400;color: #d73e4d;text-transform: none;text-align: inherit;margin-top: 0px;margin-bottom: 15px;}h3, .h3 {font-family: Miso;font-size: 40px;font-weight: 400;color: #d73e4d;text-transform: uppercase;text-align: inherit;margin-top: 0px;margin-bottom: 15px;}
        h4, .h4 {font-family: Miso;font-size: 32px;font-weight: 400;color: #d73e4d;text-transform: uppercase;text-align: inherit;margin-top: 0px;margin-bottom: 15px;}h5, .h5 {font-family: Miso;font-size: 24px;font-weight: 400;color: #d73e4d;text-transform: uppercase;text-align: inherit;margin-top: 0px;margin-bottom: 15px;}
        h6, .h6 {font-family: Miso;font-size: 19px;font-weight: 700;color: #d73e4d;text-transform: uppercase;text-align: inherit;margin-top: 0px;margin-bottom: 15px;}a {font-family: Lato;font-size: 18px;text-transform: none;}a {color: #d73e4d}a:hover {color: #d73e4d}a:active {color: #d73e4d}.btn {padding-top:6px;padding-bottom:6px;padding-left:30px;padding-right:30px;}.btn.btn-sm {padding-top:2px;padding-bottom:2px;padding-left:20px;padding-right:20px;}.btn.btn-lg {padding-top:6px;padding-bottom:6px;padding-left:40px;padding-right:40px;}p {margin-top:0px;margin-bottom:30px;}blockquote {border-left-width:1px;border-color:#d73e4d;padding-top:0px;padding-bottom:0px;padding-left:20px;padding-right:0px;}table th, table td {padding-top:1px;padding-bottom:1px;padding-left:1px;padding-right:1px;}
        .dow
        {
            width: 40px !important;
        }           
        .input-group-addon
        {
            background-color:#f7e3e5;
        }
        .reicon
        {
            color:#d73e4d;
        }
        @media screen and (max-width: 800px) {
            .unescodiv {
                display:none;
            }
        }
    </style>
    <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
        <!--[if lt IE 9]>
        <script src="http://wordpress.promo-gear.itembridge.com/5/wp-content/themes/promo-gear/assets/js/html5shiv.js"></script>
        <script src="http://wordpress.promo-gear.itembridge.com/5/wp-content/themes/promo-gear/assets/js/respond.min.js"></script>
        <![endif]-->
        <style>
            .img-with-text {
                text-align: justify;
                width: [width of img];
            }
            .img-with-text img {
                display: block;
                margin: 0 auto;
            }
            .errspan {
                float: right;
                margin-left: 6px;
                margin-top: -10px;
                position: relative;
                z-index: 2;
                color: blue;
            }
        </style>
        <style>
          table {
             border-collapse: collapse !important;
             width: 100% !important;
         }

         th, td {
             padding: 8px !important;
             text-align: left !important;
             border-bottom: 1px solid #ddd !important;
         }
     </style>
 </head>
 <body class="home page page-id-4 page-template page-template-template-homepage page-template-template-homepage-php  one-page">
    <div class="preloader">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>
    <div class="main" data-nav-position="left">
        <!--h1 style="position:fixed;right:1em;">sadds</h1-->
        <section class="section  random"
        data-background-image="img/ceg.gif"
        data-background="rgba(30,45,58,0.80)"
        data-shadow=""
        data-nav-color="#ffffff"
        data-nav-color-text="#1e2d3a"
        data-color="#ffffff"
        data-title-color="#ffffff"
        data-title="Home"
        data-anchor="home-section">
        <header class="site-header  second-site-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-4 col-sm-4 left-align no-left-indent" id="one" >
                        <div class="navbar navbar-default " role="navigation">
                            <div class="navbar-header">
                                <button type="button" class="btn navbar-toggle collapsed" style=""
                                data-toggle="collapse"
                                data-target="#main-menu">
                                <span class="icon close-icon">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                        <path fill="#D73E4D" d="M23.3,23.3c-0.6,0.6-1.5,0.6-2.1,0L0.7,2.8c-0.6-0.6-0.6-1.5,0-2.1c0.6-0.6,1.5-0.6,2.1,0
                                        l20.5,20.5C23.9,21.8,23.9,22.7,23.3,23.3L23.3,23.3z M23.3,2.8L2.8,23.3c-0.6,0.6-1.5,0.6-2.1,0c-0.6-0.6-0.6-1.5,0-2.1L21.2,0.7
                                        c0.6-0.6,1.5-0.6,2.1,0C23.9,1.3,23.9,2.2,23.3,2.8L23.3,2.8z"/>
                                    </svg>
                                </span>
                                <!-- .close -->
                                <span class="icon open-icon">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </span><!-- .open -->
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4 col-sm-4 logo-box" id="two">
                    <center><img src="img/k orange white.png" style="height: auto;width:75%;"></center>
                </div>
                <div align="right" class="col-xs-4 col-sm-4 logo-box unescodiv" id="three">                             
                    <img src="img/unesco white and blue1.png" style="height: auto;width: 55%;">                             
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="header-menu">
            <nav id="main-menu" class="collapse navbar-collapse">
                <ul id="menu-main-menu" class="col-sm-12 col-md-6 nav navbar-nav">
                    <li id="menu-item-144" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-144"><a href="index.html#home-section"><span>Intro</span></a></li>
                    <li id="menu-item-29" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29"><a href="index.html#highlights"><span>Highlights</span></a></li>
                    <li id="menu-item-53" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53"><a href="index.html#eventsAndWorkshops"><span>Events & Workshops</span></a></li>
                    <li id="menu-item-53" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53"><a href="index.html#initiatives"><span>Initiatives</span></a></li>
                    <li id="menu-item-58" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58"><a href="index.html#gl"><span>Guest Lectures</span></a></li>
                    <li id="menu-item-133" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-133"><a href="index.html#xceed"><span>Xceed</span></a></li>
                    <li id="menu-item-133" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-133"><a href="contact.html"><span>Contact</span></a></li>
                    <li id="menu-item-133" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-133"><a href='#' data-toggle="modal" data-target=".sponsors"><span>Sponsors</span></a></li>
                    <li id="menu-item-133" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-133"><a href='#' data-toggle="modal" data-target=".about"><span>About</span></a></li>
                    <?php 
                    if(!isset($_SESSION['user']['userId']))
                    {
                        ?>  
                        <li id="menu-item-133" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-133"><a href='#' data-toggle="modal" data-target=".login"><span>Login/Register</span></a></li>
                        <?php
                    }
                    else
                    {
                        ?>  
                        <li id="menu-item-133" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-133"><a href='logout.php'><span>Logout</span></a></li>
                        <?php
                    }
                    ?>
                    <?php 
                    if(!isset($_SESSION['user']))
                    {
                        ?>  
                        <li id="menu-item-133" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-133"><a href='#' data-toggle="modal" data-target=".registersa"><span>Register as SA</span></a></li>
                        <?php
                    }
                    else if(!isset($_SESSION['user']['isSA']))
                    {
                       ?>   
                       <li id="menu-item-133" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-133"><a href='registerAsSA.php'><span>Register as SA</span></a></li>
                       <?php
                   }
                   if(isset($_SESSION['user']))
                   {
                    ?>   
                    <li id="menu-item-133" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-133"><a><span>Hey, <?php echo $_SESSION['user']['name']?> </span></a></li>
                    <?php
                }
                ?>
            </ul>
        </nav>
    </div>
    <!-- .header-menu -->
</header>
<!-- .site-header -->
<div class="section-content ">
    <div class="container section-wrap"
    style="">
    <div class="row ">
        <div class="col-md-12  text-center">
            <h1 class="section-title "  data-appear-animation="bounceInUp" data-appear-animation-delay="100">kurukshetra 2017</h1>
            <div class="animation"
            data-appear-animation="bounceInUp"
            data-appear-animation-delay="300">
            <div class="updates" style="height: 100px">
                <h2 class="update" style="color: white;font-size: 3vw"></h2>
            </div>
            <hr class="pg-gap" style="margin-bottom: 29px;">
        </div>
        <div class="animation "
        data-appear-animation="bounceInUp"
        data-appear-animation-delay="500">
        <a href="#highlights"><i class="fa fa-angle-double-down" style="font-size:48px;"></i></a>
    </div>
</div>
</div>
</div>
</div>
<!-- .section-content -->               
</section>
<!-- .section -->
<!-- facts abt k! -->
<section class="section  random"
data-background-image="img/highlights.gif"
data-background="rgba(94,142,189,0.80)"
data-shadow=""
data-nav-color="#ffffff"
data-nav-color-text="#d73e4d"
data-color=""
data-title-color=""
data-title="Highlights"
data-anchor="highlights">
<div class="section-content ">
    <div class="container section-wrap"
    style="">
    <div class="facts no-appear  inverse">
        <div class="facts-title" data-appear-animation="zoomIn" data-appear-animation-delay="100">
            <div class="title-wrap">
                <h2 class="title">We at k! do <br/> many things</h2>
            </div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <!-- .facts-title -->
        <div class="facts-list">
            <div id="pg-fact-1" class="fact" data-appear-animation="zoomIn" data-appear-animation-delay="400">
                <div class="skill-wrap full-skill">
                    <div class="skill-percent"  style="color:#d73e4d;font-family:'Abril Fatface', cursive;">10+</div>
                    <div class="skill-name" style="font-family: 'Aref Ruqaa', serif;font-size: 1.1vw">Workshops</div>
                </div>
                <style type="text/css" scoped="">
                    #pg-fact-3 .skill-wrap.full-skill:before { border-color: #d73e4d;}
                </style>
                <i  style="color:#d73e4d;" class="fa fa-wrench"></i>
            </div>
            <div id="pg-fact-2" class="fact" data-appear-animation="zoomIn" data-appear-animation-delay="400">
                <div class="skill-wrap full-skill">
                    <div class="skill-percent"  style="color:#375099;font-family:'Abril Fatface', cursive;">1M</div>
                    <div class="skill-name" style="font-family: 'Aref Ruqaa', serif;font-size: 1.1vw">Worth Prizes</div>
                </div>
                <style type="text/css" scoped="">
                    #pg-fact-3 .skill-wrap.full-skill:before { border-color: #375099;}
                </style>
                <i  style="color:#375099;" class="fa fa-money"></i>
            </div>
        </div>
        <!-- .facts-list -->
        <div class="facts-list">
            <div id="pg-fact-3" class="fact" data-appear-animation="zoomIn" data-appear-animation-delay="400">
                <div class="skill-wrap full-skill">
                    <div class="skill-percent"  style="color:#d6973d;font-family:'Abril Fatface', cursive;">50K+</div>
                    <div class="skill-name" style="font-family: 'Aref Ruqaa', serif;font-size: 1.1vw">Likes</div>
                </div>
                <style type="text/css" scoped="">
                    #pg-fact-3 .skill-wrap.full-skill:before { border-color: #d6973d;}
                </style>
                <i  style="color:#d6973d;" class="fa fa-thumbs-up"></i>
            </div>
            <!-- .fact -->
            <div id="pg-fact-4" class="fact" data-appear-animation="zoomIn" data-appear-animation-delay="400">
                <div class="skill-wrap full-skill">
                    <div class="skill-percent"  style="color:#179680;font-family:'Abril Fatface', cursive;">30+</div>
                    <div class="skill-name" style="font-family: 'Aref Ruqaa', serif;font-size: 1.1vw">Events</div>
                </div>
                <style type="text/css" scoped="">
                    #pg-fact-4 .skill-wrap.full-skill:before { border-color: #179680;}
                </style>
                <i  style="color:#179680;" class="fa fa-star"></i>
            </div>
            <!-- .fact -->
        </div>
        <!-- .facts-list -->
    </div>
    <!-- .facts -->
</div>
</div>
<!-- .section-content -->
</section>
<!-- .section -->
<!-- events and workshops -->
<section class="section  random"
data-background-image="img/events.gif"
data-background="rgba(255,247,204,0.80)"
data-shadow=""
data-nav-color="#d73e4d"
data-nav-color-text="#ffffff"
data-color="#fff"
data-title-color="#fff"
data-title="Events & Workshops"
data-anchor="eventsAndWorkshops">
<div class="section-content ">
    <div class="container section-wrap"
    style="">
    <div class="filter-box works-box">
        <div class="row section-title-block">
            <h1 class="col-sm-8 section-title" data-appear-animation="fadeInDown" data-appear-animation-delay="100">Events and Workshops</h1>
            <div class="col-sm-4 text-right" data-appear-animation="fadeInRightBig" data-appear-animation-delay="500">
                <div class="btn-group filter-buttons filter-list">
                    <button type="button" class="btn btn-danger btn-sm dropdown-toggle" data-toggle="dropdown">
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#" data-filter=".events" class="active events-menu" style="font-family: 'Aref Ruqaa', serif;">Events</a></li>
                        <li><a href="#" data-filter=".workshops" class="workshops-menu" style="font-family: 'Aref Ruqaa', serif;">Workshops</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <!-- .filter-buttons -->
            </div>
        </div>
        <!-- .section-title-block -->
        <div class="hi-icon-wrap hi-icon-effect-7 hi-icon-effect-7b domains events-details" data-appear-animation="fadeInUp" data-appear-animation-delay="100">
            <div class="col-sm-3">
                <a href="events.html" class="hi-icon fa fa-gear"></a>
                <p style="font-family: 'Aref Ruqaa', serif; font-style: normal;">Engineering</p>
            </div>
            <div class="col-sm-3">
                <a href="events.html" class="hi-icon fa fa-android"></a>
                <p style="font-family: 'Aref Ruqaa', serif; font-style: normal;">Robotics</p>
            </div>
            <div class="col-sm-3">
                <a href="events.html" class="hi-icon fa fa-money"></a>
                <p style="font-family: 'Aref Ruqaa', serif; font-style: normal;">Management</p>
            </div>
            <div class="col-sm-3">
                <a href="events.html" class="hi-icon fa fa-puzzle-piece"></a>
                <p style="font-family: 'Aref Ruqaa', serif; font-style: normal;">Quiz</p>
            </div>
            <div class="col-sm-3">
                <a href="events.html" class="hi-icon fa fa-archive"></a>
                <p style="font-family: 'Aref Ruqaa', serif; font-style: normal;">General</p>
            </div>
            <div class="col-sm-3">
                <a href="events.html" class="hi-icon fa fa-terminal"></a>
                <p style="font-family: 'Aref Ruqaa', serif; font-style: normal;">Coding</p>
            </div>
            <div class="col-sm-3">
                <a href="events.html" class="hi-icon fa fa-laptop"></a>
                <p style="font-family: 'Aref Ruqaa', serif; font-style: normal;">Online</p>
            </div>
            <!-- events will come here -->
            <!-- workshop should come in tab -->
        </div>
        <div class="hi-icon-wrap hi-icon-effect-7 hi-icon-effect-7b domains_work workshops-details" data-appear-animation="fadeInUp" data-appear-animation-delay="100" style="display:none">
            <div class="col-sm-3">
                <a href="workshops.html" class="hi-icon fa fa-gear"></a>
                <p style="font-family: 'Aref Ruqaa', serif; font-style: normal;">Engineering</p>
            </div>
            <div class="col-sm-3">
                <a href="workshops.html" class="hi-icon fa fa-laptop"></a>
                <p style="font-family: 'Aref Ruqaa', serif; font-style: normal;">Coding</p>
            </div>
            <div class="col-sm-3">
                <a href="workshops.html" class="hi-icon fa fa-terminal"></a>
                <p style="font-family: 'Aref Ruqaa', serif; font-style: normal;">Online</p>
            </div>
            <div class="col-sm-3">
                <a href="workshops.html" class="hi-icon fa fa-money"></a>
                <p style="font-family: 'Aref Ruqaa', serif; font-style: normal;">Management</p>
            </div>
            <div class="col-sm-3">
                <a href="workshops.html" class="hi-icon fa fa-android"></a>
                <p style="font-family: 'Aref Ruqaa', serif; font-style: normal;">Robotics</p>
            </div>
            <div class="col-sm-3">
                <a href="workshops.html" class="hi-icon fa fa-archive"></a>
                <p style="font-family: 'Aref Ruqaa', serif; font-style: normal;">General</p>
            </div>
            <!-- workshops will come here -->
            <!-- workshop should come in tab -->
        </div>
    </div>
</div>
</div>
<!-- .section-content -->
</section>
<!-- .section -->
<!-- initiatives -->
<section class="section  random"
data-background-image="img/init.gif"
data-background="rgba(255,247,204,0.80)"
data-shadow=""
data-nav-color="#d73e4d"
data-nav-color-text="#ffffff"
data-color="#fff"
data-title-color="#fff"
data-title="Initiatives"
data-anchor="initiatives">
<div class="section-content ">
    <div class="container section-wrap"
    style="">
    <div class="col-md-12  text-center">
        <h1 class="section-title "  data-appear-animation="fadeInDown" data-appear-animation-delay="100">initiatives</h1>

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="hovereffect">
                <img class="img-responsive" src="img/neon.jpg" alt="" style="height:220px;opacity:0.2">
                <div class="overlay">
                    <h2 style="font-size: 30px">Neon Run</h2>
                    <p>
                       <a style="color:#fff;font-size:20px;" href="#" data-toggle="modal" data-target=".neonrun">know more</a>
                   </p>
               </div>
           </div>
       </div>
       <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="hovereffect">
            <img class="img-responsive" src="img/e4e.jpg" alt="" style="height:220px;opacity: 0.2">
            <div class="overlay">
                <h2 style="font-size: 30px">E for Educate</h2>
                <p>
                    <a style="color:#fff;font-size:20px;" href="#" data-toggle="modal" data-target=".eforeducate">know more</a>
                </p>
            </div>
        </div>
    </div>
</div>
</div>
<!-- .section-content -->
</section>
<!-- .section -->
<!--Xceed-->
<section class="section  random"
data-background-image="img/xceed.gif"
data-background="rgba(10, 79, 67, 0.870588)"
data-shadow=""
data-nav-color="#d73e4d"
data-nav-color-text=""
data-color="#768088"
data-title-color="#fff7cc"
data-title="Xceed"
data-anchor="xceed">
<div class="section-content ">
  <div class="container section-wrap"
  style="">
  <!--h3 class="section-title"  data-appear-animation="fadeInDown" data-appear-animation-delay="100">Xceed</h3-->
  <h1 class="section-title" data-appear-animation="fadeInDown" data-appear-animation-delay="100">Xceed</h1>
  <p style="color:#fff; font-size:16px; margin-left:30px; text-align:justify;font-style: normal">
    Distance must not be a barrier to spreading knowledge. Transcending geographical boundaries, Xceed serves as miniature version of Kurukshetra encompassing interesting events and workshops. Apart from bagging lots of prizes, the winners of Xceed get the enviable opportunity to be a part of the grand final stage at Kurukshetra. Quite simply, XCEED provides those beyond our state borders the chance to experience Kurukshetra first hand. Since 2008, XCEED has visited some of the top institutions in our country including IIM Ahmedabad, IIM Bangalore and IIT Kanpur among others.<br/>
    <b><i><a style="color:#fff; font-size:20px;" href="#" data-toggle="modal" data-target=".xceed">Click here </a></i></b>for full schedule.<br/>
</p>
<h2 style="color:rgb(255, 247, 204);" data-appear-animation="fadeInDown" data-appear-animation-delay="100">Battle of Bots</h2>
<p style="color:#fff; font-size:16px; margin-left:30px;font-style: normal">
    "Battle does not determine who is right - only who is left.”<br/><br/> 
    Eight cities. One champion. No machine is safe in the Battle of Bots. Xceed's Battle of Bots, a nationwide robotics championship with prizes worth 1 Lakh, for Kurukshetra 2017 is coming to a city near you. Do you have what it takes to win them all?
    <br/>
    <i>For more details check out our <a target="_blank" href="http://www.xceed.kurukshetra.org.in" style="color:#fff; font-size:20px;"><b>website</b></i></a><br/>
</p>
</div>
</div>
<!-- .section-content -->
</section>
<!-- .section -->
<!--Hospitality-->
<section class="section  random"
data-background-image="img/hospi.gif"
data-background="rgba(10, 79, 67, 0.870588)"
data-shadow=""
data-nav-color="#d73e4d"
data-nav-color-text=""
data-color="#768088"
data-title-color="#fff7cc"
data-title="hospitality"
data-anchor="hospitality">
<div class="section-content ">
    <div class="container section-wrap"
    style="">
    <h1 class="section-title text-center"  data-appear-animation="fadeInDown" data-appear-animation-delay="100">Hospitality</h1>
    <div class="hospi-header"></div>
    <div style="background:transparent; border:transparent; color:#fff;"class="tab-content hospi-details">
    </div>
</div>
<span class="cssload-loader hospi-loader"><span class="cssload-loader-inner"></span></span>
</div>
<!-- .section-content -->
</section>
<!-- .section -->
<!-- gl -->
<section class="section  random"
data-background-image="img/gl.gif"
data-background="rgba(35,184,158,0.80)"
data-shadow=""
data-nav-color="#d73e4d"
data-nav-color-text=""
data-color="#ffffff"
data-title-color="#fff7cc"
data-title="Guest Lectures"
data-anchor="gl">
<div class="section-content ">
    <div class="container section-wrap"
    style="">
    <h1 class="section-title text-center"  data-appear-animation="fadeInDown" data-appear-animation-delay="100">Guest Lectures</h1>
    <div class="animation "
    data-appear-animation="fadeInDown"
    data-appear-animation-delay="300">
    <p class="description text-center"
    style="font-size:1.5em;">where you meet great people, in action</p>
</div>
<div class="success-carousel carousel-success  inverse"
data-options='{"itemsCustom": [[0, 1]], "navigation": true, "pagination": false}' >
<div class="stories" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
    <div class="avatars">
        <div class="avatars-carousel gls-avatar">

        </div>
        <!-- .avatars-carousel -->
    </div>
    <!-- .avatars -->
    <div class="content gls-content">

    </div>
    <!-- .content -->
    <div class="clearfix"></div>
    <div class="navigation">
        <a href="#" class="prev"><i class="fa fa-angle-left"></i></a>
        <a href="#" class="next"><i class="fa fa-angle-right"></i></a>
        <div class="pager"></div>
    </div>
    <!-- .navigation -->
</div>
<!-- .stories -->
</div>
<!-- .success-carousel -->                  
</div>
</div>
<!-- .section-content -->
</section>
<!-- theme -->
<section class="section  random"
data-background-image="img/gl.gif"
data-background="rgba(35,184,158,0.80)"
data-shadow=""
data-nav-color="#d73e4d"
data-nav-color-text=""
data-color="#ffffff"
data-title-color="#fff7cc"
data-title="Theme"
data-anchor="theme">
<div class="section-content ">
    <div class="container section-wrap"
    style="">
    <h1 class="section-title text-center"  data-appear-animation="fadeInDown" data-appear-animation-delay="100">Our Theme</h1>
    <div class="card card-outline-warning text-xs-center">
        <div class="card-block">
            <blockquote class="card-blockquote">
                <blockquote class="text-left">
                    <h3>Climate Change</h3>
                </blockquote>
                <p style="max-height:400px; font-family:Lora; font-size:16px;" class="text-left">Climate change, also called global warming at times, refers to the rise in average surface temperatures on Earth. In a nutshell, it occurs when long-term weather patterns are altered.Observations throughout the world make it clear that climate change is occurring, and rigorous scientific research demonstrates that the greenhouse gases emitted by human activities are the primary driver of this mass phenomenon.<br/><br/>
                    It didn’t happen overnight. <br/><br/>
                    The Earth's climate has changed throughout history.The current warming trend is of particular significance because most of it is very likely human-induced and proceeding at a rate that is unprecedented in the past 1,300 years. For example, the atmospheric concentration of CO2 did not rise above 300 parts per million (ppm) between the advent of human civilization roughly 10,000 years ago and 1900. Today it is at about 400 ppm, a level not reached in more than 400,000 years.<br/><br/>
                    The evidence is incontrovertible: Global warming is occurring. If no mitigating actions are taken, our way of life and the lives of future generations are at risk – be it through rising sea levels, more frequent natural disasters, loss of biodiversity or any of the host of consequences identified by the scientific community.<br/><br/>
                    Despite the international scientific community's consensus on climate change, a small number of people continue to deny that climate change exists or that humans are causing it. <br/><br/>
                    We think that the debate is over about whether or not climate change is real; it is now time to act to solve the problem. And Team Kurukshetra is doing just that. Through social initiatives, awareness drives, workshops, lectures, projects and much more, we are trying to do our part to fight climate change – and we ask you to join us.
                </p>
            </blockquote>
        </div>
    </div>
</div>
</div>
<!-- .section-content -->
</section>
<!-- footer and contact -->
<section class="section  random"
data-background-image="img/footer.gif"
data-background=""
data-shadow=""
data-nav-color=""
data-nav-color-text=""
data-color=""
data-title-color=""
data-title="Footer"
data-anchor="footer">
<div class="section-content ">
    <div class="container section-wrap"
    style="">
    <div class="row section-title-block">
        <h1 style="color:rgb(255, 247, 204);" class="col-sm-8 section-title" data-appear-animation="fadeInDown" data-appear-animation-delay="500">Reach Us</h1>
        <br/>
        <div class="col-sm-12 col-md-8">
        </div>
        <div class="col-sm-12 col-md-4">
            <p style="font-size:20px; color:#fff;">                         
                <i class="fa fa-envelope-o fa-lg"></i>&nbsp;&nbsp;pr@kurukshetra.org.in
                <br/>
                <i class="fa fa-phone fa-lg"></i>&nbsp;                         
                +91 44 2235 9002
            </p>
            <br/>
            <p style="font-size:20px; color:#fff; margin-bottom:2px;">
                You can find us on                  
            </p>
            <div class="social">
                <a href="https://www.facebook.com/kurukshetra.org.in/" target="_blank"><i class="fa fa-facebook-square fa-lg" style="color:#fff;"></i></a>&nbsp;
                <a href="https://twitter.com/kurukshetra_ceg" target="_blank"><i class="fa fa-twitter-square fa-lg"style="color:#fff;"></i></a>&nbsp;
                <a href="https://www.linkedin.com/company/ceg-tech-forum" class="linkedin" target="_blank"><i class="fa fa-linkedin-square fa-lg" style="color:#fff;"></i></a>&nbsp;
                <a href="https://www.instagram.com/kurukshetra_ceg/" class="instagram" target="_blank"><i class="fa fa-instagram fa-lg" style="color:#fff;"></i></a>&nbsp;
            </div>
        </div>
    </div>
</div>
</div>
<!-- .section-content -->
<footer class="site-footer" style="background-color: #f7f7f1;padding:22px;">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 left-align">
                <div style="font-size:15px;" class="copyright"><b>Copyright 2016 @ CEG Tech Forum. All rights reserved.</b></div>
            </div>
            <div class="col-sm-6 right-align">
                <a style="color:grey;" href="http://www.archive16.kurukshetra.org.in" target="_blank">k!16</a>&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#" class="scroll-to-top"><i class="fa fa-angle-up"></i></a>
            </div>
        </div>
    </div>
</footer>
<!-- .site-footer -->
<style type="text/css" scoped="">
    .site-footer {
        background-color: #1e2d3a; }
        .site-footer, .site-footer .social a,
        .site-footer .scroll-to-top, .site-footer .scroll-to-top:visited { color: #768088; }
    </style>
</section>
<!-- .section -->
<!-- .section -->
<!-- xceed battle of bots schedule -->
<div class="modal fade xceed" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <h2 style="text-align:center;margin-top:30px">Xceed Schedule</h2>
            <center>
                <table class="table table-hover table-bordered">
                    <tr>
                       <th>City</th>
                       <th>Date</th>
                       <th>Venue</th>
                   </tr>
                   <tr>
                       <td>Tirupati</td>
                       <td>7, 8 January’17</td>
                       <td>IIT Tirupati</td>
                   </tr>
                   <tr>
                       <td>Trichy</td>
                       <td>7, 8 January’17</td>
                       <td>Bharathidasan Institute of Technology (BIT) Campus; Anna University</td>
                   </tr>
                   <tr>
                       <td>Chennai</td>
                       <td>21,22 January’17</td>
                       <td>Easwari Engineering College</td>
                   </tr>
                   <tr>
                       <td>Madurai</td>
                       <td>21,22 January’17</td>
                       <td>Thiagarajar College of Engineering</td>
                   </tr>
                   <tr>
                       <td>Vellore</td>
                       <td>21,22 January’17</td>
                       <td>Vellore Institute of Technology</td>
                   </tr>
                   <tr>
                       <td>Coimbatore</td>
                       <td>17, 18 December’16</td>
                       <td>Coimbatore Institute of Technology</td>
                   </tr>
                   <tr>
                       <td>Pilani</td>
                       <td>17, 18 October’16</td>
                       <td>BITS Pilani</td>
                   </tr>
                   <tr>
                       <td>Suratkal</td>
                       <td>2,3 October’16</td>
                       <td>NIT Suratkal</td>
                   </tr>
                   <tr>
                       <td>Salem</td>
                       <td>17, 18 September’16</td>
                       <td>Annapoorana Engineering College</td>
                   </tr>
               </table>
           </center>
           <br/>
       </div>
   </div>
</div>
<!-- sponsors -->
<div class="modal fade sponsors" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <h3 style="text-align:center;margin-top:30px">Sponsors</h3>
            <hr/>
            <center>
                <p> Will be updated soon</p>
            </center>
            <br/>
        </div>
    </div>
</div>
<!-- Login/ Registration -->
<div class="modal fade login" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <ul class="nav nav-tabs nav-justified">
                <li role="navigation" class="active">
                    <a data-toggle="tab" href="#login">
                        <h5>LOGIN</h5>
                    </a>
                </li>
                <li role="navigation">
                    <a data-toggle="tab" href="#register">
                        <h5>REGISTRATION</h5>
                    </a>
                </li>
            </ul>
            <div class="tab-content" style="border:none">
                <div id="login" class="tab-pane fade in active">
                    <form id="login" method="post" action="login.php">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="reicon fa fa-envelope"></i></span>
                            <input id="email" type="text" class="form-control" name="email" placeholder="Email" onblur="validatemail(this)">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="reicon glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password (min 8 characters long)" onblur="validatepass(this)">
                        </div>
                        <br>                            
                        <input type="submit" class="btn btn-success" value="Login">
                    </form>
                </div>
                <div id="register" class="tab-pane fade">
                    <form id="register" onsubmit="Validate(this)">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="reicon glyphicon glyphicon-user"></i></span>
                            <input id="name" type="text" class="form-control" name="name" placeholder="Your name" onblur="validatename(this)">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="reicon fa fa-phone" style="width:16px;"></i></span>
                            <input id="phone" type="text" class="form-control" name="contactNumber" placeholder="Your mobile number" onblur="validatephone(this)">
                        </div>
                        <br>                            
                        <div class="input-group">
                            <span class="input-group-addon"><i class="reicon fa fa-envelope"></i></span>
                            <input id="email" type="text" class="form-control" name="emailId" placeholder="Your email-id" onblur="validatemail(this)">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="reicon glyphicon glyphicon-lock"></i></span>
                            <input id="pass" type="password" class="form-control" name="password" placeholder="Password (min 8 characters long)" onblur="validatepass(this)">
                        </div>
                        <br/>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="reicon fa fa-calendar"></i></span>
                            <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
                        </div>
                        <div class="input-group radio">
                            Gender:
                            <label class="radio-inline">
                                <input type="radio" name="gender"  value="M" checked> Male
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="gender" value="F"> Female
                            </label>
                        </div>
                        <br>
                        <div class="form-group college">
                        </div>
                        <div class="form-group courses">
                        </div>
                        <div class="form-group degree">
                        </div>
                        <div class="form-group year">
                        </div>
                        <input type="submit" class="btn btn-success" value="Register">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register as Student Ambassdor -->
<div class="modal fade registersa" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <h3 style="text-align:center;margin-top:30px">Register as Student Ambassdor</h3>
            <center>
                <div class="newreg">
                    <div class="oldreglink col-sm-12" style="text-align:right; cursor:pointer"><a><i>Already registered for k!?</i></a></div>
                    <form id="saregister" style="width:90%;" onsubmit="Validate(this)">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="reicon glyphicon glyphicon-user"></i></span>
                            <input id="name" type="text" class="form-control" name="name" placeholder="Your name" onblur="validatename(this)">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="reicon fa fa-phone" style="width:16px;"></i></span>
                            <input id="phone" type="text" class="form-control" name="contactNumber" placeholder="Your mobile number" onblur="validatephone(this)">
                        </div>
                        <br>                            
                        <div class="input-group">
                            <span class="input-group-addon"><i class="reicon fa fa-envelope"></i></span>
                            <input id="email" type="text" class="form-control" name="emailId" placeholder="Your email-id" onblur="validatemail(this)">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="reicon glyphicon glyphicon-lock"></i></span>
                            <input id="pass" type="password" class="form-control" name="password" placeholder="Password (min 8 characters long)" onblur="validatepass(this)">
                        </div>
                        <br/>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="reicon fa fa-calendar"></i></span>
                            <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
                        </div>
                        <div class="input-group radio">
                            Gender:
                            <label class="radio-inline">
                                <input type="radio" name="gender"  value="M" checked> Male
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="gender" value="F"> Female
                            </label>
                        </div>
                        <div class="form-group college">
                        </div>
                        <div class="form-group courses">
                        </div>
                        <div class="form-group degree">
                        </div>
                        <div class="form-group year">
                        </div>
                        <div class="input-group">
                            <input type="hidden" name="sa" value="true" />
                        </div>
                        <input type="submit" class="btn btn-success" value="Register">
                        <br/><br/>
                    </form>
                </div>
            </center>
            <div class="main clearfix oldreg" style="display:none;">
                <div class="back">
                    <a>
                        <p style="cursor:pointer;">&nbsp;&nbsp;<i class="fa fa-arrow-left"></i>&nbsp;Back</p>
                    </a>
                </div>
                <br/>
                <center>
                    <form style="width:90%;" method="post" action="registerAsSA.php">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="reicon fa fa-envelope"></i></span>
                            <input id="email" type="text" class="form-control" name="email" placeholder="Email" onblur="validatemail(this)">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="reicon glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password" onblur="validatepass(this)">
                        </div>
                        <br>                            
                        <input type="submit" class="btn btn-success" value="Login"><br/>
                        <br>
                    </form>
                </center>
            </div>
        </div>
    </div>
</div>
<!-- about -->
<div class="modal fade about" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <h3 style="text-align:center;margin-top:30px">About</h3>
            <ul class="nav nav-tabs nav-justified">
                <li role="navigation" class="active">
                    <a data-toggle="tab" href="#ceg">
                        <h5><i class="fa fa-graduation-cap"></i>&nbsp;CEG</h5>
                    </a>
                </li>
                <li role="navigation">
                    <a data-toggle="tab" href="#ctf">
                        <h5><i class="fa fa-shield hospi_icon"></i>&nbsp;CTF</h5>
                    </a>
                </li>
                <li role="navigation">
                    <a data-toggle="tab" href="#unesco">
                        <h5><i class="fa fa-bank hospi_icon"></i>&nbsp;UNESCO</h5>
                    </a>
                </li>
                <li role="navigation">
                    <a data-toggle="tab" href="#cyclotron">
                        <h5><i class="fa fa-empire hospi_icon"></i>&nbsp;Cyclotron</h5>
                    </a>
                </li>
            </ul>
            <div class="tab-content" style="border:none">
                <div id="ceg" class="tab-pane fade in active">
                    <p>College of Engineering, Guindy, is the oldest engineering college in the country. Started in May, 1794 as a School of Survey and established as a college in 1859 under the Madras University, CEG has been a reservoir of technical excellence ever since its inception. At CEG, learning is a passion; excellence is the endeavour and knowledge, the goal.</p>
                </div>
                <div id="ctf" class="tab-pane fade">
                    <p>CEG Tech Forum was established in the year 2006. The sole aim behind its formulation was to nurture the scientific temper of CEG’s student populace via a three pronged network - industry, academia and the students. Over the years, it has developed into the all-encompassing Technical Forum of the college. At CTF, we aim, aspire and achieve more.</p>
                </div>
                <div id="unesco" class="tab-pane fade">
                    <p>Patronage is UNESCO’s highest form of support. It is granted to demonstrate the organization’s moral endorsement of exceptional activity. We take immense pride in being the first Techno-Management festival in the country to be accorded this high honour. As a mark of our sustained excellence, we have retained UNESCO&#39;s Patronage over the years.</p>
                </div>
                <div id="cyclotron" class="tab-pane fade">
                    <p>The Cyclotron symbolizes the celebration of the indomitable spirit of engineering and innovation. Just as a cyclotron accelerates a charged particle using high frequency, Kurukshetra provides that extra impetus for the engineer to excel.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--neon run-->
<div class="modal fade neonrun" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <h3 style="text-align:center;margin-top:30px">Neon Run</h3>
            <hr/>
            <blockquote>"Education is the movement from darkness to light."
             -Allan Bloom</blockquote>

             <p style="padding-left:10px;">The Neon Run is an initiative for spreading awareness about the need of education for the underprivileged.The Run is to take place in a safe and controlled environment within the college campus. <br/><br/>
                 Neon Run occurs in the presence of minimal light inorder to illuminate the various glow in the dark apparels(Neon Wrist bands,glow sticks etc) that would be provided.An e-certificate would also be provided to the participants.<br/><br/>
                 Proceedings from the run would go towards an NGO which will help carry out the mission in spreading education to everyone.Register yourself early since the  maximum participant count is limited.<br/><br/>
                 Come join us and help us light up the world.</p>
                 <div align="right" style="padding-right:50px;" ><button type="button" class="btn btn-success">SUBSCRIBE</button></div>
                 <br/><br/>
             </div>
         </div>
     </div>

     <!--e for educate-->
     <div class="modal fade eforeducate" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 style="text-align:center;margin-top:30px">E for Educate</h3>
                <hr/>
                <p style="padding-left:10px;">E-for-Educate, an e-waste drive with a charitable twist is being undertaken by CEG Tech Forum - the technical hub of the College of Engineering, Guindy, Anna University. CTF is the pillar of Kurukshetra 2016, which is an international techno-management fest under the patronage of UNESCO. What do we plan to do? Seen Wall-E? If you have, you know what we plan to do. And if you haven't, well, our aim is to spread awareness about the indiscriminate disposal and dumping of e-waste.<br/><br/>
                    Didn't many of us toss our Samsung Galaxy Note 3 when Note 4 came out? 'Fess up. You did :P With technology advancing by lightyears in nanoseconds, don't we tend to change our gadgets every year? Switching from CRT to LCD and from LED to 3D and 3D to 4K. Where do you think all our discarded gizmos go? In the dumpyards, overflowing landfills and lakesides. You must have seen the humongous pile of garbage that was unearthed during the Chennai floods. All our devil-may-care attitude has led to accumulation of e-waste of unmanageable proportions. We, comrades, have created a gigantic metal monster and I'm not talking about Iron Man.<br/><br/>
                    That's one half of our initiative. The other side tackles the alarming rate of school dropouts.<br/><br/>
                    We're considered one of the smartest people in the world but how much do we actually care about educating our kids and making sure that they stay through? About 1.4 million children in India in the age group of 6-11 drop out. This alarming fact is based on the UNESCO's Education for All(EFA) Global Monitoring Report on out of school populations.<br/><br/>
                    It is time to act.<br/><br/>
                    YOU can help. Yes, You sitting there and reading this. Don't just read it, forget it and walk away. This is your earth and your life as much as the other seven billion people on the planet. Taking baby steps to disposing our e-waste responsible is a move towards a greener, safer environment.<br/><br/>
                    The funds raised through the initiative would be used to support schooling for underprivileged children.</p>
                    <div align="right" style="padding-right:50px;" ><button type="button" class="btn btn-success">SUBSCRIBE</button></div>
                    <br/><br/>
                </div>
            </div>
        </div>
        <!--e for educate-->
        <div id="eforeducate" class="modal fade">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" style="color: rgb(255,255,255);" >E FOR EDUCATE</h4>
                    </div>
                    <div class="modal-body" style="max-height:500px;overflow:auto;">
                        <h6 class="desc">E-for-Educate, an e-waste drive with a charitable twist is being undertaken by CEG Tech Forum - the technical hub of the College of Engineering, Guindy, Anna University. CTF is the pillar of Kurukshetra 2016, which is an international techno-management fest under the patronage of UNESCO. What do we plan to do? Seen Wall-E? If you have, you know what we plan to do. And if you haven't, well, our aim is to spread awareness about the indiscriminate disposal and dumping of e-waste.<br/><br/>
                            Didn't many of us toss our Samsung Galaxy Note 3 when Note 4 came out? 'Fess up. You did :P With technology advancing by lightyears in nanoseconds, don't we tend to change our gadgets every year? Switching from CRT to LCD and from LED to 3D and 3D to 4K. Where do you think all our discarded gizmos go? In the dumpyards, overflowing landfills and lakesides. You must have seen the humongous pile of garbage that was unearthed during the Chennai floods. All our devil-may-care attitude has led to accumulation of e-waste of unmanageable proportions. We, comrades, have created a gigantic metal monster and I'm not talking about Iron Man.<br/><br/>
                            That's one half of our initiative. The other side tackles the alarming rate of school dropouts.<br/><br/>
                            We're considered one of the smartest people in the world but how much do we actually care about educating our kids and making sure that they stay through? About 1.4 million children in India in the age group of 6-11 drop out. This alarming fact is based on the UNESCO's Education for All(EFA) Global Monitoring Report on out of school populations.<br/><br/>
                            It is time to act.<br/><br/>
                            YOU can help. Yes, You sitting there and reading this. Don't just read it, forget it and walk away. This is your earth and your life as much as the other seven billion people on the planet. Taking baby steps to disposing our e-waste responsible is a move towards a greener, safer environment.<br/><br/>
                            The funds raised through the initiative would be used to support schooling for underprivileged children.<br/><br/>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .main -->
    <!-- random color -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/index1.js"></script>

    <!-- hospitality cms -->
    <script>
        var myArr = new Array();
        var xmlhttp = new XMLHttpRequest();
        var url = "http://cms16.kurukshetra.org.in/hospitalities.json";

        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                myArr.push(JSON.parse(xmlhttp.responseText));
                $('.hospi-loader').hide();
                myFunction(myArr);
            }
        };
        xmlhttp.open("GET", url, true);
        xmlhttp.setRequestHeader('origin', 'http');
        xmlhttp.send();

    </script>

    <!-- updates cms -->
    <script>
        var updatesArray = new Array();
        var updates = new XMLHttpRequest();
        var updatesUrl = "http://enct29fa5ae.kurukshetra.org.in/updates.json";

        updates.onreadystatechange = function() {
            if (updates.readyState == 4 && updates.status == 200) {
                updatesArray.push(JSON.parse(updates.responseText));
                typeUpdates(updatesArray);
            }
        };
        updates.open("GET", updatesUrl, true);
        updates.setRequestHeader('origin', 'http');
        updates.send();

    </script>

    <!-- gls cms -->
    <script>
        var glsArray = new Array();
        var gls = new XMLHttpRequest();
        var glsUrl = "http://enct29fa5ae.kurukshetra.org.in/gls.json";

        gls.onreadystatechange = function() {
            if (gls.readyState == 4 && gls.status == 200) {
                glsArray.push(JSON.parse(gls.responseText));
                displayGls(glsArray);
            }
        };
        gls.open("GET", glsUrl, true);
        gls.setRequestHeader('origin', 'http');
        gls.send();

    </script>



    <script type="text/javascript" src="js/randomColorMaster.js"></script>
    <script>
        $(document).ready(function randomBackground(){
           num2 = 0.8;
           var num1 = randomColor({luminosity: 'dark', hue: 'monochrome', format: 'rgbArray'});
           $(".random").animate({"background-color":"rgba("+num1[0]+","+num1[1]+","+num1[2]+","+num2+")"}, 5000);
           setTimeout(randomBackground, 5000);
       });
   </script>
   <script>
    $(document).ready(function(){
              var date_input=$('input[name="date"]'); //our date input has the name "date"
              var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
              var options={
                format: 'dd-M-yyyy',
                container: container,
                todayHighlight: true,
                autoclose: true,
            };
            date_input.datepicker(options);
        });
    </script>
    <script type='text/javascript' src='wp-content/themes/promo-gear/assets/js/jquery.easings.min68b3.js'></script>
    <script type='text/javascript' src='wp-content/themes/promo-gear/assets/js/jquery.carouFredSel-6.2.1-packed68b3.js'></script>
    <script type='text/javascript' src='wp-content/themes/promo-gear/assets/js/jquery.touchwipe.min68b3.js'></script>
    <script type='text/javascript' src='wp-content/themes/promo-gear/assets/js/jquery.mCustomScrollbar.min68b3.js'></script>
    <script type='text/javascript' src='wp-content/themes/promo-gear/assets/js/jquery.validate.min68b3.js'></script>
    <script type='text/javascript' src='wp-content/themes/promo-gear/assets/js/jquery.fullPage.min68b3.js'></script>
    <script type='text/javascript' src='wp-content/themes/promo-gear/assets/js/bootstrap.min68b3.js'></script>
    <script type='text/javascript' src='wp-content/themes/promo-gear/assets/js/bootstrap-select.min68b3.js'></script>
    <script type='text/javascript' src='wp-content/themes/promo-gear/assets/js/bootstrap-datepicker.min68b3.js'></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.7/js/bootstrap-dialog.min.js"></script>
    <script type='text/javascript' src='wp-content/themes/promo-gear/assets/js/isotope.pkgd.min68b3.js?ver=1'></script>
    <!-- the jScrollPane script -->
    <script type='text/javascript' src='js/register.js'></script>
    <!-- typed js -->
    <script type='text/javascript' src='js/typed.min.js'></script>


    <!-- form data -->
    <script src="js/list.js"></script>
    <script type='text/javascript' src='wp-content/themes/promo-gear/assets/js/main68b3.js'></script>
    <script>
            //populate form
            $(document).ready(function() {
                populateForm();
            });
            //switching events and workshops
            $( ".workshops-menu" ).click(function() {
                $(".events-details").hide();
                $(".workshops-details").show();
            });
            
            $( ".events-menu" ).click(function() {
                $(".workshops-details").hide();
                $(".events-details").show();            
            });
        </script>
        <script>
            //switching reg forms
            $( ".oldreglink" ).click(function() {
                $(".newreg").hide();
                $(".oldreg").show();            
            });
            $( ".back" ).click(function() {
                $(".oldreg").hide();
                $(".newreg").show();            
            });
        </script>                               
    </body>
    </html>
    <?php
    checkRegistration();
    checkLogin();
    checkSA();
    ?>