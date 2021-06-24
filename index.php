<html>
<head>
<title>MANNAT SINGH</title>

<?php
include ("script.php")
?>
<style>


#myVideo {
	position: fixed;
	right: 0;
	bottom: 0;
	z-index: -100;
	top:0px;
	opacity:50%;
	width: 1561px;
    height: 878px;
    left: -5px;
}
#navtext a:hover 
{
	color:#00ffff;
}
#navtext li a
{
	padding-left:30px;
	color:white;
}
#myimgprofile
{
	border:1px black solid; 
	border-radius:20%; 
	width: 250px; 
	height: 250px; 
	position: absolute;
	right: 22px;
}
.clearfix {
  overflow: auto;
}
.btn_r {
	  background-color:#6e2849;
	  border: none;
	  color: white;
	  padding: 14px 20px;
	  cursor: pointer;
    border-radius: 12px;
    font-size: 15px;
	font-family:'Comfortaa';
	margin-top:5px;
}

/* Darker background on mouse-over */
.btn_r:hover {
  background-color: #A2597B;
}

.btn_d {
  background-color:#58A284;
  border: none;
	  color: white;
	  padding: 14px 20px;
	  cursor: pointer;
    border-radius: 12px;
    font-size: 15px;
	font-family:'Comfortaa';
	margin-top:5px;
}

/* Darker background on mouse-over */
.btn_d:hover {
  background-color:#63B694;
}

#profile
{
	border: 5px double 	#8c8c73;
    height: auto;
    margin: auto;
    width: 80%;
	padding:64px 40px ;

}

/* Images used */
.imgtop { background-image: url("images/bg9.jpg"); 

}



.bg {
  background-image: url("images/bg9.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  margin-right:0px;
}




.back-to-top {
    position: fixed;
    bottom: 25px;
    right: 25px;
    display: none;
}



</style>

</head>

<body>

<!--<div class="container-fluid" style="padding:0;">
<div class="bg-image imgtop" style="height:100%; background-position: center; background-repeat: no-repeat; background-size: cover"></div>
<div class="bg responsive">-->

<?php
include ("header.php");
include ("header2.php");
include ("education.php");
include ("workshop.php");
include ("projects.php");
include ("footer.php");
?>


	

<!--</div> container fluid-->

</body>
</html>