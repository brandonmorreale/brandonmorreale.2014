<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
<meta charset="utf-8">
<!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/i/378 -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Holistic Nutrition Center - Web Design | Brandon Morreale – Creative Designer, Art Director, Chicagoan</title>
<meta name="author" content="Brandon Morreale" />
<meta name="keywords" content="Graphic Designer, Art Director, Oak Park, River Forest, Chicago, Web Design, Websites, Marketing, Creative Designer, Front End Designer, Freelance" />
<meta name="description" content="Brandon Morreale is a creative designer and art director offering freelance web and print design, as well as front-end programming, HTML, CSS, Wordpress, and javascript services. He is based in Chicago." />
<!-- Mobile viewport optimized -->
<meta name="viewport" content="width=device-width">
<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="stylesheet" href="css/boilerplate.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/modal.css">
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<?php include("js/cycle.php"); ?>
<!-- Start of Woopra Code -->
<script type="text/javascript">
function woopraReady(tracker) {
    tracker.setDomain('brandonmorreale.com');
    tracker.setIdleTimeout(300000);
    tracker.track();
    return false;
}
(function() {
    var wsc = document.createElement('script');
    wsc.src = document.location.protocol+'//static.woopra.com/js/woopra.js';
    wsc.type = 'text/javascript';
    wsc.async = true;
    var ssc = document.getElementsByTagName('script')[0];
    ssc.parentNode.insertBefore(wsc, ssc);
})();
</script>
<!-- End of Woopra Code -->
</head>

<body>
<div id="mask"></div>
<!--[if lt IE 7]>
<p class=chromeframe>Your browser is unsupported. <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http:•www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p>
<![endif]-->
<header> </header>
<div id="main">
  <div id="sub_branding">
    <h1><a href="index.php"><img src="img/branding_logo_sm.png" alt="Brandon Morreale, Creative Designer and Front End Developer"></a></h1>
  </div>
  <div class="sub-main">
    <?php include 'navigation.php'; ?>
    <h2><p class="project-title">Holistic Nutrition Center</p></h2>
      <h3><p class="categories" >Website Design&nbsp;&nbsp; <img src="img/x.gif" alt="X">&nbsp;&nbsp; Art Direction </p></h3>
    
  </div>
  <div id="pagecontent">
    <div id="content-left">
      <p>With a message in mind, the Holistic Nutrition Center demanded a website that was earthy and organic, that served current clients seeking information, recipes and class notes; while also promoting programs to prospective students. This center for accessible information allowed us to create a comfortable browsing space, where visitors can gather information and encouragement.</p>
      <div class="timeline"><a id="prev2" href="#"> Previous</a> / <a id="next2" href="#">Next Image</a> <span class="slideCaption">1</span><span class="thePager"></span></div> 
      <div class="slideshow">
       <img class="gallery" src="img/web-hnt-2.jpg" alt="Evo Exhibits Website" >
    <img class="gallery" src="img/web-hnt-3.jpg" alt="Evo Exhibits Website" >
    <img class="gallery" src="img/web-hnt-4.jpg" alt="Evo Exhibits Website" >
    </div>
    
    
    </div>
    <div id="content-right">
      <?php include 'project-list.php' ?>
    </div>
  </div>
  <?php include 'footer-about.php' ?>
</div>
<?php include 'footer-contact.php' ?>
<?php include 'contact-form.php' ?>
<?php include 'footer-scripts.php' ?>
</body>
</html>