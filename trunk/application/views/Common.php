<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=0">
        <meta name="" content="">
        <meta name="" content="">
        <?php echo $headers ?>
        <title><?= $title . $pageTitle ?></title>
        <link rel="icon" href="/favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />


        <!-- Bootstrap CSS -->
        <link href="/assets/default/css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="/assets/default/css/base.css" rel="stylesheet">

    <!--[if lte IE 8]><script src="http://phpbbex.com/oldies/oldies.js" charset="utf-8"></script><![endif]-->

        <?php
        foreach ($styles as $style)
            echo HTML::style($style) . "\r\n\t";
            ?>




        <link rel="stylesheet" type="text/css" media="screen" href="/assets/default/css/jquery.fancybox.css" />
<link rel="stylesheet" type="text/css" media="screen" href="/assets/default/js/helpers/jquery.fancybox-thumbs.css" />

        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>
        <!-- Bootstrap Core JavaScript -->
       
        <script src="/assets/default/js/bootstrap.min.js"></script>
         <script type="text/javascript" src="/assets/default/js/jquery.fancybox.js"></script>
        <script type="text/javascript" src="/assets/default/js/helpers/jquery.fancybox-thumbs.js"></script>

        <script src="/assets/default/js/script.js"></script>
        <script src="/assets/default/js/jquery.tooltip.js"></script>
        <script src="/assets/default/js/validator.js"></script><!-- TODO регистрация/авторизация. Разбить файл на несолько и включить каждый из получившихся файлов в свой модуль -->

        <?php
        foreach ($scripts as $script)
            echo HTML::script($script) . "\r\n\t"
            ?>

    <body class="<?= $bodyClass ?>">
        <?= $header ?>
        <?= $side_left ?>
        <div class = "right-element">
          <?= $content ?>
        </div>
        <?= $side_right ?>
        <?= $footer ?>
    </body>
</html>