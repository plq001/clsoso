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


<meta name="keywords" content="{{keyword}}" />
<meta name="description" content="{{keyword}} magnet links and bittorrent files." />
<meta name="robots" content="noindex,follow">

    <div class="div-ads" style="margin-top: -10px; ">
    </div>

<h4></h4>
    <form class="x-sform" method="get" action="<?php echo U('Slist');?>">
        <nav class="navbar navbar-default " role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a title="磁力巴巴 收录最快的DHT搜索引擎" alt="shousibaocai" class="navbar-brand" href="/">CiLiBaBa</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class=""><a href="/">Magnet Search</a></li>
                        <li class=""><a href="/top/">Top</a></li>
                    </ul>


                    <div class="navbar-form x-searchbar navbar-left">
                        <div class="input-group">
                            <input type="text" autocomplete="off" class="form-control x-kw" name="key" value="<?php echo ($search_text); ?>" placeholder="Movies, actors..."><ul class="typeahead dropdown-menu"></ul>
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                    </span>
                        </div><!-- /input-group -->
                    </div>
                </div>
            </div>
        </nav>
    </form>
<div class="container">
<table class="table">

    <tr><td class="x-item">
        <div>
            <a title="{{x.name}}" class="title" href="{% url 'hash' x.id%}">{{x.name|highlight:words}}</a>
            <span class="ctime">{{x.create_time|timesince}}</span>
        </div>
        <div class="files">
            <ul>

            </ul>
        </div>
        <div class="tail">
                <span class="label label-warning">could be FAKE!!!</span>
        </div>
    </td></tr>
</table>


    <div class="recommendation" style="margin-top: 30px;">
        <h4>See what other people search...</h4>
        <p>
            <a href="{% url 'list' x.keyword '' %}">{{x.keyword}}</a>
        </p>
    </div>
    <ul class="pagination">

    </ul>

</div>
</div>

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