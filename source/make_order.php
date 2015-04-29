<?PHP

require_once("./include/membersite_config.php");
require_once('./include/fg_membersite.php');

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}


if(isset($_POST['submitted']))
{
   if($fgmembersite->RegisterUserOrder())
   {
        $fgmembersite->RedirectToURL("thank_you_order.php");
   }
}
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
	<meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Minu konto</title>
     
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
    <script type='text/javascript' src='offline.js'></script>
    <script src="scripts/pwdwidget.js" type="text/javascript"></script>   
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
	
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600" type="text/css">
	<link rel="stylesheet" href="style/menubar_test.css">
	<link rel="stylesheet" href="style/style_test.css">
	<link rel="STYLESHEET" type="text/css" href="style/pwdwidget.css" />
    <link rel="STYLESHEET" type="text/css" href="style/fg_membersite_test.css" />
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/bootstrap-theme.css.map">
        
</head>

<body>
    <div class="container-fluid text-center">
         <div class="row">
             <div class="col-md-8 col-md-offset-2">
                    <div id="english">
		            <a id="eng" href="web/lang/eng/index_eng.html">ENG</a>&nbsp;&nbsp;
	
		  </div>
             </div>
           </div>
    <div class="row">
    <div class="col-md-8 col-md-offset-2">   
        <div id="img">  		 
		  <img src="img/LK.jpg" class="img-responsive" alt="img/LK.jpg">
    </div> <!-- img -->
    </div>
    </div>

          <div class="row">
          <div class="col-md-8 col-md-offset-2">
<div class="dropdownmenu">
        <ul id="nav">
            <li class='active'><a href='index_loggedin.php'>Avaleht</a></li>
            <li><a href="login-home.php">Minu konto</a>
                <div>
                    <ul>
                        
                        <li><a href='clients_data.php'>Minu andmed</a></li>
                        <li><a href='make_order.php'>Tellimuse tegemine</a></li>
                        <li><a href='client_orders.php'>Tellimuste ajalugu</a></li>
                        <li><a href='change-pwd.php'>Muuda parooli</a></li>
			            <li><a href='logout.php'>Logi välja</a></li>
                       
                    </ul>
                </div>
            </li>
			<li><a href="#">Meist</a>
                <div>
                    <ul>
                        <li><a href="staff.html">Personal</a></li>
                        <li><a href="company.html">Concepts</a></li>
  
                    </ul>
                </div>
            </li>
			<li><a href="#">Teenused</a>
                <div>
                    <ul>
                         <li><a href="./web/services/loggedin/data_analysis_loggedin.html">Andmeanalüüs ja töötlus</a></li>
			<li><a href="./web/services/loggedin/stat_modelling_loggedin.html">Statistiline modelleerimine</a></li>
			<li><a href="./web/services/loggedin/med_stat_loggedin.html">Meditsiinistatistika</a></li>
                        <li><a href="./web/services/loggedin/market_research_loggedin.html">Turuuring</a></li>
                        <li><a href="./web/services/loggedin/finance_loggedin.html">Finantsaruannete analüüs</a></li>
			<li><a href="./web/services/loggedin/consultations_loggedin.html">Konsultatsioonid</a></li>
  
                    </ul>
                </div>
            </li>
            
            <li><a href="#">Blog</a>
                <div>
                    <ul>
                        <li><a href="web/articles/article_sample.php">Artikkel 1</a></li>
                        <li><a href="#">Page 2</a></li>
                        <li><a href="#">Page 3</a></li>
                        <li><a href="#">Page 4</a></li>
                        <li><a href="#">Page 5</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="login-contact.php">  Kontakt  </a></li>
	    <li><a href="tech_support_loggedin.html">  Abi  </a></li>	
			
            <li class="pad"></li>
        </ul>
        <div class="dropdown">
            <button class="btn btn-success" type="button" id="menu1" data-toggle="dropdown">Menüü
            <span class="caret"></span></button>
            <ul class="dropdown-menu dropdown-menu-right" role="menu">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="index.html">Avaleht</a></li>
                <li role="presentation" class="divider"></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href='login'>Logi sisse</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href='register.php'>Uus kasutaja</a></li>
                <li role="presentation" class="divider"></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Meist</a></li>
                <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="./web/services/loggedin/data_analysis_loggedin.html">Andmeanalüüs ja töötlus</a></li>
			  <li role="presentation"><a role="menuitem" tabindex="-1" href="./web/services/loggedin/stat_modelling_loggedin.html"> Statistiline modelleerimine</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="./web/services/loggedin/med_stat_logedin.html">Meditsiinistatistika</a></li>
			  <li role="presentation"><a role="menuitem" tabindex="-1" href="./web/services/loggedin/market_research_loggedin.html">Turuuuring</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="./web/services/loggedin/finance_loggedin.html">Finantsaruannete analüüs</a></li>
				<li role="presentation"><a role="menuitem" tabindex="-1" href="./web/services/loggedin/consultations_loggedin.html">Konsultatsioonid</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="./web/articles/article_sample.php">Blogi</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="login-contact.php">Kontakt</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="./web/services/loggedin/tech_support_loggedin.php">Abi</a></li>
              
              
            </ul>
          </div>
    </div>
          </div>
          </div>
<div class="row">
        <div class="col-md-8 col-md-offset-2">
<div id="main">
	<h2>Tere, <?php echo $fgmembersite->UserFullName(); ?>!</h2>

<div id="white-box" >

<div class="row">
<div class="col-md-6 col-lg-offset-3">
<div id="contentInt">
                 <noscript>
                        <p class="note">You have disabled Javascript. This website will not function without it.</p>
                 </noscript>                  

<div class="center">
<!-- Form Code Start -->
<div id='fg_membersite'>
<form id='register' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Minu tellimus</legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>

<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>

<div class='container'>
    <label for="name" >Nimi:</label><br/>
    <input type='text' name='name' id='name' value='<?php echo $fgmembersite->UserFullName() ?>' maxlength="50" required="required" /><br/>   
    <div id='register_password_errorloc' class='error' style='clear:both'></div>
</div>

<div class='container'>
    <label for='email' >Email:</label><br/>
    <input type='text' name='email' id='email' value='<?php echo $fgmembersite->UserEmail() ?>' maxlength="50" required="required"/><br/>
    <span id='register_email_errorloc' class='error'></span>
</div>

<div class='container'>
    <label for='phone_number' >Mobiilinumber:</label><br/>
    <input type='text' name='phone_number' id='phone_number' value='<?php echo $fgmembersite->UserPhoneNumber() ?>' maxlength="50" /><br/>
    <span id='register_phone_number_errorloc' class='error'></span>
</div>

<div class='container'>
    <label for="order" >Tellimuse kirjeldus:</label><br/>
    <textarea name='order' id='order' maxlength="255" rows="3" required="required"></textarea>   
    <div id='register_password_errorloc' class='error' style='clear:both'></div>
</div>

<div class='container'>
    <input type='submit' name='Submit' value='Sisesta tellimus!' />
</div>

</fieldset>
</form>	


   

</div><!--center-->
</div>
</div>
</div>	
 </div>  <!-- fg_membersite_form -->   		   
	</div> <!-- white box --> 
	</div> <!-- main -->  

</div>
    </div>

<div id="block" >
                     
</div>


<div id="block" >

</div>


    <div class="row">
        <div class="col-md-8 col-md-offset-2">
	<div id="footer">
                      © 2015  LK Consulting <br>
					  This is a proof-of-concept web application.
	</div>
            </div>
            </div>
        </div>

</body>
</html>
