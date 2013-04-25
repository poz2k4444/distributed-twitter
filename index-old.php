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
	session_start();
	$user = unserialize($_SESSION['user']);
	print_r($_SESSION['user']);
?>
//<!--Contact starts here -->
//<script type="text/javascript" src="include/jquery.twit.min.js"></script>
//<script type="text/javascript" src="include/jquery.twit.js"></script>
//<link href="include/jquery.twit.css" type="text/css" rel="stylesheet" />
//<!--Contact ends here -->

//<!--Twitter start here -->
//<script type="text/javascript" src="include/jquery.example.js"></script>
//<script type="text/javascript" src="include/jquery.validate.pack.js"></script>
//<script type="text/javascript" src="include/jquery.contactable.js"></script>
//<link rel="stylesheet" href="include/contactable.css" type="text/css" />
//<!--Twitter ends here -->

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
            <h1><a href="index.html"><img src="images/logo.png" alt="" /></a></h1>
            <em class="ttip">tw design</em>
            <ul id="menu">
                <li><a class="active" href="index.html"><span>Home </span></a></li>
                <li><a href="aboutus.html"><span>About&nbsp;Us</span></a></li>
                <li><a href="blog.html"><span>Blog</span></a></li>
                <li><a href="services.html"><span>Services</span></a></li>
                <li><a href="portfolio.html"><span>Portfolio</span></a></li>
                <li><a href="contact.html"><span>Contact&nbsp;Us</span></a></li>
            </ul>
        </div>
        <div class="banner">
            <div class="bannerLeft">
                <h2>Suspendisse consectetue<br />dignissim enenatis.</h2>
                <p>
                    Etiam enim. Suspendisse imperdiet cursus nisi. Maecenas sed nisl nec lectus commodo interdum. Cras interdum, nulla ut posuere luctus, est 
                    erat fringilla est, vel lobortis odio mi a purus. Vivamus sit amet felis. Vivamus et justo in nunc pharetra semperorbi posuere.
                </p>
				<p>
				<?php
					
					echo $_SESSION['name'];
					echo $_SESSION['nick'];
					//print_r($_SESSION['user']);
				?>
				</p>
                <a class="read" href="more.html">Read More</a>
                <a class="info" href="more.html">Sign Up Now!</a>
            </div>
            <div class="bannerRight">
                <div id="slider">
                    <ul>
                        <li><img src="images/banner_img.png" align="right" alt="" /></li>
                        <li><img src="images/banner_img2.png" align="right" alt="" /></li>
                        <li><img src="images/banner_img3.png" align="right" alt="" /></li>
                        <li><img src="images/banner_img4.png" align="right" alt="" /></li>
                    </ul>
                </div>
            </div>
			<?php
	$xml = new XMLHandler();
	$array = $xml->arrayTwitt('rss.xml');
	//$array = $xml->arrayTwitt('rss.xml')
	//print_r($array);
	
	
	//echo "HOLA MUNDO";
	for($i = 0; $i<sizeof($array); $i++){
		$impresion = $array[$i];
		
		?><div class="bannerbtm">
                <img src="images/banner_btm_img.png" align="left"  alt="" />
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
        
        <div class="inner">
        	<div class="innerLeft">
            	<h3>Who We Are</h3>
                <p class="contd"><b>Etiam dictum. Nunc enim. Sed massa tellus, aliquam rhoncus, venenatis quis, suscipit aclibero.</b></p>
                <p class="contd">
                	Praesent odio tellus, posuere sed, sed, fermentum at, orci. Aenean arcu tortor, suscipit vitae, hendrerit condimentum, dapibus ac, 
                    nurabitur temp pornec dapibus placerat ipsum posuere luctus.
                </p>
                <p class="contd">
                	Nulla facilisi. Aliquam ut leo quis adipiscing faucibus. Mauris non quam ac eros rutrum fringilla. Quisque ut turpis. Nullam 
                    rhoncus feugiat quaenim nibh, fermentum sed, lobortis ac, pellentesque ut. Donec pretium, felis eget ultrices rhoncus, dui lacus 
                    convallis tortor, at mollis erat risus ac dui. Donec mattis, quis commodo egestas, pede ipsum porttitor magna, eget scelerisque 
                    metus massa in nequetiam porttitoodio pivamus vulputate egestas abitu.
                </p>
                <a class="readmore" href="more.html">Read more</a>
            </div>
        	<div class="innerMid">
            	<h3>Featured Services</h3>
                <p class="contd">
                	Aliquam ut leo quis adipiscing faucibus. Mauris non quam ac eros rutrum fringillut turpis. Nullam rhoncus feugiat quaenim nibh, fermentum sepellente.
                </p>
                <ul class="innerBtm">
                	<li><a href="more.html">Pellentesque rhoncus consequat metus</a></li>
                    <li><a href="more.html">Suspendisse et nulla vel elit blandit ornare</a></li>
                    <li><a href="more.html">Suspendisse ultricies scelerisque est</a></li>
                    <li><a href="more.html">Etiam id lorem fermentum arcu interdum</a></li>
                    <li><a href="more.html">Praesent sed mauris sed ligula laoreet</a></li>
                    <li><a href="more.html">Duis in tortor ut diam molestie interdum.</a></li> 
                    <li><a href="more.html">Praesent ac enim ac urna mattis ultrices</a></li>
                    <li><a href="more.html">Etiam sit amet ante quis sapien suscipit</a></li>
                    <li><a href="more.html">Sed non eros in dui tincidunt posuere</a></li>
                </ul>
                <a class="readmore" href="more.html">Read more</a>
            </div>
        	<div class="innerRight">
            	<h3>News &amp; Events</h3>
                <ul class="Righttop">
                    <li>
                    	<p class="date"><b>04</b><br />Jan</p>
                        <p class="news">
                            Daecenas sed nisl nec lectus commodo Cras interdum, nulla ut posuere luctus, est erat fringilla odio mfelis 
                            <a href="more.html">more></a>
                        </p>
                    </li>
                    <li>
                    	<p class="date"><b>03</b><br />Jan</p>

                        <p class="news">
                            Saecenas sed nisl nec lectus commodo Cras interdum, nulla ut posuere luctus, est erat fringilla odio mfelis 
                            <a href="more.html">more></a>
                        </p>
                    </li>
                    <li>
                    	<p class="date"><b>02</b><br />Jan</p>

                        <p class="news">
                            Caecenas sed nisl nec lectus commodo Cras interdum, nulla ut posuere luctus, est erat fringilla odio mfelis 
                            <a href="more.html">more></a>
                        </p>
                    </li>
                    <li class="nobrd">
                    	<p class="date"><b>01</b><br />Jan</p>

                        <p class="news">
                            Naecenas sed nisl nec lectus commodo Cras interdum, nulla ut posuere luctus, est erat fringilla odio mfelis 
                            <a href="more.html">more></a>
                        </p>
                    </li>
                </ul>
                <a class="readmore1" href="more.html">View all news</a>
            </div>
        </div>
    </div>
</div>
</div>

<div id="footer">
	<div id="footer_portion">
        <div class="footerleft">
        	<p class="Fleft1">Your Copyright Info Here.</p>
            <ul class="footerBtm2">
                <li><a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>|</li>
                <li><a href="http://validator.w3.org/check?uri=referer"> XHTML</a>|</li>
                <li><a href="privacypolicy.html">Privacy Policy</a>|</li>
                <li><a href="sitemap.html">Sitemap</a>|</li>
                <li><a href="#">RSS&nbsp;Feed</a></li>
            </ul>
            <p class="footerBtm">Designed by: <strong><a href="http://www.templateworld.com" title="Template World" target="_blank">Template World</a></strong></p>
        </div>
        <div class="footerRight">
        	<p>
                <b>Address: Company, where you located</b> <br />
                Telephone: 123-456-7890<br />
                Email: email@companyname.com<br />
            </p>
        </div>
    </div>
</div>


<!--add this div at the end of all divs-->
<div id="fotplug"></div>

<script language="JavaScript" src="include/scroll.js" type="text/javascript"></script>


</body>
</html>
