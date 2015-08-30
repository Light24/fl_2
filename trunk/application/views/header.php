<header>
    <div class="container">
        <div class="row">
            <nav>
                <a href="/">
                    <div class="logo">
                        <img class="logotype img-circle" src="/assets/default/img/logo.png" alt="logo" />
                        <p class="logo-txt">Name
                            <br> <span>Company</span>
                        </p>
                    </div>
                </a>
                <ul class="navbar">
                    <li><a href="/" class="active">Все вопросы</a>
                    </li>
                    <li>
                        <a href="/question/ask">
                            <img class="que" alt="" src="/assets/default/img/que.png">Спросить</a>
                    </li>
                    <li>
                        <a href="/user/leaders">
                            <img class="starmenu" alt="" src="/assets/default/img/starmenu.png">Лидеры</a>
                    </li>

                </ul>
                <? if (isset($user['id']) && $user['id'] != '') { ?>
                    <div class="dropelement dropdown">


                        <button class="btn btn-drop dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="false">
                            <img title="<?= $user['fio'] ?>" class="head-img img-circle" alt="<?= $user['fio'] ?>" <?if($user['photo']!=''){?> src="/assets/default/avatar/<?=$user['photo']?>"<?}else{?>    
                             src="/assets/default/img/Avatar.png" <?}?>><span class="caret"></span></button>

                        <ul class="dropdown-menu drop-head" role="menu" aria-labelledby="dropdownMenu1">
                            <li><a role="menuitem" tabindex="-1" href="/user/profile/messages">  <img class="btnimg" src="/assets/default/img/message.png" alt="msg">Сообщение</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="/user/profile"> <img class="btnimg" src="/assets/default/img/write.png" alt="r">Личный кабинет</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="/user/setting">  <img class="btnimg" src="/assets/default/img/custom.png" alt="n">Настройки</a></li>
                         <li role="exit"><a role="menuitem" tabindex="-1" href="/user/profile/logout">Выйти</a></li>
                        </ul>
                    </div>

                    <div <?if(Arr::get($_SESSION, 'isMsg')==0){?> style="display: none" <?}?> class="badge-top">
                        <a href="/user/profile/messages" class="active">
                            <img src="/assets/default/img/call.png" class="dz" alt="dz"><i class="badge">
                            <?=Arr::get($_SESSION, 'isMsg')?>
                            </i>
                        </a>
                    </div>

                <? } else {
                    ?>
                    <div class="registrandenter">
                        <a href="/user/registration" class="btn btn-reg2">Регистрация</a>  

                        <button type="button" class="btn  btn-enter" data-toggle="modal" data-target="#myModal">
                            Вход
                        </button>



                    </div>
                <? } ?>

                <div class="search-bar">
                   <form role="search" class="search-form" method="GET" action='/<?= $catsPrefix ?>/cats<? if (isset($uid) && $uid > 0) echo '/' . $uid ?>/<?= $cid ?>'>
                        <div class="form-group">
                            <div class="loop"></div>
                            <input type="text" class="form-control" name="q" placeholder="">
                        </div>
                        <button type="submit" class="btn btn-search">поиск</button>
                    </form>
                </div>



            </nav>

        </div>
    </div>
</header>

<?
  $action     = Request::current()->action();
  if ($action != 'ask')
  {
?>
<div class="question">
    <div class="container">
        <div class="quest-form">
            <form class="fixed" id="contact-form" name="contact-form" method="post" action="/question/ask">
                <fieldset>
                    <textarea style="max-width: 637px;max-height: 120px;" id="message" name="message" rows="10" cols="25" placeholder="Напишите свой вопрос..."></textarea>
                </fieldset>

            <div class="left-form">
                <p class="col-z"><span id="currCountLet">0</span>/170</p>
            </div>

            <input class="btn btn-submit" id="submit" type="submit" name="submit" value="Задать вопрос">
            </form>

        </div>
    </div>
</div>

<?}?>


<div class="content">
    <div class="container">
        <div class="row">