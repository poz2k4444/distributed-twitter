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
<link href="include/ad.css" type="text/css" rel="stylesheet" /><!--ad css here -->

<script type="text/javascript">
//Contact starts here	
//	$(function(){
//		$('#contactAt').contactable({
//	 		recipient: 'email@companyname.com',
//	 		subject: 'The Quick Message'
//	 	});
//	});
	
	

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
});	
	
</script>
<script>
function cierra()
{
parent.$.fn.fancybox.close();
}
</script>

<script language="javascript">

	
	
	
	// define the function within the global scope
    $.fn.MessageBox = function(msg) {
        alert(msg);
    };

    // or, if you want to encapsulate variables within the plugin
    (function($) {
        $.fn.MessageBoxScoped = function(msg) {
            alert(msg);
        };
    })(jQuery); //<-- make sure you pass jQuery into the $ parameter
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



<script type="text/javascript"></script>

</head>

				<?php
					
					$usuario = Perfil::findUser($_SESSION['name'], $_SESSION['pass']);
					$perfil = new Perfil($usuario);
					$array = array();
					//$array = $perfil::getAmigos();
					$array = XMLHandler::loadFrends();?>
					<div class="bannerLeft">
					<h2>Amigos</h2>
					</div>
				
<div id="footer">
	<div id="footer_portion">
        
          
            <?php
			
		foreach($array as $usuario){
		?><div class="footerleft">
			<p class="Fleft1"><a href="perfilAmigo.php?friend=<?php print_r($usuario->getNombre());?>" target="_parent"><?php print_r($usuario->getNombre());?></a>
			<img src="fotos/<?php print_r($usuario->getNombre()); ?>.jpg" alt="Just in case" title="Tooltip" height="100px" width="100px" />

			</p>
		</div>
	<?php
	}
?>
</div>


<!--add this div at the end of all divs-->
<div id="fotplug"></div>




</body>
</html>
