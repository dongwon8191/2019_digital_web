<!DOCTYPE html>
<html lang="ko">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta charset="UTF-8">
	<title>문서 제목</title>
	<style>


*{padding:0; margin:0;}
		li{list-style:none;}
		#main_header{width: 1200px; margin:0 auto;  height: 200px; background-color:skyblue; position: relative;}
		.clerfix:after{
			content:"";clear:both;
			display: block;
		}

		#main_header h1{width: 100px; height: 100px; margin:0 auto; background-color:#fff; text-align: center;
			line-height: 100px;}

			#main_header ul{width: 100%; position: absolute; bottom: 0;}


		#main_header ul li{float: left; width: 25%; height: 40px; text-align: center;}

		#main_header ul li:hover{background-color:red;}


		#content{width: 1200px; margin:0 auto;}
		#content:after{content:"";clear:both;
		 display: block; }
		#content>#main_section{float: left; width: 890px; height: 1000px; background-color:pink;}
		#content>#main_aside{float: right;  width: 290px; height: 1000px; background-color:orange;}
		#main_footer{width: 1200px; margin:0 auto;  height: 300px; background-color:skyblue;}


		/*sub*/


		#sub01_content{width: 1200px; margin:0 auto;}
		#sub01_content #sub_section{width: 100%; height: 2000px; background-color: gray;}

		#sub02_content{width: 1200px; margin:0 auto;}
		#sub02_content #sub2_section{width: 100%; height: 2000px; background-color: yellow;}


		#sub03_content{width: 1200px; margin:0 auto;}
		#sub03_content #sub3_section{width: 100%; height: 2000px; background-color: blue;}

		#sub04_content{width: 1200px; margin:0 auto;}
		#sub04_content #sub4_section{width: 100%; height: 2000px; background-color: green;}
	</style>
</head>
<body>
	<header id="main_header">
		<h1><a href="index.html">LOGO</a></h1>
		<ul class="clearfix">
			<li><a href="sub01.html">menu1</a></li>
			<li><a href="sub02.html">menu2</a></li>
			<li><a href="sub03.html">menu3</a></li>
			<li><a href="sub04.html">menu4</a></li>
			
		</ul>
	</header>