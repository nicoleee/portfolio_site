<?php
error_reporting(0);

	if(isset($_GET['error'])) {
    	$error = $_GET['error'];
  };

?>

<!doctype HTML>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Julius+Sans+One|Roboto+Condensed' rel='stylesheet' type='text/css'>
<title>Contact</title>
<link href="Contact.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>

<div id="page"><body id="body" background="Website Photos/bground.jpg">

<center><nav>
     <div class="logo">
        <a href="index.html"><img src="Website Photos/smalllogo.jpg"></a>
        </div>
        <ol>
        <center>
        <ol id="navigationlinks">
        <li><a href="index.html">Home</a></li>
        <li><a href="About.html">About</a>
        <li><a href="Portfolio.html">Portfolio</a></li>
        <li><a href="Curriculum Vitae.pdf">CV</a></li>
        <li><a href="Contact.html"><span class="currentPage">Contact</a></span></li>
        </ol></center>
       
    </nav></center></br></br></br></br></br>
    
    <form action="mailTo.php" method="post">

<label>Your Name:</label><input name="name" type="text" placeholder="Your Name"></br>
<label>Your Email:</label><input name="email" type="email" placeholder="someone@example.com"></br>
<label>Your Message:</label></br> 
<textarea name="message" rows="20" cols="35" placeholder="Your Message Here"></textarea>
<input type="submit">



</form>
    
    <center><footer>
    	<center>  </br><a href="http://dmdnicole.tumblr.com" target="_blank"><img src="Website Photos/tumblr.jpg"></a> <a href="http://uk.linkedin.com/pub/nicole-cook/60/106/808" target="_blank"><img src="Website Photos/linkedin.jpg"></a></br>Online Portfolio, Nicole Cook</center>
    </footer></center></div>

</body>
</html>

