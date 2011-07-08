<?php
$body_class = 'idea';
$page_title = 'The Clear Idea | Idea'; /* Page title goes here */
$meta_description = 'Innovative marketing idea with a clear vision to deliver brand exposure, results and sales';  /* Meta description goes here */
include("includes/header.php");  
?>
 	<script type="text/javascript">
     // Swf object to add flash content
		// - swf path, div id, width, height, flash version, express load
		swfobject.embedSWF("swf/ideaGallery.swf", "ideasGallery", "580", "430", "9.0.0", "swf/expressInstall.swf");
	</script>
	<div id="ideasGallery">
		<img src="images/ideaGallery.gif" width="580" height="430" alt="Idea Gallery">
	</div>

     
     
<?php 
include("includes/footer.php"); 
?>
