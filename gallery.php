<?php
$body_class = 'examples'; 
$page_title = 'The Clear Idea|  Gallery'; /* Page title goes here */
$meta_description = 'Stand and stare at a marketing platform that will make your imagination run wild and the public stand still';  /* Meta description goes here */
include("includes/header.php");  
?>
      

      <div class="content">
        
        <p align="right"><img src="images/MB_logo.jpg" alt="mb_logo" width="206" height="82" /><br />
              <span class="sub_text">Official Partners of The Clear Idea</span></p>
        <!--<p align="right">&nbsp;</p>
        <h1 class="main">&nbsp;</h1>-->
        <h2 class="main" id="gallery_title"><span class='hidden'>Gallery</span></h2>
        <div class="main">
				<script type="text/javascript">
			        // Swf object to add flash content
					// - swf path, div id, width, height, flash version, express load
					swfobject.embedSWF("swf/clearideaGallery.swf", "gallery", "580", "430", "9.0.0", "swf/expressInstall.swf");
				</script>
				<div id="gallery">
					<!-- Alternative flash content this will be replaced by flash -->
					<img src="images/gallery.gif" width="580" height="430" alt="A trunk with an advertising of a Mercedes-Benz" />
					
				</div>
              </div>
        <h3 class="main" id="sponsor"><span class="hidden">Sponsors for 2011: Mercedes-Benz</span></h3>
        <p>Please use the gallery above for a few working examples of what can be achieved. </p>
</div>
<?php 
include("includes/footer.php"); 
?>
      
