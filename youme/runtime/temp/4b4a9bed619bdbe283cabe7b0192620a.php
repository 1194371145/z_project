<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"F:\phpStudy\WWW\youme\public/../application/index\view\article\article.html";i:1469528173;s:73:"F:\phpStudy\WWW\youme\public/../application/index\view\Public\header.html";i:1469416464;s:73:"F:\phpStudy\WWW\youme\public/../application/index\view\Public\footer.html";i:1469088902;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="Content-Language" content="zh-CN" />
	<meta name="keywords" content="你我网,圈圈说,汉中,汉中圈圈,你我,如是观,心理,感情,youmew" />
	<meta name="description" content="你我网，缘自圈圈说，记载着圈圈的生活过往，只为留住那份曾经的感动；圈圈，又名小尤，前半生执著于感情，命途多舛，故孑然一身。" />
	<title>2016年就一个字：戒！​ - 大生活 - 你我网 </title>
	<link rel="stylesheet" rev="stylesheet" href="__PUBLIC__/static/index/style/style.css" type="text/css" media="screen" />
    <link rel="shortcut icon" href="/favicon.ico" />
	<script src="__PUBLIC__/static/index/style/common.js" type="text/javascript"></script>
	<script src="__PUBLIC__/static/index/style/c_html_js_add.js" type="text/javascript"></script>
	<script src="__PUBLIC__/static/index/style/custom.js" type="text/javascript"></script>
	<script type="text/javascript">var cateurl="http://www.youmew.com/catalog.asp?cate=2"</script>
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
<div class="post single-post cate2 auth1">
	<div class="post-nav">
	<?php if($prev == ''): ?>
	<a class="l" href="javascritp:void(0);">上一篇没有了</a>
	<?php else: ?>
	<a class="l" href="<?php echo url('article/index',array('artid'=>$prev)); ?>">上一篇 »</a>
	<?php endif; if($next == ''): ?>
	<a class="r" href="javascritp:void(0);">下一篇没有了</a>
	<?php else: ?>
	<a class="r" href="<?php echo url('article/index',array('artid'=>$next)); ?>">下一篇 »</a>
	<?php endif; ?>
	</div>
	<h4 class="post-date"><?php echo date("Y-m-d H:i:s",$arts['time']); ?></h4>
	<h2 class="post-title"><?php echo $arts['title']; ?></h2>
	<div class="post-body">
		<?php echo $arts['content']; ?>
	</div>
	<h5 class="post-tags">Tags: <span class="tags">
					<?php
						$arr=explode(',', $arts['keywords']);
						foreach ($arr as $k => $v) {
							echo "<a href='http://127.0.0.1/youme/Public/index.php/index/Tags/index/tags/$v'>$v</a>";
							echo ' ';
						}
					?>
	</span></h5>
	<h6 class="post-footer">
		发布:圈圈 | 分类:<?php echo $arts['catename']; ?> | 评论:5 | 浏览:<span id="spn75"><?php echo $arts['click']; ?></span>
	        <br />
        <!-- AD BEGIN -->
        <br />
<div style="width:660px;" align="center">

</div>
        <!-- AD END -->
    </h6>
</div>
<ul class="msg mutuality">
	<li class="tbname">相关文章:</li>
	<li class="msgarticle">
	<?php if(is_array($ralateres) || $ralateres instanceof \think\Collection): $i = 0; $__LIST__ = $ralateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
	<p><a  href="<?php echo url('article/index',array('artid'=>$vo[0])); ?>"><?php echo $vo['1']; ?></a>&nbsp;&nbsp;(<?php echo date("Y-m-d H:i:s",$vo['2']); ?>)</p>
	<?php endforeach; endif; else: echo "" ;endif; ?>
	</li>
</ul>
<ul  class="msg msghead">
	<li class="tbname">留言列表:</li>
</ul>
<ins style="display:none;" id="AjaxCommentBegin"></ins><ul class="msg" id="cmt1475">
	<li class="msgname"><img class="avatar" src="http://cn.gravatar.com/avatar/e762b2d63651344d2ca3db6bcef8286b?s=40&d=mm" alt="" width="32"/>&nbsp;<span class="commentname"><a href="http://www.youmew.com/zb_system/function/c_urlredirect.asp?url=h6t4t3p0%3A5%2F0%2F5b8a8i4k5e9%2E3r7e2n3w2u7y3i1%2E8c6o7m1%2F5" rel="nofollow" target="_blank">任务易</a></span><br/><small>&nbsp;发布于&nbsp;2016-6-23 9:43:54&nbsp;&nbsp;<span class="revertcomment"><a href="#comment" onclick="RevertComment('1475')">回复该留言</a></span></small></li>
	<li class="msgarticle">“戒”博主的思想高深，我等不知哪里去理解<!--rev1475--><a style="display:none;" id="AjaxCommentEnd1475"></a></li>
</ul>
<ul class="msg" id="cmt1467">
	<li class="msgname"><img class="avatar" src="http://cn.gravatar.com/avatar/366ee3bb52f8e81f6d065da93f5f88fb?s=40&d=mm" alt="" width="32"/>&nbsp;<span class="commentname"><a href="http://www.youmew.com/zb_system/function/c_urlredirect.asp?url=h6t4t1p7%3A9%2F7%2F3w0w1w9%2E6t3h1e5s9t6o7c0k1n5o4t5e9s5%2E4c4o6m6%2F7" rel="nofollow" target="_blank">斯托克笔记</a></span><br/><small>&nbsp;发布于&nbsp;2016-6-9 16:34:35&nbsp;&nbsp;<span class="revertcomment"><a href="#comment" onclick="RevertComment('1467')">回复该留言</a></span></small></li>
	<li class="msgarticle">戒什么？<!--rev1467--><a style="display:none;" id="AjaxCommentEnd1467"></a></li>
</ul>
<ul class="msg" id="cmt1415">
	<li class="msgname"><img class="avatar" src="http://cn.gravatar.com/avatar/067731d3add7ae75ae73b617b43cfa05?s=40&d=mm" alt="" width="32"/>&nbsp;<span class="commentname"><a href="http://www.youmew.com/zb_system/function/c_urlredirect.asp?url=h8t9t5p6%3A6%2F6%2F9w7w5w6%2E3i7j2u5b6i4a7n8%2E9c1o3m2%2F2" rel="nofollow" target="_blank">微信三级分销系统</a></span><br/><small>&nbsp;发布于&nbsp;2016-4-15 16:44:08&nbsp;&nbsp;<span class="revertcomment"><a href="#comment" onclick="RevertComment('1415')">回复该留言</a></span></small></li>
	<li class="msgarticle">戒啥呢？<!--rev1415--><a style="display:none;" id="AjaxCommentEnd1415"></a></li>
</ul>
<ul class="msg" id="cmt1374">
	<li class="msgname"><img class="avatar" src="http://cn.gravatar.com/avatar/73f1441dd101f9faa7b6853ea9ed9ee8?s=40&d=mm" alt="" width="32"/>&nbsp;<span class="commentname"><a href="http://www.youmew.com/zb_system/function/c_urlredirect.asp?url=h7t2t2p8%3A7%2F7%2F8w5w7w2%2E2m8e0e4l8e0g2e8%2E1c4o9m6" rel="nofollow" target="_blank">米粒博客</a></span><br/><small>&nbsp;发布于&nbsp;2016-3-1 22:58:26&nbsp;&nbsp;<span class="revertcomment"><a href="#comment" onclick="RevertComment('1374')">回复该留言</a></span></small></li>
	<li class="msgarticle">加油 <!--rev1374--><a style="display:none;" id="AjaxCommentEnd1374"></a></li>
</ul>
<ul class="msg" id="cmt1371">
	<li class="msgname"><img class="avatar" src="http://www.youmew.com/zb_users/avatar/0.png" alt="" width="32"/>&nbsp;<span class="commentname"><a href="http://www.youmew.com/zb_system/function/c_urlredirect.asp?url=h4t1t4p1%3A3%2F8%2F8b9l8o2g3%2E0s5i5n1a3%2E2c3o2m3%2E5c2n3%2F7b6a2i8z9h0i2j3" rel="nofollow" target="_blank">百芷集</a></span><br/><small>&nbsp;发布于&nbsp;2016-2-21 15:52:47&nbsp;&nbsp;<span class="revertcomment"><a href="#comment" onclick="RevertComment('1371')">回复该留言</a></span></small></li>
	<li class="msgarticle">戒色戒酒戒毒<!--rev1371--><a style="display:none;" id="AjaxCommentEnd1371"></a></li>
</ul>
<ul class="msg" id="cmt1365">
	<li class="msgname"><img class="avatar" src="http://cn.gravatar.com/avatar/bda09c15de8028b03a5165944368f745?s=40&d=mm" alt="" width="32"/>&nbsp;<span class="commentname"><a href="http://www.youmew.com/zb_system/function/c_urlredirect.asp?url=h8t2t0p5%3A3%2F0%2F9L2o1u7i7s3H2a5n6%2E9c6o2m8%2F9" rel="nofollow" target="_blank">路易大叔</a></span><br/><small>&nbsp;发布于&nbsp;2016-2-11 23:40:17&nbsp;&nbsp;<span class="revertcomment"><a href="#comment" onclick="RevertComment('1365')">回复该留言</a></span></small></li>
	<li class="msgarticle">戒就一个字 不希望你会说第二次啊<!--rev1365--><ul class="msg" id="cmt1366">
	<li class="msgname"><img class="avatar" src="http://cn.gravatar.com/avatar/e820556ba345a1515bb6a01b750c45e5?s=40&d=mm" alt="" width="32"/>&nbsp;<span class="commentname"><a href="http://www.youmew.com/zb_system/function/c_urlredirect.asp?url=h4t3t9p6%3A8%2F0%2F6h3t6t2p4s3%3A1%2F8%2F9c9h5o1j3e7m5m5y6%2E2w8o4r7d6p9r7e1s5s0%2E9c2o6m6" rel="nofollow" target="_blank">ChoJemmy</a></span><br/><small>&nbsp;发布于&nbsp;2016-2-13 22:19:49&nbsp;&nbsp;<span class="revertcomment"><a href="#comment" onclick="RevertComment('1366')">回复该留言</a></span></small></li>
	<li class="msgarticle">戒啥<!--rev1366--><a style="display:none;" id="AjaxCommentEnd1366"></a></li>
</ul>
<a style="display:none;" id="AjaxCommentEnd1365"></a></li>
</ul>
<ins style="display:none;" id="AjaxCommentEnd"></ins>

<div class="post" id="divCommentPost">
	<p class="posttop"><a name="comment">发表留言:</a><small><a rel="nofollow" id="cancel-reply" href="#divCommentPost" style="display:none;">取消回复</a></small></p>
	<form id="frmSumbit" target="_self" method="post" action="http://www.youmew.com/zb_system/cmd.asp?act=cmt&amp;key=9193b34f" >
	<input type="hidden" name="inpId" id="inpId" value="75" />
	<input type="hidden" name="inpArticle" id="inpArticle" value="" />
	<input type="hidden" name="inpRevID" id="inpRevID" value="" />
	<p><input type="text" name="inpName" id="inpName" class="text" value="" size="28" tabindex="1" /> <label for="inpName">名称（必填）</label></p>
	<p><input type="text" name="inpEmail" id="inpEmail" class="text" value="" size="28" tabindex="2" /> <label for="inpEmail">邮箱</label></p>
	<p><input type="text" name="inpHomePage" id="inpHomePage" class="text" value="" size="28" tabindex="3" /> <label for="inpHomePage">网站链接</label></p>

	<p><input type="text" name="inpVerify" id="inpVerify" class="text" value="" size="28" tabindex="4" /> <label for="inpVerify">验证（必填）</label> <img style="border:1px solid silver;width:60px;height:20px;" src="http://www.youmew.com/zb_system/function/c_validcode.asp?name=commentvalid" alt="" title=""/></p>

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
</dl><dl class="function" id="divComments">
<dt class="function_t">最新留言</dt>
<dd class="function_c">
<ul><li style="text-overflow:ellipsis;"><a href="http://www.youmew.com/post/77.html#cmt1474" title="2016-6-20 9:31:36 post by 任务易">要钱还是要脸，这是这个社会应该思考的</a></li><li style="text-overflow:ellipsis;"><a href="http://www.youmew.com/post/8.html#cmt1472" title="2016-6-16 10:31:18 post by 母婴B2b">感谢博主的分享～</a></li><li style="text-overflow:ellipsis;"><a href="http://www.youmew.com/post/67.html#cmt1470" title="2016-6-14 13:27:07 post by 母婴B2b">感谢博主的分享~</a></li><li style="text-overflow:ellipsis;"><a href="http://www.youmew.com/guestbook.html#cmt1469" title="2016-6-13 20:47:03 post by BeautifulDays">博客导航栏图片设计的不错啊，前来逛逛。</a></li><li style="text-overflow:ellipsis;"><a href="http://www.youmew.com/post/76.html#cmt1468" title="2016-6-12 11:19:36 post by 夏日博客">有的赢得了人生，有的输得一踏糊涂。</a></li><li style="text-overflow:ellipsis;"><a href="http://www.youmew.com/post/75.html#cmt1467" title="2016-6-9 16:34:35 post by 斯托克笔记">戒什么？</a></li><li style="text-overflow:ellipsis;"><a href="http://www.youmew.com/post/6.html#cmt1466" title="2016-5-30 14:25:48 post by 母婴B2b">感谢博主分享~</a></li><li style="text-overflow:ellipsis;"><a href="http://www.youmew.com/post/76.html#cmt1464" title="2016-5-26 18:20:30 post by themebetter">终于搞定新主题tob上线，过来看看，有梦</a></li><li style="text-overflow:ellipsis;"><a href="http://www.youmew.com/guestbook.html#cmt1462" title="2016-5-24 15:59:25 post by 猫先生">曾经来过</a></li><li style="text-overflow:ellipsis;"><a href="http://www.youmew.com/post/77.html#cmt1454" title="2016-5-20 16:01:45 post by 软膜天花">第一次来，网站做的很不错</a></li></ul>
</dd>
</dl><dl class="function" id="divMisc">
<dt class="function_t">分享到：</dt>
<dd class="function_c">
<ul><li><img src="http://www.youmew.com/zb_system/image/logo/weixin.jpg" height="110" width="110" border="0" alt="你我网微信公众平台" title="微信扫一扫，关注圈圈的最新消息。" /></li><li><!-- Baidu Button BEGIN --><div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a title="分享到微信" href="#" class="bds_weixin" data-cmd="weixin"></a><a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone"></a><a title="分享到百度贴吧" href="#" class="bds_tieba" data-cmd="tieba"></a><a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina"></a></div><script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":["sqq","weixin","qzone","tsina","tieba","douban"],"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script><!-- Baidu Button END --></li><li><a href="http://www.youmew.com/feed.asp" target="_blank"><img src="http://www.youmew.com/zb_system/image/logo/rss.png" height="31" width="88" border="0" alt="订阅本站的 RSS 2.0 新闻聚合" /></a></li></ul>
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
<!-- 2016-6-23 1:59:46 -->