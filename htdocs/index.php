<!DOCTYPE HTML>
<?php
require_once("config.php");
 // Connects to your Database

 mysql_connect("localhost", "root", "aco1234") or die(mysql_error());

 mysql_select_db("acoserver_acoserver") or die(mysql_error());

 
 //checks cookies to make sure they are logged in


 
if(isset($_COOKIE['ID_my_site']))

 {

 	$username = $_COOKIE['ID_my_site'];

 	$pass = $_COOKIE['Key_my_site'];

 	 	$check = mysql_query("SELECT * FROM users WHERE username = '$username'")or die(mysql_error());

 	while($info = mysql_fetch_array( $check ))

 		{

 

 //if the cookie has the wrong password, they are taken to the login page

 		if ($pass != $info['password'])

 			{ 			header("Location: login.php");

 			}

 

 //otherwise they are shown the admin area

 	else

 			{
 			  
	echo "<div class=\"header\">";
		echo "<h1>Start</h1>";
		echo " <div class=\"profile\">";
				echo"	<p class=\"name\">".$info['username']."</p>";
					echo "<p class=\"status\">Hello :)</p>";
				echo"</div>";
echo "</div>";

 			}

 		}

 		}

else {
  
header("Location: login.php");

 }

    

 

 
		
		?>
		
<html>
<head>
<link rel="icon"  href="http://localhost:80/favicon.ico" >
<title>VM Home</title>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans|Open+Sans:700,600' rel='stylesheet' type='text/css'>
<meta content='width=device-width, initial-scale=1.0, user-scalable=no' name='viewport'>

<script src="js/libs/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/smoothness/jquery-ui.css" />
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
 <link rel="stylesheet" href="css/style.css">

<style type="text/css">
* { -webkit-font-smoothing:antialiased; -moz-font-smoothing:antialiased; -ms-font-smoothing:antialiased; -o-font-smoothing:antialiased; font-smoothing:antialiased; }

/*.module:hover {
  backface-visibility: hidden; -webkit-backface-visibility: hidden;
}*/
@import url(http://netdna.bootstrapcdn.com/font-awesome/2.0/css/font-awesome.css);
@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,300);

* { -webkit-font-smoothing:antialiased; -moz-font-smoothing:antialiased; -ms-font-smoothing:antialiased; -o-font-smoothing:antialiased; font-smoothing:antialiased; }

@font-face {
  font-family: windows;
  src: url(http://ashleyjt.net/windows/fonts/windows-light.ttf);
  font-weight: 300; }

* {
  box-sizing: border-box;
  padding: 0; }

p > a {
  text-decoration: none;
  color: white; }

ul, li {
  list-style: none;
  padding: 0;
  margin: 0; }

body {
  background: #0F6D39;
  font-family: Segoe UI, 'Droid Sans', sans-serif;
  color: white;
  font-size: 14px; }

.container {
  width: 80%;
  margin: 0 auto;
  clear: both;
  position: relative; }

.module {
  position: relative;
  float: left;
  display: inline-block;
  margin: 7px 14px 7px 0;
    text-decoration: none;
    }
    
  .module.single {
    width: 163px;
    height: 170px; }
  .module.double {
    width: 340px;
    height: 170px; }
  .module > div.img {
    margin: 60px 0 10px 20px;
    width: 75%; }
    .module > div.img > p.sub-heading {
      margin-left: 50px;
      font-size: 18px;
      width: 70%; 
        text-decoration: none;
    }

.header {
  display:block;
  width: 100%;
  position: relative;
  color:blue;
}

h1 {
  float: left;
  font-size: 45px; }

.profile {
  position: absolute;
  float: right;
  background: url(http://ashleyjt.net/windows/images/me.png) no-repeat;
  background-size: 30%;
  width: 216px;
  height: 216px;
  top: 20px;
  left: 950px; }
  .profile p.name {
    position: absolute;
    top: -25px;
    font-size: 24px;
    left: -65px;
    width: 100%; }
  .profile p.status {
    position: absolute;
    font-size: 13px;
    left: -60px;
    top: 20px; }

.title {
  position: absolute;
  top: 125px;
  left: 20px;
  font-size: 14px; }

.sub-heading {
  font-size: 20px;
  width: 65%;
  padding: 10px 0 0 20px; }

.third-heading {
  margin-left: 130px;
  font-size: 30px; }

input[type=text] {
  border: 0;
  padding: 10px;
  font-size: 16px;
  margin: 70px 0 0 20px;
  width: 300px; }
  input[type=text]:focus {
    outline: none; }

input[type=button] {
  border: 0;
  margin-left: -35px;
  background: url(http://ashleyjt.net/windows/images/search.png) no-repeat;
  width: 27px;
  height: 27px;
  text-indent: -9999px; }

.blue {
  background-color: #02bee1; }
  .blue:hover, .blue:focus {
    background-color: #017e95;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
    z-index: 9999; }
.neonblue {
  background-color: #008080; }
  .neonblue:hover, .neonblue:focus {
    background-color: blue;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
    z-index: 9999; }
.green {
  background-color: #62bc0f; }
  .green:hover, .green:focus {
    background-color: #3d7509;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
    z-index: 9999; }

.pink {
  background-color: #d02547; }
  .pink:hover, .pink:focus {
    background-color: #8f1931;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
    z-index: 9999; }

.orange {
  background-color: #dc6a25; }
  .orange:hover, .orange:focus {
    background-color: #9c4a19;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
    z-index: 9999; }

.yellow {
  background-color: #dfc202; }
  .yellow:hover, .yellow:focus {
    background-color: #938001;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
    z-index: 9999; }

.darkblue {
  background-color: #0d4b97; }
  .darkblue:hover, .darkblue:focus {
    background-color: #072851;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1)
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
    z-index: 9999; }

.midblue {
  background-color: #3b5998; }
  .midblue:hover, .midblue:focus {
    background-color: #263961;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
    z-index: 9999; }

.red {
  background-color: #b91d21; }
  .red:hover, .red:focus {
    background-color: #771315;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
    z-index: 9999; }

.purple {
  background-color: #8e81a7; }
  .purple:hover, .purple:focus {
    background-color: #685a81;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
    z-index: 9999; }

.img {
  background-repeat: no-repeat;
  background-size: 20%;
  width: 100%;
  height: 100%; }
  .img.double {
    background-position: 250px 20px; }
  .img.single {
    background-position: center center;
    background-size: 50%; }
  .img:hover, .img:focus {
    cursor: pointer; }

.xbox {
  background-image: url(http://ashleyjt.net/windows/images/Xbox-360.png); }

.bing {
  background-image: url(http://ashleyjt.net/windows/images/Bing.png); }

.chromemyadmin{
  
  background-image:url("data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTUwRjoxKytKPkk8TCk0NzcBCgoKDg0OGxAQGi0kICU3NTI0NzQyNTY3Mi03LzQyKy80MCsxMDc1NDQ3NzgsLCwsNy0sLCw3NDQsLCwyLDU3K//AABEIADIAMgMBEQACEQEDEQH/xAAaAAADAQEBAQAAAAAAAAAAAAAABQYEBwMB/8QAQhAAAQIDAwQKDwkAAAAAAAAAAQIDAAQFBhESBxMhMRVRYXKTscHR0uIUFhciIzM2QVVWZXFzlbIyNEJTdZGSosP/xAAaAQADAQEBAQAAAAAAAAAAAAAAAwQCBQEG/8QANBEAAQMCAQcJCQEAAAAAAAAAAAECAwQRFBITMTNRYtEFFSFBQlOBorE0UmFxcpGhwfCC/9oADAMBAAIRAxEAPwDt7i0NoU44pKEJBKlKNwAHnMACBVtrOJUQami8G7Q2s8kOw8mwVn49p87d7N+k08E50YMPJsPM/HtDt3s36TTwTnRgw8mwM/HtDt3s36TTwTnRgw8mwM/HtHNPn5SpSyZmRfQ8yrQFJ29o7Rhbmq1bKNa5HJdDTGT0nrfqKbIVEpJBwoGjfph1PrEFT6tSIVIUGRpVGW9QnJ2ZnZTPLUmbU3pGG/Rfd+KGzVWaynPfkoi20X9EExwo/JRrbqqX0nnhoXqi98yPPEvOsHfeVeA7Av7vzJxDDQvVF75keeDnWDvvKvAMC/u/MnE1UqTs9PVSVknbMuy4mFFIcM+pQBCSrUDuQ2OvbLfNyXVOnRb1Qw6lyFTLZa/x4KMslHeGsspJzaHk4U36vtDkEOq+ypmm7SHQIjKidyg+R9R3qPrTDqfWIJn1akTWEPOU2yyZd7NL2NUcWEK0eD0XQnlB8TInrKzKTKTovbbsPaVr3PYjHWXJXqvsFE9shKSynjPBeEgXZlI1m6ObRYGpmSLM2vftLsK6nEwxq/OX/wAoLNl5/wDP/onmjtcz0XufleJzucKj3vwnAd2InpmatdTEPu40hayBhA05tW1GsBT07XOibZbW0rtTaoJVSyvaj1unhs+BUZK/H1346eNcaq9DT2m0uL+IyoncoPkfUd6j60w6n1iCZ9WpHT/3Ky36Wr/OI+V/Z3/Un7HUGtZ9K/oU183Up47qeMRy+RfbG+PoWcpezu8PUY1Ok0SRlnHjTVFLPfr8O5epKXGAoa/OHVfsN2/6tj3uW1/7p4HFexjUvb+6OJ7UalSlGtfRpdohx95594OBZNzBSoNC7VpAKr/dHj3q+Ny/L79YNYjJGp8/t1DPJX4+u/HTxrhdXoaMptLi/iMqJ3KD5H1Heo+tMOp9YgmfVqS8zS6pOUezUxTJHspLVPwLGdSi4nARrO4YxWQNna6NzsnpvovouEEjo1a9rb9FtNthgn7O2lm5ZTGwpRiIOLsps6jftxNRcnx00yS529r9m3V8x1TUyTRqzIt4i1ixNpWXkOikNrKFA4XHGlJO4QVaRHaWojVLXOakEidQ9s5Z60ibXSlUq8oQhKlZxzON3JGApACUnQNQuAhUksebVrVGxxyZxHOQ35K/H1346eNcYq9DTdNpcX8RlRmqMixUpF6TmklTLycKgNfvG7GmuVq3Q8c1HJZSGOTFIJzdaeSjzDM6h/KKsXukuF3g7mPtt7getHuL3Qwu8Hcx9tvcD1oMXuhhd4O5j7ce4HrQYvdDC7xVWZs9LWdklS8utTi3FYnHV61HkETyyrIt1HxxoxLIOIUMCAAgAIACAAgAIACAD//Z");
}
.excel {
  background-image: url(http://ashleyjt.net/windows/images/Excel.png); }

.hp {
  background-image: url(http://ashleyjt.net/windows/images/HP.png); }

.w {
  background-image: url(http://ashleyjt.net/windows/images/w8.png); }

.wo {
  background-image: url(http://ashleyjt.net/windows/images/w95.png); }

.word {
  background-image: url(http://ashleyjt.net/windows/images/word.png); }

.excel {
  background-image: url(http://ashleyjt.net/windows/images/Excel.png); }

.youtube {
  background-image: url(http://ashleyjt.net/windows/images/youtube.png); }

.intel {
  background-image: url(http://ashleyjt.net/windows/images/Intel.png); }

.fb {
  background-image: url(http://ashleyjt.net/windows/images/fb.png); }

.twitter {
  background-image: url(http://ashleyjt.net/windows/images/twitter.png); }

.mail {
  background-image: url(http://ashleyjt.net/windows/images/Hotmail.png); }

.market {
  background-image: url(http://ashleyjt.net/windows/images/market.png); }

.not {
  background-image: url(http://ashleyjt.net/windows/images/Notifications.png); }

.msg {
  background-image: url(http://ashleyjt.net/windows/images/Messaging.png); }

.msg {
  background-image: url(http://ashleyjt.net/windows/images/Messaging.png); }

.net {
  background-image: url(http://ashleyjt.net/windows/images/Internet10.png); }

.apple {
  background-image: url(http://ashleyjt.net/windows/images/Apple.png); }

.android {
  background-image: url(http://ashleyjt.net/windows/images/Android.png); }

.drop {
  background-image: url(http://ashleyjt.net/windows/images/Dropbox.png); }

.power {
  background-image: url(http://ashleyjt.net/windows/images/PowerPoint.png); }

.html {
  background-image: url(http://ashleyjt.net/windows/images/HTML5.png); }

.ps {
  background-image: url(http://ashleyjt.net/windows/images/ps.png); }

.fl {
  background-image: url(http://ashleyjt.net/windows/images/fl.png); }

.access {
  background-image: url(http://ashleyjt.net/windows/images/Access.png); }

.app {
  background-image: url(http://ashleyjt.net/windows/images/app.png); }

.birds {
  background-image: url(http://ashleyjt.net/windows/images/birds.png); }
.owncloud{
  background-image:url("http://t2.gstatic.com/images?q=tbn:ANd9GcSRdmb4TOJXunSLPt9f35N-lIRTKnX_8Cb5asYQDMzrbZAnb5Q8qg:bays-media.com/files/9313/9238/9720/002fa_ownCloud-logo-square.png");
}
#slider-nav {
  margin-top: 20px; }

button {
  width: 100px;
  height: 100px;
  border: 0;
  background-color: rgba(11, 78, 41, 0.3);
  position: absolute;
  top: 320px;
  left: -120px;
  color: rgba(255, 255, 255, 0.5);
  font-size: 36px; }
  button:hover, button:focus {
    background-color: rgba(11, 78, 41, 0.6);
    font-size: 45px;
    cursor: pointer;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1); }

[data-dir='next'] {
  left: 1070px; }

.slider {
  width: 1070px;
  height: 547px;
  overflow: hidden;
  margin-top: 30px;
  padding-left:10px;
  margin-left:-10px;
}

.slider ul {
  width: 10000px;
  }

.slider li {
  float: left;
  height: 547px;
  width: 1070px; }

footer {
  margin: 40px 0 0 0;
  font-size: 12px; 
}
@import url(http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200);

*{
  margin: 0;
  padding: 0;
  outline: none;
  border: none;
  box-sizing: border-box;
}
*:before,
*:after{
  box-sizing: border-box;
}
.wrap,.wrap2{
	width: 830px;
	height: auto;
	margin: 70px 100px;
	float: left;
}
.wrap2{
	width: 410px !important;
}
div[class^="metro"]{
	float: left;
	margin: 0 10px 10px 0;
	height: 95px;
	position: relative;
	cursor: pointer;
	transition: all .4s ease;
  user-drag: element;
  border: solid 2px transparent;
text-decoration:none;
}
div[class^="metro"]:hover{
	border: solid 2px mintcream;
}
div[class^="metro"]:active{
	transform: scale(.98,.98);
}
.metro-big{width: 200px;}
.metro-small{width: 95px;}
.last{margin-right: 0 !important;}
.space{
	margin-bottom: 110px;
}
.label{
	position: absolute;
	color: white;
	font: 500 12px sans-serif;
	left: 10px;
  user-select: none;
}
.bottom{bottom: 5px;}
.top{top: 5px;}
.chat{background: #df0024;}
.calendar{
  background: #00a9ec;
}
.store{background: #ff9000;}
.ie{background: #00abdc;}
.people{background: #0e5d30;}
.video{background: #8b0189;}
.chrome{background: #ce4e4e;}
.photo{
  background: url('http://lorempixel.com/200/95/people');
  background-position: -2px -2px;
}
.music{
  background: #5f5f5f;
  animation: flip 6s linear infinite;
  transform: rotateX(0deg);
}
.games{background: #00ff00;}
.twitter{background: #19bfe5;}
.gp{background: #d64136;}
.fb{background: #3b5998;}
.cnn{background: #fe0000;}
.ps{background: #0c5fa1;}
.bt{background: #2546e9;}
.cc{background: #d20808;}
.wmp{background: #f68935;}
.tube{background: #c8312b;}
.skype{background: #10bef2;}

div[class^="icon"]{
	width: 45px;
	height: 45px;
	margin: 20px auto;
	background-size: 45px 45px;
}
.icon-calendar{background: url('http://icons.iconarchive.com/icons/dakirby309/windows-8-metro/256/Apps-Calendar-Metro-icon.png');}
.icon-chat{background: url('http://icons.iconarchive.com/icons/dakirby309/windows-8-metro/256/Other-Mail-alt-Metro-icon.png');}
.icon-store{background: url('http://icons.iconarchive.com/icons/dakirby309/windows-8-metro/256/Web-Microsoft-Store-Metro-icon.png');}
.icon-ie{background: url('http://icons.iconarchive.com/icons/dakirby309/windows-8-metro/256/Web-Browsers-Internet-Explorer-10-Metro-icon.png');}
.icon-people{background: url('http://icons.iconarchive.com/icons/dakirby309/windows-8-metro/128/Folders-OS-User-No-Frame-Metro-icon.png');}
.icon-video{background: url('http://icons.iconarchive.com/icons/dakirby309/windows-8-metro/128/Folders-OS-My-Videos-Metro-icon.png');}
.icon-chrome{background: url('http://icons.iconarchive.com/icons/dakirby309/windows-8-metro/256/Web-Browsers-Google-Chrome-Metro-icon.png');}
.icon-music{background: url('http://icons.iconarchive.com/icons/dakirby309/windows-8-metro/256/Apps-Google-Music-Metro-icon.png');}
.icon-games{background: url('http://icons.iconarchive.com/icons/dakirby309/windows-8-metro/128/Folders-OS-Games-alt-Metro-icon.png');}
.icon-twitter{background: url('http://icons.iconarchive.com/icons/dakirby309/windows-8-metro/128/Web-Twitter-alt-2-Metro-icon.png');}
.icon-gp{background: url('http://icons.iconarchive.com/icons/dakirby309/windows-8-metro/128/Web-Google-plus-Metro-icon.png');}
.icon-fb{background: url('http://icons.iconarchive.com/icons/dakirby309/windows-8-metro/128/Web-Facebook-alt-1-Metro-icon.png');}
.icon-cnn{background: url('http://icons.iconarchive.com/icons/dakirby309/windows-8-metro/128/Web-CNN-Metro-icon.png');}
.icon-ps{background: url('http://icons.iconarchive.com/icons/dakirby309/windows-8-metro/128/Apps-Adobe-Photoshop-Metro-icon.png');}
.icon-bt{background: url('http://icons.iconarchive.com/icons/dakirby309/windows-8-metro/128/Apps-Bluetooth-Metro-icon.png');}
.icon-cc{background: url('http://icons.iconarchive.com/icons/dakirby309/windows-8-metro/128/Apps-CCleaner-Metro-icon.png');}
.icon-wmp{background: url('http://icons.iconarchive.com/icons/dakirby309/windows-8-metro/256/Apps-Windows-Media-Player-Metro-icon.png');}
.icon-tube{background: url('http://icons.iconarchive.com/icons/dakirby309/windows-8-metro/256/Web-YouTube-alt-1-Metro-icon.png');}
.icon-skype{background: url('http://icons.iconarchive.com/icons/dakirby309/windows-8-metro/128/Apps-Skype-Metro-icon.png');}
::-webkit-scrollbar{
  width: 10px;
	height: 10px;
	cursor: pointer;	
}
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px 2px rgba(0,0,0,0.3);
    background: #007491;
}
::-webkit-scrollbar-thumb {
    background: #002f3b; 
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5);
    cursor: pointer;
}
::selection{
    background: mintcream; 
}

@keyframes flip{
  0%{
    transform: rotateX(0deg);
  }
  15%{
    transform: rotateX(360deg);  
  }
  100%{
    transform: rotateX(360deg); 
  }
}

.photo img{
  top: -4px;
  left: -4px;
  position: absolute;
  opacity: 0;
  animation: fade 8s ease-in-out infinite 8s;
  z-index: 0;
  border: solid 2px transparent;
  transition: all .3s ease;
}

.photo img:hover{
  border: solid 2px mintcream;
}

@keyframes fade{
  0%{
    opacity: 0; 
  }
  10%{
    opacity: 1;
  }
  50%{
    opacity: 1;
</style>
<style>
@import url(http://netdna.bootstrapcdn.com/font-awesome/2.0/css/font-awesome.css);
@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,300);

* { -webkit-font-smoothing:antialiased; -moz-font-smoothing:antialiased; -ms-font-smoothing:antialiased; -o-font-smoothing:antialiased; font-smoothing:antialiased; }

body{
  margin:0px;
  padding:0px;
	font-family: "Open Sans", arial;
	background:#0f6d39;
	color:#fff;
	font-weight:300;
}

h1{
	font-family: "Open Sans", arial;
	font-weight:300;
	float: left;
	width: 55%;
	margin-left: 5px;
	font-size: 40px;
	margin-bottom: 40px;
}
h2{
	margin:0px;
	font-family: "Open Sans", arial;
	font-weight:300;
}
.container{
	margin:50px;
	width: 1251px;
	margin-top: -30px;
  margin-left:10px;
	-webkit-transform:scale(0.9);
}
a.wide, a.box{
	text-decoration:none;
	color:#fff;
	-webkit-transition: -webkit-transform 0.1s;
	position:relative;
	overflow:hidden;
}

a.wide h2, a.box h2{
	position:absolute;
	bottom:5px;
	font-size:14px;
}

a.wide h2.top, a.box h2.top{
	position:static;

	font-size:14px;
}
a.wide i, a.box i{
font-size: 60px;
text-align: center;
display: block;
margin-top: 10px; /* outside Codepen is actually 30px */
}
a.wide:hover, a.box:hover{
	-webkit-transform: scale(1.05);
}

a.wide:active, a.box:active{
	-webkit-transform: scale(1);
}
.wide{
	width:270px;
	height:120px;
	overflow:hidden;
	font-size:13px;
	padding:10px;
	display:block;
	float:left;
	margin:5px;
}

.box{
	width:120px;
	height:120px;
	overflow:hidden;
	font-size:13px;
	padding:10px;
	display:block;
	float:left;
	margin:5px;
}
.lime{background:#61b812;}
.orange{background:#e76022;}
.blue{background:#1E90FF;}
.redgay{background:#DA312E;}
.yellow{background:#dbb701;}
.bluefish{background:#02b9e3;}
.magenta{background:#d22a4e;}
.spacer{
	width:770px;
	margin-right: 50px;
	float:left;
}
.spacer3x{
	width:300px;
}

@-webkit-keyframes galeri
{
1% {background-position: 0px 0px;}
10%{background-position: 0px 140px;}
20%{background-position: 0px 140px;}
30%{background-position: 0px 280px;}
40%{background-position: 0px 280px;}
50%{background-position: 0px 420px;}
60%{background-position: 0px 420px;}
70%{background-position: 0px 560px;}
80%{background-position: 0px 560px;}
100% {background-position: 0px 560px;}
}

.gallery{
	background: url(https://dl.dropbox.com/u/39272011/image_metro.png);
	-webkit-animation: galeri 15s infinite;
}
.right{
	float:right;
	text-align:right;
	margin-top: 30px;
}
.right p{
	margin: 5px 0px;
}
img.prof{
	float: right;
	margin: 10px;
	margin-top: 40px;
}
.i_bot{
	font-size: 30px;
	text-align: left;
	position: absolute;
	bottom: 0px;
}
.cal_i{
	margin-top: 20px;
	margin-left: 15px;
	width: 155px;
}
.cal_e h1{
	position: absolute;
	right: 0px;
	width: 115px;
	text-align: center;
	margin: 0px;
	font-size: 60px;
}
.cal_e p{
	position: absolute;
	right: 0px;
	width: 115px;
	text-align: center;
	margin-top: 75px;
	text-transform: uppercase;
}
.cal_e i{
	text-align: left;
	font-size: 25px !important;
	position: absolute;
	bottom: 0px;
}
</style>
<script>


$(function(){
  var sliderUL = $('div.slider').children('ul'),
  	screens = sliderUL.find('li'),
		screenWidth = screens.width(),
		screenLength = screens.length,
		current = 1,
		totalScreenWidth = screenLength * screenWidth;

	var h1 = $('div.header').children('h1');

	$('#screen-nav').find('button').on('click', function() {
		var direction = $(this).data('dir'),
			loc = screenWidth;

		(direction === 'next') ? ++current : --current;

		if(current === 0) {
			current = screenLength;
			loc = totalScreenWidth - screenWidth;
			direction = 'next';
		} else if (current - 1 === screenLength) {
			current = 1;
			loc = 0;
		}

		transition(sliderUL, loc, direction);

	});

	function transition(container, loc, direction) {
		var unit;

		if(direction && loc !== 0) {
			unit = (direction === 'next') ? '-=' : '+=';
		}

		container.animate({

			'margin-left': unit ? (unit + loc) : loc
		});
	}
});



</script>
</head>
<body>
	
	
	
<div class="container">


	
	


		<div class="slider">
			<ul class="screen">
				<li>
					<div class="module purple double img w">
						<h2 class="title">Home</h2>
					 <p class="subheading">Welcome to the new ArcherVMPeridot UI ! </p>
					</div>
					<div class="module purple double img w">
						<h2 class="title">Home</h2>
					<p class="subheading"> <a href="time.html">View the  Time</a></p>
					</div>
					<div class="module orange double img bing">
						<p class="title">Search</p>
						<form>
							<input type="text" placeholder="Search bing...">
							<input type="button" class="submit" value="submit">
						</form>
					</div>
					
					<div class="module red single img youtube">
						<p class="title">Video</p>
					</div>
					<div class="module yellow double img market">
						<p class="title">Market</p>
						<p class="sub-heading">Download the latest apps for Windows 8 and Windows Phone</p>
					</div>
					    <div class="module neonblue single img owncloud">
	         
	          <p class="title"><a href="http://localhost/owncloud">ArcherVMCloud</a></p>
	          <p class="subheading">Access your files here!</p></div>
					<div class="module pink double img mail">
						<p class="title"><a href="http://localhost:80/roundcubemail-1.0.2/">Mail</a></p>
						<p class="sub-heading">Check your mail with our new Roundcube App!</p>
						<p class="third-heading">:-(</p>
					</div>
					<div class="module green single img xbox">
						<p class="title">Xbox</p>
					</div>
					<div class="module blue double img twitter">
						<p class="title">Social</p>
						<p class="sub-heading"><i>"Just bought a new Surface #microsoft #happy"</i></p>
					</div>
					<div class="module green double img excel">
						<p class="title">Products</p>
						<p class="sub-heading">Office Excel 2013 coming soon to Windows</p>
					</div>
					
				</li>

				<li>
					<div class="module red double img w">
						<p class="title">Home</p>
					</div>
					<div class="module green double img android">
						<p class="title">Competitors</p>
					</div>
					<div class="module darkblue double img apple">
						<p class="title">Competitors</p>
					</div>
					<div class="module red double img power">
						<p class="title">Products</p>
					</div>
					<div class="module blue double img hp">
						<p class="title">Partners</p>
					</div>
					<div class="module blue single img ps">
						<p class="title">Engine</p>
					</div>
					<div class="module red single img fl">
						<p class="title">Engine</p>
					</div>
					<div class="module pink single img wo">
						<p class="title">XP</p>
					</div>
					<div class="module red single img birds">
						<a href="http://localhost:80/games/"><p class="title">Games</p></a>
					</div>
					<div class="module blue single img drop">
						<p class="title">Products</p>
					</div>
					<div class="module orange double img access">
						<a href="http://localhost:80/PDFLint"><p class="title">Products</p></a>
					</div>
					<div class="module darkblue single img app">
						<p class="title">App</p>
					</div>
				</li>

				<li>
					<div class="module blue single img w">
						<p class="title">Home</p>
					</div>
					<div class="module red single img bing">
						<p class="title">Search</p>
					</div>
					<div class="module purple double img not">
						<p class="title">Notifications</p>
					</div>
					<div class="module green double img youtube">
						<a href="http://www.youtube.com"><p class="title">YouTube</p></a>
					</div>
					<div class="module yellow single img market">
						<p class="title">Market</p>
					</div>
					<div class="module darkblue single img intel">
						<p class="title">Partners</p>
					</div>
					<div class="module pink single img mail">
						<p class="title">Mail</p>
					</div>
					<div class="module orange single img xbox">
						<p class="title">Xbox</p>
					</div>
					<div class="module pink single img twitter">
						<p class="title">Social</p>
					</div>
					<div class="module blue single img xbox">
						<p class="title">Games</p>
					</div>
					<div class="module orange single img android">
						<p class="title">Android</p>
					</div>
					<div class="module pink double img intel">
						<p class="title">Intel</p>
					</div>
					<div class="module red double img youtube">
						<p class="title">YouTube</p>
					</div>
					<div class="module midblue single img mail">
						<p class="title">Mail</p>
					</div>
					
	     
	          
				</li>
				<li>
				<div class="module red double img chromemyadmin"
><p class="title">ChromeMyAdmin</p>
</div>
<div class="module blue double img birds">
 <p class="title"><a href="http://learn.code.org/sh/30861113">Coded Gallery 1</a></p>
 </div>
 <div class="module yellow double img not">
						<p class="title">Notifications</p>
						<div class="img msg">
							<p class="sub-heading">View your notifications (3)</p>
						</div>
					</div>
<div class="module blue double img net">
						<p class="title">Internet</p>


					</div>
                    <a class="twitter-timeline"  href="https://twitter.com/hashtag/archervmperidot"  data-widget-id="486144536033234946">#archervmperidot Tweets</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

</li>
<li><div class="wrap">
  
  	<div class="metro-big chat">
			<div class="icon-chat"></div>
			<span class="label bottom">Mail</span>
		</div>
		<div class="metro-big calendar">
			<div class="icon-calendar"></div>
			<span class="label bottom">Calendar</span>
		</div>
		<div class="metro-small store">
			<div class="icon-store"></div>
			<span class="label bottom">Store</span>
		</div>
		<div class="metro-big ie">
			<div class="icon-ie"></div>
			<span class="label bottom">Internet Explorer</span>
		</div>
		<div class="metro-small people last">
			<div class="icon-people"></div>
			<span class="label bottom">People</span>
		</div>
<div class="metro-small people last"><a href="logout.php">
			<div class="icon-people"></div>
			<span class="label bottom">Log Out</span></a>
		</div>
		<div class="metro-small chrome">
			<div class="icon-chrome"></div>
			<span class="label bottom">Chrome</span>
		</div>
		<div class="metro-big photo"><a href="http://localhost/plogger">
      <img src="http://lorempixel.com/200/95/animals" class="img-delay-1" />
			<span class="label bottom">Photos</span>
</a>
		</div>
		<div class="metro-big video">
			<div class="icon-video"></div>
			<span class="label bottom">Videos</span>
		</div>
		<div class="metro-big music">
			<div class="icon-music"></div>
			<span class="label bottom">Musics</span>
		</div>
		<div class="metro-small games last">
			<div class="icon-games"></div>
			<span class="label bottom">Games</span>
		</div>
		<div class="metro-small twitter">
			<div class="icon-twitter"></div>
			<span class="label bottom">twitter</span>
		</div>
		<div class="metro-small gp">
			<div class="icon-gp"></div>
			<span class="label bottom">Google+</span>
		</div>
		<div class="metro-small fb">
			<div class="icon-fb"></div>
			<span class="label bottom">Facebook</span>
		</div>
		<div class="metro-small cnn">
			<div class="icon-cnn"></div>
			<span class="label bottom">CNN</span>
		</div>
		<div class="metro-big ps">
			<div class="icon-ps"></div>
			<span class="label bottom">Adobe Photoshop</span>
		</div>
	</div>

	<div class="wrap2">
		<div class="space"></div>
		<div class="metro-small bt">
			<div class="icon-bt"></div>
			<span class="label bottom">Bluetooth</span>
		</div>
		<div class="metro-small cc">
			<div class="icon-cc"></div>
			<span class="label bottom">CCleaner</span>
		</div>
		<div class="metro-big wmp last">
			<div class="icon-wmp"></div>
			<span class="label bottom">Windows Media Player</span>
		</div>
		<div class="metro-small tube">
			<div class="icon-tube"></div>
			<span class="label bottom">Youtube</span>
		</div>
		<div class="metro-big skype">
			<div class="icon-skype"></div>
			<span class="label bottom">Skype</span>
		</div>
	</div></li>
<li>
<a href="javascript://" class='wide blue'>
				<i class="icon-home"></i>
				<h2>Show Desktop</h2>
			</a>
			<a href="javascript://" class='wide orange'>
				<i class="icon-cog"></i>
				<h2>Settings</h2>
			</a>
			<a href="javascript://" class='box redgay'>
				<i class="icon-camera"></i>
				<h2>Camera</h2>
			</a>
			<a href="javascript://" class='box lime'>
				<i class="icon-heart"></i>
				<h2>Favorite</h2>
			</a>
			<a href="javascript://" class='box bluefish'>
				<i class="icon-twitter"></i>
				<h2>Twitter</h2>
			</a>
			<a href="javascript://" class='box yellow'>
				<i class="icon-map-marker"></i>
				<h2>Places</h2>
			</a>
			<a href="javascript://" class='wide magenta gallery'>
				<h2>Gallery</h2>
			</a>
			<a href="javascript://" class='box redgay'>
				<i class="icon-globe"></i>
				<h2>Browser</h2>
			</a>
			<a href="http://localhost/roundcubemail-1.0.2/" class='box orange'>
				<i class="icon-envelope-alt"></i>
				<h2>E-mail</h2>
			</a>
			<a href="javascript://" class='wide blue cal_e'>
				<h1><?php echo date("j"); ?></h1><p><?php echo date("l");?></p>
	<h2 class="top cal_i">Today's Schedule</h2>
				<i class="icon-calendar"></i>
			</a>
			<a href="javascript://" class='box lime'>
				<i class="icon-cloud"></i>
				<h2>SkyDrive</h2>
		</a>

			<a href="javascript://" class='box blue'>
				<i class="icon-facebook"></i>
				<h2>Facebook</h2>
			</a>
			<a href="javascript://" class='box bluefish'>
				<i class="icon-facetime-video"></i>
				<h2>FaceTime</h2>
			</a>
			<a href="javascript://" class='box redgay'>
				<i class="icon-tasks"></i>
				<h2>Task</h2>
			</a>
			<a href="javascript://" class='box magenta'>
				<i class="icon-list-alt"></i>
				<h2>Windows Explorer</h2>
			</a>
			<a href="javascript://" class='wide yellow'>
				<i class="icon-play"></i>
				<h2>Media</h2>
			</a>
</li>


<li><div style="width:75px; height:78px; background-image:url(http://www.livebinders.com/images/icons/binder_icon_private.png); border:0px; margin-top:6px; background-repeat: no-repeat">	<a href="http://www.livebinders.com/play/play?id=1454118">	<img src="" style="width:60px; height:60px; border:0px; padding:0px;margin:11px 0px 0px 13px;" />	</a>	</div>	<div><a href="http://www.livebinders.com/play/play?id=1454118">Exploring Computer Science Brain Book</a><br /></div></li>
<li><iframe src="http://webchat.freenode.net?channels=%23jquery%20&uio=Mj10cnVlJjQ9dHJ1ZSYxMj10cnVlcc" width="647" height="400"></iframe></li>
<li>
<div class="module double green">
<p class="title">Notifications</p>
						<div class="img msg">
							<p class="sub-heading">View your notifications (3)</p>
						</div>
					</div>
</li>			
</ul>
		</div>

</div>

		<div id="screen-nav">
			<button data-dir="prev"><</button>
			<button data-dir="next">></button>
		</div>
</div>



 </body>
 </html>
