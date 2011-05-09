<?php
$body_class = 'home';
$page_title = 'The Clear Idea | Home'; /* Page title goes here */
$meta_description = 'Innovative marketing idea with a clear vision to deliver brand exposure, results and sales';  /* Meta description goes here */
include("includes/header.php");  
?>
<div class="content">
        <div class="main right">
          <img src="images/MB_logo.jpg" alt="mb_logo" width="206" height="82" /><br />
          <span class="sub_text">Official Partners of The Clear Idea</span>
		</div>
        <div class="main">
		   	<script type="text/javascript">
		        // Swf object to add flash content
				// - swf path, div id, width, height, flash version, express load
				swfobject.embedSWF("swf/clearIdea.swf", "introAni", "580", "420", "9.0.0", "swf/expressInstall.swf");
			</script>
			<div id="introAni">
				<!-- Alternative flash content this will be replaced by flash -->
				<img src="images/homepage.gif" width="580" height="430" alt="Cube of inspirational text" />
			
			</div>
        </div>
  		<p>&nbsp;</p>
        <h2 id="inside"><span class="hidden">Thinking inside the box</span></h2>
        <p>The Clear Idea is a new, innovative and exclusive concept designed and engineered to publicly promote products and services via a transparent mobile box. This unique, ground breaking marketing approach can be tailored to your client&rsquo;s requirements, placing a static or portable advertisement at the heart of your target audience, wherever and whenever you choose. We&rsquo;re delighted to announce Mercedes &ndash; Benz as the Official Partners of The Clear Idea.</p>
  		<p><img src="images/MB_logo.jpg" alt="mb_logo" width="206" height="82" /></p>
        <p><em>Official Partners of The Clear Idea</em></p>
</div>
     
     
<!--
Not sure what this is for???
<div id="features"><div class="subRight buildingBlocks"></div>
        
     </div>

 -->
     
<?php 
include("includes/footer.php"); 
?>
