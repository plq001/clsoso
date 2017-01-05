<?php if (!defined('THINK_PATH')) exit();?>
<link rel="stylesheet" type="text/css" href="/Public/Static/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="/Public/Static/css/bootstrap.css.map" />
<link rel="stylesheet" type="text/css" href="/Public/Static/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/Static/css/bootstrap-theme.css" />
<link rel="stylesheet" type="text/css" href="/Public/Static/css/bootstrap-theme.css.map" />
<link rel="stylesheet" type="text/css" href="/Public/Static/css/bootstrap-theme.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/Static/css/ssbc.css" />

<script src="/Public/Static/js/bootstrap.js"></script>
<script src="/Public/Static/js/bootstrap.min.js"></script>
<script src="/Public/Static/js/bootstrap-typeahead.min.js"></script>
<script src="/Public/Static/js/jquery-1.11.0.min.js"></script>
<script src="/Public/Static/js/npm.js"></script>
<script src="/Public/Static/js/ssbc.js"></script>


<meta charset="utf-8">
<meta name="keywords" content="磁力巴巴,cilibaba,磁力助手,手撕包菜,磁力搜索,磁力链接,种子搜索网站,BT搜索,DHT搜索,番号搜索">
<meta name="description" content="CiLiBaBa，专业提供磁力连接搜索的网站，全网最新，千万磁力链接，可以使用迅雷、百度云等下载和浏览磁力链接的内容。">
<form method="get" class="x-sform"  action="<?php echo U('Slist');?>">
<div class="container">
    <div class="div-search-box col-lg-offset-2 col-lg-8">
        <div class="logo">
            <img src="/Public/Static/cilibaba.png" />
        </div>
        <div>
            <div class="input-group">
                <input placeholder="Movies, actors, or what do you want?" autocomplete="off" type="text" class="form-control x-kw" name="key">
                <span class="input-group-btn">
                <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span> Search</button>
                </span>
            </div>
        </div>
        <div class="good">
            <p>
               <!-- <a href="/search/{{r.keyword|urlencode}}/">{{r.keyword}}</a> &nbsp;&nbsp;&nbsp;&nbsp;关键字-->
            </p>
        </div>
        <div class="div-ads-front" style="margin-top: 40px; text-align:center; margin-left: 0px;">
        </div>
    </div>
</div>
</form>



<nav class="navbar navbar-default nav-foot" role="navigation">
    <div class="container">
        <div class="">
            <h5>About This Site</h5>
            <p>This is a Torrent Search Engine based on DHT protocol. All resources are automatically indexed from the DHT network. Instead of torrent files, <br/><b>WE DONT SAVE ANY FILES!</b>
            <h5>About Magnet Links</h5>
            <p>Magnet URI Scheme is a de facto standard defining a uniform resource identifier (URI) scheme for Magnet links, which mainly refer to resources available for download via peer-to-peer networks. --Wikipedia
            </p>
        </div>
        <div class="navbar-header">
        </div>
    </div>
</nav>



<script>
$(function(){
    $('.x-kw').focus();
});
setTimeout(function(){
    $('.good').fadeIn('slow');
}, 500);
</script>