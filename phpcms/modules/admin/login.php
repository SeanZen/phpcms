<?php defined('IN_ADMIN') or exit('No permission resources.'); ?>
<!DOCTYPE HTML>
<html lang="zh" style="overflow-x: hidden; overflow-y: hidden; "><head>
<title>后台管理系统 - Power By la-so.net</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<meta http-equiv="x-ua-compatible" content="ie=emulateie7">
<link href="/statics/css/macro.css" type="text/css" rel="stylesheet">
<link href="/statics/css/loginopen.css" type="text/css" rel="stylesheet">
<script language="JavaScript">
<!--
	if(top!=self)
	if(self!=top) top.location=self.location;
//-->
</script>
<style>
html{overflow-x:hidden;}
.m-stwrap .logo{_background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/statics/images/admin_img/login24.png',sizingMethod='crop');}
.m-logbg img{opacity:0;visibility:hidden;transition:opacity 0.3s;-webkit-transition:opacity 0.3s;-moz-transition:opacity 0.3s;-o-transition:opacity 0.3s;*FILTER:progid:DXImageTransform.Microsoft.Fade(duration=0.3);}
.m-logbg{position: absolute; visibility: visible; opacity: 1; left: 61px;}
.m-stwrap,.g-ft1{opacity:0;visibility:hidden;transition:opacity 0.5s 0.3s;-webkit-transition:opacity 0.5s 0.3s;-moz-transition:opacity 0.5s 0.3s;-o-transition:opacity 0.5s 0.3s;}
.m-stwrap .m-login,.m-stwrap .m-reg {transition:all 0.3s;-webkit-transition:all 0.3s;-moz-transition:all 0.3s;-o-transition:all 0.3s;}
.g-ft1{position:fixed; bottom:80px;  visibility: visible; opacity: 1;}
.g-ft1 p{position:fixed;width:600px; height:30px ; margin-left: -300px; left:50%;}
.footerinfo,.footerinfo a{color:#ddd; height:30px ; line-height: 30px; }
.footerinfo a:hover{color:#f60; }
</style>
</head>
<body class="p-body">
<div class="g-bdc">
	<div class="m-stwrap" id="stwrap" style="visibility: visible; opacity: 1; ">
		<div class="logo">后台管理系统 - Power By la-so.net</div>
		<div class="m-login" style="position: absolute; visibility: visible; opacity: 1; left: 61px; " id="mlogin">
			<form method="post" class="ztag" name="myform" action="index.php?m=admin&c=index&a=login&dosubmit=1">
			<ul class="w-account">
				<li class="w0" style="z-index:100;">
					<div class="inpt ztag ">
						<label class="ztag"></label>
						<div><input class="txt" name="username" type="text"  onwebkitspeechchange="$(this).closest('form').submit()" value="用户名" onfocus="if(this.value=='用户名')this.value=''" onblur="if(!this.value)this.value='用户名'" ></div>
					</div>
				</li>
				<li class="w0">
					<div class="inpt"><label class="ztag"></label><input tabindex="2" name="password" type="password" class="txt ztag" autocomplete="off"  onwebkitspeechchange="$(this).closest('form').submit()" value="password" onfocus="if(this.value=='password')this.value=''" onblur="if(!this.value)this.value='password'"></div>
				</li>
				<li class="w1">
					<button type="submit" class="btn ztag" hidefocus="true" tabindex="4"><span>登录</span></button>
				</li>
			</ul>
			</form>
		</div>
	</div>
</div>
<div class="g-ft1">
	<p class="footerinfo">©2012 <a href="http://www.la-so.net/">拉索设计</a> la-so.net 版权所有</p>
</div>
</body>
</html>