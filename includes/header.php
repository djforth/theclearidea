<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title><?php echo $page_title ?></title>
    <meta name="google-site-verification" content="v4gm2M137JZO2NP9I8rOn7TqbpgaVfACRD_ssJH5Awo" />
    <link href="css/styles.css" rel="stylesheet" type="text/css" />

	<!--[if lte IE 8]>
	 	<link href="css/newIE.css" rel="stylesheet" type="text/css" />
	<![endif]-->

	<!--[if IE 8]>
	 <link href="css/newIE8.css" rel="stylesheet" type="text/css" />
	<![endif]-->

	<script src="js/jquery.js" type="text/javascript" ></script>
	<script src="js/cufon.js" type="text/javascript" ></script>
	<script src="js/Futura_700.font.js" type="text/javascript" ></script>
	<script src="js/custom.js" type="text/javascript" ></script>
	<script src="js/swfObject.js" type="text/javascript" ></script> 
	
</head>

<body class="<?php echo $body_class ?>">
    <div id="wrapper">
      <div id="header">
	    <!-- Replaced logo with hidden copy for SEO-->
        <h1 id="logo"><a href="/" class="mainLogo"><span class="hidden">theclearidea.com</span></a></h1>
        <div id="contactDetails">
            <div id="address">
              <div id="address2">
                <p><img src="../images/strapSml.png" alt="thinking inside the box" width="131" height="12" /></p>
              </div>
              <dl>
                <dt>Telephone:</dt>
                <dt class="pink">+44 (0)203 3846975<br />
                  <br />
                </dt>
                <dt>Email<br />
                  <a href="mailto:sales@theclearidea.com" class="email">sales@theclearidea.com</a><br />
                  <a href="mailto:questions@theclearidea.com" class="email">questions@theclearidea.com</a></dt>
              </dl>
			  
              <div class="social clear">
	              <?php if($body_class == "home"){?>
						<div class="join">Join <span>in!!!</span></div>
						<div class="icons">
							<p><a href="http://www.twitter.com/theclearidea"><img src="images/Twitter_icon.png" alt="twitter" width="26" height="26"  /></a></p>
			              	  <p><a href="http://www.facebook.com/#!/pages/The-Clear-Idea/116747785064958"><img src="images/facebook_icon.png" alt="facebook" width="26" height="26"  /></a></p>
						</div>
				  <?php }else { ?>
	              	  <p><strong>Follow the lorry on Twitter and Facebook</strong></p>
	              	  <p><a href="http://www.twitter.com/theclearidea"><img src="images/Twitter_icon.png" alt="twitter" width="26" height="26"  /></a></p>
	              	  <p><a href="http://www.facebook.com/#!/pages/The-Clear-Idea/116747785064958"><img src="images/facebook_icon.png" alt="facebook" width="26" height="26"  /></a></p>
                 <?php } ?>
              </div>
              <?php if($body_class == "home"){?>
				  <div class="panel" id="new_idea">
					<h3>NEW IDEAS</h3>
					<p>The options are limitless.  Please <a href="idea.php">click here</a> to see a few of our own 'thinking inside the box' ideas</p>
				  </div>
				  <div class="panel" id="new_video">
					<h3>NEW VIDEO</h3>
					<p>To accompany all of our pictures we've added a quick promotional video.
					Have a look <a href="media.php#video">click here</a></p>
				  </div>
			  <?php } ?>
          </div>
            
            </div>
        <div id="nav">
          <ul id="jsddm">
			    <li id="homeNav"><a href="index.php">home</a></li>
			    <li id="servicesNav"><a href="theidea.php">the idea</a></li>
			    <li id="examplesNav"><a href="gallery.php">gallery</a></li>
			    <li id="mediaNav"><a href="media.php">media</a></li>
			    <li id="ideaNav"><a href="idea.php">idea</a></li>
			    <li id="productionNav"><a href="production.php">production</a></li>
			    <li id="aboutNav"><a href="about-us.php">about us</a></li>
			    <li id="contactNav"><a href="contact.php">contact us</a></li>
			</ul>
        </div>
      </div>