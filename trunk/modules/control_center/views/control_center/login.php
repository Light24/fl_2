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
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="span6 offset3">
                    <div class="hero-unit">
                        <form class="form-horizontal" action="" method="POST">
                            <h2>Вход</h2>
                            <p></p>
                            <div class="control-group">
                                <input class="input-block-level" type="text" name="login" placeholder="Логин">
                            </div>
                            <div class="control-group">
                                <input class="input-block-level" type="password" name="password" placeholder="Пароль">
                            </div>
                            <div class="control-group">
                                <label class="checkbox">
                                    <input type="checkbox" name="remenber" value="remember"> Запомнить
                                </label>
                            </div>
                            <div class="control-group">
                                <button class="btn btn-large btn-primary" type="submit">Войти</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>