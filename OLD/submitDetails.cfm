
<cfif isDefined("form.email")>
<cfelse><cflocation url="contactus.html">
</cfif>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Clear Idea - About Us</title>
<link href="style2.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />

<script>
			

function FormValidator(myForm)

{

 


   if (myForm.tel.value == null || myForm.tel.value == "")
  {
    alert("Please enter telephone number.");
    return (false);
  }
  
   if (myForm.name.value == null || myForm.name.value == "")
  {
    alert("Please enter a contact name.");
    return (false);
  }
  
  if (myForm.email.value == null || myForm.email.value == "")
  {
    alert("Please enter email.");
    return (false);
  }

 var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
   var address = myForm.email.value;
   if(reg.test(address) == false) {
      alert('Invalid Email Address');
      return false;
  }
  
  
}


		</script>

</head>

<body>

<div class="outercontainer">
	<div class="logoheader">
    	<div style="float:left"><img src="images/theclearideaLOGO2.gif" alt="The Clear Idea" />
        	<div class="strapbox2">'thinking inside the box'</div>
        </div>
       
        <div style="float:right">
        	<a href="index.html" class="menuitem2" style="background-color:#262626; margin-left:0px">home</a>
            <a href="theidea.html"  class="menuitem2" style="background-color:#00b0f0">the idea</a>
            <a href="examples.html"  class="menuitem2" style="background-color:#984807">examples</a>
            <a href="aboutus.html"  class="menuitem2" style="background-color:#ea041a">about us</a>
           	<a href="contactus.html"  class="menuitem2" style="background-color:#77933c">contact us</a>
           <div class="right clearleft margintop30" id="sales">
            	
                <div class="right marginleft10 marginbottom10"><a href="#"><img src="images/twitter.jpg" alt="" /></a></div>
                <div class="right marginleft10"><a href="http://www.facebook.com/pages/The-Clear-Idea/116747785064958#!/pages/The-Clear-Idea/116747785064958"><img src="images/facebook.jpg" alt="" /></a></div>
                
            </div>
            
           
        </div>
        
    </div>
   
    <div class="pagebar2 contactus">
    	<div class="pagebarInner2 contactus">
        	<div class="headerbox_contactus">Contact Us</div>
            <div class="right  salesteamwhite">'for prices please <a href="mailto:sales@theclearidea.com" class="white">email the sales team</a>'</div>
        </div>
    </div>
    
    <div class="maincontent contact">
    <div class="spacer">&nbsp;</div>
    <div class="spacer">&nbsp;</div>
    	
        <div class="floatleft">
        	<div class="address">
           <cfmail to="questions@theclearidea.com" cc="info@turningworm.co.uk" from="#form.email#"  subject="The Clear Idea Enquiry - #form.subject#" type="html">
                           <style>
                           td {font-family:Arial, Helvetica, sans-serif}
                           </style>
                           <table>
                           	<tr>
                            	<td>You have received a new enquiry from The Clear Idea website</td>
                            </tr>
                            <tr>
                            	<td>
                                	<table>
                                    	<tr>
                                        	<td>Contact Name</td>
                                            <td>#form.name#</td>
                                        </tr>
                                        <tr>
                                        	<td>Company name</td>
                                            <td>#form.company#</td>
                                        </tr>
                                       
                                        <tr>
                                        	<td>Telephone</td>
                                            <td>#form.tel#</td>
                                        </tr>
                                       
                                        	
                                        <tr>
                                        	<td>Email</td>
                                            <td>#form.email#</td>
                                        </tr>
                                        
                                        <tr>
                                        	<td>Subject</td>
                                            <td>#form.subject#</td>
                                        </tr>
                                        <tr>
                                        	<td valign="top">Message</td>
                                            <td>#form.message#</td>
                                        </tr>
                                        
                                    </table>
                                </td>
                            </tr>
                           
                           </table>
                           </cfmail>
           Thank you for submitting your enquiry.  We will get back to you ASAP.
            </div>
        </div>
		




    <div class="spacer60">&nbsp;</div>
    <div class="spacer60">&nbsp;</div>
    <div class="spacer60">&nbsp;</div>
	<div style="margin-left:40px"><img src="images/mb_large.gif" alt="mercedes benz" /></div>
    </div>
  <div class="bottombar">
  		
    	<div class="bottombarInner">
        <div class="floatleft"><div class="strapbox">'Official Sponsors 2011'</div></div>
        <div class="right">Copyright &copy;2011  <span class="grey">The</span> Clear <span class="theideatext">Idea</span> Ltd</div>
        </div>
  </div>
</div>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20612137-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>


</body>
</html>
