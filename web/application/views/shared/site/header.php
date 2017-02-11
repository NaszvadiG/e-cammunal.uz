<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo asset_url('images//apple-touch-icon.png'); ?>" rel=apple-touch-icon>
    <link href="<?php echo asset_url('images/favicon.ico'); ?>" rel=icon>

    <title><?php echo $title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo asset_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset_url('css/bootstrap-theme.min.css'); ?>" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo asset_url('css/ie10-viewport-bug-workaround.css'); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo asset_url('css/site.css'); ?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
    <script src="<?php echo asset_url('js/ie8-responsive-file-warning.js'); ?>"></script><![endif]-->
    <script src="<?php echo asset_url('js/ie-emulation-modes-warning.js'); ?>"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link type="text/css" rel="Stylesheet" href="<?php echo CaptchaUrls::LayoutStylesheetUrl() ?>"/>
    <link href="<?php echo asset_url('plugins/sweetalert/sweetalert.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset_url('plugins/layerslider/css/layerslider.css'); ?>" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url(); ?>" style="padding: 0 !important;">
                <img src="<?php echo asset_url('images/logo.png'); ?>"
                     style="width: 150px;height: 50px;"/>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav">

                <li class="<?php if (isset($home_active)) {
                    echo "active";
                } else {
                    echo "";
                } ?>"><a href="<?php echo site_url(); ?>">Бош сахифа </a></li>

                <li class="<?php if (isset($about_active)) {
                    echo "active";
                } else {
                    echo "";
                } ?>"><a href="<?php echo site_url('site/about'); ?>">Маълумот</a></li>

                <li class="<?php if (isset($submit_active)) {
                    echo "active";
                } else {
                    echo "";
                } ?>"><a href="<?php echo site_url('site/submit'); ?>">Мурожаат</a></li>

                <li class="<?php if (isset($result_active)) {
                    echo "active";
                } else {
                    echo "";
                } ?>"><a href="<?php echo site_url('site/result'); ?>">Статистика</a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">

                <li class="<?php if (isset($contact_active)) {
                    echo "active";
                } else {
                    echo "";
                } ?>"><a href="<?php echo site_url('site/contact'); ?>">Боғланиш</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="true">Тил танлаш <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo site_url(); ?>">Узбек</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#"
                               onclick="swal('Кайта ишлаш жараёнида!','Илтимос , лойиха администратори билан богланинг.','warning');">Русский</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<div class="container">

    <div class="page-header">
        <h2><?php echo $title; ?></h2>
    </div>

    <br>

    <div class="row">
