$(document).ready(function(){

    
    Cufon.replace('h2');
    Cufon.replace('h3');
    //Cufon.replace('h4');
    Cufon.replace('.content dt');
    
    
     var dropNav = $('div#nav ul#jsddm li.lvlOne ul')
    
    dropNav.mouseover(function(){
        
        $(this).prev().addClass('active');
        
        }).mouseout(function(){
        
        $(this).prev().removeClass('active');
        
        });
    


    
var timeout    = 500;
var closetimer = 0;
var ddmenuitem = 0;

function jsddm_open()
{  jsddm_canceltimer();
   jsddm_close();
   ddmenuitem = $(this).find('ul').css('visibility', 'visible');}

function jsddm_close()
{  if(ddmenuitem) ddmenuitem.css('visibility', 'hidden');}

function jsddm_timer()
{  closetimer = window.setTimeout(jsddm_close, timeout);}

function jsddm_canceltimer()
{  if(closetimer)
   {  window.clearTimeout(closetimer);
      closetimer = null;}}

$(document).ready(function()
{  $('#jsddm > li').bind('mouseover', jsddm_open)
   $('#jsddm > li').bind('mouseout',  jsddm_timer)});

document.onclick = jsddm_close;


    


});

