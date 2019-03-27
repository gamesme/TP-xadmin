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
          <li class="layui-nav-item to-index"><a title="<?php
                    if ($user->logged > 0) {
                        $logged = new Typecho_Date($user->logged);
                        _e('最后登录: %s', $logged->word());
                    }
                    ?>" onclick="x_admin_show('个人信息','<?php $options->adminUrl('profile.php'); ?>')"><?php $user->screenName(); ?></a></li>
          <li class="layui-nav-item to-index"><a href="<?php $options->logoutUrl(); ?>"><?php _e('登出'); ?></a></li>
          <li class="layui-nav-item to-index"><a target="_blank" href="/"><?php _e('前台'); ?></a></li>
        </ul>
        
    </div>
    <!-- 顶部结束 -->
    <!-- 中部开始 -->
     <!-- 左侧菜单开始 -->
    <div class="left-nav">
      <div class="side-nav">
      <?php $menu->output();?>
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