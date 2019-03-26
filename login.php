<?php
include 'common.php';
if ($user->hasLogin()) {
    $response->redirect($options->adminUrl);
}
$rememberName = htmlspecialchars(Typecho_Cookie::get('__typecho_remember_name'));
Typecho_Cookie::delete('__typecho_remember_name');
$bodyClass = 'body-100';
include 'header.php';
?>
<html>
<head>
  <meta itemprop="name" content="登录后台"/>
  <meta itemprop="image" content="http://www.youngxj.cn/logopic.png" />
  <meta name="description" itemprop="description" content="账号：admin \r\n 密码：password" />
  <meta name="viewport" content="width=device-width">
  <meta name="author" content="Youngxj" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>用typecho登录</title>
  <!-- Bootstrap 核心 CSS 文件 -->
  <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
<style>
    body{background:url('//api.yum6.cn/soimg/soimg.php');background-repeat:no-repeat;background-attachment:fixed;overflow:hidden;}
    /*web background*/
    .container{
      display:table;
      height:100%;
    }

    .row{
      display: table-cell;
      vertical-align: middle;
    }
    /* centered columns styles */
    .row-centered {
      text-align:center;
    }
    .col-centered {
      display:inline-block;
      float:none;
      margin-right:-4px;
    }
    .row-centered{
      z-index: 0;/* 为不影响内容显示必须为最高层 */
      position: relative;
      overflow: hidden;
    }
    .row-centered:after {
      content: "";/* 必须包括 */
      position: absolute;/* 固定模糊层位置 */
      left: -100%;/* 回调模糊层位置 */
      top: -100%;/* 回调模糊层位置 */
      background:url(1.jpg) no-repeat center center fixed;/* 与上面的bg中的background设置一样 */
      filter: blur(20px);/* 值越大越模糊 */
      z-index: -2;/* 模糊层在最下面 */
    }
    .well{
      background-color: rgba(0, 0, 0, 0.2);/* 为文字更好显示，将背景颜色加深 */
    }
    .well {
      position: relative;
      margin: 0 auto;
      padding: 1em;
      max-width: 30em;
      border-radius: .3em;
      box-shadow: 0 0 0 1px hsla(0,0%,100%,.3) inset,
        0 .5em 1em rgba(0, 0, 0, 0.6);
      text-shadow: 0 1px 1px hsla(0,0%,100%,.3);
      background: hsla(0,0%,100%,.3);
      overflow: hidden;
      text-align:left;
      /*    -webkit-filter: blur(3px);
      filter: blur(3px);*/
    }
    .well::before {
      content: '';
      position: absolute;
      top: 0; right: 0; bottom: 0; left: 0;
      z-index: -1;
      -webkit-filter: blur(20px);
      filter: blur(20px);
      margin: -30px;
      /*background: rgba(255,0,0,.5);*/
    }
  .form-control{background-color:rgba(255, 255, 255, 0);}
  #sizing-addon1{background:rgba(255, 0, 0, 0);}
  </style>
</head>

<body>
  <div class="container">
    <div class="row row-centered">
      <div class="well col-md-6 col-centered">
        <h2>登录到typecho</h2>
        <form action="<?php $options->loginAction(); ?>" method="post" name="login" role="form">
            <p>
                <div class="input-group input-group-md">
                <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                <label for="name" class="sr-only"><?php _e('用户名'); ?></label>
                <input type="text" id="name" name="name" value="<?php echo $rememberName; ?>" placeholder="<?php _e('用户名'); ?>" class="text-l w-100" autofocus />
                </div>
            </p>
            <p>
            <div class="input-group input-group-md">
            <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
                <label for="password" class="sr-only"><?php _e('密码'); ?></label>
                <input type="password" id="password" name="password" class="text-l w-100" placeholder="<?php _e('密码'); ?>" />
                </div>
            </p>
            <p class="submit">
                <button type="submit" class="btn btn-success btn-block">登录</button>
                <input type="hidden" name="referer" value="<?php echo htmlspecialchars($request->get('referer')); ?>" />
            </p>
            <p>
                <label for="remember"><input type="checkbox" name="remember" class="checkbox" value="1" id="remember" /> <?php _e('下次自动登录'); ?></label>
            </p>
        </form>
      </div>
    </div>
  </div>


  <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
  <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

  <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
  <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>