<html>
    <head>
        <meta charset="utf-8" />
        <title>Trang chủ</title>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
		<style>
			#head {
			 height:100px;
			}
			<!-- menu -->
			
			#menu {
				height: 20px;
				width:100%;
			}
			ul {
				display:inline;
				background-color:#c0392b;
				list-style-type:none;
			}
			li {
				display:block;
				float:left;
				list-style-type:none;
				list-style:none;
			}
			li a {
				background-color:#c0392b;
				color:#FFFFFF;
				text-decoration:none;
				border-left:1px #000 solid;
				magrin: 10px 5px;
				padding:5px;
			}
			li a:hover {
				background-color:#980a0a;
			}
			<!-- layout -->
			#main {
				width:100%;
			}
			#left {
				width:100px;
				background-color:#fff;
				width:35%;
			}
			#contain {
				width:100%;
				height:100px;
				background-color:#FF0000;
				position:inherit;
			}
			
			#content {
				width:100px;
				background-color:#00FF00;
				float:left;
				width:35%;
			}
			#right {
				width:100px;
				background-color:#0000FF;
				float:left;
				width:30%;
			}
			#footer {
				clear:both;
			}
		</style>
    </head>
    <body>
        <div id="head">
            <a href="#"><img src="img/logo.png" alt="banner" name="banner" /></a>
			<img src="img/ad.jpg" alt="banner" name="banner" />
        </div>
        <div id="main">
            <div id="menu">
				<ul>
				<li><a href="#">Trang chủ</a></li>
				<li><a href="#">Xã hội</a></li>
				<li><a href="#">Tin thế giới</a></li>
				<li><a href="#">Công nghệ</a></li>
				<li><a href="#">Văn hóa- Giải trí</a></li>
				<li><a href="#">Giới trẻ</a></li>
				<li><a href="#">Tình yêu</a></li>
				<li><a href="#">Tuổi teen</a></li>
				<li><a href="#">Thể thao</a></li>
				<li><a href="#">Pháp luật</a></li>
				<li><a href="dang-nhap.php">Đăng nhập</a></li>
				</ul>
			</div>
			<div id="left">abcasdasdsads</div>
			<div id="content">abc</div>
			<div id="right">asdsdas</div>

        </div>
        <div id="footer">Copyright@</div>
    </body>
</html>

