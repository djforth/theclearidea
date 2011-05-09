<?php
$body_class = 'contact'; 
$page_title = 'The Clear Idea | Contact'; /* Page title goes here */
$meta_description = 'Time to try and be different that will ensure you stand out from the crowd – time to get in touch.';  /* Meta description goes here */
include("includes/header.php");  
?>
     <div class="content">
        
        <div class="main" id="contact_title"><span class="hidden">Contact</span></div>
        

        


        
 <div id="form">
           <form id="contactForm" method="post" action="process.php"> 
            <p><strong> </strong><a href="mailto: chrish@theclearidea.com"></a></p>
            
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
                    <textarea id="message" name="message" cols="30" rows='5'></textarea>
                </div>
                
                 <div class="field buttonSubmit">
                <input type="image" src="images/send.png"  />
                </div>
             </fieldset>   
            
           </form> 
           <p>&nbsp;</p>
           <p><span class="ct1">Telephone: 	</span><br />
             0203 3846975</p>
<p><span class="ct2">Email: 	</span><br />
             <a href="mailto:sales@theclearidea.com">sales@theclearidea.com</a><br />
                  <a href="mailto:questions@theclearidea.com">questions@theclearidea.com</a></p> 
<p><span class="ct2">Head Office Address: 	</span><br />
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

