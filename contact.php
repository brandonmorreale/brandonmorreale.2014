<?php include 'header.php'; ?>
<title>Contact | Brandon Morreale – Web Designer, Front-End Developer</title>
<meta name="author" content="Brandon Morreale" />
<meta name="keywords" content="Graphic Designer, Art Director, Milwaukee, Shorewood, Oak Park, Chicago, Web Design, Websites, Marketing, Creative Designer, Front End Designer, Freelance" />
<meta name="description" content="Brandon Morreale is a web designer and developer offering web design as well as front-end programming, HTML5, CSS3, cms, javascript, and jquery services. He is based in Milwaukee." />
<?php include 'scripts.php'; ?>
<?php include 'navigation.php'; ?>

<div id="contact-header">
	</div>
<div id="contact" class="container">
	<div class="content">
		<h2>Get in touch if you're looking to hire me, need a freelance designer, or just want to say hello.</h2>
		<span class="availability available">I am currently available for new projects</span>
		<!-- <div class="methods">
			<div class="phone">
				<h3>Phone</h3>
				<span>(312) 646.8999</span>
			</div>
			<div class="form">
				<h3>Form</h3>
				<span>Please fill out the form below</span>
			</div>
			<div class="email">
				<h3>Email</h3>
				<span><a href="mailto:hello@brandonmorreale.com">hello@brandonmorreale.com</a></span>
			</div>
			<div class="clearfix"></div>
		</div> -->
		<div class="form">
			<form id="form" method="post" action="process.php">
			  <div class="group">
				  <label>name</label>
		          <input name="name" type="text" id="name" size="29">
			  </div>
			  <div class="group">
				  <label>email</label>
		          <input name="email" type="text" id="email" size="29">
			  </div>
			  <div class="group">
				  <label>message</label>
		          <textarea name="message" rows="6" cols="28"></textarea>
			  </div>
			  <div class="group buttons">
		          <input name="submit" type="submit" class="btn" value="Submit" />
		          <input type="hidden" name="config" value="0" />
			  </div>
	        </form>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>
