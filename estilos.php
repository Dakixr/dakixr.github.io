<?php
	include("functions.php");
    header("Content-type: text/css; charset: UTF-8");
?>

body{
	background: white;
	margin:0;
	font-family: monospace;
	background: #323847;
}
header{
	background: #485167;
	padding: 5px;
	padding-bottom: 12px;
	position: fixed;
	width: 100%;
	height: 60px;
	z-index: 1;

}
header h1{
	margin: 0 0 0 5%;
	display: inline-block;
	color: #fff;
	font-size: 25px;
	position: relative;
	top:10px;

}
header ul{
	background: #485167;
	color: white;
	float: right;
	display: inline;
	margin: 5px 0px 0px 0px;
	padding: 5px 5px 0px 0px;
}
a, a:hover, a:active{
	color: inherit;
	text-decoration:none;
}
footer{
	text-align: center;
	color: white;
	background: #8D97B0;
	border-bottom-left-radius: 10px;
	border-bottom-right-radius: 10px;
	margin-left: auto;
	margin-right: auto;
	width: 90%;
	max-width: 900px;
	margin-bottom: 20px;
}
.socialLinks{
	display: inline-block;
	padding: 8px 8px;
	background: #64708F;
	border-radius: 5px;
	text-align: center;
	width: 90px;
}
.socialLinks:hover{
	transition: background 0.2s;
	background: #323847;
	transition: 0.2;
}
.navBar-desktop{
	display: block;
}
.navBar-mobile{
	display: none;
}
.slide-menu{
	position: relative;
	text-align: center;
	border-radius: 20px;
	width: 100%;
	z-index: -1;
	padding-bottom: 20px;
	transition-timing-function: ease;
}
.skills-section{
	width: 100%;
}
.slide-menu li{
	width: 70%;
	margin-bottom: 10px;
	margin-top: 10px;
}
.menu{
	position: fixed;
	top:0;
	right: 0;
	z-index: 0;
	transition: 0.5s;
	transition-timing-function: ease;
}
input{
	display: none;
}

.menu span{
	background: white;
	width: 30px;
	height: 4px;
	display: block;
	margin-bottom: 5px;
	border-radius: 2px;
}
.menu label{
	position: relative;
	top:15px;
	right: 20px;
	cursor: pointer;
	float: right;
}
.profilePic{
	position: relative;
    top: 80px;
	height: 10%;
	min-height: 300px;
	width: auto;
	transition-property: bottom;
  	transition-duration: 1s;
  	z-index: 0;
}
.center{
	position: relative;
	top: 15%;
	text-align: center;

	display: flex;
	flex-direction: row;
	flex-wrap: wrap;


}
.center p{
	text-align: justify;
	color: grey;
	margin-bottom: 10px;
}
.center h5{
	color: white;
}
.margen{
	width: 80%;
	margin:auto;
}
.skillTitle{
	text-align: left;
}
.title{
	color: white;
	font-style: italic;
	font-weight: bold;
	font-size: 2.2em;
}
.sub-title{
	color:grey;
	font-size: 20px;
	width: 360px;
	margin: 0px auto 0px auto;
}
.backgroundProgressBarUni{
	border-radius: 20px;
	background: black;
	margin:auto;
	height: 20px;
	width: 100%;
	margin-bottom: 10px;
}
.ProgressBarUni{
	border-radius: 20px;
	background: red;
	margin:auto;
	height: 20px;
	width: <?php echo ''.$progress ?>%;
	position: relative;
	right: <?php echo ''.$desplazamiento?>%;
}
.backgroundProgressBarProc{
	border-radius: 20px;
	background: black;
	margin:auto;
	height: 20px;
	width: 100%;
	margin-bottom: 10px;
}
.ProgressBarProc{
	border-radius: 20px;
	background: red;
	margin:auto;
	height: 20px;
	width: 100%;
}
.promociones{
	background:#485167;
	margin: 20px auto 0px auto;
	width: 400px;
	border-radius: 5px;
	padding: 20px 15px 20px 15px;
}
.text-promocion{
	color: white;
	font-size: 1.5em;
	font-weight: 0px;
	text-align: left;
}
.envoltorio{
	max-width: 1000px;
	margin: 0px auto 0px auto;
}
.button-unirse{
	padding: 10px;
	width: 50%;
	background: #212529;
	color: white;
	border: 0;
	border-radius: 5px;
}
.publicacion{
	margin: 0px auto 50px auto;

}
input:checked  + .menu{
	transition: 0.3s;
	transition-delay: 0.1s;
	width: 100%;
}
input:not(checked) + .menu{
	transition: 0.4s;
	width: 10%;
}
input:checked  + .menu > .slide-menu{
	transition: 0.2s;
	transform: translateY(-40px);
}
input:not(checked) + .menu > .slide-menu{
	transition: 0.4s;
	transition-delay: 0.1s;
	transform: translateY(-250px);
}
input:checked   + .menu > label .span1{
	position: relative;
	transition: top 0.5s, transform 0.5s;
	top: 9px;
	transform: rotate(45deg);
}
input:not(checked)   + .menu > label .span1{
	position: relative;
	transition: top 0.5s, transform 0.5s;
	top: 0px;
	transform: rotate(0deg);
}
input:checked   + .menu > label .span2{
	transition: opacity 0.5s;
	opacity: 0;
}
input:not(checked)  + .menu > label .span2{
	transition: opacity 0.5s;
	opacity: 1;
}
input:checked   + .menu > label .span3{
	position: relative;
	transition: bottom 0.5s, transform 0.5s;
	bottom: 9px;
	transform: rotate(-45deg);
}
input:not(checked)  + .menu > label .span3{
	position: relative;
	transition: bottom 0.5s, transform 0.5s;
	bottom: 0px;
	transform: rotate(0deg);
}
@media (max-width: 690px){
	.navBar-mobile{
		display: block;
	}
	.navBar-desktop{
		display: none;
	}
	.promociones, .publicacion{
		width: 100%;
	}

}
@media (max-width: 370px){
	header h1{
		font-size: 25px;
	}
	.title{
		font-size: 30px;
	}
	.sub-title{
		font-size: 15px;
		line-height: 9px;
	}
	.profilePic{
		min-height: 150px;
		height: 45%;
	}


}
