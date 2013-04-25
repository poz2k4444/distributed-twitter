<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Twitter!</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script><!--Common jQuery plugin here -->
<?php 

	include("PHP/XMLHandler.php");
	include("PHP/Twitt.php");
?>
<!--Contact starts here -->
<script type="text/javascript" src="include/jquery.twit.min.js"></script>
<script type="text/javascript" src="include/jquery.twit.js"></script>
<link href="include/jquery.twit.css" type="text/css" rel="stylesheet" />
<!--Contact ends here -->

<!--Twitter start here -->
<script type="text/javascript" src="include/jquery.example.js"></script>
<script type="text/javascript" src="include/jquery.validate.pack.js"></script>
<script type="text/javascript" src="include/jquery.contactable.js"></script>
<link rel="stylesheet" href="include/contactable.css" type="text/css" />
<!--Twitter ends here -->

<!-- iFrame starts here -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script>
		!window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
	</script>
	<script type="text/javascript" src="./fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="./fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="./fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<!-- iFrame ends here -->
<link href="include/ad.css" type="text/css" rel="stylesheet" /><!--ad css here -->

<script type="text/javascript">
//Contact starts here	
//	$(function(){
//		$('#contactAt').contactable({
//	 		recipient: 'email@companyname.com',
//	 		subject: 'The Quick Message'
//	 	});
//	});
	
//Contact Ends here

		
$(document).ready(function(){

/*/Twit start here
		twitShowStatus = 1;
		function twitShow() {
				$('div#twitable').animate({"marginLeft": "-=5px"}, "fast"); 
				$('#twitform').animate({"marginLeft": "-=0px"}, "fast");
				$('div#twitable').animate({"marginLeft": "+=523px"}, "slow"); 
				$('#twitform').animate({"marginLeft": "+=520px"}, "slow");
				$('.twitContainer .close').css({right: '-4px'});
				twitShowStatus = 0;
			}
		function twitHide() {
				$('#twitform').animate({"marginLeft": "-=520px"}, "slow");
				$('div#twitable').animate({"marginLeft": "-=523px"}, "slow").animate({"marginLeft": "+=5px"}, "fast"); 
				$('.twitContainer .close').css({right: '0px'});
				twitShowStatus =1;
			}
		
			$('div#twitable').click(
				function() {
				if(twitShowStatus==1)
					twitShow();
				else
					twitHide();
			
			});
		
		username = 'templateworldIN';// twitter User name
		$('#twitform').twit(username);
		$('#twitform').twit(username, {
		limit: 5,
		label: 'Twitter',
		title: 'My tweets'
		});
		
//Twitter ends here*/	

//iFrame starts here
			$("#various3").fancybox({
				'width'				: '75%',
				'height'			: '75%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});
//iFrame ends here
//Ad starts	here	
//-HeaderAd starts
		$('div#headerBt').click(
		function() {
			$('#headerContent').animate({"marginTop": "-=60px"}, "slow");
			$(this).animate({"marginTop": "-=60px"}, "slow").animate({"marginTop": "+=5px"}, "fast"); 
			
			$('#TotalBodyId').animate({"marginTop": "-=60px"}, "slow");
			$('#TotalBodyId').css({backgroundPosition: "0 0"});
			
		});

//-FooterAd starts
		$('div#footerBt').click(
		function() {
			$('#footerContent').animate({"marginBottom": "-=45px"}, "slow");
			$(this).animate({"marginBottom": "-=45px"}, "slow").animate({"marginBottom": "+=5px"}, "fast"); 
			$('#fotplug').hide('slow');
		});
		
//Ad ends here
							
});	
	
</script>
<!--foot support-->
<style type="text/css" media="all">
#fotplug{
	width:100%;
	height:40px;
	float:left;
}
</style>
<style type="text/css">/*<![CDATA[*/ #topcontrol{ opacity: 3; z-index: 9000; } /*]]>*/</style>
<script type="text/javascript" src="js/easySlider1.5.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){	
			$("#slider").easySlider({											   	
                auto: true,
				continuous: true,
				orientation: 'vertical'
			});
		});	
	</script>



<script src="js/index.js" type="text/javascript"></script>

</head>


<!--Contact starts here -->
<div id="contactAt">
</div>
<!--Contact ends here -->

<!--Twitter starts here -->
<div id="twitContent">
	<div id="twitable"></div>
	<div id="twitform" class="twitContainer lastNode">
	</div>
</div>
<!--Twitter ends here -->

<div id="mainSub">
<div id="mainWrapper">
    <div id="main">
        <div id="topPortion">
            <h1><a href="index.php"><img src="images/logo.png" alt="" /></a></h1>
            
            
        </div>
        <div class="banner">
<div class="bannerLeft p">
              <h2>Iniciar Sesion</h2>
                <form id="form1" name="form1" method="post" action="login.php">
                  
                  <p>Nombre</p>
                    <label for="txtNombre"></label>
                    <input type="text" name="txtNombre" id="txtNombre" />
                  <p>Contraseña</p>
					<label for="txtPass"></label>
                    <input type="password" name="txtPass" id="txtPass" />
                 </form>
            <a class="read" href="alta.php">Registrarse</a>
            <a class="read" href="javascript:document.form1.submit();return false;">Iniciar Sesion</a>
          </div>
           
			

            
    </div>
        
        <div class="inner">
        	
      </div>
        	<div class="innerMid"></div>
        	<div class="innerRight"></div>
    </div>
    </div>
</div>
</div>

<div id="footer">
	<div id="footer_portion">
        <div class="footerleft">
        </div>
        <div class="footerRight">
        	
        </div>
    </div>
</div>


<!--add this div at the end of all divs-->
<div id="fotplug"></div>

<script language="JavaScript" src="include/scroll.js" type="text/javascript"></script>


</body>
</html>
