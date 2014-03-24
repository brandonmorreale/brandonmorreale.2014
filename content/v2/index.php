<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>All Things Go | Brandon Morreale – Creative Designer, Art Director, Chicagoan</title>
<meta name="author" content="Brandon Morreale" />
<meta name="keywords" content="Graphic Designer, Art Director, Oak Park, River Forest, Chicago, Web Design, Websites, Marketing, Creative Designer, Front End Designer, Freelance" />
<meta name="description" content="Brandon Morreale is a creative designer and art director offering freelance web and print design, as well as front-end programming, HTML, CSS, Wordpress, and javascript services. He is based in Chicago." />
<meta name="viewport" content="width=device-width">
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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-29127337-1', 'brandonmorreale.com');
  ga('send', 'pageview');

</script>
<!-- End of Woopra Code -->
</head>

<body>
<div id="mask"></div>
<!--[if lt IE 7]>
<p class=chromeframe>Your browser is unsupported. <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p>
<![endif]-->
<header> </header>
<div id="main">
  <div id="branding">
    <h1><a href="index.php"><img src="img/branding_logo.png" alt="Brandon Morreale, Creative Designer and Front End Developer"></a></h1>
  </div>
  <div class="project-main">
    <?php include 'navigation.php'; ?>
    <div id="tag">
      <h2>Brandon Morreale is a designer, front-end developer, <br>Chicagoan, 
        half miler, and craft beer enthusiast.<h2>
    </div>
    
  </div>
  <a name="work"></a>
  <?php include 'project-select.php' ?>
  <a name="about"></a>
  <?php include 'footer-about.php' ?>
</div>
<?php include 'footer-contact.php' ?>
<?php include 'contact-form.php' ?>
<?php include 'footer-scripts.php' ?>


</body>
</html>