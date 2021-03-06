<!DOCTYPE html>
<html lang="zh-cmn-Hans" prefix="og: http://ogp.me/ns#" class="han-init">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>博客-详情页</title>
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
    <link rel="stylesheet" href="public/index/css/iconfont.css">
    <link rel="stylesheet" href="public/index//prism.css"></script>

</head>
<body class="">
    <header class="site-header">
        <div class="container">
        <?php if(!empty($_SESSION['username'])):?>
            <h1><a href="javascript:;">欢迎<?=$name;?>来阅读</a></h1>
        <?php endif;?>
            <nav class="site-header-nav" role="navigation">

                <a href="http://www.syd123.com/index.php">返回首页</a>

                <a href="javascript:;"></a>

                <a href="javascript:;"></a>

                <a href="javascript:;"></a>

                <a href="javascript:;"></a>

                <a href="javascript:;"></a>
            </nav>
        </div>
    </header>
    <!-- / header -->
<section>
    <div class="container">
        <div class="columns">
            <div class="column three-fourths">
                <div class="collection-title">
                    <h1 class="collection-header"><?=$data['title'];?></h1>
                    <div class="collection-info">
                        <span class="meta-info">
                            <span class="octicon octicon-calendar"></span> <?=$data['createtime'];?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / .banner -->
 <section class="container content">
    <div class="columns">
        <div class="column three-fourths">
            <article class="article-content markdown-body">
                <p><?=$data['content'];?></p>

<p>以上是个人见解，欢迎各位讨论。​<img class="emoji" title=":smile:" alt=":smile:" src="public/index/images/1f604.png" height="20" width="20" align="absmiddle">​</p>

            </article>
            <div class="share">
            <h4>回复</h4>
            <form action="http://www.syd123.com/index.php?c=artical&a=repost&id=<?=$_GET['id'];?>" method="post" accept-charset="utf-8">
                <div class="share-component" >
                    <textarea name="content" style="width:500px;height:100px;">
                    </textarea>
                    <div class="tips"></div>
                </div>
                <input type="submit" name="提交" />
            </form>
            </div>
            <div class="comment">
                <div class="comments">
    <div id="disqus_thread"></div>

    <noscript>Please enable JavaScript to view the &lt;a href="http://disqus.com/?ref_noscript"&gt;comments powered by Disqus.&lt;/a&gt;
</noscript>
</div>
</div>
</div>
        <div class="column one-fourth">
            <h3>热门回复</h3>

            <div class="boxed-group flush" role="navigation">
            <!-- <h3>Repositories contribute to</h3> -->
            <ul class="boxed-group-inner mini-repo-list">
            <?php if(!empty($hui)):?>
                <?php foreach($hui as $key => $val):?>
                <li class="public source ">

                        <p><?=$val['username'];?>;<?=$val['createtime'];?></p>
                        <span><?=$val['content'];?></span>

                </li>
                <hr />
                <?php endforeach;?>
                <?php else: ?>
                暂无
            <?php endif;?>

            </ul>
            </div>

        </div>
    </div>

</section>

<!-- /section.content -->
    <footer class="container">
        <div class="site-footer" role="contentinfo">
            <div class="copyright left mobile-block">
                    © 2017
                    <span title="overtrue.me">overtrue.me</span>
                    <a href="javascript:;"></a>
            </div>

            <ul class="site-footer-links right mobile-hidden">
                <li>
                    <a href="javascript:;"></a>
                </li>
            </ul>
            <a href="https://github.com/overtrue/overtrue.github.io" target="_blank" aria-label="view source code">
                <span class="mega-octicon octicon-mark-github" title="GitHub"></span>
            </a>
            <ul class="site-footer-links mobile-hidden">

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

                <li>
                    <a href="javascript:;"></a>
                </li>

            </ul>

        </div>
    </footer>
    <!-- / footer -->
</body>
</html>