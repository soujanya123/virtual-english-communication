

<!DOCTYPE HTML>
<html>
<head>
<title>Virtual Labs - IIT Guwahati</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
-->
</style>
<style type="text/css">@import "css/flexnav.css";</style>
<script type="text/javascript" src="js/beethoven.js"></script>
<link href="css/default.css" rel="stylesheet" type="text/css">
<link href="css/custom.css" rel="stylesheet" type="text/css">




<script type="text/javascript" src="ddtabmenufiles/ddtabmenu.js">
</script>
<link rel="stylesheet" type="text/css" href="ddtabmenufiles/glowtabs.css" />
<link href="emx_nav_right.css" rel="stylesheet" type="text/css">
<link href="default.css" rel="stylesheet" type="text/css">
	<!--<link href="handheld.css" rel="stylesheet" type="text/css" media="handheld" />-->
<style type="text/css">

.thumb_big, .thumb
{
	border: solid 1px #ccd2d2;
	padding: 0px;
}
.thumb
{
	margin: 1px;
	display: inline;
}

.thumb_big
{
	margin: 0px 10px 20px 0px;
	float: left;
}

#projects
{
	margin: 1px 5px 0px 50px;
	width:370px;
	margin-left:2px;
	height:32px;
}

#project_description
{
	height: 50px;
	margin-left:400px;
	margin-top:0px;
}

.disabled
{
	opacity: .30;
	-ms-filter: "alpha(opacity=30)";
	cursor: default;
}

</style>



</head>
<body bgcolor="#FFFFFF">
<div id="header_main"><img src="" align="right" style="padding-right:20px"></div>
 <div id="no_print">
<!-- start header -->
<div id="header">
         <ul id="menuTop">

<?php
include_once("config.inc.php");
 global $db, $db_host, $db_user, $db_password;

$conn = mysql_connect($db_host,$db_user,$db_password);
 if (!$conn) {

  die("ERROR: " . mysql_error() . "\n");

 }
mysql_select_db ($db);
$stuff = mysql_query("SELECT * FROM `topmenu`") or die("MySQL Login Error: ".mysql_error());

if (mysql_num_rows($stuff) > 0) {

$row=mysql_num_rows($stuff);



while($row = mysql_fetch_array($stuff))
  {
  $caption=$row['caption'];
  $link=$row['link'];

echo "<li><a href=\"$link\" target=\"_self\">$caption</a></li>";
  }

}

?>

		 </ul>


</div>
<div style="position: relative; margin:auto; width: 1024px; background-color:#e3f2fc"><br/>

</div>
 <div id="no_print">

</div>
<div style="background-image:url(images/content_bg.jpg);position: relative; margin:auto; width: 1024px; min-height:550px;">
        <div id="contentBox" style=" padding:0px; padding-left:50px; padding-right:50px;">



<br>
<div id="ddtabs2">
<br><br><p align="center"><b>Communication Skills</b>
<!--<p align="left"><a href="tw.ppsx"><font color="blue">Animation 1</a><font>
<p><br><a href="tw.ppsx"><font color="blue">Animation 2</a><font>
<p><br><a href="tw.ppsx"><font color="blue">Animation 3</a><font>
<p><br><a href="tw.ppsx"><font color="blue">Animation 4</a><font>
<p><br><a href="tw.ppsx"><font color="blue">Animation 5</a><font>-->
<p><br><br><a href="cs1.htm"><font color="blue">Exercise 1<font></a>
<p><br><br><a href="cs2.htm"><font color="blue">Exercise 2<font></a>
<p><br><br><a href="cs3.htm"><font color="blue">Exercise 3<font></a>



</div>
</ul>

</div>
<br><br>
</p>
</div>
</div>
<div style="position: relative; margin:auto; width: 1024px; background-color:#0e8de0"><img src="images/footer-curve.jpg" width="1024" height="31" alt=""><div class="copyright">Copyright &copy; 2009-2010</div><br>
</div>


</body>
</html>
