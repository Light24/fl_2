<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <title><?= $mainTitle ?></title>
        <link href="/assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/assets/lib/kendo/styles/kendo.common.min.css" rel="stylesheet">
        <link href="/assets/lib/kendo/styles/kendo.default.min.css" rel="stylesheet">
        <link href="/assets/lib/kendo/styles/kendo.bootstrap.min.css" rel="stylesheet">
        <link href="/assets/lib/pnotify/jquery.pnotify.default.css" rel="stylesheet">
        <link href="/assets/control/css/control.css" rel="stylesheet">


        <link class="include" rel="stylesheet" type="text/css" href="/assets/dist/jquery.jqplot.min.css" />

        <link rel="stylesheet" type="text/css" href="/assets/dist/examples/examples.min.css" />
        <link type="text/css" rel="stylesheet" href="/assets/dist/examples/syntaxhighlighter/styles/shCoreDefault.min.css" />
        <link type="text/css" rel="stylesheet" href="/assets/dist/examples/syntaxhighlighter/styles/shThemejqPlot.min.css" />



    </head>
    <body>
        <div id="cc_main_navbar" class="navbar navbar-static-top">
            <div class="navbar-inner">
                <!--<a class="brand" href="#"><?= $mainTitle ?></a>-->
                <ul class="nav">
                    <li class="active"><a class="brand" data-goto-module="controlcenter" href="/admin/module/controlcenter/modules"><?= $mainTitle ?></a></li>
                    <?php foreach ($topModules as $module): ?>
                        <li><a data-goto-module="<?= $module->name ?>" href="<?= $module->url ?>" title="<?= $module->description ?>"><?= $module->title ?></a></li>
                    <?php endforeach; ?>
                    <li id="cc_modules_before">&nbsp;</li>
                    <li id="cc_main_loader" class="b-loader" style="display: none;"></li>
                </ul>
                <ul class="nav pull-right">
                    <li><a href="/" target="_blank">На сайт</a></li>
                    <li class="divider-vertical"></li>
                    <li><a href="/admin/login">Выход</a></li>
                </ul> 

            </div>
        </div>
        <div id="cc_main_content" class="b-main_content">
        </div>

        <script type="text/javascript">
            var ccModules = {
            "controlcenter": {title: 'CardLab Loyalty Solutions', description: 'CardLab Loyalty Solutions', url:'/admin/module/controlcenter/modules'},
<?php $i = 0;
foreach ($modules as $module):
    ?>
    <?php
    if ($i != 0) {
        echo ',';
    }
    echo "'{$module->name}': {title: '{$module->title}', description: '{$module->description}', url: '{$module->url}'}"
    ?>
    <?php $i++;
endforeach;
?>
            };
        </script>
        <script type="text/javascript" src="/assets/lib/jquery/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="/assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/assets/lib/kendo/js/kendo.web.min.js"></script>
        <script type="text/javascript" src="/assets/lib/kendo/js/cultures/kendo.culture.ru-RU.min.js"></script>
        <script type="text/javascript" src="/assets/lib/pnotify/jquery.pnotify.min.js"></script>
        <script type="text/javascript" src="/assets/lib/ckeditor/ckeditor.js"></script>
        <script type="text/javascript" src="/assets/control/js/control.js"></script>


        <script class="include" type="text/javascript" src="/assets/dist/jquery.jqplot.min.js"></script>
        <script type="text/javascript" src="/assets/dist/examples/syntaxhighlighter/scripts/shCore.min.js"></script>
        <script type="text/javascript" src="/assets/dist/examples/syntaxhighlighter/scripts/shBrushJScript.min.js"></script>
        <script type="text/javascript" src="/assets/dist/examples/syntaxhighlighter/scripts/shBrushXml.min.js"></script>

        <script class="include" type="text/javascript" src="/assets/dist/plugins/jqplot.pieRenderer.min.js"></script>
    
       
       
         <script class="include" language="javascript" type="text/javascript" src="/assets/dist/plugins/jqplot.dateAxisRenderer.min.js"></script>
  <script class="include" language="javascript" type="text/javascript" src="/assets/dist/plugins/jqplot.canvasTextRenderer.min.js"></script>
  <script class="include" language="javascript" type="text/javascript" src="/assets/dist/plugins/jqplot.canvasAxisTickRenderer.min.js"></script>
  <script class="include" language="javascript" type="text/javascript" src="/assets/dist/plugins/jqplot.categoryAxisRenderer.min.js"></script>
  <script class="include" language="javascript" type="text/javascript" src="/assets/dist/plugins/jqplot.barRenderer.min.js"></script>
    
    <script class="include" language="javascript" type="text/javascript" src="/assets/default/js/maskedinput.js"></script>
  
     <script type="text/javascript" src="/assets/dist/examples/example.min.js"></script>
    </body>
</html>