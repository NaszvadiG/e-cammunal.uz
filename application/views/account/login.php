<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo asset_url('images//apple-touch-icon.png'); ?>" rel=apple-touch-icon>
    <link href="<?php echo asset_url('images/favicon.ico'); ?>" rel=icon>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo asset_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset_url('css/bootstrap-theme.min.css'); ?>" rel="stylesheet">

    <title>Кириш</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo asset_url('css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo asset_url('css/ie10-viewport-bug-workaround.css'); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo asset_url('css/signin.css'); ?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
    <script src="<?php echo asset_url('js/ie8-responsive-file-warning.js'); ?>"></script>
    <![endif]-->
    <script src="<?php echo asset_url('js/ie-emulation-modes-warning.js'); ?>"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div class="container">

    <form class="form-signin" action="<?php echo site_url("/account/validate_credentials") ?>" method="post">
        <h2 class="form-signin-heading">Aдминистратор</h2>

        <label for="tuman">Туман</label>
        <select id="tuman" name="tuman" class="form-control" required>
            <option value=""></option>
            <option value="Олмазор">Олмазор</option>
            <option value="Бектемир">Бектемир</option>
            <option value="Миробод">Миробод</option>
            <option value="Мирзо">Мирзо Улуғбек</option>
            <option value="Сирғали">Сирғали</option>
            <option value="Учтепа">Учтепа</option>
            <option value="Яшнобод">Яшнобод</option>
            <option value="Чилонзор">Чилонзор</option>
            <option value="Шайхонтохур">Шайхонтохур</option>
            <option value="Юнусобод">Юнусобод</option>
            <option value="Яккасарой">Яккасарой</option>
        </select>

        <label for="username">Фойдаланучи</label>
        <input type="text" id="username" name="username" class="form-control" placeholder="Фойдаланучи" required
               autofocus>
        <label for="userpass">Пароль</label>
        <input type="password" id="userpass" name="userpass" class="form-control" placeholder="Пароль" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Кириш</button>
    </form>

</div> <!-- /container -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo asset_url('js/ie10-viewport-bug-workaround.js'); ?>"></script>
</body>
</html>