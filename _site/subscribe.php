<?php 
 // Connects to your Database 

 mysql_connect("localhost", "iaset_journals", "09ASET12") or die(mysql_error()); 

 mysql_select_db("iaset_journals") or die(mysql_error()); 


 //This code runs if the form has been submitted

 if (isset($_POST['submit'])) { 


 
 $emailcheck = $_POST['email'];
$jName = strtoupper(array_shift(explode(".",$_SERVER['HTTP_HOST'])));

 $emailcheck = mysql_query("SELECT email FROM users WHERE email = '$emailcheck' AND jName ='$jName'") or die(mysql_error());

 $emailcheck2 = mysql_num_rows($emailcheck);
    
if ($emailcheck2 != 0) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="noarchive">
<meta name="description" content="{{page.meta}}">
<meta name="keywords" content="{{page.keyword}}">
<title>JMTA - Subscribe</title>

<meta name="handheldfriendly" content="true">
<meta name="mobileoptimized" content="240">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="css/avestia.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic|Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
<!--[if IE-9]><html lang="en" class="ie9"><![endif]-->

<script src="js/modernizr.custom.63321.js"></script>
<script type="text/javascript" src="mostvisited.js"></script> 
<script type="text/javascript" src="mostvisitedExt.js"></script> 
<script>
  (function() {
    var cx = '016656741306535874023:f_iiykae6ri';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
</head>

<body class="loading">
<nav id="slide-menu">
  <h1>Avestia Publishing</h1>
  <ul>
    <li><a href="about">About Us</a></li>
    <li><a href="ethics">Ethics in Publishing</a></li>
    <li><a href="openaccess">Open Access</a></li>
    <li><a href="editor">Become a Reviewer or an Editor</a></li>
    <li><a href="publishing">Your Publishing Needs</a></li>
    <li><a href="proceedings">Conference Proceedings</a></li>
    <li><a href="news">Latest News</a></li>
    <li><a href="guidelines">Author Guidelines</a></li>
    <li><a href="journals">Journals</a></li>
    <li><a href="http://amss.avestia.com/">Submission</a></li>
    <li><a href="copyright">Copyright</a></li>
    <li><a href="contact">Contact Us</a></li>
  </ul>
</nav>

<div id="content">
  <div class="desktop">
      <div class="cbp-af-header">
  <div class="cbp-af-inner">
    <a href="/"><img src="img/logo.svg" class="flex-logo" alt="Avestia Publishing"></a>

    <div class="nav1">
      <nav>
        <a href="/">Home</a>
        <a href="http://amss.avestia.com/">Submission</a>
        <a href="journals">Journals</a>
        <a href="ethics">Ethics in Publishing</a>
        <a href="guidelines">Author Guidelines</a>
      </nav>
    </div>

    <div class="search-menu">
      <div class="menu-trigger-1"><p class="menu">MENU</p></div><br>
      <gcse:searchbox-only resultsUrl="results"></gcse:searchbox-only>
    </div>

    <div class="nav2">
      <nav>
        <a href="/">Home</a>
        <a href="http://amss.avestia.com/">Submission</a>
        <a href="journals">Journals</a>
        <a href="ethics">Ethics in Publishing</a>
        <a href="guidelines">Author Guidelines</a>
      </nav>
    </div>
  </div>
</div>
  </div>

  <header>
    <div class="mobile">
      <div class="cbp-af-header">
  <div class="cbp-af-inner">
    <div class="unit unit-s-3-4 unit-m-1-3 unit-l-1-3">
          <a href="/"><img src="img/logo.svg" class="flex-logo" alt="Avestia Publishing"></a>
      </div>
      <div class="unit unit-s-1-3 unit-m-2-3 unit-m-2-3-1 unit-l-2-3">
          <div class="menu-trigger"></div>
      </div>
  </div>
</div>
      <div class="bg">
        <gcse:searchbox-only resultsUrl="results"></gcse:searchbox-only>
      </div>
    </div> <!-- Mobile -->
  </header>

  <div class="j-header">
  <div class="name">
    <h1>Journal of Multimedia Theory and Applications (JMTA)<br>
    <p class="body">ISSN: 2368-5956</p></h1>
    <div class="oalink">
    <a href="/openaccess" target="blank" title="Avestia's Open Access">
          <img src="../img/j-oa.png" border="0" onmouseover="this.src='../img/j-oa-hover.png'" onmouseout="this.src='../img/j-oa.png'" class="j-oa">
    </a>
  </div>
  </div>

    <img src="../img/journals/j-jmta.jpg" class="j-img">
</div>

  <div role="navigation" class="navbar navbar-default">
  <ul>
    <li><a href="/">Journal Home</a></li>
    <li><a href="/aims">Aims & Scopes</a></li>
    <li><a href="/fee">Publishing Fee</a></li>
    <li><a href="/board">Editorial Board</a></li>
    <li><button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">Volumes</button></li>
    <li><a href="/contact">Contact Us</a></li>
  </ul>
  <div class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
      <li><a href="volume1">Volume 1</a></li>
      <li><a href="current">Current Volume</a></li>
    </ul>
  </div><!--/.nav-collapse -->
</div>
  
  <div class="grid">
  <div class="main-content">
    <div class="unit unit-s-1 unit-m-1 unit-l-1">
    <h2>Receive Updates</h2>

    <p class="body">Email already registered</p>
    <p class="body">The email you have entered is already registered to receive updates for this journal.</p>

    <p class="body">&nbsp;</p>
    <p class="body">&nbsp;</p>
    <p class="body">&nbsp;</p>
    <p class="body">&nbsp;</p>
    <p class="body">&nbsp;</p>
    <p class="body">&nbsp;</p>
    <p class="body">&nbsp;</p>
    <p class="body">&nbsp;</p>
    <p class="body">&nbsp;</p>
    <p class="body">&nbsp;</p>
    </div>
  </div>
</div>

  <footer>
<div class="grid">
  <div class="unit unit-s-1 unit-s-1-3 unit-m-1-3 unit-l-1-3">
    <div class="unit-spacer">
      <ul class="footer-links">
        <li><a href="/" class="body-link">Avestia Publishing</a></li>
        <li><a href="journals" class="body-link">Journals</a></li>
        <li><script>var refURL = window.location.protocol + "//" + window.location.host + window.location.pathname; document.write('<a href="http://international-aset.com/feedback/?refURL=' + refURL+'">Feedback</a>');</script></li>
        <li><a href="terms" class="body-link">Terms of Use</a></li>
        <li><a href="sitemap" class="body-link">Sitemap</a></li>
      </ul>
    </div>
  </div>

  <div class="unit unit-s-1 unit-s-1-3 unit-m-1-3 unit-l-1-3">
    <div class="unit-spacer">
      <p class="body">
        Avestia Publishing,<br>
        International ASET Inc.<br>
        Unit 417, 1376 Bank St.<br>
        Ottawa, ON, Canada, K1H 7Y3<br>
        +1 613-695-3040<br>
        <a href="mailto:info@avestia.com" class="body-link">info@avestia.com</a>
      </p>
    </div>
  </div>

  <div class="unit unit-s-1 unit-s-1-3 unit-m-1-3 unit-l-1-3">
    <div class="unit-spacer social">
    <form class="subscribe" action="../subscribe.php" method="post">
            <span id="sprytextfield2"><input name="email" type="text" id="email" value="Join our mailing list"
              onblur="if (this.value == '') {this.value = 'Join our mailing list';}"
        onfocus="if (this.value == 'Join our mailing list') {this.value = '';}" ></span>
      <input type="submit" name="submit" value="Submit" class="form_button" />
        </form>
        
      <div class="unit unit-s-1-1 unit-m-1-1 unit-l-1-1">
        <a href="https://www.facebook.com/pages/International-Academy-of-Science-Engineering-and-Technology/207827708283" target="blank" title="International ASET Inc. Facebook Page">
          <img src="img/fb.png" border="0" onmouseover="this.src='img/fb-hover.png'" onmouseout="this.src='img/fb.png'">
        </a>
      </div>

      <div class="unit unit-s-1-1 unit-m-1-1 unit-l-1-1">
        <a href="https://twitter.com/ASET_INC" target="blank" title="International ASET Inc. Twitter">
          <img src="img/twitter.png" border="0" onmouseover="this.src='img/twitter-hover.png'" onmouseout="this.src='img/twitter.png'">
        </a>
      </div>

      <div class="unit unit-s-1-1 unit-m-1-1 unit-l-1-1">
        <a href="https://www.linkedin.com/company/1169039" target="blank" title="International ASET Inc. LinkedIn">
          <img src="img/linkedin.png" border="0" onmouseover="this.src='img/linkedin-hover.png'" onmouseout="this.src='img/linkedin.png'">
        </a>
      </div>

      <div class="unit unit-s-1-1 unit-m-1-1 unit-l-1-1">
        <a href="https://plus.google.com/u/0/+International-aset/posts" target="blank" title="International ASET Inc. Google+ Page">
          <img src="img/google.png" border="0" onmouseover="this.src='img/google-hover.png'" onmouseout="this.src='img/google.png'">
        </a>
      </div>

      <p class="body">© Copyright 2015, International ASET Inc. – All Rights Reserved.</p>
    </div>
  </div>

</div>
</footer>
</div>


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/cbpAnimatedHeader.min.js"></script>
    <script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>

    <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>

    <script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>

    <script src="SpryAssets/SpryValidationCheckbox.js" type="text/javascript"></script>
    <script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>

<script src="js/classie.js"></script>
<script src="js/jquery.easing.js"></script>
<script src="js/jquery.mousewheel.js"></script>
<script defer src="js/demo.js"></script>
<script type="text/javascript" src="css/animate.min.css"></script>
<script type="text/javascript" src="js/jnav.js"></script>

<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2", {invalidValue:"-1"});
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
//-->
</script>


    <script type="text/javascript">
/*
  Slidemenu
*/
(function() {
  var $body = document.body
  , $menu_trigger = $body.getElementsByClassName('menu-trigger')[0];

  if ( typeof $menu_trigger !== 'undefined' ) {
    $menu_trigger.addEventListener('click', function() {
      $body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
    });
  }

}).call(this);
</script>

<script type="text/javascript">
/*
  Slidemenu
*/
(function() {
  var $body = document.body
  , $menu_trigger = $body.getElementsByClassName('menu-trigger-1')[0];

  if ( typeof $menu_trigger !== 'undefined' ) {
    $menu_trigger.addEventListener('click', function() {
      $body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
    });
  }

}).call(this);
</script>
</body>
</html>

<?php

    die();


        }
$timestamp = date('Y-m-d h:i:s');
$uniqueID = uniqid();
$confirmed = 0;

 // now we insert it into the database

  $insert  = "INSERT INTO users (email, jName, uniqueID, timestamp, confirmed) VALUES ('".$_POST['email']."', '".$jName."', '".$uniqueID."', '".$timestamp."', '".$confirmed."')";

  $add_member = mysql_query($insert);

  $email = $_REQUEST['email'];
    
  //Email out the infromation
  $subject = "Journal of Multimedia Theory and Applications (JMTA)"; 
  $message = "Thank you for signing up to receive alerts for JMTA - Journal of Multimedia Theory and Applications.
 
 In order to confirm your subscription, please visit the link below:
  http://$jName.avestia.com/subscribe/?ID=$uniqueID
  
If you wish to unsubscribe at any time, please visit:
  http://$jName.avestia.com/unsubscribe/?ID=$uniqueID

Sincerely Yours,
Avestia Publishing
http://avestia.com"; 
               
mail($email, $subject, $message,  "FROM: $jName <no-reply@avestia.com>");
 
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="noarchive">
<meta name="description" content="{{page.meta}}">
<meta name="keywords" content="{{page.keyword}}">
<title>JMTA - Subscribe</title>

<meta name="handheldfriendly" content="true">
<meta name="mobileoptimized" content="240">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="css/avestia.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic|Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
<!--[if IE-9]><html lang="en" class="ie9"><![endif]-->

<script src="js/modernizr.custom.63321.js"></script>
<script type="text/javascript" src="mostvisited.js"></script> 
<script type="text/javascript" src="mostvisitedExt.js"></script> 
<script>
  (function() {
    var cx = '016656741306535874023:f_iiykae6ri';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
</head>

<body class="loading">
<nav id="slide-menu">
  <h1>Avestia Publishing</h1>
  <ul>
    <li><a href="about">About Us</a></li>
    <li><a href="ethics">Ethics in Publishing</a></li>
    <li><a href="openaccess">Open Access</a></li>
    <li><a href="editor">Become a Reviewer or an Editor</a></li>
    <li><a href="publishing">Your Publishing Needs</a></li>
    <li><a href="proceedings">Conference Proceedings</a></li>
    <li><a href="news">Latest News</a></li>
    <li><a href="guidelines">Author Guidelines</a></li>
    <li><a href="journals">Journals</a></li>
    <li><a href="http://amss.avestia.com/">Submission</a></li>
    <li><a href="copyright">Copyright</a></li>
    <li><a href="contact">Contact Us</a></li>
  </ul>
</nav>

<div id="content">
  <div class="desktop">
      <div class="cbp-af-header">
  <div class="cbp-af-inner">
    <a href="/"><img src="img/logo.svg" class="flex-logo" alt="Avestia Publishing"></a>

    <div class="nav1">
      <nav>
        <a href="/">Home</a>
        <a href="http://amss.avestia.com/">Submission</a>
        <a href="journals">Journals</a>
        <a href="ethics">Ethics in Publishing</a>
        <a href="guidelines">Author Guidelines</a>
      </nav>
    </div>

    <div class="search-menu">
      <div class="menu-trigger-1"><p class="menu">MENU</p></div><br>
      <gcse:searchbox-only resultsUrl="results"></gcse:searchbox-only>
    </div>

    <div class="nav2">
      <nav>
        <a href="/">Home</a>
        <a href="http://amss.avestia.com/">Submission</a>
        <a href="journals">Journals</a>
        <a href="ethics">Ethics in Publishing</a>
        <a href="guidelines">Author Guidelines</a>
      </nav>
    </div>
  </div>
</div>
  </div>

  <header>
    <div class="mobile">
      <div class="cbp-af-header">
  <div class="cbp-af-inner">
    <div class="unit unit-s-3-4 unit-m-1-3 unit-l-1-3">
          <a href="/"><img src="img/logo.svg" class="flex-logo" alt="Avestia Publishing"></a>
      </div>
      <div class="unit unit-s-1-3 unit-m-2-3 unit-m-2-3-1 unit-l-2-3">
          <div class="menu-trigger"></div>
      </div>
  </div>
</div>
      <div class="bg">
        <gcse:searchbox-only resultsUrl="results"></gcse:searchbox-only>
      </div>
    </div> <!-- Mobile -->
  </header>

<div class="j-header">
  <div class="name">
    <h1>Journal of Multimedia Theory and Applications (JMTA)<br>
    <p class="body">ISSN: 2368-5956</p></h1>
    <div class="oalink">
    <a href="/openaccess" target="blank" title="Avestia's Open Access">
          <img src="../img/j-oa.png" border="0" onmouseover="this.src='../img/j-oa-hover.png'" onmouseout="this.src='../img/j-oa.png'" class="j-oa">
    </a>
  </div>
  </div>

    <img src="../img/journals/j-jmta.jpg" class="j-img">
</div>

  <div role="navigation" class="navbar navbar-default">
  <ul>
    <li><a href="/">Journal Home</a></li>
    <li><a href="/aims">Aims & Scopes</a></li>
    <li><a href="/fee">Publishing Fee</a></li>
    <li><a href="/board">Editorial Board</a></li>
    <li><button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">Volumes</button></li>
    <li><a href="/contact">Contact Us</a></li>
  </ul>
  <div class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
      <li><a href="volume1">Volume 1</a></li>
      <li><a href="current">Current Volume</a></li>
    </ul>
  </div><!--/.nav-collapse -->
</div>
  
  <div class="grid">
  <div class="main-content">
    <div class="unit unit-s-1 unit-m-1 unit-l-1">
    <h2>Receive Updates</h2>

    <p class="body">Confirm Subscription</p>
    <p class="body">Thank you for subscribing to JMTA - Journal of Multimedia Theory and Applications. A confirmation email has been sent to your email. Please click on the confirmation link available in the email to confirm your subscription.</p>

    <p class="body">&nbsp;</p>
    <p class="body">&nbsp;</p>
    <p class="body">&nbsp;</p>
    <p class="body">&nbsp;</p>
    <p class="body">&nbsp;</p>
    <p class="body">&nbsp;</p>
    <p class="body">&nbsp;</p>
    <p class="body">&nbsp;</p>
    <p class="body">&nbsp;</p>
    <p class="body">&nbsp;</p>
    </div>
  </div>
</div>

  <footer>
<div class="grid">
  <div class="unit unit-s-1 unit-s-1-3 unit-m-1-3 unit-l-1-3">
    <div class="unit-spacer">
      <ul class="footer-links">
        <li><a href="/" class="body-link">Avestia Publishing</a></li>
        <li><a href="journals" class="body-link">Journals</a></li>
        <li><script>var refURL = window.location.protocol + "//" + window.location.host + window.location.pathname; document.write('<a href="http://international-aset.com/feedback/?refURL=' + refURL+'">Feedback</a>');</script></li>
        <li><a href="terms" class="body-link">Terms of Use</a></li>
        <li><a href="sitemap" class="body-link">Sitemap</a></li>
      </ul>
    </div>
  </div>

  <div class="unit unit-s-1 unit-s-1-3 unit-m-1-3 unit-l-1-3">
    <div class="unit-spacer">
      <p class="body">
        Avestia Publishing,<br>
        International ASET Inc.<br>
        Unit 417, 1376 Bank St.<br>
        Ottawa, ON, Canada, K1H 7Y3<br>
        +1 613-695-3040<br>
        <a href="mailto:info@avestia.com" class="body-link">info@avestia.com</a>
      </p>
    </div>
  </div>

  <div class="unit unit-s-1 unit-s-1-3 unit-m-1-3 unit-l-1-3">
    <div class="unit-spacer social">
    <form class="subscribe" action="../subscribe.php" method="post">
            <span id="sprytextfield2"><input name="email" type="text" id="email" value="Join our mailing list"
              onblur="if (this.value == '') {this.value = 'Join our mailing list';}"
        onfocus="if (this.value == 'Join our mailing list') {this.value = '';}" ></span>
      <input type="submit" name="submit" value="Submit" class="form_button" />
        </form>
        
      <div class="unit unit-s-1-1 unit-m-1-1 unit-l-1-1">
        <a href="https://www.facebook.com/pages/International-Academy-of-Science-Engineering-and-Technology/207827708283" target="blank" title="International ASET Inc. Facebook Page">
          <img src="img/fb.png" border="0" onmouseover="this.src='img/fb-hover.png'" onmouseout="this.src='img/fb.png'">
        </a>
      </div>

      <div class="unit unit-s-1-1 unit-m-1-1 unit-l-1-1">
        <a href="https://twitter.com/ASET_INC" target="blank" title="International ASET Inc. Twitter">
          <img src="img/twitter.png" border="0" onmouseover="this.src='img/twitter-hover.png'" onmouseout="this.src='img/twitter.png'">
        </a>
      </div>

      <div class="unit unit-s-1-1 unit-m-1-1 unit-l-1-1">
        <a href="https://www.linkedin.com/company/1169039" target="blank" title="International ASET Inc. LinkedIn">
          <img src="img/linkedin.png" border="0" onmouseover="this.src='img/linkedin-hover.png'" onmouseout="this.src='img/linkedin.png'">
        </a>
      </div>

      <div class="unit unit-s-1-1 unit-m-1-1 unit-l-1-1">
        <a href="https://plus.google.com/u/0/+International-aset/posts" target="blank" title="International ASET Inc. Google+ Page">
          <img src="img/google.png" border="0" onmouseover="this.src='img/google-hover.png'" onmouseout="this.src='img/google.png'">
        </a>
      </div>

      <p class="body">© Copyright 2015, International ASET Inc. – All Rights Reserved.</p>
    </div>
  </div>

</div>
</footer>
</div>


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/cbpAnimatedHeader.min.js"></script>
    <script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>

    <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>

    <script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>

    <script src="SpryAssets/SpryValidationCheckbox.js" type="text/javascript"></script>
    <script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>

<script src="js/classie.js"></script>
<script src="js/jquery.easing.js"></script>
<script src="js/jquery.mousewheel.js"></script>
<script defer src="js/demo.js"></script>
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript" src="css/animate.min.css"></script>
<script type="text/javascript" src="js/jnav.js"></script>

<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2", {invalidValue:"-1"});
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
//-->
</script>

    <script type="text/javascript">
/*
  Slidemenu
*/
(function() {
  var $body = document.body
  , $menu_trigger = $body.getElementsByClassName('menu-trigger')[0];

  if ( typeof $menu_trigger !== 'undefined' ) {
    $menu_trigger.addEventListener('click', function() {
      $body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
    });
  }

}).call(this);
</script>

<script type="text/javascript">
/*
  Slidemenu
*/
(function() {
  var $body = document.body
  , $menu_trigger = $body.getElementsByClassName('menu-trigger-1')[0];

  if ( typeof $menu_trigger !== 'undefined' ) {
    $menu_trigger.addEventListener('click', function() {
      $body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
    });
  }

}).call(this);
</script>
</body>
</html>
 
<?php 
 } 	
 ?>
