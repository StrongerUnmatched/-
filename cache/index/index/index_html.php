<!DOCTYPE html>
<html lang="zh-cmn-Hans" prefix="og: http://ogp.me/ns#" class="han-init">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>博客-首页</title>
    <link rel="stylesheet" href="public/index/css/primer.css">
    <link rel="stylesheet" href="public/index/css/user-content.min.css">
    <link rel="stylesheet" href="public/index/css/octicons.css">
    <link rel="stylesheet" href="public/index/css/collection.css">
    <link rel="stylesheet" href="public/index/css/repo-card.css">
    <link rel="stylesheet" href="public/index/css/repo-list.css">
    <link rel="stylesheet" href="public/index/css/mini-repo-list.css">
    <link rel="stylesheet" href="public/index/css/boxed-group.css">
    <link rel="stylesheet" href="public/index/css/common.css">
    <link rel="stylesheet" href="public/index/css/share.min.css">
    <link rel="stylesheet" href="public/index/css/responsive.css">
    <link rel="stylesheet" href="public/index/css/index.css">
    <link rel="stylesheet" href="public/index/css/prism.css">
</head>
<body class="home">
    <header class="site-header">
        <div class="container">
            <h1><a href="javascript:;">I LIKE PHP</a></h1>
            <nav class="site-header-nav" role="navigation">
                <?php if(!empty($_SESSION['username'])):?>

                    <?php if($_SESSION['type'] == 1):?>
                    <a href="javascript:;" style="color:yellow;">欢迎<?=$_SESSION['username'];?>回到博客</a>
                        <a href="http://www.syd123.com/index.php?m=admin&c=index&a=index" style="color:yellow;">帖子管理</a>
                    <?php else: ?>
                    <a href="javascript:;" style="color:yellow;">欢迎<?=$_SESSION['username'];?>来到本博客</a>
                    <?php endif;?>

                    <a href="http://www.syd123.com/index.php?c=user&a=logout" style="color:yellow;">退出</a>

                <?php else: ?>

                    <a href="http://www.syd123.com/index.php?c=user&a=login" style="color:yellow;">你好,登录</a>

                    <a href="http://www.syd123.com/index.php?c=user&a=register" style="color:yellow;">欢迎注册</a>

                <?php endif;?>


            </nav>
        </div>
    </header>
    <!-- / header -->
    <section class="banner">
    <div class="collection-head">
        <div class="container">
            <div class="collection-title">
                <h1 class="collection-header">欢迎来到这个博客</h1>
                <div class="collection-info">
                    <span class="meta-info">
                        <span class="octicon octicon-location"></span>
                        中国 北京
                    </span>
                    <span class="tooltipped tooltipped-s tooltipped-multiline meta-info" aria-label="can use PHP, JavaScript, HTML+CSS, C/C++">
                        <span class="octicon octicon-code"></span>
                        毕业了
                    </span>
                    <span class="meta-info">
                        <span class="octicon octicon-organization"></span>
                        <a href="javascript:;"></a>
                    </span>
                    <span class="meta-info last-updated">
                        <span class="octicon octicon-mark-github"></span>
                        <a href="javascript:;"></a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.banner -->
<section class="container content">
    <div class="columns">
        <div class="column two-thirds">
            <ol class="repo-list">
                <?php foreach($data as $blog):?>
                <li class="repo-list-item">
                    <h3 class="repo-list-name">
                        <a href="http://www.syd123.com/index.php?c=artical&a=artical&id=<?=$blog['bid'];?>"> <?=$blog['title'];?></a>
                    </h3>
                    <p class="repo-list-description">
                    </p>
                    <p class="repo-list-meta">
                        <span class="octicon octicon-calendar"></span> <?=$blog['createtime'];?>
                    </p>
                </li>
                <?php endforeach;?>

            </ol>
        </div>
        <div class="column one-third">
            <h3>Popular Repositories</h3>
            <div class="boxed-group flush" role="navigation">
                <h3>Repositories contribute to</h3>
                <ul class="boxed-group-inner mini-repo-list">

                    <li class="public source ">
                        <a href="javascript:;" target="_blank" title="overtrue/wechat" class="mini-repo-list-item css-truncate">
                            <span class="repo-icon octicon octicon-repo"></span>
                            <span class="repo-and-owner css-truncate-target">
                                overtrue/wechat
                            </span>
                        </a>
                    </li>

                    <li class="public source ">
                        <a href="javascript:;" target="_blank" title="EasyWeChat/site" class="mini-repo-list-item css-truncate">
                            <span class="repo-icon octicon octicon-repo"></span>
                            <span class="repo-and-owner css-truncate-target">
                                EasyWeChat/site
                            </span>
                        </a>
                    </li>

                    <li class="public source ">
                        <a href="javascript:;" target="_blank" title="laravel/framework" class="mini-repo-list-item css-truncate">
                            <span class="repo-icon octicon octicon-repo"></span>
                            <span class="repo-and-owner css-truncate-target">
                                laravel/framework
                            </span>
                        </a>
                    </li>

                    <li class="public source ">
                        <a href="javascript:;" target="_blank" title="caouecs/Laravel-lang" class="mini-repo-list-item css-truncate">
                            <span class="repo-icon octicon octicon-repo"></span>
                            <span class="repo-and-owner css-truncate-target">
                                caouecs/Laravel-lang
                            </span>
                        </a>
                    </li>

                </ul>
            </div>

        </div>
    </div>
    <div class="pagination text-align">
      <div class="btn-group">
            <a href="<?=$page['first'];?>" class="active btn btn-outline">首页</a>
            <a href="<?=$page['pre'];?>" class="active btn btn-outline">上一页</a>
            <a href="<?=$page['next'];?>" class="active btn btn-outline">下一页</a>
            <a href="<?=$page['last'];?>" class="active btn btn-outline">尾页</a>

        </div>
    </div>
    <!-- /pagination -->
</section>
<!-- /section.content -->
    <footer class="container">
        <div class="site-footer" role="contentinfo">
            <div class="copyright left mobile-block">
                    © 2015
                    <span title="overtrue.me">overtrue.me</span>
                    <a href="javascript:;"></a>
            </div>

            <ul class="site-footer-links right mobile-hidden">
                <li>
                    <a href="javascript:;"></a>
                </li>
            </ul>
            <a href="javascript:;" target="_blank" aria-label="view source code">
                <span class="mega-octicon octicon-mark-github" title="GitHub"></span>
            </a>
            <ul class="site-footer-links mobile-hidden">

                <li>
                    <a href="http://www.baidu.com" target="_blank">百度</a>
                </li>

                <li>
                    <a href="javascript:;"></a>
                </li>

                <li>
                    <a href="javascript:;"></a>
                </li>

                <li>
                    <a href="javascript:;"></a>
                </li>

                <li>
                    <a href="javascript:;"></a>
                </li>

                <li>
                    <a href="javascript:;"></a>
                </li>

            </ul>

        </div>
    </footer>
    <!-- / footer -->




</body></html>