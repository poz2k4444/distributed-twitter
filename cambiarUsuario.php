<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Untitled Form</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
<script type="text/javascript" src="calendar.js"></script>
</head>
<body id="main_body" background="main_bg.png">
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Untitled Form</a></h1>
		<form id="form_359519" class="appnitro"  method="post" action="camUsForm.php">
					<div class="form_description">
			<h2>Untitled Form</h2>
			<p>This is your form description. Click here to edit.</p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Nick </label>
		<div>
			<input id="element_1" name="element_1" class="element text medium" type="text" maxlength="255" value="<?php echo $_SESSION['nick']; ?>"/> 
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Nombre </label>
		<span>
			<input id="element_2_1" name= "element_2_1" class="element text" maxlength="255" size="8" value="<?php echo $_SESSION['name']; ?>"/>
			
		</li>		<li id="li_17" >
		<label class="description" for="element_17">Password </label>
		<div>
			<input id="element_17" name="element_17" class="element text medium" type="password" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_17" >
		<label class="description" for="element_7">Password Anterior</label>
		<div>
			<input id="element_7" name="element_7" class="element text medium" type="password" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Sexo </label>
		<div>
		<select class="element select medium" id="element_3" name="element_3"> 
			<option value="Default" selected=""><?php if($_SESSION['sexo']== "M") echo "Masculino"; else echo "Femenino"; ?></option>
<option value="M" >Masculino</option>
<option value="F" >Femenino</option>

		</select>
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">Fecha de nacimiento </label>
		<span>
			<input id="element_4_1" name="element_4_1" class="element text" size="2" maxlength="2" value="<?php echo $_SESSION['date'][0].$_SESSION['date'][1]; ?>" type="text"> /
			<label for="element_4_1">DD</label>
		</span>
		<span>
			<input id="element_4_2" name="element_4_2" class="element text" size="2" maxlength="2" value="<?php echo $_SESSION['date'][2].$_SESSION['date'][3]; ?>" type="text"> /
			<label for="element_4_2">MM</label>
		</span>
		<span>
	 		<input id="element_4_3" name="element_4_3" class="element text" size="4" maxlength="4" value="<?php echo $_SESSION['date'][4].$_SESSION['date'][5].$_SESSION['date'][6].$_SESSION['date'][7]; ?>" type="text">
			<label for="element_4_3">YYYY</label>
		</span>
	
		<span id="calendar_4">
			<img id="cal_img_4" class="datepicker" src="images/calendar.gif" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_4_3",
			baseField    : "element_4",
			displayArea  : "calendar_4",
			button		 : "cal_img_4",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectEuropeDate
			});
		</script>
		 
		</li>		<li id="li_5" >
		<label class="description" for="element_5">Correo Electrónico </label>
		<div>
			<input id="element_5" name="element_5" class="element text medium" type="text" maxlength="255" value="<?php echo $_SESSION['mail']; ?>"/> 
		</div> 
		</li>		<li id="li_6" >
		<label class="description" for="element_6">Teléfono </label>
		<span>
			<input id="element_6_1" name="element_6_1" class="element text" size="3" maxlength="3" value="<?php echo $_SESSION['tel'][0].$_SESSION['tel'][1].$_SESSION['tel'][2]; ?>" type="text"> -
			<label for="element_6_1">(###)</label>
		</span>
		<span>
			<input id="element_6_2" name="element_6_2" class="element text" size="3" maxlength="3" value="<?php echo $_SESSION['tel'][3].$_SESSION['tel'][4].$_SESSION['tel'][5]; ?>" type="text"> -
			<label for="element_6_2">###</label>
		</span>
		<span>
	 		<input id="element_6_3" name="element_6_3" class="element text" size="4" maxlength="4" value="<?php echo $_SESSION['tel'][6].$_SESSION['tel'][7].$_SESSION['tel'][8].$_SESSION['tel'][9]; ?>" type="text">
			<label for="element_6_3">####</label>
		</span>
		 
		</li>		<li id="li_8" >
		<label class="description" for="element_8">Estado Civil </label>
		<span>
			<input id="element_8_1" name="element_8" class="element radio" type="radio" value="Soltero" />
<label class="choice" for="element_8_1">Soltero</label>
<input id="element_8_2" name="element_8" class="element radio" type="radio" value="Casado" checked />
<label class="choice" for="element_8_2">Casado</label>
<input id="element_8_3" name="element_8" class="element radio" type="radio" value="En una relación" />
<label class="choice" for="element_8_3">En una relacion</label>
<input id="element_8_4" name="element_8" class="element radio" type="radio" value="Divorciado" />
<label class="choice" for="element_8_4">Divorciado</label>

		</span> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="359519" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Registrar" />
		</li>
			</ul>
		</form>	
		
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>