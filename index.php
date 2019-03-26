<?php
include 'common.php';
$stat = Typecho_Widget::widget('Widget_Stat');
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php _e('后台管理 - %s', $options->title); ?></title>
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="./css/font.css">
	<link rel="stylesheet" href="./css/xadmin.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="./lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js/xadmin.js"></script>

</head>
<body>
    <!-- 顶部开始 -->
    <div class="container">
        <div class="logo"><a href="<?php $options->adminUrl(''); ?>">Typecho</a></div>
        <div class="left_open">
            <i title="展开左侧栏" class="iconfont">&#xe699;</i>
        </div>
        <ul class="layui-nav right" lay-filter="">
          <li class="layui-nav-item">
            <a href="javascript:;"><?php $user->screenName(); ?></a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
              <dd><a onclick="x_admin_show('个人信息','<?php $options->adminUrl('profile.php'); ?>')">个人信息</a></dd>
              
              <dd><a href="<?php $options->logoutUrl(); ?>"><?php _e('登出'); ?></a></dd>
            </dl>
          </li>
          <li class="layui-nav-item to-index"><a target="_blank" href="/"><?php _e('前台'); ?></a></li>
        </ul>
        
    </div>
    <!-- 顶部结束 -->
    <!-- 中部开始 -->
     <!-- 左侧菜单开始 -->
    <div class="left-nav">
      <div id="side-nav">
        <ul id="nav">
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe6b8;</i>
                    <cite>控制台</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="<?php $options->adminUrl('profile.php'); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>个人设置</cite>
                            
                        </a>
                    </li >
                    <?php if($user->pass('administrator', true)): ?>
                    <li>
                        <a _href="<?php $options->adminUrl('plugins.php'); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>插件</cite>
                            
                        </a>
                    </li>
					<li>
                        <a _href="<?php $options->adminUrl('themes.php'); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>外观</cite>
                            
                        </a>
                    </li>
					<li>
                        <a _href="<?php $options->adminUrl('backup.php'); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>备份</cite>
                            
                        </a>
                    </li>
                    <?php endif ?>
                </ul>
            </li>
            <li>
            <?php if($user->pass('contributor', true)): ?>
                <a href="#">
                    <i class="iconfont">&#xe723;</i>
                    <cite>撰写</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="<?php $options->adminUrl('write-post.php'); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>撰写新文章</cite>        
                            </a>
                    </li>
                    <?php if($user->pass('editor', true)): ?>
					<li>
                        <a _href="<?php $options->adminUrl('write-page.php'); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>创建新页面</cite>            
                        </a>
                    </li>
                    <?php endif ?>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe726;</i>
                    <cite>内容管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                <li>
                        <a _href="<?php $options->adminUrl('manage-posts.php'); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>管理文章</cite>
                        </a>
                    </li >
                    <li>
                        <a _href="<?php $options->adminUrl('manage-comments.php'); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>管理评论</cite>
                        </a>
                    </li >
                    <?php if($user->pass('editor', true)): ?>
                    <li>
                        <a _href="<?php $options->adminUrl('manage-pages.php'); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>独立页面</cite>
                        </a>
                    </li >
                    <li>
                        <a _href="<?php $options->adminUrl('manage-categories.php'); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>管理分类</cite>
                        </a>
                    </li >
					<li>
                        <a _href="<?php $options->adminUrl('manage-tags.php'); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>管理标签</cite>
                        </a>
                    </li >
					<li>
                        <a _href="<?php $options->adminUrl('manage-medias.php'); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>管理文件</cite>
                        </a>
                    </li >
					<?php endif ?>
                </ul>
                <?php endif ?>                           
            </li>
            <?php if($user->pass('administrator', true)): ?>
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe6ce;</i>
                    <cite>管理员设置</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                <li>
                        <a _href="<?php $options->adminUrl('manage-users.php'); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>管理用户</cite>
                        </a>
                    </li >
                    <li>
                        <a _href="<?php $options->adminUrl('options-general.php'); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>基本设置</cite>
                        </a>
                    </li >
                    <li>
                        <a _href="<?php $options->adminUrl('options-discussion.php'); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>评论</cite>
                        </a>
                    </li>
                    <li>
                        <a _href="<?php $options->adminUrl('options-reading.php'); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>阅读</cite>
                        </a>
                    </li>
                    <li>
                        <a _href="<?php $options->adminUrl('options-permalink.php'); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>永久链接</cite>
                        </a>
                    </li>
                    
                </ul>
            </li>
            <?php endif ?>
            <li>
                <a href="<?php $options->logoutUrl(); ?>">
                    <i class="iconfont">&#59434;</i>
                    <cite>注销</cite>
                </a>
            </li>
                </ul>
            </li>
        </ul>
      </div>
    </div>
    <!-- <div class="x-slide_left"></div> -->
    <!-- 左侧菜单结束 -->
    <!-- 右侧主体开始 -->
    <div class="page-content">
        <div class="layui-tab tab" lay-filter="xbs_tab" lay-allowclose="false">
          <ul class="layui-tab-title">
            <li class="home"><i class="layui-icon">&#xe68e;</i>网站概要</li>
          </ul>
          <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <iframe src='./home.php' frameborder="0" scrolling="yes" class="x-iframe"></iframe>
            </div>
          </div>
        </div>
    </div>
    <div class="page-content-bg"></div>
    <!-- 右侧主体结束 -->
    <!-- 中部结束 -->
	
    <!-- 底部开始 -->
    <div class="footer">
        <div class="copyright">
            <p style="float:left;padding:0px 20px"> Copyright ©2019 All Rights Reserved </p>
            <p style="float:right;padding:0px 20px"> Driven By X-admin & Typcho </p>
        </div>		
    </div>
    <!-- 底部结束 -->
</body>
</html>
<?php include 'footer.php'; ?>