<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"D:\phpStudy\WWW\youme\public/../application/index\view\search\search.html";i:1469527990;s:73:"D:\phpStudy\WWW\youme\public/../application/index\view\Public\header.html";i:1469416464;s:73:"D:\phpStudy\WWW\youme\public/../application/index\view\Public\footer.html";i:1469088902;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="Content-Language" content="zh-CN" />
	<meta name="keywords" content="你我网,圈圈说,汉中,汉中圈圈,你我,如是观,心理,感情,youmew" />
	<meta name="description" content="你我网，缘自圈圈说，记载着圈圈的生活过往，只为留住那份曾经的感动；圈圈，又名小尤，前半生执著于感情，命途多舛，故孑然一身。" />
	<title>Search:觉悟 - _ - 你我网 </title>
	<link rel="stylesheet" rev="stylesheet" href="__PUBLIC__/static/index/style/style.css" type="text/css" media="screen" />
    <link rel="shortcut icon" href="/favicon.ico" />
	<script src="__PUBLIC__/static/index/style/common.js" type="text/javascript"></script>
	<script src="__PUBLIC__/static/index/style/c_html_js_add.js" type="text/javascript"></script>
	<script src="__PUBLIC__/static/index/style/custom.js" type="text/javascript"></script>
</head>
<body class="single">
<div id="divAll">
	<div id="divPage">
	<div id="divMiddle">
		<div id="divTop">
			<h1 id="BlogTitle"><a href="http://www.youmew.com/"><img src="__PUBLIC__/static/index/images/LOGO.gif" alt="你我网" onMouseover="shake(this,'onmouseout')" /></a></h1>
			<!-- <h3 id="BlogSubTitle">www.Youmew.com</h3> -->
		</div>
		<div id="divNavBar">
<ul>
<li><a href="<?php echo url('Index/index'); ?>">首页</a></li>
<?php if(is_array($navres) || $navres instanceof \think\Collection): $i = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
<li><a href="
<?php if($vo['type'] == 0): ?>
<?php echo url('lst/index',array('cateid'=>$vo['id'])); else: ?>
<?php echo url('guest/index',array('cateid'=>$vo['id'])); endif; ?>
"><?php echo $vo['catename']; ?></a></li>
<?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
		</div>
		<div id="divMain">
<div class="post single-post cate0 auth0">
	<h4 class="post-date"></h4>
	<h2 class="post-title">Search:<?php echo $keywords; ?></h2>
	<div class="post-body"> 
	<?php if($seares != ''): if(is_array($seares) || $seares instanceof \think\Collection): $i = 0; $__LIST__ = $seares;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
	<p>
		<br/><font size="+0.5"><a target="_blank" href="<?php echo url('article/index',array('artid'=>$vo['id'])); ?>"><?php echo $vo['title']; ?></a></font>
		<br/><?php echo $vo['desc']; ?>
		<br/>
		<br/>
	</p> 
	<?php endforeach; endif; else: echo "" ;endif; else: ?>
	没有搜索结果！
	<?php endif; ?>
</div>
	<h6 class="post-footer"></h6>
</div>



		</div>
		<div id="divSidebar">

<dl class="function" id="divSearchPanel">
<dt class="function_t">搜索</dt>
<dd class="function_c">
<div><div id="mod_searchpanel" style="display:none;"><script type="text/javascript">LoadFunction('searchpanel');</script></div></div>
</dd>
</dl><dl class="function" id="divTags">
<dt class="function_t">按标签浏览</dt>
<dd class="function_c">
<ul><li class="tag-name tag-name-size-2"><a href="http://www.youmew.com/catalog.asp?tags=%E8%A7%89%E6%82%9F">觉悟<span class="tag-count"> (18)</span></a></li><li class="tag-name tag-name-size-3"><a href="http://www.youmew.com/catalog.asp?tags=%E4%BA%BA%E7%94%9F">人生<span class="tag-count"> (26)</span></a></li><li class="tag-name tag-name-size-2"><a href="http://www.youmew.com/catalog.asp?tags=%E6%91%84%E5%BD%B1">摄影<span class="tag-count"> (15)</span></a></li><li class="tag-name tag-name-size-2"><a href="http://www.youmew.com/catalog.asp?tags=%E7%88%B1%E6%83%85">爱情<span class="tag-count"> (11)</span></a></li><li class="tag-name tag-name-size-3"><a href="http://www.youmew.com/catalog.asp?tags=%E5%BF%83%E6%83%85">心情<span class="tag-count"> (34)</span></a></li><li class="tag-name tag-name-size-3"><a href="http://www.youmew.com/catalog.asp?tags=%E7%94%9F%E6%B4%BB">生活<span class="tag-count"> (28)</span></a></li><li class="tag-name tag-name-size-1"><a href="http://www.youmew.com/catalog.asp?tags=%E9%9F%B3%E4%B9%90">音乐<span class="tag-count"> (6)</span></a></li><li class="tag-name tag-name-size-0"><a href="http://www.youmew.com/catalog.asp?tags=%E8%A7%84%E5%88%99">规则<span class="tag-count"> (5)</span></a></li><li class="tag-name tag-name-size-0"><a href="http://www.youmew.com/catalog.asp?tags=%E5%A4%95%E9%98%B3">夕阳<span class="tag-count"> (1)</span></a></li><li class="tag-name tag-name-size-0"><a href="http://www.youmew.com/catalog.asp?tags=%E5%AF%82%E5%AF%9E">寂寞<span class="tag-count"> (3)</span></a></li><li class="tag-name tag-name-size-1"><a href="http://www.youmew.com/catalog.asp?tags=%E8%BF%87%E5%BE%80">过往<span class="tag-count"> (8)</span></a></li><li class="tag-name tag-name-size-0"><a href="http://www.youmew.com/catalog.asp?tags=%E8%A5%BF%E4%B9%A1">西乡<span class="tag-count"> (3)</span></a></li><li class="tag-name tag-name-size-1"><a href="http://www.youmew.com/catalog.asp?tags=%E5%9B%9E%E5%BF%86">回忆<span class="tag-count"> (8)</span></a></li><li class="tag-name tag-name-size-0"><a href="http://www.youmew.com/catalog.asp?tags=%E6%97%85%E8%A1%8C">旅行<span class="tag-count"> (1)</span></a></li></ul>
</dd>
</dl>

		</div>
		<div id="divBottom">
          <h3 id="BlogCopyRight"><script src="http://s20.cnzz.com/stat.php?id=681872&web_id=681872&show=pic" language="JavaScript"></script>　陕ICP备11002139号-1</h3>
			<h4 id="BlogPowerBy">Powered By <a href="http://www.rainbowsoft.org/" title="RainbowSoft Studio Z-Blog" target="_blank">Z-Blog</a>　本站遵循<a rel="license" target="_blank" title="署名-非商业性使用-禁止演绎 3.0 中国大陆许可协议" href="http://creativecommons.org/licenses/by-nc-nd/3.0/cn/"> CC BY-NC-ND 3.0 CN协议 </a>。</h4>
		</div>
		<div class="clear"></div>
	</div><div class="clear"></div>
	</div><div class="clear"></div>
</div>
<!-- dd BEGIN -->
<script language="JavaScript1.2">
var typ=["marginTop","marginLeft"],rangeN=10,timeout=0; 
function shake(o,end){ 
var range=Math.floor(Math.random()*rangeN); 
var typN=Math.floor(Math.random()*typ.length); 
o["style"][typ[typN]]=""+range+"px"; 
var shakeTimer=setTimeout(function(){shake(o,end)},timeout); 
o[end]=function(){clearTimeout(shakeTimer)}; 
} 
  </script>
<!-- dd END -->
</body>
</html>
<!-- 2016-7-21 10:39:49 -->