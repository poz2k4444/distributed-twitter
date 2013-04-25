<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Twitter!</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script><!--Common jQuery plugin here -->

<?php 
	include("PHP/Perfil.php");
	include("PHP/Usuario.php");
	//include("PHP/Muro.php");
	session_start();
	if($_SESSION['name']!=""){
?>

<!-- iFrame starts here -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script>
		!window.jQuery && document.write('<script src="include/jquery-1.4.3.min.js"><\/script>');
	</script>
	<script type="text/javascript" src="./fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="./fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="./fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<!-- iFrame ends here -->

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




<link href="include/ad.css" type="text/css" rel="stylesheet" /><!--ad css here -->

<script type="text/javascript">
//Contact starts here	
	$(function(){
		$('#contactAt').contactable({
	 		recipient: 'email@companyname.com',
	 		subject: 'The Quick Message'
	 	});
	});
	
//Contact Ends here

//iFrame starts here
			$("#various3").fancybox({
				'width'				: '75%',
				'height'			: '75%',
				'autoScale'			: true,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});
//iFrame ends here	

		
$(document).ready(function(){

//Twit start here
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
		
//Twitter ends here	

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
            <em class="ttip">tw design</em>
            <ul id="menu">
                <li><a href="parcheChingon.php"><span>Perfil </span></a></li>
                <li><a class="active" href="Capirotada.php"><span>Muro</span></a></li>
				<li><a href="refrescar.php"><span>Refrescar</span></a></li>
                <li><a href="logOut.php"><span>Log Out</span></a></li>
            </ul>
            
        </div>
        <div class="banner">
		
        
	<div>
        </div>

        
        
      
    </div>
    </div>
</div>
</div>

<div id="footer">
	<div id="footer_portion">
        
          
            <?php
			
		//foreach($array as $usuario){
		?><div class="footerleft">
        	<p class="Fleft1">
			
			</p>
		</div>
	<?php
	//}
?>
<?php
	
	$array1 = XMLHandler::loadCapirotada();
	//$array = $xml->arrayTwitt('rss.xml')
	//print_r($array1);
	for($i = 0; $i<sizeof($array1); $i++){
		$impresion = $array1[$i];
		
		?><div class="bannerbtm">
                <img src="fotos/<?php echo "$impresion->Nick";?>.jpg" align="left"  alt="" />
                <h2><?php echo "$impresion->Nick"; ?></h2>
                <p>
				<?php echo "$impresion->Mensaje\n"; ?>
                </p>
				<p>
				<?php echo "$impresion->Fecha\n"; ?>
				</p>
				
        </div>
	<?php
	}
?>
        
            
            
        
    </div>
</div>


<!--add this div at the end of all divs-->
<div id="fotplug"></div>

<script language="JavaScript" src="include/scroll.js" type="text/javascript"></script>


</body>
</html>
<?php
	}else{
		@header("Location: index.php") ;
	}
?>