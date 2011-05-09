<?php
$body_class = 'contact'; 
$page_title = 'Contact Us | The Clear Idea'; /* Page title goes here */
$meta_description = 'The Clear Idea: Contact us whatever the issue, we will endeavour to respond as soon as we can.';  /* Meta description goes here */
include("includes/header.php");  
?><title>The Clear Idea</title>
      
      
     <style type="text/css">
<!--
.style1 {
	color: #999999;
	font-weight: bold;
}
.style2 {
	color: #666666;
	font-weight: bold;
}
-->
     </style>
     <div class="content">
        
        <h1 class="main"><img src="images/contactHdr.png" alt="contact" width="87" height="14" /></h1>
        

        


        
 <div id="form">
           <form id="contactForm" method="post" action="process.php"> 
            <p><strong> </strong><a href="mailto: sales@theclearidea.com"></a></p>
            
            <fieldset>
                
                <div class="field">
                    <label for="name ">Name</label>
                    <input type="text" id="name" name="name" />
                </div>
                <div class="field">
                    <label for="company ">Company</label>
                    <input type="text" id="company" name="company" />
                </div>
                <div class="field">
                    <label for="phone ">Tel</label>
                    <input type="text" id="tel" name="phone" />
                </div>
                
                <div class="field">
                     <label for="email ">Email</label>
                     <input type="text" id="email" name="email" />
                </div>
                <div class="field">
                    <label for="subject ">Subject</label>
                    <input type="text" id="subject" name="subject" />
                </div>
                <div class="field">
                    <label for="message ">Message</label>
                    <textarea id="message" name="message"></textarea>
                </div>
                
                 <div class="field buttonSubmit">
                <input type="image" src="images/send.png"  />
                </div>
             </fieldset>   
            
           </form> 
           <p>&nbsp;</p>
           <p><span class="style1">Telephone: 	</span><br />
             0203 3846975<br />
    </p>
<p><span class="style2">Email: 	</span><br />
             <a href="mailto:sales@theclearidea.com">sales@theclearidea.com</a><br />
                  <a href="mailto:questions@theclearidea.com">questions@theclearidea.com</a></dt>
<p><span class="style2">Head Office Address: 	</span><br />
             The Clear Idea,
               Bugley Barton
             <br />
             Warminster, Wilts.
             <br />
           BA12 8HD </p>
 </div>
        
        
        
        
        </div>
     
    

    
     

     
<?php 
include("includes/footer.php"); 
?>

