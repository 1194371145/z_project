<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"F:\phpStudy\WWW\youme\public/../application/index\view\guest\guest.html";i:1469541907;s:73:"F:\phpStudy\WWW\youme\public/../application/index\view\Public\header.html";i:1469416464;s:73:"F:\phpStudy\WWW\youme\public/../application/index\view\Public\footer.html";i:1469088902;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="Content-Language" content="zh-CN" />
	<meta name="keywords" content="你我网,圈圈说,汉中,汉中圈圈,你我,如是观,心理,感情,youmew" />
	<meta name="description" content="你我网，缘自圈圈说，记载着圈圈的生活过往，只为留住那份曾经的感动；圈圈，又名小尤，前半生执著于感情，命途多舛，故孑然一身。" />
	<title>留言本 - _ - 你我网 </title>
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
<div class="post single-post cate0 auth1">
	<h4 class="post-date"></h4>
	<h2 class="post-title">留言本</h2>
	<div class="post-body"><blockquote>
    <p>
        你我网，缘自 <a style="TEXT-DECORATION: none" title="圈圈说" href="http://www.youmew.com/t/" target="_blank"><span style="COLOR: #ff1461; FONT-SIZE: 18px">圈</span><span style="COLOR: #ff1461; FONT-SIZE: 22px">圈</span><span style="COLOR: #ff1461; FONT-SIZE: 18px">说</span></a> ，记载着圈圈的生活过往，只为留住那份曾经的感动。
    </p>
</blockquote></div>
	<h6 class="post-footer"></h6>
</div>
<ins style="display:none;" id="AjaxCommentBegin"></ins>
<?php if(is_array($guestres) || $guestres instanceof \think\Collection): $i = 0; $__LIST__ = $guestres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
<ul class="msg" id="cmt<?php echo $vo['id']; ?>">
	<li class="msgname"><img class="avatar" src="http://cn.gravatar.com/avatar/75e215cea7a9364665ca688b5a23a58a?s=40&d=mm" alt="" width="32"/>&nbsp;<span class="commentname"><a href="http://www.youmew.com/zb_system/function/c_urlredirect.asp?url=h9t2t2p5%3A1%2F2%2F5w9w4w3%2E1436052410904%2E8n4e0t0" rel="nofollow" target="_blank"><?php echo $vo['nickname']; ?></a></span><br/><small>&nbsp;发布于&nbsp;<?php echo date("Y年m月d日 H:i:s",$vo['time']); ?>&nbsp;&nbsp;<span class="revertcomment"><a href="#comment" onclick="RevertComment('1488')">回复该留言</a></span></small></li>
	<li class="msgarticle"><?php echo $vo['content']; ?><!--rev1488--><a style="display:none;" id="AjaxCommentEnd1488"></a></li>
</ul>
<?php endforeach; endif; else: echo "" ;endif; ?>
<ul class="msg pagebar">
	<li class="pagebar"><a class="r" href="#AjaxCommentEnd" onclick="GetComments(2,2)"><span class="commentspage">下一页评论 »</span></a></li>
</ul>
<ins style="display:none;" id="AjaxCommentEnd"></ins>

<div class="post" id="divCommentPost">
	<p class="posttop"><a name="comment">发表留言:</a><small><a rel="nofollow" id="cancel-reply" href="#divCommentPost" style="display:none;">取消回复</a></small></p>
	<form id="frmSumbit" target="_self" method="post" action="<?php echo url('guest/index'); ?>" >
	<input type="hidden" name="inpId" id="inpId" value="2" />
	<input type="hidden" name="inpArticle" id="inpArticle" value="" />
	<input type="hidden" name="inpRevID" id="inpRevID" value="" />
	<p><input type="text" name="inpName" id="inpName" class="text" value="" size="28" tabindex="1" /> <label for="inpName">名称（必填）</label></p>
	<p><input type="text" name="inpEmail" id="inpEmail" class="text" value="" size="28" tabindex="2" /> <label for="inpEmail">邮箱</label></p>
	<p><input type="text" name="inpHomePage" id="inpHomePage" class="text" value="" size="28" tabindex="3" /> <label for="inpHomePage">网站链接</label></p>

<!-- 	<p><input type="text" name="inpVerify" id="inpVerify" class="text" value="" size="28" tabindex="4" /> <label for="inpVerify">验证（必填）</label> <img style="border:1px solid silver;width:60px;height:20px;" src="http://www.youmew.com/zb_system/function/c_validcode.asp?name=commentvalid" alt="" title=""/></p> -->

	<p><label for="txaArticle">正文（必填）(留言最长字数:1000)</label></p>
	<p><textarea name="txaArticle" id="txaArticle" onchange="GetActiveText(this.id);" onclick="GetActiveText(this.id);" onfocus="GetActiveText(this.id);" class="text" cols="50" rows="4" tabindex="5" ></textarea></p>
	<p><input name="btnSumbit" type="submit" tabindex="6" value="提交" onclick="JavaScript:return VerifyMessage()" class="button" /> <input type="checkbox" name="chkRemember" value="1" id="chkRemember" /> <label for="chkRemember">记住我,下次回复时不用重新输入个人信息</label></p>
	<script language="JavaScript" type="text/javascript">objActive="txaArticle";ExportUbbFrame();</script>
	</form>
	<p class="postbottom">◎欢迎参与讨论，请在这里发表您的看法、交流您的观点。</p>
	<script language="JavaScript" type="text/javascript">LoadRememberInfo();</script>
</div>
		</div>
		<div id="divSidebar">

<dl class="function" id="divSearchPanel">
<dt class="function_t">搜索</dt>
<dd class="function_c">
<form method="post" action="<?php echo url('Search/index'); ?>">
<input type="text" name="keywords" id="edtSearch" size="12" /> 
<input type="submit" value="提交" id="btnPost" />
</form>
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
<!-- 2016-7-8 9:38:07 -->